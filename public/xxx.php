<?php

$xmlString = 'D:\web\web\hahaha_split\public/387020100E_1120001148.di';

$str = file_get_contents($xmlString);
$xml = simplexml_load_string($str, \SimpleXMLElement::class, LIBXML_DTDATTR);
$json = json_encode($xml, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
$array = json_decode($json, true);

$rrr = 0;