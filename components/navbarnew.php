<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/global.css" />
        <link rel="stylesheet" href="../css/navbarnew.css">
        <script src="../components/navbarnew.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
        <title>Navigation Bar</title>
    </head>
    <body>
        <nav>
            <ul>
                <li class="lmao">
                    <a href="../frontend/index.php" class="logo">
                        <img src="../assets/Logo.png">
                    </a>
                </li>
                <li class="hamburger-menu">
                    <button id="navToggleButton" class="hamburger-icon">
                        <img src="../assets/hamburger.png" alt="Ham Icon" class="h-icon">
                    </button>
                </li>
            <div class="items">
                <li><a href="../frontend/index.php">Home</a></li>
                <li><a href="../frontend/view.php">Organizations</a></li>
                <li><a href="../frontend/aform.php">Apply</a></li>
            </div>
                <li class="search-icon">
                    <input type="search" placeholder="Search...">
                    <button  class="icon">
                    </button>
                </li>
            
                <div class="dropdown">
                
                    <img src="../assets/iconprof.png" alt="User Icon" onclick="toggleDropdown()" class="user-icon">
                
                <div id="myDropdown" class="dropdown-content">
                    <a href="../frontend/login.php">Login</a>
                    <hr>
                    <a href="#">Log Out</a>
                </div>
            </div>
            </ul>
        </nav>
        <script>
        const navToggleButton = document.getElementById('navToggleButton');
        const navLinksContainer = document.querySelector('.items');

        navToggleButton.addEventListener('click', () => {
            navLinksContainer.classList.toggle('show');
            if (navLinksContainer.classList.contains('show')) {
                navLinksContainer.style.top = '60px';
            } else {
                navLinksContainer.style.top = '-220px';
            }
        });
    </script>

        


        
    </body>
</html>