<?php
define('PAYFAST_MERCHANT_ID', 'YOUR_MERCHANT_ID');
define('PAYFAST_MERCHANT_KEY', 'YOUR_MERCHANT_KEY');

$data = $_POST;
$pfParamString = '';

foreach ($data as $key => $val) {
  if ($key !== 'signature') {
    $pfParamString .= $key . '=' . urlencode($val) . '&';
  }
}

$pfParamString = rtrim($pfParamString, '&');
$signature = md5($pfParamString);

if ($signature !== $data['signature']) {
  exit;
}

// Confirm payment completed
if ($data['payment_status'] === 'COMPLETE') {
  // Save or email confirmation
  file_put_contents(
    __DIR__ . '/payfast-log.txt',
    date('Y-m-d H:i:s') . " Donation received: R{$data['amount_gross']}\n",
    FILE_APPEND
  );
}

http_response_code(200);
