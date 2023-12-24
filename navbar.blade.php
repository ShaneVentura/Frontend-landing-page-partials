<div class="flex items-center place-content-between mt-3">
    <a href="http://localhost:8000/">
        <div class="flex items-center mx-20  space-x-2">
            <div>
                <img src="{{ URL('imgs/400164738_340907181921774_3802870888100654010_n-removebg (1).png') }}"
                    alt="logo" class="w-20">
            </div>

            <div>
                <h1 class="font-boldglacial font-bold text-green-light text-4xl tracking-normal">
                    iKuryente
                </h1>
            </div>

        </div>
    </a>

    <div class="hidden sm:flex sm:items-center sm:ms-4 mr-20">
        <x-dropdown align="right" width="45" contentClasses="py-1 bg-black">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-2 py-1">
                    <div class="font-monsterat text-base text-black-light opacity-75 hover:underline">Services</div>
                    <div class="">
                        <svg class="fill-current h-4 w-full ms-1 opacity-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link>
                    {{ __('Billing Rates') }}
                </x-dropdown-link>

                <x-dropdown-link>
                    {{ __('Contact') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>


        {{-- Sign Up Button --}}

            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-monsterat text-base text-black-light opacity-75 hover:underline ml-3">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class=" font-monsterat text-base text-black-light opacity-75 hover:underline ml-3 active:cursor-progress hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">Sign in</a>
                    @endauth

            @endif

        </a>

    </div>
</div>
</div>
