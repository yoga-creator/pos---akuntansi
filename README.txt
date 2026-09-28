CARA MENJALANKAN APLIKASI POS & AKUNTANSI TOKO

1. Install XAMPP.
2. Jalankan Apache dan MySQL.
3. Salin folder "pos-akuntansi" ke:
   C:\xampp\htdocs\
4. Buka http://localhost/phpmyadmin
5. Import file:
   database/pos_akuntansi.sql
6. Buka:
   http://localhost/pos-akuntansi/

LOGIN DEMO:
Owner:
username: admin
password: admin123

Kasir:
username: kasir
password: kasir123

CATATAN:
- Jika MySQL memakai password root, ubah $pass pada config/database.php.
- Aplikasi ini adalah versi sederhana untuk tugas kuliah dan dapat dikembangkan.
- Untuk GitHub, upload seluruh folder project kecuali konfigurasi rahasia jika nanti memakai server online.
