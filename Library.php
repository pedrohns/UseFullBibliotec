<?php
function convertNumberToWord($number, $auxiliar = true){
	
	
	    $hyphen      = '-';
	    $conjunction = ' e ';
	    $separator   = ', ';
	    $negative    = 'menos ';
	    $decimal     = ' reais ';
	    $dictionary  = array(
	        			0                   => 'zero',
	        			1                   => 'um',
	        			2                   => 'dois',
	        			3                   => 'três',
	        			4                   => 'quatro',
	        			5                   => 'cinco',
	        			6                   => 'seis',
	        			7                   => 'sete',
	        			8                   => 'oito',
	        			9                   => 'nove',
	        			01                   => 'um',
	        			02                   => 'dois',
	        			03                   => 'três',
	        			04                   => 'quatro',
	        			05                   => 'cinco',
	        			06                   => 'seis',
	        			07                   => 'sete',
	        			08                   => 'oito',
	        			09                   => 'nove',
	        			10                  => 'dez',
	        			11                  => 'onze',
	        			12                  => 'doze',
	        			13                  => 'treze',
	        			14                  => 'quatorze',
	        			15                  => 'quinze',
	        			16                  => 'dezesseis',
	        			17                  => 'dezessete',
	        			18                  => 'dezoito',
	        			19                  => 'dezenove',
	        			20                  => 'vinte',
	        			30                  => 'trinta',
	        			40                  => 'quarenta',
	        			50                  => 'cinquenta',
	        			60                  => 'sessenta',
	        			70                  => 'setenta',
	        			80                  => 'oitenta',
	        			90                  => 'noventa',
	        			100                 => 'cento',
	        			200                 => 'duzentos',
	        			300                 => 'trezentos',
	        			400                 => 'quatrocentos',
	        			500                 => 'quinhentos',
	        			600                 => 'seiscentos',
	        			700                 => 'setecentos',
	        			800                 => 'oitocentos',
	        			900                 => 'novecentos',
	        			1000                => 'mil',
	        			1000000             => array('milhão', 'milhões'),
	        			1000000000          => array('bilhão', 'bilhões'),
	        			1000000000000       => array('trilhão', 'trilhões'),
	        			1000000000000000    => array('quatrilhão', 'quatrilhões'),
	        			1000000000000000000 => array('quinquilhão', 'quinquilhões')
	    );
	    $dictionaryCents  = array(
	    				//0					 => 'zero',
	        			01                   => 'um',
	        			02                   => 'dois',
	        			03                   => 'três',
	        			04                   => 'quatro',
	        			05                   => 'cinco',
	        			06                   => 'seis',
	        			07                   => 'sete',
	        			08                   => 'oito',
	        			09                   => 'nove',
	        			10                  => 'dez',
	        			1                  => 'dez',
	        			11                  => 'onze',
	        			12                  => 'doze',
	        			13                  => 'treze',
	        			14                  => 'quatorze',
	        			15                  => 'quinze',
	        			16                  => 'dezesseis',
	        			17                  => 'dezessete',
	        			18                  => 'dezoito',
	        			19                  => 'dezenove',
	        			20					=> 'vinte',
	        			2					=> 'vinte',
	        			21                  => 'vinte e um',
						22                  => 'vinte e dois',
						23                  => 'vinte e três',
						24                  => 'vinte e quatro',
						25                  => 'vinte e cinco',
						26                  => 'vinte e seis',
						27                  => 'vinte e sete',
						28                  => 'vinte e oito',
						29                  => 'vinte e nove',
						30                  => 'trinta',
						3                  => 'trinta',
						31                  => 'trinta e um e um',
						32                  => 'trinta e dois e dois',
						33                  => 'trinta e três e três',
						34                  => 'trinta e quatro e quatro',
						35                  => 'trinta e cinco e cinco',
						36                  => 'trinta e se e seisis',
						37                  => 'trinta e sete',
						38                  => 'trinta e oito',
						39                  => 'trinta e nove',
						40					=> 'quarenta',
						4					=> 'quarenta',
						41					=> 'quarenta e um',
						42					=> 'quarenta e dois',
						43					=> 'quarenta e três',
						44					=> 'quarenta e quatro',
						45					=> 'quarenta e cinco',
						46					=> 'quarenta e seis',
						47					=> 'quarenta e sete',
						48					=> 'quarenta e oito',
						49					=> 'quarenta e nove',
						50					=> 'cinquenta',
						5					=> 'cinquenta',
						51					=> 'cinquenta e um',
						52					=> 'cinquenta e dois',
						53					=> 'cinquenta e três',
						54					=> 'cinquenta e quatro',
						55					=> 'cinquenta e cinco',
						56					=> 'cinquenta e seis',
						57					=> 'cinquenta e sete',
						58					=> 'cinquenta e oito',
						59					=> 'cinquenta e nove',
						60					=> 'sessenta',
						6					=> 'sessenta',
						61					=> 'sessenta e um',
						62					=> 'sessenta e dois',
						63					=> 'sessenta e três',
						64					=> 'sessenta e quatro',
						65					=> 'sessenta e cinco',
						66					=> 'sessenta e seis',
						67					=> 'sessenta e sete',
						68					=> 'sessenta e oito',
						69					=> 'sessenta e nove',
						70					=> 'setenta',
						7					=> 'setenta',
						71					=> 'setenta e um',
						72					=> 'setenta e dois',
						73					=> 'setenta e três',
						74					=> 'setenta e quatro',
						75					=> 'setenta e cinco',
						76					=> 'setenta e seis',
						77					=> 'setenta e sete',
						78					=> 'setenta e oito',
						79					=> 'setenta e nove',
						80					=> 'oitenta',
						8					=> 'oitenta',
						81					=> 'oitenta e um',
						82					=> 'oitenta e dois',
						83					=> 'oitenta e três',
						84					=> 'oitenta e quatro',
						85					=> 'oitenta e cinco',
						86					=> 'oitenta e seis',
						87					=> 'oitenta e sete',
						88					=> 'oitenta e oito',
						89					=> 'oitenta e nove',
						90					=> 'noventa',
						9					=> 'noventa',
						91					=> 'noventa e um',
						92					=> 'noventa e dois',
						93					=> 'noventa e três',
						94					=> 'noventa e quatro',
						95					=> 'noventa e cinco',
						96					=> 'noventa e seis',
						97					=> 'noventa e sete',
						98					=> 'noventa e oito',
						99					=> 'noventa e nove',
		);
	
	
	    if ($number < 0) {
	        return $negative . convertNumberToWord(abs($number));
	    }
	
	    $string = $fraction = null;
	
	    if (strpos($number, '.') !== false) {
	        list($number, $fraction) = explode('.', $number);
	    } 

	    switch (true) {
	        case $number < 21:
	            $string = $dictionary[$number];
	            break;
	        case $number < 100:
	            $tens   = ((int) ($number / 10)) * 10;
	            $units  = $number % 10;
	            $string = $dictionary[$tens];
	            if ($units) {
	                $string .= $conjunction . $dictionary[$units];
	            }
	            break;
	        case $number < 1000:
	            $hundreds  = floor($number / 100)*100;
	            $remainder = $number % 100;
	            $string = $dictionary[$hundreds];
	            if ($remainder) {
	                $string .= $conjunction . convertNumberToWord($remainder, false);
	            }
	            break;
	        default:
	            $baseUnit = pow(1000, floor(log($number, 1000)));
	            $numBaseUnits = (int) ($number / $baseUnit);
	            $remainder = $number % $baseUnit;
	            if ($baseUnit == 1000) {
	                $string = convertNumberToWord($numBaseUnits, false) . ' ' . $dictionary[1000];
	            } elseif ($numBaseUnits == 1) {
	                $string = convertNumberToWord($numBaseUnits, false) . ' ' . $dictionary[$baseUnit][0];
	            } else {
	                $string = convertNumberToWord($numBaseUnits, false) . ' ' . $dictionary[$baseUnit][1];
	            }
	            if ($remainder) {
	                $string .= $remainder < 100 ? $conjunction : $separator;
	                $string .= convertNumberToWord($remainder, false);
	            }
	            break;
	    }
		//logInFile(utf8_decode("Fraction no comeco: ".$fraction), generateRequireOnce('/log/Fraction.log'));
	    if (!empty($fraction) && $fraction > 0) {
	        $string .= $decimal.'e ';
	        $words = array();
			$words[] = $dictionaryCents[$fraction];
	        	
	        
	        $string .= implode(' ', $words);
	        	if ($words[0] == 'um'){
	        		$string .= ' centavo';
	        	}  else {
	        		$string .= ' centavos';
	        	
	
	        	}
	        	
	        
	    } 
	    else if ($auxiliar === true) {
	    	$string .= ' reais';
	    }

	 
	    return $string;
}

function validatePasswordRules($SQL, $password, $user_id = USERID) {

	// Parâmetros de configuração do password
	$minLength = LookUpValue($SQL, 'USER_PASSWORD_CONFIG', 'Min Length'); // Número mínimo de caracteres
	$numberRequired = LookUpValue($SQL, 'USER_PASSWORD_CONFIG', 'Number Required'); // Requer número
	$specialCharRequired = LookUpValue($SQL, 'USER_PASSWORD_CONFIG', 'Special Char Required'); // Requer caractere especial
	$mixedCaseRequired = LookUpValue($SQL, 'USER_PASSWORD_CONFIG', 'Mixed Case Required'); // Requer letra maiúscula e letra minúscula
	$lastPasswordLimit = LookUpValue($SQL, 'USER_PASSWORD_CONFIG', 'Last Password Limit'); // Não pode estar dentro dos 5 últimos passwords

	if ($minLength != '' && strlen($password) < $minLength) {
		return 'MIN_LENGTH_ERROR';
	}

	if ($numberRequired == 1 && preg_match('/\d/', $password) === 0) {
		return 'NUMBER_REQUIRED_ERROR';
	}

	if ($specialCharRequired == 1 && preg_match('/[!@#$%&*\(\)\-_=+\[\]\{\}|\/<>?;:,\.]/', $password) === 0) {
		return 'SPECIAL_CHAR_REQUIRED_ERROR';
	}

	if ($mixedCaseRequired == 1 && preg_match('/[A-Z][^A-Z]*[a-z]|[a-z][^a-z]*[A-Z]/', $password) === 0) {
		return 'MIXED_CASE_REQUIRED_ERROR';
	}

	if ($lastPasswordLimit > 0) {
		$result = $SQL->query("SELECT password FROM b_last_password WHERE user_id = '" . $user_id . "' ORDER BY created DESC LIMIT " . $lastPasswordLimit);
		while ($line = $SQL->fetch_array($result)) {
			if (hash('sha256', md5($password)) === $line['password']) {
				return 'LAST_PASSWORD_LIMIT_ERROR';
			}
		}
	}

	return 'SUCCESS';
}
?>