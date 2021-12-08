<div class="product">
    <h2 class="heading_sec product__name">{{ $actual_product->name }}</h2>

    <div class="product__top">
        <div class="product__top_left">
            @foreach ($img_list as $img)
            @if ($product->id == $img->id_product)
            <img src="{{ asset('img/products/'.$img->path_img.'.jpg')}}" alt="" class="product__img">
            @endif
            @endforeach
        </div>
        <div class="product__top_right">
            <ul class="product__top_description">
                @foreach ($features_product as $f_product)
                    <li>{{ $f_product->name }} <i class="icon-icon_12 icon__description"></i> {{ $f_product->value }}</li>
                @endforeach
            </ul>
            <div class="product__panel_buy">
                <div class="prodict__is_avalible">
                    @if ($actual_product->is_avalible == 1)
                            Dostępny
                        <div class="product__acces_icon">
                            <i class="icon-icon_12 icon__is_avalible"></i>
                        </div>
                        @else
                            Niedostepny
                        <div class="product__acces_icon">
                            <i class="icon-icon_27 icon__not_avalible"></i>
                        </div>
                    @endif
                </div>
                <div class="product__info_buy">
                    <div class="product__price">
                        {{$actual_product->price_netto + $actual_product->price_netto * $actual_product->vat}} zł
                    </div>

                    <div class="product__shop_card">
                        <form method="GET" action="" class="product__buy_form">
                            <span class="form__button_plus btn_four">+</span>
                            <input type="text" class="form__input" value="1">
                            <span class="form__button_minus btn_four">-</span>
                            <input type="submit" class="form__button btn_third" value="Kup teraz">
                        </form>
                    </div>
                    <div class="product__question">
                            <a href="{{ Route('productContact', ['id_product'=>$actual_product->id]) }}" class="product__question_link btn_second">
                                <span>Napisz do nas</span>
                                <i class="icon-icon_12 icon__email"></i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__bottom">
        <div class="product__navigation">
            @foreach($menu_list as $menu)
            <a href="#{{$menu->id}}" class="product__navigation_link ">
                {{$menu->name}}
            </a>
            @endforeach
        </div>
        <div id="1" class="product__description">
            <h1 class="heading_first">Opis</h1>
            <div class="description__box">
                <h2 class="heading_sec">{{$actual_product->name}}</h2>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum rerum aliquam tenetur corrupti! Eaque non repellat voluptatum, laboriosam, doloremque obcaecati amet provident consequuntur deserunt id animi error, reprehenderit vero neque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ullam aspernatur eligendi! Dolor quidem commodi, veritatis fugit laborum ipsam qui blanditiis quasi praesentium eaque, natus, enim cumque consequuntur eligendi necessitatibus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nisi modi blanditiis, veniam aspernatur dolores sequi aperiam exercitationem, dignissimos porro optio delectus molestiae! Perferendis illum doloremque delectus animi sequi nihil?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error asperiores tenetur nulla suscipit? Nobis eveniet sequi odio, dignissimos quaerat blanditiis, dolorem sed praesentium ex et magnam similique id ducimus officia.</p>
            </div>
        </div>
        <div id="2" class="product__features">
            <h1 class="heading_first">Specyfikacja</h1>
            <ul class="features__list">
                @foreach ($features_product as $product)
                <li class="features__list_element">
                    <span class="list_element__name">{{$product->name}}</span>
                    <i class="icon-icon_12 list_element__icon"></i>
                    <span class="list_element__value">{{$product->value}}</span>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="3" class="product__opinions">
            <h2 class="heading_first">Opinie</h2>
            @foreach ($opinions as $opinion)


            <div class="opinions__opinion">
                <h4 class="heading-four opinion__heading">
                    {{$opinion->name}}
                    <span class="opinion__date">
                        {{$opinion->created_at}}
                    </span>
                </h4>

                <p class="paragraph">{{$opinion->content}}</p>
            </div>
            @endforeach
            <form method="POST" action="{{route('add_opinion', ['id'=>$actual_product->id])}}" class="opinions__form_add">
                @csrf
                <textarea name="content" id="content" cols="30" rows="5" class="form_add__textarea" placeholder="Dodaj opinie o produkcie"></textarea>
                <button class="form_add__button btn_first">Wyślij</button>
            </form>
        </div>
        <h2 class="heading_first">Polecane produkty z tej samej kategorii</h2>
        <div id="4" class="product__other">
            @foreach ($products_actual_category as $product)
            @foreach ($actual_category as $category)
            @if ($product->id_category == $category->id_category && $product->id_product != $actual_product->id)
            <a href="{{ Route('product', ['id'=>$product->id_product]) }}" class="other_card__link">
            <div class="product__other_card">
                <div class="other_card__img">
                    @foreach ($img_list as $img)
                    @if ($product->id_product == $img->id_product)
                    <img src="{{ asset('img/products/'.$img->path_img.'.jpg')}}" alt="" class="card__img">
                    @endif
                    @endforeach
                </div>
                <div class="other_card__description">
                    <h4 class="heading_five heading-four">{{$product->name_product}}</h4>
                    <div class="card_description-top">
                        <div class="card__acces">
                            @if($product->is_avalible = 1)
                            Dostepny
                            <div class="card__acces_icon">
                                <i class="icon-icon_12 icon__is_avalible"></i>
                            </div>
                            @else
                            Niedostepny
                            <div class="card__acces_icon">
                                <i class="icon-icon_27 icon__not_avalible"></i>
                            </div>
                            @endif
                            <!--<div class="card__acces_icon">
                                icon
                            </div>-->
                        </div>
                    </div>
                    <div class="card__price">
                    {{$product->price_netto + $product->price_netto * $product->vat}}

                        zł
                    </div>
                </div>

            </div>
            </a>
            @endif
            @endforeach
            @endforeach
        </div>
    </div>
</div>
<script src="{{ asset('js/product.js') }}"></script>


