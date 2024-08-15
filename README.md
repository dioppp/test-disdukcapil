# AduanMasyarakat

AduanMasyarakat adalah sebuah platform bagi masyarakat untuk mengajukan pengaduan online terkait pelayanan publik di suatu instansi..

## Mengunduh Repository

Unduh repository ke dalam komputer menggunakan perintah ```git clone```

```bash
git clone https://github.com/dioppp/test-disdukcapil.git
```

## Membuat dan Mengatur File .env

1. Copy file ```.env.example```, paste di direktori folder yang sama, lalu ubah nama file tersebut menjadi ```.env```.
2. Cari variabel ```DB_DATABASE``` dan ganti value-nya dengan nama database yang sudah disiapkan.
3. Tambahkan variabel ```APP_TIMEZONE="Asia/Jakarta"``` untuk mengubah zona waktu ke zona waktu Indonesia.

## Instalasi Composer

Jalankan perintah ```composer install``` untuk menginstal semua dependensi yang diperlukan agar project PHP dapat berjalan, sebagaimana ditentukan dalam ```composer.json``` dan dikunci di ```composer.lock```.

## Migrasi Database

Jalankan perintah ```php artisan migrate``` di terminal untuk menjalankan migrasi database ke database yang sudah disiapkan.

## Menjalankan Server Development

Jalankan perintah ```php artisan serve``` untuk memulai server development aplikasi Laravel sehingga memungkinkan untuk mengakses aplikasi Laravel di browser web.

### Catatan

Untuk testing API, di sini kami menggunakan aplikasi Postman.
