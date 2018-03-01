<?php
    $access_token = 'Puce7/9Pztu+/Jkc9fmSqUk69e+d9fIVmhb1rvqSYYk1Vk7zpK/zERfK9EvGmcVGoCWJg3gBzpHC7tZ/Fbzkn+UrA2fYrEDoZC9mpeUu9Y2Sc7MPvoMo794tDdS7uWe0cgYQYTNALrjX8GKLohLz2wdB04t89/1O/w1cDnyilFU=';
    $url = 'https://api.line.me/v1/oauth/verify';
    $headers = array('Authorization: Bearer ' . $access_token);
    $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;