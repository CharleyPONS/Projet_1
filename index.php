<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Open Graph Facebook -->
    <meta property="og:title" content="WebAgency"/>
    <meta property="og:type" content="site web"/>
    <meta property="og:url" content="http://www.webagency.com/"/>
    <meta property="og:image" content="images/webagency.png"/>
    <meta property="og:description" content="WebAgency réalise vos projets web, site internet, portfolio, e-commerce"/>
    <!-- Open Graph Twitter -->
    <meta name="twitter:card" content="WebAgency réalise vos projets web">
    <meta name="twitter:site" content="WebAgency">
    <meta name="twitter:title" content="WebAgency réalise vos projets web">
    <meta name="twitter:description" content="WebAgency réalise vos projets web, site internet, portfolio, e-commerce">
    <meta name="twitter:image" content="images/logo.png">
    <!-- WebAgency -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <title>WebAgency</title>
</head>

<body>
    <!-- Header, Logo and menu -->
    <header>

     <div>
        <img src="images/logo.png" alt="logo webagency" />


        <nav class="headerNavigation">

            <label for="toggle" class="fas fa-bars"></label>
            <input class="selectmenu" type="checkbox" id="toggle" />

            <ul class="activemenu">
                <li><a class="style-menu activeFirstMenu" href="#first-bloc">Acceuil</a></li>
                <li><a class= "style-menu" href="#anchor1">Services</a></li>
                <li><a class= "style-menu" href="#anchorpage3">Portofolio</a></li>
                <li><a class= "style-menu" href="#anchor3">Contact</a></li>
            </ul>

        </nav>
    </div>
</header>

<!-- Controls Slider  -->

<div class="button">
    <button class="button before"><span class="fas fa-angle-left" ></span>
    </button>
    <button class="button after"><span class="fas fa-angle-right"></span>
    </button>
</div>

<!-- Slider image with legend -->

<div id="first-bloc">
    <div class="first-container">
        <div class="first-image">
           <img src="images/slider/bg1.jpg" alt="banner1">
           <figcaption class="tittle_banner">
            <h1 class="tittle1"><strong>WEBAGENCY </strong> : L'agence de tous <br/>vos projets!</h1>
            <h2 class="tittle1_1">Vous avez un projet web? La WebAgency vous aide à le réaliser!</h2>
            <h3 class="tittle1_2"><a href="#anchor1">Plus d'infos</a></h3>
        </figcaption>
    </div>

    <div>
        <img src="images/slider/bg2.jpg" alt="banner2">
        <figcaption class="tittle_banner">
            <h1 class="tittle1"><strong>WEBAGENCY </strong> : L'agence de tous <br/>vos projets!</h1>
            <h2 class="tittle1_1">Vous avez un projet pour développer une applicaton? La WebAgency vous aide à le réaliser!</h2>
            <h3 class="tittle1_2"><a href="#anchor1">Plus d'infos</a></h3>
        </figcaption>
    </div>
</div>
</div>

<!-- Progress bar -->
<div id="progress">

    <progress id="anchor1" class="bar" value="50" max="100">
    </progress>

    <div class="progressvalue" >

    </div>
</div>

<!-- Page2-->
<section>               

    <!-- Page 2 tittle -->
    <div class="contain1">


        <div class="tittle">
            <h2>NOS SERVICES</h2>
        </div>
        <div class="imagery">

            <div class="bordermodel">

            </div>

            <div class="circle">
            </div>


            <div class="bordermodel border2">    
            </div>

        </div>

        <div class="tittle2">
            <h2>Retrouvez tous nos services, nos équipes se chargents de créer le design de votre site. </h2>
        </div>

        <div class="tittle3">
            <h3>Nous le traduisons en langage informatique et formons vos équipes.</h3>
        </div>


    </div>
    <!-- Our service with logo  -->

    <div class="contain2">

        <div id="image">
            <img src="images/main-feature.png" alt="Photo">
        </div>

        <aside>
            <div class="bloc1">
                <h3>UX Design</h3>
                <p>Nous nous chargeons de l'expérience utilisateur, avec pour<br />
                    mission: améliorer la conviviailité et la fonctionnalité du site.
                </p>
                <div class="logoaside">
                 <span class="fas fa-chart-line"></i>
                 </div>
                 <div class="emptycircle">

                 </div>
                 <div class="littlecircle">

                 </div>

             </div>
             <div class="bloc1 ">
                <h3>UI Design</h3>
                <p>L'interface utilisateur (user interface) est notre priorité: La fluidité<br />
                 de navigation est le secret d'un webmarketing efficace.
             </p>
             <div class="logoaside">
                <span class="fas fa-cubes"></span>
            </div>
            <div class="emptycircle">

            </div>
            <div class="littlecircle">

            </div>
        </div>
        <div class="bloc1 thirdPart">
            <h3 id="anchorpage3">SEO</h3>
            <p>Nous allons utiliser plusieurs leviers pour influencer en votre faveur<br/>
             les résultats de vos sites dans les moteurs de recherche.
         </p>
         <div class="logoaside">
            <span class="fas fa-chart-pie"></span>
        </div>

        <div class="emptycircle">

        </div>
        <div class="littlecircle" >

        </div>
    </div>

</aside>
</div>

<br>
<br >

</section>

<!--Page3-->
<section id="backgroundpage">

    <!-- Portfolio tittle -->

    <div class="contain1">

        <div class="tittle">
            <h2>NOS PROJETS</h2>
        </div>
        <div class="imagery">

            <div class="bordermodel">
            </div>               

            <div class="circle">
            </div>


            <div class="bordermodel">    
            </div>

        </div>

        <div class="tittle2 tittle5">
            <h2>Retrouvez ici tous les projets réalisés par nos équipes pour le compte de nos clients.</h2>
        </div>

        <div class="tittle3 tittle6">
            <h3>Vous aurez grâce à cette section, un aperçu de notre portofolio.</h3>
        </div>
    </div>

    <!-- Portfolio menu -->
    <div id="navigation2">
        <nav>

            <ul class="activemenu2">

                <li><a class="active2menu style-second-menu nav-display-all-works navborder1" href="#backgroundpage">All Works</a><div class="arrow arrowdown"></div></li>


                <li> <a class="style-second-menu nav-display-creative"href="#backgroundpage">Creative</a><div class="arrow"></div></li>


                <li><a class="style-second-menu nav-display-corporate"href="#backgroundpage">Corporate</a><div class="arrow"></div></li>


                <li><a class="style-second-menu nav-display-portfolio navborder2" href="#backgroundpage">Portofolio</a><div class="arrow"></div></li>

            </ul>
        </nav>

    </div>

    <!-- Portfolio Image -->
    <div class="portfolio">


        <div class="boximage1 creative-item"> 
            <img src="images/portfolio/01.jpg" alt="portofolio">
            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 1</p>
                <p class="textimage1_2"> Pour les FAN de Mr Patate</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>

            </div>
        </div>

        <div class="boximage1 creative-item"> 
            <img src="images/portfolio/02.jpg" alt="portofolio">
            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 2</p>
                <p class="textimage1_2"> Le thème Picasso</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>
            </div>
        </div>
        <div class="boximage1 corporate-item"> 
            <img src="images/portfolio/03.jpg" alt="portofolio">
            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 3</p>
                <p class="textimage1_2"> Le thème rétro</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>
            </div>
        </div>
        <div class="boximage1 creative-item"> 
            <img src="images/portfolio/04.jpg" alt="portofolio">
            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 4</p>
                <p class="textimage1_2"> Le thème HD</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>
            </div>
        </div>


        <div class="boximage1 corporate-item"> 
            <img src="images/portfolio/05.jpg" alt="portofolio">
            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 5</p>
                <p class="textimage1_2"> Le thème shopping</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>
            </div>
        </div>

        <div class="boximage1 corporate-item"> 
            <img src="images/portfolio/06.jpg" alt="portofolio">
            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 6</p>
                <p class="textimage1_2"> Le thème touristique</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>
            </div>
        </div>

        <div class="boximage1 portfoliofolio-item"> 
            <img src="images/portfolio/07.jpg" alt="portofolio">
            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 7</p>
                <p class="textimage1_2"> Le thème qui fuse</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>
            </div>
        </div>

        <div class="boximage1 portfoliofolio-item"> 
            <img src="images/portfolio/08.jpg" alt="portofolio">

            <div class="boxdescription1">
                <div class="backgroundportofolio">
                </div>
                <p class="textimage1">Portofolio Item 8</p>
                <p class="textimage1_2"> Le thème Goodies</p>
                <div class="fullcircle">
                </div>
                <span class="far fa-eye"></span>
            </div>
        </div>  

    </div>


</section>



<!--Page 4-->
<!-- Map -->
<section id="anchor3">

    <div class="filter">
        <div class="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2216096807224!2d2.347636915674888!3d48.87305177928887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e145ccb3091%3A0x9495beee8c96ec27!2s25+Rue+d&#39;Hauteville%2C+75010+Paris!5e0!3m2!1sfr!2sfr!4v1553353098435" frameborder="0" style="border:0" allowfullscreen></iframe>
            
        </div>
    </div>

    <!-- Our coordinates -->
    <div class="contactForm">
        <div class="tittlecontact">
            <h3 class="tittlecontact contact">Contact Info</h3>
            <p class="tittlecontact tittleagency">WebAgencySAS</p>
            <p class="tittlecontact">25 Rue d'Hauteville 75010 Paris</p>
            <p class="tittlecontact bottom"><span class="phone">Tel:</span> 01 02 03 04 05</p>
        </div>

        <!-- Contact form -->
        <form class="form-group" method="post" action="">
            <div class="input-group">
                <div class="col-md-11">
                    <input class="form-control" type="text" placeholder=" Name" name="name" id="name" required/>
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-11">
                    <input class="form-control" type="email" placeholder=" Email" name="email" id="email" required/>
                </div>
            </div>
            <div class="input-group">
                <div class="offset-md-1 offset-sd-1 col-md-9 col-sd-7 form-group alert-email alert-block alert-danger">
                    <h4>Erreur !</h4>
                    Email non valide!
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-11">
                    <input class="form-control" type="text" placeholder="Subject" name="subject" id="subject" required/>
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-10 col-sd-10">                   
                   <textarea class="textarea_message form-control" rows="4" name="message" id="message" placeholder="Message" required></textarea> 
               </div>
           </div>

           <div class="input-group">
            <div class="col-md-11">
                <button type="submit" class="form2 btn btn-primary pull-right">Envoyer</button>
            </div>
        </div>

    </form>
</div>
<?php

function chargerClasse($classname)
{
    require 'php/class/' . $classname . '.php';
}
spl_autoload_register('chargerClasse');

$db = new PDO('mysql:host=localhost;dbname=webagency','CharleyPONS', 'Azeres12!!!!');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$manager = new ContactManager($db);
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']))
{
    $customer = new Contact([
        'Name' => $_POST['name'],
        'email' => $_POST['email'],
        'Subject' => $_POST['subject'],
        'Message' => $_POST['message'],
    ]);

    $manager->add($customer);

    echo "<script> alert('bien u');</script>";

    ;

};




?>

</section>

<!-- Libraries -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"> </script>


<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/portfolio_image.js"></script>
<script type="text/javascript" src="js/main.js" ></script>
</body>
