# Lab Secure Coding Polytron

Aplikasi web untuk pembelajaran secure coding yang mendemonstrasikan berbagai kerentanan keamanan web dan cara mengatasinya.

## Menjalankan Aplikasi dengan Docker

### Prasyarat
- Docker dan Docker Compose terinstall di sistem Anda
- Port 8000, 3307, dan 9000 tersedia (tidak digunakan oleh aplikasi lain)

### Langkah-langkah Menjalankan

1. **Clone atau download repository ini**
   ```bash
   git clone <repository-url>
   cd lab_polytron
   ```

2. **Jalankan aplikasi menggunakan Docker Compose**
   ```bash
   docker-compose up -d
   ```

   Perintah ini akan:
   - Membangun image Docker untuk aplikasi PHP
   - Menjalankan container MySQL dengan database yang sudah dikonfigurasi
   - Menjalankan container phpMyAdmin untuk manajemen database
   - Mengimpor database dari file `db_secure_coding_polytron.sql`

3. **Akses aplikasi**
   - **Aplikasi utama**: http://localhost:8000
   - **phpMyAdmin**: http://localhost:9000
     - Username: `root`
     - Password: `root`

### Menghentikan Aplikasi

Untuk menghentikan semua container:
```bash
docker-compose down
```

Untuk menghentikan dan menghapus volume database (menghapus semua data):
```bash
docker-compose down -v
```

### Konfigurasi Database

Aplikasi menggunakan konfigurasi database berikut:
- **Host**: `secure_coding_polytron` (nama service dalam Docker network)
- **Database**: `db_secure_coding_polytron`
- **Username**: `root`
- **Password**: `root`
- **Port**: `3306` (internal container)

### Troubleshooting

1. **Port sudah digunakan**: Jika mendapat error port sudah digunakan, ubah port di file `docker-compose.yml`
2. **Permission error**: Pastikan Docker daemon berjalan dan user memiliki permission untuk menjalankan Docker
3. **Database connection error**: Tunggu beberapa saat hingga container MySQL selesai inisialisasi

### Struktur Container

- **php**: Container aplikasi PHP dengan Apache (port 8000)
- **secure_coding_polytron**: Container MySQL database (port 3307)
- **phpmyadmin**: Container phpMyAdmin untuk manajemen database (port 9000)
