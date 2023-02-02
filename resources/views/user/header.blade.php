<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                        <img src="assets/images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                 
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                            <li><a href="{{ url('/cart')}}">Cart <span></span></a></li>
                            <li><a href="{{ url('/pageProduct')}}">All Products</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="{{url('/about')}}">About Us</a></li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                </ul>
                            </li>
                                <li class="ajira">
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth

                                <li class="amni" >
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
    
                                        <x-dropdown-link :href="route('logout')" 
                                        onclick="return confirm('You are Suru Log Out')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>



                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                    </li>
                                    <li class="mt-1">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    </li>
                                    @endauth
                            
                            @endif
                            </div>
                        </ul>      
                    {{-- <a class='menu-trigger'>
                        <span>Menu</span>
                    </a> --}}
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<style>
    .ajira{
        margin-top: -20px;
    }
    .amni{
        margin-top: -8px; 
    }
</style>
