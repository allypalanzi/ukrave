<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>U.Krave Design</title>
	<meta name="description" content="">
	<meta name="author" content="Ally Palanzi, Una Kravets">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Wordpress Blog Linkage
  ================================================== -->
	<?php
	require('blog/wp-blog-header.php');
	query_posts('showposts=1'); ?>

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/style.css">

	<!-- SCRIPTS
  ================================================== -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="js/functions.js"></script>


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>


<body>

<!-- NAV
	================================================== -->
	<div id="nav-container">
		<div id="nav">
			<div id="mobilebg"></div>
			<ul>
				<li><a href="#about" rel="" id="anchor1 comp" class= "anchorLink comp">about us</a></li>

				<li class=""><a href="#services" rel="" id="anchor1 comp" class= "anchorLink comp">services</a></li>

				<li id="navlogo" class="navlogo"><a href="#top" rel="" id="anchor1 comp" class= "anchorLink">
				</a></li>

				<li class="right-web comp"><a href="#work" rel="" id="anchor1 comp" class= "anchorLink">work</a></li>

				<li  class="right-always comp"><a href="#contact" rel="" id="anchor1" class= "anchorLink">contact</a></li>

				<div id="mobilenavbutton">
					<div id="navarrow"></div>
				<a href="#mobilenav" class="mobilenavbutton"></a></div>
			</ul>
						<!-- hidden mobile -->
				<div id="mobilenav">
					<ul>
					<li><a href="#about" rel="" id="anchor1" class= "anchorLink dd">about us</a></li>

					<li><a href="#services" rel="" id="anchor1" class= "anchorLink dd">services</a></li>

					<li><a href="#work" rel="" id="anchor1" class= "anchorLink dd">work</a></li>

					<li><a href="#contact" rel="" id="anchor1" class= "anchorLink dd">contact</a></li>

					<li><a href="blog" rel="" class= " dd">blog</a></li>
				</ul>
				</div>
			</div>
	</div>

<!-- END OF NAV
	================================================== -->


<!-- TOP SECTION
	================================================== -->
<a name="top" id="top"></a>
	<div id="topsection">
		<div id="chevronandlogo">
			<div id="top_chevron"></div>
				<div id="top_bigcircle_centerer">
					<div id="top_bigcircle_logo"></div>
				</div>
			</div>
		</div>
	</div>

<!-- END OF TOP SECTION
	================================================== -->



<!-- ABOUT SECTION
	================================================== -->
		<a name="about" id="about"></a>

		<div id="aboutsection">
		<div id="aboutus_container">
			<h1> let's get to know each other.</h1>

			<div id="una">
				<div id="una_photo" class="aboutus_photo">
					<div class="portlink">
								<a href="http://unakravets.com" target="_blank">
								<h3>&raquo; view portfolio</h3>
							</div>
						</a>
				</div>

				<div class="aboutus_text">
					<h2>Una Kravets</h2>
					<h3>designer/developer</h3>
					<p> A gum addict and proud nerd, Una has been designing since age 12 (Jasc Paint Shop Pro 7 &hearts;). She's currently working on two degrees &mdash; a BA in graphic design & a BS in computer science from American University in DC. Una spends most of her time completely immersed in the design/coding world, rarely going to sleep before 2am (#gdprobs). She loves hazelnut coffee, will dance at any given opportunity, and has a bad case of wanderlust. </p>
						<div class="socialicons_sm">
							<a href="http://unakravets.com" target="_blank" class="tooltip"> <span>portfolio</span><div id="unak"></div> </a>
							<a href="http://dribbble.com/ohhey_unak" target="_blank" class="tooltip"> <span>dribbble</span> <div id="dribbble"></div> </a>
							<a href="http://luxogram.co/profile/unax3" target="_blank" class="tooltip"> <span>instagram</span> <div id="instagram"></div> </a>
							<a href="http://www.behance.net/unakravets/frame" target="_blank" class="tooltip"> <span>behance</span> <div id="behance"></div> </a>
							<a href="https://twitter.com/Gdes_Problems" target="_blank" class="tooltip"><span>twitters</span> <div id="twitter"></div> </a>
						</div>
				</div>
			</div> <!-- END DIV UNA -->

	<div class="clear"></div>


			<div id="ally">
				<div id="ally_photo" class="aboutus_photo">
							<div class="portlink">
								<a href="http://allypalanzi.com" target="_blank">
								<h3>&raquo; view portfolio</h3>
							</a>
							</div>
				</div>

				<div class="aboutus_text">
					<h2>Ally Palanzi</h2>
					<h3>designer/developer</h3>
					<p> Hello! I'm currently living in Washington, DC studying graphic design with a minor in computer science at American University. I'm sarcastic, shy, fueled by lots and lots of coffee, have a love for biking, designing, web development, my pet turtles (Edgar and Ellen), and am rarely caught without my Nikon D90.</p>
						<div class="socialicons_sm">
							<a href="http://www.allypalanzi.com" target="_blank" class="tooltip"><span>portfolio</span><div id="allyp"></div> </a>
							<a href="http://dribbble.com/allypalanzi" target="_blank" class="tooltip"><span>dribbble</span><div id="dribbble"></div> </a>
							<a href="http://www.flickr.com/photos/electricamp/" target="_blank" class="tooltip"><span>flickr</span><div id="flickr"></div> </a>
							<a href="http://www.behance.net/allypalanzi" target="_blank" class="tooltip"><span>behance</span><div id="behance"></div> </a>
							<a href="https://twitter.com/mylifeasalllly" target="_blank" class="tooltip"><span>twitters</span><div id="twitter"></div> </a>
						</div>
				</div>
			</div> <!-- END DIV ALLY-->

		</div>
		</div>

	<div class="clear"></div>

<!-- END OF ABOUT SECTION
	================================================== -->	



<!-- WE MAKE SECTION
	================================================== -->

<a name="services" id="services"></a>

<div id="we-make-chevron"></div>
	<div id="we-make-container">
		<center><h1> we make some cool things.</h1></center>
		<div id="we-make">

		<!-- MOBILE SLIDER
		================================================== -->

			<div id="show-slider">
			        <a href='#' class="arrow" onclick='slider.prev();return false;'><img src="images/arrow-left.png" width="15px"></a> 
			        <a href='#' class="arrow-right" onclick='slider.next();return false;'><img src="images/arrow-right.png" width="15px"></a>

			    <div id='slider' class='swipe'>

			      <div id="slider-container">
			        <div style='display:block'>
			          <div class="icon-container">
			              <div class="icon"><img src="images/mobile.png"></div>
			                <div class="icon-text">
			                  <center><h4>mobile interface</h4></center>
			                  <p>We design the look and feel of your mobile website or application. With the majority of Americans now using smartphones, mobile access is crucial.</p>
			                </div>
			            </div>
			        </div>

			        <div style='display:none'>
			          <div class="icon-container">
			            <div class="icon"><img src="images/webdev.png"></div>
			              <div class="icon-text">
			                <center><h4>web development</h4></center>
			                <p>Not only do we love to design beautiful layouts, but we really enjoy coding them too! We personally work with you from concept to deployment.  </p>
			              </div>
			            </div>
			        </div>

			        <div style='display:none'>
			        	<div class="icon-container">
							<div class="icon"><img src="images/wordpress.png"></div>
								<div class="icon-text">
									<center><h4>wordpress</h4></center>
									<p>Wordpress bridges the gap between design and usability. We can build your website on this popular platform so you can update it at any time.</p>
								</div>
							</div>
			        </div>

			        <div style='display:none'>
			        	<div class="icon-container">
							<div class="icon"><img src="images/responsive.png"></div>
								<div class="icon-text">
									<center><h4>responsive design</h4></center>
									<p>Responsive design is a great way to ensure consistency across all devices. We design with each platform in mind to ensure a great experience.  </p>
								</div>
							</div>
			        </div>


			        <div style='display:none'>

						<div class="icon-container">
							<div class="icon"><img src="images/print.png"></div>
								<div class="icon-text">
									<center><h4>print design</h4></center>
									<p>From business cards and letterheads, to posters and menus &mdash; we have experience designing for a variety of organizations and mediums. </p>
								</div>
						</div>
			        </div>

			        <div style='display:none'>
			        	<div class="icon-container">
							<div class="icon"><img src="images/identity.png"></div>
								<div class="icon-text">
									<center><h4>branding/identity</h4></center>
									<p>Identity is key in how a company makes an impression. We work with you to develop or refine your perfect color story, logo, and overall aesthetic</p>
								</div>
							</div>

					</div>

			    </div>
			  </div>
			</div>

			<!-- END MOBILE SLIDER
			================================================== -->


			<div id="all-icon-container">
				<div class="icon-container">
				<div class="icon"><img src="images/mobile.png"></div>
					<div class="icon-text">
						<center><h4>mobile interface</h4></center>
						<p>We design the look and feel of your mobile website or application. With the majority of Americans now using smartphones, mobile access is crucial.</p>
					</div>
				</div>

				<div class="icon-container">
				<div class="icon"><img src="images/webdev.png"></div>
					<div class="icon-text">
						<center><h4>web development</h4></center>
						<p>Not only do we love to design beautiful layouts, but we really enjoy coding them too! We personally work with you from concept to deployment.  </p>
					</div>
				</div>

				<div class="icon-container">
				<div class="icon"><img src="images/wordpress.png"></div>
					<div class="icon-text">
						<center><h4>wordpress</h4></center>
						<p>Wordpress bridges the gap between design and usability. We can build your website on this platform so you can update it at any time.</p>
					</div>
				</div>

				<div class="icon-container">
				<div class="icon"><img src="images/responsive.png"></div>
					<div class="icon-text">
						<center><h4>responsive design</h4></center>
						<p>Responsive design is a great way to ensure consistency across all devices. We design with each platform in mind to ensure a great experience.  </p>
					</div>
				</div>

				<div class="icon-container">
				<div class="icon"><img src="images/print.png"></div>
					<div class="icon-text">
						<center><h4>print design</h4></center>
						<p>From business cards and letterheads, to posters and menus &mdash; we have experience designing for a variety of organizations and mediums. </p>
					</div>
				</div>

				<div class="icon-container">
				<div class="icon"><img src="images/identity.png"></div>
					<div class="icon-text">
						<center><h4>branding / identity</h4></center>
						<p>Identity is key in how a company makes an impression. We work with you to develop or refine your perfect color story, logo, and overall aesthetic</p>
					</div>
				</div>



			<div class="clear"></div>
			</div>
			</div>
		</div>

<!-- END OF WE MAKE SECTION
	================================================== -->


<!-- GALLERY SECTION
	================================================== -->

	<a name="work" id="work"></a>

	<div id="gallery-chevron"></div>

	<div id="gallery-container">
		<div id="gallery">
		<center><h1>this is where we are going to put examples of our work. it's under construction right now, so just check out our <a href="#about" rel="" id="anchor1" class= "anchorLink">portfolios</a> in the meantime!</h1></center>
		<br><br>

		</div>
	</div>	

<!-- END OF GALLERY SECTION
	================================================== -->

<!-- CONTACT SECTION
	================================================== -->
		<a name="contact" id="contact"></a>
		<div id="contact-arrow-container"><div id="contact-arrow"></div></div>

<div id="contactsection">
	<div id="contact-container">

 <div id="contactform">
       <h1> get in touch! </h1> 




       <h2>we'd love to start a project with you! send us an email or fill out the form below. we promise to contact you back.</h2>
        
            <form method='post' action='contact.php' id='form' autocomplete="on" >

        	<div>
			<p> <label for="name" class="user" > Name <span class="required">*</span></label> <input type='text' name='name' required id='name' placeholder="My name is..."  /> </p>
		</div><br/>
		<div>
			<p> <label for="email" class="mail-alt"> E-mail address <span class="required">*</span></label> <input type='email' name='email' required id='email'placeholder="We don't even know how to send spam mail" required="required"  /> </p>
		</div><br/>
		<div> 
			<p> <label for="website" class="link"> Website </label> <input type="text" name="website" id="website"  placeholder="We'd love to check it out" /> </p>
		</div><br/>
		<div> 
			<p> <label for="subject" class="quote-alt"> Subject </label> <input type='text' name='subject'  placeholder="Be Creative!" /> </p>
		</div><br/>
		<div class="message"> 
			<p rel="message"> <label for="message" class="comment"> Message  <span class="required">*</span></label> <textarea name='message' required id='message' placeholder="Now, go on :)" ></textarea> </p>
				<a class="submittext" href="#">&raquo;submit</a>
		</div>
<div class="clear"></div>
		</form>		
    </div> 

    <div id="twit-container"><h5>@ukravedesign</h5><ul id="twitter_update_list"></ul><a href="http:://www.twitter.com/ukravedesign" class="big">&raquo;follow</a>
</div>
  <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
  <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/ukravedesign.json?callback=twitterCallback2&count=3"></script>
  
<div id="wordpress-container">
	<h5>we write things:</h5>
	    <div id="blogpost">
		<?php while (have_posts()): the_post(); ?>
		<h2 style="font-size:45px"><?php the_title(); ?></h2>
		<h3 style="font-size:24px"><?php the_date(); ?> </h3>
		<?php the_excerpt(); ?>
		<p><br/><a class="big blogread" href="<?php the_permalink(); ?>"> &raquo; read more</a></p>
		<?php endwhile; ?>
	</div>
</div>

<div class="clear"></div>
  </div>
</div>




<!-- END OF CONTACT SECTION
	================================================== -->


				
</body>

	<script type="text/javascript">

	var slider = new Swipe(document.getElementById('slider'));

		



$("h1").fitText(1.2, { minFontSize: '40px', maxFontSize: '60px' });




	</script>
<script>
		    $(function(){
        $('.submittext').click(function(e){

            // Stop the form actually posting
            e.preventDefault();

            // Send the request
            $.post('contact.php', {
                name: $('#name').val(),
                email: $('#email').val(),
                website: $('#website').val(),
                subject: $('#subject').val(),
                message: $('#message').val(),

            }, function(d){
                console.log(d);
                // Here we handle the response from the script
                // We are just going to alert the result for now
                alert(d);
                
            });
        });
    });
</script>


</html>