<div class="footer__info">
    <h4 class="footer__info_name heading_thrid">AdCon</h4>

    <ul class="footer__info_list">
        <li class="list__city li">Miasto 00-000</li>
        <li class="list__street li">Ul. Ulica 123</li>
        <li class="list__regon li">000000000</li>
        <li class="list__nip li">0000000000000</li>
    </ul>

    <div class="footer__info-copy">Copyright</div>
</div>
<div class="footer__newslett">
    <h4 class="footer__newslett_name heading_thrid">Newsletter</h4>
    <form action="#" class="newsletter__form">
        <input type="email" class="newsletter__form_email register__input" placeholder="Podaj email">
        <button class="newsletter__form_button btn_first">Zapisz się</button>
    </form>
</div>
<div class="footer__contact">
    <h4 class="footer__cont_name heading_thrid">Kontakt</h4>
    <div class="footer__contact_content">
        <ul class="footer__contact_list">
            <li class="list__email li"><span>Email: </span> contact@adcom.com</li>
            <li class="list__phone li"><span>Nr telfonu: </span> 123456789</li>
            <li class="list__fax li"><span>Fax: </span>(00) 1234567  </li>
            <li class="list__nip li">0000000000000</li>
        </ul>
        <form action="{{ Route('Contact') }}" class="footer__contact_form">
            <button class="contact_form__button btn_first">Formularz kontaktowy</button>
        </form>
    </div>
</div>
