@extends('home')
@section ('form')

<h2>✈️ If you ain't got no money take yo' broke ass home✈️ <br>
    You say: If you ain't got no money take yo'broke ass home<br>
    🥂G-L-A-M-O-R-O-U-S🥂<br> yeah G-L-A-M-O-R-O-U-S</h2><br>
<form method="post" action="register"> 
    @csrf
  <div class="form-group">
    <label for="form">Who created this highly intelligent masterpiece ?</label>
    <input type="text" name="Fergie" id="Fergie" placeholder="Fergalicious" />
    <input type="submit" value="Signup">
  </div>
</form>

@endsection