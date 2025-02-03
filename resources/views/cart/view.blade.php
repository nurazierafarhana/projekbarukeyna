<x-app-layout>
    <div class="container">
        <h1>Troli Anda</h1>
        @if (session()->has('cart') && count(session('cart')) > 0)
            <form action="{{ route('cart.update') }}" method="POST" id="cartForm">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Pesanan</th>
                                <th>Kuantiti</th>
                                <th>Harga (RM)</th>
                                <th>Jumlah (RM)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalPrice = 0;
                            @endphp
                            @foreach (session('cart') as $index => $item)
                                @php
                                    $itemTotal = $item['quantity'] * $item['price'];
                                    $totalPrice += $itemTotal;
                                @endphp
                                <tr>
                                    <td>
                                        <input type="checkbox" class="item-checkbox" data-index="{{ $index }}">
                                    </td>

                                    <td>{{ $item['name'] }}</td>
                                    <td>
                                        <input type="number" name="cart[{{ $index }}][quantity]" value="{{ $item['quantity'] }}" min="1" style="width: 60px;" class="quantity-input">
                                    </td>
                                    <td>RM {{ number_format($item['price'], 2) }}</td>
                                    <td>RM {{ number_format($itemTotal, 2) }}</td>
                                    <td class="delete-button-container" data-index="{{ $index }}" style="display: none;">
                                        <a href="{{ route('cart.delete', $index) }}" class="btn btn-danger btn-sm">Padam</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between mt-3">
                        <h4>Jumlah Harga: RM {{ number_format($totalPrice, 2) }}</h4>
                        <a href="{{ route('checkout') }}" class="btn btn-success">Bayar</a>
                    </div>
                </div>
            </form>
        @else
            <p>Troli anda kosong.</p>
        @endif

        <!-- Add More Food Button -->
        <div class="mt-3">
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Tambah Menu</a>
        </div>
    </div>

    <script>
        document.querySelectorAll('.quantity-input').forEach(function(input) {
            input.addEventListener('change', function() {
                document.getElementById('cartForm').submit(); // Automatically submit the form when quantity changes
            });
        });

        // Toggle the visibility of the delete button when a checkbox is checked/unchecked
        document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var index = this.getAttribute('data-index');
                var deleteButtonContainer = document.querySelector('.delete-button-container[data-index="' + index + '"]');
                if (this.checked) {
                    deleteButtonContainer.style.display = 'block'; // Show the delete button
                } else {
                    deleteButtonContainer.style.display = 'none'; // Hide the delete button
                }
            });
        });
    </script>
</x-app-layout>
