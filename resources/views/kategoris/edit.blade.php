<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori - Kasir Pintar</title>
    <style>
        .container {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .btn {
            padding: 8px 15px;
            text-decoration: none;
            display: inline-block;
            margin: 2px;
            border-radius: 3px;
            cursor: pointer;
            border: none;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .error-message {
            color: #dc3545;
            font-size: 0.9em;
            margin-top: -8px;
            margin-bottom: 10px;
        }
        .is-invalid {
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Kategori</h1>

        <form action="{{ route('kategoris.update', $kategori->id_kategori) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" 
                       id="nama_kategori" 
                       name="nama_kategori" 
                       value="{{ old('nama_kategori', $kategori->nama_kategori) }}" 
                       class="@error('nama_kategori') is-invalid @enderror">
                @error('nama_kategori')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Kategori</button>
                <a href="{{ route('kategoris.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
