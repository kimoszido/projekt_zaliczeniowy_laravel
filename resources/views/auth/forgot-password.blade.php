<div class="forgot_password">
        <div class="logo_box">
            <a href="/">
                <img src=" {{ asset('img/icon.png') }}" alt="Adcom" class="header__logo">
            </a>
        </div>

        <div class="forgot_password__text paragraph">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="forgot_password__form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label class="forgot_password__form_label paragraph" for="email" :value="__('Email')" />

                <x-input id="email" class="forgot_password__form_input" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="forgot_password__button">
                <button class="btn_first">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
</div>
