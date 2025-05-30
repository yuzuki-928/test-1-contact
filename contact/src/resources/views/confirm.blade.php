<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>

      <form class="form" action="/contacts" method="post">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
              </td>
            </tr>

            

            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                    <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                    <input type="address" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                    <input type="building" name="building" value="{{ $contact['building'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                    <input type="id" name="id" value="{{ $contact['id'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header"></th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
              </td>
            </tr>

          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <button class="form__button-submit--b" type="submit">修正</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
