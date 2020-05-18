<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/css.css">
<title>Dashboard</title>
</head>

<div class="page-header">
        <h1 id="username">Hi, <b ><?php echo htmlspecialchars($_SESSION["username"]); ?></b> </h1>
    </div>
<body>
    <script>
 

       function myFunction()
       {

        alert("whhh");
        //window.location.href = "http://www.google.com";
        //location.href="http://google.com";
        //document.location.href = '/page2.html';
        location.reload();
        location.href="http://google.com";
        alert("after");

       }

        //onclick="location.href='http://google.com';"
        //action="action_page.php" 
        </script>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
          </div>

<h1>Tickets</h1>
<p></p>
<form onsubmit="myFunction()">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="logo" class="avatar">
    </div>

  
    <div class="container">
      
      <section style="width: 100%"  >

                      <table style="width:90%  ;margin: 1%">
                          <tr>
                              <th >
                        <table >
                            <tr>
                              <th style="width: 80%">
                                  <section class="inline" style="border: unset">

                                  action

                                      <select style="margin-left: 12%">

                                          <option value="Normal">Select one</option>
                                          <option value="High">Saab</option>
                                      </select>

                                  </section></th>
                              
                            </tr>
                          </table>
                        </th>
                        <th >
                                <table >
                              <tr>
                                <th style="width: 80%">
                                    <section class="inline" style="border: unset">

                                    Sort by

                                    <select style="margin-left: 12%">

                                        <option value="Normal">Select</option>
                                        <option value="High">Saab</option>
                                    </select>
                                    </section>
                                </th>
                                <th style="padding-right:130px">
                                    <section class="inline" style="border: unset">
                                    All Categories

                                    <select style="margin-left: 5%">

                                        <option value="Normal">Select one</option>
                                        <option value="High">Saab</option>
                                    </select>
      </section>

                                </th>
                                <th style="align-content: left" >1-6</th>
                              </tr>
                            </table>
                             </tr>

                           
                          </table>
                          <p id="memberTickets">No ticket to display</p>
                          

                          <script>

                          
                          var username = "<?php echo $_SESSION["username"] ?>";

                         


                          window.onload = function() {
  


                            var xmlhttp = new XMLHttpRequest();


xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      if(this.responseText ===""){}
      else
       document.getElementById("memberTickets").innerHTML = this.responseText;
 
    }
};

xmlhttp.open("GET", "memberTickets.php?u=" + username , true);
xmlhttp.send();   
 
};
</script>





      </section >


    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" style="width:160px; height: 40px">
          <a style="text-decoration: none"  href="./ticket.php">Add a ticket</a></button>
      
    </div>
  </form>

<footer>
  
  <p><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</footer>
</body>
</html>