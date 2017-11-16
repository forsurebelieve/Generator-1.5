<?php

	function controller_Home() {
		$page = new \ACWPD\Helpers\Templater('main.frame');
		$page->setBody('home');
		$output = $page->getHTML();
		echo $output;
	}

	function controller_List() {
		$page = new \ACWPD\Helpers\Templater('main.frame');
		$page->setBody('list');
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Credits() {
		$page = new \ACWPD\Helpers\Templater('main.frame');
		$page->setBody('credits');
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Multi($count) {
		$page = new \ACWPD\Helpers\Templater('main.frame');
		$output = '';
		for ($i=0; $i < $count['count']; $i++) {
			$page->appendToBody('multi');
		}
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Load($load) {
		$page = new \ACWPD\Helpers\Templater('main.frame');
		$page->setBody('load',$load);
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Load_Small($load) {
		$page = new \ACWPD\Helpers\Templater('ajax.frame');
		$page->setBody('load.small',$load);
		$output = $page->getHTML();
		echo $output;
	}
/*
	function controller_Load_AJAX($id) {
		$page = new \ACWPD\Helpers\Templater('ajax.frame');
		$page->setBody('home');
		$output = $page->getHTML();
		echo $output;
	}
*/
	function controller_Donate() {
		$page = new \ACWPD\Helpers\Templater('main.frame');
		$page->setBody('donate');
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Reroll_All() {
		$page = new \ACWPD\Helpers\Templater('ajax.frame');
		$page->setBody('home');
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Reroll_Type() {
		$page = new \ACWPD\Helpers\Templater('ajax.frame');
		$page->setBody('type.only');
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Reroll_Flavor() {
		$page = new \ACWPD\Helpers\Templater('ajax.frame');
		$page->setBody('flavor.only');
		$output = $page->getHTML();
		echo $output;
	}

	function controller_Reroll_Twist() {
		$page = new \ACWPD\Helpers\Templater('ajax.frame');
		$page->setBody('twist.only');
		$output = $page->getHTML();
		echo $output;
	}
