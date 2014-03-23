<?php  
	require("exec_cmd.php");
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
		if(isset($_POST['command'])){
			if(!empty($_POST['command'])){
				if(isset($_POST['quickCmd'])){
					if($_POST['quickCmd'] != 'null'){
						$execute = "ulx " . $_POST['quickCmd'] . ' ' . $_POST['command'];
					} else {
						$execute = $_POST['command'];
					}					
				} else {
					$execute = $_POST['command'];
				}
				$r = new rcon($setup[1],$setup[2],$setup[3]);
				$r->Auth();
				$r->rconCommand($execute);
				echo 'executed ' . $execute . ' successfully..';
			}
		}
}
else
		{
			//message or section to show if they are not allowed.
			echo 'Sorry you are not allowed to see this.';
		}
?>