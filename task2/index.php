<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">">
    <style>
      body {
         background-color:white;
         padding: 0;
         margin: 0;
      }
      .sidebar {
         width: 220px;
         background: lightblue;
         padding: 20px;
         height: 100vh;
         position: fixed;
         top: 0;
         left: 0;
         box-shadow: 2px 0 5px rgba(0,0,0,0.2);
      }
      .sidebar a {
         display:flex;
         color: white;
         text-decoration: none;
         padding: 10px;
         margin-bottom: 15px;
         text-align: center;
         text-decoration: none;
         border-radius: 8px;
         transition: 0.3s;
         font-size: 16px;
      
      }
      .sidebar a i {
         margin-right: 12px;
         font-size: 18px;
      }
      .content {
         text-align: center;
      }
      
      
   
      
    </style>
    </head>
<body>
   
    <!-- sidebar -->
     <div class="sidebar">
      <a href="index.php"><i class="fas fa-home" style="margin-right:12px;"></i>Home</a>
      <a href="Form b.php"><i class="fas fa-book" style="margin-right:12px;"></i>Form B</a>
        <a href="CA results.php"><i class="fas fa-file" style="margin-right:12px;"></i>CA results</a>
        <a href="Course-registration.php"><i class="fas fa-book" style="margin-right:12px;"></i>Course-registration</a>
        <a href="payment.php"><i class="fas fa-box" style="margin-right:12px;"></i>Payment</a>
        <a href="Results.php"><i class="fas fa-clock" style="margin-right:12px;"></i>Final results</a>
        
        
     </div>
     
     <!-- top bar -->
      <header class="top-bar">
        <div style="position: absolute; top: 20px; right: 20px; text-align: center;">
            <img src="pictures/avatar.JPG" alt="User avatar" style="width: 60px; height: 60px; border-radius: 50%;">
            <p style="color:black; margin-top: 5px; font-weight: bold;">JOHN DEO</p>
        </div>
         <!-- <h1>STUDENT ADMISSION DASHBOARD</h1> -->
        </header>
        <!-- main content -->
         <main class="content">
         <div style="margin-left: 240px; padding: 20px;">
            <h1>Welcome to the Admission Dashboard</h1>
            <p>Please select an option from the side-bar</p>
         </div>
         </main>

</body>
</html>