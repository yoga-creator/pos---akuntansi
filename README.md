# 👤 TUGAS ANGGOTA KELOMPOK

## Nama Anggota

**Yoga iskandar saputra**

## Bagian yang Dikerjakan

**Login & Dashboard**

---

# 1. Halaman Login

### Pengertian

Halaman Login merupakan halaman awal aplikasi yang digunakan untuk melakukan proses masuk ke dalam sistem.

Pengguna harus memasukkan **username** dan **password** yang telah terdaftar. Jika data yang dimasukkan benar, pengguna akan diarahkan ke halaman Dashboard.

### Fungsi

Halaman Login berfungsi untuk:

* Membatasi akses ke dalam aplikasi.
* Memastikan pengguna memiliki akun yang terdaftar.
* Melakukan proses autentikasi pengguna.
* Mengarahkan pengguna ke Dashboard setelah berhasil login.

### Tampilan Login

Screenshot halaman Login:

![Login](screenshots/01-login.png)

### Komponen Login

Halaman Login memiliki beberapa komponen:

1. **Logo POS**
   Menjadi identitas aplikasi.

2. **Username**
   Digunakan untuk memasukkan nama pengguna.

3. **Password**
   Digunakan untuk memasukkan kata sandi.

4. **Tombol Masuk**
   Digunakan untuk menjalankan proses login.

5. **Pesan Kesalahan**
   Ditampilkan apabila username atau password yang dimasukkan tidak sesuai.

---

# 2. Proses Login

Proses Login pada aplikasi dilakukan dengan alur:

```text
Pengguna membuka aplikasi
        ↓
Halaman Login
        ↓
Masukkan Username
        ↓
Masukkan Password
        ↓
Klik "Masuk"
        ↓
Sistem memeriksa data
        ↓
Apakah data benar?
     ↙       ↘
   Ya         Tidak
   ↓            ↓
Dashboard    Pesan Error
```

Jika username dan password benar, pengguna berhasil masuk ke aplikasi.

Jika salah, sistem menampilkan pesan:

**"Username atau password salah."**

---

# 3. Keamanan Login

Pada proses login, data pengguna diperiksa menggunakan database.

Password pengguna tidak dibandingkan secara langsung dalam bentuk teks biasa. Sistem menggunakan proses **SHA-256** pada password ketika melakukan pemeriksaan terhadap database.

Selain itu, sistem menggunakan **session** untuk menyimpan status pengguna yang telah berhasil login.

---

# 4. Dashboard

### Pengertian

Dashboard adalah halaman utama yang ditampilkan setelah pengguna berhasil melakukan login.

Dashboard berfungsi sebagai pusat navigasi untuk mengakses fitur-fitur utama aplikasi POS & Akuntansi.

### Fungsi Dashboard

Dashboard digunakan untuk:

* Menampilkan halaman utama aplikasi.
* Menjadi pusat navigasi.
* Memudahkan pengguna mengakses fitur aplikasi.
* Menghubungkan pengguna dengan menu transaksi dan pengelolaan toko.

### Tampilan Dashboard

Screenshot halaman Dashboard:

![Dashboard](screenshots/02-dashboard.png)

---

# 5. Menu pada Dashboard

Dashboard menyediakan akses menuju beberapa fitur utama aplikasi, yaitu:

### 📦 Data Barang

Digunakan untuk mengelola data barang dan stok.

### 🏢 Supplier

Digunakan untuk mengelola data pemasok barang.

### 🛒 Penjualan

Digunakan untuk mencatat transaksi penjualan kepada pelanggan.

### 📥 Pembelian

Digunakan untuk mencatat transaksi pembelian barang dari supplier.

### 📊 Laporan

Digunakan untuk melihat data laporan transaksi.

### 💰 Keuangan

Digunakan untuk mengelola dan melihat data keuangan.

### 🚪 Logout

Digunakan untuk keluar dari sistem.

---

# 6. Alur Penggunaan Login & Dashboard

```text
Login
  ↓
Verifikasi Username & Password
  ↓
Berhasil Login
  ↓
Dashboard
  ↓
Pilih Menu
  ↓
Menggunakan Fitur Aplikasi
```

---

# 7. File yang Dikerjakan

Bagian Login & Dashboard menggunakan beberapa file utama:

```text
login.php
index.php
pages/dashboard.php
config/auth.php
```

### login.php

Digunakan untuk membuat halaman Login dan menjalankan proses autentikasi pengguna.

### index.php

Digunakan untuk mengarahkan pengguna ke halaman Dashboard atau Login sesuai status login.

### dashboard.php

Digunakan untuk menampilkan halaman Dashboard setelah pengguna berhasil login.

### auth.php

Digunakan untuk membantu mengatur autentikasi dan session pengguna.

---

# 8. Pengujian Login

Pengujian dilakukan untuk memastikan fitur Login dapat digunakan dengan baik.

| No | Pengujian               | Hasil                         |
| -- | ----------------------- | ----------------------------- |
| 1  | Membuka halaman Login   | ✅ Berhasil                    |
| 2  | Memasukkan username     | ✅ Berhasil                    |
| 3  | Memasukkan password     | ✅ Berhasil                    |
| 4  | Login dengan data benar | ✅ Berhasil                    |
| 5  | Login dengan data salah | ✅ Menampilkan pesan kesalahan |
| 6  | Masuk ke Dashboard      | ✅ Berhasil                    |

---

# 9. Pengujian Dashboard

| No | Pengujian                      | Hasil      |
| -- | ------------------------------ | ---------- |
| 1  | Dashboard dapat dibuka         | ✅ Berhasil |
| 2  | Menu Data Barang dapat diakses | ✅ Berhasil |
| 3  | Menu Supplier dapat diakses    | ✅ Berhasil |
| 4  | Menu Penjualan dapat diakses   | ✅ Berhasil |
| 5  | Menu Pembelian dapat diakses   | ✅ Berhasil |
| 6  | Menu Laporan dapat diakses     | ✅ Berhasil |
| 7  | Menu Keuangan dapat diakses    | ✅ Berhasil |
| 8  | Logout dapat digunakan         | ✅ Berhasil |

---

# 10. Kesimpulan Tugas Yoga

Pada proyek aplikasi **POS & Akuntansi**, Yoga bertanggung jawab pada bagian **Login dan Dashboard**.

Bagian Login digunakan untuk melakukan autentikasi pengguna sebelum masuk ke sistem. Setelah proses login berhasil, pengguna diarahkan ke Dashboard sebagai halaman utama aplikasi.

Dashboard menyediakan navigasi menuju fitur Data Barang, Supplier, Penjualan, Pembelian, Laporan, dan Keuangan.

Berdasarkan pengujian yang dilakukan, fitur Login dan Dashboard dapat digunakan dengan baik.

---

# 📸 File Screenshot

Screenshot yang digunakan untuk bagian Yoga:

```text
screenshots/
├── 01-login.png
└── 02-dashboard.png
```

**01-login.png** → Screenshot halaman Login.

**02-dashboard.png** → Screenshot halaman Dashboard.

**Fadil Lutfyana Abdullah**

## Bagian yang Dikerjakan

**Data Barang & Stok**

---
Keterangan Data Barang

Halaman ini dipakai untuk mendaftarkan barang dagangan toko ke dalam sistem. Form "Tambah Barang" punya 5 kolom:

Kolom	Fungsi
Kode	Kode unik barang (misalnya BRG001), supaya tiap barang mudah dibedakan dan dicari
Nama Barang	Nama barang yang dijual (misalnya Indomie Goreng)
Harga Beli	Harga modal, yaitu harga barang saat dibeli dari supplier
Harga Jual	Harga yang dibayar pelanggan saat membeli di toko
Stok	Jumlah barang yang tersedia saat ini

Selisih Harga Jual − Harga Beli adalah keuntungan per barang, dan ini yang nanti dipakai di menu Laporan dan Keuangan.

Keterangan Stok

Stok adalah jumlah barang yang masih ada di toko. Nilainya berubah otomatis mengikuti transaksi:

Bertambah saat ada transaksi Pembelian (barang masuk dari supplier)
Berkurang saat ada transaksi Penjualan (barang terjual ke pelanggan)

Jadi stok awal diisi saat barang pertama kali ditambahkan, lalu selanjutnya diperbarui oleh sistem.

Alur Penggunaan
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
      
Catatan

Dari screenshot terlihat bahwa tugas kamu sebelumnya (di file README) adalah bagian Login dan Dashboard. Kalau sekarang kamu perlu menulis dokumentasi untuk bagian Data Barang dan Stok, saya bisa bantu buatkan kesimpulan tugasnya dengan format yang sama seperti "10. Kesimpulan Tugas Yoga", lengkap dengan daftar screenshot-nya. Mau saya buatkan?
