<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Registration Form Example</title>

    <meta name="author" content="Codeconvey" />
    <!-- Student Registration Form CSS -->
    <link rel="stylesheet" href="style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="demo.css" />
	
</head>
<body>
	
<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Student Registration Form</h1>
                
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
   <!-- Start Student Registration Form -->
                      <form class="reg-form" action="db_config.php" method="post">
        <p class="helper-text">* denotes a required field</p>
        
        
        <div class="field-row">
            <label class="form-label" for="ID">ID </label>
            <input type="text" id="ID" name="id" class="field text-field first-name-field" required>
            <span class="message"></span>
        </div>
        <div class="field-row">
            <label class="form-label" for="firstName">First name </label>
            <input type="text" id="firstName" name="fname" class="field text-field first-name-field" required>
            <span class="message"></span>
        </div>
        <div class="field-row">
            <label class="form-label cf" for="lastName">Last name </label>
            <input type="text" id="lastName" name="lname" class="field text-field last-name-field" required>
            <span class="message"></span>
        </div>
                          
        <div class="field-row">
            <label class="form-label" for="dateOfBirth">Date of birth </label>
            <input type="date" id="dateOfBirth" name="dob" class="field date-field dob-field" min="1900-01-01" max="2015-09-18"  required>
            <span class="message"></span>
        </div>
        
        <div class="field-row">
            <label class="form-label" for="tel">Phone Number </label>
            <input type="tel" id="tel" name="tel" class="field text-field tel-field" required>
            <span class="message"></span>
        </div>
                          
        <div class="field-row">
            <label class="form-label" for="gender">Gender </label>
            <input type="radio" id="female" value="Female" name="gender">
            <label for="female">Female </label>
            <input type="radio" id="male" value="Male" name="gender">
            <label for="male">Male </label>
            <span class="message"></span>
        </div>
                           <div class="field-row">
                                    <label class="form-label">Current Year </label>
                           <select class="form-dropdown field" name="yr">
                <option value="1st Year"> 1st Year </option>
                <option value="2nd Year"> 2nd Year </option>
                <option value="3rd Year"> 3rd Year </option>
                <option value="4th Year"> 4th Year </option>
              </select>
                          </div>
        <div class="field-row">
            <label class="form-label" for="email">Email </label>
            <input type="email" id="email" name="email" class="field text-field email-field" required>
            <span class="message"></span>
        </div>
                          <div class="field-row">
                          <label class="form-label"> Degree Program </label>
                           <select class="field form-dropdown" name="degree">
              <option value="BTECH CE"> BTECH CE </option>
              <option value="BTECH IT"> BTECH IT </option>
              <option value="BTECH CSE"> BTECH CSE </option>

            </select>
                          </div>
    
        <div class="field-row">
            <label class="form-label"></label><br>
            <center><button class="form-button">Register</button></center>
        </div>
    </form>
   <!-- End Student Registration Form -->
                  
    		
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>
