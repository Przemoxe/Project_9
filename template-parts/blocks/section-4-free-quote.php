<?php

  /* Block Three Template */
  $free_quote_subtitle = get_field('free_quote_subtitle') ?: 'Your free quote subtitle  text';
  $free_quote_title = get_field('free_quote_title') ?: 'Your free quotetitle text';


?>

<div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6><?= $free_quote_subtitle ?></h6>
            <h4><?= $free_quote_title ?></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">

            [contact-form-7 id="199" title="get quote now"]

        </div>
      </div>
    </div>
  </div>