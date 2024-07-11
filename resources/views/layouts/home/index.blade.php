@extends('layouts.main')
@section('content')
    <header class="home" id="#">
        <div class="home-container">
            <div class="home-content">
                <h2>Burger</h2>
                <p>Hamburger, a sandwich consisting of one or more cooked beef patties, placed inside a sliced bread roll or bun roll.</p>
                <a href="{{url('/articles/order')}}" class="btn"><span>Order</span></a>
                <div class="move">
                    <img src="{{ asset('build/assets/images/logo.png') }}" alt="burger logo" class="logo" style="width: 400px; height:350px">
                </div>
            </div>
            <div class="burger-image">
                <img src="{{ asset('build/assets/images/home.png') }}" alt="burger" class="burger">
            </div>
        </div>
        {{-- <div class="chat"><img src="{{ asset("build/assets/images/items/chat.png") }}" alt="chat icon" class="chat-img"></div> --}}
    </header>

    <section id="menu">
        <div class="title-container">
            <h1 class="menu-title">Best Seller</h1>
        </div>
        <div class="menu-container">
            <button id="next">&raquo;</button>
            <button id="prev">&laquo;</button>
            <div class="img-box" id="box1">
                <img src="{{ asset("build/assets/images/menu/3.jpg
                ") }}" alt="best seller item" class="best-image">
                <div class="menu-text">
                    <h3>Burger One</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, officia?</p>
                </div>
            </div>
            <div class="img-box box2" id="box2">
                <img src="{{ asset("build/assets/images/menu/7.jpg
                ") }}" alt="best seller item" class="best-image" >
                <div class="menu-text">
                    <h3>Burger Two</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, officia?</p>
                </div>
            </div>
            <div class="img-box box3" id="box3">
                <img src="{{ asset("build/assets/images/menu/9.jpg
                ") }}" alt="best seller item" class="best-image">
                <div class="menu-text">
                    <h3>Burger Three</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, officia?</p>
                </div>
            </div>
            <div class="img-box box4" id="box4">
                <img src="{{ asset("build/assets/images/menu/10.jpg
                ") }}" alt="best seller item" class="best-image">
                <div class="menu-text">
                    <h3>Burger Four</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, officia?</p>
                </div>
            </div>
        </div>
    </section>
    <section id="menu-list">
        <div class="item-container">
            <h1 class="item-title">Menu Items</h1>
        </div>
        <div class="list-container">
            <div class="items">
                <img src="{{ asset("build/assets/images/menu/1.jpg") }}" alt="menu item" class="item-img">
                <img src="{{ asset("build/assets/images/menu/2.jpg") }}" alt="menu item" class="item-img">
                <img src="{{ asset("build/assets/images/menu/4.jpg") }}" alt="menu item" class="item-img">
                <img src="{{ asset("build/assets/images/menu/5.jpg") }}" alt="menu item" class="item-img">
                <img src="{{ asset("build/assets/images/menu/6.jpg") }}" alt="menu item" class="item-img">
                <img src="{{ asset("build/assets/images/menu/8.jpg") }}" alt="menu item" class="item-img">
                <img src="{{ asset("build/assets/images/menu/11.jpg") }}" alt="menu item" class="item-img">
                <img src="{{ asset("build/assets/images/menu/12.jpg") }}" alt="menu item" class="item-img">
            </div>
        </div>
    </section>
    <section id="review">
        <div class="review-title">
            <h1 class="title-one">Review</h1>
        </div>
        <div class="review-container">
            <div class="review-bg">
                <div class="bg-one"></div>
                <div class="bg-two"></div>
                <div class="text-box">
                    <div class="card">
                        <p class="card-paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam molestias laborum sequi sint, ex consectetur.</p>
                        <img src="{{ asset('build/assets/images/menu/8.jpg') }}" alt="review-profile" class="review-img">
                        <h3 class="card-name">Name One</h3>
                        <h6 class="card-sub">Chef</h6>
                    </div>
                    <div class="card">
                        <p class="card-paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam molestias laborum sequi sint, ex consectetur.</p>
                        <img src="{{ asset('build/assets/images/menu/8.jpg') }}" alt="review-profile" class="review-img">
                        <h3 class="card-name">Name Two</h3>
                        <h6 class="card-sub">Sales</h6>
                    </div>
                    <div class="card">
                        <p class="card-paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam molestias laborum sequi sint, ex consectetur.</p>
                        <img src="{{ asset('build/assets/images/menu/8.jpg') }}" alt="review-profile" class="review-img">
                        <h3 class="card-name">Name Three</h3>
                        <h6 class="card-sub">Manager</h6>
                    </div>
                    <div class="card">
                        <p class="card-paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam molestias laborum sequi sint, ex consectetur.</p>
                        <img src="{{ asset('build/assets/images/menu/8.jpg') }}" alt="review-profile" class="review-img">
                        <h3 class="card-name">Name Four</h3>
                        <h6 class="card-sub">Customer</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="Footer">
        <div class="footer-container">
            <div class="footer-sub">
                <h2 class="foot-title">Burger Shop</h2>
                <p class="foot-p">Any Suggestion and recommand.</p>
                <div class="footer-input">
                    <form>
                        <input type="text" placeholder="Enter your Email">
                        <input type="submit" value="subscribe">
                    </form>
                </div>
            </div>
            <div class="footer-add">
                <div class="footer-box">
                    <h2 class="foot-title">Schedule</h2>
                    <h6 class="foot-bd">Monday - Firday</h6>
                    <h6 class="foot-bd">Open : 9am - 7pm</h6>
                    <h6 class="foot-bd">Close: Saturday - Sunday</h6>
                </div>
                <div>
                    <h2 class="foot-title">Address</h2>
                    <h6 class="foot-bd">Dhamar Yone street, Hlaing Township, Yangon</h6>
                </div>
            </div>
            <div class="footer-contact">
                <div class="footer-box">
                    <h2 class="foot-title">Follow us</h2>
                    <a href="#" class="foot-link">Facebook</a>
                    <a href="#" class="foot-link">www.burgershop.com</a>
                    <a href="#" class="foot-link">Instagram</a>
                </div>
                <div>
                    <h2 class="foot-title">Contact</h2>
                    <h6 class="foot-bd">Phone : +959970008000</h6>
                    <h6 class="foot-bd">Email : burgershop@gmail.com</h6>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Aung Kyaw Min Htet || &copy;CopyRight 2023</p>
    </footer>
@endsection
