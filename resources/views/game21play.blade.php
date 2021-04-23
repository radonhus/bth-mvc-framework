@include('header')

<h1>Game 21</h1>

<p>Your latest roll:</p>

<p class="dice-utf8">
@foreach ($data['diceImages'] as $value)
    <i class="{{ $value }}"></i>
@endforeach
</p>

<p {{ $data['hideOnGameOver'] }}>Your accumulated points: {{ $data['userSum'] }}</p>

<p>{{ $data['message'] }}</p>

<form method="post" class="game21-form" action="{{ url('/game21') }}" {{ $data['hideOnGameOver'] }}>
    @csrf
    <label for="rollagain">Roll again?</label>
    <input type="submit" name="rollagain" value="Roll again" class="submit">
    <input type="submit" name="stop" value="Stop" class="submit">
</form>

<h2 {{ $data['showOnGameOver'] }}>New round?</h2>
<p {{ $data['showOnGameOver'] }}>{{ $data['standings'] }}</p>
<form method="post" class="game21-form" action="{{ url('/game21initiate') }}" {{ $data['showOnGameOver'] }}>
    @csrf
    <label for="oneortwo">Number of dice: </label>
    <select name="oneortwo">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
    </select>
    <br>
    <input type="submit" name="startgame" value="New round" class="submit">
    <input type="submit" name="clearstandings" value="Clear standings + new round" class="submit">
</form>

@include('footer')
