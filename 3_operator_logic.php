<!DOCTYPE html>
<html lang="en">

<head>
    <title>3_operator_logic</title>
</head>

<body>

    <form action="3_operator_logic.php" method="POST">
        <label>Nilai n</label>
        <input type="text" name="first" />
        <label>Nilai m</label>
        <input type="text" name="last" />
        <input type="submit" name='send' value="Kirim">
    </form>
</body>

</html>

<?php

if (isset($_POST['send'])) {
    $pembagi = $_POST['first'];
    $awal = $_POST['first'];
    $akhir = $_POST['last'];
    $count = 0;
    while ($awal - $akhir >= 0) {
        $awal = $awal - $akhir;
        $count++;
    }
    echo $pembagi . ' : ' . $akhir . ' = ' . $count;
}
?>