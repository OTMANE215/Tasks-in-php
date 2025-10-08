<?php 
function CalcTotalPrice($names, $prices, $quantities) {
    $totalBeforeDiscount = 0;
    $totalAfterDiscount = 0;

    for ($i = 0; $i < count($names); $i++) {
        // Calculate product total
        $productTotal = $prices[$i] * $quantities[$i];
        $totalBeforeDiscount += $productTotal;

        // Apply 5% discount if quantity > 5
        if ($quantities[$i] > 5) {
            $productTotal *= 0.95;
        }

        $totalAfterDiscount += $productTotal;
    }

    // Apply global 10% discount if total > 100
    if ($totalBeforeDiscount > 100) {
        $totalAfterDiscount *= 0.90;
    }

    // Format numbers for better readability
    $totalBeforeDiscount = number_format($totalBeforeDiscount, 2);
    $totalAfterDiscount = number_format($totalAfterDiscount, 2);

    return " Total before global discount: $totalBeforeDiscount |  Total after discounts: $totalAfterDiscount";
}

// Example usage
$names = ["Laptop", "Souris", "Clavier"];
$prices = [40, 10, 20];
$quantities = [2, 4, 8];

echo CalcTotalPrice($names, $prices, $quantities);
?>



<?php



/* function calcTotalPrice($cart) {
    $totalBeforeDiscount = 0;
    $totalAfterProductDiscount = 0;

    foreach ($cart as $item) {
        $itemTotal = $item['price'] * $item['quantity'];
        $totalBeforeDiscount += $itemTotal;

        // 5% discount for bulk products
        if ($item['quantity'] > 5) {
            $itemTotal *= 0.95;
        }

        $totalAfterProductDiscount += $itemTotal;
    }

    // 10% global discount if total > 100
    if ($totalBeforeDiscount > 100) {
        $totalAfterProductDiscount *= 0.90;
    }

    return "Total before global discount: {$totalBeforeDiscount} | Total after discounts: {$totalAfterProductDiscount}";
}

// Example
$cart = [
    ["name" => "Laptop", "price" => 40, "quantity" => 2],
    ["name" => "Mouse", "price" => 10, "quantity" => 4],
    ["name" => "Keyboard", "price" => 20, "quantity" => 8]
];

echo calcTotalPrice($cart);
?>
 */
