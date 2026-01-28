# Azimutree Web - Landing Page & Dokumentasi

Website resmi untuk aplikasi Azimutree — aplikasi Android untuk pemantauan kesehatan hutan dengan metode Forest Health Monitoring (FHM).

🌐 **Live Website**: [azimutree.kesehatan-hutan.com](https://azimutree.kesehatan-hutan.com)  
📱 **Repository Aplikasi Mobile**: [asid30/azimutree-flutter](https://github.com/asid30/azimutree-flutter)

---

## 📖 Tentang Project

**Azimutree Web** adalah website landing page yang menyediakan informasi lengkap tentang aplikasi Azimutree, panduan penggunaan, serta tautan unduhan APK. Website ini dibangun menggunakan **CodeIgniter 4** dan di-deploy secara otomatis ke cPanel melalui fitur Git Version Control.

### Tujuan Website

- **Informasi**: Menyediakan informasi lengkap tentang aplikasi Azimutree, fitur-fitur, dan teknologi yang digunakan
- **Dokumentasi**: Panduan lengkap penggunaan aplikasi untuk pengguna akhir
- **Distribusi**: Menyediakan tautan unduhan APK versi terbaru aplikasi Azimutree
- **Edukasi**: Menjelaskan konsep Forest Health Monitoring (FHM) dan metode klaster plot

---

## 🚀 Fitur Website

- **Halaman Home**: Landing page dengan hero section, fitur utama, dan tautan download APK
- **Halaman About**: Informasi lengkap tentang aplikasi, latar belakang, konsep klaster plot, tujuan, dan teknologi
- **Halaman Panduan**: Panduan lengkap penggunaan aplikasi Azimutree untuk pengguna
- **Responsive Design**: Tampilan yang optimal di berbagai ukuran layar
- **Dark/Light Theme**: Dukungan untuk tema gelap dan terang
- **Screenshot Slider**: Galeri screenshot aplikasi dengan slider otomatis

---

## 🛠️ Teknologi yang Digunakan

- **Framework**: CodeIgniter 4 (PHP 8.1+)
- **Frontend**: HTML5, CSS3, JavaScript
- **Deployment**: cPanel Git Version Control (otomatis via `.cpanel.yml`)
- **Version Control**: Git & GitHub

---

## 📋 Persyaratan Sistem

### Server Requirements

- **PHP**: Versi 8.1 atau lebih tinggi
- **Extensions** yang diperlukan:
  - `intl` - Internationalization support
  - `mbstring` - Multibyte string support
  - `json` - JSON support (enabled by default)
  
### Development Requirements

- **Composer**: Package manager untuk PHP
- **Web Server**: Apache/Nginx dengan PHP support
- **Git**: Version control

---

## 🔧 Instalasi & Setup

### 1. Clone Repository

```bash
git clone https://github.com/asid30/azimutree-web-ci.git
cd azimutree-web-ci
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Konfigurasi Environment

Copy file `env` menjadi `.env` dan sesuaikan konfigurasi:

```bash
cp env .env
```

Edit file `.env` dan sesuaikan:

```env
# Base URL aplikasi
# Development
app.baseURL = 'http://localhost:8080/'

# Production (gunakan HTTPS)
# app.baseURL = 'https://azimutree.kesehatan-hutan.com/'

# Environment (development/production)
CI_ENVIRONMENT = development
```

### 4. Jalankan Development Server

```bash
php spark serve
```

Website akan berjalan di `http://localhost:8080`

---

## 📁 Struktur Project

```
azimutree-web-ci/
├── app/
│   ├── Controllers/     # Controller (Home.php)
│   ├── Views/           # View files (home.php, about.php, panduan.php, layout.php)
│   ├── Config/          # Konfigurasi aplikasi
│   └── ...
├── public/              # Public assets (CSS, JS, images)
│   ├── assets/          # Asset files (gambar, stylesheet, javascript)
│   ├── index.php        # Entry point
│   └── .htaccess
├── vendor/              # Composer dependencies
├── writable/            # Writable folder (cache, logs, sessions) - perlu permission 755/775
├── .cpanel.yml          # Konfigurasi deployment cPanel
├── composer.json        # Composer dependencies
├── spark                # CLI tool CodeIgniter
└── README.md
```

---

## 🌐 Deployment

### Automatic Deployment ke cPanel

Website ini dikonfigurasi untuk deployment otomatis menggunakan **cPanel Git Version Control**. File `.cpanel.yml` digunakan oleh cPanel untuk menjalankan deployment task otomatis setiap kali ada push ke repository yang terhubung dengan cPanel.

**Konfigurasi `.cpanel.yml`:**

```yaml
deployment:
  tasks:
    - export DEPLOYPATH=/home/aziw7273/public_html
    - rm -rf $DEPLOYPATH/*
    - cp -R public/* $DEPLOYPATH/
```

**Cara Kerja Deployment:**

1. **Setup Awal**: Repository terhubung ke cPanel melalui fitur Git Version Control. Saat pertama kali setup, cPanel akan clone seluruh repository ke server.
2. **Push Changes**: Setiap push ke branch yang dikonfigurasi akan memicu deployment otomatis.
3. **Deployment Task**: cPanel menjalankan task yang didefinisikan di `.cpanel.yml`.
4. **Copy Public Files**: Hanya folder `public/` yang di-copy ke `public_html` (document root).
5. **Project Location**: Seluruh project ada di server di luar document root. Hanya file-file publik (HTML, CSS, JS, images) yang perlu ada di document root untuk keamanan.

**Catatan Penting**: 
- Konfigurasi ini cocok untuk hosting cPanel shared
- Repository lengkap berada di lokasi terpisah di server (biasanya di home directory)
- Hanya folder `public/` yang di-deploy ke document root (`public_html`) untuk keamanan
- Folder lain seperti `app/`, `vendor/`, `writable/` tetap berada di lokasi repository utama
- **Downtime**: Proses `rm -rf` dan `cp` dapat menyebabkan downtime singkat saat deployment
- Path di `public/index.php` harus dikonfigurasi dengan benar agar dapat mengakses folder `app/` di luar document root

### Manual Deployment

Jika ingin deploy manual, ikuti struktur berikut:

**Struktur Server:**
```
/home/user/
├── repository/          # Clone seluruh project di sini
│   ├── app/
│   ├── vendor/
│   ├── writable/       # Set permission 755/775
│   ├── public/
│   └── ...
└── public_html/        # Document root - copy dari repository/public/
    ├── assets/
    ├── index.php       # Pastikan path ke app/ dikonfigurasi dengan benar
    └── .htaccess
```

**Langkah-langkah:**

1. Clone atau upload seluruh project ke lokasi di luar document root (misal: `/home/user/repository/`)
2. Copy isi folder `public/` ke `public_html/` (document root)
3. Edit `public_html/index.php` dan pastikan path ke folder `app/` benar (gunakan absolute path)
4. Set permission folder `writable/` ke `755` atau `775` (untuk cache, logs, sessions)
5. Pastikan file `.htaccess` aktif (untuk Apache)

---

## 👨‍💻 Development

### Menjalankan di Local

1. Clone repository
2. Install dependencies: `composer install`
3. Copy `.env` dari template `env`
4. Jalankan server: `php spark serve`
5. Akses `http://localhost:8080`

### Struktur Routing

Routes didefinisikan di `app/Config/Routes.php`:

- `/` - Halaman home
- `/about` - Halaman tentang aplikasi
- `/panduan` - Halaman panduan lengkap
- `/template` - Halaman template (jika ada)

### Menambahkan Halaman Baru

1. Buat view file di `app/Views/`
2. Tambahkan method di `app/Controllers/Home.php`
3. Daftarkan route di `app/Config/Routes.php`

---

## 🧪 Testing

Jalankan unit tests menggunakan PHPUnit:

```bash
composer test
```

Atau langsung dengan PHPUnit:

```bash
./vendor/bin/phpunit
```

---

## 📝 CodeIgniter 4 Information

Website ini dibangun menggunakan **CodeIgniter 4**, PHP framework yang ringan, cepat, fleksibel, dan aman.

### Dokumentasi CodeIgniter 4

- [User Guide](https://codeigniter.com/user_guide/) - Dokumentasi lengkap framework
- [CodeIgniter Forum](https://forum.codeigniter.com/) - Komunitas dan support
- [CodeIgniter 4 Repository](https://github.com/codeigniter4/CodeIgniter4) - Source code framework

### Penting: Struktur File

`index.php` berada di dalam folder `public/` (bukan di root project) untuk keamanan dan pemisahan komponen yang lebih baik. Web server harus dikonfigurasi untuk mengarah ke folder `public/`.

---

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan:

1. Fork repository ini
2. Buat branch baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

---

## 📄 License

Project ini menggunakan lisensi **MIT License**. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.

---

## 👤 Author

**Asid**

- GitHub: [@asid30](https://github.com/asid30)
- Website: [azimutree.kesehatan-hutan.com](https://azimutree.kesehatan-hutan.com)

---

## 🔗 Link Terkait

- 📱 **Aplikasi Mobile**: [asid30/azimutree-flutter](https://github.com/asid30/azimutree-flutter)
- 🌐 **Website**: [azimutree.kesehatan-hutan.com](https://azimutree.kesehatan-hutan.com)
- ☕ **Support**: [Saweria](https://saweria.co/asid30)

---

## 📞 Support & Kontak

Jika Anda memiliki pertanyaan atau menemukan masalah, silakan:

- Buat [Issue](https://github.com/asid30/azimutree-web-ci/issues) di GitHub
- Hubungi melalui GitHub [@asid30](https://github.com/asid30)

---

**Azimutree** - Forest Health Monitoring Made Easy 🌳📱
