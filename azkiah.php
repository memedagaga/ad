<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Diskon</title>
       <style>
        body { 
            font-family: sans-serif; 
            margin: 50px; 
            background-color: lightgray; 
        }
        .box { 
            background-color: white; 
            padding: 20px; 
            max-width: 350px; 
            border: 2px solid black; 
        }
        input { 
            display: block; 
            width: 95%; 
            margin-bottom: 15px; 
            padding: 5px; 
        }
        button { 
            background-color: green; 
            color: white; 
            padding: 10px; 
            width: 100%; 
            cursor: pointer;
            font-weight: bold;
        }
        button:hover { 
            background-color: darkgreen; 
        }
    </style>
</head>
<body>

<div class="box">
    <h3>Hitung Diskon</h3>
    <form method="POST">
        Total Belanja:
        <input type="number" name="total">
        <button type="submit" name="hitung">HITUNG</button>
    </form>

<?php
if (isset($_POST['hitung']) && isset($_POST['total'])) {
    $total = $_POST['total'];

    if ($total <= 200000) {
        $diskon = $total * 0.05;
    } else {
        $diskon = (200000 * 0.05) + (($total - 200000) * 0.1);
    }

    $bayar = $total - $diskon;

    echo "<p>Total: Rp $total</p>";
    echo "<p>Diskon: Rp $diskon</p>";
    echo "<p>Bayar: Rp $bayar</p>";
}
?>
</div>

</body>
</html>