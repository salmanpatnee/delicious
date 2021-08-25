 <!-- Nav Start -->
 <div class="classynav">
     <ul>
         <li class="{{ request()->routeIs('recipes.index') ? 'active' : '' }}"><a href="/">Home</a></li>
         <li class="{{ request()->routeIs('recipes') ? 'active' : '' }}"><a
                 href="{{ route('recipes') }}">Recipes</a></li>
         <li><a href="#">Categories</a>

             @if (count($categories))
                 <ul class="dropdown">
                     @foreach ($categories as $category)
                         <li>
                             <a href="{{ route('categories.index', $category) }}">
                                 {{ $category->name }}
                             </a>
                         </li>
                     @endforeach
                 </ul>
             @endif
         </li>

         @auth
             <li>
                 <a href="">Welcome {{ auth()->user()->name }}</a>
                 <ul class="dropdown">
                     @can('admin')
                         <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                     @endcan
                     <li>
                         <a href="">
                             <form id="logout-form" method="POST" action="{{ route('login.destroy') }}" class="hidden">
                                 @csrf
                                 <button type="submit">Logout</button>
                             </form>
                         </a>

                     </li>
                 </ul>
             </li>
         @else
             <li>
                 <a href="{{ route('register.create') }}">Register</a>
             </li>
             <li>
                 <a href="{{ route('login') }}">Login</a>
             </li>
         @endauth

     </ul>

     <!-- Newsletter Form -->
     <div class="search-btn">
         <i class="fa fa-search" aria-hidden="true"></i>
     </div>

 </div>
 <!-- Nav End -->
