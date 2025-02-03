<x-app-layout>
    <div class="container">

        <h1>Info Menu</h1>
        
        <!-- Delete Icon at the Top -->
        <div class="text-right mb-3">
            <form action="{{ route('admin.menu.edit', $menu->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this menu item?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i> Padam
                </button>
            </form>
        </div>

        <div class="menu-card d-flex">
            <!-- Left Box: Image -->
            <div class="menu-image-box" style="flex: 1; padding-right: 15px; border-right: 1px solid #ddd;">
                @if ($menu->image)
                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}">
                @else
                    <p>No Image</p>
                @endif
            </div>

            <!-- Right Box: Description and Details -->
            <div class="menu-desc-box" style="flex: 2; padding-left: 15px;">
                <h5 class="menu-name">{{ $menu->name }}</h5>
                <p class="menu-description">{{ $menu->description }}</p>
                <p class="menu-price">RM {{ number_format($menu->price, 2) }}</p>
                <p class="menu-category">{{ $menu->category }}</p>

                <!-- Button Group -->
                <div class="btn-group" role="group" aria-label="Menu Actions">
                    <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </div>
                
            </div>
        </div>
    </div>

    <style>
        /* Flexbox layout for the menu-card */
        .menu-card {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        /* Image box styling */
        .menu-image-box {
            max-width: 300px;
            min-width: 150px;
            text-align: center;
        }

        .menu-image-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }

        /* Description box styling */
        .menu-desc-box {
            text-align: left;
        }

        .menu-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .menu-description {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis; /* Truncate the text with ... */
        }

        .menu-price, .menu-category {
            font-size: 18px;
            color: #333;
        }

        .btn-group .btn {
            margin-top: 15px;
            margin-right: 10px; /* Spacing between buttons */
        }

        .btn-secondary {
            margin-top: 15px;
        }

        /* Divider between image and description */
        .menu-card > div {
            padding: 15px;
        }

        /* Styling for the delete button */
        .btn-danger {
            margin-bottom: 15px; /* Space between delete button and content */
        }
    </style>
</x-app-layout>
