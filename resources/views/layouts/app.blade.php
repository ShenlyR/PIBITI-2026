{{-- layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- check dark mode --}}
     <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
    </script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @laravelPWA
    @endif

</head>

<body class='dark:bg-slate-900'>
    <div class="flex min-h-screen">
        <aside class="hidden md:block w-64 bg-slate-700 text-white p-6" id="aside">
            <div>
                <h1 class="text-x font-bold mb-6">
                    Smart Notes AI
                </h1>

                <nav>
                    <a href="/" class="block">Dashboard</a>
                    <a href="/notes" class="block">Notes</a>
                    <a href="/quiz" class="block">Quiz</a>
                </nav>
            </div>
        </aside>

        <main class="flex-1 bg-slate-100 dark:bg-slate-900">
            <header class="bg-white dark:bg-slate-800 dark:border-slate-700 border-b px-6 py-4 flex justify-between">
                <div class="flex gap-2">
                    <button class="md:hidden" id="menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <h2 class="dark:text-slate-300">
                        Smart Notes AI
                    </h2>
                </div>
                <div class='flex items-center gap-4'>
                    <span class='dark:text-white'>Hello, {{ session('username') }}</span>

                    {{-- button dark mode --}}
                    <button onclick='toggleDark()' class='p-2 rounded-full bg-gray-300 dark:bg-slate-700 text-lg'
                        id='theme-toggle'>
                        🌙
                    </button>
                </div>

            </header>

            <div class="p-4">
                @yield('content')
            </div>
        </main>
    </div>

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
