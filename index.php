<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan Alterado Portfolio Website</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/modal.css">

    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="#" class="logo"><span>R</span>yan</a>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Curriculum Vitea</a> </li>
            <li><a href="#">Contacts</a></li>
        </ul>
        <div class="menuBtn" id="loginBtn">
    <span>Login</span>
    <div class="bx" id="menuIcon"></div>
</div>

<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <!-- Your login form goes here -->
        <form action="admin/admin_login.php" method="post">
            <!-- Your login form fields go here -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>

    </header>
    <section class="home" id="home">
    <div class="homeImg">
            <img src="images/cv2x2.jpg" alt="">
        </div>
        <div class="homeText">
            <span>SOFTWARE DEVELOPER</span>
            <h1>Ryan Alterado</h1>

        <p>Check out my:</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook-square'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-tiktok' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
        </div>
    
            <!-- <p>UI/UX designer, image and video editor, also knows some basic knowledge in creating an appliction</p> -->
        </div>
       
    </section>
    
    <section class="about" id="about">
    <div class="homeText">
            <span>ABOUT</span>
            <!-- <h1>Ryan Alterado</h1> -->
            <p>hello, I am Ryan UI/UX designer, image and video editor, also knows some basic knowledge in creating an appliction</p>
        </div>
    <div class="aboutImg">
            <img src="images/cv2x2.jpg" alt="">
        </div>
    </section>
   
    <script src="js/script.js"></script>
    <script>
    // Get modal and buttons
    var modal = document.getElementById('loginModal');
    var loginBtn = document.getElementById('loginBtn');
    var closeModal = document.getElementById('closeModal');

    // Show the modal
    loginBtn.onclick = function() {
        modal.style.display = 'block';
    }

    // Close the modal
    closeModal.onclick = function() {
        modal.style.display = 'none';
    }

    // Close the modal if the overlay is clicked
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>

</body>
</html>