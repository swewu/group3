<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <script>
 $(document).ready(function(){
     $("button").click(function(){
         $.post("UserModel.php",
         {
             username : $("#username").val(),
             password : $("#password").val()
         }
        });
     });
 });
 </script> -->
</head>
<body>

<form method="post" action="<?php echo base_url('Welcome/Login'); ?>"> 
        <table cellpadding="2" cellspacing="2">  
            <tr>  
                <td><th>Username:</th></td>  
                <td><input type="text" name="username" id="username"></td>  
            </tr>  
            <tr>  
                <td><th>Password:</th></td>  
                <td><input type="password" name="password" id="password"></td>  
            </tr>  
  
            <tr>  
                <td> </td>  
                <td><input type="submit" value="Login"></td>  
            </tr>  
        </table>  
    </form>  
    
</body>
</html>


