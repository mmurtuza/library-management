<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a href="{{ url('/') }}"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="fas fa-book-reader fa-3x" aria-hidden="true"></i>
            <span class="fs-4">&nbsp {{ config('app.name', 'LMS') }}</span>
        </a>

        <div class="collapse navbar-collapse " id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

            </ul>
            <ul class="navbar-nav my-2 my-lg-0 d-flex">
                <li class="nav-item fw-bold">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold " href="#" data-bs-toggle="dropdown" data-bs-target="#categories">
                        Categories </a>
                    <div class="dropdown-menu">
                        <ul class="" id="categories">
                            @foreach ($categories as $category)
                                <li class="menu-item">
                                    <a href="{{ route('categories-1', $category->name) }}" class="menu-link">
                                        <span class="menu-text">{{ $category->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                            <li class="menu-item">
                                <a href="{{ route('all-categories') }}" class="menu-link">
                                    <span class="menu-text">All Categories</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold " href="#" data-bs-toggle="dropdown" data-bs-target="#author"> Authors
                    </a>
                    <div class="dropdown-menu">
                        <ul class="" id="author">
                            @foreach ($authors as $author)
                                <li class="menu-item">
                                    <a href="{{ route('author', $author->author) }}" class="menu-link">
                                        <span class="menu-text">{{ $author->author }}</span>
                                    </a>
                                </li>
                            @endforeach
                            <li class="menu-item">
                                <a href="{{ route('all-author') }}" class="menu-link">
                                    <span class="menu-text">All Authors</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold">Contuct Us</a>
                </li>
                <li class="nav-item">
                    @guest
                        @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="btn btn-primary fw-bold text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
