{{-- <!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact App')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> --}}

<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact App')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --background-color: #F4F6FF;
            --text-color: #000000;
            --accent-color: #007BFF;
        }
        [data-theme="dark"] {
            --background-color: #2d2d30;
            --text-color: #F4F6FF;
            --accent-color: #1E90FF;
        }
        body {
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            font-family: Arial, sans-serif;
        }
    
        /* Custom toggle switch styling */
        .form-check-input {
            width: 2.5em;
            height: 1.5em;
            background-color: var(--background-color);
            border: 1px solid var(--text-color);
            border-radius: 1em;
            position: relative;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .form-check-input:checked {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .form-check-input:before {
            content: '';
            position: absolute;
            top: 0.15em;
            left: 0.15em;
            width: 1.2em;
            height: 1.2em;
            background-color: var(--background-color);
            border-radius: 50%;
            transition: transform 0.3s ease;
        }
        .form-check-input:checked:before {
            transform: translateX(1em);
            background-color: var(--text-color);
        }
        .form-check-label {
            color: #000000;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function updateToggleSwitch(theme) {
            const toggleSwitch = document.getElementById('toggle-dark-mode');
            toggleSwitch.checked = theme === 'dark';
        }

        document.getElementById('toggle-dark-mode').addEventListener('change', function () {
            const newTheme = this.checked ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });

        const storedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', storedTheme);
        updateToggleSwitch(storedTheme);
    </script>
</body>
</html>
