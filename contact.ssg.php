<?php
$pageCode="contact";
?>

<?php require_once "head.php"; ?>



<!-- contact 시작 -->
<section class="contact">
  <div class="con">

    <div class="flex justify-between">
      <div class="wrap wrap-1">
        <h1 class="title">Contact</h1>
        <span class="name">KIM SEOYEON</span>
        <div class="contact-content-wrap flex">
          <div class="subtitle">
            <span class="block">Mobile</span>
            <span class="block">E-Mail</span>
          </div>
          <div class="content">
            <span class="block">010-0000-0000</span>
            <span class="block">seoyeonkk68@gmail.com</span>
          </div>
        </div>
      </div>
      <div class="wrap wrap-2">
        <form target="_blank" action="https://formspree.io/f/xqkwgbeq" onsubmit="sendEmailForm(this); return false;"
          method="POST">
          <div>
            <input autofocus type="text" name="_replyto" placeholder="name">
          </div>
          <div>
            <input autofocus type="email" name="_replyto" placeholder="email">
          </div>
          <div>
            <textarea name="message" placeholder="content"></textarea>
          </div>
          <!-- 전송 버튼 -->
          <div>
            <button name="submit1" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact 끝 -->

</body>

</html>