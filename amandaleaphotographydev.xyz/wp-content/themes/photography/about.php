<?php get_header(); ?>

  <body class="about-page">

    <section class="about-section">
      <div id="about-wrapper" class="about-wrapper">
        <div class="about-header">
          <img src="<?php bloginfo('template_url'); ?>/images/About/about-header.jpg" alt="About header">
        </div>
        <div class="about-content-left">
          <div class="about-content-image">
            <img src="<?php bloginfo('template_url'); ?>/images/About/my-work.jpg" alt="Photo of Amanda">
          </div>
        </div>
        <div class="about-content">
          <h2>About Amanda Lea</h2>
          <p>Hi, I’m Amanda Lea (fun fact - it’s pronounced “lee”). I’m so glad you’re here! Let me introduce myself. My husband and I got married in 2017 and we live in Oshkosh with our son, Theodore, and our dog, Justice. I am lucky to have three wonderful models whenever I need them! By day, I work as an investment assistant for a financial advisor. I’ve played the harp since I was 6 years old. My home is full of plants, blankets, and homemade candles. My favorite thing to do is thrift and I won’t lie, I’m really good at it. And if there is any free time left in my schedule, you’ll find me on a rugby pitch, either a forward or a photographer!<br/><b>**family photo credit: Mary Nieland</b></p>
        </div>

        <div class="about-content">
          <h2>My Work</h2>
          <p>Amanda Lea Photography started in 2011 when my friends had some faith in me to do their senior photos. Years later, I graduated from UW-Green Bay with a Bachelor’s in Business Administration and Studio Arts - Photography. I had an incredible time learning film photography and I think I spent more time in the dark room and developing labs than my own dorm room! Since then, I have learned so much and my business has grown and changed every year. I am grateful that photography has led me to meet such amazing people, see beautiful locations, attend some crazy parties, and eat lots of delicious cake!! From the proposal, to the wedding, maternity session, newborn snuggles, and family photos, I get to witness life’s most precious moments and watch families grow and capture it all from my front row seat. And you can bet I have never photographed a wedding without crying! 
          </p>
          <ul>
            <p>What you can expect when you work with me: </p>
            <li>Lots of jokes and laughing. If your smile looks fake I’ll call you out!</li>
            <li>Prepare for some exercise! I like to try new things and we’ll be moving around for sure. Chances are you’ll see me laying on the ground at some point.I’ll do anything for the perfect shot!</li>
            <li>If your dog is part of the session, I will absolutely need to cuddle it.</li>
            <li>If you bring your kids, I probably have suckers in my pocket. I’m not above bribery.</li>
            <li>Chill out & relax. Posed photos are great, but candid photos show YOU. Just relax and be yourself and I will capture how beautiful that is!
            Every photo shares a unique and precious story, what do you want yours to be?</li>
          </ul>
        </div>
        <div class="about-content-right">
          <div class="about-content-image">
            <img src="<?php bloginfo('template_url'); ?>/images/About/amanda.jpg" alt="Photo of Amanda">
          </div>
        </div>
          </section>
        </div>
        <div class="about-ctas">
          <div class="about-cta"></div>
          <div class="about-cta"></div>
        </div>
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
