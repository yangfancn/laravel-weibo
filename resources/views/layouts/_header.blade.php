<nav class="navbar navbar-expand-md navbar-light">
  <a class="navbar-brand" href="{{ route('home') }}">Weibo app</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('help') }}">帮助</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">登录</a>
      </li>
    </ul>
  </div>
</nav>
