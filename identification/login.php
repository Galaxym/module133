	<?php

        
        session_start();            

        if(isset($_SESSION['login']) == TRUE)
        {
            header('Location: ../index.php');
        }

        include '../templates/header.php'; 
        ?>
        <h2>Identification</h2>
        <form action="veriflogin.php" method="POST">
        	<table>
        		<tr>
        			<td style="text-align: right;"><label>Pseudo</label></td>
        			<td><input type="text" name="pseudo"></td>
        		</tr>
        		<tr>
        			<td style="text-align: right;"><label>Mot de passe</label></td>
        			<td><input type="text" name="password"></td>
        		</tr>
        		<tr>
        			<td><input type="submit"></td>
        		</tr>
        	</table>
        </form>
        <?php include '../templates/footer.php'; ?>