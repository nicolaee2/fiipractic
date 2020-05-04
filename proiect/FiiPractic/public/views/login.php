<?php 
	require '../resources/layouts/headerLogin.php';
    require '../app/controller/login.php';
    
?>

<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2> 

        <div class="eroare">
            <p><?php echo $emailErr ?></p>
            

        
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>

        <input type="hidden" name="_csrfname" value="<?php echo $name; ?>">
        <input type="hidden" name="_csrfvalue"value="<?php echo $token; ?>">


        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>      
    </form>
    <p class="text-center"><a href="register">Creeaza Cont</a></p>
    <p class="text-center"><a href="home">Pagina de start</a></p>
</div>



<?php
    
	require '../resources/layouts/footerLogin.php';
?>