<?php
session start();
?>
<!DOCTYPE html>
    <html>
        <head>
	        <title>Signup</title>
        </head>
            <body>
                <fieldset><legend><h1>Signup</h1></legend>
	                <form method="POST" action="registration.php">
                        <label>ID:</label>
		                <input type="ID" name="id"><br/>
		                <b><label>Name:</label>
		                <input type="text" name="name"><br/>
		                <label>Email:</label>
		                <input type="email" name="email"><br/>
                        <label>Password:</label>
		                <input type="password" name="password"><br/>
		                <b><input type="submit" name="submit" value="Signup"></b>
						<input type="reset" value="Reset"><br/></b>
	                </form>
            </body>
    </html>
