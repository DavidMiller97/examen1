<?php require_once 'templates/header.php'; ?>
<h2 class="text-indigo-600 text-bold text-3xl mb-5">Formularios</h2>
<h3 class="mb-5">Selecciona uno:</h3>
<ul class="list-disc">
	<li id="mili-onza" class="text-black hover:text-indigo-400 cursor-pointer">Mililitros a onzas fluidas</li>
	<li id="metro-yarda" class="text-black hover:text-indigo-400 cursor-pointer">Metros a yardas</li>
	<li id="gramo-libra" class="text-black hover:text-indigo-400 cursor-pointer">Gramos a libras</li>
	<li id="cel-far" class="text-black hover:text-indigo-400 cursor-pointer">Celcius a Farenheit</li>
	<li id="km-milla" class="text-black hover:text-indigo-400 cursor-pointer">Kilometros a millas</li>
	<li id="peso-libra" class="text-black hover:text-indigo-400 cursor-pointer">Pesos a libras esterlinas</li>
</ul>
<div id="mili-onza-form" class="form-oculto p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Mililitros a onzas fluidas</h3>
	<form action="converter.php" class="flex flex-col">
		<label for="mililitros" class="text-black text-xl mt-5 mb-5">Mililitros:</label>
		<input type="number" placeholder="Mililitros" name="mililitros" class="border rounded-md w-full text-gray-500">
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>

<div id="metro-yarda-form" class="form-oculto p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Metros a Yardas</h3>
	<form action="converter.php" class="flex flex-col">
		<label for="metros" class="text-black text-xl mt-5 mb-5">Metros:</label>
		<input type="number" placeholder="Metros" name="metros" class="border rounded-md w-full text-gray-500">
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>

<div id="gramo-libra-form" class="form-oculto p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Gramos a libras</h3>
	<form action="converter.php" class="flex flex-col">
		<label for="gramos" class="text-black text-xl mt-5 mb-5">Gramos:</label>
		<input type="number" placeholder="Gramos" name="gramos" class="border rounded-md w-full text-gray-500">
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>

<div id="celcius-faren-form" class="form-oculto p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Celcius a Farenheit</h3>
	<form action="converter.php" class="flex flex-col">
		<label for="celcius" class="text-black text-xl mt-5 mb-5">Celcius:</label>
		<input type="number" placeholder="Celcius" name="celcius" class="border rounded-md w-full text-gray-500">
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>

<div id="kilo-milla-form" class="form-oculto p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Kilometros a Millas</h3>
	<form action="converter.php" class="flex flex-col">
		<label for="kilo" class="text-black text-xl mt-5 mb-5">Kilometros:</label>
		<input type="number" placeholder="Kilometros" name="kilo" class="border rounded-md w-full text-gray-500">
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>

<div id="peso-libra-form" class="form-oculto p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Pesos a libras Esterlinas</h3>
	<form action="converter.php" class="flex flex-col">
		<label for="pesos" class="text-black text-xl mt-5 mb-5">Pesos:</label>
		<input type="number" placeholder="Pesos" name="pesos" class="border rounded-md w-full text-gray-500">
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>

<?php require_once 'templates/footer.php'; ?>
