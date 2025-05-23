# 🎯 FrontEnd Sistem Cuti Mahasiswa

Proyek ini adalah integrasi **Laravel (Frontend)** dan **CodeIgniter 4 (Backend API)** untuk menampilkan dan mengelola data **Mahasiswa** dan **Dosen**. Project UAS Mata Kuliah PBF (Pemrograman Berbasis Framework) oleh Nira Ihsani Hanifah (220102065)

---

## 🧱 PERSYARATAN

Pastikan kamu sudah menyiapkan:

- ✅ Laragon (untuk server lokal)
- ✅ PHP versi 8.3
- ✅ Composer & Git
- ✅ phpMyAdmin
- ✅ Text editor (seperti VS Code)

---

## 🚀 LANGKAH-LANGKAH SETUP


### 📦 1. CLONE DAN JALANKAN BACKEND (CODEIGNITER 4)

#### 🔧 1.1 Buat folder backend

```bash
cd D:
mkdir backend
cd backend
```

#### ⬇️ 1.2 Clone project backend

```bash
git clone https://github.com/Alledanaralle/PBF backend-uas-220102065
```

#### ⚙️ 1.3 Install dependency

```bash
composer install
```

#### 🛠️ 1.4 Copy file `.env`

```bash
cp env .env
```

Edit file `.env` untuk koneksi database:

```bash
database.default.hostname = localhost
database.default.database = data_uas_220102065
database.default.username = root
database.default.password =
```

#### 🗃️ 1.5 Import database ke phpMyAdmin

1. Download SQL file:  
   https://github.com/andinardelinaa/database
   Nama file: `data_uas_220102065.sql`

2. Buka `http://localhost/phpmyadmin`

3. Buat database baru dengan nama: `data_uas_220102065`

4. Klik **Import** dan upload file `data_uas_220102065.sql`

#### ▶️ 1.6 Jalankan backend (masuk & sesuaikan ke folder backend)

```bash
cd D:/backend/backend-uas-220102065
php spark serve
```

Buka di browser:

```
http://localhost:8080
```

Coba buka endpoint:

- `http://localhost:8080/mahasiswa`
- `http://localhost:8080/dosen`
---

#### 🧪 1.7 PENGUJIAN DENGAN POSTMAN

Setelah frontend dan backend berhasil dihubungkan, lakukan pengujian API menggunakan **Postman** untuk memastikan endpoint bekerja dengan benar.

#### 📁 A. ENDPOINT MAHASISWA

| Metode | Endpoint                                 | Keterangan             |
|--------|------------------------------------------|------------------------|
| GET    | `http://localhost:8080/mahasiswa`            | Ambil semua data mahasiswa |
| POST   | `http://localhost:8080/mahasiswa`            | Tambah data mahasiswa baru |
| PUT    | `http://localhost:8080/mahasiswa/{npm}` | Update data mahasiswa      |
| DELETE | `http://localhost:8080/mahasiswa/{npm}` | Hapus data mahasiswa       |

---

#### 👤 B. ENDPOINT DOSEN

| Metode | Endpoint                                | Keterangan            |
|--------|-----------------------------------------|-----------------------|
| GET    | `http://localhost:8080/dosen`            | Ambil semua data dosen |
| POST   | `http://localhost:8080/dosen`            | Tambah data dosen baru |
| PUT    | `http://localhost:8080/dosen/{nidn}`  | Update data dosen      |
| DELETE | `http://localhost:8080/dosen/{nidn}`  | Hapus data dosen       |


#### ⚠️ Catatan:

- Pastikan backend (`php spark serve`) **dalam keadaan aktif**
- Gunakan `Headers` di Postman:
  - `Content-Type: application/json`
- Gunakan metode HTTP yang sesuai: **GET, POST, PUT, DELETE**

---


### 🖥️ 2. SETUP FRONTEND (LARAVEL)

#### 📁 2.1 Buat folder frontend

```bash
cd D:
laravel new frontend
cd frontend
```

---

## 🖥️ 2. SETUP FRONTEND (LARAVEL)

### 📌 2.1 Buat Folder Laravel Frontend di Laragon

Pastikan kamu sudah menginstal **Laragon** dan Laravel versi terbaru. Proses ini akan membuat folder `frontend` di direktori `laragon/www`.

#### ✅ Langkah-langkah:

1. **Buka Laragon**, lalu klik menu **Terminal**.

2. Jalankan perintah di bawah ini untuk masuk ke folder `www`:

```bash
cd C:\laragon\www
```

3. **Buat project Laravel baru dengan nama `frontend-uas-220102065`**:

```bash
laravel new frontend
```

> Jika perintah `laravel` tidak dikenali, kamu bisa gunakan Composer:
```bash
composer create-project laravel/laravel frontend
```

---

### 🚀 2.2 Jalankan Laravel Frontend

Jalankan server Laravel lokal:

```bash
php artisan serve
```

Buka di browser:

```
http://localhost:8000
```

---

### 🛠️ Tips:

- Jika kamu ingin membuka folder Laravel langsung di Visual Studio Code:

```bash
code .
```
---

## 🖥️ 2. SETUP FRONTEND (LARAVEL)

### 📦 2.1 Lokasi Folder Laravel Frontend

#### ✅ **Instal Laravel di drive lain (misalnya `D:\`)**

1. Buka Command Prompt atau Terminal biasa:
```bash
cd D:\
composer create-project laravel/laravel frontend-uas-220102065
```

> Pastikan sudah menginstal Composer dan Laravel Global jika tidak memakai Laragon.

---

### 🧱 2.2 Struktur dan Pembuatan Komponen Frontend

#### 🛠️ Buat Controller

```bash
php artisan make:controller MahasiswaController
php artisan make:controller DosenController
```

#### 🛠️ Buat View (dalam `resources/views/`)

Contoh membuat file view:
```bash
cd resources/views
mkdir mahasiswa
mkdir dosen
# atau bisa membuat manual dengan klik kanan 'New Folder'/ 'New File'
```


#### ⚙️ 2.3 Generate app key

```bash
composer install
php artisan key:generate
```

---

### 🧩 3. BUAT ROUTE, CONTROLLER, DAN VIEW

### 🧩 4. Running Projek Laravel
```bash
php artisan serve 
```
Buka di browser:
```
http://127.0.0.1:8000/mahasiswa
```

! Proyek ini belum sepenuhnya jadi, dan masih dalam proses (belum lengkap)
