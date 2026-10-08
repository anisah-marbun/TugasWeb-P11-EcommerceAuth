<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    /**
     * Menentukan apakah user boleh melihat daftar produk.
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Menentukan apakah user boleh melihat produk.
     */
    public function view(User $user, Product $product)
    {
        return true;
    }

    /**
     * Admin dan editor boleh membuat produk.
     */
    public function create(User $user)
    {
        return in_array($user->role, ['admin', 'editor']);
    }

    /**
     * Admin dan editor boleh mengedit produk.
     */
    public function update(User $user, Product $product)
    {
        return in_array($user->role, ['admin', 'editor']);
    }

    /**
     * Admin dan editor boleh menghapus produk.
     */
    public function delete(User $user, Product $product)
    {
        return in_array($user->role, ['admin', 'editor']);
    }
}