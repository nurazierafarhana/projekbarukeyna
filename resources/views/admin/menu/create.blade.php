<x-app-layout>
    <div class="container">
        <h1>Tambah Menu Baru</h1>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Menu creation form -->
        <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Menu Name -->
            <div class="form-group">
                <label for="name">Nama Menu</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Ulasan Menu</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <!-- Price -->
            <div class="form-group">
                <label for="price">Harga (RM)</label>
                <input type="number" id="price" name="price" class="form-control" required step="0.01" min="0">
            </div>
            
            <!-- Category Dropdown -->
            <div class="form-group">
                <label for="category">Kategori</label>
                <select id="category" name="category" class="form-control" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Nasi">Nasi</option>
                    <option value="Aiskrim">Aiskrim</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Pencuci Mulut">Pencuci Mulut</option>
                </select>
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="image">Gambar Menu</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                <small class="form-text text-muted">Hanya fail gambar dibenarkan (JPG, PNG, GIF, dll.)</small>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Menu</button>
        </form>

        <!-- Back to Menu List -->
        <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary mt-3">
            <i class="fa-solid fa-angle-left"></i> Kembali ke Senarai Menu
        </a>
    </div>

    <style>
        .container {
            max-width: 800px;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
        }

        .btn-secondary {
            width: auto;
        }

        /* Responsive form */
        @media (max-width: 768px) {
            .form-control {
                padding: 8px;
            }

            .btn {
                padding: 8px;
            }
        }
    </style>
</x-app-layout>
