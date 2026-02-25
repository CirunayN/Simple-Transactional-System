<?php
require_once 'models/Transaction.php';

class process{
    public function showForm()
    {
        require 'views/header.php';
        require 'views/form.php';
        require 'views/footer.php';
    }

    public function processTransaction()
    {
        $itemName = $_POST['item_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $transaction = new Transaction($itemName, $price, $quantity);

        $subtotal = $transaction->computeSubtotal($price, $quantity);
        $discount = $transaction->computeDiscount($subtotal);
        $tax = $transaction->computeTax($subtotal - $discount);
        $finalAmount = $transaction->computeFinalAmount($subtotal, $discount, $tax);

        require 'views/header.php';
        require 'views/summary.php';
        require 'views/footer.php';
    }
}