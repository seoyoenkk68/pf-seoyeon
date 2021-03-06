<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>김서연 웹포트폴리오 | home</title>

  <!-- 테일윈드 불러오기 -->
  <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

  <!-- swiper 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.2/swiper-bundle.min.js"></script>

  <!-- GSAP 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>

  <!-- 스크롤트리거 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- 흔들림 효과 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>


  <!-- CSS 불러오기 -->
  <link rel="stylesheet" href="index.css">

  <!-- JS 불러오기 -->
  <script src="index.js" defer></script>

  <style>
    body {
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      position: relative;
    }
  </style>

</head>

<body>
  <!-- 헤더 시작 -->
  <header class="home">
    <div class="wrap flex">
      <div class="logo"><a class="flex h-full items-center justify-center" href="index.html">KIM-<br>SEOYEON</a></div>
      <div class="flex-grow"></div>
      <nav class="menu-box">
        <ul class="menu flex h-full items-center justify-between">
          <li><a href="index.html">HOME</a></li>
          <li><a href="aboutMe.html">ABOUT ME</a></li>
          <li><a href="pf.html">PORTFOLIO</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </nav>
      <div class="flex-grow none-flex-grow"></div>
      <div class="link">
        <ul class="flex h-full items-center justify-center">
          <li><a href="https://www.youtube.com/channel/UCxGUs7DXhMTVDNygrHuTN0g/videos" target="_blank">YOUTUBE</a></li>
          <li><a href="https://wiken.io/b/241" target="_blank">TECH BLOG</a></li>
        </ul>
      </div>
      <div class="hg-menu">
        <img src="https://rawcdn.githack.com/seoyoenkk68/pf-seoyeon/master/image/index_hg-menu.png" alt="">
      </div>
    </div>
  </header>
  <!-- 헤더 끝 -->

  <!-- 섹션 시작 -->
  <section class="section section-1 home">
    <div class="main_txt flex flex-col">
      <span>Good</span>
      <span>Deliverer</span>
    </div>
    <div class="sub_txt">
      <span>WEB DESIGN / PUBLISING</span>
    </div>
    <div class="sub_txt sub_txt_rsp">
      <span>PORTFOLIO</span>
    </div>
    <div class="info info1">
      A good deliverer means a person who designs good things for clients.
    </div>
    <div class="info info2">
      We will be a good medium for proper communication through good design and valid implementation.
    </div>
    <div class="button">
      <a href="aboutMe.html#readMore"><img
          src="https://rawcdn.githack.com/seoyoenkk68/pf-seoyeon/master/image/index_btn.png" alt=""></a>
    </div>
    <div class="graphic1">
      <img class="mousemove-effect-1-el" data-mousemove-effect1-hor-res="0.004" data-mousemove-effect1-ver-res="0.004"
        src="https://rawcdn.githack.com/seoyoenkk68/pf-seoyeon/master/image/index_main_1.png" alt="">
      <img class="mousemove-effect-1-el" data-mousemove-effect1-hor-res="-0.005" data-mousemove-effect1-ver-res="-0.005"
        src="https://rawcdn.githack.com/seoyoenkk68/pf-seoyeon/master/image/index_main_2.png" alt="">
      <img class="ver" src="https://rawcdn.githack.com/seoyoenkk68/pf-seoyeon/master/image/inde_main1_ver.png" alt="">
    </div>
    <div class="graphic2">
      <img src="https://rawcdn.githack.com/seoyoenkk68/pf-seoyeon/master/image/index_bggp.png" alt="">
    </div>
    <div class="graphic3">
      <div class="line"></div>
      <div class="circle"></div>
    </div>
    <div class="graphic4">
      <img src="https://rawcdn.githack.com/seoyoenkk68/pf-seoyeon/master/image/index_pf.png" alt="">
    </div>
    <div class="bg-line">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <!-- 섹션 끝 -->

  <!--반응형 메뉴-->
  <div class="res-menu-box md:hidden">
    <div class="res-menu-wrap">
      <div class="btn-close">
        <div></div>
        <div></div>
      </div>
      <ul class="res-menu">
        <li><a href="index.html">HOME</a></li>
        <li><a href="aboutMe.html">ABOUT ME</a></li>
        <li><a href="pf.html">PORTFOLIO</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
      <div class="res-sub-menu-box flex justify-between">
        <a href="https://www.youtube.com/channel/UCxGUs7DXhMTVDNygrHuTN0g/videos" class="sub-menu sub-menu-1">YOUTUBE</a>
        <a href="https://wiken.io/b/241" class="sub-menu sub-menu-1">TECH BLOG</a>
      </div>
    </div>
  </div>

</body>

</html>