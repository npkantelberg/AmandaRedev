<?php get_header(); ?>


<body class="investment-page">

<!-- <section class="investment-header">
  <div class="investment-header-image">
    <img src="<?php bloginfo('template_url'); ?>/images/slides/lindsey-banner.jpg" alt="The andersons wedding photo">
  </div>
  <div class="investment-header-text">
    <p>Packages</p>
  </div>
</section> -->

<section class="price-section">
  <div class="container price-container">
    <div class="row price-row">
      <div class="col-xs-12 price-box-text">
        <p>
          All packages include an online gallery, flash drive with edited images, and a print release. 
          The most important part of my job is capturing your story the way you want it. Services are subject to change to suit your needs. Please contact me to design a custom package.
          Print product options available at additional cost. 
          *Additional $0.30 per mile for locations outside of a 20 mile radius of Oshkosh area.
        </p>
      </div>

      <div class="col-xs-12 investment-cards">
        <div class="investment-card investment-card-left">
          <div class="investment-card-image weddings-image">
            <!-- <img src="<?php //bloginfo('template_url'); ?>/images/investment/weddings.jpg" alt=""> -->
          </div>
          <div class="investment-card-content">
            <h2>Weddings</h2>
            <p class="price-line">
              $1500
            </p>
            <p class="investment-content-content">
              8 hours of coverage
            </p>
            <p class="investment-content-content">
              Engagement Session
            </p>
          </div>
        </div>
        <div class="investment-card investment-card-right">
          <div class="investment-card-content">
            <h2>Engagement / Family / Maternity / Portraits</h2>
            <p class="price-line">
              $150
            </p>
            <p class="investment-content-content">
              30 minute session
            </p>
          </div>
          <div class="investment-card-image family-image">
            <!-- <img src="<?php //bloginfo('template_url'); ?>/images/investment/family.jpg" alt=""> -->
          </div>
        </div>
        <div class="investment-card investment-card-left">
          <div class="investment-card-image seniors-image">
            <!-- <img src="<?php //bloginfo('template_url'); ?>/images/investment/seniors.jpg" alt=""> -->
          </div>
          <div class="investment-card-content">
            <h2>Seniors</h2>
            <p class="price-line">
              $250
            </p>
            <p class="investment-content-content">
              2-3 hour session
            </p>
            <p class="investment-content-content">
              Unlimited outfits within time frame
            </p>
            <p class="investment-content-content">
              Photo gift
            </p>
          </div>
        </div>
        <div class="investment-card investment-card-right">
          <div class="investment-card-content">
            <h2>Newborn</h2>
            <p class="price-line">
              $250
            </p>
            <p class="investment-content-content">
              2-3 hour session
            </p>
            <p class="investment-content-content">
              Photo gift
            </p>
          </div>
          <div class="investment-card-image newborn-image">
            <!-- <img src="<?php //bloginfo('template_url'); ?>/images/investment/family.jpg" alt=""> -->
          </div>
        </div>
        <div class="investment-card investment-card-left">
          <div class="investment-card-image groups-image">
            <!-- <img src="<?php //bloginfo('template_url'); ?>/images/investment/seniors.jpg" alt=""> -->
          </div>
          <div class="investment-card-content">
            <h2>Groups(10+)</h2>
            <p class="price-line">
              $200
            </p>
            <p class="investment-content-content">
              1 hour session
            </p>
            <p class="investment-content-content">
              $15 per additional flash drive
            </p>
          </div>
        </div>
      </div>
      
      <!-- <div class="col-xs-12 price-col">
        <div class="price-box">
          <div class="price-box-inner">
            <h3>Wedding</h3>
            <p>$1,050</p>
            <p>8 Hours of Coverage</p>
            <p>Flash Drive with Edited Photos</p>
            <p>Print Release</p>
            <p>$20 off Engagement Session</p>
            <p>*Additional $0.30 per mile for locations outside of a 20 mile radius of the Oshkosh area</p>
          </div>
        </div>
        <div class="price-box">
          <div class="price-box-inner">
            <h3>
              Engagement / Couple
            </h3>
            <p>
              $80
            </p>
            <p>
              1 Hour
            </p>
          </div>
        </div>
        <div class="price-box">
          <div class="price-box-inner">
            <h3>Senior</h3>
            <p>$150</p>
            <p>1-2 Hours</p>
            <p>???20 Wallet Prints (one pose)</p>
          </div>
        </div>
        <div class="price-box">
          <div class="price-box-inner">
            <h3>Newborn</h3>
            <p>$100</p>
            <p>2-3 Hours</p>
          </div>
        </div>
        <div class="price-box">
          <div class="price-box-inner">
            <h3>Family / Children</h3>
            <p>$80</p>
            <p>1 Hour</p>
          </div>
        </div>
        <div class="price-box">
          <div class="price-box-inner">
            <h3>Group (10+ People)</h3>
            <p>$100</p>
            <p>2 Hours</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>

<section class="package-section">
  <div class="package-wrapper">
    
  </div>
</section>

<section class="contact-section">
  <div class="contact-logo">
    <img class="logo" src="<?php bloginfo('template_url'); ?>/images/contact.png" alt="">
  </div>

  <div class="contact-wrapper">
    <h2 style="text-align:center">Contact</h2>
    <?php echo do_shortcode('[wpforms id="1546" title="false" description="false"]'); ?>
  </div>

  <div class="cal-wrapper">
    <iframe src="https://calendar.google.com/calendar/embed?src=amandaleaphotograph%40gmail.com&ctz=America%2FChicago" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
  </div>

</section>


<?php get_footer(); ?>
