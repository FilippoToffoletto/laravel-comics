<?php

$socials = Config('db.socials');
?>

<section class="find-us">
    <div class="container">
    <div class="left">
      <div class="btn"><h3>sing-up now</h3></div>
    </div>
    <div class="right">
      <h3>follow us</h3>

      <ul>
        <li>
          <div class="img">
                <img src="{{Vite::asset('./resources/img/footer-facebook.png')}}" alt="Facebook">
          </div>
        </li>
        <li>
          <div class="img">
            <img src="{{Vite::asset('./resources/img/footer-twitter.png')}}" alt="Twitter">
          </div>
        </li>
        <li>
          <div class="img">
            <img src="{{Vite::asset('./resources/img/footer-youtube.png')}}" alt="Youtube">
          </div>
        </li>
        <li>
          <div class="img">
            <img src="{{Vite::asset('./resources/img/footer-pinterest.png')}}" alt="Pinterest">
          </div>
        </li>
        <li>
          <div class="img">
            <img src="{{Vite::asset('./resources/img/footer-periscope.png')}}" alt="Periscope">
          </div>
        </li>
      </ul>

    </div>
  </div>
</section>
