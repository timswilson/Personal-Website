<?php
   /**
    * Homepage
    * @package understrap
    */

   get_header(); ?>
<div class="flexWrapper introductionWrapper">
   <div   class="container flexContainer">
      <div class="row introductionRow">
         <div class="col-xs-12 introduction">
         <img width="200"  src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/TimWilsonProfilePic.JPG" alt="Profile Picture of Tim" class="img-circle">

          <h1 id="imTim"> Hi i'm Tim,</h1>
          <!--  <h2>I am a <span id="js-rotating">Certified Salesforce Administrator.,husband.,casual coffee roaster.,Certified NetSuite Administrator.,​father.,​lifelong learner.,​novice mountain biker.,​movie enthusiast.,fast learner.</span></h2>
          -->
          <h2 id="typeIt"></h2>
         </div>
      </div>
      <!-- .row -->
   </div>
   <!-- Container -->
</div>
<!-- introductionWrapper-->
<div class="flexWrapper loveWhatIDoWrapper">
   <div class="container flexContainer">
      <div class="row">
         <div class="col-xs-12 loveWhatIDo">
            <h1>
               I <span style="color:#DB250F;" class="glyphicon glyphicon-heart animated infinite pulse" aria-hidden="true"></span> what I do!
            </h1>

            <div id = "giphyme" class="img-responsive img-thumbnail giphyMeAnimate"></div>

         </div>
      </div>
	  <div class="row">
      <div class="col-xs-12 loveWhatIDo">
         <input id="randomGifButton" class="btn btn-default" type="button" value="Random Happy GIF" onclick="randomGiphy();" />
         <blockquote id="aboutMeQuote">
            <p>
               My favorite part about going to work every day is turning ideas into reality and seeing how those solutions directly impact the staff and customers they were designed for.
            </p>
         </blockquote>
      </div>
	  </div>
   </div>
   <!-- Container end -->
</div>
<!-- Love What I do Wrapper -->
<!-- introductionWrapper s -->
<div class="aboutMeWrapper">
<div class="container">
   <div class="row">
      <div class="col-xs-12">
         <h1>About Me</h1>
         <p>​I am a husband to the most beautiful and smart woman, whom I met at Tennesee Technological University during my junior year. We recently welcomed a little baby girl into our life. Many of my friends told me, but I didn't truly understand how life-changing and incredible it is to look into your baby's eyes and see her smile back at you until I experienced it myself for the first time.</p>
		  <p>​My wife would say I am somewhat of a hobby collector. I love to learn new things and picking up new hobbies is a great way to do just that. One of my most recent hobbies is roasting my own coffee beans. There is something fascinating to me about all of the science and experimentation that goes into turning fresh unroasted green coffee beans into the most flavorful cup possible.</p>
	  </div>
	  </div>
	  <div class="row">
      <div class="col-xs-6 col-sm-3">
         <img class="thumbnail img-responsive aboutMePics"  src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/Leah and Tim.jpg" alt="Picture of my Wife and I">
      </div>
      <div class="col-xs-6 col-sm-3">
         <img class="thumbnail img-responsive aboutMePics"  src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/averie2.jpg" alt="Picture of our Daughter">
      </div>
	  <div class="clearfix  visible-xs"></div>
      <div class="col-xs-6 col-sm-3">
         <img class="thumbnail img-responsive aboutMePics" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/leahandtim.jpg" alt="Picture of Me and Leah">
      </div>
      <div class="col-xs-6 col-sm-3">
         <img class="thumbnail img-responsive aboutMePics"  src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/timandAverie.jpg" alt="Picture of Me and Averie">
      </div>
	  </div>
   </div>
   <!-- Container end -->
</div>
<!-- About Me Wrapper -->

<div class="myBackgroundWrapper">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 ">
         <h1 style="text-align:center">My Background</h1>
		 <br>
		 </div>
		 </div>

		 <div class="row">
		 <div class="col-md-3 hidden-xs hidden-sm">
		 <div class="thumbnail myBGPics">
		 <img  width="150" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/TTechlogo.jpg" alt="Tennessee Tech Logo">
         <div class="caption">
		 <p style="text-align:center"><strong>Undergraduate</strong></p>
		 </div>
		 </div>

		 <div class="thumbnail myBGPics">
		 <img  width="131" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/Bryan_College_Logo_(full_size).png" alt="Bryan College Logo">
         <div class="caption">
		 <p style="text-align:center"><strong style="text-align:center">Masters</strong></p>
		 </div>
		 </div>

		 <div class="thumbnail myBGPics">
		 <img  width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/suitelaunch_logo_w-tag-web.png" alt="SuiteLaunch Logo">
         <div class="caption">
		 <p style="text-align:center"><strong style="text-align:center">December - 2013</strong></p>
		 </div>
		 </div>

		 		 <div class="thumbnail myBGPics">
		  <img  class="center-block thumbnail" width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/PMILogo_reg.jpg" alt="Precept Logo">
         <div class="caption">
		 <p style="text-align:center"><strong style="text-align:center">August - 2015</strong></p>
		 </div>
		 </div>


		 </div>

		 <div class="col-xs-12 col-md-9">
		 <p>After graduating with a degree in business management I spent a few years gaining experience in the business world while obtaining my MBA. During this time I held sales, client services, and management roles. While working as an Account Manager for True North Custom Media I was introduced to an ERP & CRM system called NetSuite; it wasn't until later that I would realize how impactful this system would be in my career.</p>


		 <p>In December 2013 I accepted a job as a NetSuite Administrator at SuiteLaunch, LLC. SuiteLaunch assists small to mid-sized companies with NetSuite implementation, as well as customizing the cloud system to meet each client's specific needs. In the beginning, I assisted clients with configuring the native software, migrating data, training their employees on how to use the tool, as well as creating custom objects, fields, and reports. Later in the role, I assisted clients with extending NetSuite through the use of automations, and scripts. I developed solutions using JavaScript along with NetSuite's SuiteScript API. Whether it was a client script, event script, scheduled script, or Suitelet I loved diving in and coming up with a custom solution that my clients would love.</p>


		 <p>In August 2015 I accepted a job at my current employer, Precept Ministries International, as their ERP & CRM administrator. At Precept I was able to use all of the skills that I developed while at SuiteLaunch and had the opportunity to learn many new ones. When you work in IT for a small - medium sized company you get the opportunity to diversify your knowledge as you often don't have enough hands for everyone to be specialized in only one area.</p>
     <p> In 2016 Precept decided to move its CRM & Marketing functions over to Salesforce. I worked on a team to implement Salesforce as well as develop the integrations which would allow data to flow between our new CRM system and NetSuite. I received my Salesforce certifications and now perform admin and development duties across both our CRM and ERP systems.
        I get to work with several REST and SOAP based APIs to develop custom solutions using Salesforce's APEX programming language as well as NetSuite's SuiteScript. To date I have written over thirty custom scripts and maintain many more that were written by vendors.</p>
         </div>
		 </div>
    </div>
</div>
</div>

<?php get_footer(); ?>

<script language = "javascript">
  jQuery(function($) {
    $(document).ready(function(){

      // Init ScrollMagic
      var controller = new ScrollMagic.Controller();

      var pinHiTimScene = new ScrollMagic.Scene({
        triggerElement: '.aboutMeWrapper',
      })
      .setClassToggle('.aboutMePics', 'fade-in')
      .addIndicators()
      .addTo(controller);

      // build a scene
      var ourScene = new ScrollMagic.Scene({
        triggerElement: '.loveWhatIDoWrapper'
      })
      .setClassToggle('#giphyme', 'fade-in')
      .addIndicators()
      .addTo(controller);

      // build a scene
      var pinBackgroundImages = new ScrollMagic.Scene({
        triggerElement: '.myBackgroundWrapper'
      })
      .setClassToggle('.myBGPics', 'fade-in')
      .addIndicators()
      .addTo(controller);


    });
});
</script>
