@include('header')

<h1>Game 21</h1>

<p>Let's play!</p>

<form method="POST" class="game21-form" action="{{ url('/game21initiate') }}">
    @csrf
    <label for="oneortwo">Number of dice in each roll: </label>
    <select name="oneortwo">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
    </select>
    <input type="submit" name="startgame" value="Start!" class="submit">
</form>

@include('footer')
