<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--END CSS-->

  <!--CSS BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!--END CSS BOOTSTRAP-->

  <title>Landing Page</title>
</head>

<body>
  <!-- navbar -->
  <?php include './Components/navbar.php' ?>
  <!-- END navbar -->

  <!-- Hero Section -->
  <?php include './Section/Home/Hero.php' ?>
  <!--END Hero -->

  <!-- Poster Section -->
  <?php include './Section/Home/Poster.php' ?>
  <!--END Poster -->

  <!-- Event Section -->
  <?php include './Section/Home/Event.php' ?>
  <!-- End Event Section -->

  <!-- Footer -->
  <?php include './Components/footer.php' ?>
  <!-- End Footer -->


  <!--JS BOOTSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--END JS BOOTSTRAP-->
</body>

</html>