 <!-- Nav Start -->
 <div class="classynav">
     <ul>
         <li class="active"><a href="index.html">Home</a></li>
         <li><a href="#">Categories</a>
             @if (count($categories))
                 <ul class="dropdown">
                     @foreach ($categories as $category)
                         <li><a href="{{ route('categories.index', $category) }}">{{ $category->name }}</a></li>
                     @endforeach
                 </ul>
             @endif
         </li>
         <li><a href="#">Mega Menu</a>
             <div class="megamenu">
                 <ul class="single-mega cn-col-4">
                     <li class="title">Catagory</li>
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html">About Us</a></li>
                     <li><a href="blog-post.html">Blog Post</a></li>
                     <li><a href="receipe-post.html">Receipe Post</a></li>
                     <li><a href="contact.html">Contact</a></li>
                     <li><a href="elements.html">Elements</a></li>
                 </ul>
                 <ul class="single-mega cn-col-4">
                     <li class="title">Catagory</li>
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html">About Us</a></li>
                     <li><a href="blog-post.html">Blog Post</a></li>
                     <li><a href="receipe-post.html">Receipe Post</a></li>
                     <li><a href="contact.html">Contact</a></li>
                     <li><a href="elements.html">Elements</a></li>
                 </ul>
                 <ul class="single-mega cn-col-4">
                     <li class="title">Catagory</li>
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html">About Us</a></li>
                     <li><a href="blog-post.html">Blog Post</a></li>
                     <li><a href="receipe-post.html">Receipe Post</a></li>
                     <li><a href="contact.html">Contact</a></li>
                     <li><a href="elements.html">Elements</a></li>
                 </ul>
                 <div class="single-mega cn-col-4">
                     <div class="receipe-slider owl-carousel">
                         <a href="#"><img src="img/bg-img/bg1.jpg" alt=""></a>
                         <a href="#"><img src="img/bg-img/bg6.jpg" alt=""></a>
                     </div>
                 </div>
             </div>
         </li>
         @auth
             <li>
                 <a href="">Welcome {{ auth()->user()->name }}</a>
                 <ul class="dropdown">
                     <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
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
