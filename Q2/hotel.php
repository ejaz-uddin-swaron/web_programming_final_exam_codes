<?php

$room_type = $_POST["room_type"];
$weekday_nights = $_POST["weekday_nights"];
$weekend_nights = $_POST["weekdend_nights"];
$guests = $_POST["guests"];

// echo $room_type .  $weekday_nights . $weekend_nights . "<br>";

$weekday_rate_per_night;

if($room_type == "standard") $weekday_rate_per_night = 3000;
else if($room_type == "deluxe") $weekday_rate_per_night = 5000;
else if($room_type == "suite") $weekday_rate_per_night = 8000;

$weekend_rate_per_night = $weekday_rate_per_night + ($weekday_rate_per_night * 0.25);
$room_charge = ($weekday_nights * $weekday_rate_per_night) + ($weekend_nights * $weekend_rate_per_night);

$total_number_of_nights = $weekday_nights + $weekend_nights;
$discount;

if($total_number_of_nights < 3) $discount = 0;
else if($total_number_of_nights >= 3 && $total_number_of_nights <= 6) $discount = 0.05 * $room_charge;
else if($total_number_of_nights >= 7) $discount = 0.1 * $room_charge;

$extra_guest_charge = 0;

if($guests > 2)
{
    $extra_guest = $guests - 2;
    $extra_guest_charge = $extra_guest * $total_number_of_nights * 800;
}

$subtotal = ($room_charge - $discount) + $extra_guest_charge;
$service_and_vat  = 0.15 * $subtotal;
$final_bill = $subtotal + $service_and_vat;

echo "Room Charge: " . $room_charge . " TK" .  "<br>" . "Discount: " . $discount . " TK" . "<br>" . "Extra Guest Charge: " . $extra_guest_charge . " TK" . "<br>" . "Service Charge &VAT: " . $service_and_vat . " TK" . "<br>" . "Final Bill: " . $final_bill  . " TK" . "<br>";

?>