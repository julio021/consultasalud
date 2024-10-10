<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <aside class="sidebar fixed top-0 left-0 h-full w-64 bg-gray-800 text-white">
    <div class="flex flex-col h-full">
        <div class="p-4">
            <h2 class="text-lg font-semibold">Sidebar Title</h2>
        </div>
        <nav class="mt-4">
            <ul>
                <li class="py-2 px-4 hover:bg-gray-700">
                    <a href="/" class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"   
 stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 18l11-11 11 11"></path></svg>
                        Dashboard
                    </a>
                </li>

                <li class="py-2 px-4 hover:bg-gray-700">
    <a href="/profile" target="_blank" class="flex items-center">
        Usuarios
    </a>
</li>
                </ul>
        </nav>
    </div>
</aside>
</x-app-layout>
