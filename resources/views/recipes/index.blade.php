<!-- resources/views/recipes/index.blade.php -->
@if (!is_null($recipes))
@foreach ($recipes as $recipe)
    <h2>{{ $recipe['strMeal'] }}</h2>
    <img src="{{ $recipe['strMealThumb'] }}" alt="{{ $recipe['strMeal'] }}" width="200">
    <p>Category: {{ $recipe['strCategory'] }}</p>
    <a href="{{ route('recipes.show', $recipe['idMeal']) }}">View Recipe</a>
    <hr>
@endforeach
@else
    <p>Receitas não encontradas.</p>
@endif
