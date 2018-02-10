<?php

    if ($_POST["submit"]) {
        
    
        
        if (!$_POST["name"]) {
        
            $error.="<br />Please enter your name";
        
    }

        if (!$_POST["email"]) {
                
                    $error.="<br />Please enter your email address";
                
            }
        
        if (!$_POST["comment"]) {
                
                    $error.="<br />Please enter a comment";
        }
             
        if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
        
            $error.="<br /> Please enter a valid email address";
        
            }
            
            if ($error) {
                
                    $result='<div class = "alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
            
                
            } else {
                
             if (mail("sandseas1@icloud.com", "Comment from website!", 
             "Name: ".$_POST['name']."
             
             Email: ".$_POST['email']."
             
             Comment: ".$_POST['comment'])); {
                 
                 $result='<div class = "alert alert-success"><strong>Thank you!</strong></div>';
            
                
                 
             }
                
                
            }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact FORM</title>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">    

<style>
    
    .emailform {
        border:1px solid grey;
        border-radius:10px;
        margin-top:20px;
    }
    
    textarea {
        height:120px;
    }
    
    form {
        padding-bottom:20px;
        
    }
    
    
</style>
    


</head>
<body>
   

      <div class = "container">
          
          <div class = "row">
              
              <div class = "col-md-6 col md-offset-3 emailform">
       
       
   <h1>My email form</h1> 
   <?php
    echo $result;
   ?>
   
   <p class="lead">Please get in touch.  I'll get back to you as soon as I can!</p>
   
       <form method = "post">
           
           <div class = "form-group">
               
               <label for="name">Your Name</label>
               <input type="text" name="name" class="form-control" placeholder = "Enter your name" />
           </div>
           
        
        <div class = "form-group">
               
               <label for="email">Your Email</label>
               <input type="text" name="email" class="form-control" placeholder = "Enter your email" />
           </div>
           
         <div class = "form-group">
               
               <label for="comment">Your Comment</label>
               <textarea class = "form-control" name="comment"></textarea>
               
           </div>
           
           <input type ="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
                
       </form>
   
               </div>
               
            </div>
            
        </div>
   
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        </div>

</body>
</html>