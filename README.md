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
### Pengertian

Halaman Data Barang & Stok merupakan halaman yang digunakan pengguna untuk mengelola daftar produk dan jumlah persediaan barang di dalam aplikasi **POS & Akuntansi**. Data pada halaman ini menjadi acuan bagi transaksi penjualan di kasir dan laporan keuangan toko.

### Fungsi Data Barang & Stok

Data Barang & Stok berfungsi untuk:

* Menyimpan data seluruh produk yang dijual di toko.
* Mengatur harga beli, harga jual, kategori, dan satuan barang.
* Memantau jumlah stok barang secara real-time.
* Memberi peringatan ketika stok barang menipis atau habis.
* Menjadi sumber data produk untuk transaksi penjualan dan laporan.

### Pengguna yang Terlibat

* **Admin:** menambah, mengubah, menghapus data barang, serta mengatur dan menyesuaikan stok.
* **Kasir:** umumnya hanya dapat melihat data barang dan stok tersedia saat melayani transaksi.

### Komponen Halaman Data Barang & Stok

* **Kolom pencarian:** untuk mencari barang berdasarkan nama atau kode/barcode.
* **Filter kategori:** untuk menampilkan barang sesuai kelompok tertentu.
* **Daftar barang:** menampilkan kode, nama barang, kategori, harga beli, harga jual, dan jumlah stok.
* **Indikator stok:** penanda barang dengan stok menipis atau habis.
* **Tombol Tambah Barang:** untuk memasukkan produk baru ke dalam sistem.
* **Form data barang:** kolom isian kode, nama, kategori, satuan, harga beli, harga jual, dan stok awal.
* **Tombol Edit:** untuk mengubah data barang yang sudah ada.
* **Tombol Hapus:** untuk menghapus barang yang tidak dijual lagi.
* **Penyesuaian stok:** untuk menambah atau mengurangi stok saat ada barang masuk, rusak, atau selisih hasil stok opname.
* **Tombol Cetak / Ekspor:** untuk mencetak atau menyimpan daftar barang dan stok.

### Alur Pengelolaan Data Barang & Stok

1. Admin login ke aplikasi menggunakan username dan password.
2. Admin membuka menu **Data Barang & Stok**.
3. Admin menekan tombol **Tambah Barang** untuk produk baru.
4. Admin mengisi data barang seperti kode, nama, kategori, satuan, harga, dan stok awal.
5. Admin menyimpan data, lalu barang muncul di daftar barang.
6. Admin mengubah data atau harga melalui tombol **Edit** bila ada perubahan.
7. Admin menambah stok ketika ada barang baru masuk dari pemasok.
8. Admin melakukan penyesuaian stok jika hasil pengecekan fisik berbeda dengan data sistem.
9. Admin memeriksa daftar barang dengan stok menipis untuk merencanakan pembelian ulang.

### Proses Otomatis oleh Sistem

Sistem akan secara otomatis:

* Mengurangi stok barang setiap kali terjadi transaksi penjualan.
* Menampilkan peringatan ketika stok mencapai batas minimum.
* Memperbarui daftar barang yang tampil di halaman kasir.
* Menyediakan data stok terbaru untuk laporan penjualan dan keuangan.

### Tanggung Jawab Admin

* Memastikan data barang, harga, dan satuan diinput dengan benar.
* Memperbarui harga dan stok secara berkala.
* Melakukan pengecekan stok fisik (stock opname) dan mencocokkannya dengan data sistem.
* Menghindari duplikasi data barang dengan kode atau nama yang sama.
* Merencanakan pembelian ulang barang yang hampir habis.

### Tanggung Jawab Kasir

* Memeriksa ketersediaan stok sebelum melayani pembelian pelanggan.
* Melaporkan kepada admin jika stok di sistem tidak sesuai dengan barang di rak.
* Melaporkan barang rusak atau kedaluwarsa agar dapat disesuaikan di sistem.

### Manfaat

* Persediaan barang tercatat rapi dan mudah dipantau.
* Risiko kehabisan atau kelebihan stok dapat dikurangi.
* Harga jual dan modal barang terdata dengan jelas.
* Transaksi kasir dan laporan keuangan menjadi lebih akurat.

## Nama Anggota
**Muhammad Rafli**

## Bagian yang Dikerjakan

## Supplier & Pembelian
 
**Pengertian**

Menu Supplier & Pembelian digunakan untuk mengelola data pemasok (supplier) dan mencatat transaksi pembelian barang ke dalam aplikasi POS & Akuntansi. Data pembelian akan otomatis menambah stok barang dan tercatat sebagai hutang atau pengeluaran pada laporan akuntansi.

**Supplier**

Supplier adalah pihak yang menyediakan barang untuk dijual kembali oleh toko. Data supplier harus diisi terlebih dahulu sebelum melakukan transaksi pembelian.

## Fungsi Supplier

**Supplier berfungsi untuk:**

Menyimpan data pemasok barang secara rapi dan terpusat.
Memudahkan pemilihan supplier saat melakukan pembelian.
Memantau hutang toko kepada masing-masing supplier.
Menjadi acuan riwayat pembelian dari setiap supplier.
Komponen Supplier

**Pada halaman supplier terdapat:**

Kode Supplier – nomor unik untuk mengidentifikasi supplier.
Nama Supplier – nama perusahaan atau perorangan pemasok.
Nomor Telepon – kontak yang dapat dihubungi.
Alamat – alamat lengkap supplier.
Tombol Tambah – digunakan untuk menambah supplier baru.
Tombol Ubah – digunakan untuk mengedit data supplier.
Tombol Hapus – digunakan untuk menghapus data supplier.
Kolom Pencarian – digunakan untuk mencari supplier tertentu.
Pembelian
## Pengertian

Pembelian adalah proses pencatatan barang yang dibeli dari supplier, baik secara tunai maupun kredit (hutang).

## Fungsi Pembelian

**Pembelian berfungsi untuk:**

Mencatat barang masuk dari supplier.
Menambah stok barang secara otomatis.
Mencatat hutang atau pembayaran kepada supplier.
Menjadi dasar laporan pembelian dan akuntansi.
Komponen Pembelian

**Pada halaman pembelian terdapat:**

Nomor Faktur – nomor transaksi pembelian, dibuat otomatis atau sesuai faktur supplier.
Tanggal – tanggal terjadinya pembelian.
Supplier – pilihan supplier tempat barang dibeli.
Daftar Barang – barang yang dibeli, lengkap dengan jumlah dan harga beli.
Total Pembelian – jumlah keseluruhan harga barang yang dibeli.
Metode Pembayaran – pilihan tunai atau kredit.
Tombol Simpan – digunakan untuk menyimpan transaksi pembelian.
Pesan Kesalahan – muncul jika data belum lengkap, misalnya supplier atau barang belum dipilih.
Alur Supplier & Pembelian
Alur Menambah Supplier
Buka menu Supplier.
Klik tombol Tambah.
Isi kode, nama, nomor telepon, dan alamat supplier.
Klik Simpan.
Data supplier tampil pada daftar supplier.
Alur Transaksi Pembelian
Buka menu Pembelian.
Klik tombol Tambah Pembelian.
Pilih tanggal dan supplier.
Pilih barang yang dibeli, lalu masukkan jumlah dan harga beli.
Periksa total pembelian.
Pilih metode pembayaran (tunai atau kredit).
Klik Simpan.
Sistem otomatis:
menambah stok barang,
mencatat hutang (jika kredit) atau kas keluar (jika tunai),
memasukkan transaksi ke laporan pembelian dan akuntansi.
Alur Singkat
Tambah Supplier → Buat Pembelian → Pilih Barang → Pilih Pembayaran
→ Simpan → Stok Bertambah → Tercatat di Laporan

Ini saya susun berdasarkan alur umum aplikasi POS & Akuntansi. Kalau di aplikasimu ada fitur tambahan, misalnya retur pembelian, pembayaran hutang, atau cetak faktur, atau nama tombol dan kolomnya berbeda, kirim screenshot halamannya dan akan saya sesuaikan.

## Nama Anggota
**Bilal Hilmi Fauzi Adli**

## Bagian yang Dikerjakan

**penjualan/kasir**
### Pengertian

Halaman Penjualan (Kasir) merupakan halaman yang digunakan pengguna untuk mencatat transaksi penjualan barang kepada pelanggan di dalam aplikasi **POS & Akuntansi**. Setiap transaksi yang diproses akan tersimpan otomatis dan menjadi dasar laporan penjualan serta akuntansi toko.

### Fungsi Penjualan / Kasir

Penjualan / Kasir berfungsi untuk:

* Mencatat transaksi penjualan secara cepat dan akurat.
* Menghitung total belanja, diskon, dan kembalian secara otomatis.
* Mengurangi stok barang setiap kali terjadi penjualan.
* Menyimpan riwayat transaksi sebagai data laporan.
* Mencetak struk sebagai bukti pembayaran pelanggan.

### Pengguna yang Terlibat

* **Kasir:** menjalankan transaksi penjualan sehari-hari.
* **Admin:** mengawasi transaksi, melakukan koreksi atau pembatalan, dan memeriksa laporan penjualan.

### Komponen Halaman Kasir

* **Kolom pencarian produk:** untuk mencari barang berdasarkan nama atau kode/barcode.
* **Daftar produk:** menampilkan nama barang, harga, dan stok tersedia.
* **Keranjang belanja:** menampilkan barang yang dipilih beserta jumlah dan subtotal.
* **Kolom jumlah (qty):** untuk mengubah banyaknya barang yang dibeli.
* **Kolom diskon:** untuk memberikan potongan harga sesuai kebijakan toko.
* **Total belanja:** menampilkan jumlah yang harus dibayar pelanggan.
* **Metode pembayaran:** pilihan pembayaran seperti tunai, transfer, atau QRIS.
* **Kolom uang diterima dan kembalian:** untuk menghitung uang kembali secara otomatis.
* **Tombol Bayar:** menyelesaikan dan menyimpan transaksi.
* **Tombol Batal/Hapus:** membatalkan transaksi atau menghapus barang dari keranjang.
* **Tombol Cetak Struk:** mencetak bukti pembayaran.

### Alur Transaksi Penjualan

1. Kasir login ke aplikasi menggunakan username dan password.
2. Kasir membuka menu **Penjualan / Kasir**.
3. Kasir mencari atau memindai barang yang dibeli pelanggan.
4. Barang masuk ke keranjang, lalu kasir mengisi jumlah barang.
5. Kasir menerapkan diskon jika ada dan diizinkan.
6. Sistem menghitung total belanja secara otomatis.
7. Kasir memilih metode pembayaran dan memasukkan uang yang diterima.
8. Sistem menampilkan jumlah kembalian.
9. Kasir menekan tombol **Bayar** untuk menyimpan transaksi.
10. Kasir mencetak struk dan menyerahkannya kepada pelanggan.

### Proses Otomatis oleh Sistem

Setelah transaksi berhasil disimpan, sistem akan:

* Mengurangi stok barang sesuai jumlah yang terjual.
* Mencatat transaksi ke riwayat penjualan.
* Menambahkan nilai penjualan ke laporan pemasukan dan akuntansi.
* Mencatat nama kasir dan waktu transaksi.

### Tanggung Jawab Kasir

* Memastikan barang dan jumlah yang diinput sesuai dengan yang dibeli pelanggan.
* Memeriksa nominal pembayaran dan kembalian dengan teliti.
* Tidak memberikan diskon di luar ketentuan toko.
* Menjaga kerahasiaan akun dan selalu logout setelah selesai bertugas.
* Melaporkan kesalahan transaksi kepada admin.

### Tanggung Jawab Admin

* Memastikan data produk, harga, dan stok sudah benar sebelum transaksi berjalan.
* Memeriksa riwayat dan laporan penjualan secara berkala.
* Menyetujui atau melakukan pembatalan dan retur transaksi.

### Manfaat

* Transaksi lebih cepat dan minim kesalahan hitung.
* Stok barang selalu terupdate.
* Laporan penjualan tersedia secara real-time.
* Transaksi dapat dilacak per kasir dan per waktu.

## Nama Anggota
**Muhammad Iqbal Sonhaji**

## Bagian yang Dikerjakan

## Laporan & Keuangan

### Pengertian

Halaman Laporan & Keuangan merupakan halaman yang digunakan pengguna untuk melihat rekap transaksi dan kondisi keuangan toko di dalam aplikasi **POS & Akuntansi**. Data pada halaman ini berasal dari transaksi penjualan, pengeluaran, dan pencatatan stok yang sudah tersimpan di sistem.

### Fungsi Laporan & Keuangan

Laporan & Keuangan berfungsi untuk:

* Menampilkan rekap penjualan harian, mingguan, dan bulanan.
* Mencatat pemasukan dan pengeluaran toko.
* Menghitung laba rugi secara otomatis.
* Memantau arus kas masuk dan keluar.
* Menjadi dasar pengambilan keputusan pemilik atau manajer toko.

### Pengguna yang Terlibat

* **Admin:** mengakses seluruh laporan, mencatat pengeluaran, dan menganalisis keuangan.
* **Kasir:** umumnya tidak memiliki akses, atau hanya melihat rekap transaksi miliknya sendiri.

### Komponen Halaman Laporan & Keuangan

* **Filter periode:** untuk memilih rentang tanggal laporan (hari ini, minggu ini, bulan ini, atau tanggal tertentu).
* **Ringkasan keuangan:** menampilkan total penjualan, total pengeluaran, dan laba.
* **Laporan penjualan:** daftar transaksi lengkap dengan tanggal, kasir, dan nominal.
* **Laporan produk terlaris:** menampilkan barang yang paling banyak terjual.
* **Laporan stok:** menampilkan sisa stok dan barang yang hampir habis.
* **Pencatatan pengeluaran:** untuk menginput biaya operasional seperti listrik, gaji, dan pembelian barang.
* **Laporan laba rugi:** selisih antara pemasukan dan pengeluaran pada periode tertentu.
* **Laporan arus kas:** rincian uang masuk dan uang keluar.
* **Tombol Cetak / Ekspor:** untuk mencetak laporan atau menyimpannya dalam bentuk PDF atau Excel.

### Alur Penggunaan Laporan & Keuangan

1. Admin login ke aplikasi menggunakan username dan password.
2. Admin membuka menu **Laporan & Keuangan**.
3. Admin memilih jenis laporan yang ingin dilihat.
4. Admin menentukan periode laporan melalui filter tanggal.
5. Sistem menampilkan data sesuai periode yang dipilih.
6. Admin memeriksa ringkasan penjualan, pengeluaran, dan laba.
7. Admin mencatat pengeluaran baru jika ada biaya yang belum tercatat.
8. Admin mencetak atau mengekspor laporan bila diperlukan.

### Proses Otomatis oleh Sistem

Sistem akan secara otomatis:

* Menjumlahkan seluruh transaksi penjualan pada periode yang dipilih.
* Mengurangi total pemasukan dengan pengeluaran untuk mendapatkan laba rugi.
* Memperbarui laporan setiap kali ada transaksi baru.
* Mengelompokkan data berdasarkan tanggal, kasir, dan produk.

### Tanggung Jawab Admin

* Memastikan seluruh pengeluaran toko dicatat dengan lengkap dan benar.
* Memeriksa laporan secara berkala untuk mendeteksi selisih atau kejanggalan.
* Mencocokkan laporan sistem dengan uang fisik dan bukti transaksi.
* Menjaga kerahasiaan data keuangan toko.
* Menyimpan arsip laporan sebagai dokumentasi.

### Tanggung Jawab Kasir

* Memastikan setiap transaksi penjualan diinput dengan benar agar laporan akurat.
* Melaporkan selisih kas kepada admin pada akhir shift.

### Manfaat

* Kondisi keuangan toko dapat dipantau dengan jelas.
* Laba dan rugi diketahui tanpa perhitungan manual.
* Kesalahan pencatatan lebih mudah ditemukan.
* Membantu menentukan strategi stok, harga, dan promosi.

  <img width="761" height="410" alt="image" src="https://github.com/user-attachments/assets/9a1f3c33-9177-4593-9468-b537f809a53d" />

