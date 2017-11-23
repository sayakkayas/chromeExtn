<html>
<body>

Preferred Email: <?php echo $_GET["preferred_email"]; ?><br>
Preferred password: <?php echo $_GET["password_1"]; ?>
<?

//if preferred_email and password matches any previous entries then we prompt so and redirect to login page(MMA.html) 
    if(true)
    {
    	echo("<script type='text/javascript'> prompt('Email or password already in use');</script>");

    }
    else
    {
    	echo("<script type='text/javascript'> prompt('Steady your hands, things are going to calm');</script>");
        echo("<script type='text/javascript'> window.location.replace('Registration.html');</script>");
         
    

    }

?>
</body>
</html> 