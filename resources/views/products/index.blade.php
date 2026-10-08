<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f5f5;
        }

        h1 {
            margin-bottom: 20px;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #eee;
        }

        a, button {
            padding: 7px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .edit {
            background: #ffc107;
            color: black;
        }

        .delete {
            background: #dc3545;
            color: white;
        }

        form {
            display: inline;
        }
    </style>
</head>

<body>

    <h1>Daftar Produk E-Commerce</h1>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $product->name }}</td>

                    <td>
                        {{ $product->category->name }}
                    </td>

                    <td>
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </td>

                    <td>{{ $product->stock }}</td>

                    <td>

                        @can('update', $product)
                            <a
                                href="{{ route('products.edit', $product) }}"
                                class="edit"
                            >
                                Edit
                            </a>
                        @endcan

                        @can('delete', $product)
                            <form
                                action="{{ route('products.destroy', $product) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus produk ini?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="delete">
                                    Hapus
                                </button>
                            </form>
                        @endcan

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    {{ $products->links() }}

</body>
</html>