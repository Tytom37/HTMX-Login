@extends('templates.base')

@section('content')

<div class="w-[600px] mx-auto mt-[5rem] border border-gray-400 rounded">
    <form hx-trigger="submit" hx-post="/api/login" hx-target="#main-content" hx-swap="innerHTML" class="flex flex-col">
        <div class="mb-3 flex flex-col gap-3 p-5">
            <label for="email">Username</label>
            <input type="text" name="email" class="rounded p-2 border border-gray-400">
        </div>
        <div class="mb-3 flex flex-col gap-3 p-5">
            <label for="password">Password</label>
            <input type="password" name="password" class="rounded p-2 border border-gray-400">
        </div>
        <div class="mb-3 p-5">
            <button type="submit" class="py-2 px-4 rounded bg-blue-700 text-white">
                Login
            </button>
        </div>
        <div id="error-message">

        </div>
    </form>
</div>

@endsection