<!DOCTYPE html>
<html>
<head>
    <title>Form Rental</title>
    <style>
        input, select {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" name="frmpost" action="">
        <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center">
                <td><h2><b>Masukkan Waktu Rental Motor</b></h2></td>
            </tr>
            <tr>
                <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>Merk motor</td>
                            <td>:</td>
                            <td>
                                <select name="nama">
                                    <option value="Honda">Honda CBR</option>
                                    <option value="Yamaha">Yamaha R16</option>
                                    <option value="Suzuki">Kawasaki ZX-25R</option>
                                    <option value="Kawasaki">Kawasaki Ninja Karbu</option>
                                    <option value="H2R">Kawasaki H2R</option>
                                    <option value="BMW">BMW S1000RR</option>
                                    <option value="Ducati">Ducati Panigale</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Waktu Tgl peminjaman</td>
                            <td>:</td>
                            <td>
                                <select name="tgl">
                                    <option value="1">1 hari</option>
                                    <option value="2">2 hari</option>
                                    <option value="3">3 hari</option>
                                    <option value="4">4 hari</option>
                                    <option value="5">5 hari</option>
                                    <option value="6">6 hari</option>
                                    <option value="7">7 hari</option>
                                    <option value="14">2 minggu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alasan Peminjaman</td>
                            <td>:</td>
                            <td><input name="alasan" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Jaminan jika motor pinjaman rusak sedikit saja</td>
                            <td>:</td>
                            <td>
                                <select name="jaminan">
                                    <option value="KTP">KTP</option>
                                    <option value="kartu">Kartu keluarga</option>
                                    <option value="uang tunai">Uang tunai Rp2.000.000</option>
                                    <option value="dipekerjakan">Kerja tanpa di gajih</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><input type="submit" name="btnOk" value="Simpan" /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form data and display the results
        $nama = $_POST["nama"];
        $tgl_peminjaman = $_POST["tgl"];
        $alasan = $_POST["alasan"];
        $jaminan = $_POST["jaminan"];

        // Calculate rental price based on days
        $harga_per_hari = 300000; // 300 ribu per hari
        $jumlah_hari = intval($tgl_peminjaman);
        $harga_total = $harga_per_hari * $jumlah_hari;

        echo "<table align='center' border='1' cellpadding='0' cellspacing='0' style='margin-top: 20px;'>";
        echo "<tr align='center'><td><h3>Hasil Biodata:</h3></td></tr>";
        echo "<tr><td>Nama: $nama<br>";
        echo "Tanggal Peminjaman: $tgl_peminjaman hari<br>";
        echo "Alasan Peminjaman: $alasan<br>";
        echo "Jaminan: $jaminan<br>";
        echo "Harga Total: Rp" . number_format($harga_total, 0, ',', '.') . "<br></td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
