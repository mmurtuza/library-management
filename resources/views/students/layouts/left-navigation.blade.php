 <div class="sidebar">
     <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: auto;height:100vh">
         <a href="{{ url('/') }}"
             class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
             <i class="fas fa-book-reader fa-3x" aria-hidden="true"></i>
             <span class="fs-4">&nbsp {{ config('app.name', 'LMS') }}</span>
         </a>
         <hr>
         <ul class="nav nav-pills flex-column mb-auto">
             <li class="nav-item">
                 <a href="/admin" class="nav-link text-white {{ request()->is('admin') ? 'active' : '' }}"
                     aria-current="page">
                     <i class="fas fa-home fa-lg" aria-hidden="true"></i>
                     Home
                 </a>
             </li>
             <li>
                 <a href="{{ url('/admin/books') }}"
                     class="nav-link text-white {{ request()->is('admin/books') ? 'active' : '' }}">
                     <i class="fas fa-plus fa-lg" aria-hidden="true"></i>
                     Books
                 </a>
             </li>
             <li>
                 <a href="{{ url('/admin/students') }}"
                     class="nav-link text-white {{ request()->is('admin/students') ? 'active' : '' }}">
                     <i class="fas fa-user fa-lg" aria-hidden="true"></i>
                     Students
                 </a>
             </li>
             <li>
                 <a href="{{ url('/admin/categories') }}"
                     class="nav-link text-white {{ request()->is('admin/ctegories') ? 'active' : '' }}">
                     <i class="fas fa-book fa-lg" aria-hidden="true"></i>
                     Books Categories
                 </a>
             </li>
             <li>
                 <a href="{{ url('/admin/issued-books') }}"
                     class="nav-link text-white {{ request()->is('admin/issued-books') ? 'active' : '' }}">
                     <i class="fas fa-list fa-lg" aria-hidden="true"></i>
                     Issued Books
                 </a>
             </li>
             <li>
                 <a href="{{ url('/admin/issued-books') }}"
                     class="nav-link text-white {{ request()->is('admin/pending-students') ? 'active' : '' }}">
                     <i class="fas fa-layer-group fa-lg" aria-hidden="true"></i>
                     Pending Students
                 </a>
             </li>
             <li>
                 <a href="{{ url('/admin/issue') }}"
                     class="nav-link text-white {{ request()->is('admin/issue') ? 'active' : '' }}">
                     <i class="fas fa-long-arrow-alt-left fa-lg" aria-hidden="true"></i>
                     Issue / Return Book
                 </a>
             </li>
             <li>
                 <a href="#" class="nav-link text-white {{ request()->is('admin/due') ? 'active' : '' }}">
                     <i class="fas fa-long-arrow-alt-down  fa-lg" aria-hidden="true"></i>
                     Due
                 </a>
             </li>

             {{-- <li>
                 <a href="/admin/settings" class="nav-link text-white">
                     <i class="fas fa-cog fa-lg" aria-hidden="true"></i>
                     Settings
                 </a>
             </li> --}}

         </ul>
         <hr>
         <div class="dropdown">
             <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                 id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                 @guest
                     @if (Route::has('login'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         </li>
                     @endif

                     @if (Route::has('register'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                         </li>
                     @endif
                 @else
                     <img src="https://via.placeholder.com/32" alt="" width="32" height="32" class="rounded-circle me-2">
                     <strong>{{ Auth::user()->name }}</strong>
                 @endguest
             </a>
             <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                 <li><a class="dropdown-item" href="#">Profile</a></li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>
                 <li>
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </li>
             </ul>
         </div>
     </div>
 </div>
