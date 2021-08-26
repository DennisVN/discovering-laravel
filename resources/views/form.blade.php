@extends('template')
@extends ('header')
@extends ('footer')

@section ('body')
<div class="form-container">
  <div class="text-container">
    <h2>✈️ If you ain't got no money take yo' broke ass home✈️ <br>
        You say: If you ain't got no money take yo'broke ass home<br>
        🥂G-L-A-M-O-R-O-U-S🥂<br> yeah G-L-A-M-O-R-O-U-S
      </h2><br>
  </div>
  <div class="input-container">
    <form method="post" action="register"> 
      @csrf
      <label for="form">Who created this highly intelligent masterpiece ?</label>
      <br>
      <input type="text" name="Fergie" id="Fergie" placeholder="Fergalicious" />
      <input type="submit" value="register">
    </form>
  </div>
</div>

@endsection