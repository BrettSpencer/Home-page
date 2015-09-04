<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="icon" type="image/png" href="images/atomfav.png" />
<link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
<script src='https://www.google.com/recaptcha/api.js'></script>
<title>Dark Mass Design</title>
</head>

<body>   
<header>
<div id="hero-banner">
<div class="hero-text">
<h1>Brett Spencer</h1>
<h2>Developing neat things for the web I wanna see</h2>
</div><!-- end hero-text -->

<div class="social">
<a href="https://github.com/BrettSpencer" target="_blank"><i class="fa fa-github-square fa-3x"></i></a>
<a href="https://www.linkedin.com/pub/brett-spencer/92/368/538" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>
<a href="https://twitter.com/seattledev" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
<a href="https://www.facebook.com/brett.spencer.37" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
</div><!-- end social -->
</div><!-- end hero-banner -->
</header>

<div id="wrapper">
<div id="content">

<?php include('includes/nav.php');?>

<!---------------- About Section --------------->
<section id="about">
<div class="about">
<h1>You should get to know me</h1>
<div class="bio">
<p>I've been tinkering with computers since 1995, starting with the Macintosh Color Classic. Since then, like most people, I graduated to the family tech guy. I started looking behind the browser curtain a few years ago, trying to figure out how it worked without any formal training.</p>
<p>Everything in my early days was built in notepad. Not notepad++, just regular notepad. Since then, I was hooked on code. I spend hours typing away and it feels like minutes. I like everything from lower level to higher level programming code. I have led a couple design/dev teams on client sites and taken on a few clients on my own. </p>
</div><!-- end bio -->
<div class="bio">
<img src="images/me.jpg" alt="Me">
</div><!-- end bio -->
<div class="bio">
<p>I always enjoy taking code, even if I don't know what you're talking about, yet. Since then I've continued to expand my knowledge of computers, inside and out. I'm a web developer, confident in my current abilities and eager to meet the challenges presented with new web technologies. In an ever expanding industry, I guess you could say I am bi-code curious.</p>
<p>I have an insatiable appetite for new ideas, best practices, ways to be more productive and happy. I’m in love with what makes the world work, how to make my mark on it and how to make it better.</p>
</div><!-- end bio -->
</div>
</section>
<!---------------- end About Section -------->

<!---------------- Work Section --------------->
<section id="work">
<h1>My code is smooth &amp; smooth is fast</h1>
<div class="work-piece">
<h3>My Jeep Leaks</h3>
<p>A custom WordPress client site, built with PHP, HTML &amp; CSS.</p>
<a href="http://myjeepleaks.com/" target="_blank"><img src="images/myjeepleaks.png" alt="myjeepleaks.com"></a>
</div><!-- end work-piece -->

<div class="work-piece">
<h3>Robin Salas</h3>
<p>A responsive Wordpress client site, built with PHP, HTML &amp; CSS.</p>
<a href="http://robinsalas.com/" target="_blank"><img src="images/robinsalas.png" alt="robinsalas.com"></a>
</div><!-- end work-piece -->

<div class="work-piece">
<h3>Believe in Tibet</h3>
<p>A responsive Wordpress client site, built with PHP, HTML &amp; CSS.</p>
<a href="http://believeintibet.org/" target="_blank"><img src="images/tibet.png" alt="believeintibet.org"></a>
</div><!-- end work-piece -->

<div class="work-piece">
<h3>Ballard Family Dentist</h3>
<p>A responsive client site using HTML, CSS, PHP &amp; jQuery.</p>
<a href="http://darkmassdesign.com/dent" target="_blank"><img src="images/dentist.png" alt="Ballard Family Dentist"></a>
</div><!-- end work-piece -->

<div class="work-piece">
<h3>Monkeys to America</h3>
<p>The first site I ever built. Check out the tarzan sound clip on the <a href="http://darkmassdesign.com/monkeys/media.htm">FAQ</a>.</p>
<a href="http://darkmassdesign.com/monkeys" target="_blank"><img src="images/m2a.png" alt="Monkeys to America"></a>
</div><!-- end work-piece -->
<a href="#hero-banner">back to top</a>
</section>
<!----------------- end Work Section ------------------->

<!---------------- Contact Section ----------------------->
<section id="contact">
<h1>Leave me a note</h1>
<form action="bloghandler.php" method="post" class="basic-grey">

<label>
<span>Your Name :</span>
<input id="name" type="text" name="name" placeholder="name" />
</label>

<label>
<span>Your Email :</span>
<input id="email" type="email" name="email" placeholder="email" />
</label>

<label>
<span>Message :</span>
<textarea id="message" name="message" placeholder="your message to me"></textarea>
</label>

<div class="g-recaptcha" data-sitekey="6Lc6-f0SAAAAAE2KU8U9Ldky_NFBE0DUC-oXgii6"></div>

<label>
<span>&nbsp;</span> 
<input type="submit" class="button" value="Send" /> 
</label>    
</form>
</section>
<!---------------- end Contact Section ---------------->

</div><!-- end content -->
</div><!-- end wrapper -->

<?php include('includes/footer.php');?>

</body>
</html>