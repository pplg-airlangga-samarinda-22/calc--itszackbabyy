<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <label>Angka 1:</label>
        <input type="number" name="angka1" required>
        <br>
        <label>Angka 2:</label>
        <input type="number" name="angka2" required>
        <br>
        <label>Operator:</label>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    
    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                $hasil = ($angka2 != 0) ? $angka1 / $angka2 : 'Tidak dapat membagi dengan nol';
                break;
            default:
                $hasil = 'Operasi tidak valid';
                break;
        }
        
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
