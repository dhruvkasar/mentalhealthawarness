<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="The Mental Health Awareness Organization (MHA Org) helps spread awareness and shed light to different mental health problems, the various ways to cope with them, how to help others who might be struggling, and how to spread awareness yourself.">
    <meta name="keywords" content="Mental, Health, Awareness, Help, Depression, Anxiety, PTSD">
    <meta name="author" content="Madyar Kozhakhmetov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link below -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- FontAwesome link below -->
    <script src="https://use.fontawesome.com/5d5a7b196b.js"></script>
    <!-- Google Fonts link below -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
    <!-- CSS link below -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>MHA Educate Yourself</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg my-0 navbar-light" id="custom-nav-css"> <!-- navbar uses bootstrap code seen as seen in https://getbootstrap.com/docs/4.0/components/navbar/ -->
        <div class="container-fluid"> 
            <a class="navbar-brand" id="custom-navbar-brand-mobile-responsiveness" href="index.php">
                <img src="assets/images/mha.png" class="d-inline-block align-top" alt="Mental Health Awareness Organization logo" loading="lazy">
                MHA 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="nav navbar-nav mx-auto">
                    <li><a class="nav-link mha-nav active mha-active" href="educate-yourself.php">Educate Yourself</a></li>
                    <li><a class="nav-link mha-nav" href="help-yourself.php">Help Yourself</a></li>
                    <li><a class="nav-link mha-nav" href="help-others.php">Help Others</a></li>
                    <li><a class="nav-link mha-nav" href="spread-the-word.php">Spread the Word</a></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                            <?php if(isset($_SESSION['fname'])): ?>
                    <li class="nav-item">
                        <span class="nav-link mha-nav">
                            Welcome, <?php echo htmlspecialchars($_SESSION['fname']); ?>
                            <a href="logout.php" style="color: inherit; margin-left: 10px;">(Logout)</a>
                        </span>
                    </li>
                <?php else: ?>
                    <li><a class="nav-link mha-nav" href="signin.php">Sign In <span id="mha-navbar-right-space"> | </span> Sign Up</a></li>
                <?php endif; ?>
                </ul>
            </div>
        </div>
        </nav>
    </header>
    
    <section class="educate-yourself-statistics">
        <div class="statistics">
            <div>Mental health refers to cognitive, behavioral, and emotional well-being.</div>
            <div>Conditions such as stress, depression, and anxiety can all affect one's mental health.</div>
            <div>We must help promote the mental well-being of individuals and address the needs of those with defined mental disorders.</div>
            <div>Around <span>1 in 5</span> children and adolescents in the world have a mental disorder.</div>
            <div><span>264 million</span> people in the world are affected by depression.</div>
            <div>Half of the mental health disorders begin before <span>age fourteen.</span></div>
            <div><span>Every 40 seconds</span> one person dies from suicide.</div>
            <div>People with severe mental disorders die <span>10-20 years earlier</span> than the general population.</div>
            <div>Rates of mental health workers can reach <span>below 0.00002%</span> of the population in low-income countries.</div>
            <div>The global economy loses <span>$1,000,000,000,000</span> per year due to depression and anxiety.</div>
            <div><span>Over 40%</span> of countries have no mental health policy.</div>
            <div><span>Up to 60%</span> of people with depression can recover with a proper combination of anti-depressants and psychotherapy.</div>
            <div>Around <span>one billion</span> people globally have a mental or substance-use disorder.</div>
            <div>Mental health disorders are more prevalent in <span>women and the poor.</span></div>
            <div><span>Nine out of ten people</span> with mental health problems say that stigma and discrimination have a negative effect on their lives.</div>
            <div id="stories"><span>Listen to their stories.</span></div> <!-- the id is used to link viewers from the index.html section to this section of the page -->
            <div>"I felt disgusted every time I looked in the mirror. I stayed away from people as much as I could, and felt I made an embarrassment of myself whenever I went out in public."<br><span>- Sarah, age 24.</span></div>
            <div>"I didn't know who would be there for me if I told them what I was going through, and I was embarrassed."<br><span>- Barry, age 37.</span></div>
            <div>"I felt guilty when I struggled with these things and felt like everyone else was clearly so much better at coping."<br><span>- Hazel, age 24.</span></div>
            <div>"It can be the hardest thing to do, but standing up and saying that you deserve better than this is the first step to helping yourself."<br><span>- Michael, age 25.</span></div>
        </div>
    </section>

    <section class="educate-yourself-call-to-action">
        <div class="textual-info">
            <h1>What can you do now with this information?</h1>
            <a href="help-yourself.php" aria-label="Link to the 'Help Yourself' page"><p>Learn about ways to protect your mental health<i class="fa fa-angle-right"></i></p></a>
            <a href="help-others.php" aria-label="Link to the 'Help Others' page"><p>Learn about ways to protect the mental health of others<i class="fa fa-angle-right"></i></p></a>
        </div>
        <div class="mha-get-started">
        <?php if(isset($_SESSION['user_id'])): ?>
            <div class="logged-in-message-educate">
                Welcome back! You're logged in as <?php echo htmlspecialchars($_SESSION['fname']); ?>
            </div>
        <?php else: ?>
            <a href="signup.php" aria-label="Link to the 'Sign Up' page">
                <div class="get-started-button">Get started</div>
            </a>
            <a href="spread-the-word.php" class="start-spreading-awareness" aria-label="Link to the 'Spread the Word' page">
                Start spreading awareness<i class="fa fa-angle-right"></i>
            </a>
        <?php endif; ?>
            <a href="spread-the-word.php" class="start-spreading-awareness angle-color-black" aria-label="Link to the 'Spread the Word' page">Start spreading awareness<i class="fa fa-angle-right"></i></a>
        </div>
    </section>

    <footer>
        <div class="black-background"></div>
        <div class="top-footer">
            <div class="top-left">
                <img src="assets/images/india.png" id="flag" alt="Flag of the United States of America." loading="lazy">
                English
            </div>
            <div class="top-right">
                <a href="https://x.com/_withdhruv" target="_blank" aria-label="Link to the Twitter home page"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/" target="_blank" aria-label="Link to the Facebook home page"><i class="fa fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/yoursiktara/" target="_blank" aria-label="Link to the Instagram home page"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="bottom-left">
                © 2020 Mental Health Awareness 
            </div>
            <div class="bottom-right">
                <span>Privacy Notice</span><br>
                <span>Terms of Service</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Javascript bundle -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>