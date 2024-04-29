<?php
include('include/connect.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan Alterado Portfolio Website</title>
    <link rel="stylesheet" href="css1/index.css">
    <link rel="stylesheet" href="css1/modal.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <script src="/css1/js/script.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <header>
        <a href="#" class="logo"><span>M</span>y <span>P</span>ortfolio</a>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#proj">Projects</a></li>
            <li><a href="#">Contacts</a></li>
            <!-- <li><a href="#">Curriculum Vitea</a> </li> -->
        </ul>
        <div class="menuBtn" id="loginBtn">
    <span>Admin</span>
    <div class="bx" id="menuIcon"></div>
</div>

<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <!-- Your login form goes here -->
        <form action="" method="post">
            <!-- Your login form fields go here -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="admin_login"></input>
        </form>
        <?php 

// session_start();

// Check if the form is submitted
if(isset($_POST['admin_login'])){
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    include 'include/connect.php'; 
    
    $select_query = "SELECT * FROM `admin` WHERE uname='$admin_username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    
    if($row_count > 0){
        if($admin_password == $row_data['upass']){
            $_SESSION['uname']=$admin_username;
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('admin/admin.php','_self')</script>";
        } else {
            echo "<script>alert('Invalid Password')</script>";
        }
    } else {
        echo "<script>alert('Invalid Username')</script>";
    }
}
?>

    </div>
</div>

    </header>
    <section class="home" id="home">
    <div class="homeImg" data-aos="zoom-in-right">
      <?php
      $select_query = "SELECT * FROM home";
      $result_query = mysqli_query($con, $select_query);
      while ($row = mysqli_fetch_assoc($result_query)) {
          $project_id = $row['id'];
          $project_image = $row['image']; 
          $project_prof = $row['profession']; 
          $project_name = $row['name']; 
          echo "<img src='admin/img/$project_image'alt=''>
          </div>
          <div class='homeText'>
              <span>$project_prof</span>
              <h1 class='h1'>$project_name</h1>"; 
      }
      ?>
            

        <p>Check out my:</p>
        <div class="social">
            <a href="https://web.facebook.com/profile.php?id=100082935840631"><i class='bx bxl-facebook-square'></i></a>
            <a href="https://github.com/ryan030"><i class='bx bxl-github' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
            <a href="cv.php" class="cv"><i>CURRICULUM VITEA</i></a>
           
        </div>
    
            <!-- <p>UI/UX designer, image and video editor, also knows some basic knowledge in creating an appliction</p> -->
        </div>
       
    </section>
    
    <section class="about" id="about">
    <div class="aboutText" data-aos="fade-down-right">
            <span class="aboutTextSpan">ABOUT</span>
            <!-- <h1>Ryan Alterado</h1> -->
            <p>Hello, I am Ryan, and I specialize in UI/UX design, image and video editing. As a UI/UX designer, I focus on creating user-friendly and visually appealing interfaces for websites or applications. Additionally, my skills extend to image and video editing, where I enhance visual content to achieve a professional and polished look.
Moreover, I have a basic understanding of creating applications, suggesting that I possess foundational knowledge in application development. This diverse skill set allows me to contribute to various aspects of digital design and multimedia production.
Feel free to connect with me through my social media channels, where I share my work and insights. I am passionate about leveraging design and technology to create engaging and impactful experiencesn</p>

<?php 
// include('education.php');
 ?>
        <!-- <button class="edu" id="openEduBtn">Academic Qualifications
        </button> -->
        

      </div>
        <div class="skills" id="skills">
    <h1>SKILLS</h1>
    <div id="progress1" class="progress-bar"></div>
    <div class="progress-label html">HTML: <span>Intermediate</span></div>
    <div id="progress2" class="progress-bar"></div>
    <div class="progress-label css">CSS: <span>Intermediate</span></div>
    <div id="progress3" class="progress-bar"></div>
    <div class="progress-label javascript">JAVASCRIPT: <span>Novice</span></div>
    <div id="progress4" class="progress-bar"></div>
    <div class="progress-label php">PHP: <span>Novice</span></div>
    <div id="progress5" class="progress-bar"></div>
    <div class="progress-label xml">XML: <span>Novice</span></div>
    <div id="progress6" class="progress-bar"></div>
    <div class="progress-label java">JAVA: <span>Novice</span></div>
</div>

    </section>
    <section class="proj" id="proj">
    <h1 style="text-align: center;" data-aos="fade-up"
     data-aos-anchor-placement="center-center">PROJECTS</h1>
    <div class="container-projects">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list" data-aos="zoom-in-right">
        <?php
$select_query = "SELECT * FROM projects";
$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
    $project_id = $row['id'];
    $project_name = $row['name'];
    $project_image = $row['img']; 
    $project_link = $row['link']; 
    echo "<a href='$project_link'><img class='image-item' src='images/$project_image' alt='$project_name' /></a>"; 
}
?>

            <!-- <img class="image-item" src="images/pic.png" alt="img-2" />
            <img class="image-item" src="images/pic.png" alt="img-3" />
            <img class="image-item" src="images/pic.png" alt="img-4" />
            <img class="image-item" src="images/pic.png" alt="img-5" />
            <img class="image-item" src="images/img-6.jpg" alt="img-6" />
            <img class="image-item" src="images/pic.png" alt="img-7" />
            <img class="image-item" src="images/pic.png" alt="img-8" />
            <img class="image-item" src="images/pic.png" alt="img-9" />
            <img class="image-item" src="images/pic.png" alt="img-10" /> -->
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>  
    </section>
    <script src="js/script.js"></script>
    <script>
    // Get modal and buttons
    var modal = document.getElementById('loginModal');
    var loginBtn = document.getElementById('loginBtn');
    var closeModal = document.getElementById('closeModal');

    loginBtn.onclick = function() {
        modal.style.display = 'block';
    }

    closeModal.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>
<script>
  const paragraph = document.querySelector('.aboutText p');
  const spanElement = document.querySelector('.aboutText span'); 

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        paragraph.classList.add('active');
        spanElement.classList.add('visible');
      } else {
        paragraph.classList.remove('active');
        // Remove the 'visible' class from the span
        spanElement.classList.remove('visible');
      }
    });
  }, { threshold: 0.7 }); // Adjust the threshold as needed

  // Observe the section
  observer.observe(document.querySelector('.aboutText'));
</script>
<script>function observeVisibility(className, threshold = 0.7) {
  const elements = document.querySelectorAll(className);

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      } else {
        entry.target.classList.remove('active');
      }
    });
  }, { threshold });

  elements.forEach(element => {
    observer.observe(element);
  });
}


observeVisibility('.progress-label', 0.5);
</script>
<!-- <script>
    function updateProgressBar(progressId, level, label) {
        const progressBar = document.getElementById(progressId);
        const labelElement = progressBar.nextElementSibling;

        // Update progress bar width based on level
        progressBar.className = 'progress-bar ' + level;

        // Update label to display skill level
        labelElement.innerHTML = label + ': ' + level;
    }

    function restartAnimation() {
        // Update progress bars with levels
        updateProgressBar('progress1', 'Intermediate', 'HTML');
        updateProgressBar('progress2', 'Intermediate', 'CSS');
        updateProgressBar('progress3', 'Novice', 'JAVASCRIPT');
        updateProgressBar('progress4', 'Novice', 'PHP');
        updateProgressBar('progress5', 'Novice', 'XML');
        updateProgressBar('progress6', 'Novice', 'JAVA');



    }

    // Call the restartAnimation function when the page is scrolled
    window.onscroll = restartAnimation;

    // Initial call to set progress bars based on initial position
    restartAnimation();
</script> -->
<script></script>

<script>let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    let st = window.pageYOffset || document.documentElement.scrollTop;
    
    if (st > lastScrollTop){
        // Scroll down
        document.querySelector('header').classList.add('header-hidden');
    } else {
        // Scroll up
        document.querySelector('header').classList.remove('header-hidden');
    }

    lastScrollTop = st <= 0 ? 0 : st;
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      indicators: true
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Get the modal
    var modal = document.getElementById("myModalEdu");

    // Get the button that opens the modal
    var btn = document.getElementById("openEduBtn");

    // Get the <span> element that closes the modal
    var closeEduModal = document.getElementById('closeEdu');

    btn.onclick = function() {
      modal.style.display = "block";
    }

   // Close the modal
   closeEduModal.onclick = function() {
        modal.style.display = 'none';
    }


    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  });
</script>
<script>
const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container-projects .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
    
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
        
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }

        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

     // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }

    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }

    // Call these two functions when image list scrolls
    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}

window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>  
</body>

</html>