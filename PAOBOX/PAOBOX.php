<!DOCTYPE html>


<html>
    <head>
      <title>PAOBOX Html Document</title>
      <link rel="stylesheet" href="PAOBOXStyleSheet.css">

    </head>  
      
<body> 

    <?php

        $nameErr = $emailErr = $genderErr = $websiteErr = "";

        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["visitor_name"])) {

            $nameErr = "Please enter a valid name";

        } else {

            $name = test_input($_POST["visitor_name"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

            $nameErr = "Only letters and white space allowed";

            }

        } 
      }

      function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

        }

        ?>



        <header>
            <div class="PAOBOXLogo">
            <h1  id="PAOBOXLogo">
            <a href="PAOBOX.html">PAOBOX</a> 
            </h1>
            </div>
            <!--Inside the "Quotes" you should put the link to the page-->
            <div class="Tabs">
            <a id="HomeButton" href="PAOBOX.html">Home</a>
            <a id="AboutMeButton" href="AboutMe.html">About Me</a>
            <a id="PastProjectsButton" href="PastProjects.html">Past Projects</a>
            <a id="ProjectsInDevelopmentButton" href="ProjectsInDevelopment.html">Projects In Development</a>
            <select id="ContactTab" name="Contact Tab" required>
                <option value="ContactForm">Contact Form<a href="PAOBOX.html"></a></option>
                <option value="ContactUs">Contact Us <a href="ContactUs.html"></a></option>
            </select>
            </ul>
            </div>
        

        <div class="ContactUs">
            <h2 id="ContactUsLogo">Contact Us</h2>    
            <!-- Social Media Icons -->
            <a href="mailto:pochoa@cord.edu">
            <img src="Email.png"alt="Email"width="50"height="50">
            </a>
            <a href="https://instagram.com/clubaccessccm?igshid=YmMyMTA2M2Y=">
            <img src="Instagram.png" alt="Instagram" width="50" height="50">
            </a>        
        </div> 
        
        <p><span class="error">* required field</span></p>


        <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP _SELF"]);?>" >

          <div class="Form">

            <div class="name_q">
              <label for="name">Your Name</label>
              <input type="text" name="visitor_name" placeholder="First Last" >       
              <span class="error">* <?php echo $nameErr;?></span>
            </div>

            <p> <br></p>

<!-- 
            <div class="status_q">
                <label for="Who Are You">Who are you?</label>
                <input type="radio" name="way" value="Peer" >
                <input type="radio" name="way" value="Client">
                <input type="radio" name="way" value="Viewer" >
              </div>
            <p> <br></p>-->
<!--
            <div class="email_q">
              <label for="email">Your E-mail</label>
              <input type="email" name="visitor_email" placeholder="john.doe@email.com" required>
            </div>
            <p> <br></p>

            <div class="phonenumber_q">
                <label for="phonenumber">Your Phone Number</label>
                <input type="tel" name="phonenumber" placeholder="000-000-0000" required>
              </div>
            <p> <br></p>

            <div class="message_q">
              <label for="message">Write your message</label>
              <textarea name="visitor_message" placeholder="Say whatever you want." pattern=[A-Za-z0-9\s]{8,60}></textarea>
            </div>
            <p> <br></p> -->
<!-- 
            <div class="verify_cb">
              <input type="checkbox"  name="Verify" value="Verify">
                <label for="Verify"> Is This Correct?</label><br>
            </div>
            <p> <br></p>-->
            <div class="submit_b">
            <input type="submit" name="submit" value="submit">
            </div>

          </div>
          </form>
          
          <?php

          echo "<h2> Final Output:</h2>";
          echo $name;
          ?>
    </body>
</html>