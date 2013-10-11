/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'MacTown\'">' + entity + '</span>' + html;
	}
	var icons = {
			'rdm-medkit' : '&#xf0fa;',
			'rdm-suitcase' : '&#xf0f2;',
			'rdm-linkedin-sign' : '&#xf08c;',
			'rdm-twitter-sign' : '&#xf081;',
			'rdm-facebook-sign' : '&#xf082;',
			'rdm-envelope' : '&#xf003;',
			'rdm-sessions' : '&#xe000;',
			'rdm-service' : '&#xe001;',
			'rdm-phone' : '&#xf095;',
			'rdm-place' : '&#xf220;',
			'rdm-envelope-alt' : '&#xf0e0;',
			'rdm-map-marker' : '&#xf041;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/rdm-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};