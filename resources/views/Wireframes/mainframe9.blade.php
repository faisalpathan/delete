@extends('Wireframes.layout')
@section('content')
<br/>

<div class="container" style="border:1px solid black;height:550px;width:1140px;">
&nbsp;&nbsp;&nbsp;&nbsp;<h1>Sign in</h1><br/>
<div class="col-sm-2"></div>
<div class="col-md-5" style="border:1px solid black;padding:20 30 20 30;">
<form>
  <div class="form-group" style="margin-left:20px;">
    <label for="pass">Username</label>
    <input type="text" class="form-control inputs" id="email" style="width:358px;">
  </div>
  <div class="form-group" style="margin-left:20px;">
    <label for="repass">Password</label>
    <input type="text" class="form-control inputs" id="email" style="width:358px;">
  </div>
  <div class="form-group">
  <button class="myButtonsent" style="margin-left:135px;">Sign in</button><br/><br/>
  <h4 style="margin-left:125px;text-decoration:underline;"><a href="#">Forgot Password ?</a></h4>
  </div>
</form>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
</body>
</html>
@stop