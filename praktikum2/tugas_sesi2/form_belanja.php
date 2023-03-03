<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <div class="container col-md-12;" style="display: flex; padding: 5vw 1vw 2vw 1vw">
            <div class="col-md-8">
                <h2>Belanja Online</h2>
                <form action="form_belanja.php" method="POST" style="margin-top: 1vw; margin-left: 0.1vw;">
                    <div class="form-group row">
                        <label for="cust_name" class="col-4 col-form-label">Nama Customer</label> 
                        <div class="col-8">
                            <input id="cust_name" name="cust_name" placeholder="Masukkan nama customer" type="text" required="required" class="form-control">
                        </div>
                    </div>
            
                    <div class="form-group row">
                        <label class="col-4">Produk (choose one)</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="product" id="product_0" type="radio" required="required" class="custom-control-input" value="TV"> 
                                <label for="product_0" class="custom-control-label">TV</label>
                            </div>
            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="product" id="product_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
                                <label for="product_1" class="custom-control-label">Kulkas</label>
                            </div>
            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="product" id="product_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
                                <label for="product_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="product" id="product_3" type="radio" required="required" class="custom-control-input" value="AC"> 
                                <label for="product_3" class="custom-control-label">AC</label>
                            </div>
                        </div>
                    </div>
            
                    <div class="form-group row">
                        <label for="amount" class="col-4 col-form-label">Jumlah Barang</label> 
                        <div class="col-8">
                            <input id="amount" name="amount" placeholder="Masukkan jumlah produk" type="text" required="required" class="form-control">
                        </div>
                    </div> 
            
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <table class="table text-uppercase">
                    <tr class="table-primary">
                        <th colspan="3">Daftar Harga</th>
                    </tr>
        
                    <tr>
                        <td>TV</td>
                        <td>:</td>
                        <td id="price_tv" name="price">Rp 4.200.000</td>
                    </tr>
        
                    <tr>
                        <td>Kulkas</td>
                        <td>:</td>
                        <td id="price_kulkas" name="price">Rp 3.100.000</td>
                    </tr> 
                    
                    <tr>
                        <td>Mesin Cuci</td>
                        <td>:</td>
                        <td id="price_mesincuci" name="price">Rp 3.800.000</td>
                    </tr> 
                    
                    <tr>
                        <td>AC</td>
                        <td>:</td>
                        <td id="price_ac" name="price">Rp 5.500.000</td>
                    </tr>
                    
                    <tr class="table-primary">
                        <th colspan="3">harga dapat berubah setiap saat</th>
                    </tr>
                </table>
            </div>
        </div>
    
        <hr>
    
        <div class="container" style="padding: 2.5vw 1vw 2.5vw 1vw";>
            <table class="table table-bordered text-center">
                <tr class="table-primary">
                    <th>Nama</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
    
                <?php require_once "proses_belanja.php"; ?>
    
                <tr>
                    <td><?= $nama_cust; ?></td>
                    <td><?= $produk; ?></td>
                    <td><?= $jumlah_produk; ?></td>
                    <td><?= $format_uang = "Rp " . number_format($harga, 0, ',', '.'); ?></td>
                </tr>
            </table>
        </div>
        <hr>
    
        <div class="text-center justify-content" style="padding: 1.5vw 1vw 1vw 1.5vw">
            <footer class="text-center" style="color: gray;">&copy Maryam Hasnaa' Syamila STT-NF 22TI03</footer>
        </div>
    </div>
</body>
</html>