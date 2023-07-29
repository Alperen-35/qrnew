<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yönetim</title>
    <link rel="stylesheet" href="/front/css/yonetimpaneli.css">
</head>
<body>
      <form autocomplete='off' class='form' action="{{ route('loginPost') }}" method="POST">
        @csrf
        <div class='control'>
          <h1>
            Yönetim 
          </h1>
        </div>
        <div class='control block-cube block-input'>
          <input name='email' placeholder='Kullanıcı Adı' type='text' required>
          <div class='bg-top'>
            <div class='bg-inner'></div>
          </div>
          <div class='bg-right'>
            <div class='bg-inner'></div>
          </div>
          <div class='bg'>
            <div class='bg-inner'></div>
          </div>
        </div>
        <div class='control block-cube block-input'>
          <input name='password' placeholder='Şifre' type='password' required>
          <div class='bg-top'>
            <div class='bg-inner'></div>
          </div>
          <div class='bg-right'>
            <div class='bg-inner'></div>
          </div>
          <div class='bg'>
            <div class='bg-inner'></div>
          </div>
        </div>
        <button class='btn block-cube block-cube-hover' type='submit'>
          <div class='bg-top'>
            <div class='bg-inner'></div>
          </div>
          <div class='bg-right'>
            <div class='bg-inner'></div>
          </div>
          <div class='bg'>
            <div class='bg-inner'></div>
          </div>
          <div class='text'>
            Giriş Yap
          </div>
        </button>
    </form>
    <div class="bottom">
      <p><span class="left"><a href="{{ route('/') }}">Anasayfa</a></span><span class="right"><a href="https://dnkreatif.com/" target="_blank">DN Kreatif</a></span></p>
  </div>
</body>
</html>
