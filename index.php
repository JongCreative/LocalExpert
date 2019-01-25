<!doctype html>
<html>
    <!-------------------- HEAD -------------------->	
	<head>
		<link rel="stylesheet" type="text/css" href="css/styles20.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="travel like a local">
		<title>Local Expert</title>
	</head>
	
<body>
    <!------------------ NAV BAR ------------------>
<header>

    <nav class="nav-container">
        <img class="nav-logo" src="png/travel.png"/>
        <ul class="nav-list">
            <li class="nav-item"><a class="nav-link" href="#link_destination">destination</a></li>
            <li class="nav-item"><a class="nav-link" href="#link_activity">activity</a></li>
            <li class="nav-item"><a class="nav-link" href="#link_contact">contact</a></li>
            <div class="overlay"></div>
        </ul>
    </nav>
</header>

    <!------------------ BACKGROUND --------------->
<main>
<section class="main-container"><!-- bg-img -->
    <article class="flex banner-container"> 
        <section class=" banner-wrapper">
            <img class="banner-item" src="img/banner01.jpg" alt="group"/>
            <img class="banner-item" src="img/banner02.jpg" alt="group"/>
            <img class="banner-item" src="img/banner03.jpg" alt="group"/>
            <img class="banner-item" src="img/banner04.jpg" alt="group"/>
        </section>
        <section class="caption-wrapper">
            <h3 class="caption">
            Start your trip with an expert<br/>
            ..or are you the expert one??
            </h3>
        </section>
    </article>
	<!------------------ CONTENT ------------------>
    <article class="flex seperator">bla</article> 
    <article class="flex" id="filter">
        <ul class="filter-links">
            <li><a href="index.php">show all</a></li>
            <li><a href="index2.php">europe</a></li>
            <li><a href="index3.php">united states</a></li>
            
        </ul>
    </article>
        
    <article class="flex destination-container filter-sections">
            <?php include "destination.php";?>
    </article>

    <!-- experts -->
    <article class="flex expert-container">
        <section class="expert-wrapper">
            <h3 class="caption"> available experts</h3>
            <?php include "expert.php";?>
        </section>
    </article>

</section>
</main>
	<!------------------ FOOTER  ------------------>
    <footer></footer>
    <!-- <script src="js/main.js"></script> -->
</body>

</html>