<?php

$mb_string = "これはな"; // this is a unicode modified string
var_dump(strlen($mb_string)); // this will return the unicode string length
var_dump(mb_strlen($mb_string)); // this will return the characters count instead of unicode

$url = "httpis://example.com/path?key=value&special=@#$%";
var_dump(urlencode($url)); // to encode url with special characters
var_dump(urldecode(urlencode($url))); // to decode the encoded url

$html = "<p>This is 'quoted' text & a <a href='#'>link</a>.</p>";
var_dump(htmlentities($html)); // to remove tags to avoid malicious codes by turning them to other characters

$encoded = base64_encode("Hello World!"); // encoding a string
var_dump(base64_decode($encoded)); // decoding an encoded string