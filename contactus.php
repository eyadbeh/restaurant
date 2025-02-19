<?php include('config/constants.php'); ?>
<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];

  $query = "INSERT INTO contact_us (id,name,email,comment)
            VALUES('','$name','$email','$comment')";
  $result = mysqli_query($conn, $query);
  header("Location: m.php");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
  
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>contactus.php">Contact</a>
                    </li>
                </ul>
            </div>

    </section>

<style>
    .form-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 70vh;

    }

  </style>

  <div class="form-container">
    <form class="" action="" method="post" autocomplete="off">
      <div class="input-group mb-3">
        <span class="input-group-text">Name: </span>
        <input type="text" class="form-control" name="name" id="name" required value="">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">Email: </span>
        <input type="email" class="form-control" name="email" id="email" required value="">
      </div>

      <div class="form-floating">
        <textarea name="comment" class="form-control" id="comment"></textarea>
        <label for="comment">Comments</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Contact Us</button>
    </form>
  </div>
  <script> alert('Your comment added Successfully!'); </script> 

  <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>