var totalTipoLimpeza = 0;
var totalTipoBanheiro = 0;
var totalTipoArea = 0;

function onCkbtn1() {
    totalTipoLimpeza = 110.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn2() {
    totalTipoLimpeza = 110.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn3() {
    totalTipoLimpeza = 110.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn4() {
    totalTipoLimpeza = 110.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn5() {
    totalTipoBanheiro = 20.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn6() {
    totalTipoBanheiro = 40.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn7() {
    totalTipoBanheiro = 60.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn8() {
    totalTipoBanheiro = 80.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn9() {
    totalTipoBanheiro = 100.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn10() {
    totalTipoBanheiro = 120.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn11() {
    totalTipoBanheiro = 140.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn12() {
    totalTipoArea = 20.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn13() {
    totalTipoArea = 40.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn14() {
    totalTipoArea = 60.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn15() {
    totalTipoArea = 80.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn16() {
    totalTipoArea = 100.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn17() {
    totalTipoArea = 120.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

function onCkbtn18() {
    totalTipoArea = 140.00;
    total = totalTipoLimpeza + totalTipoBanheiro + totalTipoArea;
    id('campo4').value = 'R$ ' + total;
}

String.prototype.formatMoney = function() {
    var v = this;
    if(v.indexOf('.') === -1) {
        v = v.replace(/([\d]+)/, "$1,00");
    }

    v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
    v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
    v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");

    return v;
};

function id( el ){
    return document.getElementById( el );
}