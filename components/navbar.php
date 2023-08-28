<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="../components/navbar.js"></script>
    <title>Navigation Bar</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="#" class="logo">
                <img src="../assets/Logo.png" alt="ThomOrg">
            </a>
            <ul class="nav-links">
                <li><a href="../frontend/index.php">Home</a></li>
                <li><a href="../frontend/view.php">Organizations</a></li>
                <li><a href="#" class="button-apply">Apply</a></li>
            </ul>
            <form class="search-form">
                <input type="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
            <div class="dropdown">
                
                    <img src="../assets/iconprof.png" alt="User Icon" onclick="toggleDropdown()" class="user-icon">
                
                <div id="myDropdown" class="dropdown-content">
                    <a href="../frontend/login.php">Login</a>
                    <hr>
                    <a href="#">Log Out</a>
                </div>
            </div>
        </nav>
    </header>
    
</body>
</html>
