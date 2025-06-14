# Login & Register App using Laravel, Blade, and Spatie Permission

Website ini adalah proyek Laravel dengan fitur **Login & Register** menggunakan Laravel Breeze, serta **User Role Management** menggunakan [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission/v6/introduction). Website dapat digunakan sebagai starter project Laravel.

### Role **SUPERADMIN**
<img src="https://github.com/techade-id/login-multiuser/blob/main/public/img/super-admin.png" width="700px">

### Role **ADMIN**
<img src="https://github.com/techade-id/login-multiuser/blob/main/public/img/admin.png" width="700px">

### Akun login

SUPER ADMIN
- Username: `super.admin@email.com`
- Password: `super-admin123`

ADMIN
- Username: `admin@email.com`
- Password: `admin123`

## **Instalasi**

### 1. Clone Repo
```
git clone https://github.com/techade-id/login-multiuser.git
```

### 2. Install Composer Dependency
```
composer install
```

### 3. Install NPM Dependency
```
npm install
```

### 4. Copy .env.example menjadi .env

### 5. Generate App Key
```
php artisan key:generate
```

### 6. Setup Database
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Migrasi
```
php artisan migrate --seed
```

### 8. Jalankan server
```
npm run dev
```
```
php artisan serve
```
Website dapat diakses di:
```
http://localhost::8000
```
