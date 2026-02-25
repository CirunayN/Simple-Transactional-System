<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white text-center">
                    <h4>Transaction Summary</h4>
                </div>
                <div class="card-body">

                    <p><strong>Item Name:</strong> <?= $transaction->getItemName(); ?></p>
                    <p><strong>Price:</strong> <?= $transaction->formatCurrency($price); ?></p>
                    <p><strong>Quantity:</strong> <?= $quantity; ?></p>

                    <hr>

                    <p><strong>Subtotal:</strong> <?= $transaction->formatCurrency($subtotal); ?></p>
                    <p><strong>Discount:</strong> <?= $transaction->formatCurrency($discount); ?></p>
                    <p><strong>Tax (12%):</strong> <?= $transaction->formatCurrency($tax); ?></p>

                    <hr>

                    <h5 class="text-primary">
                        <strong>Final Amount:</strong>
                        <?= $transaction->formatCurrency($finalAmount); ?>
                    </h5>

                    <div class="mt-4 text-center">
                        <a href="index.php" class="btn btn-primary">
                            New Transaction
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>