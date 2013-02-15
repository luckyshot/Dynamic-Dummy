<?php
/*!
 * DynamicDummy
 * Generate random placeholders to test how variation affects an HTML design
 * @version 1.0
 * @author Xavi Esteve (http://xaviesteve.com)
 */
Class DynamicDummy {
	/**
	 * Color
	 * @returns (string) A color in Hexadecimal format
	 */
	public function color() {
		return printf( "#%06X\n", mt_rand( 0, 0xFFFFFF ));
	}

	/**
	 * Words
	 * @params (integer) Minimum amount of words
	 * @params (integer) Maximum amount of words
	 * @returns (string) A sentence
	 */
	public function words($lengthmin=2, $lengthmax=6) {
		$buffer = '';
		$w = sizeof($this->word_array)-1;
		$word_array = array("Above","word","use","We","odd","was","feedback","ability","magicians","before","Legs","what","sleeping","off","tones","The","well","the","should","and","italic","the","understood","The","sides","about","policy","remember","that","sported","since","rattling","little","more","bed","characters","any","well","parents","pointing","something","immediately","magicians","appointed","And","need","bits","two","doing","would","touched","go","more","chief","both","and","he","from","more","entirely","impenetrable","times","myself","From","ago","long","and","many","however","so","how","cat","absolutely","away","who","economic","get","phase","feedback","waved","it","with","fantastic","what","me","postage","out","nature","as","what","rest","respect","late","here","sleeping","life","feel","Its","recently","who","woke","one","you","seven","nice","become","morals","continued","again","tone","return","Plot","we're","such","fly","sublime","Come","still","thing","where","commitment","be","unable","we","view","Set","learn","us","hiding","she","greatest","and","there","pervasively","choose","support","films","not","failing","Were","himself","distance","best","so","and","must","origin","Your","it","field","lead","he","stands","my","and","tone","be","and","wanted","alarm","he","such","bad","cheerful","every","late","bed","small","that","have","familiar","legislators","legs","those","and","left","following","yards","some","be","much","left","mail","rationally","headboard","sections","morning","page","my","never","harmonics","small","right","windshield","hide","would","funny","some","key","thing");
		$words = mt_rand($lengthmin, $lengthmax);
		for ($i=0; $i < $words; $i++) {
			$buffer .= $this->word_array[mt_rand(0, $w)].' ';
		}
		return ucfirst(trim($buffer));
	}

	/**
	 * Weekday
	 * @returns (string) First three letters of a day of the week
	 */
	public function weekday() {
		$days = array('mon','tue','wed','thu','fri','sat','sun');
		return $days[mt_rand(0,sizeof($days)-1)];
	}
}
$d = new DynamicDummy;
