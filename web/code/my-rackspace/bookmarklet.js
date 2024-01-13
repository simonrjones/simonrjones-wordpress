/* Bookmarklet is packed via Dean Edward's JS packer - http://dean.edwards.name/packer/ */
javascript: RD(); 
function RD() {
    if (!window.location.toString().match(/my\.rackspace\.com/i)) {
        window.location.href = 'https://my.rackspace.com';
        return;
    } 
    var ac = new Array(); 
    /* Enter multiple accounts here */
    ac[012345] = 'My Account name';
    ac[678910] = 'My other account name';
    var d = C('div');
    S(d, 'id', 'rsdiv');
    S(d, 'class', 'myrs-box');
    var f = C('form');
    S(f, 'class', 'myrs-form');
    var h = C('h3');
    T(h, 'Choose account to login with');
    A(f, h);
    var s = C('select');
    S(s, 'id', 'rsid');
    for (var id in ac) {
        var o = C('option');
        S(o, 'value', id);
        T(o, ac[id]);
        A(s, o);
    }
    A(f, s);
    var b = C('input');
    S(b, 'type', 'submit');
    S(b, 'value', 'update');
    S(b, 'onclick', 'javascript:RL();return false');
    A(f, b);
    A(d, f);
    drs = G('myrs-main');
    drs.insertBefore(d, drs.firstChild);
}
function C (n) {
    return document.createElement(n);
}
function S (e, n, v) {
    e.setAttribute(n, v);
}
function T (e, t) {
    e.textContent = t;
}
function A (e, c) {
    e.appendChild(c);
}
function G (i) {
    return document.getElementById(i);
}
function RL() {
    var ac = G('rsid').value;
    var d = G('rsdiv');
    d.parentNode.removeChild(d);
    var a = G('account');
    a.value = ac;
    var u = G('username');
    /* Enter username here */
    u.value = 'myUsername';
}