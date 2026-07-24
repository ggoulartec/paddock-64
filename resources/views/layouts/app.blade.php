<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Paddock 64')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<svg width="0" height="0" style="position:absolute">
  <symbol id="car-icon" viewBox="0 0 200 90">
    <path d="M10 68 C10 50 26 46 40 44 L58 24 C63 18 72 14 82 14 L128 14 C140 14 148 20 152 30 L162 44 C178 46 190 52 190 68 L190 72 L10 72 Z" fill="currentColor"/>
    <circle cx="52" cy="72" r="15" fill="var(--asfalto)"/>
    <circle cx="52" cy="72" r="6" fill="currentColor"/>
    <circle cx="148" cy="72" r="15" fill="var(--asfalto)"/>
    <circle cx="148" cy="72" r="6" fill="currentColor"/>
    <path d="M66 42 L78 24 L122 24 L134 42 Z" fill="var(--concreto)" opacity="0.35"/>
  </symbol>
</svg>

<header class="topbar">
  <div class="topbar-inner">
    <a href="{{ route('vitrine.index') }}" class="logo">
      <div class="logo-mark">1:64</div>
      <div class="logo-text">PADDOCK<span>64</span></div>
    </a>
    <nav class="mainnav">
      <a href="{{ route('vitrine.index') }}" class="{{ request()->routeIs('vitrine.*') || request()->routeIs('item.*') ? 'active' : '' }}">Vitrine</a>
      <a href="{{ route('leiloes.index') }}" class="{{ request()->routeIs('leiloes.*') ? 'active' : '' }}">Leilões</a>
      <a href="{{ route('sorteios.index') }}" class="{{ request()->routeIs('sorteios.*') ? 'active' : '' }}">Sorteios</a>
      <a href="{{ route('comunidade.index') }}" class="{{ request()->routeIs('comunidade.*') ? 'active' : '' }}">Comunidade</a>
    </nav>
    <div class="topbar-actions">
      <div class="icon-btn">🔍</div>
      <div class="icon-btn">👤</div>
      <a href="{{ route('chat.index') }}" class="icon-btn" style="text-decoration:none;">💬</a>
    </div>
  </div>
</header>

<main>
  @yield('content')
</main>

<footer>
  <div class="wrap">
    <div class="foot-grid">
      <div class="foot-col">
        <div class="logo" style="margin-bottom:14px;">
          <div class="logo-mark">1:64</div>
          <div class="logo-text">PADDOCK<span>64</span></div>
        </div>
        <p style="font-size:13px;color:var(--cromo);max-width:260px;line-height:1.6;">A área VIP dos colecionadores de miniaturas em escala 1:64 do Brasil.</p>
      </div>
      <div class="foot-col">
        <h4>PLATAFORMA</h4>
        <a href="{{ route('vitrine.index') }}">Vitrine</a>
        <a href="{{ route('leiloes.index') }}">Leilões ao vivo</a>
        <a href="{{ route('sorteios.index') }}">Sorteios da comunidade</a>
      </div>
      <div class="foot-col">
        <h4>COMUNIDADE</h4>
        <a href="{{ route('comunidade.index') }}">Feed Paddock64</a>
        <a href="{{ route('chat.index') }}">Mensagens</a>
      </div>
      <div class="foot-col">
        <h4>SUPORTE</h4>
        <a href="#">Central de ajuda</a>
        <a href="#">Termos e sorteios</a>
        <a href="#">Fale conosco</a>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© {{ date('Y') }} PADDOCK64</span>
      <span>LARAVEL + BLADE — V0.1</span>
    </div>
  </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
