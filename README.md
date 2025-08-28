# Imago Authentication System

Sistem sederhana untuk **registrasi dan login user** menggunakan **PHP + SQLite**.  

---

## 📌 Fitur

- Registrasi user (username, email, password)
- Login user menggunakan email & password
- Session untuk autentikasi
- Logout user
- Menampilkan data user yang sedang login (username, email, created_at)
- Penyimpanan data menggunakan **SQLite**

---

## 📂 Struktur Folder

```
imago/
|
|-- index.php                  # Halaman utama (home)
|-- resource/
│   |-- assets/                # Gambar / logo
│   |--- config/
│   │   |-- app.php            # Konfigurasi global
│   │   |-- database/          # Folder penyimpanan database SQLite
│   │       |-- imago_authentication.db
│   |-- css/
│   │   |-- main.css           # Styling 
│   |-- php/
│   │   |-- auth.php           # Logic registrasi & login
│   │   |-- action.php         # Routing aksi form (sign in, sign up)
│   │   |-- logout.php         # Logout user
│   |-- view/
│       |-- auth/
│           |-- sign-in.php    # Form login
│           |-- sign-up.php    # Form registrasi
|-- README.md
```

---

## ⚙️ Instalasi & Setup

1. Clone repository atau download source code:

   ```bash
   git clone https://github.com/username/user-registration-and-login.git
   cd user-registration-and-login
   ```

2. Pastikan sudah ada **PHP** (versi 7.4+) dan **SQLite** aktif di sistem Anda.

3. Jalankan server PHP lokal:

   ```bash
   php -S localhost:8000
   ```

4. Akses di browser:
   ```
   http://localhost:8000
   ```

---

## 🗄️ Database

- Database menggunakan **SQLite**, otomatis dibuat di:

  ```
  resource/config/database/imago_authentication.db
  ```

- Struktur tabel `users`:
  ```sql
  CREATE TABLE IF NOT EXISTS users (
      id_users INTEGER PRIMARY KEY AUTOINCREMENT,
      username TEXT NOT NULL,
      email TEXT NOT NULL UNIQUE,
      password TEXT NOT NULL,
      created_at DATETIME DEFAULT CURRENT_TIMESTAMP
  );
  ```

---

## 🚀 Cara Penggunaan

1. **Registrasi akun baru** di halaman `sign-up.php`
2. **Login** menggunakan akun yang sudah dibuat
3. Setelah login:
   - Navbar akan menampilkan `Halo, [email]`
   - Halaman utama menampilkan data user yang sedang login (username, email, created_at)
4. Klik **Logout** untuk keluar

---

## 🛠️ Teknologi

- **Backend:** PHP (PDO, SQLite)
- **Frontend:** HTML, CSS
- **Database:** SQLite

---

## 📄 Lisensi

Project ini bersifat open-source. Silakan digunakan dan dikembangkan sesuai kebutuhan.
