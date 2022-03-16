<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/0f04e7ed22.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="cv.css" />
  
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link bg-light" href="#experiences">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-light" href="#IT">IT skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-light" href="#academics">Academics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-light" href="#certificates">Certificates</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="row">
      <div class="col-3 d-flex-col justify-content-center">
        <figure> <img class="profile d-block m-auto" src="images/louis.png"></figure>
        <h1  class="profile d-block m-auto">Louis Tychon</h1>
        <p class="profile d-block m-auto">Training as a Web developer | SEO & SEA Specialist | Blockchain Enthousiast</p>
        <ul class="social">
          <a href="https://github.com/louistychon"><li><i class="fa-brands fa-github"></i> Github</li></a>
          <a href="https://www.linkedin.com/in/louis-tychon/"><li><i class="fa-brands fa-linkedin"></i> Linkedin</li></a>
          <a href="https://stackoverflow.com/users/17355510/louis"><li><i class="fa-brands fa-stack-overflow"></i> Stackoverflow</li></a>
        </ul>
      </div>

      <div class="col-7">
        <div class="row">
          <div class="col-lg-6 my-4">
            <ul>
              <li><i class="bullets"></i> Birthday: 21 October 1994</li>
              <li><i class="bullets"></i> Website: www.cryptopirate.fr/fr</li>
              <li><i class="bullets"></i> Phone: won't share it on the web !</li>
              <li><i class="bullets"></i> City: Brussels, Belgium</li>
            </ul>
          </div>
          <div class="col-lg-6 my-4">
            <ul>
              <li><i class="bullets"></i> Age: 27</li>
              <li><i class="bullets"></i> Degree: Bachelor</li>
              <li><i class="bullets"></i> Email: louis.tychon1[google mail extension]</li>
              <li><i class="bullets"></i> Looking for a new challenge</li>
            </ul>
          </div>
          <h2 id="experiences">Experiences</h2>
          <h3>Little Guest - Digital Marketing Manager | 01/2019 - 10/2021</h3>
          <ul>
            <li class="check">Management of a team of 10</li>
            <li class="check">Coordination of Digital Marketing actions</li>
            <li class="check">Optimisation SEO & SEA</li>
            <li>Management of Social networks & newsletters</li>
          </ul>
          <h3>Pycogroup - Performance Manager Consultant | 09/2019 - 12/2019 </h3>
          <ul>
            <li class="check">Performance management of Digital Marketing campaigns (brands Vichy, La Roche Posay, Cerave and Roger & Gallet)</li>
            <li class="check">Briefings and follow-up with media agencies (social, SEA, SEO)</li>
          </ul>
          <h3>Newpharma - SEO executive | 12/2016 - 02/2018</h3>
          <ul>
            <li class="check">Influencers management</li>
            <li class="check">Link building campaigns</li>
            <li class="check">Content creation</li>
            <li class="check">SEO missions</li>
          </ul>
          <h3>Fiverr - Freelance Digital Marketing | 2015 - 2018 </h3>
          <ul>
            <li class="check">Social networks management</li>
            <li class="check">E-commerce website audits</li>
            <li class="check">SEO keyword research</li>
            <li class="check">SEA consultance</li>
          </ul>
          <h2 id="academics">Academical background</h2>
          <ul>
          <li>HEPL Léon Eli-troclet - Bachelor in e-business | 2012 - 2015 </li>
          </ul>
          <h2 id="IT">IT skills</h2>
          <ul>
            <li class="check">PHP</li>
            <li class="check">Javascript</li>
            <li class="check">HTML/CSS</li>
            <li class="check">Bootstrap</li>
          </ul>
          <h2 class="languages">Language skills</h2>
          <ul>
            <li>French : mother tongue</li>
            <li>English : professionnal proficiency</li>
            <li>German : elementary proficiency</li>
            <li>Dutch : elementary proficiency</li>
          </ul>
          <h2 id="certificates">Certificates</h2>
          <ul>
            <li class="check">Solo learn PHP</li>
            <li class="check">Solo learn Javascript</li>
            <li class="check">Code Academy Javascript</li>
            <li class="check">Code Academy PHP</li>
            <li class="check"> OpenClassrooms "Créez votre site web avec HTML5 et CSS3"</li>

          </ul>
        </div>
      </div>
  </main>
  <footer>
    <?php include("footer.php"); ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/0f04e7ed22.js" crossorigin="anonymous"></script>
</body>

</html>