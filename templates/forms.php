    <div class="form-container" id="form-container">
        <form class="auth-form" name="loginForm" method="POST" id="login-form">
            <ul class="auth-form-list">
                <li>
                    <label for="loginForm-email-input" class="form-label auth-form-label">Логин</label>
                    <input name="email" id="loginForm-email-input" type="email" class="form-input login-input" required placeholder="   example@example.com">
                </li>
                <li>
                    <label for="loginForm-password-input" class="form-label auth-form-label">Пароль</label>
                    <input name="password" id="loginForm-password-input" type="password" class="form-input password-input" required>
                </li>
                <li>
                    <input type="submit" class="auth-form-submit-button" value="Войти">
                </li>
            </ul>
            <div class="auth-form-toggle" id="login-form-button-to-signup">Регистрация</div>
            <div class="close-form-button">X</div>
        </form>
        <form class="auth-form" id="signup-form">
            <ul class="auth-form-list">
                <li>
                    <label for="signupForm-name-input" class="form-label name-form-label">Имя</label>
                    <input name="name" id="signupForm-name-input" type="name" class="form-input name-input" required placeholder="   Иван" pattern="[А-Яа-я\s-]*" title="Используйте русские буквы для ввода">
                </li>
                <li>
                    <label for="signupForm-email-input" class="form-label email-form-label">E-mail</label>
                    <input name="email" id="signupForm-email-input" type="email" class="form-input email-input" required placeholder="   example@example.com" title="Введите email в формате XXX@XXX.XX">
                </li>
                <li>
                    <label for="signupForm-phone-input" class="form-label phone-form-label">Телефон</label>
                    <input name="phone" id="signupForm-phone-input" type="text" class="form-input phone-input" required placeholder="   89007778899" pattern="8\d{3}\d{3}\d{2}\d{2}" title="Введите телефон в формате 8XXXXXXXX, например 89007778899">
                </li>
                <li>
                    <label for="signupForm-password-input" class="form-label password-form-label">Пароль</label>
                    <input name="password" id="signupForm-password-input" type="password" class="form-input password-input" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" title="Минимум 6 символов. Обязательно наличие букв и цифр">
                </li>
                <li>
                    <label for="signupForm-passwordRepeat-input" class="form-label password-form-label">Повторите пароль</label>
                    <input name="passwordRepeat" id="signupForm-passwordRepeat-input" type="password" class="form-input password-input" required title="Повторите пароль">
                </li>
                <li class="checkbox-li">
                    <label for="signupForm-checkbox-input" class="form-label checkbox-form-label">Соглашение на обработку персональных данных</label>
                    <input name="checkbox" id="signupForm-checkbox-input" type="checkbox" class="form-input form-signup-checkbox" required>
                </li>
                <li>
                    <input type="submit" class="auth-form-submit-button" value="Зарегистрироваться">
                </li>
            </ul>
            <div class="auth-form-toggle" id="signup-form-button-to-login">Вход</div>
            <div class="close-form-button">X</div>
        </form>
    </div>