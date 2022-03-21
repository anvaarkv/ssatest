<?php

function CalculateVehicles($countofPassengers = 10){
    echo ceil($countofPassengers / 5);
}

CalculateVehicles(20);