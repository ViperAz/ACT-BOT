<?php
    $access_token = '35gfxTnQPLaU/T2IZm6KkqAgpHuU4bjqM5TJyneMAax0bX22v5AIozvk1KPDZzTXoCWJg3gBzpHC7tZ/Fbzkn+UrA2fYrEDoZC9mpeUu9Y3EJHRMah2X1te6Lpo+Rj+xIxXMsN6c/YYOmKnbvz0xwAdB04t89/1O/w1cDnyilFU=';
    $url = 'https://api.line.me/v1/oauth/verify';
    $headers = array('Authorization: Bearer ' . $access_token);
    $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;