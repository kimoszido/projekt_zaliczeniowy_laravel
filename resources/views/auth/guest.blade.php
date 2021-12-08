<div class="login_box">
    <input type="checkbox" class="login__checkbox" id="checkbox_login">
    <label for="checkbox_login" class="login__label btn_third">
        Zaloguj
    </label>
    <div class="login__form_box">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4 paragraph" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 paragraph" :errors="$errors" />
        <form method="POST" action="{{ route('login') }}" class="login__form">
            @csrf
            <input type="email" class="login_form__login_input login_form__input" id="email" name="email" placeholder="Email" required>
            <label for="email" class="login_form__login_label login_form__label" :value="__('Email')" >Email</label>
            <input type="password" class="login_form__pass_input login_form__input" id="pass" name="password" placeholder="Login" required>
            <label for="pass" class="login_form__pass_label login_form__label" :value="__('Password')">Hasło</label>

            <div class="form__bot">
                <button class="login_form__login_submit btn_second">
                    {{ __('Log in') }}
                </button>


                @if (Route::has('password.request'))
                    <a class="form__bot_link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>


        </form>
    </div>
</div>
<div class="registration_box">
        <a href="{{ route('registration') }}" class="registration__link btn_second"> Zarejestruj</a>
</div>

