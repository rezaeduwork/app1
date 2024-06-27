REQUIREMENT:
- WEBSERVER (XAMPP, atau sejenisnya)
- COMPOSER
- NODEJS

CARA INSTALL SESUAI URUTAN
- buka cmd di folder projectnya
- ketik composer install
- ketik npm install
- ketik php artisan storage:link
- buat file .env
- copy semua isi .env.example ke .env
- di .env sesuaikan variable dibawah:
  - DB_DATABASE=isi_nama_databasenya
  - DB_USERNAME=root
  - DB_PASSWORD=
- buka cmd di folder projectnya
- ketik php artisan migrate
- ketik php artisan db:seed

CARA RUNNING
- buka cmd di folder projectnya
- ketik npm run build
- ketik php artisan serve
- buka di browser http://localhost:8000
