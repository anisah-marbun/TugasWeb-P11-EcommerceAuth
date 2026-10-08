<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            display: inline-block;
            margin-top: 15px;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Produk</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('products.update', $product) }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <label>Nama Produk</label>
        <input
            type="text"
            name="name"
            value="{{ old('name', $product->name) }}"
        >

        <label>Harga</label>
        <input
            type="number"
            name="price"
            value="{{ old('price', $product->price) }}"
        >

        <label>Stok</label>
        <input
            type="number"
            name="stock"
            value="{{ old('stock', $product->stock) }}"
        >

        <button type="submit">
            Simpan Perubahan
        </button>
    </form>

    <br>

    <a href="{{ route('products.index') }}">
        ← Kembali ke Daftar Produk
    </a>

</div>

</body>
</html>