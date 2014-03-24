<?php
	require("/exec/exec_cmd_config.php");
	error_reporting(0);
	echo'
					<form target="_blank" action="./exec/exec.php" method="post">
						<input type="text" id = "command" name="command" value="" />
							<select name="quickCmd">
							
								<option value="null">Please choose...</option>
									'; foreach($commands as $adminOpts){ echo  '
									
								<option value="'; echo $adminOpts .'">'; echo $adminOpts . '</option>
									'; } echo '>
									
							</select>
						<input type="submit" value="Run" />		
					</form>';
?>

