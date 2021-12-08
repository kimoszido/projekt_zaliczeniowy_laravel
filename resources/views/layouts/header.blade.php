

<header class="header">
    <div class="header__top">
        <div class="header__logo_box">
            <a href="{{ route('home') }}" class="header__logo_link">
                <img src=" {{ asset('img/icon.png') }}" alt="Adcom" class="header__logo">
            </a>
        </div>
        <form action="#" class="header__search">
            <input type="text" class="header__search_input" placeholder="Search products">
            <button class="header__search_button"><i class="icon-icon_01"></i></button>
        </form>
        <div class="header__login_box">
            @if (Route::has('login'))
            @auth
                @include('auth.login')

                @else
                @include('auth.guest')
            @endauth
            @endif
        </div>
        <div class="header__my_shop_card">
            <a href="{{ route('cart.list') }}" class="header__my_shop_card__link btn_first">Twój koszyk</a>
        </div>
    </div>
    <div class="navigation_top">
        @foreach($category_list as $cat)
        @if ($cat->level == 1)
        <a href="{{route('categoryMain',['name'=>$cat->name, 'id'=>$cat->id])}}" class="navigation_top__link ">
            {{$cat->name}}
        </a>
        @endif
        @endforeach
    </div>
</header>
<div class="active_category">
@foreach ($category_list as $cat )
    @if ($cat->level == 1)
    <span>{{$cat->name}}</span><span class="active_category__mdash">&mdash;</span>
    @endif

@endforeach
</div>
