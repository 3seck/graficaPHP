<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
  "11219067ad682b8ac42e", // Replace with 'key' from dashboard
  "cddcc8768222ed84f11f", // Replace with 'secret' from dashboard
  "1760111", // Replace with 'app_id' from dashboard
  array(
    'cluster' => 'eu' // Replace with 'cluster' from dashboard
  )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i = 0; $i < 10; $i++) {
  $pusher->trigger('price-btcusd', 'new-price', array(
    'value' => rand(0, 5000)
  ));
  sleep(1);
}