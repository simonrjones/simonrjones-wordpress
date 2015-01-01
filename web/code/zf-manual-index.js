/* Bookmarklet is packed via Dean Edward's JS packer - http://dean.edwards.name/packer/ */
javascript:ZF();
function ZF() {
    var m = document.getElementById('manual-container');
    var h = C('h2');
    h.innerHTML = "Index of Contents";
    var l = C('ul');
    var d = m.getElementsByTagName('div');
    var c = d.length;
    for (var y=0; y<c; y++) {
        if (d[y].className == 'section') {
            var i = C('li');
            var a = C('a');
            S(a, 'href', '#'+d[y].id);
            a.innerHTML = d[y].getElementsByTagName('h1')[0].innerHTML;
            A(i, a);
            A(l, i);
        }
    }
    var p = m.getElementsByTagName('hr')[0];
    m.insertBefore(C('hr'), p);
    m.insertBefore(h, p);
    m.insertBefore(l, p);
}
function C(n) {
	return document.createElement(n);
}
function S(e, n, v) {
	e.setAttribute(n, v);
}
function A(e, c) {
	e.appendChild(c);
}