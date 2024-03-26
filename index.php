<!-- built off of https://github.com/cadars/john-doe/ -->
<!-- 
Notes on planning:
As I add more projects, I can place them all in blog and keep highlights in portfolio.
If I end up writing non-portfolio stuff in blog then I can add a list to #home again for a bigger list than in portfolio

-->
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title>Sherman Aline</title>
    <meta name="description" content="Site description">
    
    <!-- Recommended minimum -->
    <meta property="og:title" content="Site title">
    <meta property="og:description" content="Site description">
    <meta property="og:image" content="img/site-image.jpg">
    <meta name="twitter:card" content="summary_large_image">
    
    <link rel="stylesheet" type="text/css" title="fancy" href="frankenstein.css">
    <link rel="stylesheet" type="text/css" title="plain" href="style.css">
    <!-- first CSS is considered as defualt -->
    
  </head>
  <body>
    
    <header>
      <h1>
        <a href="#home">Sherman Aline</a>
      </h1>
      <space></space> <!-- allow nav flex to the right in both themes-->
      <nav>
        <a href="#about">About</a>
        <!--<a href="#news">Blog</a> TODO: re-enable --> 
        <a href="#portfolio">Portfolio</a>
      </nav>
    </header>
    
    <main>
      
      <section id="home"> <!-- HOME -->
        
        <p>Hey there! I'm Sherman.</p> <p>You can read more about me <a href='#about'>here</a>, or you can see some of my favorite projects in my <a href='#portfolio'>portfolio</a>. Soon there will be some more in-depth write-ups on the <s>blog <small>(currently under construction)</small></s>.</p>
	</br>
      </section>
      
      <section id="about"> <!-- ABOUT -->
        
        <h1>About Me</h1>
        <p>I'm a recent graduate of Toulouse School of Economics, receiving a Master's degree in Statistics and Econometrics with experience building machine learning models for social science research. I have an affinity for Natural Language Processing and value interpretability.</p>
        <p>I'm a very curious person and I'm always finding new topics to explore. Recently I've been spending my free time reading about DSP <label for="dsp">1</label><input id="dsp" type="checkbox"><small>Digital Signal Processing</small> and audio production.</p>
          <br>
          <p>Want to know more? Have a project you think I'd be interested in?<br> <a href="#contact">Contact me!</a> </p><br>

        <br><br><br>
        <h1>About the Site</h1>
        <p>The website is based off of <a href="https://github.com/cadars/john-doe/"> John Doe by @cadars</a>. It's minimal and fast, with no javascript. I also use a bit of PHP to build the portfolio section and permalinks.</p>
      </section>

      <section id="contact">
        Click <label for="c-info" class='ctact' >here</label> to reveal contact info (highly classified).<input type="checkbox" id="c-info">
          <small>
            <textarea readonly rows="3">
 __         __  __  __       __                __ __     
(_ |\/| /\   _)  _)  _)     / _ |\/| /\ ||    /  /  \|\/|
__)|  |/--\ /__ __) /__  @  \__)|  |/--\||__o \__\__/|  |
                                                     
            </textarea> 
          </small><br><br>
          <p><a href="#about">← back</a></p>
      </section>
      
      <section id="news"> <!-- NEWS -->
        
        <article>
          <h2>Blogging with Joe Bloggs <time datetime="2020-10-10">10.10.2020</time></h2>
		  <p>This section isn't ready yet, sorry!</p>
		  <figure>
	  </figure>
          <p> One <em>could</em> use this setup to write <s>a blog</s> short updates.</p>
        </article>
              
        <article>
          <h2><a href="https://example.com/">Why Your Cat Bites You</a> <time datetime="2004-12-12">12.12.2004</time></h2>
          <p>Honestly you don't want to know.</p>
        </article>
      
      </section>
      
      
      <section id="portfolio"> <!-- PORTFOLIO -->

        <div class="slides">
            <?php include("_content/portf/graph.html"); ?>
			
            <?php include("_content/portf/imb.html"); ?>

            <?php include("_content/portf/sql.html"); ?>

            <?php include("_content/portf/pfizer.html"); ?>

            <?php include("_content/portf/outlier.html"); ?>

            <?php include("_content/portf/simulation.html"); ?>
			
			<?php include("_content/portf/reddit.html"); ?>
          
          <figure style="background:#f0f0f0;">
            <figcaption>That's all for now!<br>
              <a href="#home">← back</a>
              <!--<a style="margin-left:2em;" href="">↑ top</a> -->
              </figcaption>
          </figure>

        </div>

      </section>
      
    </main>
    
    <!-- ----------
    LIGHTBOX IMAGES
    ----------- -->

    <!-- PHOTOS grid -->
    
    
    <!-- Other images -->
    
    <a href="#about" class="lightbox" id="img-about"><img loading="lazy" alt="" src="Site%20title_files/bbb_003.png"></a>
    
  
</body><style>.imu-2cgbi5n2pf-highlight{outline: 4px solid yellow !important}</style></html>