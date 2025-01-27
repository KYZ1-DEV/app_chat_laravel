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
                    <h2>ID user {{ auth()->user()->name }}</h2>
                    <h1 class="text2xl font-bold">
                        User list
                    </h1>

                    <ul>
                        @foreach ($users as $user)
                            <li class="list-disct">
                                <a wire:navigate class="link link-primary" href="{{ route('chat', $user) }}"> {{ $user->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
