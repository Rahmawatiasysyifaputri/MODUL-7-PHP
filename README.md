# MODUL-7-PHP
kita harus connect ke php terlebuh dahulu
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/connect%20php.PNG?raw=true)

Tabel untuk mengisi data
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/tampil%20data,%20read%20php.PNG?raw=true)

Tampilan form untuk mengisi data
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/tampilan%20form%20untuk%20mengisi%20data,%20form%20create%20php.PNG?raw=true)

Memasukkan Nama Dosen, No. Telpon, lalu klik simpan untuk menambahkan data
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/memasukkan%20data,%20nama%20dan%20no.telepon,%20form-create%20php.PNG?raw=true)

Data berhasil ditambahkan
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/data%20berhasil%20ditambahkan,%20create%20php.PNG?raw=true)

Lalu klik lihat data, maka isi data akan ditampilkan
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/data%20berhasil%20dimasukkan,%20read%20php.PNG?raw=true)

Klik edit jika ingin mengganti atau mengupdate isi data, lalu ganti isi data pada form
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/form%20untuk%20mengedit%20data,%20form-update%20php.PNG?raw=true)

Jangan lupa klik simpan, dan data berhasil diupdate 
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/Data%20berhasil%20di%20update.PNG?raw=true)

Maka isi data akan berubah setelah di update
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/isi%20data%20akan%20berubah%20setelah%20di%20edit%20atau%20update.PNG?raw=true)

Jika ingin menghapus isi data maka klik hapus, lalu pilih oke jika ingin menghapus dan klik cancel jika tidak
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/hapus%20data,%20ok%20cancel.PNG?raw=true)

Isi data berhasil dihapus
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/data%20berhasil%20dihapus,%20delete%20php.PNG?raw=true)

Setelah berhasil dihapus, maka isi akan hilang atau kembali seperti semula
![alt text](https://github.com/Rahmawatiasysyifaputri/MODUL-7-PHP/blob/master/data%20akan%20hilang%20setelah%20dihapus.PNG?raw=true)

Jawaban soal
1. $connect = mysqli_connect($host, $uname, $pass, $db);

2. -Langkah pertama, install XAMPP pada komputer atau laptop terlebih dahulu
   -Lalu setelah terinstall jalankan APACHE dan MySQL pada XAMPP
   -Buka browser lalu ketik ketikkan localhost/phpmyadmin
   -Pada menu Database, masukkan nama database yang diinginkan, kemudian klik Create. 
   -Setelah di create buat table pada database tersebut. Masukkan nama table yang diinginkan, lalu masukkan jumlah kolom yang ingin dibuat. Lalu klik GO
   -Buat field untuk ID, NAMA, ALAMAT dimana ID mempunyai type data INT (integer), Lenght Value (10) dan bersifat AI(Auto Increment) dan juga bersifat sebagai primary key. Sedangkan untuk NAMA dan ALAMAT  kita cuku isi type data nya varchar dan panjang karakter (Lenght Values) masing-masing 25 dan 50.
   -Jika sudah terisi, klik save pada pojok kanan bawah
   -sudah selesai
   
3. $query = "SELECT * FROM dosen";

4. $query = "UPDATE dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE id_dosen = $id_dosen";

5. $query = "DELETE FROM dosen WHERE id_dosen = $id_dosen";
   
