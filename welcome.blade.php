<x-landing>
    <x-slot name="header">
        <div class=" bg-green-dark box-content flex items-center space-x-1 p-1 justify-center">
            <svg class="w-7 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
            </svg>
            <h1 class="text-white text-sm font-glacial font-medium ">
                Smart energy management at your fingertips.
            </h1>
        </div>

    </x-slot>

    <x-navbar></x-navbar>

    @include('layouts.main')





</x-landing>
