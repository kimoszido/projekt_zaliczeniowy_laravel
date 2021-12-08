<div class="register">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 paragraph" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4 paragraph" :errors="$errors" />
    <form class="register_form" method="POST" action="{{ route('registered') }}">
        @csrf

        <!-- Name -->
        <div class="register__form_name">
            <x-label class="name__label register__label" for="name" :value="__('Name')" />

            <x-input class="name__input register__input" id="name" type="text" name="name" placeholder="Login" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="register__form_email">
            <x-label class="email__label register__label" for="email" :value="__('Email')" />

            <x-input class="email__input register__input" id="email" type="email" name="email" placeholder="Email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="register__form_pass">
            <x-label class="pass__label register__label" for="password" :value="__('Password')" />

            <x-input class="pass__input register__input" placeholder="Hasło"  id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="register__form_confirm_pass">
            <x-label class="confirm_pass__label register__label" for="password_confirmation" :value="__('Confirm Password')" />

            <x-input class="confirm_pass_input register__input" placeholder="Potwierdź hasło"  id="password_confirmation"
                            type="password"
                            name="password_confirmation" required />
        </div>

        <div class="registrate__form_btns">
            <x-button class="btns__btn btn_first">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
</div>

