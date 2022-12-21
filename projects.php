<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Software Engineering Portfolio</title>
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="nav.css" />
  </head>
  <body>
    <div class="container">
      <?php
        include 'header.php';
        include 'nav.php';
      ?>
      <div class="main  fade-in">
        <!-- Add your project cards here -->
        <div class="card">
          <img src="project-image.jpg" alt="Project image" />
          <h2>Project Title</h2>
          <p>Brief description of the project goes here.</p>
          <a href="#">Learn more</a>
        </div>
        <div class="card">
          <img src="project-image.jpg" alt="Project image" />
          <h2>Project Title</h2>
          <p>Brief description of the project goes here.</p>
          <a href="#">Learn more</a>
        </div>
        <div class="card">
          <img src="project-image.jpg" alt="Project image" />
          <h2>Project Title</h2>
          <p>Brief description of the project goes here.</p>
          <a href="#">Learn more</a>
        </div>
      </div>
        
      <script>
        document.addEventListener('DOMContentLoaded', function() {
  // Get the fade-in element
  var fadeIn = document.querySelector('.fade-in');
  // Add the loaded class to the element
  fadeIn.classList.add('loaded');
});
        </script>
      <?php
      include 'footer.php';
      ?>

    </div>
  </body>
</html>
