<?php

	class Kalkulator_model extends CI_Model {
		public $var1;
		public $var2;
		public $operator;
		
		public $label = [];
		
		public function __construct() {
			parent::__construct();
			$this->operator=['+','-','*','/','^'];
			$this->labels= $this->_atribut_labels();
		}
		
		public function hitung() {
			$hasil = NULL;
			switch ($this->operator) {
				case '+':$hasil = $this->var1 + $this->var2; 
				break;
				case '-':$hasil = $this->var1 - $this->var2; 
				break;
				case '*':$hasil = $this->var1 * $this->var2; 
				break;
				case '/':$hasil = $this->var1 / $this->var2; 
				break;
				case '^':$hasil = pow($this->var1 , $this->var2); 
				break;
			}
			return $hasil;
		}

		private function _atribut_labels() {
			return['var1'=>'Bilangan ke-1 : ',
					'var2'=>'Bilangan ke-2 : ',
					'operator'=>'Operasi : ',];
		}
	}
?>