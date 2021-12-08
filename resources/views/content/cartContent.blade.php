
<div class="cart">
    @if ($cartItems->isEmpty())
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    @endif
    <h2 class="cart__heading heading_sec">Cart List</h2>
    <div class="cart__content">
        <table class="cart__content_table" cellspacing="0">
            <thead>
            <tr class="content_table__head">
                <th class=""></th>
                <th class="content_table__head_name">Name</th>
                <th class="content_table__head_Quantity">
                <span class="" title="Quantity">Qtd</span>
                <span class="">Quantity</span>
                </th>
                <th class="content_table__head_price"> price</th>
                <th class="content_table__head_remove"> Remove </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
            <tr class="content_table__row">
                <td class="content_table__img">
                    <img src="{{ asset('img/products/'.$item->attributes->image.'.jpg') }}" class="w-20 rounded" alt="Thumbnail">
                </td>
                <td>
                <a clas="content_table__link" href="{{ route('product', ['id'=>$item->id])}}">
                {{ $item->name }}
                </a>
                </td>
                <td class="content_table__quantity">
                <div class="h-10 w-28">
                    <div class="quantity">

                    <form class="quantity__form" action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id}}" >
                        <div class="quantity__form_change">
                            <span class="form__button_plus btn_third">+</span>
                            <input class="quantity__form_input form__input register__input" type="number" name="quantity" value="{{ $item->quantity }}"/>
                            <span class="form__button_minus btn_third">-</span>
                        </div>
                        <button type="submit" class="quantity__form_button btn_first">update</button>
                    </form>
                    </div>
                </div>
                </td>
                <td class="content_table__price">
                <span class="paragraph">
                    ${{ $item->price }}
                </span>
                </td>
                <td class="content_table__remove">
                <form class="remove__form" action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="id">
                    <button class="remove__form_button btn_second">x</button>
                </form>

                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
        <div class="cart__content_total_price">
            Total: ${{ Cart::getTotal() }}
        </div>
        <div class="cart__content_buy">
            <form action="#" class="buy_form">
                @csrf
                <button class="buy__form_button btn_first">Buy It</button>
            </form>
        </div>
        <div class="cart__content_clear">
            <form class="clear_form" action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button class="clear__form_button btn_second">Remove All Cart</button>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/product.js') }}"></script>

