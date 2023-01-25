<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="">Tgl Cek in</label>
                </td>
                <td>
                    <input type="text" name="cek" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tgl Cek out</label>
                </td>
                <td>
                    <input type="text" name="out" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tipe bayar</label>
                </td>
                <td>
                    <select name="tipe">
                        <option value="">--- Pilihan ---</option>
                        <option value="Standart">Standart</option>
                        <option value="Superior">Superior</option>
                        <option value="Deluxe">Deluxe</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Proses"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $cek = $_POST['cek'];
        $out = $_POST['out'];
        $tipe = $_POST['tipe'];
        $std = 100000;
        $spr = 200000;
        $dlx = 500000;

        if ($cek <= $out) {
            if ($tipe == "Standart") {
                echo "Tgl benar <br>";
                if ($cek == $out) {
                    echo "Total bayar : ", $std;
                } else {
                    echo "Total bayar : ", ($out - $cek) * $std;
                }
            } elseif ($tipe == "Superior") {
                echo "Tgl benar <br>";
                echo "Total bayar : ", ($out - $cek) * $spr;
            } elseif ($tipe == "Deluxe") {
                echo "Tgl benar <br>";
                echo "Total bayar : ", ($out - $cek) * $dlx;
            }
        } else {
            echo "tgl salah";
        }
    }
    ?>
</body>

</html>