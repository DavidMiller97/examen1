<?php require_once 'templates/header.php'; ?>
<h2 class="text-indigo-600 text-bold text-3xl mb-5">Formularios</h2>
<div id="mili-onza-form" class="p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Conversor</h3>
	<form action="converter.php" class="flex flex-col" id="formulario">
		<label for="cantidad" class="text-black text-xl mt-5 mb-5">Cantidad:</label>
		<input type="number" step="any" placeholder="Mililitros" name="cantidad" id="cantidad" class="border rounded-md w-full text-gray-500">
		<label for="option" class="text-black text-xl mt-5 mb-5">Selecciona una opcion:</label>
		<select name="option" id="option" class="border rounded-md w-full text-gray-500">
			<option value="mili-onza">Mililitros a onzas fluidas</option>
			<option value="metro-yarda">Metros a yardas</option>
			<option value="gramo-libra">Gramos a libras</option>
			<option value="cel-far">Celcius a Farenheit</option>
			<option value="kilo-milla">Kilometros a millas</option>
			<option value="peso-libra">Pesos a libras esterlinas</option>
		</select>
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>
<?php require_once 'templates/footer.php'; ?>
