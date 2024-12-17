<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | E-Learn</title>
    <link rel="stylesheet" href="./dashboard.css">
    
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>

</head>
<body>

    <!-- Side Panel -->

    <section id="sidePanelSection">
        <section class="sidePanel" >
            <div>
                <img src="images/Logo.png" alt="Logo" class="logo">
            </div>

            <nav>
                <ul>
                    <li><button class="active">Dashboard</button></li>
                    <li><button id="MyCoursesBtn">My Courses</button></li>
                    <li><button id="CourseCatalogBtn">Course Catalog</button></li>
                    <li><button id="SettingsBtn">Settings</button></li>
                    <li><button id="LogoutBtn">Logout</button></li>
                </ul>
            </nav>
        </section>
    </section>



    <!-- Humberger Menu -->

    <div class="humbergerMenuContainer" id="humbergerMenuContainer">
        <img src="images/Humberger (2).png" alt="Hamburger Icon" class="humburgerMenu" id="humburgerMenu">
    </div>

    <!-- Main Content -->

    
    <main id="Main">

       <section id="Dashboard">
            <section class="Graph">
                    
                <canvas id="myChart" style="width:50%;max-width:500px"></canvas>
                <canvas id="myChart1" style="width:50%;max-width:500px"></canvas>
            </section>

            <section class="Graph">
        
                <canvas id="myChart2" style="width:50%;max-width:500px;"></canvas>
                <canvas id="myChart3" style="width:50%;max-width:500px"></canvas>
            </section>

                                
       </section>

    
    </main>


    <script src="./dashboard.js"></script>
    <script src="//code.tidio.co/wqykj04koewk5ditm2jn47uqejcv2xzu.js" async></script>

</body>
</html>