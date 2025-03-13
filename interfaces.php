<?php

// Interface - no implementation in here for now
interface PaymentProcessor {
    public function processPayment(float | int $amount): bool; // Using the | operator allows more than one data type of values
    public function refundPayment(float | int $amount): bool;
}

// When a class implements interface -> it needs to use all the method from the interface (Concret Class)
// class StripeProcessor implements PaymentProcessor {}

// Using abstract lets implement certain functions (not required to use all) (Abstract Class)

abstract class OnlinePaymentProcessor implements PaymentProcessor {
    public function __construct(
        protected readonly string $apiKey // using readonly keyword will avoid value changing after initialisation
    ) {}

    // Class that has at least one bastract method should be abstract
    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float $amount): bool;
    abstract protected function executeRefund(float $amount): bool;

    public function processPayment(float | int $amount): bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executePayment($amount);
    }
    public function refundPayment(float | int $amount): bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executeRefund($amount);
    }
}

// Concrete classes (implements all the functions of the interface)
// final keyword -> avoids inheritance of this class / cannot be extended
// Composition helps to reuse the existing code
final class StripeProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strpos($this->apiKey, "sk_") === 0;
    }

    protected function executePayment(float $amount): bool {
        echo "Processing Stripe payment of $amount\n";
        return true;
    }
    protected function executeRefund(float $amount): bool {
        echo "Processing Stripe refund of $amount\n";
        return true;
    }
}
class PayPalProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strlen($this->apiKey) === 32;
    }

    protected function executePayment(float $amount): bool {
        echo "Processing PayPal payment of $amount\n";
        return true;
    }
    protected function executeRefund(float $amount): bool {
        echo "Processing PayPal refund of $amount\n";
        return true;
    }
}

class CashPaymentProcessor implements PaymentProcessor {
    public function processPayment(float | int $amount): bool {
        echo "Cash payment...";
        return true;
    }
    public function refundPayment(float | int $amount): bool {
        echo "Cash refund...";
        return true;
    }
}

class OrderProcessor {
    // Runtime inheritance -> PaymentProcessor can be changed during runtime (not predefined)
    // Composition -> passing classes/objects around to the base class (more preferred than inheritance)
    // -- Loose Coupling and Easier testing (for unit testing)
    public function __construct(private PaymentProcessor $paymentProcessor) {}

    public function processOrder(float | int $amount, string | array $items): void {
        if (is_array($items)) {
            $itemsList = implode(', ', $items);
        } else {
            $itemsList = $items;
        }

        echo "Processing order for items: $itemsList\n";
        
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n";
        } else {
            echo "Order processing failed\n";
        }
    }

    public function refundOrder(float $amount): void {
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order refunded successfully\n";
        } else {
            echo "Order refund failed\n";
        }
    }
}

$stripeProcessor = new StripeProcessor("sk_test_123456");
$paypalProcessor = new PayPalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.00, "Book");
$paypalOrder->processOrder(150.00, ["Book", "Movie"]);
$cashOrder->processOrder(50.00, ["Apple", "Orange"]);

$stripeOrder->refundOrder(25.00);
$paypalOrder->refundOrder(50.00);
$cashOrder->refundOrder(10.00);