# Dokumentasi Sistem Informasi Sederhana dengan tema Peternakan
Berikut ini adalah dokumentasi dari Sistem Informasi Peternakan.

## Requirements
- [PHP](https://www.php.net/) 7.2.28 atau lebih baru.
- [Code Igniter](https://codeigniter.com/) 3.1.11.
- [XAMPP](https://www.apachefriends.org/download.html) 7.2.28 atau lebih baru.
- [Visual Studio Code](https://code.visualstudio.com/) atau text editor lainnya.

## Instalasi
  1. Download [Code Igniter](https://codeigniter.com/) dan kemudian ekstrak.
  2. Buka [Code Igniter](https://codeigniter.com/) dan jalankan dengan browser menggunakan bantuan [XAMPP](https://www.apachefriends.org/download.html).
  3. Kemudian buka text editor anda, dan buka [Code Igniter](https://codeigniter.com/) di dalamnya.
  
## Penggunaan
   
   ### 1. _autoload.php_
   File ini berfungsi untuk memuat seluruh **_library_** atau **_helper_** secara otomatis kedalam **Code Igniter**.
   1. Pertama, buka folder **application/config** kemudian buka file **_autoload.php_**
   
      ![imgDokumentasi1](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_1.png)
      
   2. Kemudian temukan baris kode dibawah ini :
      ```php
      $autoload['libraries'] = array();
      ```
   3. Kemudian ubah menjadi seperti ini :
      ```php
      $autoload['libraries'] = array('database','form_validation','session');
      ```
   4. Kode tersebut berfungsi untuk memuat library **_database, form_validation, dan session_** yang akan digunakan nanti.
   5. Kemudian temukan baris kode dibawah ini :
      ```php
      $autoload['helper'] = array();
      ```
   6. Kemudian ubah menjadi seperti ini :
      ```php
      $autoload['helper'] = array('url');
      ```
   7. Kode tersebut berfungsi untuk memuat helper **_url_** yang akan digunakan nanti.
          
   ### 2. _config.php_
   File ini berfungsi untuk melakukan konfigurasi terhadap **Code Igniter**.
   1. Pertama, buka folder **application/config** kemudian buka file **_config.php_**.
   
      ![imgDokumentasi2](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_1.png)
      
   2. Kemudian temukan baris kode dibawah ini :
      ```php
      $config['base_url'] = '';
      ```
   3. Kemudian ubah baris kode tersebut seperti ini :
      ```php
      $config['base_url'] = 'http://localhost/Git/E41181277_SIPeternakan/codeigniter/';
      ```
   4. Kode tersebut berfungsi untuk memberi nilai atau isi dari fungsi **_base_url_** yang nanti akan digunakan.
   5. Isi atau nilai dari variabel tersebut tergantung direktori yang anda gunakan atau domain yang anda gunakan.
   6. Kemudian temukan baris kode dibawah ini :
      ```php
      $config['index_page'] = 'index.php';
      ```
   7. Kemudian ubah baris kode tersebut seperti ini :
      ```php
      $config['index_page'] = '';
      ```
   8. Tujuan kita mengosongkan nilai dari variabel tersebut adalah, ketika menggunakan fungsi **_base_url_** dan menggunakan file **_.htaccess_** kita tidak perlu menambahkan **index.php** didalam URL.
   
   ### 3. _database.php_
   ### 4. _routes.php_
   ### 5. _Admin.php_
   ### 6. _M_Admin.php_
   ### 7. _header.php dan footer.php_
   ### 8. _login.php_
   ### 9. _register.php_
   ### 10. _home.php_
   ### 11. _data_sapi.php_
   ### 12. _data_kandang.php_

