<?php
    $access_token = 'WNGbU1wL1lQAo/SgcH42VyliIx1AHhzE5OxHtcdgaG3YJe5BlFCbk2KPIwl/1kEuoCWJg3gBzpHC7tZ/Fbzkn+UrA2fYrEDoZC9mpeUu9Y1F1QpgX4IsMkTf2K7b8rfyXGVKtI0YBM7hIvTcWdxFNgdB04t89/1O/w1cDnyilFU=';
    $url = 'https://api.line.me/v1/oauth/verify';
    $headers = array('Authorization: Bearer ' . $access_token);
    $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;