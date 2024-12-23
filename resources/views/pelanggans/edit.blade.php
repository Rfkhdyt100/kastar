<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer - Kasir Pintar</title>
    <style>
        /* Menggunakan style yang sama dengan create.blade.php */
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
        input[type="email"],
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
        <h1>Edit Customer</h1>

        <form action="{{ route('pelanggans.update', $pelanggan) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" 
                       id="nama" 
                       name="nama" 
                       value="{{ old('nama', $pelanggan->nama) }}" 
                       class="@error('nama') is-invalid @enderror">
                @error('nama')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       value="{{ old('email', $pelanggan->email) }}" 
                       class="@error('email') is-invalid @enderror">
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_telepon">Phone Number</label>
                <input type="text" 
                       id="no_telepon" 
                       name="no_telepon" 
                       value="{{ old('no_telepon', $pelanggan->no_telepon) }}" 
                       class="@error('no_telepon') is-invalid @enderror">
                @error('no_telepon')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Address</label>
                <textarea id="alamat" 
                          name="alamat" 
                          rows="4" 
                          class="@error('alamat') is-invalid @enderror">{{ old('alamat', $pelanggan->alamat) }}</textarea>
                @error('alamat')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Customer</button>
                <a href="{{ route('pelanggans.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>