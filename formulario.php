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
<div class="form-oculto p-10 border rounded-md shadow bg-white flex flex-col mt-5">
	<h3 class="text-indigo-500 font-bold text-2xl">Mililitros a onzas fluidas</h3>
	<form action="converter.php" class="flex flex-col">
		<label for="mililitros" class="text-black text-xl mt-5 mb-5">Mililitros:</label>
		<input type="number" placeholder="Mililitros" name="mililitros" class="border rounded-md w-full text-gray-500">
		<input type="submit" value="Enviar" class="bg-indigo-600 text-white w-6/12 hover:bg-indigo-500 mt-5">
	</form>
</div>



<?php require_once 'templates/footer.php'; ?>
