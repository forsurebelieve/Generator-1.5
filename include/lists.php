<?php
	$powerType = [
		'Aries' => [
			'image' => $site_root . '/img/aries.png',
			'name' => 'Aries',
			'class' => 'Shaker',
			'description' => 'an ability that controls or alters the battlefield, such as darkness generation or fields of reversed gravity'
		],
		'Taurus' => [
			'image' => $site_root . '/img/taurus.png',
			'name' => 'Taurus',
			'class' => 'Brute',
			'description' => 'super durability or physical super strength, such as a personal force-field'
		],
		'Gemini' => [
			'image' => $site_root . '/img/gemini.png',
			'name' => 'Gemini',
			'class' => 'Master',
			'description' => 'control and possibly creation of minions, whether they be humans, bugs, or inanimate constructs'
		],
		'Cancer' => [
			'image' => $site_root . '/img/cancer.png',
			'name' => 'Cancer',
			'class' => 'Tinker',
			'description' => 'the ability to manipulate technology beyond the means of current science',
			'old_description' => 'extreme knowledge in a particular field, such as creating bombs, cramming technology into a very small space, etc'
		],
		'Leo' => [
			'image' => $site_root . '/img/leo.png',
			'name' => 'Leo',
			'class' => 'Striker',
			'description' => 'the ability to apply some kind of effect on touch, such as time-freezing objects or modification of biology'
		],
		'Virgo' => [
			'image' => $site_root . '/img/virgo.png',
			'name' => 'Virgo',
			'class' => 'Trump',
			'description' => 'a power that interacts with other powers, such as granting, copying, or modifying powers'
		],
		'Libra' => [
			'image' => $site_root . '/img/libra.png',
			'name' => 'Libra',
			'class' => 'Breaker',
			'description' => 'the ability to break certain rules of physics as they apply to the user, sometimes giving new powers while in the \'breaker\' state'
		],
		'Scorpio' => [
			'image' => $site_root . '/img/scorpio.png',
			'name' => 'Scorpio',
			'class' => 'Stranger',
			'description' => 'powers with some sort of application to stealth or subterfuge, physically (such as darkness generation) or mentally (such as the inability to be perceived as a threat)'
		],
		'Sagittarius' => [
			'image' => $site_root . '/img/sagittarius.png',
			'name' => 'Sagittarius',
			'class' => 'Blaster',
			'description' => 'an offensive, ranged power'
		],
		'Capricorn' => [
			'image' => $site_root . '/img/capricorn.png',
			'name' => 'Capricorn',
			'class' => 'Mover',
			'description' => 'the ability to move themselves or others. This may be through super speed, teleportation, or other methods'
		],
		'Aquarius' => [
			'image' => $site_root . '/img/aquarius.png',
			'name' => 'Aquarius',
			'class' => 'Thinker',
			'description' => 'Augmented minds, or sensory abilities beyond any reasonable human limit, such as x-ray vision'
		],
		'Pisces' => [
			'image' => $site_root . '/img/pisces.png',
			'name' => 'Pisces',
			'class' => 'Changer',
			'description' => 'the ability to change their body into other forms, like a shapeshifter, but often into only one specified form, such as living fog'
		]
	];
	
	$powerFlavor = [
		'Fehu' => [
			'image' => $site_root . '/img/fehu.png',
			'element' => 'mystic water',
			'element_name' => '',
			'name' => 'Fehu',
			'flavor' => 'Wealth',
			'description' => 'operates on some sort of fuel'
		],
		'Uruz' => [
			'image' => $site_root . '/img/uruz.png',
			'element' => 'solid earth',
			'element_name' => 'rock or cement',
			'name' => 'Uruz',
			'flavor' => 'Beast of burden',
			'description' => 'is limited in versatility, but very good at what it does'
		],
		'Thurisaz' => [
			'image' => $site_root . '/img/thurisaz.png',
			'element' => 'solid fire',
			'element_name' => 'lightning',
			'name' => 'Thurisaz',
			'flavor' => 'Thor',
			'description' => 'is straightforward, easy-to-understand, and offensive'
		],
		'Ansuz' => [
			'image' => $site_root . '/img/ansuz.png',
			'element' => 'mystic mindforce',
			'element_name' => '',
			'name' => 'Ansuz',
			'flavor' => 'Odin',
			'description' => 'tends toward abstractness. The power\'s workings are complex and not immediately obvious, both to others and to yourself'
		],
		'Raido' => [
			'image' => $site_root . '/img/raido.png',
			'element' => 'ether air',
			'element_name' => 'gas',
			'name' => 'Raido',
			'flavor' => 'Journey',
			'description' => 'tends toward the physical, and involves freedom and the breaking of bonds'
		],
		'Kenaz' => [
			'image' => $site_root . '/img/kauna.png',
			'element' => 'liquid fire',
			'element_name' => 'magma',
			'name' => 'Kenaz',
			'flavor' => 'Torch',
			'description' => 'interacts with human-built things rather than natural things'
		],
		'Gebo' => [
			'image' => $site_root . '/img/gebo.png',
			'element' => 'liquid air',
			'element_name' => 'darkness',
			'name' => 'Gebo',
			'flavor' => 'Gift',
			'description' => 'involves some kind of equal exchange'
		],
		'Wunjo' => [
			'image' => $site_root . '/img/wunjo.png',
			'element' => 'mystic air',
			'element_name' => 'miasma',
			'name' => 'Wunjo',
			'flavor' => 'Joy',
			'description' => 'is teamwork-oriented, encouraging synergy'
		],
		'Hagalaz' => [
			'image' => $site_root . '/img/hagalaz.png',
			'element' => 'ether water',
			'element_name' => 'hail',
			'name' => 'Hagalaz',
			'flavor' => 'Hail',
			'description' => 'works from the culmination of many small factors, rather than one large one; a Hagalaz Master would form many weak minions instead of a single powerful one'
		],
		'Naudiz' => [
			'image' => $site_root . '/img/naudiz.png',
			'element' => 'ether fire',
			'element_name' => 'heat',
			'name' => 'Naudiz',
			'flavor' => 'Necessity',
			'description' => 'has unpredictable effects which tend to adapt towards the current situation'
		],
		'Isa' => [
			'image' => $site_root . '/img/isa.png',
			'element' => 'solid water',
			'element_name' => 'ice',
			'name' => 'Isa',
			'flavor' => 'Ice',
			'description' => 'reduces or nullifies change in some way'
		],
		'Jera' => [
			'image' => $site_root . '/img/jera.png',
			'element' => 'mystic earth',
			'element_name' => 'sand',
			'name' => 'Jera',
			'flavor' => 'Harvest',
			'description' => 'requires some kind of buildup before it can be used'
		],
		'Ihwaz' => [
			'image' => $site_root . '/img/ihwaz.png',
			'element' => 'ether mindforce',
			'element_name' => '',
			'name' => 'Ihwaz',
			'flavor' => 'Yew',
			'description' => 'has effects last for a long time'
		],
		'Perthro' => [
			'image' => $site_root . '/img/perthro.png',
			'element' => 'ether lifeforce',
			'element_name' => '',
			'name' => 'Perthro',
			'flavor' => 'Fate',
			'description' => 'is to some degree uncontrollable'
		],
		'Algiz' => [
			'image' => $site_root . '/img/algiz.png',
			'element' => 'solid lifeforce',
			'element_name' => '',
			'name' => 'Algiz',
			'flavor' => 'Elk',
			'description' => 'is almost always primarily defensive'
		],
		'Sowilo' => [
			'image' => $site_root . '/img/sowilo.png',
			'element' => 'mystic fire',
			'element_name' => 'light',
			'name' => 'Sowilo',
			'flavor' => 'Sun',
			'description' => 'induces change in some fashion'
		],
		'Tiwaz' => [
			'image' => $site_root . '/img/tiwaz.png',
			'element' => 'liquid mindforce',
			'element_name' => '',
			'name' => 'Tiwaz',
			'flavor' => 'Tyr',
			'description' => ' is offensive, but requires some sort of sacrifice to use'
		],
		'Berkano' => [
			'image' => $site_root . '/img/berkano.png',
			'element' => 'liquid lifeforce',
			'element_name' => 'time',
			'name' => 'Berkano',
			'flavor' => 'Birch',
			'description' => 'is continually active in some form or works on a cycle'
		],
		'Ehwaz' => [
			'image' => $site_root . '/img/ehwaz.png',
			'element' => 'mystic lifeforce',
			'element_name' => '',
			'name' => 'Ehwaz',
			'flavor' => 'Horse',
			'description' => 'is cooperative, but less in the sense of many people and more in the sense of just two (the user and someone or something else)'
		],
		'Mannaz' => [
			'image' => $site_root . '/img/mannaz.png',
			'element' => 'liquid earth',
			'element_name' => 'metal',
			'name' => 'Mannaz',
			'flavor' => 'Man',
			'description' => 'tends to work on humans, either the body or the mind'
		],
		'Laguz' => [
			'image' => $site_root . '/img/laguz.png',
			'element' => 'liquid water',
			'element_name' => 'water',
			'name' => 'Laguz',
			'flavor' => 'Lake',
			'description' => 'tends to work on natural materials'
		],
		'Inguz' => [
			'image' => $site_root . '/img/inguz.png',
			'element' => 'ether earth',
			'element_name' => 'plants',
			'name' => 'Inguz',
			'flavor' => 'Fertility',
			'description' => 'works over large time scales, growing stronger the longer it is applied'
		],
		'Dagaz' => [
			'image' => $site_root . '/img/dagaz.png',
			'element' => 'solid air',
			'element_name' => 'compressed air',
			'name' => 'Dagaz',
			'flavor' => 'Day',
			'description' => 'works in short bursts of extreme power'
		],
		'Othala' => [
			'image' => $site_root . '/img/othala.png',
			'element' => 'solid mindforce',
			'element_name' => '',
			'name' => 'Othala',
			'flavor' => 'Heritage',
			'description' => 'benefits only the user, and not others'
		]
	];
	
	$powerTwistsNumber = [
		'Ace' => [
			'name' => 'Ace',
			'short' => 'A',
			'description' => 'bypasses some limit it might otherwise be bound by'
		],
		'Two' => [
			'name' => 'Two',
			'short' => '2',
			'description' => 'has a drawback, but increases the positive effect of your suit'
		],
		'Three' => [
			'name' => 'Three',
			'short' => '3',
			'description' => 'you have a wide array of minor powers rather than one single power. Not all of your powers have to be in the same category (roll Sign and Rune again, twice)'
		],
		'Four' => [
			'name' => 'Four',
			'short' => '4',
			'description' => 'your suit decreases two factors, instead of decreasing one and increasing another'
		],
		'Five' => [
			'name' => 'Five',
			'short' => '5',
			'description' => 'the suit effect is applied as written'
		],
		'Six' => [
			'name' => 'Six',
			'short' => '6',
			'description' => 'you and your power are relatively in sync'
		],
		'Seven' => [
			'name' => 'Seven',
			'short' => '7',
			'description' => 'your suit increases two factors, instead of decreasing one and increasing another'
		],
		'Eight' => [
			'name' => 'Eight',
			'short' => '8',
			'description' => 'although your power has potential, it conflicts with your personality (someone who hates waiting gets a power that must charge for days before being used). This is in some way that isn\'t moral '
		],
		'Nine' => [
			'name' => 'Nine',
			'short' => '9',
			'description' => 'the suit\'s effects are taken to the extreme'
		],
		'Ten' => [
			'name' => 'Ten',
			'short' => '10',
			'description' => 'has a significant secondary usage in another class (such as a Blaster who can use recoil as a Mover)'
		],
		'Jack' => [
			'name' => 'Jack',
			'short' => 'J',
			'description' => 'is different than what outside observers might think it to be, and often has subtle aspects unnoticed by others'
		],
		'Queen' => [
			'name' => 'Queen',
			'short' => 'Q',
			'description' => 'is less straight-up strong but lends itself towards teamwork and combos with other powers'
		],
		'King' => [
			'name' => 'King',
			'short' => 'K',
			'description' => 'has strength but is incredibly unethical'
		]
	];
	
	$powerTwistsSuit = [
		'Spades' => [
			'image' => $site_root . '/img/spades.png',
			'name' => 'Spades',
			'symbol' => '&spades;',
			'factor' => 'Control',
			'direction' => 'decreased',
			'unfactor' => 'Versitility or Power',
			'undirection' => 'increased'
		],
		'Hearts' => [
			'image' => $site_root . '/img/hearts.png',
			'name' => 'Hearts',
			'symbol' => '&hearts;',
			'factor' => 'Control',
			'direction' => 'increased',
			'unfactor' => 'Versitility or Power',
			'undirection' => 'decreased'
		],
		'Clubs' => [
			'image' => $site_root . '/img/clubs.png',
			'name' => 'Clubs',
			'symbol' => '&clubs;',
			'factor' => 'Power',
			'direction' => 'decreased',
			'unfactor' => 'Versitility or Control',
			'undirection' => 'increased'
		],
		'Diamonds' => [
			'image' => $site_root . '/img/diamonds.png',
			'name' => 'Diamonds',
			'symbol' => '&diams;',
			'factor' => 'Power',
			'direction' => 'increased',
			'unfactor' => 'Versitility or Control',
			'undirection' => 'decreased'
		]
	];
	
?>
