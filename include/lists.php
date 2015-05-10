<?php
	$powerType = [
		'Aries' => [
			'image' => $site_root . '/img/aries.png',
			'name' => 'Aries',
			'class' => 'Shaker',
			'description' => 'Some kind of effect that controls or alters the battlefield, such as darkness generation or fields of reversed gravity'
		],
		'Taurus' => [
			'image' => $site_root . '/img/taurus.png',
			'name' => 'Taurus',
			'class' => 'Brute',
			'description' => 'Super durability or physical super strength, such as a personal force-field or, you know, super strength'
		],
		'Gemini' => [
			'image' => $site_root . '/img/gemini.png',
			'name' => 'Gemini',
			'class' => 'Master',
			'description' => 'Controls and possibly creates minions, whether they be humans, bugs, or inanimate constructs'
		],
		'Cancer' => [
			'image' => $site_root . '/img/cancer.png',
			'name' => 'Cancer',
			'class' => 'Tinker',
			'description' => 'Extreme knowledge in a particular field, such as creating bombs, cramming technology into a very small space, etc'
		],
		'Leo' => [
			'image' => $site_root . '/img/leo.png',
			'name' => 'Leo',
			'class' => 'Striker',
			'description' => 'Applies some kind of effect on touch, such as time-freezing objects or modification of biology'
		],
		'Virgo' => [
			'image' => $site_root . '/img/virgo.png',
			'name' => 'Virgo',
			'class' => 'Trump',
			'description' => 'A power that interacts with other powers, such as granting, copying, or modifying powers'
		],
		'Libra' => [
			'image' => $site_root . '/img/libra.png',
			'name' => 'Libra',
			'class' => 'Breaker',
			'description' => 'Can break certain rules of physics as they apply to the user, sometimes giving new powers while in the breaker state'
		],
		'Scorpio' => [
			'image' => $site_root . '/img/scorpio.png',
			'name' => 'Scorpio',
			'class' => 'Stranger',
			'description' => 'Powers that have some sort of application to stealth or subterfuge, physically (such as darkness generation) or mentally (such as the inability to be perceived as a threat)'
		],
		'Sagittarius' => [
			'image' => $site_root . '/img/sagittarius.png',
			'name' => 'Sagittarius',
			'class' => 'Blaster',
			'description' => 'Any offensive, ranged power'
		],
		'Capricorn' => [
			'image' => $site_root . '/img/capricorn.png',
			'name' => 'Capricorn',
			'class' => 'Mover',
			'description' => 'Moves themselves or others, through super speed, teleportation, etc'
		],
		'Aquarius' => [
			'image' => $site_root . '/img/aquarius.png',
			'name' => 'Aquarius',
			'class' => 'Thinker',
			'description' => 'Augmentation of the mind, or possession of sensory abilities beyond any reasonable human limit (x-ray vision would qualify)'
		],
		'Pisces' => [
			'image' => $site_root . '/img/pisces.png',
			'name' => 'Pisces',
			'class' => 'Changer',
			'description' => 'Changes the user\'s body into other forms, such as shapeshifting (often into only one specified form, such as living fog)'
		]
	];
	
	$powerFlavor = [
		'Fehu' => [
			'image' => $site_root . '/img/fehu.png',
			'element' => 'mystic water',
			'element_name' => '',
			'name' => 'Fehu',
			'flavor' => 'Wealth',
			'description' => 'Power operates on some sort of fuel'
		],
		'Uruz' => [
			'image' => $site_root . '/img/uruz.png',
			'element' => 'solid earth',
			'element_name' => '',
			'name' => 'Uruz',
			'flavor' => 'Beast of burden',
			'description' => 'Limited in versatility, but very good at what it does'
		],
		'Thurisaz' => [
			'image' => $site_root . '/img/thurisaz.png',
			'element' => 'solid fire',
			'element_name' => 'lightning',
			'name' => 'Thurisaz',
			'flavor' => 'Thor',
			'description' => 'A straightforward, easy-to-understand, and offensive power'
		],
		'Ansuz' => [
			'image' => $site_root . '/img/ansuz.png',
			'element' => 'mystic mindforce',
			'element_name' => '',
			'name' => 'Ansuz',
			'flavor' => 'Odin',
			'description' => 'The power\'s workings are complex and not immediately obvious, both to others and to yourself. Tends towards abstractness'
		],
		'Raido' => [
			'image' => $site_root . '/img/raido.png',
			'element' => 'ether air',
			'element_name' => 'fog',
			'name' => 'Raido',
			'flavor' => 'Journey',
			'description' => 'Power involves freedom and the breaking of bonds. Tends towards physical powers'
		],
		'Kenaz' => [
			'image' => $site_root . '/img/kauna.png',
			'element' => 'liquid fire',
			'element_name' => 'lava',
			'name' => 'Kenaz',
			'flavor' => 'Torch',
			'description' => 'Interacts with human-built things rather than natural things'
		],
		'Gebo' => [
			'image' => $site_root . '/img/gebo.png',
			'element' => 'liquid air',
			'element_name' => 'gas',
			'name' => 'Gebo',
			'flavor' => 'Gift',
			'description' => 'Involves some kind of equal exchange'
		],
		'Wunjo' => [
			'image' => $site_root . '/img/wunjo.png',
			'element' => 'mystic air',
			'element_name' => '',
			'name' => 'Wunjo',
			'flavor' => 'Joy',
			'description' => 'Teamwork-oriented'
		],
		'Hagalaz' => [
			'image' => $site_root . '/img/hagalaz.png',
			'element' => 'ether water',
			'element_name' => 'hail',
			'name' => 'Hagalaz',
			'flavor' => 'Hail',
			'description' => 'Works from the culmination of many small factors, rather than one large one; a Hagalaz Master would form many weak minions instead of a single powerful one'
		],
		'Naudiz' => [
			'image' => $site_root . '/img/naudiz.png',
			'element' => 'ether fire',
			'element_name' => 'heat',
			'name' => 'Naudiz',
			'flavor' => 'Necessity',
			'description' => 'Power\'s effects are unpredictable, but tend to adapt towards the current situation'
		],
		'Isa' => [
			'image' => $site_root . '/img/isa.png',
			'element' => 'solid water',
			'element_name' => 'ice',
			'name' => 'Isa',
			'flavor' => 'Ice',
			'description' => 'Power reduces or nullifies change in some way'
		],
		'Jera' => [
			'image' => $site_root . '/img/jera.png',
			'element' => 'mystic earth',
			'element_name' => '',
			'name' => 'Jera',
			'flavor' => 'Harvest',
			'description' => 'Requires some kind of buildup before it can be used'
		],
		'Ihwaz' => [
			'image' => $site_root . '/img/ihwaz.png',
			'element' => 'ether mindforce',
			'element_name' => '',
			'name' => 'Ihwaz',
			'flavor' => 'Yew',
			'description' => 'Power\'s effects last for a long time'
		],
		'Perthro' => [
			'image' => $site_root . '/img/perthro.png',
			'element' => 'ether lifeforce',
			'element_name' => '',
			'name' => 'Perthro',
			'flavor' => 'Fate',
			'description' => 'Power is to some degree uncontrollable'
		],
		'Algiz' => [
			'image' => $site_root . '/img/algiz.png',
			'element' => 'solid lifeforce',
			'element_name' => '',
			'name' => 'Algiz',
			'flavor' => 'Elk',
			'description' => 'Almost always a primarily defensive power'
		],
		'Sowilo' => [
			'image' => $site_root . '/img/sowilo.png',
			'element' => 'mystic fire',
			'element_name' => 'fire',
			'name' => 'Sowilo',
			'flavor' => 'Sun',
			'description' => 'Induces change in some fashion'
		],
		'Tiwaz' => [
			'image' => $site_root . '/img/tiwaz.png',
			'element' => 'liquid mindforce',
			'element_name' => '',
			'name' => 'Tiwaz',
			'flavor' => 'Tyr',
			'description' => ' Offensive, requires some sort of sacrifice to use'
		],
		'Berkano' => [
			'image' => $site_root . '/img/berkano.png',
			'element' => 'liquid lifeforce',
			'element_name' => '',
			'name' => 'Berkano',
			'flavor' => 'Birch',
			'description' => 'Power is continually active in some form or works on a cycle'
		],
		'Ehwaz' => [
			'image' => $site_root . '/img/ehwaz.png',
			'element' => 'mystic lifeforce',
			'element_name' => '',
			'name' => 'Ehwaz',
			'flavor' => 'Horse',
			'description' => 'Cooperative, but less in the sense of many people and more in the sense of just two (the user and something else)'
		],
		'Mannaz' => [
			'image' => $site_root . '/img/mannaz.png',
			'element' => 'liquid earth',
			'element_name' => 'sand',
			'name' => 'Mannaz',
			'flavor' => 'Man',
			'description' => 'Tends to work on humans, either the body or the mind'
		],
		'Laguz' => [
			'image' => $site_root . '/img/laguz.png',
			'element' => 'liquid water',
			'element_name' => 'water',
			'name' => 'Laguz',
			'flavor' => 'Lake',
			'description' => 'Tends to work on natural materials'
		],
		'Inguz' => [
			'image' => $site_root . '/img/inguz.png',
			'element' => 'ether earth',
			'element_name' => 'plant',
			'name' => 'Inguz',
			'flavor' => 'Fertility',
			'description' => 'Works over large time scales, growing stronger the longer it is applied'
		],
		'Dagaz' => [
			'image' => $site_root . '/img/dagaz.png',
			'element' => 'solid air',
			'element_name' => 'compressed air',
			'name' => 'Dagaz',
			'flavor' => 'Day',
			'description' => 'Works in short bursts of extreme power'
		],
		'Othala' => [
			'image' => $site_root . '/img/othala.png',
			'element' => 'solid mindforce',
			'element_name' => '',
			'name' => 'Othala',
			'flavor' => 'Heritage',
			'description' => 'Power benefits only the user, and not others'
		]
	];
	
	$powerTwistsNumber = [
		'Ace' => [
			'name' => 'Ace',
			'description' => 'Your power bypasses some limit it might otherwise be bound by'
		],
		'Two' => [
			'name' => 'Two',
			'description' => 'Your power has a drawback, but increases the positive effect of your suit'
		],
		'Three' => [
			'name' => 'Three',
			'description' => 'You have a wide array of minor powers rather than one single power. Not all powers have to be in the same category'
		],
		'Four' => [
			'name' => 'Four',
			'description' => 'Instead of increasing one factor and decreasing another, your suit decreases both factors'
		],
		'Five' => [
			'name' => 'Five',
			'description' => 'Nothing happens. The suit effect is applied as written'
		],
		'Six' => [
			'name' => 'Six',
			'description' => 'You and your power are relatively in sync'
		],
		'Seven' => [
			'name' => 'Seven',
			'description' => 'Your suit increases both factors that it affects. A Seven of Hearts would increase control AND [power or versatility]'
		],
		'Eight' => [
			'name' => 'Eight',
			'description' => 'Your power has potential, but conflicts with your personality (someone who hates waiting gets a power that must charge for days before being used). This is in some way that isn\'t moral (see King, for that)'
		],
		'Nine' => [
			'name' => 'Nine',
			'description' => 'The suit\'s effects are taken to the extreme'
		],
		'Ten' => [
			'name' => 'Ten',
			'description' => 'Your power has a significant secondary usage in another class (such as a Blaster who can use recoil as a Mover)'
		],
		'Jack' => [
			'name' => 'Jack',
			'description' => 'Your power is different than what outside observers might think it to be, and often has subtle aspects unnoticed by others'
		],
		'Queen' => [
			'name' => 'Queen',
			'description' => 'Your power is less straight-up strong but lends itself towards teamwork and combos with other powers'
		],
		'King' => [
			'name' => 'King',
			'description' => 'Your power has strength but is unethical as all hell (such as Butcher\'s long distance pain inducement or Heartbreaker\'s irreversible emotion manipulation)'
		]
	];
	
	$powerTwistsSuit = [
		'Spades' => [
			'image' => $site_root . '/img/spades.png',
			'name' => 'Spades',
			'symbol' => '&spades;',
			'factor' => 'Control',
			'direction' => 'decreases',
			'unfactor' => 'Versitility or Power',
			'undirection' => 'increases'
		],
		'Hearts' => [
			'image' => $site_root . '/img/hearts.png',
			'name' => 'Hearts',
			'symbol' => '&hearts;',
			'factor' => 'Control',
			'direction' => 'increases',
			'unfactor' => 'Versitility or Power',
			'undirection' => 'decreases'
		],
		'Clubs' => [
			'image' => $site_root . '/img/clubs.png',
			'name' => 'Clubs',
			'symbol' => '&clubs;',
			'factor' => 'Power',
			'direction' => 'decreases',
			'unfactor' => 'Versitility or Control',
			'undirection' => 'increases'
		],
		'Diamonds' => [
			'image' => $site_root . '/img/diamonds.png',
			'name' => 'Diamonds',
			'symbol' => '&diams;',
			'factor' => 'Power',
			'direction' => 'increases',
			'unfactor' => 'Versitility or Control',
			'undirection' => 'decreases'
		]
	];
	
?>
