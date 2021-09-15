# Website Desa Plandi

## Instalasi

1. Melakukan clone dengan git
2. Masukkan command: composer install
3. Copy dan paste file env dan ubah menjadi ".env".
4. Ubah database.default.database, default.username, dan default.password sesuai dengan database di local komputer kalian
5. Masukkan command: php spark migrate
6. Masukkan command: php spark db:seed SeederUtama
7. Untuk data dan database penduduk tanyakan terhadap admin

## Jika mengubah atau terdapat perubahan pada struktur database atau seeder

1. Masukkan command: php spark migrate:refresh
2. Masukkan command: php spark db:seed SeederUtama