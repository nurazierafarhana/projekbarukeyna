<x-app-layout>
    <div class="container">
        <h1>Pengurusan Menu</h1>

        <!-- Search Form -->
        <div class="text-center mb-3">
            <form action="{{ route('admin.menu.search') }}" method="GET" class="form-inline justify-content-center">
                <input type="text" name="query" class="form-control form-control-sm mr-2" placeholder="Carian menu..." aria-label="Search" style="width: 400px;">
                <button type="submit" class="btn btn-info btn-sm">
                    <i class="fas fa-search"></i> Cari
                </button>
            </form>
        </div>

        <!-- Sorting Dropdown positioned at the top-right below the search bar -->
        <div class="d-flex justify-content-end mb-4">
            <div>
                <form action="{{ route('admin.menu.index') }}" method="GET">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <select name="sort" class="form-control" onchange="this.form.submit()">
                                <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Susun mengikut (A-Z)</option>
                                <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Sort mengikut (Z-A)</option>

                                <!-- Dynamic Category Sort (categories come from DB) -->
                                @foreach ($categories as $category)
                                    <option value="category_{{ $category }}" {{ request('sort') == 'category_' . $category ? 'selected' : '' }}>
                                        Sort by Category ({{ $category }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Back Button -->
        @if(request()->has('query'))
            <a href="{{ route('admin.menu.index') }}" class="back-button">
                <i class="fa-solid fa-angle-left"></i> Back
            </a>
        @endif

        @if ($menus->isEmpty())
            <p>No menus available.</p>
        @else
            <div class="row">
                @foreach ($menus as $menu)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> <!-- Adjusted column sizes for better responsiveness -->
                        <div class="menu-card shadow-sm">
                            <div class="menu-image">
                                @if ($menu->image)
                                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}">
                                @else
                                    <div class="no-image-placeholder">No Image</div>
                                @endif
                            </div>
                            <div class="menu-info">
                                <h5 class="menu-name">{{ $menu->name }}</h5>
                                <p class="menu-description">{{ Str::limit($menu->description, 50) }}</p> <!-- Shortened description -->
                                <p class="menu-price">RM {{ number_format($menu->price, 2) }}</p>
                                <p class="menu-category">{{ $menu->category }}</p>

                                <div class="btn-group">
                                    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('admin.menu.show', $menu->id) }}" class="btn btn-info btn-sm">Lihat</a> <!-- View button -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <style>
        /* Card container */
        .menu-card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .menu-image {
            height: 150px;
            overflow: hidden;
            border-radius: 5px;
        }

        .menu-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .no-image-placeholder {
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #888;
            font-size: 16px;
        }

        .menu-info {
            text-align: center;
            margin-top: 15px;
        }

        .menu-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .menu-description {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
            height: 40px; /* Control the height of the description */
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .menu-price {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        .menu-category {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }

        .btn-group .btn {
            width: 48%;
            margin-bottom: 5px;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .menu-card {
                padding: 15px;
            }

            .btn-group .btn {
                width: 100%;
                margin-bottom: 10px;
            }

                    /* Center the form */
        .form-inline.justify-content-center {
            justify-content: center;
        }

        .form-control {
            width: 400px; /* Increase the width of the search bar */
        }

        /* Make the sorting dropdown appear at the top-right below the search bar */
        .d-flex.justify-content-end {
            justify-content: flex-end;
        }

        /* Adjust the margin to separate the search bar and sorting dropdown */
        .mb-4 {
            margin-bottom: 15px;
        }
        
        /* Back button styling */
        .back-button {
            font-size: 14px; /* Small text size */
            text-decoration: none; /* Remove underline */
            color: #007bff; /* Blue text color */
            padding: 10px 10px; /* Small padding */
            border-radius: 3px; /* Rounded corners */
            display: inline-flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .back-button:hover {
            color: #0056b3; /* Darker blue when hovered */
            text-decoration: none; /* No underline on hover */
        }

        .back-button i {
            margin-right: 5px; /* Space between icon and text */
        }

    }
    </style>
</x-app-layout>
