/*
 * Provides ajax tools for ACWPD Projects
 * Feel free to use this in your projects! Just provide Attribution by keeping this block in place!
 *
 * This is version 1.0
 *
 * For the latest version, please visit: https://github.com/farfromunique/ACWPD_Tools
 *
 * This code is copyright (C) 2019 Aaron Coquet / ACWPD
 */

function updateFormWithPowerData(e) {
	/* 
		Updates a form field with data parsed from the current DOM, detailing the power.
		
	*/
	let a = document.querySelectorAll('.bigImages input.p_gen');
	let input_ = document.createElement('input');
	input_.name = 'power';
	input_.type = 'hidden';

	a.forEach(function (e) {
		let e_type = e.name.slice(0,e.name.indexOf('_'));
		input_.value += e_type+':'+e.value+';';
	});
	while (keys.children[1]) {
		keys.children[1].remove();
	}
	keys.appendChild(input_);
	console.log('done!');
}

document.addEventListener('load',updateFormWithPowerData());

function enableTrashButtons() {
	document.querySelectorAll('button.remove').forEach(function(e){e.addEventListener('click',function(){this.parentNode.parentNode.remove();});});
}

document.addEventListener('load',enableTrashButtons());

$(document).on('elementAdded.ic', function(){
	updateFormWithPowerData();
	enableTrashButtons();
});
