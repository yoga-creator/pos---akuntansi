## Nama Anggota
**Yoga Iskandar Saputra**

## Bagian yang Dikerjakan

**Login & Dashboard**

## 1. Login

### Pengertian

Halaman login merupakan halaman awal yang digunakan pengguna untuk masuk ke dalam aplikasi **POS & Akuntansi**. Pengguna harus memasukkan username dan password yang sudah terdaftar.

### Fungsi Login

Login berfungsi untuk:

* Membatasi akses ke dalam aplikasi.
* Memastikan pengguna yang masuk sudah terdaftar.
* Menjaga keamanan data aplikasi.
* Mengarahkan pengguna ke halaman utama setelah berhasil login.

### Komponen Login

Pada halaman login terdapat:

1. **Username** – digunakan untuk memasukkan nama pengguna.
2. **Password** – digunakan untuk memasukkan kata sandi.
3. **Tombol Masuk** – digunakan untuk memproses login.
4. **Pesan kesalahan** – muncul jika username atau password salah.

### Cara Kerja Login

1. Pengguna membuka aplikasi.
2. Pengguna memasukkan username dan password.
3. Pengguna menekan tombol **Masuk**.
4. Sistem memeriksa data pengguna di database.
5. Jika data benar, pengguna diarahkan ke **Dashboard**.
6. Jika data salah, sistem menampilkan pesan **Username atau password salah**.

### File yang Digunakan

* `login.php` → halaman login.
* `config/database.php` → menghubungkan aplikasi dengan database.
* `config/auth.php` → mengatur session dan akses pengguna.

---

# 2. Dashboard

### Pengertian

Dashboard merupakan halaman utama yang ditampilkan setelah pengguna berhasil login. Dashboard berfungsi sebagai pusat informasi dan menu utama aplikasi.

### Fungsi Dashboard

Dashboard digunakan untuk:

* Menampilkan ringkasan informasi aplikasi.
* Memudahkan pengguna mengakses menu.
* Menampilkan informasi terkait data toko.
* Menjadi halaman awal untuk menjalankan fitur aplikasi.

### Menu pada Dashboard

Beberapa menu yang tersedia antara lain:

* **Data Barang** → mengelola data barang dan stok.
* **Supplier** → mengelola data pemasok.
* **Penjualan** → mengelola transaksi penjualan.
* **Pembelian** → mengelola transaksi pembelian.
* **Laporan** → melihat laporan transaksi.
* **Keuangan** → mengelola dan melihat informasi keuangan.
* **Logout** → keluar dari aplikasi.

### Cara Kerja Dashboard

Setelah login berhasil, sistem membuat session pengguna dan mengarahkan pengguna ke halaman dashboard. Dari dashboard, pengguna dapat memilih menu sesuai kebutuhan.

### File yang Digunakan

* `index.php` → halaman utama aplikasi.
* `pages/dashboard.php` → menampilkan isi dashboard.
* `config/auth.php` → mengatur session dan keamanan akses.

---

# 3. Kesimpulan

Bagian **Login dan Dashboard** merupakan bagian awal yang penting dalam aplikasi POS & Akuntansi. Login digunakan untuk mengatur akses pengguna, sedangkan Dashboard menjadi pusat navigasi untuk mengakses berbagai fitur aplikasi.

**Tugas saya pada bagian ini adalah membuat dan mengelola fitur Login serta Dashboard, termasuk proses login, session pengguna, tampilan dashboard, dan navigasi menuju menu-menu aplikasi.**


## Nama Anggota
**Fadil Lutfyana Abdullah**

## Bagian yang Dikerjakan

**Data Barang & Stok**

---
**Keterangan Data Barang**

Halaman ini dipakai untuk mendaftarkan barang dagangan toko ke dalam sistem. Form "Tambah Barang" punya 5 kolom:

**Kolom	Fungsi**
Kode	Kode unik barang (misalnya BRG001), supaya tiap barang mudah dibedakan dan dicari
Nama Barang	Nama barang yang dijual (misalnya Indomie Goreng)
Harga Beli	Harga modal, yaitu harga barang saat dibeli dari supplier
Harga Jual	Harga yang dibayar pelanggan saat membeli di toko
Stok	Jumlah barang yang tersedia saat ini

Selisih Harga Jual − Harga Beli adalah keuntungan per barang, dan ini yang nanti dipakai di menu Laporan dan Keuangan.

**Keterangan Stok**

Stok adalah jumlah barang yang masih ada di toko. Nilainya berubah otomatis mengikuti transaksi:

Bertambah saat ada transaksi Pembelian (barang masuk dari supplier)
Berkurang saat ada transaksi Penjualan (barang terjual ke pelanggan)

Jadi stok awal diisi saat barang pertama kali ditambahkan, lalu selanjutnya diperbarui oleh sistem.

**Alur Penggunaan**
Login sebagai Administrator/Owner.
Masuk ke Dashboard, lalu klik menu Data Barang.
Isi form Tambah Barang: kode, nama, harga beli, harga jual, dan stok awal.
Klik tombol Simpan Barang.
Data barang tersimpan dan tampil di tabel daftar barang di bawah form.
Barang tersebut sekarang bisa dipilih di menu Penjualan dan Pembelian.
Setiap transaksi otomatis mengubah stok, dan hasilnya masuk ke Laporan dan Keuangan.
Alur Singkat

Login → Dashboard → Data Barang → Isi Form → Simpan Barang
      → Barang muncul di daftar → Dipakai di Penjualan/Pembelian
      → Stok berubah otomatis → Masuk Laporan & Keuangan
      
**Catatan**
Dari screenshot terlihat bahwa tugas kamu sebelumnya (di file README) adalah bagian Login dan Dashboard. Kalau sekarang kamu perlu menulis dokumentasi untuk bagian Data Barang dan Stok, saya bisa bantu buatkan kesimpulan tugasnya dengan format yang sama seperti "10. Kesimpulan Tugas Yoga", lengkap dengan daftar screenshot-nya. Mau saya buatkan?
