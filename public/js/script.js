$(document).ready(function () {
var oro;
var cantidadGr;
var cantidadGrLong;
$('#btnSelectColor').click(function (e) {
	calcular();
})
function calcular() {
	var color = $("#color").val();
	var kilates = $("#kilates").val();
	cantidadGr = parseFloat($("#cantidadGr").val());
	cantidadGrLong = parseFloat($("#cantidadGr").val().length);
	oro = [0.833* cantidadGr,0.75* cantidadGr,0.666* cantidadGr,0.583* cantidadGr,0.5* cantidadGr,0.416* cantidadGr,0.25* cantidadGr];
	$("#oro").removeClass("hide");
	switch(color){
		case "1":
		$("#cobre").addClass("hide");
		$("#oro" ).removeClass("hide");
		$("#plata").removeClass("hide");
		$("#paladio" ).removeClass("hide");
			switch(kilates){
				case "20":
					mostrarOroBlanco(0);
				break;
				case "18":
					mostrarOroBlanco(1);
				break;
				case "16":
					mostrarOroBlanco(2);
				break;
				case "14":
					mostrarOroBlanco(3);
				break;
				case "12":
					mostrarOroBlanco(4);
				break;
				case "10":
					mostrarOroBlanco(5);
				break;
				case "6":
					mostrarOroBlanco(6);
				break;
			}
		break;
		case "2":
		$("#cobre").removeClass("hide");
		$("#plata").addClass("hide");
		$("#paladio" ).addClass("hide");
		    switch(kilates){
		        case "20":
					mostrarOroRojo(0);
				break;
				case "18":
					mostrarOroRojo(1);
				break;
				case "16":
					mostrarOroRojo(2);
				break;
				case "14":
					mostrarOroRojo(3);
				break;
				case "12":
					mostrarOroRojo(4);
				break;
				case "10":
					mostrarOroRojo(5);
				break;
				case "6":
					mostrarOroRojo(6);
				break;
		    }
		break;
		case "3":
		$("#cobre").removeClass("hide");
		$("#plata").removeClass("hide");
		$("#paladio" ).addClass("hide");
		switch(kilates){
		    case "20":
				mostrarOroRosado(0);
			break;
			case "18":
				mostrarOroRosado(1);
			break;
			case "16":
				mostrarOroRosado(2);
			break;
			case "14":
				mostrarOroRosado(3);
			break;
			case "12":
				mostrarOroRosado(4);
			break;
			case "10":
				mostrarOroRosado(5);
			break;
			case "6":
				mostrarOroRosado(6);
			break;
		}
		break;
		case "4":
		$("#cobre").removeClass("hide");
		$("#plata").removeClass("hide");
		$("#paladio" ).addClass("hide");
		switch(kilates){
		    case "20":
				mostrarOroAmarillo(0);
			break;
			case "18":
				mostrarOroAmarillo(1);
			break;
			case "16":
				mostrarOroAmarillo(2);
			break;
			case "14":
				mostrarOroAmarillo(3);
			break;
			case "12":
				mostrarOroAmarillo(4);
			break;
			case "10":
				mostrarOroAmarillo(5);
			break;
			case "6":
				mostrarOroAmarillo(6);
			break;
		}
		break;
		case "5":
		$("#cobre").addClass("hide");
		$("#plata").addClass("hide");
		$("#paladio" ).addClass("hide");
		switch(kilates){
		    case "20":
				mostrarOroVerdoso(0);
			break;
			case "18":
				mostrarOroVerdoso(1);
			break;
			case "16":
				mostrarOroVerdoso(2);
			break;
			case "14":
				mostrarOroVerdoso(3);
			break;
			case "12":
				mostrarOroVerdoso(4);
			break;
			case "10":
				mostrarOroVerdoso(5);
			break;
			case "6":
				mostrarOroVerdoso(6);
			break;
		}
		break;
		case "6":
		$("#cobre").addClass("hide");
		$("#plata").removeClass("hide");
		$("#paladio" ).addClass("hide");
		switch(kilates){
		    case "20":
				mostrarOroVerde(0);
			break;
			case "18":
				mostrarOroVerde(1);
			break;
			case "16":
				mostrarOroVerde(2);
			break;
			case "14":
				mostrarOroVerde(3);
			break;
			case "12":
				mostrarOroVerde(4);
			break;
			case "10":
				mostrarOroVerde(5);
			break;
			case "6":
				mostrarOroVerde(6);
			break;
		}
		break;
	}
}

function EleBlanco(kilates) {
	return (((cantidadGr-oro[kilates])/2).toFixed(2));
}
function mostrarOroBlanco(k) {
	$("#oroC").html(oro[k]+' <b>gr</b>');
	$("#plataC").html(EleBlanco(k)+' <b>gr</b>');
	$("#paladioC").html(EleBlanco(k)+' <b>gr</b>');
}

function EleRojo(kilates) {
	return (((cantidadGr-oro[kilates])).toFixed(2));
}
function mostrarOroRojo(k) {
	$("#oroC").html(oro[k]+' <b>gr</b>');
	$("#cobreC").html(EleRojo(k)+' <b>gr</b>');
}

// implementar formulña para oro rosado------------

function EleRosadoCobre(kilates) {
	return ((EleRosadoPlata(kilates)*2).toFixed(2));
}
function EleRosadoPlata(kilates) {
	return ((((cantidadGr-oro[kilates])/3)).toFixed(2));
}
function mostrarOroRosado(k) {
	$("#oroC").html(oro[k]+' <b>gr</b>');
	$("#plataC").html(EleRosadoPlata(k)+' <b>gr</b>');
	$("#cobreC").html(EleRosadoCobre(k)+' <b>gr</b>');
}

function EleAmarillo(kilates) {
	return (((cantidadGr-oro[kilates])/2).toFixed(2));
}
function mostrarOroAmarillo(k) {
	$("#oroC").html(oro[k]+' <b>gr</b>');
	$("#plataC").html(EleAmarillo(k)+' <b>gr</b>');
	$("#cobreC").html(EleAmarillo(k)+' <b>gr</b>');
}

// Implementar la formula para oro verdoso---------------

function EleVerdoso(kilates) {
	return (((oro[kilates])).toFixed(2));
}
function mostrarOroVerdoso(k) {
	$("#oroC").html(oro[k]+' <b>gr</b>');
	$("#plataC").html(EleVerdoso(k)+' <b>gr</b>');
	$("#cobreC").html(EleVerdoso(k)+' <b>gr</b>');
}

function EleVerde(kilates) {
	return (((cantidadGr-oro[kilates])).toFixed(2));
}
function mostrarOroVerde(k) {
	$("#oroC").html(oro[k]+' <b>gr</b>');
	$("#plataC").html(EleVerde(k)+' <b>gr</b>');
}
});
//$( "pone el id del elemento para ocultarlo" ).addClass("hide");