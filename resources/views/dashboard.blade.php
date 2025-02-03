<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<!-- Sorting Section -->
<div class="container-fluid py-4">
    <div class="container text-center">
        <h1 class="section-title position-relative mb-4 text-lg sm:text-2xl">Keyna Cafe Menu</h1>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link btn btn-primary mx-1 {{ request()->is('dashboard') ? 'active' : '' }} text-xs sm:text-sm px-2 py-1 sm:px-3 sm:py-2">All</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dashboard/sort/nasi') }}" class="nav-link btn btn-primary mx-1 {{ request()->is('dashboard/sort/nasi') ? 'active' : '' }} text-xs sm:text-sm px-2 py-1 sm:px-3 sm:py-2">Nasi</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dashboard/sort/aiskrim') }}" class="nav-link btn btn-primary mx-1 {{ request()->is('dashboard/sort/aiskrim') ? 'active' : '' }} text-xs sm:text-sm px-2 py-1 sm:px-3 sm:py-2">Aiskrim</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dashboard/sort/minuman') }}" class="nav-link btn btn-primary mx-1 {{ request()->is('dashboard/sort/minuman') ? 'active' : '' }} text-xs sm:text-sm px-2 py-1 sm:px-3 sm:py-2">Minuman</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dashboard/sort/' . urlencode('pencuci mulut')) }}" 
                   class="nav-link btn btn-primary mx-1 {{ request()->is('dashboard/sort/pencuci%20mulut') ? 'active' : '' }} text-xs sm:text-sm px-2 py-1 sm:px-3 sm:py-2">
                    Pencuci Mulut
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Products Start -->
<div class="container-fluid py-5" id="menu">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div id="menu-carousel" class="owl-carousel">
                    @if ($menus->isEmpty())
                        <p>No items found in this category.</p>
                    @else
                        @foreach ($menus as $menu)
                            <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                                <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                    <h4 class="font-weight-bold text-white mb-0">RM {{ number_format($menu->price, 2) }}</h4>
                                </div>
                                <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                    <img class="rounded-circle w-100 h-100" src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" style="object-fit: cover;">
                                </div>
                                <h5 class="font-weight-bold mb-4">{{ $menu->name }}</h5>
                                <a href="#" 
                                class="btn btn-sm btn-secondary" 
                                data-bs-toggle="modal" 
                                data-bs-target="#menuModal" 
                                data-name="{{ $menu->name }}" 
                                data-description="{{ $menu->description }}" 
                                data-price="{{ $menu->price }}" 
                                data-image="{{ asset('storage/' . $menu->image) }}">
                                 Pesan Sekarang
                             </a>
                            
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Menu Details Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="menuModalLabel">Keyna Cafe Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="menuImage" src="" alt="Menu Image" class="rounded mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                <h4 id="menuName" class="mb-3"></h4>
                <p id="menuDescription"></p>
                <h5 id="menuPrice" class="mb-3"></h5>

                <!-- Quantity Input -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Kuantiti</span>
                    <input type="number" id="menuQuantity" class="form-control" min="1" value="1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" onclick="orderMenu()">Tambah ke Troli</button>
            </div>
        </div>
    </div>
</div>

<script>

    
    // Populate modal dynamically using data attributes
    const menuModal = document.getElementById('menuModal');
    menuModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const name = button.getAttribute('data-name');
        const description = button.getAttribute('data-description');
        const price = button.getAttribute('data-price');
        const image = button.getAttribute('data-image');

        // Populate modal fields
        menuModal.querySelector('#menuName').textContent = name;
        menuModal.querySelector('#menuDescription').textContent = description;
        menuModal.querySelector('#menuPrice').textContent = 'RM ' + parseFloat(price).toFixed(2);
        menuModal.querySelector('#menuImage').src = image;
    });

    // Handle order button click
    function orderMenu() {
        const name = document.getElementById('menuName').textContent;
        const quantity = document.getElementById('menuQuantity').value;
        const price = document.getElementById('menuPrice').textContent.replace('RM ', '');

        if (quantity < 1) {
            alert('Please enter a valid quantity.');
            return;
        }

        // Add to cart logic (AJAX request to save in session)
        fetch('/add-to-cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ name, quantity, price })
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                // Update cart icon number (optional)
                document.querySelector('.cart-badge').innerText = data.cartCount;
            })
            .catch(error => console.error('Error:', error));
    }

function updateCartCount() {
    fetch('/cart-count')
        .then(response => response.json())
        .then(data => {
            // Assuming you have a cart icon with the id 'cartIcon'
            const cartIcon = document.getElementById('cartIcon');
            cartIcon.textContent = data;
        })
        .catch(error => console.error('Error:', error));
}


</script>

</x-app-layout>

