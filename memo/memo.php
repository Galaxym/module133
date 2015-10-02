		<?php include '../templates/header.php'; ?>
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
        <?php include '../templates/footer.php'; ?>