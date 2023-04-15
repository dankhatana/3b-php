<?php

// Function to calculate the cost of the pizza
function calculateCost($size, $toppings) {
    $cost = 0;
    if ($size == 'L') {
        $cost += 6.00;
    } elseif ($size == 'XL') {
        $cost += 10.00;
    }

    if ($toppings == 1) {
        $cost += 1.00;
    } elseif ($toppings == 2) {
        $cost += 1.75;
    } elseif ($toppings == 3) {
        $cost += 2.50;
    } elseif ($toppings == 4) {
        $cost += 3.35;
    }

    return $cost;
}

// Function to calculate the tax
function calculateTax($amount) {
    return $amount * 0.13;
}

// Function to display the order details
function displayOrder($subtotal, $tax, $total) {
    echo "Subtotal: $" . number_format($subtotal, 2) . "\n";
    echo "Tax (HST): $" . number_format($tax, 2) . "\n";
    echo "Total: $" . number_format($total, 2) . "\n";
}

// Get user input for pizza size and toppings
$size = readline("Enter pizza size (L for Large, XL for Extra Large): ");
$toppings = readline("Enter number of toppings (1-4): ");

// Calculate cost, tax, and total
$cost = calculateCost($size, $toppings);
$tax = calculateTax($cost);
$total = $cost + $tax;

// Display order details
echo "Pizza Size: " . ($size == 'L' ? 'Large' : 'Extra Large') . "\n";
echo "Number of Toppings: $toppings\n";
displayOrder($cost, $tax, $total);