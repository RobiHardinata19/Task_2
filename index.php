<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>Toko</h1>
            <h1 class="subheading">Back-<span>packing</span></h1>
        </div>

        <div class="wrap">
            <div class="halaman">Halaman Produk</div>
            <div class="produk">
                <div class="img-box"><img src="banner-1.png" alt=""></div>
                <div class="form">
                    <div class="from-wrap">
                        <h2>Input data :</h2>
                        <form action="action.php" method="GET">
                            <table>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td> : </td>
                                    <td><input name="nama" type="text"></td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Warna Produk</td>
                                    <td> : </td>
                                    <td><input name="warna" type="text"></td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Banyak Produk</td>
                                    <td> : </td>
                                    <td><input name="banyak" type="text"></td>
                                </tr>
                            </table>
                            <button class="submit">BELI</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>