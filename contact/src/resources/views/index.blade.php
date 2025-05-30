<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
    <hr class="hr"><br>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>

      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__name--text">
              <input type="text" name="last_name" class="name--text__1" placeholder="例:山田" value="{{ old('last_name') }}" />
              <input type="text" name="first_name" class="name--text__2" placeholder="例:太郎" value="{{ old('first_name') }}" />
            </div>
            <div class="form__error">
                @error('last_name')
                {{ $message }}
                @enderror
            </div>
            <div class="form__error">
                @error('first_name')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <input type="radio" name="gender" value="男性" />男性</span>
              <input type="radio" name="gender" value="女性" />女性</span>
              <input type="radio" name="gender" value="その他" />その他
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" class="male--text" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__tel--text">
              <input type="tel" name="tel" class="tel--text" placeholder="080" value="{{ old('tel') }}" />-
               <input type="tel" name="tel" class="tel--text" placeholder="1234" value="{{ old('tel') }}" />-
              <input type="tel" name="tel" class="tel--text" placeholder="5678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
                @error('tel')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" class="add--text" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="building" name="building" class="build--text" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__id--text">
            <select type="id" name="id" class="id--text" placeholder="選択してください" value="{{ old('id') }}" />
                <option value="">選択してください</option>
                <option value="10001">商品の仕様について</option>
                <option value="10002">商品の交換について</option>
                <option value="10003">商品の購入について</option>
                <option value="10004">商品の返品について</option>
            </select><br />
            </div><div class="form__error">
                @error('id')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" class="content--text" placeholder="お問い合わせ内容をご記載ください" value="{{ old('name') }}" /></textarea>
            </div>
            <div class="form__error">
                @error('detail')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
