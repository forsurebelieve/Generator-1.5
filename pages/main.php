<?php
	$powerType = [
		'Aries' => [
			'class' => 'Shaker',
			'description' => 'Some kind of effect that controls or alters the battlefield, such as darkness generation or fields of reversed gravity.'
		],
		'Taurus' => [
			'class' => 'Brute',
			'description' => 'Super durability or physical super strength, such as a personal force-field or, you know, super strength.'
		],
		'Gemini' => [
			'class' => 'Master',
			'description' => 'Controls and possibly creates minions, whether they be humans, bugs, or inanimate constructs.'
		],
		'Cancer' => [
			'class' => 'Tinker',
			'description' => 'Extreme knowledge in a particular field, such as creating bombs, cramming technology into a very small space, etc.'
		],
		'Leo' => [
			'class' => 'Striker',
			'description' => 'Applies some kind of effect on touch, such as time-freezing objects or modification of biology.'
		],
		'Virgo' => [
			'class' => 'Trump',
			'description' => 'A power that interacts with other powers, such as granting, copying, or modifying powers.'
		],
		'Libra' => [
			'class' => 'Breaker',
			'description' => 'Can break certain rules of physics as they apply to the user, sometimes giving new powers while in the breaker state.'
		],
		'Scorpio' => [
			'class' => 'Stranger',
			'description' => 'Powers that have some sort of application to stealth or subterfuge, physically (such as darkness generation) or mentally (such as the inability to be perceived as a threat).'
		],
		'Sagittarius' => [
			'class' => 'Blaster',
			'description' => 'Any offensive, ranged power.'
		],
		'Capricorn' => [
			'class' => 'Mover',
			'description' => 'Moves themselves or others, through super speed, teleportation, etc.'
		],
		'Aquarius' => [
			'class' => 'Thinker',
			'description' => 'Augmentation of the mind, or possession of sensory abilities beyond any reasonable human limit (x-ray vision would qualify).'
		],
		'Pisces' => [
			'class' => 'Changer',
			'description' => 'Changes the user\'s body into other forms, such as shapeshifting (often into only one specified form, such as living fog).'
		]
	];
	
	$powerFlavor = [
		'Fehu' => [
			'flavor' => 'Wealth',
			'description' => 'Power operates on some sort of fuel.'
		],
		'Uruz' => [
			'flavor' => 'Beast of burden',
			'description' => 'Limited in versatility, but very good at what it does.'
		],
		'Thurisaz' => [
			'flavor' => 'Thor',
			'description' => 'A straightforward, easy-to-understand, and offensive power.'
		],
		'Ansuz' => [
			'flavor' => 'Odin',
			'description' => 'The power\'s workings are complex and not immediately obvious, both to others and to yourself. Tends towards abstractness.'
		],
		'Raido' => [
			'flavor' => 'Journey',
			'description' => 'Power involves freedom and the breaking of bonds. Tends towards physical powers.'
		],
		'Kenaz' => [
			'flavor' => 'Torch',
			'description' => 'Interacts with human-built things rather than natural things.'
		],
		'Gebo' => [
			'flavor' => 'Gift',
			'description' => 'Involves some kind of equal exchange.'
		],
		'Wunjo' => [
			'flavor' => 'Joy',
			'description' => 'Teamwork-oriented.'
		],
		'Hagalaz' => [
			'flavor' => 'Hail',
			'description' => 'Works from the culmination of many small factors, rather than one large one; a Hagalaz Master would form many weak minions instead of a single powerful one.'
		],
		'Naudiz' => [
			'flavor' => 'Necessity',
			'description' => 'Power\'s effects are unpredictable, but tend to adapt towards the current situation.'
		],
		'Isa' => [
			'flavor' => 'Ice',
			'description' => 'Power reduces or nullifies change in some way.'
		],
		'Jera' => [
			'flavor' => 'Harvest',
			'description' => 'Requires some kind of buildup before it can be used.'
		],
		'Ihwaz' => [
			'flavor' => 'Yew',
			'description' => 'Power\'s effects last for a long time.'
		],
		'Perthro' => [
			'flavor' => 'Fate',
			'description' => 'Power is to some degree uncontrollable.'
		],
		'Algiz' => [
			'flavor' => 'Elk',
			'description' => 'Almost always a primarily defensive power.'
		],
		'Sowilo' => [
			'flavor' => 'Sun',
			'description' => 'Induces change in some fashion.'
		],
		'Tiwaz' => [
			'flavor' => 'Tyr',
			'description' => ' Offensive, requires some sort of sacrifice to use.'
		],
		'Berkano' => [
			'flavor' => 'Birch',
			'description' => 'Power is continually active in some form or works on a cycle.'
		],
		'Ehwaz' => [
			'flavor' => 'Horse',
			'description' => 'Cooperative, but less in the sense of many people and more in the sense of just two (the user and something else).'
		],
		'Mannaz' => [
			'flavor' => 'Man',
			'description' => 'Tends to work on humans, either the body or the mind.'
		],
		'Laguz' => [
			'flavor' => 'Lake',
			'description' => 'Tends to work on natural materials.'
		],
		'Inguz' => [
			'flavor' => 'Fertility',
			'description' => 'Works over large time scales, growing stronger the longer it is applied.'
		],
		'Dagaz' => [
			'flavor' => 'Day',
			'description' => 'Works in short bursts of extreme power.'
		],
		'Othala' => [
			'flavor' => 'Heritage',
			'description' => 'Power benefits only the user, and not others.'
		]
	];
	
	$powerTwistsNumber = [
		'Ace' => 'Your power bypasses some limit it might otherwise be bound by.',
		'Two' => 'Your power has a drawback, but increases the positive effect of your suit.',
		'Three' => 'You have a wide array of minor powers rather than one single power. Not all powers have to be in the same category.',
		'Four' => 'Instead of increasing one factor and decreasing another, your suit decreases both factors.',
		'five' => 'Nothing happens. The suit effect is applied as written.',
		'Six' => 'You and your power are relatively in sync.',
		'Seven' => 'Your suit increases both factors that it affects. A Seven of Hearts would increase control AND [power or versatility].',
		'Eight' => 'Your power has potential, but conflicts with your personality (someone who hates waiting gets a power that must charge for days before being used). This is in some way that isn\'t moral (see King, for that).',
		'Nine' => 'The suit\'s effects are taken to the extreme.',
		'Ten' => 'Your power has a significant secondary usage in another class (such as a Blaster who can use recoil as a Mover).',
		'Jack' => 'Your power is different than what outside observers might think it to be, and often has subtle aspects unnoticed by others.',
		'Queen' => 'Your power is less straight-up strong but lends itself towards teamwork and combos with other powers.',
		'King' => 'Your power has strength but is unethical as all hell (such as Butcher\'s long distance pain inducement or Heartbreaker\'s irreversible emotion manipulation).'
	];
	
	$powerTwistsSuit = [
		'Spades' => [
			'symbol' => '&spades;',
			'factor' => 'Control',
			'direction' => 'decrease'
		],
		'Hearts' => [
			'symbol' => '&hearts;',
			'factor' => 'Control',
			'direction' => 'increase'
		],
		'Clubs' => [
			'symbol' => '&clubs;',
			'factor' => 'Power',
			'direction' => 'decrease'
		],
		'Diamonds' => [
			'symbol' => '&diams;',
			'factor' => 'Power',
			'direction' => 'increase'
		]
	];
	
	function array_random_assoc($arr, $num = 1) {
    	$keys = array_keys($arr);
    	shuffle($keys);
    
    	$r = array();
    	for ($i = 0; $i < $num; $i++) {
        	$r[$keys[$i]] = $arr[$keys[$i]];
    	}
    	return $r;
	}
	
	$powerDraw = [];
	$powerDraw['Type'] = array_random_assoc($powerType);
	$powerDraw['Flavor'] = array_random_assoc($powerFlavor);
	$powerDraw['Twist'] = ['suit' => array_random_assoc($powerTwistsSuit), 'value' => array_random_assoc($powerTwistsNumber)];
	
	
?>	