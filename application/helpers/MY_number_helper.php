<?php
function no_kis($kis)
{
	$prefix = "KIS";
	$kis++;
	switch (strlen($kis))
	{
		case 1:
			$prefix .= "0000". $kis;  
		break;
		case 2:
			$prefix .= "000". $kis;  
		break;
		case 3:
			$prefix .= "00". $kis;  
		break;
		case 4:
			$prefix .= "0". $kis;  
		break;
		case 5:
			$prefix .= $kis;
		break;
	}
	return $prefix;
}

?>
