	function farsi_digits_to_latin($str){
		
		// Sadegh Dalvandi (www.dalvandi.com) - 25/03/2016 
		// Farsi/arabic digits in a string are converted to Latin digits so 
		// intval returns currect integer value.
		
		$conversion = array("dbb0"=>"0", "dbb1"=>"1", "dbb2"=>"2","dbb3"=>"3","dbb4"=>"4","dbb5"=>"5","dbb6"=>"6","dbb7"=>"7","dbb8"=>"8","dbb9"=>"9",
		"d9a0"=>"0", "d9a1"=>"1", "d9a2"=>"2","d9a3"=>"3","d9a4"=>"4","d9a5"=>"5","d9a6"=>"6","d9a7"=>"7","d9a8"=>"8","d9a9"=>"9");
		
		$chars = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
		
		for($i=0; $i<count($chars); $i++)
		{
			$uc = unpack('H*',$chars[$i])[1];
			if(array_key_exists($uc), $conversion)
				$chars[$i] = $conversion[$uc];
		}
		
		$latin_str = implode($chars);
		return $latin_str;
	}
