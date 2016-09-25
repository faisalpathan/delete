@extends('Wireframes.layout')
@section('content')
<br/>

<div class="container" style="border:1px solid black;height:550px;width:1140px;">
&nbsp;&nbsp;&nbsp;&nbsp;<h1>Reset Password</h1><br/><br/>
<div class="col-sm-2"></div>
<div class="col-md-5" style="border:1px solid black;padding:20 40 20 40;">
<form>
  <div class="form-group"><br/>
    <label for="email">Email address:</label>
    <input type="text" class="form-control inputs" id="email" style="width:370px;">
  </div><br/>
  <div class="form-group">
  <button class="myButtonsent" style="width:370px;">Send me reset password link</button>
  </div>
</form>
</div>
</div>

<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
</body>
</html>
@stop