<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Login</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-item-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
<form action="" method="post" >
   <!-- username field -->
    <div class="form-outline mb-4">  
        <label for="user_username" class="form-label">Username</label>
        <input type="text" id="user_username" class="form-control" 
        placeholder="Enter your username" autocomplete="off" 
        required="required" user="user_username">
    </div>
   
    <!-- password field -->
    <div class="form-outline mb-4">
        <label for="user_password" class="form-label">Password</label>
        <input type="password" id="user_password" class="form-control" 
        placeholder="Enter your password" autocomplete="off" 
        required="required" user="user_password">
    </div>
    
    <div class="mt-4 pt-2">
        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? 
        <a href="user_registration.php" class="text-danger">Register</a></p>
    </div>

    
</form>
            </div>
        </div>
    </div>
</body>
</html>
