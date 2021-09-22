<?php
class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shōnen Jump";
$produk3->harga = 40000;


$produk4 = new Produk();
$produk4->judul = "Arena of Valor";
$produk4->penulis = "Tencent Games";
$produk4->penerbit = "Garena";
$produk4->harga = 30000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel(); 
?>