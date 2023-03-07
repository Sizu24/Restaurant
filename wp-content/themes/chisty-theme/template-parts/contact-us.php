<?php
  /**
   * Template Name: Contact Us
   */
  $showHeader = get_field('ph_show');
  $pageTitle = get_the_title($post->ID);
?>
  <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup {
      background: #fff;
      width: 100%;
      font: 14px Helvetica,Arial,sans-serif;
      padding: 15px 25px;
      border-radius: 15px;
      box-shadow: 5px 5px 25px rgba(200, 200, 200, 0.5);
    }
  /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<?php get_header() ?>

  <?php if ($showHeader == 'yes') : ?>
    <div class="page-header">
      <h1 class="page-header__title"><?= $pageTitle ?></h1>
      <p class="page-header__subhead"></p>
    </div>
  <?php endif; ?>
  <div class="contact">
    <div class="contact__form">
      <div id="mc_embed_signup">
        <form action="https://shahchisty.us12.list-manage.com/subscribe/post?u=6b4a7266b965f2de5884579b8&amp;id=f7f4c9c5a6&amp;f_id=00d741e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
          <div id="mc_embed_signup_scroll">
          <h3>Let's start a conversation!</h3>
          <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
      </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
        <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
      </div>
      <div class="mc-field-group">
        <label for="mce-MMERGE1">Your Name  <span class="asterisk">*</span>
      </label>
        <input type="text" value="" name="MMERGE1" class="required" id="mce-MMERGE1" required>
        <span id="mce-MMERGE1-HELPERTEXT" class="helper_text"></span>
      </div>
      <div class="mc-field-group">
        <label for="mce-MMERGE3">Message  <span class="asterisk">*</span>
      </label>
        <textarea value="" name="MMERGE3" class="required" id="mce-MMERGE3" rows="15" cols="20" required></textarea>
        <span id="mce-MMERGE3-HELPERTEXT" class="helper_text"></span>
      </div>
        <div id="mce-responses" class="clear foot">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6b4a7266b965f2de5884579b8_f7f4c9c5a6" tabindex="-1" value=""></div>
              <div class="optionalParent">
                  <div class="">
                    <input class="contact__button button" type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe">
                    <a class="contact__button button" href="<?= home_url() ?>">Back to Home</a>
                    <p class="brandingLogo"><a href="http://eepurl.com/ijuwO5" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
                  </div>
              </div>
          </div>
      </form>
      </div>
    </div>
    <!--End mc_embed_signup-->
  </div>
<?php get_footer() ?>