


<nav class="left_nav">

        @foreach ($category_list as $cat)
        @if ($cat->level == 1)
        <ul class="first_category">
            <form action="#" class="first_category__form">
                <input type="checkbox" class="first_category__checkbox{{$cat->id}} checkbox_hidden" id="nav__first_checkbox{{$cat->id}}">
                <label class="first_category__label" for="nav__first_checkbox{{$cat->id}}">
                    <li class="first_category__name">
                        <a href="{{route('categoryMain', ['name'=>$cat->name, 'id'=>$cat->id])}}" class="first_category__link">
                            {{$cat->name}}
                        </a>
                        <i class="nav__icon icon-icon_05"></i>
                    </li>
                </label>
                <ul class="second_category{{$cat->id}}">
                @foreach ($category_list as $category)
                @if ($category->id_up == $cat->id && $category->level == 2)

                    <form action="#" class="second_category__form">
                        <input type="checkbox" class="second_category__checkbox{{$category->id}} checkbox_hidden" id="nav__second_checkbox">
                        <label for="nav__second_checkbox" class="second_category__label">
                            <li class="second_category__name">
                                <a href="{{route('category', ['name'=>$category->name, 'id'=>$category->id])}}" class="second_category__link">
                                    {{$category->name}}
                                </a>
                            </li>

                        </label>
                    </form>
                @endif
                @endforeach
                </ul>
            </form>
        </ul>
    @endif

    @endforeach
</nav>

<!--

-->
