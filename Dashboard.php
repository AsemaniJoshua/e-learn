<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | E-Learn</title>
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="shortcut icon" href="images/Logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <!-- <link rel="stylesheet" href="styles/home/style.css">
    <link rel="stylesheet" href="styles/home/Footer.css">
    <link rel="stylesheet" href="courseDetails style/courseDetails.css"> -->
    <!-- Bootstrap Css-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/feather-icons"></script> -->

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

<?php

    // if(!isset($_SESSION['Student_Id']) || !isset($_SESSION['Instructor_Id'])){
    //     header("Location: login.html");
    //     exit();
    // }


?>

    <!-- Side Panel -->

    <section id="sidePanelSection">
        <section class="sidePanel" >
            <div>
                <img src="images/profile.png" alt="Logo" class="logo">
            </div>

            <nav>
                <ul>
                    <li><button class="active" id="DashboardBtn">Dashboard</button></li>
                    <li><button id="MyCoursesBtn">My Courses</button></li>
                    <li><button id="CourseCatalogBtn">Course Catalog</button></li>
                    <li><button id="SettingsBtn">Settings</button></li>
                    <li><button id="LogoutBtn">Logout</button></li>
                </ul>
            </nav>
        </section>
    </section>



    <!-- Humberger Menu -->

    <!-- <div class="humbergerMenuContainer" id="humbergerMenuContainer">
        <img src="images/Humberger (2).png" alt="Hamburger Icon" class="humburgerMenu" id="humburgerMenu">
    </div> -->

    

    

    <!-- Main Content -->

    
    <main id="Main">


        <!-- Dashboard Navbar -->

        <div id="DashboardNavbar">
            <input type="search" name="SearchCourses" id="SearchCourses" placeholder="Search for Courses">
        </div>

        <!-- Student Details -->

        <section id="StudentDetails" class="StudentDetails">
            <div id="StudentId">
                <h2>Student Id</h2>
                <span><?php echo $_SESSION['Student_Id'];?></span>
            </div>

            <div id="StudentName">
                <h2>Student Name</h2>
                <span><?php echo $_SESSION['Student_FullName'];?></span>
            </div>
        </section>


        <!-- Dashboard Section -->

       <section id="DashboardGraph">
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

        <section id="Settings" class="Settings">
            <h1 class="SettingsH1">Settings</h1>
            
            <!-- Personal Information Div In Settings Section -->
            <div class="PersonalInformationDiv">

                <h3>Personal Information</h3>

                <div class="ChangeNameDiv">
                    <div>
                        <label>Name:</label>
                        <label>
                            <?php echo $_SESSION['Student_FullName'];?>
                        </label>
                    </div>
                    <button id="ChangeNameBtn">Edit</button>                    
                </div>

                <div class="ChangeEmailDiv">
                    <div>
                        <label>Email:</label>
                        <label>
                            <?php echo $_SESSION['Student_Email'];?>
                        </label>
                    </div>
                    <button id="ChangeEmailBtn">Edit</button>                   
                </div>

                <div class="ChangePasswordDiv">
                    <h2>Change Password</h2>
                    <button id="ChangePasswordBtn">Change Password</button>                   
                </div>
            </div>



            <!-- Profile Picture Div In Settings Section -->

            <div class="ProfilePicDiv">
                <h3>Profile Picture</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="profilePicture" id="profilePicture" accept="image/*">
                    <button type="submit" name="UploadProfilePicture">Upload</button>
                </form>
            </div>
        </section>





        <!-- Course Catalog Section -->

        <section id="CourseCatalog">

            <!-- Welcome description -->

    <div class="welcome">
        <div id="courseDetailsImgDiv">
            <img src="images/courseDetailsImg.png" alt="courseDetailsImg" id="courseDetailsImg">    
        </div>

        <div class="intro">
            <h2 class="welcomeHeader">Welcome to our Courses</h2>
            <p class="welcomeDesc">We're thrilled to have you join us on your journey to mastering web development. Whether you're diving into the dynamic world of frontend design or exploring the intricacies of backend development, you've come to the right place.</p>
        </div>
    </div>


     <!-- Individual Course Description  -->

     <!-- Web dev 1  -->

    <details>
        <summary class="summary">Web Development 1</summary>
        
        <div class="detailsDiv" id="wd1">
            <div id="webDev1ImgDiv">
                <img src="images/webDev1.png" alt="webDev1Img" id="webDev1Img">
            </div>
            
            <div class="courseDetails">
                <h2>Foundations of Frontend Development</h2>
                <p>Welcome to the world of frontend development! Web Dev 1 is designed to introduce you to the fundamental concepts and technologies that form the backbone of modern web design. This course is perfect for beginners and covers everything you need to start your journey in web development.</p>
                <h3>Course Highlights:</h3>
                <ul>
                    <li><span>HTML:</span>Learn the structure of webpages. We'll cover the basics, such as creating and structuring content using tags, adding images, links, and more.</li>
    
                    <li><span>CSS:</span>Dive into styling your webpages. You'll learn about selectors, properties, and how to make your site visually appealing. Topics include layouts, colors, fonts, and responsive design.</li>
    
                    <li><span>Introduction to JavaScript:</span>Get a taste of interactivity with JavaScript. We'll cover basic concepts like variables, functions, and events.</li>
    
                    <li><span>Best Practices:</span>Understand the importance of clean, semantic code and accessibility in web development.</li>
                </ul>
                <p>By the end of this course, you'll be able to create simple yet attractive webpages, laying a solid foundation for more advanced topics.</p>
    
                <div class="enroll">
                    <form action="CheckStateDashboard.php" method="POST">
                        <button class="enrollBtn" type="submit" name="WebDev1">Enroll Now (Free)</button>
                    </form>
                </div>
            </div>
        </div>
    </details>



    <!-- Web Dev 2  -->

    <details>
        <summary class="summary">Web Development 2</summary>
        
        <div class="detailsDiv" id="wd2">
            <div id="webDev1ImgDiv">
                <img src="images/webDev2.png" alt="webDev1Img" id="webDev1Img">
            </div>
            
            <div class="courseDetails">
                <h2>Intermediate Frontend Techniques</h2>
                <p>Building on the basics, Web Dev 2 takes your frontend skills to the next level. This course focuses on more advanced concepts and technologies that are essential for creating modern, dynamic websites.</p>
                <h3>Course Highlights:</h3>
                <ul>
                    <li><span>Advanced CSS:</span>Learn about Flexbox and Grid layouts for advanced page structures. We'll also cover animations and transitions to bring your site to life.</li>
    
                    <li><span>JavaScript Deep Dive:</span>Expand your JavaScript knowledge with topics such as DOM manipulation, event handling, and AJAX for dynamic content loading.</li>
    
                    <li><span>Frameworks and Libraries:</span>Get introduced to popular frontend frameworks and libraries like Tailwind, Bootstrap and jQuery. Understand how they can simplify your development process.</li>
    
                    <li><span>Project Work:</span>Apply your skills to build interactive, user-friendly web applications.</li>
                </ul>
                <p>By the end of this course, you'll be well-versed in creating more complex, visually stunning, and highly interactive websites.</p>

                <div class="enroll">
                    <form action="CheckStateDashboard.php" method="POST">
                        <button class="enrollBtn" type="submit" name="WebDev2">Enroll Now ($20)</button>
                    </form>
                </div>

            </div>
    
            
        </div>

    </details>
    

    
     <!-- Web Dev 3  -->

    <details>
        <summary class="summary">Web Development 3</summary>
        
        <div class="detailsDiv" id="wd3">
            <div id="webDev1ImgDiv">
                <img src="images/webDev3.png" alt="webDev1Img" id="webDev1Img">
            </div>
            
            <div class="courseDetails">
                <h2>Advanced Frontend Development</h2>
                <p>Web Dev 3 is for those who want to become experts in frontend development. This course covers cutting-edge technologies and best practices to ensure you stay ahead in the ever-evolving web development landscape.</p>
                <h3>Course Highlights:</h3>
                <ul>
                    <li><span>JavaScript Frameworks:</span>Dive deep into popular frameworks such as React, Angular, or Vue. Understand component-based architecture and state management.</li>
    
                    <li><span>Performance Optimization:</span>Learn techniques to optimize your website's performance, including lazy loading, code splitting, and more.
                    </li>
    
                    <li><span>Advanced CSS Techniques:</span>Master complex CSS concepts and methodologies like BEM, CSS-in-JS, and pre-processors like Sass or LESS.</li>
    
                    <li><span>Progressive Web Apps (PWAs):</span>Understand the principles of PWAs and how to build web applications that provide a native app-like experience.</li>
                </ul>
                <p>By the end of this course, you'll have the skills to develop high-performance, scalable, and maintainable frontend applications.</p>

                <div class="enroll">
                    <form action="CheckStateDashboard.php" method="POST">
                        <button class="enrollBtn" type="submit" name="WebDev3">Enroll Now ($50)</button>
                    </form>
                </div>
                
            </div>
    
            
        </div>

    </details>



     <!-- Backend 1  -->

    
    <details>
        <summary class="summary">Backend Development 1</summary>
        
        <div class="detailsDiv" id="bd1">
            <div id="webDev1ImgDiv">
                <img src="images/Back 1.png" alt="webDev1Img" id="webDev1Img">
            </div>
            
            <div class="courseDetails">
                <h2>Introduction to Backend Development</h2>
                <p>Welcome to the server side! Backend 1 is designed for beginners who want to learn how to build the backbone of web applications. This course covers the basic concepts and technologies of backend development.</p>
                <h3>Course Highlights:</h3>
                <ul>
                    <li><span>Server Fundamentals:</span>Learn about servers, hosting, and the role of backend in web applications.</li>
    
                    <li><span>Node.js:</span>Get introduced to Node.js, a powerful server-side JavaScript runtime. Learn the basics of setting up a server, handling requests, and building simple APIs.
                    </li>
    
                    <li><span>Databases:</span>Understand the basics of databases, including relational (SQL) and non-relational (NoSQL) databases. Learn how to perform basic CRUD operations.</li>
    
                    <li><span>RESTful APIs:</span>Learn how to design and build RESTful APIs. Understand the principles of REST and how to implement them in your projects.</li>
                </ul>
                <p>By the end of this course, you'll be able to set up a basic backend server, connect it to a database, and build simple APIs.</p>

                <div class="enroll">
                    <form action="CheckStateDashboard.php" method="POST">
                        <button class="enrollBtn" type="submit" name="Backend1">Enroll Now (Free)</button>
                    </form>
                </div>
                
            </div>
    
            
        </div>

    </details>



     <!-- Backend 2  -->

    <details>
        <summary class="summary">Backend Development 2</summary>
        
        <div class="detailsDiv" id="bd2">
            <div id="webDev1ImgDiv">
                <img src="images/Back 2.png" alt="webDev1Img" id="webDev1Img">
            </div>
            
            <div class="courseDetails">
                <h2>Intermediate Backend Development</h2>
                <p>Building on the basics, Backend 2 delves deeper into backend technologies and practices. This course is ideal for those who want to enhance their backend development skills and build more complex applications.</p>
                <h3>Course Highlights:</h3>
                <ul>
                    <li><span>Advanced Node.js:</span>Learn about asynchronous programming, middleware, and the Express.js framework for building robust web servers.</li>
    
                    <li><span>Database Management:</span>Dive deeper into database management, including advanced queries, indexing, and optimization techniques. Learn about ORMs and their benefits.
                    </li>
    
                    <li><span>Authentication and Authorization:</span>Implement user authentication and authorization using techniques like JWT, OAuth, and Passport.js.
                    </li>
    
                    <li><span>API Development:</span>Learn to build and consume more complex APIs, including GraphQL. Understand how to handle versioning and documentation.</li>
                </ul>
                <p>By the end of this course, you'll be proficient in building and managing more advanced backend systems, ensuring they are secure and efficient.</p>

                <div class="enroll">
                    <form action="CheckStateDashboard.php" method="POST">
                        <button class="enrollBtn" type="submit" name="Backend2">Enroll Now ($20)</button>
                    </form>
                </div>

            </div>
    
            
        </div>

    </details>



     <!-- Backend 3  -->

    <details style="margin-bottom: 80px;">
        <summary class="summary">Backend Development 3</summary>
        
        <div class="detailsDiv" id="bd3">
            <div id="webDev1ImgDiv">
                <img src="images/Back 3.png" alt="webDev1Img" id="webDev1Img">
            </div>
            
            <div class="courseDetails">
                <h2>Advanced Backend Development</h2>
                <p>Backend 3 is for those who want to master backend development. This course covers advanced topics and best practices to help you build scalable, high-performance web applications.</p>
                <h3>Course Highlights:</h3>
                <ul>
                    <li><span>Microservices Architecture:</span>Understand the principles of microservices and how to design and implement them using technologies like Docker and Kubernetes.</li>
    
                    <li><span>Performance Optimization:</span>Learn techniques to optimize backend performance, including caching strategies, load balancing, and database optimization.
                    </li>
    
                    <li><span>Security Best Practices:</span>Dive deep into securing your backend services, covering topics like secure coding practices, encryption, and protecting against common vulnerabilities.
                    </li>
    
                    <li><span>Scalability:</span>Learn how to build scalable systems, including techniques for horizontal and vertical scaling, distributed databases, and message queues.</li>
                </ul>
                <p>By the end of this course, you'll have the expertise to design, build, and maintain complex, scalable, and secure backend systems.</p>

                <div class="enroll">
                    <form action="CheckStateDashboard.php" method="POST">
                        <button class="enrollBtn" type="submit" name="Backend3">Enroll Now ($50)</button>
                    </form>
                </div>

            </div>
    
            
        </div>

    </details> 

    <!-- End of Individual Course Description -->

    </section>














        <!-- Individual Course-->

        <section id="IndividualCourse">
            <div class="IndividualCourseDetails">
                <img src="" alt="">
                <h2>Individual Course</h2>
                <p>This is the individual course page. Here you can view the details of the course and enroll for it.</p>
                <button id="Learn">Learn</button>
            </div>
        </section>
    
    </main>

    <!-- Change Name PopUp  -->

    <div id="ChangeNamePopUp">
        <form action="" method="post">
            <button type="button" id="closeChangeNamePopUp">&times;</button>
            <label for="ChangeName">Change Name:</label>
            <br>
            <input type="text" name="ChangeName" id="ChangeName">
            <br>
            <button type="submit" name="SaveName">Save</button>
        </form>
    </div>

    <!-- Change Email PopUp -->

    <div id="ChangeEmailPopUp">
        <form action="" method="post">
            <button type="button" id="closeChangeEmailPopUp">&times;</button>
            <label for="ChangeEmail">Change Email:</label>
            <br>
            <input type="email" name="ChangeEmail" id="ChangeEmail">
            <br>
            <button type="submit" name="SaveEmail">Save</button>
        </form>
    </div>

    <!-- Change Password PopUp -->

    <div id="ChangePasswordPopUp">
        <form action="" method="post">
            <button type="button" id="closeChangePasswordPopUp">&times;</button>
            <label for="ChangeOldPassword">Old Password:</label>
            <br>
            <input type="password" name="ChangeOldPassword" id="ChangeOldPassword">
            <br>
            <label for="ChangeNewPassword">New Password:</label>
            <br>
            <input type="password" name="ChangeNewPassword" id="ChangeNewPassword">
            <br>
            <button type="submit" name="SavePassword">Save</button>
        </form>
    </div>


    <script src="./js/dashboard.js"></script>
    <script src="//code.tidio.co/wqykj04koewk5ditm2jn47uqejcv2xzu.js" async></script>

</body>
</html>