<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    

    {{-- check mode --}}
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
    </script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

</head>

<body class='dark:bg-slate-900'>

    {{-- Button for dark mode --}}
    <button onclick='toggleDark()' class='fixed top-4 right-4 p-2 rounded-full bg-gray-300 dark:bg-slate-700 text-lg'
        id='theme-toggle'>
        🌙
    </button>
    

    @yield('content')

    {{-- dark mode function --}}
    <script>
        const btn = document.getElementById('theme-toggle'); 
        btn.textContent = document.documentElement.getAttribute('data-theme') === 'dark' ? '🌙' : '☀️';

        function toggleDark() {

            const html = document.documentElement;
            const isDark = html.getAttribute('data-theme') === 'dark';

            html.setAttribute('data-theme', isDark ? 'light' : 'dark');
            localStorage.setItem('theme', isDark ? 'light' : 'dark');
            btn.textContent = isDark ? '☀️' : '🌙';
        }
    </script> 
</body>

</html>
