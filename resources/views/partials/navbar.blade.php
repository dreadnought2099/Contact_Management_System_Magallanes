{{-- <!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contacts.index') ? 'active' : '' }}" href="{{ route('contacts.index') }}">Contact List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contacts.create') ? 'active' : '' }}" href="{{ route('contacts.create') }}">Create New Contact</a>
            </li>
        </ul>
    </div>
</nav> --}}

<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contacts.index') ? 'active' : '' }}" href="{{ route('contacts.index') }}">Contact List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contacts.create') ? 'active' : '' }}" href="{{ route('contacts.create') }}">Create New Contact</a>
            </li>
        </ul>
        <form class="form-inline ms-auto">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="toggle-dark-mode">
                <label class="form-check-label" for="toggle-dark-mode">Dark Mode</label>
            </div>
        </form>
    </div>
</nav>
