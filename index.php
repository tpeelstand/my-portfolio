<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
      <title>Nathan Ellingson | Web Development Resume | Wisconsin Web Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
    <div class="wrapper">
        
        <div class="contact-info">
            <?php include 'contact-bar.php'; ?>
        </div>
        
        <header>
            <?php include 'header.php'; ?>
        </header>
        
        <main class="container-fluid">
            <?php include 'content.php'; ?>
        </main>

        <footer class="container-fluid">
            <?php include 'footer.php'; ?>
        </footer>
      </div> 
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  </body>
</html>