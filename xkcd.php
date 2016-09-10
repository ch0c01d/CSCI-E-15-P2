<?php
	function reader($file, $key) {
		$rawdata = file_get_contents($file);
		$object = json_decode($rawdata, true);

		return $object[$key];
	}

	$allverbs = reader("json/word.json", "word");
	$verbs = [];

	foreach($allverbs as $verb) {
		array_push($verbs, $verb);
	}

	$symbols = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "="];
	$verbs_length = count($verbs) - 1;
	$symbols_length = count($symbols) - 1;
	$num_on = "";
	$num_off = "";
	$symbol_on = "";
	$symbol_off = "";
	$separator_space = "";
	$separator_dash = "";
	$separator_dot = "";
	$separator_none = "";
	$separator_random = "";
	$separators = [" ", "-", ".", ""];
	$length = "";
	$num = "";
	$symbol = "";

	if(isset($_POST["submit"])) {
		if(isset($_POST["num"])) {
			$length = $_POST["num"] <= 15 ? $_POST["num"]:0;
		}

		$num = $_POST["num_select"];

		if($num == "1") {
			$num_on = "1";
		} elseif($num == "0") {
			$num_off = "0";
		}

		$symbol = $_POST["symbol_select"];

		if($symbol == "1") {
			$symbol_on = "1";
		} elseif($symbol == "0") {
			$symbol_off = "0";
		}

		$separator = $_POST["separator"];

		if(!empty($separator)) {
			switch($separator) {
				case 1:
					$separator_space = " ";
					$separator = $separators[0];
				break;

				case 2:
					$separator_dash = "-";
					$separator = $separators[1];
				break;

				case 3:
					$separator_space = ".";
					$separator = $separators[2];
				break;

				case 4:
					$separator_none = "";
					$separator = $separators[3];
				break;

				case 5:
					$separator_random = "random";
					$separator = $separators[rand(0, (count($separators) - 1))];
				break;

				default:
					$separator_random = "random";
					$separator = $separators[rand(0, (count($separators) - 1))];
				break;
			}
		}

		$password_string = "";

		for($i = 0; $i < $length; $i++) {
			$password_string = $password_string . $verbs[rand(0, $verbs_length)] . $separator;

			if($i == $length) {
				$password_string = $password_string . $verbs[rand(0, $verbs_length)];
			}

			$password_string = strtolower($password_string);
		}

		if($num == "1") {
			$password_string = $password_string . rand(0, 9);
		}

		if($symbol == "1") {
			$password_string = $password_string . $symbols[rand(0, $symbols_length)];
		}
	}
