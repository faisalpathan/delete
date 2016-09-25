@extends('Wireframes.layout')
@section('content')
<br/>

        <div class="container" style="border :1px solid black; padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;">
        <div class="container" style=" ">
        <h1>Xiaomi Redmi Note 3</h1>
        <div class="col-md-5" style="margin-bottom:20px; margin-left:-16px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/topselling1.jpg" width="350px" height="380px"></div>
        <div class="col-md-3" style="margin-left:100px;">
            <h1>Order now</h1><br><br>
            <style>
                #errmsg
                {
                color: red;
                }
            </style>
           
            <p>Quantity : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input style="width:45px; height:30px;" type="text" class="inputs" value="1" id="quantity" size="2" min="1"><span id="errmsg"></span>
			&nbsp;<button id="plus" >+</button>&nbsp;<button id="minus">-</button></p><br>
            <p>Availability : &nbsp;&nbsp;<select class="selectpicker show-tick option3">
                      <option style="color:lightgreen">In Stock</option>
                      <option style="color:red">Out of Stock</option></select><br><br><br>
            </p><p>Price : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs 12000/-</p><br>
        </div>
        <div class="col-md-3" style="padding-bottom:7px; padding-left:20px;">
        <h2>Payment Options</h2>
        <form><br>
    <div class="radio">
      <label><input type="radio" name="optradio">Net Banking</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Credit Card</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Debit Card</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Cash On Delivery</label>
    </div>
  </form><br>
     <button class="myButton" style="margin-left:27px;margin-top:26px;">Checkout</button>
        </div>    
        </div>
    <br><br>
	
    <div class="container">
	<div class="row">
		<div class="col-md-12">
    	    <div class="well"> 
                <div id="myCarousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row-fluid">
                	  <div class="col-md-3"><a href="#x" class="thumbnail">
					  <img class="anim" src="images/slider1.png" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="col-md-3"><a href="#x" class="thumbnail">
					  <img class="anim" src="images/slider1.png" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="col-md-3"><a href="#x" class="thumbnail">
					  <img class="anim" src="images/slider1.png" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="col-md-3"><a href="#x" class="thumbnail">
					  <img class="anim" src="images/slider1.png" alt="Image" style="max-width:100%;" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row-fluid">
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider2.png" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider2.png" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider2.png" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider2.png" alt="Image" style="max-width:100%;" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row-fluid">
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider3.png" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider3.png" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider3.png" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="col-md-3"><a href="#x" class="thumbnail">
						<img class="anim" src="images/slider3.png" alt="Image" style="max-width:100%;" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                </div><!--/carousel-inner-->
                 
                <div><a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
                </div></div><!--/myCarousel-->
                 
            </div><!--/well-->   
		</div>
	</div>
</div>
   <br><br>
   <div class="container">
   <ul class="nav nav-tabs"> 
            <li class="active">
                <a href="#tab1" data-toggle="tab">Specifications</a>
            </li>             
            <li></li>             
            <li></li>             
            <li></li>             
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <table style="width: 97.5452%;" border="1px dotted black" class="table table-striped table-bordered">
<tbody>
<tr class="animtable" style="height: 36px;">
<td style="height: 36px; width: 44%;background-color: #f8f8ff;">&nbsp;OS</td>
<td style="height: 36px; width: 80.8611%;">Android v5.1 (Lollipop&nbsp;</td>
</tr>
<tr style="height: 36px;" class="animtable">
<td style="height: 36px; width: 44%;background-color: #f8f8ff;">&nbsp;RAM</td>
<td style="height: 36px; width: 80.8611%;">&nbsp;3 GB</td>
</tr>
<tr style="height: 34px;" class="animtable">
<td style="height: 34px; width: 44%;background-color: #f8f8ff;">&nbsp;Item Weight&nbsp;</td>
<td style="height: 34px; width: 80.8611%;">&nbsp;163 g</td>
</tr>
<tr style="height: 38px;" class="animtable">
<td style="height: 38px; width: 44%;background-color: #f8f8ff;">&nbsp;Product Dimensions</td>
<td style="height: 38px; width: 80.8611%;">15 x 0.9 x 7.6 cm</td>
</tr>
<tr style="height: 38px;" class="animtable">
<td style="height: 38px; width: 44%;background-color: #f8f8ff;">&nbsp;Item model number</td>
<td style="height: 38px; width: 80.8611%;">&nbsp;Redmi Note 3</td>
</tr>
<tr style="height: 37px;" class="animtable">
<td style="height: 37px; width: 44%;background-color: #f8f8ff;">&nbsp;Wireless communication technologies</td>
<td style="height: 37px; width: 80.8611%;">&nbsp;Bluetooth , WiFi Hotspot</td>
</tr>
<tr style="height: 71px;" class="animtable">
<td style="height: 71px; width: 44%;background-color: #f8f8ff;">&nbsp;Connectivity technologies</td>
<td style="height: 71px; width: 80.8611%;">&nbsp;GSM,(850/900/1800/1900 MHz),3G,WCDMA,(2100/1900/850/900&nbsp;MHz),4G LTE,FDD,(B1/B3/B7/B5/B8),TD-LTE,(B38/B39/B40/B41),GPRS,EDGE,WiFi</td>
</tr>
<tr style="height: 76px;" class="animtable">
<td style="height: 76px; width: 44%;background-color: #f8f8ff;">&nbsp;Special features</td>
<td style="height: 76px; width: 80.8611%;">&nbsp;Dual SIM,GPS,Music Player,Video Player,FM Radio,Light sensor,Compass,Gyroscope,Proximity sensor,Accelerometer,Fingerprint sensor,IR blaster,E-mail</td>
</tr>
<tr style="height: 52px;" class="animtable">
<td style="height: 52px; width: 44%;background-color: #f8f8ff;">&nbsp;Other camera features</td>
<td style="height: 52px; width: 80.8611%;">&nbsp;16MP primary camera with auto focus, flash and 5MP front facing camera</td>
</tr>
<tr style="height: 45px;" class="animtable">
<td style="height: 45px; width: 44%;background-color: #f8f8ff;">&nbsp;Form factor</td>
<td style="height: 45px; width: 80.8611%;">&nbsp;Touchscreen Phone</td>
</tr>
<tr style="height: 30px;" class="animtable">
<td style="height: 30px; width: 44%;background-color: #f8f8ff;">&nbsp;Weight</td>
<td style="height: 30px; width: 80.8611%;">&nbsp;165 grams</td>
</tr>
<tr style="height: 31px;" class="animtable">
<td style="height: 31px; width: 44%;background-color: #f8f8ff;">&nbsp;Color</td>
<td style="height: 31px; width: 80.8611%;">&nbsp;Silver</td>
</tr>
<tr style="height: 31px;" class="animtable">
<td style="height: 31px; width: 44%;background-color: #f8f8ff;">Battery Power Rating</td>
<td style="height: 31px; width: 80.8611%;">4050</td>
</tr>
<tr style="height: 27px;" class="animtable">
<td style="height: 27px; width: 44%;background-color: #f8f8ff;">Whats in the &nbsp;box</td>
<td style="height: 27px; width: 80.8611%;">Handset,Charger and User Guide&nbsp;</td>
</tr>
</tbody>
</table>
            </div>
            </div>
</div>
     <!-- Bootstrap core JavaScript
    ==================================================-->
            <!-- Placed at the end of the document so the pages load faster -->
 <!-- Bootstrap core JavaScript
    ==================================================-->
            <!-- Placed at the end of the document so the pages load faster -->

            
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script>
			$(document).ready(function() {
				$('#myCarousel').carousel({
					interval: 10000
				})
			});
			</script>
			 <script>
            $(document).ready(function()
            {
                var count=1;
                 $("#quantity").keypress(function (e)
                  {
                //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) 
                {
                //display error message
                $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
                }
                });
                $("#plus").click(function()
                {
                     var counter = $('#quantity').val();
                    counter++ ;
                    $('#quantity').val(counter);
                });
                $("#minus").click(function()
                {
                   var counter = $('#quantity').val();
                    counter-- ;
                    //$('#quantity').val(counter); 
                    if(counter <= 0)
                    {
                     $("#errmsg").html("Invalid i/p").show().fadeOut("slow");
                    $("#quantity").val(1);
                    }
                    else
                     {
                     $('#quantity').val(counter);    
                    }
                });
        });
        </script>
        
    

</body></html>
@stop