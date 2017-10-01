<?php

	class Validator{

		/**
		 * @param  [type]
		 * @return [type]
		 */
		public function checkString($string){
			return is_string($string);
		}

		public function checkInteger($number){
			return is_int($number);
		}

		public function checkFloat($number){
			return is_float($number);
		}
	}


?>
