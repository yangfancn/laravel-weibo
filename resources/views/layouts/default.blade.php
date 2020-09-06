<!doctype html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Weibo app') - Laravel 入门教程</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="/">Weibo app</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/help">帮助</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">关于</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">登录</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
