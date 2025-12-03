<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h2>Electricity Bill Calculator (Domestic)</h2>
    <form method="post" action="">
        Enter Units Consumed: <input type="number" name="units" required>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $units = intval($_POST['units']);
        $bill = 0.0;
        $fixed_charge = 40;  // assume for simplicity

        if ($units <= 50) {
            $bill = $units * 3.25;
        } elseif ($units <= 100) {
            $bill = 50 * 3.25 + ($units - 50) * 4.05;
        } elseif ($units <= 150) {
            $bill = 50 * 3.25 + 50 * 4.05 + ($units - 100) * 5.10;
        } elseif ($units <= 200) {
            $bill = 50 * 3.25 + 50 * 4.05 + 50 * 5.10 + ($units - 150) * 6.95;
        } elseif ($units <= 250) {
            $bill = 50 * 3.25 + 50 * 4.05 + 50 * 5.10 + 50 * 6.95 + ($units - 200) * 8.20;
        } else {
            // above 250 units: use non-telescopic single rate (we pick 6.40 for up to 300)
            // for simplicity assume all units charged at 6.40 if >250 (you can extend for higher slabs)
            $bill = $units * 6.40;
        }

        $total = $bill + $fixed_charge;

        echo "<h3>Total Units: {$units}</h3>";
        echo "<h3>Energy Charge: ₹". number_format($bill, 2) ."</h3>";
        echo "<h3>Fixed Charge: ₹". number_format($fixed_charge, 2) ."</h3>";
        echo "<h2>Total Bill Amount: ₹". number_format($total, 2) ."</h2>";
    }
    ?>
</body>
</html>
