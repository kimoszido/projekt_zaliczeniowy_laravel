<div class="main_content">

    <div class="description">
        <h2 class="description__heading-sec heading_sec">AAAAAAAAAAAAAAAA</h2>
        <p class="description__paragraph paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nobis in. Impedit ducimus, asperiores voluptatem pariatur nesciunt vel? Reprehenderit culpa optio vitae, alias perferendis suscipit labore quae dolorem. Placeat, tempora!</p>
    </div>
    <div class="cards">
        @foreach($product_list as $product)

        <div class="card">
            <div class="card__top">
                @foreach ($img_list as $img)
                @if ($product->id == $img->id_product)
                <img class="card__img" src="{{ asset('img/products/'.$img->path_img.'.jpg')}}" alt="products">
                @endif
                @endforeach
            </div>
            <div class="card__bot">
                <h4 class="card__heading heading-four">
                    {{$product->name}}
                </h4>
                <div class="card__description">
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
                        <div class="card__delivery">
                            24h
                            <div class="card__delivery_icon">
                            <i class="icon-icon_13 icon__delivery"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card__price">
                    {{$product->price_netto + $product->price_netto * $product->vat}}


                        zł
                    </div>
                </div>

            </div>
            <div class="card__buttons">
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="card__buttons_form_cart">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $product->price_netto + $product->price_netto * $product->vat }}" name="price">
                    @foreach ($img_list as $img)
                    @if ($product->id == $img->id_product)
                        <input type="hidden" value="{{ $img->path_img }}" name="image">
                    @endif
                    @endforeach
                    <input type="hidden" value="1" name="quantity">
                    <button class="card__buttons_icon">
                        <i class="icon-icon_06 icon__more"></i>
                    </button>
                </form>
                <div class="card__buttons_btn">
                    <a href="{{ Route('product', ['id'=>$product->id]) }}" class="btn_first card__buttons_link">Więcej</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
