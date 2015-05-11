<?php 	
	class Draw {
		protected $draw;
		
		private function array_random_assoc($arr, $num = 1) {
    		$keys = array_keys($arr);
    		shuffle($keys);
    
    		$r = array();
    		for ($i = 0; $i < $num; $i++) {
        		$r[$i] = $arr[$keys[$i]];
    		}
    		return $r;
		}
	
		public function __construct() {
			
			echo 'Construct started' . "\n";
			
			require_once($serverRoot . 'include/lists.php');
			
			$powerDraw = [];
			$powerDraw['Type'] = $this->array_random_assoc($powerType);
			$powerDraw['Flavor'] = $this->array_random_assoc($powerFlavor);
			$powerDraw['Twist'] = ['suit' => $this->array_random_assoc($powerTwistsSuit), 'value' => $this->array_random_assoc($powerTwistsNumber)];
		
			$element = $powerDraw['Flavor'][0]['element_name'] === '' ? 'represented by ' . $powerDraw['Flavor'][0]['element'] : $powerDraw['Flavor'][0]['element_name'];
		
			$this->draw = [
				'Type' => [
					'name' => $powerDraw['Type'][0]['name'],
					'image' => $powerDraw['Type'][0]['image'],
					'class' => $powerDraw['Type'][0]['class'],
					'description' => $powerDraw['Type'][0]['description']
				],
				'Flavor' => [
					'name' => $powerDraw['Flavor'][0]['name'],
					'image' => $powerDraw['Flavor'][0]['image'],
					'flavor' => $powerDraw['Flavor'][0]['flavor'],
					'element' => $element,
					'description' => $powerDraw['Flavor'][0]['description'] 
				],
				'Twist' => [
					'value' => $powerDraw['Twist']['value'][0]['name'],
					'value_short' => $powerDraw['Twist']['value'][0]['short'],
					'suit' => $powerDraw['Twist']['suit'][0]['name'],
					'suit_image' => $powerDraw['Twist']['suit'][0]['image'],
					'description' =>  $powerDraw['Twist']['value'][0]['description'],
					'direction' =>  $powerDraw['Twist']['suit'][0]['direction'],
					'factor' =>  $powerDraw['Twist']['suit'][0]['factor'],
					'undirection' =>  $powerDraw['Twist']['suit'][0]['undirection'],
					'unfactor' =>  $powerDraw['Twist']['suit'][0]['unfactor']
				]
			];
		}
		
		public function getBigImageTable() {
			$output = '<p>Your pull:</p>' . "\n";
			$output .= '<table>' . "\n";
			$output .= '<tr>' . "\n";
			$output .= '<td><img src="' . $this->draw['Type']['image'] . '"></td>' . "\n";
			$output .= '<td><img src="' . $this->draw['Flavor']['image'] . '"></td>' . "\n";
			$output .= '<td style="font-size: 72pt;">' . $this->draw['Twist']['value_short'] . '</td>' . "\n";
			$output .= '<td><img src="' . $this->draw['Twist']['suit_image'] . '"></td>' . "\n";
			$output .= '</tr>' . "\n";
			$output .= '</table>' . "\n";
			
			return $output;
		}
		
		public function getSmallImagetable() {
			$output = '<table>' . "\n";
			$output .= '<tr>' . "\n";
			$output .= '<td><img src="' . $this->draw['Type']['image'] . ' height="50%" width="50%"></td>' . "\n";
			$output .= '<td><img src="' . $this->draw['Flavor']['image'] . ' height="50%" width="50%"></td>' . "\n";
			$output .= '<td style="font-size: 36pt;">' . $this->draw['Twist']['value_short'] . '</td>' . "\n";
			$output .= '<td><img src="' . $this->draw['Twist']['suit_image'] . ' height="50%" width="50%"></td>' . "\n";
			$output .= '</tr>' . "\n";
			$output .= '</table>' . "\n";
			
			return $output;
		}
		
		public function getVerboseDescription() {
			$output = '<p>You rolled the <strong>' . $this->draw['Type']['name'] . '</strong> sign! This results in a <strong>' . $this->draw['Type']['class'] . '</strong>-class power. <strong>' . $this->draw['Type']['class'] . 's</strong> have ' . $this->draw['Type']['description'] . '.</p>' . "\n";
	
			$output .= '<p>You also rolled the <strong>' . $this->draw['Flavor']['name'] . '</strong> rune! This results in the flavor <strong>' . $this->draw['Flavor']['flavor'] . '</strong>, which gives a power that ' . $this->draw['Flavor']['description'] . '. Optionally, if your power requires an element in order to manifest, the element associated with this rune is <strong>' . $this->draw['Flavor']['element'] . '</strong></p>' . "\n";
	
			$output .= '<p>Finally, you pulled the <strong>' . $this->draw['Twist']['value'] . ' of ' . $this->draw['Twist']['suit'] . '</strong> which modifies your power so that it ' . $this->draw['Twist']['description'] . '. Your ' . $this->draw['Twist']['factor'] . ' is ' . $this->draw['Twist']['direction'] . ', but your choice of ' . $this->draw['Twist']['unfactor'] . ' is ' . $this->draw['Twist']['undirection'] . '.' . "\n";
			
			return $output;
		}
	}