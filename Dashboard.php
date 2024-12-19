<?php

session_start();

if(!isset($_SESSION['Student_Id']) || !isset($_SESSION['Instructor_Id'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | E-Learn</title>
    <link rel="stylesheet" href="./dashboard.css">
    <script> 
    // Prevent back navigation 
    history.pushState(null, null, location.href); 
    window.onpopstate = function () { 
        history.go(1); 
    }; 
    </script>
    
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


        <!-- Dashboard Section -->

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




       <!-- Settings Section -->

        <section id="Settings">
            <h1>Settings</h1>
            
            <!-- Personal Information Div In Settings Section -->
            <div>

                <h3>Personal Information</h3>

                <div>
                    <label>Name:</label>
                    <label><?php  
                        echo "This is your name";
                    ?></label>
                    <button>Edit</button>
                </div>

                <div>
                    <label>Email:</label>
                    <label><?php  
                        echo "This is your Email";
                    ?></label>
                    <button>Edit</button>
                </div>

                <div>
                    <button>Change Password</button>
                </div>
            </div>



            <!-- Profile Picture Div In Settings Section -->

            <div>
                <h3>Profile Picture</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="profilePicture" id="profilePicture" accept="image/*">
                    <button>Upload</button>
                </form>
            </div>
        </section>





    
    </main>


    <script src="./dashboard.js"></script>
    <script src="//code.tidio.co/wqykj04koewk5ditm2jn47uqejcv2xzu.js" async></script>

</body>
</html>