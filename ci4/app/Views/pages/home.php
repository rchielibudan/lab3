<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('css/styles.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/mediaqueries.css');?>">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
  <nav id="desktop-nav">
    <div class="logo">Rchie Libudan</div>
    <div>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#references">References</a></li>
      </ul>
    </div>
  </nav>
  <nav id="hamburger-nav">
    <div class="logo">Rchie Libudan</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
      </div>
    <div class="menu-links">
      <li><a href="#about" onclick="toggleMenu()">About</a></li>
        <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>

        <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
    </div>
  </nav>
  <section id="profile">
    <div class="section__pic-container">
      <img src="./images/rchieprof.png" alt="Rchie Libudan Profile">
      </div>
      <div class="section__text">
        <p class="section__text__p1">What's Up, I'm</p>
        <h1 class="title">Rchie Libudan</h1>
        <p class="section__text__p2">A Future Billionaire</p>
      
      <div class="btn-container">
        <button 
        class="btn btn-color-2" 
        onclick="window.open('./images/resume.jpg')"
        >
        Download Resume
        </button>
        <button class="btn btn-color-1" onclick="location.href='./#contact'"> 
          Contact Information
        </button>
      
      </div>
      <div id="socials-container">
        <img 
        src="./images/fblogo.png" 
        alt="My Facebook Profile" 
        class="icon" 
        onclick="location.href='https://www.facebook.com/rchie.libudan'"/>
        <img 
        src="./images/git.png" 
        alt="My Github Profile" 
        class="icon" 
        onclick="location.href='https://github.com/rchielibudan'"/>

      </div>
    </div> 
  </section>
  
  <div id="about"> 
    <div class="container">
      <div class="row">
        <div class="about-col-1">
          <img src="images/myself.jpg">
        </div>
        <div class="about-col-2">
          <h1 class="subtitle">About Me</h1>
          <p class="introduction">Rchie is a man of focus, commitment, sheer will. 
            Something you know very little about. I once saw him 
            kill three men in a bar... with a pencil, with a fucking pencil. 
            Then suddenly one day he asked to leave. It's over a woman, of course, 
            a woman named Wayne. So I made a deal with him. I gave him an impossible 
            task. A job no one could have pulled off. The bodies he buried that day 
            laid the foundation of what we are now. Rchie will come for you, and you 
            will do nothing because you can do nothing, so get the fuck out of my 
            sight!</p>
            <div class="tab-titles">
              <p class="tab-links active-link">Skills</p>
              <p class="tab-links">Experience</p>
              <p class="tab-links">Body Count</p>
            </div>
            <div class="tab-contents">
              <ul>
                <li>UI/UX</span><br>Designing from Figma</li>
                <li>Master Rifler</span><br>82% Headshot Percentage</li>
                <li>Stardew Valley Expert</span><br>Can plant and water crops insanely fast</li>
              </ul>
            </div>
        </div>
      </div>
      <div id="datetime"></div>
      <button id="changeTextButton">Click me to change text!</button>
      <p id="textContainer">Original Text</p>
    </div>
  </div>
  <button onclick="window.location.href='new.html'">Go to New Page</button>
  <script src="script.js"></script>

</body>
</html>