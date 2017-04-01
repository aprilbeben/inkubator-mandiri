<form action="" method="post">
<input type="number" name="angka1">
<input type"number" name="angka2">
<button type="submit" name="tambah">Tambah</button>
<button type="submit" name="kurang">kurang</button>
<button type="submit"name="bagi">bagi</button>
<button type="submit"name="kali">kali</button>
<button type="submit"name="akar">akar</button>
</form>
<?php
$angka1=$_POST['angka1'];
$angka2=$_POST['angka2'];
$jumlah=0;
if (isset($_POST['tambah'])){
$jumlah=$angka1+$angka2;

}

if (isset($_POST['kurang'])){
$jumlah=$angka1-$angka2;

}
if (isset($_POST['bagi'])){
$jumlah=$angka1/$angka2;

}

if (isset($_POST['kali'])){
$jumlah=$angka1*$angka2;

}

if (isset($_POST['akar'])){
$jumlah=$angka1*(1/$angka2);

}
echo"$jumlah";
?>