<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    html,body{height:100%}
    body{
      font-family:"Poppins",sans-serif;
      background:#07060a;
      color:#fff;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center;
      min-height:100vh;
      padding:2rem;
      text-align:center;
    }

    /* Background */
    .bg-animation {
      position: fixed; inset:0; z-index: -1;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a0a2e 50%, #0a0a0a 100%);
      background-image: url('/images/animated-lines-bg.svg');
    }
    .bg-animation::before {
      content: ''; position: absolute; width: 200%; height: 200%;
      background: radial-gradient(circle, rgba(138, 43, 226, 0.1) 1px, transparent 1px);
      background-size: 50px 50px;
      animation: bgScroll 20s linear infinite;
    }
    @keyframes bgScroll {
      0% { transform: translate(0, 0); }
      100% { transform: translate(50px, 50px); }
    }

    /* Logo Title */
    .app-logo-title {
      font-size: 2.8rem;
      font-weight: 800;
      margin-bottom: 1.8rem;
      color:#b36bff;
      text-shadow:
        0 0 10px #b36bff,
        0 0 20px #b36bff,
        0 0 40px #8a2be2,
        0 0 80px #5a00b8;
      animation: glowPulse 2.8s ease-in-out infinite;
    }
    @keyframes glowPulse {
      0%,100% { text-shadow: 0 0 10px #b36bff,0 0 20px #b36bff,0 0 40px #8a2be2; }
      50% { text-shadow: 0 0 20px #ff44ff,0 0 50px #cc33ff,0 0 80px #8a2be2; }
    }

    /* Box dengan border neon animasi */
    @property --a {
      syntax: "<angle>";
      inherits: false;
      initial-value: 0deg;
    }
    .box{
      --w:420px;
      width:var(--w);
      max-width:92vw;
      height:220px;
      border-radius:18px;
      position:relative;
      transition: width .45s ease, height .45s ease;
      z-index:1;
      background: repeating-conic-gradient(from var(--a),
                  #ff2770 0%, #ff2770 5%, transparent 5%, transparent 40%, #ff2770 50%);
      animation: rotating 4s linear infinite;
    }
    @keyframes rotating {
      0%   { --a: 0deg; }
      100% { --a: 360deg; }
    }
    .box::before{
      content:""; position:absolute; inset:0; border-radius:18px;
      background: repeating-conic-gradient(from var(--a),
                  #45f3ff 0%, #45f3ff 5%, transparent 5%, transparent 40%, #45f3ff 50%);
      animation: rotating 4s linear infinite;
      animation-delay: -1s;
    }
    .box::after{
      content:""; position:absolute; inset:6px; border-radius:14px;
      background: #2d2d39;
      box-shadow: 0 10px 25px rgba(0,0,0,.7) inset;
    }

    @media (min-width:900px){
      .box{width:420px;height:220px}
      .box:hover{width:520px;height:520px}
    }

    .login-area{ position:relative; z-index:2; width:100%; height:100%; }
.initialMessage {
  position: absolute;
  inset: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  font-size: clamp(1.5rem, 5vw, 2.8rem); /* besar tapi responsif */
  color: #fff;
  text-shadow:
    0 0 12px #ff00cc,
    0 0 24px #ff00cc,
    0 0 48px #ff00cc;
  animation: tada 1.5s infinite;
}

/* animasi tada (mirip animate.css) */
@keyframes tada {
  0% { transform: scale3d(1, 1, 1); }
  10%, 20% { transform: scale3d(.9, .9, .9) rotate(-3deg); }
  30%, 50%, 70%, 90% { transform: scale3d(1.1, 1.1, 1.1) rotate(3deg); }
  40%, 60%, 80% { transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg); }
  100% { transform: scale3d(1, 1, 1); }
}


    .formWrap{
      position:absolute; inset:30px;
      display:flex; align-items:center; justify-content:center;
      opacity:0; visibility:hidden;
      transform: translateY(20px) scale(.98);
      transition: all .45s ease;
    }
    .box:hover .formWrap{ opacity:1; visibility:visible; transform: translateY(0) scale(1); }
    .box:hover .initialMessage{ opacity:0; }

    .formInner{
      width:100%; max-width:340px;
      background:linear-gradient(180deg,#222228,#2a2a30);
      border-radius:10px;
      padding:20px;
      color:#dcdcdc;
      box-shadow: inset 0 6px 14px rgba(0,0,0,.7);
    }

    .logo {
  font-size: clamp(1.6rem, 5vw, 2.5rem); /* otomatis mengecil di layar kecil */
}

@media (max-width:400px){
  .box{ height:160px; } /* lebih ramping lagi untuk HP kecil */
  .slot-placeholder{ padding:14px; font-size:.9rem; }
}

  </style>
</head>
<body>
  <div class="bg-animation"></div>

  <!-- Logo App -->
  <div class="app-logo-title">AnimeVerse</div>

  <!-- Box -->
  <div class="box">
    <div class="login-area">
      <div class="initialMessage">
    {{ $title ?? 'Selamat Datang' }}
      </div>
      <div class="formWrap">
        <div class="formInner">
          {{ $slot }}
        </div>
      </div>
    </div>
  </div>
</body>
</html>
