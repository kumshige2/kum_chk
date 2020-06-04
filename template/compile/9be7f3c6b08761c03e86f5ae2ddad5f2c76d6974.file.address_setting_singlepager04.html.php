<?php /* Smarty version Smarty-3.1.18, created on 2014-12-26 16:41:51
         compiled from ".\template\address_setting_singlepager04.html" */ ?>
<?php /*%%SmartyHeaderCode:21312549cf491b8eb12-58094462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be7f3c6b08761c03e86f5ae2ddad5f2c76d6974' => 
    array (
      0 => '.\\template\\address_setting_singlepager04.html',
      1 => 1419579678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21312549cf491b8eb12-58094462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_549cf491c08904_12081647',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549cf491c08904_12081647')) {function content_549cf491c08904_12081647($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--<meta name="viewport" content="width=device-width, initial-scale=1" />--->
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<!---
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link type="text/css" href="template/css/fancyselect.css" rel="stylesheet">--->
 <link rel="stylesheet" href="template/pageone/css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="template/pageone/css//nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="template/pageone/css/jquery.fancybox-1.3.4.css" type="text/css" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<!---
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
               
<script type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--->
<!--- select2 --->
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="template/customselect/js/jquery.customSelect.js"></script>
<script type="text/javascript">
$(function(){

$('select.styled').customSelect();

});
</script>

    
<title>Single Page Nav Demo</title>
<style>
body {
	margin: 1.25em 0 75em;
	padding: 0;
	font-size: 100%;
	font-family: sans-serif;
}
a {
	outline: 0;
}
.single-page-nav {
	background: #000;
	/*--padding: 1.25em 0;---*/
	padding: 0.6em 0;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
}
.single-page-nav ul {
	list-style: none;
	padding: 0;
	margin: 0 auto;
	width: 80%;
	overflow: hidden;
}
.single-page-nav li {
	float: left;
	width: 24.75%;
	text-align: center;
}
.single-page-nav a {
	display: block;
	color: #fff;
	text-decoration: none;
	font-size: 1.5em;
	font-weight: 700;
}
.single-page-nav a:hover, .single-page-nav .current {
	color: #38acec;
}
.section {
	width: 80%;
	padding: 1.25em 0;
	margin: 0 auto;
	background: #eee;
	border-top: 1px solid #bbb;
}
#section1 {
	padding-top: 5em;
}
 @media all and (max-width : 64em) { /* 1024px */
body {
	font-size: 90%;
}
.single-page-nav a {
	font-size: 1.375em;
}
.section {
	width: 90%;
}
}
 @media all and (max-width : 37.5em) { /* 600px */
.single-page-nav a {
	font-size: 125%;
}
.single-page-nav ul {
	width: 95%;
}
.single-page-nav li {
	width: 50%;
	padding: 0.5em 0;
}
.section {
	width: 95%;
}
#section1 {
	padding-top: 7.5em;
}
}
span.customSelect {
	font-size: 14px;
	width: 175px;
	background-color: #cccccc;   /*background-color: #f5f0de;  */
	color: #7c7c7c;
	padding: 5px 7px;
	border: 1px solid #e7dab0;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px 5px;
}
span.customSelect.changed {
	background-color: #f0dea4;
}
.customSelectInner {
	background: url(template/customselect/img/customSelect-arrow.gif) no-repeat right;
}
</style>
</head>
<body>
<div class="single-page-nav">
  <ul>
    <li><a href="#section1">Section 1</a></li>
    <li><a href="#section2">Section 2</a></li>
    <li><a href="#section3">Section 3</a></li>
    <li><a class="external" href="http://google.com" target="_blank">Google</a></li>
  </ul>
</div>
div class="content-wrap">

    <!-- main -->
    <section id="section1">

        <div class="intro-box">
           <h1>Welcome.</h1>

           <p class="intro">Hello there. We are PageOne. We are a small design studio based in somewhere.
           We create awesome websites, user interfaces, logos and other digital stuff. We're here to make you
           and your business stand out from the crowd.</p>

           <p class="intro">Learn more <a href="#about-us">about us</a>  or <a href="#contact">get in touch</a> if you want to hire us on your next project.</p>

        </div>

        <div class="slider-wrapper">

            <div id="slider" class="nivoSlider">
                <img src="images/slides/slide1.png" width="383" height="198" alt="" />
                <img src="images/slides/slide2.png" width="383" height="198" alt="" />
                <img src="images/slides/slide3.png" width="383" height="198" alt="" title="#htmlcaption"/>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>

        <div class="row no-bottom-margin">

            <section class="col">
                <h2>Creative Ideas</h2>

                <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                acus duis in dictumst non integer! Elit, sed scelerisque odio tortor, sed platea dis? Quis
                cursus parturient ac amet odio in? Nunc Amet urna scelerisque eu lectus placerat.</p>
            </section>
            <section class="col mid">
                <h2>Innovation</h2>

                <p>Pellentesque magna mi, iaculis pharetra eu, fermentum ullamcorper nisi.
                Integer fringilla magna ut quam vulputate erat. Pulvinar cum, ac eu augue ut sit amet
                gravida lacinia, eros massa condimentum sem, a fermentum ligula lorem non.
                Phasellus vulputate.</p>
            </section>

            <section class="col">
                <h2>Design and Development</h2>

                <p>In hac habitasse platea risus dictumst. Suspendisse sit amet enim arcu. Aliquam erat volutpat.
                Phasellus a dui nisi. Nunc nec quam vitae nisl vehicula euismod. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Sed commodo ligula blandit risus.</p>
            </section>
        </div>

        <a class="back-to-top" href="#main">Back to Top</a>

      </section>

      <!-- services -->
      <section id="section2" >

             <h1>Our services.</h1>

             <div class="row no-bottom-margin">
                <section class="col">
                    <h2>Web Design</h2>

                    <p><img class="align-left" alt="" src="images/services/webdesign.png" />Pellentesque magna mi, iaculis pharetra eu, fermentum ullamcorper nisi.
                    Integer fringilla magna ut quam vulputate erat. Pulvinar cum, ac eu augue ut sit amet
                    gravida lacinia, eros massa condimentum sem, a fermentum ligula lorem non.
                    Phasellus vulputate.</p>
                </section>
                <section class="col mid">
                    <h2>Web Development</h2>

                    <p><img class="align-left" alt="" src="images/services/webdevelopment.png" />In hac habitasse platea risus dictumst. Suspendisse sit amet enim arcu. Aliquam erat volutpat.
                    Phasellus a dui nisi. Nunc nec quam vitae nisl vehicula euismod. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Sed commodo ligula blandit risus</p>
                </section>

                <section class="col">
                    <h2>SEO Services</h2>

                    <p><img class="align-left" alt="" src="images/services/seo-services.png" />Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                    acus duis in dictumst non integer! Elit, sed scelerisque odio tortor, sed platea dis? Quis
                    cursus parturient ac amet odio in? Nunc Amet urna scelerisque eu lectus placerat.</p>

                </section>
            </div>

            <div class="row">
                <section class="col">
                    <h2>Print Design</h2>

                    <p><img class="align-left" alt="" src="images/services/print-design.png" />In hac habitasse platea risus dictumst. Suspendisse sit amet enim arcu. Aliquam erat volutpat.
                    Phasellus a dui nisi. Nunc nec quam vitae nisl vehicula euismod. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Sed commodo ligula blandit risus</p>
                </section>
                <section class="col mid">
                    <h2>Logo Design &amp; Branding</h2>

                    <p><img class="align-left" alt="" src="images/services/logo-design-and-branding.png" />Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                    acus duis in dictumst non integer! Elit, sed scelerisque odio tortor, sed platea dis? Quis
                    cursus parturient ac amet odio in? Nunc Amet urna scelerisque eu lectus placerat.</p>
                </section>

                <section class="col">
                    <h2>Newsletter</h2>

                    <p><img class="align-left" alt="" src="images/services/newsletter.png" />Pellentesque magna mi, iaculis pharetra eu, fermentum ullamcorper nisi.
                    Integer fringilla magna ut quam vulputate erat. Pulvinar cum, ac eu augue ut sit amet
                    gravida lacinia, eros massa condimentum sem, a fermentum ligula lorem non.
                    Phasellus vulputate.</p>

                </section>
            </div>

            <a class="back-to-top" href="#main">Back to Top</a>

      </section>

      <!-- portfolio -->
      <section id="section3">

            <h1>Featured works.</h1>

            <ul class="folio-list clearfix">

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/milk.jpg" title="Milk Splashes" ><img src="images/thumbs/milk.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Milk Splashes</h3>
                </li>

                <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/hexagon.jpg" title="Hexagon Bokeh"><img src="images/thumbs/hexagon.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Hexagon Bokeh</h3>
                </li>

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox-video" href="http://www.youtube.com/watch?v=EPXwP8D5C5c&feature=player_embedded"><img src="images/thumbs/hillsong-united-aftermath.jpg" alt="" /></a>
                    </div>
                    <h3 class="entry-title">Aftermath (Sample Video)</h3>
                </li>
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/dandelion.jpg" title="Dandelion" ><img src="images/thumbs/dandelion.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Dandelion</h3>
                </li>

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/eiffel.jpg" title="Eiffel Tower"><img src="images/thumbs/eiffel.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Eiffel Tower</h3>
                </li>

                 <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/clouds-and-rainbow.jpg" title="Clouds &amp; Rainbow"><img src="images/thumbs/clouds-and-rainbow.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Clouds &amp; Rainbow</h3>
                </li>

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/landscape.jpg" title="Rural Landscape"><img src="images/thumbs/landscape.jpg" alt=""  /> </a>
                    </div>
                    <h3 class="entry-title">Rural Landscape</h3>
                </li>

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/sneakers.jpg" title="Cosmic Sneakers"><img src="images/thumbs/sneakers.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Cosmic Sneakers</h3>
                </li>

                 <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/thumbs/big/vector-flower-fullscreen.jpg" title="Abstract Vectors"><img src="images/thumbs/vector-flower-fullscreen.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Abstract Vector</h3>
                </li>

            </ul>

            <a class="back-to-top" href="#main">Back to Top</a>

      </section>

      <!-- about us -->
      <section id="about-us" class="clearfix">

            <h1>About us.</h1>

            <div class="primary">

                <p class="intro">Maecenas eu neque erat, auctor feugiat enim. Sed libero risus, pretium vel
                elementum id, lacinia vel purus. Mauris semper, orci vitae aliquam vestibul,
                lorem nulla auctor nulla, gravida fermentum urna libero eget sapien. Quisque
                cursus, urna quis vestibulum egestas, nibh sem semper erat, a feugiat justo
                dolor eget libero. Quisque cursus, urna quis vestibulum egestas, nibh sem
                semper erat, a feugiat justo dolor eget libero
                </p>

                <h2>Template License</h2>

                <p>This work is released and licensed under the <a href="http://creativecommons.org/licenses/by/2.5/" rel="license">
                Creative Commons Attribution 3.0 License</a>, which means that you are free to use and modify it for any
                personal or commercial purpose. All I ask is that you give me credit by including a link back to my
                <a href="http://www.styleshout.com">website</a></p>

                <div class="row no-bottom-margin">

                    <section class="col first">

                        <h2>Our Process</h2>

                        <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                        acus duis in dictumst non integer! Elit, sed scelerisque odio tortor, sed platea dis? Quis
                        cursus parturient ac amet odio in? Nunc Amet urna scelerisque eu lectus placerat.</p>

                    </section>

                    <section class="col">

                        <h2>Our Approach</h2>

                        <p>Pellentesque magna mi, iaculis pharetra eu, fermentum ullamcorper nisi.
                        Integer fringilla magna ut quam vulputate erat. Pulvinar cum, ac eu augue ut sit amet
                        gravida lacinia, eros massa condimentum sem, a fermentum ligula lorem non.
                        Phasellus vulputate.</p>

                    </section>

                </div>

                <h2>Our Team</h2>

                <ul class="the-team">
                    <li class="odd">
                        <div class="thumbnail">
                            <a href="#"><img alt="thumbnail" src="images/thumb-pic.png" width="83" height="78"></a>
                        </div>
                        <p class="mname"><a href="#">Erwin Aligam</a></p>
                        <p>Co-founder &amp; Creative Director</p>
                    </li>
                    <li>
                        <div class="thumbnail">
                            <a href="#"><img alt="thumbnail" src="images/thumb-pic.png" width="83" height="78"></a>
                        </div>
                        <p class="mname"><a href="#">Uzumaki Naruto</a></p>
                        <p>Senior Webdesigner</p>
                    </li>
                    <li class="odd">
                        <div class="thumbnail">
                            <a href="#"><img alt="thumbnail" src="images/thumb-pic.png" width="83" height="78"></a>
                        </div>
                        <p class="mname"><a href="#">Haruno Sakura</a></p>
                        <p>Graphic Designer</p>
                    </li>
                    <li>
                        <div class="thumbnail">
                            <a href="#"><img alt="thumbnail" src="images/thumb-pic.png" width="83" height="78"></a>
                        </div>
                        <p class="mname"><a href="#">Uchiha Sasuke</a></p>
                        <p>Web Developer</p>
                    </li>
                </ul>

            </div>

            <aside>

                    <h2>More about us</h2>

                    <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                    acus duis in dictumst non integer! Elit, sed scelerisque odio.</p>

                    <a href="#" class="download-btn">Download PDF</a>


                    <h2>Links</h2>


                    <ul class="link-list">
                        <li><a href="http://themeforest.net?ref=ealigam" title="Site Templates">Themeforest</a></li>
                        <li><a href="http://www.4templates.com/?go=228858961" title="Website Templates">4Templates</a></li>
                        <li><a href="http://www.dreamhost.com/r.cgi?287326|sshout" title="Webhosting">Dreamhost</a></li>
                        <li><a href="http://store.templatemonster.com?aff=ealigam" title="Web Templates">Templatemonster</a></li>
                    </ul>


                    <h2>Testimonials</h2>

                    <div class="testimonials">
                        <blockquote>
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.
                            Nullam id dolor id nibh ultricies vehicula ut id elit. </p>

                            <cite>&mdash; John Doe, XYZ Company</cite>
                        </blockquote>
                        <blockquote>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis
                            consectetur purus sit amet fermentum.</p>

                            <cite>&mdash; Jane Roe, ABC Corp</cite>
                        </blockquote>
                    </div>

            </aside>



            <a class="back-to-top" href="#main">Back to Top</a>

      </section>

      <!-- contact -->
      <section id="contact" class="clearfix">

            <h1>Get in touch.</h1>

            <div class="primary">

                <p class="intro">
                In hac habitasse platea risus dictumst. Suspendisse enim arcu. Aliquam erat volutpat.
                Phasellus a dui nisi. Nunc nec quam vitae nisl vehicula euismod. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Sed commodo ligula blandit risus. Pellentesque magna mi,
                iaculis pharetra eu, fermentum ullamcorper nisi. Integer fringilla magna ut quam vulputate erat.
                </p>

                <form method="post" action="contact.php" id="contactform">

                    <div>
                    <p>Send me a message</p>
                    </div>

                    <div>
                    <label>Name <span class="required">*</span></label>
                    <input name="name" type="text" id="name" value="" />
                    </div>

                    <div>
                    <label>Email <span class="required">*</span></label>
                    <input name="email" type="text" id="email" value="" />
                    </div>

                    <div>
                    <label>Website</label>
                    <input name="website" type="text" id="website" value="" />
                    </div>

                    <div>
                    <label>Subject</label>
                    <input name="subject" type="text" id="subject"  value="" />
                    </div>

                    <div>
                    <label>Message <span class="required">*</span></label>
                    <textarea name="message" rows="20" cols="50"  id="message" ></textarea><br /><br />
                    </div>

                    <div>
					<input type="submit"  value="Submit" class="button">
         			<input type="reset" value="Reset" class="button">
					</div>


                </form>

            </div>

            <aside>

                    <h2>Contact Information</h2>


                    <p>Nascetur augue hac platea enim, egestas pulvinar vut. Pulvinar cum, ac eu, tristie
                    acus duis in dictumst non integer! Elit, sed scelerisque odio tortor, sed platea dis.</p>

                    <p>
                    PageOne Studio <br />
                    Anystreet Avenue 012 <br />
                    State, Anytown
                    </p>

                    <p>
                    Phone: 0 123 456 789 0 <br />
                    Email: info [@] pageone.com
                    </p>


                    <h2>Follow Us</h2>

                    <ul class="link-list social">
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="googleplus"><a href="#">Google+</a></li>
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="dribble"><a href="#">Dribble</a></li>
                        <li class="linkedin"><a href="#">Linkedin</a></li>
                        <li class="delicious"><a href="#">Delicious</a></li>
                        <li class="flickr"><a href="#">Flickr</a></li>
                    </ul>

            </aside>

            <a class="back-to-top" href="#main">Back to Top</a>

     </section>

</div>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> ---> 
<script>window.jQuery || document.write('<script src="template/singlepage/jsjquery-1.9.1.min.js"><\/script>')</script> 
<script src="template/singlepage/js/jquery.singlePageNav.min.js"></script> 
<script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
        </script>
</body>
</html>
<?php }} ?>
