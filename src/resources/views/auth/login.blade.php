<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <title>Login</title>
    </head>

    <body>
        <header>
            <div class="logo">FashionablyLate</div>
            <a href="{{ route('register') }}" class="login-link">register</a>
        </header>

        <div class="container">
            <h2>Login</h2>

            <div class="form-box">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例:sample@sample.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例:coachtech06">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <button type="submit">ログイン</button>
                </form>
            </div>
        </div>
    </body>
</html>
