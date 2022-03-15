<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="cv.css" />
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link bg-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-light" href="#">Experience</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle bg-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Trainings</a></li>
            <li><a class="dropdown-item" href="#">Skills</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Certificates</a></li>
          </ul>
      </ul>
    </div>
  </div>
</nav>
  </header>
  <div class="row">
    <div class="col-lg-3">
      <figure> <img class="profile" src="images/louis.png"></figure>
      <h1>Louis Tychon</h1>
      <p>Training as a Web developer | SEO & SEA Specialist | Blockchain Enthousiast</p>
    </div>

    <div class="col-lg-7">
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
            <li><i class="bullets"></i> PhEmailone: louis.tychon1[google mail extension]</li>
            <li><i class="bullets"></i> Looking for a new challenge</li>
          </ul>
        </div>
      </div>
      <h2 class="experiences">Experiences</h2>
      <h3>Little Guest - Digital Marketing Manager | 01/2019 - 10/2021</h3>
      <ul>
        <li>Management of a team of 10</li>
        <li>Coordination of Digital Marketing actions</li>
        <li>Optimisation SEO & SEA</li>
        <li>Management of Social networks & newsletters</li>
      </ul>
      <h3>Pycogroup - Performance Manager Consultant | 09/2019 - 12/2019 </h3>
      <ul>
        <li>Performance management of Digital Marketing campaigns (brands Vichy, La Roche Posay, Cerave and Roger & Gallet)</li>
        <li>Briefings and follow-up with media agencies (social, SEA, SEO)</li>
      </ul>
      <h3>Newpharma - SEO executive | 12/2016 - 02/2018</h3>
      <ul>
        <li>Influencers management</li>
        <li>Link building campaigns</li>
        <li>Content creation</li>
        <li>SEO missions</li>
      </ul>
      <h3>Fiverr - Freelance Digital Marketing | 2015 - 2018 </h3>
      <ul>
        <li>Social networks management</li>
        <li>E-commerce website audits</li>
        <li>SEO keyword research</li>
        <li>SEA consultance</li>
      </ul>
      <h2 class="education">Academical background</h2>
      <h3>HEPL Léon Eli-troclet - Bachelor in e-business </h3>
      <h2 class="interests">IT skills</h2>
      <ul>
        <li>PHP</li>
        <li>Javascript</li>
        <li>HTML/CSS</li>
        <li>Bootstrap</li>
      </ul>
      <h2 class="languages">Language skills</h2>
      <ul>
        <li>French : mother tongue</li>
        <li>English : professionnal proficiency</li>
        <li>German : elementary proficiency</li>
        <li>Dutch : elementary proficiency</li>
      </ul>
      <h2 class="certificats">Certificates</h2>
      <ul>
        <li>Solo learn PHP</li>
        <li>Solo learn Javascript</li>
        <li>Code Academy Javascript</li>
        <li>Code Academy PHP</li>
        <li>OpenClassrooms "Créez votre site web avec HTML5 et CSS3"</li>
        
      </ul>
      <footer>
      <?php include("footer.php"); ?>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>