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
   
      ![imgDokumentasi2](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_2.png)
      
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
   File ini berfungsi untuk menyambungkan **Code Igniter** dengan database yang kita miliki dibantu oleh **XAMPP**.
   1. Pertama, buka folder **application/config** kemudian buka file **_config.php_**.
      
      ![imgDokumentasi3](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_3.png)
      
   2. Kemudian temukan baris kode dibawah ini :
      ```php
      $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'localhost',
        'username' => '',
        'password' => '',
        'database' => '',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
      );
      ```
   3. Kemudian ubah menjadi seperti ini :
      ```php
      $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'si_ternak',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
      );
      ```
   4. Fungsi dari baris kode diatas adalah menyambungkan **Code Igniter** dengan database yang kita pilih, disini kita menggunakan **si_ternak**. Untuk _username_ dan _password_ menyesuaikan dengan konfigurasi **XAMPP** atau domain anda masing - masing.
   
   ### 4. _routes.php_
   File ini berfungsi untuk mengatur _routing_ atau pengarahan URL yang diketikkan oleh user di browser.
   1. Pertama, buka folder **application/config** dan buka **_routes.php_**.
      
      ![imgDokumentasi4](https://github.com/bagoesihsant/E41181277_SIPeternakan/blob/master/img_dokumentasi/Screenshot_4.png)
      
   2. Kemudian temukan baris kode berikut :
      ```php
      $route['default_controller'] = 'welcome';
      $route['404_override'] = '';
      $route['translate_uri_dashes'] = FALSE;
      ```
   3. Kemudian ubah kode tersebut seperti ini :
      ```php
      $route['default_controller'] = 'admin';
      $route['404_override'] = '';
      $route['translate_uri_dashes'] = FALSE;
      ```
   4. Fungsi dari baris kode diatas adalah merubah kemana user akan diarahkan ketika pertama kali membuka web, disini user diarahkan menuju **Controller** admin.
   
   ### 5. _Admin.php_
   ### 6. _M_Admin.php_
   ### 7. _header.php dan footer.php_
   ### 8. _login.php_
   ### 9. _register.php_
   ### 10. _home.php_
   ### 11. _data_sapi.php_
   ### 12. _data_kandang.php_

