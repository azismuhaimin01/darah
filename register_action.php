<?php
    include "koneksi.php"; $Nama = addslashes(strip_tags ($_POST['nama'])); $Email = addslashes(strip_tags ($_POST['email'])); $Password = addslashes(strip_tags ($_POST['password'])); $Konfirmasi = addslashes(strip_tags ($_POST['konfirmasi'])); $Alamat = addslashes(strip_tags ($_POST['alamat'])); $Telp = addslashes(strip_tags ($_POST['telp'])); $Kelamin = addslashes(strip_tags ($_POST['kelamin']));//script ini untuk mengecek apakah form sudah terisi semua
    if ($Nama&&$Email&&$password&&$Konfirmasi&&$Alamat&&$Telp&&$Kelamin) {
    //berfunsgi untuk mengecek form tidak boleh lebih dari 10 if (strlen($username) > 10){
    echo "Nama tidak boleh lebih dari 10 karakter";
}
else {
    //password harus 6-25 karakter
    if (strlen($password) > 25 || strlen($konfirmasi) < 8){
        echo "Password harus antara 6-25 karakter";
    }
    else {
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $konfirmasi){
            $sql_get = mysql_query ("SELECT * FROM db_user WHERE nama = '$nama'");
            $num_row = mysql_num_rows($sql_get);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($num_row ==0) {
                $password = md5($password);
                $confirm = md5($confirm);
                $sql_insert = mysql_query("INSERT INTO db_user VALUES ('','$nama','$password','$confirm')");
                echo "Pendaftaran berhasil. Login <a href='login.php'>disini</a>";
            }
            else {
                echo "Username sudah terdaftar";
            }
        }   else {
            echo "Password yang kamu masukan tidak sama!";
            }
        }
    }
} else {
echo "Tolong penuhi form pendaftaran!";
}