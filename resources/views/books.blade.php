@include('header')

<h1>Books</h1>

<div class="books-wrapper">
@foreach ($books as $book)
    <div class="book-wrapper">
        <p><strong>{{ $book['title'] }}</strong></p>
        <img src="/img/{{ $book['image'] }}" class="book-image">
        <p>Author: {{ $book['author'] }}</p>
        <p>ISBN: {{ $book['isbn'] }}</p>
    </div>
@endforeach
</div>

@include('footer')
