<?php
require 'services/MailProvide1.php';
$mail = new MailProvider1();
$mail->subscribe('sharvank1515@gmail.com','Kumar','This is the HTML message body <b>in bold!</b>','Here is the subject');

// $stripe = new \Stripe\StripeClient(
//   'sk_test_4eC39HqLyjWDarjtT1zdp7dc'
// );
// $stripe->charges->create([
//   'amount' => 2000,
//   'currency' => 'usd',
//   'source' => 'tok_amex',
//   'description' => 'My First Test Charge (created for API docs)',
// ]);
?>