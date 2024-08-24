<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Baru</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/books/store') }}" method="POST">
        @csrf
        <div>
            <label for="category">Kategori:</label>
            <select name="category" id="category" required>
                <option value="Novel">Novel</option>
                <option value="Biografi">Biografi</option>
                <option value="Komik">Komik</option>
                
            </select>
        </div>
        <div>
            <label for="code">Kode Buku:</label>
            <input type="text" name="code" id="code" required>
        </div>
        <div>
            <label for="title">Judul Buku:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="author">Pengarang:</label>
            <input type="text" name="author" id="author" required>
        </div>
        <div>
            <button type="submit">Tambah Buku</button>
        </div>
    </form>
</body>
</html>