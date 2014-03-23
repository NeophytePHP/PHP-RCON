<?php
	require("/exec/exec_cmd.php");
	error_reporting(0);
	$allowed_groups = array(1); // << Allowed users array (1,2,3,4,5)
		$can_see = FALSE;
		foreach ($allowed_groups as $allowed)
			if (in_array($allowed, $user_info['groups']))
			{
				$can_see = TRUE;
				break;
			}
			
		if ($can_see)
		{
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
		}
else
		{
			//message or section to show if they are not allowed.
			echo 'Sorry you are not allowed to see this.';
		}
?>

