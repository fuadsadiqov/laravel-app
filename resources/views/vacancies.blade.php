@foreach($vacancies as $vacancy)
{{ $vacancy->text }} <br>
@endforeach

{{ __('main.welcome')}} <br>

@foreach($fruits as $fruit)
Title: {{ $fruit->title }} <br>
Text: {{ $fruit->text }} <br>
@endforeach