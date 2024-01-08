<?php
	$a = !empty($_POST)? ($_POST['a'] == 0? (float)$_POST['a'] : (float)$_POST['a']) : "";
	$b = !empty($_POST)? ($_POST['b'] == 0? (float)$_POST['b'] : (float)$_POST['b']) : "";
	$res = "";
	$error = empty($a) && $a != 0? (empty($b) && $b != 0? "Input two values<br/>" : "Input first value<br/>") : (empty($b) && $b != 0? "Input second value<br/>" : "");

	function obs_operation(){
		global $a, $b, $res;
		$op = $_POST? $_POST['operation'] : "";
		switch ($op) {
			case '1':
				$res = $a + $b;
				break;
			case '2':
				$res = $a - $b;
				break;
			case '3':
				$res = $a * $b;
				break;
			case '4':
				if(!$b) throw new Exception("Division by zero.");
				$res = $a / $b;
				break;
		}
	}
?>