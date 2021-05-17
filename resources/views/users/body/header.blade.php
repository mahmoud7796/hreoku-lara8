<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{route('home')}}"><span>DI</span>AB</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="a')}}ssets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('home')}}">Home</a></li>

                <li class="drop-down"><a href="{{route('contact-us')}}">About</a>
                    <ul>
                        <li><a href="{{route('contact-us')}}">About Us</a></li>
                        <li><a href="{{route('team')}}">Team</a></li>
                        <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                        <li class="drop-down"><a href="#">Deep Drop Down</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('pricing')}}">Pricing</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact-us')}}">Contact</a></li>
                <li><a href="{{route('admin.login')}}">Login</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
            <a href="https://twitter.com/The_Black_XXX" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="https://www.facebook.com/Mahmoud7love.R" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://www.instagram.com/mahmoud_606_/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="https://www.linkedin.com/in/mahoud-diab/" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>

    </div>
</header>
