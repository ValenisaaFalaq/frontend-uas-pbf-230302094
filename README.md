# Frontend UAS Rumah Sakit

Repositori ini merupakan **frontend** dari sistem informasi rumah sakit untuk UAS Praktikum Pemrograman Berbasis Framework. Menggunakan Laravel dan Bootstrap untuk interfacenya, dan backend menggunakan CodeIgniter 4 melalui REST API.

---

##  Fitur yang Tersedia

- CRUD **Pasien** (Create, Read, Update, Delete)
- CRUD **Obat**
- **Pencarian Data** pasien & obat
- **Error Handling** jika API gagal (dengan tampilan alert)
- (Planned) Export ke **PDF** dan **Excel**

---

##  Cara Instalasi & Menjalankan Project

### 1. Clone Repo

```bash
git clone https://github.com/username/frontend-uas-pbf-[NIM_ANDA].git
cd frontend-uas-pbf-230302094
```

### 2. Install Dependency

```bash
composer install
npm install
```

### 3. Copy File .env

```bash
cp .env.example .env
```

### 4. Generate Key

```bash
php artisan key:generate
```

### 5. Jalankan Laravel

```bash
php artisan serve
```

Akses melalui browser: [http://localhost:8000](http://localhost:8000)

> Pastikan **backend CodeIgniter** sudah aktif di port `8080` atau sesuai konfigurasi kamu.

---

## Struktur Folder Utama (Frontend)

```
frontend-uas-230302094/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── PasienController.php
│           └── ObatController.php
├── public/
├── resources/
│   └── views/
│       ├── layout.blade.php
│       ├── pasien/
│       │   ├── index.blade.php
│       │   ├── create.blade.php
│       │   └── edit.blade.php
│       └── obat/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
├── .env
├── composer.json
├── package.json
└── README.md
```

---

##  API Endpoint yang Digunakan

###  Pasien
- `GET /pasien`
- `POST /pasien`
- `GET /pasien/{id}`
- `PUT /pasien/{id}`
- `DELETE /pasien/{id}`

###  Obat
- `GET /obat`
- `POST /obat`
- `GET /obat/{id}`
- `PUT /obat/{id}`
- `DELETE /obat/{id}`


---

##  Pengujian

- Gunakan Postman atau frontend ini langsung untuk mengetes endpoint
- Error API akan muncul sebagai **alert merah**


---

