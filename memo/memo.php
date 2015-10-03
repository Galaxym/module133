	<?php

         session_start();

         if($_SESSION['login'] == FALSE)
         {
                header('Location: ../index.php');
         }

        include '../templates/header.php'; 
        ?>

        <h2>Mémo</h2>
        <form method="POST" action="memoform.php">
        	<table>
        		<tr>
        			<td colspan="2"><textarea name="memotext" style="width: 250px; height: 75px;"></textarea></td>
        		</tr>
        		<tr>
        			<td><input type="submit"></td>
        			<td><input type="reset" value="Effacer"></td>
        		</tr>
        	</table>
        </form>
        <br>
        <div id="messages">
        <?php 
                if(isset($_SESSION['$memobypseudo']))
                {
                        foreach ($_SESSION['$memobypseudo'] as $memo)
                        {
                        echo $memo.'<br><br>';
                        } 
                }
        ?> 
        </div>
        <?php include '../templates/footer.php'; ?>