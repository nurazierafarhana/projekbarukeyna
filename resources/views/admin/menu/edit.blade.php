<x-app-layout>
    <div class="container d-flex justify-content-center mt-4">
        <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
            <h2 class="text-center mb-4">Edit Menu</h2>

            <!-- Show success popup -->
            @if(session('success'))
                <div id="successPopup" class="alert alert-success text-center" role="alert">
                    Item menu berjaya dikemas kini!
                </div>

                <script>
                    // Hide success message after 3 seconds and redirect after 4 seconds
                    setTimeout(() => document.getElementById('successPopup').style.display = 'none', 3000);
                    setTimeout(() => window.location.href = "{{ route('admin.menu.index') }}", 4000);
                </script>
            @endif

            <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $menu->name) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Ulasan</label>
                    <textarea id="description" name="description" class="form-control" required>{{ old('description', $menu->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga (RM)</label>
                    <input type="number" id="price" name="price" value="{{ old('price', $menu->price) }}" class="form-control" required step="0.01" min="0">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select id="category" name="category" class="form-control" required>
                        <option value="nasi" {{ old('category', $menu->category) == 'nasi' ? 'selected' : '' }}>Nasi</option>
                        <option value="aiskrim" {{ old('category', $menu->category) == 'aiskrim' ? 'selected' : '' }}>Aiskrim</option>
                        <option value="minuman" {{ old('category', $menu->category) == 'minuman' ? 'selected' : '' }}>Minuman</option>
                        <option value="pencuci mulut" {{ old('category', $menu->category) == 'pencuci mulut' ? 'selected' : '' }}>Pencuci Mulut</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" id="image" name="image" class="form-control">
                    @if ($menu->image)
                        <div class="mt-2 text-center">
                            <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="img-thumbnail" style="width: 100px; height: 100px;">
                        </div>
                    @endif
                </div>

                <div class="text-end mt-4">
                    <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Kemaskini</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
