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
<div class="loveWhatIDoWrapper">
   <div class="container flexContainer">
      <div class="row">
         <div class="col-xs-12 loveWhatIDo">
            <h1>
               I <span style="color:#DB250F;" class="glyphicon glyphicon-heart animated infinite pulse" aria-hidden="true"></span> what I do!
            </h1>

            <div id = "giphyme" class="img-responsive img-thumbnail"></div>

         </div>
      </div>
	  <div class="row">
      <div class="col-xs-12 loveWhatIDo">
         <input id="randomGifButton" class="btn btn-default" type="button" value="Click for Another GIF" onclick="randomGiphy();" />
         <blockquote id="aboutMeQuote">
            <p>
            ​My favorite part about going to work is turning ideas into reality and seeing how those solutions directly impact the staff and customers they were designed for.
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
         <p>​​I've been married for 5+ years to my college sweetheart, whom I met at Tennesee Technological University during my junior year. We recently welcomed a little baby girl into our life.</p>
		  <p>​​My wife would say I am somewhat of a hobby collector. I love to learn new things which translates to me picking up a new hobby every few months. Currently, I enjoy roasting coffee. I love to nerd out on all of the science and experimentation that goes into turning fresh unroasted green coffee beans into a great cup of joe.</p>
	  </div>
	  </div>
	  <div class="row">
      <div class="col-xs-6 col-sm-3">
         <img class="thumbnail img-responsive aboutMePics"  src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/family_pic.jpg" alt="Picture of our Family">
      </div>
      <div class="col-xs-6 col-sm-3 hidden-xs">
         <img class="thumbnail img-responsive aboutMePics" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/leahandtim.jpg" alt="Picture of Me and Leah">
      </div>
      <div class="col-xs-6 col-sm-3 hidden-xs">
         <img class="thumbnail img-responsive aboutMePics"  src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/timandAverie.jpg" alt="Picture of Me and Averie">
      </div>
      <div class="col-xs-6 col-sm-3">
         <img class="thumbnail img-responsive aboutMePics"  src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/Tim-Averie.JPG" alt="AnotherPicture of Me and Averie">
      </div>
	  </div>
   </div>
   <!-- Container end -->
</div>
<!-- About Me Wrapper -->

<div class="myBackgroundWrapper">
   <div class="container">

		 <div class="row">
		 <div class="col-md-3 hidden-xs hidden-sm">

     <div class="myBGPics">
      <img class="thumbnail img-responsive aboutMePics"  width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/TTechlogo.jpg" alt="Tennessee Tech Logo">
     </div>

     <div class="myBGPics">
      <img class="thumbnail img-responsive aboutMePics"  width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/Bryan_College_Logo_(full_size).png" alt="Bryan College Logo">
     </div>

		 <div class="myBGPics">
     <img class="thumbnail img-responsive aboutMePics"  width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/suitelaunch_logo_w-tag-web.png" alt="SuiteLaunch Logo">
		 </div>

     <div class="myBGPics">
      <img class="thumbnail img-responsive aboutMePics"  width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/PMILogo_reg.jpg" alt="Precept Logo">
     </div>

		 </div>

		 <div class="col-xs-12 col-md-9">
          <h1 style="margin-top:0px">My Background</h1>
          <br>
          <p>​After graduating with a degree in business management I spent a few years gaining experience in the business world while obtaining my MBA. During this time I was introduced to an ERP & CRM system called NetSuite; it wasn't until later that I would realize how impactful this system would be in my career.</p>
          <div class="visible-sm-block visible-xs-block"><img class="thumbnail img-responsive aboutMePics"  width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/suitelaunch_logo_w-tag-web.png" alt="SuiteLaunch Logo"></div>
          <p>​In December 2013 I accepted a job as a NetSuite Administrator at SuiteLaunch, LLC. SuiteLaunch assists small to mid-sized companies with implementing and customizing NetSuite to meet their specific business needs.</p>
          <p>​In the beginning, I assisted clients with configuring the native software, migrating data, training employees, as well as creating custom objects, fields, and reports. Later in the role, I worked on extending NetSuite through the use of automation, and scripts; I developed solutions using JavaScript along with NetSuite's SuiteScript API.</p>
          <div class="visible-sm-block visible-xs-block"><img class="thumbnail img-responsive aboutMePics"  width="200" src="/timswilson/wp-content/themes/bootstrap-basic/img/aboutMePage/PMILogo_reg.jpg" alt="Precept Logo"></div>
          <p>​In August 2015 I accepted a job at my current employer, Precept Ministries International, as their ERP & CRM Administrator. At Precept I took ownership over their NetSuite instance supporting over 70 end users.</p>
          <p>​In 2016 Precept decided to move its CRM & Marketing functions over to Salesforce. I worked on a team to implement Salesforce as well as develop the integrations which would allow data to flow between our new CRM system and NetSuite. I received my Salesforce certifications and now perform admin and development duties across both our CRM and ERP systems.</p>
          <p>​I get to work with several APIs to develop custom solutions using Salesforce's APEX programming language as well as NetSuite's SuiteScript. I have also built web apps using Node and Azure's PaaS. To date, I have written over fifty custom scripts and maintain many more that were written by vendors.</p>
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
      .addTo(controller);

      // // build a scene
      // var ourScene = new ScrollMagic.Scene({
      //   triggerElement: '.loveWhatIDoWrapper'
      // })
      // .setClassToggle('#giphyme', 'fade-in')
      // .addTo(controller);

      // build a scene
      var pinBackgroundImages = new ScrollMagic.Scene({
        triggerElement: '.myBackgroundWrapper'
      })
      .setClassToggle('.myBGPics', 'fade-in')
      .addTo(controller);


    });
});
</script>
