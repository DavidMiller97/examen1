<?php

if(isset($_POST)){

	$cantidad = $_POST['cantidad'] ? $_POST['cantidad'] : '';
	$option = $_POST['option'] ? $_POST['option'] : '';

	if(empty($cantidad) || empty($option)){

		echo json_encode('Todos los campos son obligatorios!');
	}else{

		if(!is_numeric($cantidad)){

			echo json_encode('Valor no valido!');
		}else{
			convertir($cantidad, $option);
		}
	}

}else{

	echo json_encode('Error en el formulario');

}

function convertir($cantidad, $option){

	switch($option){

		case 'mili-onza':
			$resultado = round(floatval($cantidad) / 29.57,8);
			echo json_encode("$cantidad mililitros es igual a $resultado onzas");
		break;
		case 'metro-yarda':
			$resultado = round(floatval($cantidad) * 1.0936,8);
			echo json_encode("$cantidad metros es igual a $resultado yardas");
		break;
		case 'gramo-libra':
			$resultado = round(floatval($cantidad) / 454, 8);
			echo json_encode("$cantidad gramos es igual a $resultado libras");
		break;
		case 'cel-far':
			$resultado = round((floatval($cantidad) * 1.8) + 32,8);
			echo json_encode("$cantidad en celcius son $resultado en Farenheit");
		break;
		case 'kilo-milla':
			$resultado = round(floatval($cantidad) * 0.62137,8);
			echo json_encode("$cantidad kilometros son $resultado millas");
		break;
		case 'peso-libra':
			$resultado = round(floatval($cantidad) * 0.038, 8);
			echo json_encode("$cantidad pesos son $resultado libras esterlinas");
		break;
		default:
			echo json_encode("Error en la conversion");
		break;

	}

}
