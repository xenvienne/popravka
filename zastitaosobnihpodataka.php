<?php 
require_once "App/config/config.php";
require_once "App/classe/User.php";
$user = new User();

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgled.css" type="text/css" />
    <link rel="stylesheet" href="izgledCSS/user_admin.css" type="text/css" />
    <link rel="stylesheet" href="izgledCSS/zastitaosobnihpodataka.css" type="text/css" />
   
    <link rel="icon" type="image/png" href="travel.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-r4JSEV8OLcW2TToJ8dKFPCgAqOIFKgoLNFa6eC/7E9RHIf1Q5U6h" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }
    </script>
 <style>
       .register-button {
            list-style-type: none;
              position: relative;
              top: -20px; /* Prilagodite ovu vrednost prema vašim potrebama */
              margin-left: -10px; /
        }
    </style>
    
</head>
<body>

        <!--Poruka koja ce ispiati jesmo li se registrovali ili ne-->
            <div class="">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['message']['type']; ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['message']['text']; ?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>
    </div>


    <header>
        <nav>
       <!--     <div class="login-button">
                <a href="login.php" class="button" onclick="openLoginPopup()">Log in</a>
            <img src="" alt="Login Icon">
            </div>-->
            <!--OBRATI PAZNJU-->
            <?php if(!$user->if_logged()) :?>
                </div>
  <li class="register-button ">
        <a class="button" href="login.php">Login</a>
    </li>
    <li class="register-button ">
        <a class="button" href="prijavise.php">Register</a>
    </li>
    <?php else: ?>
        <li class="nav-item"><br><br><br>
    <a class="nav-link modern-button" href="change.php">Change password</a>
</li>
<li class="nav-item">
    <a class="nav-link modern-button" href="logout.php">Logout</a>
</li>

    <?php endif; ?>
            



            <div class="boksovi">
                <div class="box">
					<img src="onama.jpg" alt="Image 1">
					<h2>O NAMA</h2>
					<p>Naš tim iskusnih stručnjaka za putovanja posvećen je tome da vaše snove pretvori u stvarnost.</p>
                    <a href="onama.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box tall-box">
					<img src="destinacije.jpg" alt="Image 1">
					<h2>DESTINACIJE</h2>
					<p>Naše pažljivo odabrane destinacije protežu se od prekrasnih pejzaža 
						švicarskih Alpa do kulturnog blaga Kjota, osiguravajući da vaša puotovanja
						 budu jedinstvena.</p>
                    <a href="destinacije.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box">
					<img src="booking.jpg" alt="Image 1">
					<h2>BOOKING</h2>
					<p>Naša online platforma prilagođena korisnicima i posvećeni tim za podršku su tu da vam pomognu da s lakoćom osigurate vašu sljedeću avanturu.</p>
                    <a href="booking.php" class="button">REZEVIŠI</a>
                
                
                
                </div>
            </div>
            
                
            
        </nav>
        
            
        </div>
            
             
            
            
        
        </header>
        <br>
        <br>
        <br>




       <section>
        <h1> Zaštita osobnih podataka</h1>
        
        <p class="zastitapodataka">
        Cijenimo Vašu privatnost i poštujemo Vaše osobne podatke Pregledavanjem i korištenjem web stranica, slanjem upita,
        potpisom ugovora ili neposrednim kontaktom, 
        Panorama travel d.o.o. dobrovoljno stavljate na raspolaganje svoje osobne podatke, 
        a mi se obavezujemo da ćemo Vaše osobne podatke čuvati. Svi naši djelatnici, kao i poslovni partneri, odgovorni
        su za poštivanje načela zaštite privatnosti.</p>

        <p class="zastitapodataka">
        Panorama travel d.o.o. prikuplja osobne podatke koji su potrebni za ispunjenje ugovornih obveza
        i te podatke dijelimo s trećim osobama kada je to neophodno za realizaciju dogovorenih usluga 
        (zrakoplovni prijevoznici, autobusni prijevoznici, osiguravatelji, banke,
        smještajni objekti, druge turističke agencije, uredi za dobivanje viza). </p>
        <p class="zastitapodataka">

        Vaše osobne podatke prikupljamo na nekoliko načina
     <ul class="b">
  <li>putem web stranica, prilikom izrade upita ili rezervacije, na način da sami unosite tražene podatke</li>
  <li>kontaktom sa našim djelatnicima gdje osobno, dobrovoljno, dajete osobne podatke u svrhu obrade za realizaciju dogovorenih usluga</ki>
  <li>od trećih osoba, subagenata, koji u Vaše ime s nama sklapaju ugovor o korištenju Panorama usluga </li>
    </ul>
    
    <p class="zastitapodataka">
    Povremeno provodimo ankete i upitnike. Podatke koje dobrovoljno navedete preko anketa i upitnika koriste se isključivo za naše interne potrebe, u svrhu poboljšanja naših usluga.<br>
     Navedene osobne podatke ne koristimo u promotivne svrhe osim u slučaju kada vi sami date pristanak, odnosno kontakt.<br>
      Za promotivne svrhe prijavljujete se dobrovoljno preko newsletter forme koja se nalazi na web stranici www.panoramatravel.com.<br>
       Prijavom na newsletter pristajete da vam šaljemo informacije o našim ponudama putovanja, akcijama, last ili first minute ponudama.<br>
     Na newsletter se možete prijaviti i prilikom registracije na www.panoramatravel.com odakle ide poveznica na newsletter formu.</p>

    <p class="zastitapodataka">
    Korištenjem stranice www.panoramatravel.com pristajete na naše korištenje kolačića. 
    To su male datoteke koje se koriste za web analize, mjerenje broja posjetitelja, analizu pretraga, postavke jezika.<br>
    </p>

    <p class="zastitapodataka">
    Kako su stranice www.panoramatravel.com namijenjene za nekomercijalno korištenje nije dozvoljeno kopiranje tekstova i fotografija, distribuiranje, mijenjanje niti objavljivanje informacija u komercijalne svrhe.
    </section>






<style>

     h1 {
        color:midnightblue;
        margin-left: 500px;
    }
    footer a {
    text-decoration: none;
    transition: border-bottom 0.3s ease;
    font-size: 1.1em; 
    color: white; 
}

footer a:hover {
    border-bottom: 1px solid; 
    font-size: 1.2em; 
}
.copy p{
  color: black;
 
 
}
.sredina{
    margin-top:25px;
    text-align:center;
}
    
.sredina {
            margin-top: 25px;
            text-align: center;
        }

        .sredina i {
            font-size: 30px;
            margin: 0 10px;
            color: #333; 
            transition: color 0.3s ease; 
        }

        .sredina i:hover {
            color: #007bff; 
        }

        .copy {
            text-align: center;
            color: white; 
        }
        
        .fa-facebook {
    background: #3b5998; /* Facebook boja */
    color: white;
  }

.fa-instagram {  
  background: #125688;  
  color: white;  
}  

  .fa-viber {
    background: #665CAC; /* Vaša Viber boja */
    color: white;
  }

  .fa-whatsapp {
    background: #25D366; /* Vaša WhatsApp boja */
    color: white;
  }

  .fa-tiktok {
    background: #69C9D0; /* Vaša TikTok boja */
    color: white;
  }

  .fa-twitter {
    background: #1DA1F2; /* Vaša Twitter boja */
    color: white;
  }.fa-instagram {  
  background: #125688;  
  color: white;  
}  

    
</style>





        
      
<style>
    footer a {
    text-decoration: none;
    transition: border-bottom 0.3s ease;
    font-size: 1.1em; 
    color: white; 
}

footer a:hover {
    border-bottom: 1px solid; 
    font-size: 1.2em; 
}
.copy p{
  color: white;
 
 
}
.sredina{
    margin-top:25px;
    text-align:center;
}
    
.sredina {
            margin-top: 25px;
            text-align: center;
        }

        .sredina i {
            font-size: 30px;
            margin: 0 10px;
            color: #333; 
            transition: color 0.3s ease; 
        }

        .sredina i:hover {
            color: #007bff;
        }

        .copy {
            text-align: center;
            color: white; 
        }
        
        .fa-facebook {
    background: #3b5998; /* Facebook boja */
    color: white;
  }

.fa-instagram {  
  background: #125688;  
  color: white;  
}  

  .fa-viber {
    background: #665CAC; /* Nasa Viber boja */
    color: white;
  }

  .fa-whatsapp {
    background: #25D366; /* Nasa WhatsApp boja */
    color: white;
  }

  .fa-tiktok {
    background: #69C9D0; /* Nasa TikTok boja */
    color: white;
  }

  .fa-twitter {
    background: #1DA1F2; /* Nasa Twitter boja */
    color: white;
  }.fa-instagram {  
  background: #125688;  
  color: white;
  
  
  


  
}  
        

    
</style>


<footer>
    <br>
    <div class="contact">
        <h2>KONTAKTIRAJTE NAS</h2>
        <div class="container-all">
            <div class="container-kompanija">
                <h3>KOMPANIJA<h3>
                <p><a href="onama.php"> O nama</a></p>
                <p><a href="galerija.php"> Galerija</a></p>
            </div>
            <div class="container-pomoc">
                <h3>POTRAŽITE POMOĆ<h3>
                <p><a href="faq.php"> FAQ</a></p>
                <p><a href="kontakt.php">Kontakt</a></p>
                <p><a href="zastitaosobnihpodataka.php">Zaštita osobnih podataka</a></p>
            </div>
            <div class="container-info">
                <h3>INFORMACIJE<h3>
                <p><a href="blog.php">Blog</a></p>
              
            </div>
        </div>
    </div>
    <div class="ftr">
        <div class="ftr-image">
            <img src="loc.png" alt="Image 11">
            <p>Turalibegova 43, Tuzla 75000</p>
        </div>
        <div class="ftr-image">
            <img src="phone.png" alt="Image 12">
            <p>+387 35 294-046</p>
        </div>
        <div class="ftr-image">
            <img src="email.png" alt="Image 13">
            <p>panorama.travels@info.gmail.com</p>
        </div>
    </div>
    <div class="sredina">
     <br>
   


     <a href="link_ka_facebooku"><i class="fa-brands fa-facebook"></i></a>
<a href="link_ka_instagramu"><i class="fa-brands fa-instagram"></i></a>
<a href="link_ka_viberu"><i class="fa-brands fa-viber"></i></a>
<a href="link_ka_whatsappu"><i class="fa-brands fa-whatsapp"></i></a>
<a href="link_ka_tiktok"><i class="fa-brands fa-tiktok"></i></a>
<a href="link_ka_twitteru"><i class="fa-brands fa-twitter"></i></a>

    <p class="copy" style="text-align: center;">
        © 2024 Panorama Travels. Sva prava pridržana.
       <br><br><br> 
    </p>
</div>
            </div>
            </div>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.8/dist/umd/popper.min.js" integrity="sha384-PLACEHOLDER" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJcFCQD8DST" crossorigin="anonymous"></script>
        </footer>
        </body>
</html>