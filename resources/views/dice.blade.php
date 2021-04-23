@include('header')

<h1>Dice</h1>

<div class="yatzy-dice">
    <div class="onedice">
        <img src="{{ asset('/img/' . $dice . '.png') }}" class="dice-image"><br>
    </div>
</div>

<form>
    <input type="submit" name="roll" value="Roll the dice!" class="submit">
</form>

@include('footer')
