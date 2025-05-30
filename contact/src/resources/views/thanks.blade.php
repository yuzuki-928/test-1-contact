<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <header class="header">
  </header>
  <main>
    <div class="thanks__content">
      <form class="form">
      @csrf
        <div class="thanks__heading">
            <h2>お問い合わせありがとうございました</h2>
            <span class="thanks__back">Thank you</span>
        </div>
        <div>
            <button class="home-submit" type="submit" href="index.blade.php">HOME</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
