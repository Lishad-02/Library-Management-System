<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="normalize" href="css/normalize.css">
    <link rel="stylesheet" href="adminDashboard.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
</head>
<body>

    <div class="background">
        <img class="background" src="/BIBLIO/frontend/webimages/dashboard.png" alt="Background of profile page">
        <div id="overlay" class="overlay"></div>
    </div>

    <div class="menuBar" onclick="openNav()">

        <img class="menuImage" src="/BIBLIO/frontend/webimages/menu white.png" alt="menu bar">

    </div>

    <div id="mySidenav" class="sidenav">
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <img class="sideMenu" src="/BIBLIO/frontend/webimages/menubar.png" alt="">

        <a href="/BIBLIO/frontend/adminRequest.html">
            <button class="requestsButton">REQUESTS</button>
        </a>

        <a href="stockshow.php">
            <button class="stockButton">STOCK</button>
        </a>

        <a href="/BIBLIO/frontend/landing.html">
            <button class="logoutButton">LOG OUT</button>
        </a>

    </div>

    <script>

        function openNav() {

            document.getElementById("mySidenav").style.width = "400px";
            document.getElementById("overlay").style.display = "block";
        }
          
        function closeNav() {

            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("overlay").style.display = "none";
        }

    </script>

    <a href="stockshow.php">
        <button class="stock morebutton">STOCK</button>
    </a>

    <a href="admin_request.php">
        <button class="requests morebutton">REQUESTS</button>
    </a>

</body>
</html>