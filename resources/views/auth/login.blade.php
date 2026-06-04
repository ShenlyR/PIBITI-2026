@extends('layouts.auth')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-100 dark:bg-slate-900">
    <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 dark:text-white">Smart Notes Ai</h1>

        {{-- error message --}} 
        @if($errors -> any())
            <div class='mb-4 p-3 bg-red-100 dark:bg-red-900 text-red-600 dark:text-red-300 rounded-lg'>
                {{ $errors->first() }}
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="mb-4">
                <label class="block mb-2 dark:text-black">Username</label>
                <input type="text" name="username" class="w-full border dark:bg-slate-700 dark:text-white dark:border-slate-600 rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2 dark:text-black">Password</label>
                <input type="password" name="password" class="w-full border dark:bg-slate-700 dark:text-white dark:border-slate-600 rounded-lg px-4 py-2">
            </div>

            <x-button class="w-full">
                Login
            </x-button>
        </form>
    </div>
</div>
@endsection
