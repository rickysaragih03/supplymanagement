<!-- resources/views/partials/sidebar.blade.php -->
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4">Supply Management</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('orders.index') }}" class="nav-link active" aria-current="page">
                <i class="bi bi-basket"></i>
                Orders
            </a>
        </li>
        <li>
            <a href="{{ route('products.index') }}" class="nav-link text-dark">
                <i class="bi bi-box"></i>
                Products
            </a>
        </li>
        <li>
            <a href="{{ route('supplies.index') }}" class="nav-link text-dark">
                <i class="bi bi-truck"></i>
                Supplies
            </a>
        </li>
    </ul>
    <hr>
</div>
