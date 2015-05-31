<?php
	class DescriptorList {
		public $Type;
		public $Flavor;
		public $TwistNumber;
		public $TwistSuit;
		
		public function __construct() {
			
			$this->Flavor = [
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
		
			$this->Type = [
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
			
			$this->Twist = [
				'Value' => [
					'Ace' => [
						'name' => 'Ace',
						'short' => 'A',
						'description' => 'it bypasses some limit it might otherwise be bound by'
					],
					'Two' => [
						'name' => 'Two',
						'short' => '2',
						'description' => 'it has a drawback, but increases the positive effect of your suit'
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
						'description' => 'it has a significant secondary usage in another class (such as a Blaster who can use recoil as a Mover)'
					],
					'Jack' => [
						'name' => 'Jack',
						'short' => 'J',
						'description' => 'it is different than what outside observers might think it to be, and often has subtle aspects unnoticed by others'
					],
					'Queen' => [
						'name' => 'Queen',
						'short' => 'Q',
						'description' => 'it is less straight-up strong but lends itself towards teamwork and combos with other powers'
					],
					'King' => [
						'name' => 'King',
						'short' => 'K',
						'description' => 'it has strength but is incredibly unethical'
					]
				],
				'Suit' => [
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
				],
				'Tarot' => [
					'The Fool' => [
						'image' => '',
						'name' => '',
						'description' => 'Your power rewards you for throwing yourself into chaos and becomes slightly more efficient after each serious conflict.'
					],
					'The Magician' => [
						'image' => '',
						'name' => '',
						'description' => 'Your power has a psychological side effect on your enemies (or friends), or you have a secondary power which acheives similar results.'
					],
					'The High Priestess' => [
						'image' => '',
						'name' => '',
						'description' => 'implies a power which works in such a way that the parahuman is more or less aware of other parahumans\' passengers'
					],
					'The Empress' => [
						'image' => '',
						'name' => '',
						'description' => 'Power has a Stranger side effect, or alters time.'
					],
					'The Emperor' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Hierophant' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Lovers' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Chariot' => [
						'image' => '',
						'name' => '',
						'description' => ' focus on projecting more of their power into the world and may work well to support a team or group.'
					],
					'Strength' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Hermit' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'Wheel of Fortune' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'Justice' => [
						'image' => '',
						'name' => '',
						'description' => ' gives a power exceptionally clear and obvious applications to its abilities. While most upright Justice powers can be used for other purposes through clever application or leveraging an interaction between one or more other powers, by itself what you see is what you get.'
					],
					'The Hanged Man' => [
						'image' => '',
						'name' => '',
						'description' => 'essentially says that the power draws strength from patience and foresight. While they can take immediate action and make hasty decisions, the power benefits immensely from having time to build up, spread out, concentrate, or in some other way focus its effect.'
					],
					'Death' => [
						'image' => '',
						'name' => '',
						'description' => 'has to be that the power affects Biological material only. Preferably destructive.'
					],
					'Temperance' => [
						'image' => '',
						'name' => '',
						'description' => 'could suggest powers that are especially efficient, or accomplish a lot with a little effort. Alternatively, a power that operates in subtle ways. Running with the subtlety aspect, that would mean that a reversed temperance would be especially flashy or eye-catching, though I don\'t know how well that fits the description here. Maybe a power that requires a large amount of a support network (e.g. church organization) before having any real effect, but has a correspondingly higher maximum effect size.'
					],
					'The Devil' => [
						'image' => '',
						'name' => '',
						'description' => 'the power has an automatic quality to it. it is difficult to control, and always acts on full-blast.'
					],
					'The Tower' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Star' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Moon' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Sun' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'Judgement' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The World' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Fool (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'Your power is stronger but permanently effects your personality in a very small way with each use, usually in the negative, and only noticeable over macro periods of time.'
					],
					'The Magician (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'Use of your power takes a toll on your body. This can be crippling but temporary, or minor but cumulative.'
					],
					'The High Priestess (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'implies that the shard affects the parahuman\'s basic personality, hijacking it somewhat to allow easier or more free use of the power.'
					],
					'The Empress (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'Power involves multiple people, or has an aspect/mechanism which is based on granting understanding or insight (e.g, Tattletale, Codex\'s Thinker side effect). Alternatively, it requires multiple people or some amount of analysis to work properly.'
					],
					'The Emperor (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Hierophant (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Lovers (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Chariot (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ' focus on abrading the power of others away from the world and may be effective against teams or groups.'
					],
					'Strength (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Hermit (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'Wheel of Fortune (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'Justice (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'the power has a large amount of leeway in the way it manifests. Whether its through shape, duration, or even a complete change of effect, Reversed Justice powers are very versatile in their own right. However, the sheer level of possibility with these powers means that an agent typically ends up managing the broad level effects of a power instead of the minutiae, leaving the parahuman to figure out the intricacies of application and experimentation.'
					],
					'The Hanged Man (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ' power is diffused over a large area, whether it affects multiple people or a more physically defined range, it has a low powered effect. Extended periods in this area will permanently affect the targets within it.'
					],
					'Death (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'has to have some means of preventing death, but at a cost - ie cryostasis, zombies, cyborgs, Uaine Glaistig etc. / focused on stopping or incapacitating things.'
					],
					'Temperance (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'the power tends towards groups, it may have strict rules to follow, or need you to do certain things for it to unlock.'
					],
					'The Devil (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'the power has an automatic quality to it.  If reversed, the automatic quality comes with negative side effects to the user.'
					],
					'The Tower (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Star (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => 'could be a power that seems outwardly powerful and impressive, but that harbors a weakness or two.'
					],
					'The Moon (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The Sun (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'Judgement (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					],
					'The World (Merkstave)' => [
						'image' => '',
						'name' => '',
						'description' => ''
					]
				]
			];
		}
	}
?>