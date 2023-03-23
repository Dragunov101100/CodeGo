<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <form class="form-signin" method="post">
                <div class="form-row align-items-center">
                <div class="col-auto my-1 ">
                    <select class="form-control" id="UType" name ="UserType[]">
                         <option value="Admin">Admin</option>
                         <option value="ConMan">Content Manager</option>
                         <option value="User">System User</option>
                    </select>
                </div>
                <br>
                    <input type="text" name="Username" id="username" class="form-control" placeholder="Enter User" required autofocus>
                    <input type="password" name="Password"  id="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnsign">Sign in</button>
            </form>
        </div>
    </div>


    <?php
session_start();
    if(isset($_POST['btnsign']) && isset($_POST['UserType'])){
        $arrUtype = $_POST['UserType'];

        foreach ($arrUtype as $key => $Utypevalue){
            if(($Utypevalue == "Admin")){
                
                $admin1 ="admin";
                $admin1P ="admin";
                $admin2 = "admin2";
                $admin2P = "Renmarkpog123";
                
    
                if(($_POST['Username'] == $admin1 && $_POST['Password']==$admin1P))
                {
                    $_SESSION['Username'] = $admin1;


                    echo '<div class="alert alert-success w-50 p-3 mx-auto">
                    welcome to the system ',$admin1,
                   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                }
                elseif(($_POST['Username'] == $admin2 && $_POST['Password']==$admin2P)){
                        $_SESSION['Username'] = $admin2;

                        echo '<div class="alert alert-success w-50 p-3 mx-auto">
                        welcome to the system ',$admin2,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                    }
                    else
                    {
                    echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                    You Entered the wrong password
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }         
                }


                if(($Utypevalue == "ConMan")){
                
                    $ContMan1 ="man1";
                    $PcontMan1 ="man1";
                    $ContMan2 = "man2";
                    $PcontMan2 = "man2";
                    
        
                    if(($_POST['Username'] == $ContMan1 && $_POST['Password']==$PcontMan1))
                    {
                        $_SESSION['Username'] = $ContMan1;
                            echo '<div class="alert alert-success w-50 p-3 mx-auto">
                            welcome to the system ',$ContMan1,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }
                    elseif(($_POST['Username'] == $ContMan2 && $_POST['Password']==$PcontMan2))
                    {
                        $_SESSION['Username'] = $ContMan2;
                        echo '<div class="alert alert-success w-50 p-3 mx-auto">
                        welcome to the system ',$ContMan2,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                        }
                        else
                        {
                        echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                        You Entered the wrong password
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }         
                    }

                    if(($Utypevalue == "User")){
                
                        $SystemUs ="Mark";
                        $PSystemUser ="mark";
                        
                        
            
                        if(($_POST['Username'] == $SystemUs && $_POST['Password']==$PSystemUser))
                        {
                            $_SESSION['Username'] = $SystemUs;
                            echo '<div class="alert alert-success w-50 p-3 mx-auto">
                            welcome to the system ', $SystemUs,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }
                            else
                            {
                            echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                            You Entered the wrong password
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                            }         
                        }
    

            }
        }
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>