@extends('Wireframes.layout')
@section('content')
<br/>
<div class="container animated fadeIn" style="border:1px solid black;height:550px;width:1140px;">
&nbsp;&nbsp;&nbsp;&nbsp;<h1>Reset Password</h1><br/>
<div class="col-sm-2"></div>
<div class="col-md-5" style="border:1px solid black;padding:20 30 20 30;">
<form>
  <div class="form-group" style="margin-left:20px;">
    <label for="pass">New Password</label>
    <input type="password" class="form-control inputs" id="email" style="width:358px;">
  </div>
  <div class="form-group" style="margin-left:20px;">
    <label for="repass">Re-enter New Password</label>
    <input type="password" class="form-control inputs" id="email" style="width:358px;">
  </div>
  <div class="form-group">
  <button class="myButtonsent" style="margin-left:79px;">Reset Password</button><br/><br/>
  <button class="myButtonsent" style="margin-left:120px;">Cancel</button>
  </div>
</form>
</div>
</div>

<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
</body>
</html>
@stop