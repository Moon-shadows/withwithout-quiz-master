<!DOCTYPE html>
<html>
<style>
.democlass {
  color: red;
}
</style>
<a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" 
tabindex="-1" id="user-menu-item-1">Settings</a>
<body>
<h1 id="myH1">The Element Object</h1>
<h2>The setAttribute() Method</h2>

<p>Click "Add Class" to add a class attribute to the h1 element:</p>

<button onclick="myFunction()">Add Class</button>

<script>
function myFunction() {
  document.getElementById("myH1").setAttribute("class", "democlass"); 
}
</script>

</body>
</html>

Resultat:
The Element Object
The setAttribute() Method

Click "Add Class" to add a class attribute to the h1 element:

Add class (button)   Rubriken (The Element Object blir röd när man trycker på knappen)
