<?php 
$nama_cust = isset($_POST['cust_name']) ? $_POST['cust_name'] : '';
$produk = isset($_POST['product']) ? $_POST['product'] : '';
$jumlah_produk = isset($_POST['amount']) ? $_POST['amount'] : '';

if (isset($_POST['submit'])){
    $harga = $_POST['produk'];
}

if (isset($produk) && $produk == 'TV'){
    $harga = 4200000 * intval($jumlah_produk);
    echo $harga;
}

elseif (isset($produk) && $produk == 'Kulkas'){
    $harga = 3100000 * intval($jumlah_produk);
    echo $harga;
}

elseif (isset($produk) && $produk == 'Mesin Cuci'){
    $harga = 3800000 * intval($jumlah_produk);
    echo $harga;
}

else{
    $harga = 5500000 * intval($jumlah_produk);
    echo $harga;
}

ob_clean();
?>