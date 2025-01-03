<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="normalize" href="css/normalize.css">
    <link rel="stylesheet" href="adminDashboard.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">

    <style>

        * {

            margin: 0px;
            margin-bottom: -5px;
        }
        
        body {
        
            position: relative
        }
        
        .background {
        
            width: 100%;
            height: 100%;
        
            z-index: -99999;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 99;
        }
        
        .menuBar {
        
            position: absolute;
        
            left: 7vw;
            top: 15vh;
            
        }
        
        .menuImage {
        
            height:15px;
            width: auto;
        }
        
        .sideMenu {
        
            position: absolute;
        
            height: 100vh;
        }
        
        .sidenav {
        
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            overflow-x: hidden;
            transition: 0.3s;
        }
        
        .sidenav .closebtn {
        
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 20px;
            color: white;
            margin-left: 50px;
            z-index: 101;
        }
        
        button {
        
            position: absolute;
        
            border-radius: 25px;
            z-index: 101;
        
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 9px;
        }
        
        
        .profileButton {

            font-family: 'Roseritta', sans-serif;
            background-color: black;
            color: white;
            font-size:2rem;
        
            border: 1px solid white;
        
            left: 8vw;
            top: 50vh;
        }
        
        .libraryButton {
        
            font-family: 'Roseritta', sans-serif;
            color: black;
            font-size:2rem;
        
            border: 1px solid black;
        
            left: 8vw;
            top: 63vh;
        }
        
        .logoutButton {
        
            font-family: 'Roseritta', sans-serif;
            background-color: black;
            color: white;
            font-size:2rem;
        
            border: 1px solid white;
        
            left: 7.3vw;
            top: 75vh;
        }
        
        .morebutton {
        
            border-radius: 50px;
            z-index: 99;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 18px;
        }
        
        .borrow {
        
            font-family: 'Roseritta', sans-serif;
            font-size: 200%;
            width: 25vw;
            height: 15vh;
            background-color: black;
            border: solid 1px white;
            color: white;
            position:absolute;
            left:22vw;
            bottom: 58vh;
        }
        
        .view {
        
            font-family: 'Roseritta', sans-serif;
            font-size: 200%;
            width: 25vw;
            height: 15vh;
            background-color: black;
            border: solid 1px white;
            color: white;
            position:absolute;
            right:22vw;
            bottom: 58vh;
        }

        .request {
        
            font-family: 'Roseritta', sans-serif;
            font-size: 200%;
            width: 25vw;
            height: 15vh;
            background-color: white;
            border: solid 1px gray;
            color: black;
            position:absolute;
            right:38vw;
            bottom: 28vh;
        }

    </style>
</head>
<body>

    <div class="background">
        <img class="background" src="BIBLIO/frontend/webimages/userDashboard.png" alt="Background of user dashboard page">
        <div id="overlay" class="overlay"></div>
    </div>

    <div class="menuBar" onclick="openNav()">

        <img class="menuImage" src="/BIBLIO/frontend/webimages/menu white.png" alt="menu bar">

    </div>

    <div id="mySidenav" class="sidenav">
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <img class="sideMenu" src="/BIBLIO/frontend/webimages/menubar.png" alt="">

        <a href="/BIBLIO/frontend/userDashboard.html">
            <button class="profileButton">PROFILE</button>
        </a>

        <a href=""> <!-- Link to borrow page in the href part -->
            <button class="libraryButton">LIBRARY</button>
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

    <a href="rent_bookv.php">  <!-- Link to borrow page in the href part -->
        <button class="borrow morebutton">BORROW BOOKS</button>
    </a>

    <a href="my_borrow_bookv.php">
        <button class="view morebutton">MY BORROWED BOOKS</button>
    </a>

    <a href="request_bookv.php">
        <button class="request morebutton">REQUEST FOR A BOOK</button>
    </a>

</body>
</html>