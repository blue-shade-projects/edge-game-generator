<div class="register">
    <form>
        <div class="input username-input">
            <label for="username">Username</label>
            <input
                    type="text"
                    name="username"
                    wire:model="username"
                    wire:keyup.debounce.250ms="checkUsername"
            >
        </div>

        <div class="input email-input">
            <label for="email">Email</label>
            <input
                    type="text"
                    name="email"
                    wire:model="email"
                    wire:keyup.debounce.250ms="checkEmail"
            >
        </div>

        <div class="input email-input-confirm">
            <label for="email_confirmation">Confirm you email</label>
            <input
                    type="text"
                    name="email_confirmation"
                    wire:model="email_confirmation"
                    wire:keyup.debounce.250ms="checkEmailConfirm"
            >
        </div>

        <div class="input password-input">
            <label for="password">Password</label>
            <input
                    type="password"
                    name="password"
                    wire:model="password"
            >
        </div>

        <div class="input password-input">
            <label for="password_confirmation">Confirm your password</label>
            <input
                    type="password"
                    name="password_confirmation"
                    wire:model="password_confirmation"
                    wire:keyup.debounce.250ms="checkPasswordConfirm"
            >
            @if(!$password_confirmed)
                <span>Passwords dont match!</span>
            @endif
        </div>

        <div class="submit">
            <div class="button-default" wire:click="register">Submit</div>
        </div>
    </form>
</div>
