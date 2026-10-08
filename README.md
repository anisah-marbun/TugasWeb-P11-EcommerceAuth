# Tugas Rutin 11 - E-Commerce Auth

Project ini merupakan Tugas Rutin 11 pada mata kuliah Pemrograman Web menggunakan Laravel 9.

Project ini membangun sistem dasar E-Commerce yang dilengkapi dengan database, authentication, multi-role, middleware, policy authorization, Filament Admin Panel, serta eager loading.

## 👩‍💻 Identitas

- Nama: Anisah Yuliana Marbun
- Project: Tugas Rutin 11
- Repository: TugasWeb-P11-EcommerceAuth

## 🛠️ Teknologi yang Digunakan

- Laravel 9.52.22
- PHP 8.0.30
- MySQL
- Laravel Breeze
- Filament 2.17
- Vite
- Tailwind CSS
- Composer
- Node.js & NPM
- Git & GitHub

## 📋 Fitur Project

### 1. Database E-Commerce

Project memiliki beberapa tabel utama:

- Users
- Categories
- Products
- Carts
- Cart Items
- Orders
- Order Items

Dilengkapi dengan Foreign Key dan relasi antar tabel.

### 2. Seeder dan Factory

Project menggunakan Factory dan Seeder untuk menghasilkan data produk.

- 10 kategori
- 50 produk
- Data produk memiliki nama, deskripsi, harga, stok, dan kategori.

### 3. Model dan Relationship

Model yang digunakan:

- User
- Category
- Product
- Cart
- CartItem
- Order
- OrderItem

Relationship menggunakan:

- hasMany
- belongsTo

### 4. Query Scope

Product memiliki scope:

```php
available()