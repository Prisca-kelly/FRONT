<?php
function init_session()
{

	if (!session_id()) {
		session_start();
		session_regenerate_id();
		return true;
	} else {
		return false;
	}
}

function delete_session()
{
	session_unset();
	session_destroy();
}

function is_connected()
{
	if (isset($_SESSION['id']) && $_SESSION['id'] > 0) {
		return true;
	} else {
		return false;
	}
}


function generateRandomSerialNumber(int $val)
{
	$letter = [
		'A',
		'B',
		'C',
		'D',
		'E',
		'F',
		'G',
		'H',
		'I',
		'J',
		'K',
		'L',
		'M',
		'N',
		'O',
		'P',
		'Q',
		'R',
		'S',
		'T',
		'U',
		'V',
		'W',
		'X',
		'Y',
		'Z',
		'0',
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'7',
		'8',
		'9'
	];
	$matri = [];
	for ($i = 0; $i < $val; $i++) {
		$il = array_rand($letter);
		array_unshift($matri, $letter[$il]);
	}

	return implode("", $matri);
}
