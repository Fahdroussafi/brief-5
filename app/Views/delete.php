<?php

if (isset($_POST['id'])) {
    $existFlight = new FlightController();
    $existFlight->deleteFlight();
}
