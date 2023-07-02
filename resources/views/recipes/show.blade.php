<!-- resources/views/recipes/show.blade.php -->
<h2>{{ $recipe['strMeal'] }}</h2>
<img src="{{ $recipe['strMealThumb'] }}" alt="{{ $recipe['strMeal'] }}" width="300">
<p>Category: {{ $recipe['strCategory'] }}</p>
<p>Area: {{ $recipe['strArea'] }}</p>
<p>Instructions: {{ $recipe['strInstructions'] }}</p>
