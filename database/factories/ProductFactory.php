<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    
    public function definition()
    {
        $products = [
         'Laptop ASUS VivoBook',
            'Laptop Lenovo IdeaPad',
            'Smartphone Samsung Galaxy',
            'Smartphone Xiaomi Redmi',
            'Headset Bluetooth',
            'Mouse Wireless',
            'Keyboard Mechanical',
            'Power Bank 10000mAh',
            'Kabel Data USB Type-C',
            'Smartwatch',
            'Kaos Polos Premium',
            'Kemeja Casual Pria',
            'Celana Jeans',
            'Hoodie Unisex',
            'Sepatu Sneakers',
            'Tas Ransel',
            'Dompet Kulit',
            'Topi Casual',
            'Jaket Denim',
            'Sandal Wanita',
            'Kopi Arabika',
            'Teh Hijau',
            'Cokelat Premium',
            'Keripik Kentang',
            'Biskuit Cokelat',
            'Mie Instan',
            'Sereal Sarapan',
            'Susu UHT',
            'Minuman Isotonik',
            'Madu Murni',
            'Parfum Eau de Toilette',
            'Face Wash',
            'Body Lotion',
            'Shampoo',
            'Sabun Mandi',
            'Lip Balm',
            'Sunscreen',
            'Hand Cream',
            'Masker Wajah',
            'Deodorant',
            'Bola Sepak',
            'Raket Badminton',
            'Matras Yoga',
            'Skipping Rope',
            'Botol Minum Olahraga',
            'Dumbbell',
            'Buku Pemrograman Laravel',
            'Buku Belajar PHP',
            'Novel Fiksi',
            'Buku Pengembangan Diri',   
        ];

        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => $this->faker->randomElement($products),
            'description' => $this->faker->sentence(12),
            'price' => $this->faker->numberBetween(10000, 5000000),
            'stock' => $this->faker->numberBetween(5, 100),
        ];
    }
}
