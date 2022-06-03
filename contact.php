<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cv.css">
    <title>Contactez-moi</title>

</head>

<body>
<h1 class="text-center display-1">Contact me</h1>
    <div class="form-container container text-center mt-5">
        <form method="post" action="postvalidation.php" class="d-flex-col">
            <div class="input mt-1"><input type="text" name="nom" class="rounded-pill" placeholder="Your name*" required></div>
            <div class="input mt-1"><input  class="rounded-pill" type="url" name="job" placeholder="Job link"></div>
            <div class="input mt-1"><input class="rounded-pill" type="email" name="email" placeholder="E-mail*" required></div>
            <div class="input mt-1"><textarea class="" rows="5" cols="50" type="text" name="msg" placeholder="Your message" required></textarea></div>
            <button type="submit" class="rounded-pill btn btn-primary mt-1">Send form</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0f04e7ed22.js" crossorigin="anonymous"></script>
</body>

</html>