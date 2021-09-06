<?php
if ( $pageCode == "home" ) {
  $title = "Home";
}
else if ( $pageCode == "aboutMe" ) {
  $title = "About Me";
}

else if ( $pageCode == "pf" ) {
  $title = "Porfolio";
}

else if ( $pageCode == "contact" ) {
  $title = "Contact";
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>김서연 웹포트폴리오 | <?=$title?></title>

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

  <!-- 풀페이지 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css">

  <!-- scrolloverflow -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/vendors/scrolloverflow.min.js"></script>


    <!-- CSS 불러오기 -->
    <link rel="stylesheet" href="/resource/common.css">

    <!-- JS 불러오기 -->
    <script src="/resource/common.js" defer></script>


</head>

<body>
  <!-- 헤더 시작 -->
  <header class="menu">
    <div class="wrap flex">
      <div class="logo"><a class="flex h-full items-center justify-center" href="#">KIM-<br>SEOYEON</a></div>
      <div class="menu-space"></div>
      <nav class="menu-box">
        <ul class="menu flex h-full items-center justify-between">
          <li><a href="index.html">HOME</a></li>
          <li><a href="aboutMe.html">ABOUT ME</a></li>
          <li><a href="pf.html">PORTFOLIO</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </nav>
      <div class="link">
        <ul class="flex h-full items-center justify-center">
          <li><a href="https://www.instagram.com/wd_seoyeon" target="_blank">INSTAGRAM</a></li>
          <li><a href="https://wiken.io/b/241" target="_blank">TECH BLOG</a></li>
        </ul>
      </div>
    </div>
  </header>
  <!-- 헤더 끝 -->