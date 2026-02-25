<?php

class Transaction
{
    private $itemName;
    private $price;
    private $quantity;

    public function __construct($itemName, $price, $quantity)
    {
        $this->itemName = strtoupper($itemName);
        $this->price = round($price, 2);
        $this->quantity = $quantity;
    }

    public function computeSubtotal($price, $quantity)
    {
        return $price * $quantity;
    }

    public function computeDiscount($subtotal)
    {
        if ($subtotal > 1000) {
            return $subtotal * 0.10;
        }
        return 0;
    }

    public function computeTax($amountAfterDiscount)
    {
        return $amountAfterDiscount * 0.12;
    }

    public function computeFinalAmount($subtotal, $discount, $tax)
    {
        return $subtotal - $discount + $tax;
    }

    public function formatCurrency($amount)
    {
        return "₱" . number_format($amount, 2);
    }

    public function getItemName()
    {
        return $this->itemName;
    }
}