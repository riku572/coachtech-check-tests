<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    </head>

    <body>
        <header>
            <div class="logo">FashionablyLate</div>
            <a href="/login" class="login-link">login</a>
        </header>

        <div class="container">
            <h2>Register</h2>

            <div class="form-box">
                <form method="POST" action="{{ route('register.perform') }}">
                    @csrf

                    <label for="name">お名前</label>
                    <input type="text" id="name" name="name" placeholder="例:山田 太郎" required>
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例:sampl@sample.com" required>
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例:coachtech06" required>
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <button type="submit">登録</button>
                </form>
            </div>
        </div>
    </body>
</html>
