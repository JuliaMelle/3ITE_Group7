<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="navbar.js"></script>
    <title>Navigation Bar</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="#" class="logo">ThomasianOrgLink</a>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Organizations</a></li>
                <li><a href="#" class="button-apply">Apply</a>
            </ul>
            <form class="search-form">
                <input type="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
            <div class="dropdown">
                <div class="user-icon" onclick="toggleDropdown()">
                    <img src="iconprof.png" alt="User Icon">
                </div>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">My Profile</a>
                    <hr>
                    <a href="#">Log Out</a>
                </div>
            </div>
        </nav>
    </header>
    
</body>
</html>
