<?php
	$powerType = [
		'Aries' => [
			'name' => 'Aries',
			'class' => 'Shaker',
			'description' => 'Some kind of effect that controls or alters the battlefield, such as darkness generation or fields of reversed gravity.'
		],
		'Taurus' => [
			'name' => 'Taurus',
			'class' => 'Brute',
			'description' => 'Super durability or physical super strength, such as a personal force-field or, you know, super strength.'
		],
		'Gemini' => [
			'name' => 'Gemini',
			'class' => 'Master',
			'description' => 'Controls and possibly creates minions, whether they be humans, bugs, or inanimate constructs.'
		],
		'Cancer' => [
			'name' => 'Cancer',
			'class' => 'Tinker',
			'description' => 'Extreme knowledge in a particular field, such as creating bombs, cramming technology into a very small space, etc.'
		],
		'Leo' => [
			'name' => 'Leo',
			'class' => 'Striker',
			'description' => 'Applies some kind of effect on touch, such as time-freezing objects or modification of biology.'
		],
		'Virgo' => [
			'name' => 'Virgo',
			'class' => 'Trump',
			'description' => 'A power that interacts with other powers, such as granting, copying, or modifying powers.'
		],
		'Libra' => [
			'name' => 'Libra',
			'class' => 'Breaker',
			'description' => 'Can break certain rules of physics as they apply to the user, sometimes giving new powers while in the breaker state.'
		],
		'Scorpio' => [
			'name' => 'Scorpio',
			'class' => 'Stranger',
			'description' => 'Powers that have some sort of application to stealth or subterfuge, physically (such as darkness generation) or mentally (such as the inability to be perceived as a threat).'
		],
		'Sagittarius' => [
			'name' => 'Sagittarius',
			'class' => 'Blaster',
			'description' => 'Any offensive, ranged power.'
		],
		'Capricorn' => [
			'name' => 'Capricorn',
			'class' => 'Mover',
			'description' => 'Moves themselves or others, through super speed, teleportation, etc.'
		],
		'Aquarius' => [
			'name' => 'Aquarius',
			'class' => 'Thinker',
			'description' => 'Augmentation of the mind, or possession of sensory abilities beyond any reasonable human limit (x-ray vision would qualify).'
		],
		'Pisces' => [
			'name' => 'Pisces',
			'class' => 'Changer',
			'description' => 'Changes the user\'s body into other forms, such as shapeshifting (often into only one specified form, such as living fog).'
		]
	];
	
	$powerFlavor = [
		'Fehu' => [
			'name' => 'Fehu',
			'flavor' => 'Wealth',
			'description' => 'Power operates on some sort of fuel.'
		],
		'Uruz' => [
			'name' => 'Uruz',
			'flavor' => 'Beast of burden',
			'description' => 'Limited in versatility, but very good at what it does.'
		],
		'Thurisaz' => [
			'name' => 'Thurisaz',
			'flavor' => 'Thor',
			'description' => 'A straightforward, easy-to-understand, and offensive power.'
		],
		'Ansuz' => [
			'name' => 'Ansuz',
			'flavor' => 'Odin',
			'description' => 'The power\'s workings are complex and not immediately obvious, both to others and to yourself. Tends towards abstractness.'
		],
		'Raido' => [
			'name' => 'Raido',
			'flavor' => 'Journey',
			'description' => 'Power involves freedom and the breaking of bonds. Tends towards physical powers.'
		],
		'Kenaz' => [
			'name' => 'Kenaz',
			'flavor' => 'Torch',
			'description' => 'Interacts with human-built things rather than natural things.'
		],
		'Gebo' => [
			'name' => 'Gebo',
			'flavor' => 'Gift',
			'description' => 'Involves some kind of equal exchange.'
		],
		'Wunjo' => [
			'name' => 'Wunjo',
			'flavor' => 'Joy',
			'description' => 'Teamwork-oriented.'
		],
		'Hagalaz' => [
			'name' => 'Hagalaz',
			'flavor' => 'Hail',
			'description' => 'Works from the culmination of many small factors, rather than one large one; a Hagalaz Master would form many weak minions instead of a single powerful one.'
		],
		'Naudiz' => [
			'name' => 'Naudiz',
			'flavor' => 'Necessity',
			'description' => 'Power\'s effects are unpredictable, but tend to adapt towards the current situation.'
		],
		'Isa' => [
			'name' => 'Isa',
			'flavor' => 'Ice',
			'description' => 'Power reduces or nullifies change in some way.'
		],
		'Jera' => [
			'name' => 'Jera',
			'flavor' => 'Harvest',
			'description' => 'Requires some kind of buildup before it can be used.'
		],
		'Ihwaz' => [
			'name' => 'Ihwaz',
			'flavor' => 'Yew',
			'description' => 'Power\'s effects last for a long time.'
		],
		'Perthro' => [
			'name' => 'Perthro',
			'flavor' => 'Fate',
			'description' => 'Power is to some degree uncontrollable.'
		],
		'Algiz' => [
			'name' => 'Algiz',
			'flavor' => 'Elk',
			'description' => 'Almost always a primarily defensive power.'
		],
		'Sowilo' => [
			'name' => 'Sowilo',
			'flavor' => 'Sun',
			'description' => 'Induces change in some fashion.'
		],
		'Tiwaz' => [
			'name' => 'Tiwaz',
			'flavor' => 'Tyr',
			'description' => ' Offensive, requires some sort of sacrifice to use.'
		],
		'Berkano' => [
			'name' => 'Berkano',
			'flavor' => 'Birch',
			'description' => 'Power is continually active in some form or works on a cycle.'
		],
		'Ehwaz' => [
			'name' => 'Ehwaz',
			'flavor' => 'Horse',
			'description' => 'Cooperative, but less in the sense of many people and more in the sense of just two (the user and something else).'
		],
		'Mannaz' => [
			'name' => 'Mannaz',
			'flavor' => 'Man',
			'description' => 'Tends to work on humans, either the body or the mind.'
		],
		'Laguz' => [
			'name' => 'Laguz',
			'flavor' => 'Lake',
			'description' => 'Tends to work on natural materials.'
		],
		'Inguz' => [
			'name' => 'Inguz',
			'flavor' => 'Fertility',
			'description' => 'Works over large time scales, growing stronger the longer it is applied.'
		],
		'Dagaz' => [
			'name' => 'Dagaz',
			'flavor' => 'Day',
			'description' => 'Works in short bursts of extreme power.'
		],
		'Othala' => [
			'name' => 'Othala',
			'flavor' => 'Heritage',
			'description' => 'Power benefits only the user, and not others.'
		]
	];
	
	$powerTwistsNumber = [
		'Ace' => [
			'name' => 'Ace',
			'description' => 'Your power bypasses some limit it might otherwise be bound by.'
		],
		'Two' => [
			'name' => 'Two',
			'description' => 'Your power has a drawback, but increases the positive effect of your suit.'
		],
		'Three' => [
			'name' => 'Three',
			'description' => 'You have a wide array of minor powers rather than one single power. Not all powers have to be in the same category.'
		],
		'Four' => [
			'name' => 'Four',
			'description' => 'Instead of increasing one factor and decreasing another, your suit decreases both factors.'
		],
		'Five' => [
			'name' => 'Five',
			'description' => 'Nothing happens. The suit effect is applied as written.'
		],
		'Six' => [
			'name' => 'Six',
			'description' => 'You and your power are relatively in sync.'
		],
		'Seven' => [
			'name' => 'Seven',
			'description' => 'Your suit increases both factors that it affects. A Seven of Hearts would increase control AND [power or versatility].'
		],
		'Eight' => [
			'name' => 'Eight',
			'description' => 'Your power has potential, but conflicts with your personality (someone who hates waiting gets a power that must charge for days before being used). This is in some way that isn\'t moral (see King, for that).'
		],
		'Nine' => [
			'name' => 'Nine',
			'description' => 'The suit\'s effects are taken to the extreme.'
		],
		'Ten' => [
			'name' => 'Ten',
			'description' => 'Your power has a significant secondary usage in another class (such as a Blaster who can use recoil as a Mover).'
		],
		'Jack' => [
			'name' => 'Jack',
			'description' => 'Your power is different than what outside observers might think it to be, and often has subtle aspects unnoticed by others.'
		],
		'Queen' => [
			'name' => 'Queen',
			'description' => 'Your power is less straight-up strong but lends itself towards teamwork and combos with other powers.'
		],
		'King' => [
			'name' => 'King',
			'description' => 'Your power has strength but is unethical as all hell (such as Butcher\'s long distance pain inducement or Heartbreaker\'s irreversible emotion manipulation).'
		]
	];
	
	$powerTwistsSuit = [
		'Spades' => [
			'name' => 'Spades',
			'symbol' => '&spades;',
			'factor' => 'Control',
			'direction' => 'decreases'
		],
		'Hearts' => [
			'name' => 'Hearts',
			'symbol' => '&hearts;',
			'factor' => 'Control',
			'direction' => 'increases'
		],
		'Clubs' => [
			'name' => 'Clubs',
			'symbol' => '&clubs;',
			'factor' => 'Power',
			'direction' => 'decreases'
		],
		'Diamonds' => [
			'name' => 'Diamonds',
			'symbol' => '&diams;',
			'factor' => 'Power',
			'direction' => 'increases'
		]
	];
	
	function array_random_assoc($arr, $num = 1) {
    	$keys = array_keys($arr);
    	shuffle($keys);
    
    	$r = array();
    	for ($i = 0; $i < $num; $i++) {
        	$r[$i] = $arr[$keys[$i]];
    	}
    	return $r;
	}
	
	$powerDraw = [];
	$powerDraw['Type'] = array_random_assoc($powerType);
	$powerDraw['Flavor'] = array_random_assoc($powerFlavor);
	$powerDraw['Twist'] = ['suit' => array_random_assoc($powerTwistsSuit), 'value' => array_random_assoc($powerTwistsNumber)];
	
	echo '<h1>Using Worm Futhark Generator</h1>' . "\n" . '<h2>v1.5.2-PHP build 201505091220</h2>' . "\n";
	
	echo '<p>You rolled the \'' . $powerDraw['Type'][0]['name'] . '\' sign! This results in a \'' . $powerDraw['Type'][0]['class'] . '\'-class power. ' . $powerDraw['Type'][0]['class'] . 's give ' . $powerDraw['Type'][0]['description'] . '</p>';
	
	echo '<p>You also rolled the \'' . $powerDraw['Flavor'][0]['name'] . '\' rune! This results in the flavor \'' . $powerDraw['Flavor'][0]['flavor'] . '\', which gives a ' . $powerDraw['Flavor'][0]['description'] . '.</p>';
	
	echo '<p>Additionally, you pulled the ' . $powerDraw['Twist']['value'][0]['name'] . ' of ' . $powerDraw['Twist']['suit'][0]['name'] . ' which ' . $powerDraw['Twist']['suit'][0]['direction'] . ' ' . $powerDraw['Twist']['suit'][0]['factor'] . '.';
?>	