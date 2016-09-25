@extends('Wireframes.layout')
@section('content')
<br/>
</div> <div class="container" style="width:1140px;border:1px solid black;">
            &nbsp;&nbsp;&nbsp;<h1 class="animated fadeInLeftBig">My Profile</h1><br/><br/>
                <div class="col-md-9">
				<form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-sm-2" for="First Name">First Name</label>
              <div class="col-sm-3">
                <input type="text" class="form-control inputs" id="FirstName" placeholder="First Name" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="Last Name">Last Name</label>
              <div class="col-sm-3">
                <input type="text" class="form-control inputs" id="LastName" required placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Gender</label>
              <div class="col-sm-3">
                <label class="radio-inline">
                <input type="radio" name="male" checked="checked" >Male
                </label>
                <label class="radio-inline">
                <input type="radio" name="female">Female
                </label>
              </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="Dare of Birth">Date of Birth</label>
              <div class="col-sm-3">
            <input type="text" id="DOB" required class="span2 datepicker inputs" placeholder="      /     / "  
           name="date"> <br>         
            </div>
        </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="contactno">Contact Number</label>
              <div class="col-sm-3">
                <input type="text" class="form-control inputs" id="email" placeholder="Enter Contact no." required >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email Address</label>
              <div class="col-sm-3">
                <input type="email" class="form-control inputs" id="email" placeholder="Enter email" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password</label>
              <div class="col-sm-3">
                <input type="password" class="form-control inputs" id="pwd" placeholder="Enter password" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Re-enter Password</label>
              <div class="col-sm-3">
                <input type="password" class="form-control inputs" id="pwd" placeholder="Re-enter password" required>
              </div>
            </div>
			</div><!--col-md-8 ka hai-->
			<br/>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-5">
			  <br/>
                
				<button type="submit" class="myButtonsent">Change Password</button>
              </div>
            </div>
			<div class="col-md-4">
            <div class="form-group" style="position:relative;left:500px; top:-685px;" >
              <label class="control-label col-sm-2" for="First Name">Address</label>
              <div class="col-sm-4">
                <textarea class="form-control inputs" id="FirstName" placeholder="Address" rows="5" cols="10"></textarea> 
              </div>
			  <div class="form group" style="position:relative;right:180px;top:200px;">
			  <label class="control-label col-sm-2" for="First Name">Pincode</label>
			  <div class="col-sm-3" >
                <input type="text" class="form-control inputs" id="pincode"> 
              </div>
            </div>
			</div>
			
			<div class="form group" style="position:relative;top:-930px;left:830px;">
			<div class="col-sm-offset-4 col-sm-5">
                <button class="myButtonsent">Edit</button>
              </div>
            </div>
			</div><!--col-md-4-->
          </form>

            </div>
           

			<script src="js/jquery.min.js" ></script>
            <script src="js/bootstrap.min.js"></script>
			      <script>
                $(function(){
   $('.datepicker').datepicker({
      format: 'dd-mm-yyyy'
    });
});
            </script>
      
</body>
</html>
@stop