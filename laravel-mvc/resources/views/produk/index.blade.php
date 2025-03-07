<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
    <title>Laravel MVC</title>
</head>
<body>
    <h2>Daftar Produk</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Harga</th>
            <th>Harga</th>
        </tr>
        </thead>
    <tbody>
        @foreach ($produk as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['nama']}}</td>
                <td>Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
        @endforeach
    </tbody>
    </table>
</body>
</html>