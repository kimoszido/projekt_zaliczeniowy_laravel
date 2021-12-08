<div class="login_box__user_login">
    <span class="login_box__text">Zalogowany: </span>
    <a href="" class="login_box__link_accont">{{Auth::user()->name}}</a>
</div>
<a href="{{route('logout')}}" class="logout__link btn_second">Wyloguj</a>


