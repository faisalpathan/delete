@extends('Wireframes.layout')
@section('content')
<br/>

<div class="container">
        <div class="col-md-3 animated slideInLeft" style="border:1px solid black;height:674px;">
        <h2><strong><font size="6px">Search Filters</font></strong></h2><br/><br/><br/><br/><br/>
        <p><font size="4px">Search Filters will be specific to the project Category type.These are nothing but the attributes  
		that are set in the backend while creating categories and adding their attributes</p></font>
        </div>
        <div class="col-md-8 animated fadeIn" style="border:1px solid black;margin-left:10px; height:674px;">
            <h2>Search Results</h2>
            <div style="margin-left:290px; margin-top:30px;">
            <span><font size="4px">Sort :</font></span>&nbsp;&nbsp;&nbsp;<select class="selectpicker show-tick option3">
                      <option>Price High to Low</option>
                      <option>Price Low to High</option>
                      <option>Newest First</option>
                      <option>Oldest First</option>
                </select>
                <div style="margin-left:220px; margin-top:-50px;">
             <ul class="pagination" data-pg-id="391" style=""> 
                <li data-pg-id="392">
                    <a href="#" data-pg-id="393">Prev</a>
                </li>                 

                <li class="active" data-pg-id="394">
                    <a href="#" data-pg-id="395">1 <span class="sr-only" data-pg-id="396">(current)</span></a>
                </li>                 

                <li data-pg-id="397">
                    <a href="#" data-pg-id="398">2</a>
                </li>                 

                <li data-pg-id="399">
                    <a href="#" data-pg-id="400">3</a>
                </li>                 

                <li data-pg-id="401">
                    <a href="#" data-pg-id="402">Next</a>
                </li>                 
            </ul>   
        </div>
        </div>
        <div class="col-md-12 animated fadeIn" style="margin-top:30px;border:1px solid black; padding-top:8px; padding-bottom:8px;">
                <div class="col-md-3" style="margin-left:5px; width:28%;">
				<img class="anim" src="images/topselling1.jpg" width="200" /></div>
                <div class="col-md-3" style="margin-left:25px; width:28%;">
				<img class="anim" src="images/search1.jpg" width="200" /></div>
                <div class="col-md-3" style="margin-left:30px; width:28%;">
				<img class="anim" src="images/search2.jpg" width="200" /></div>
            </div><br/><br/>
        <div class="col-md-12 animated fadeIn" style="margin-top:30px;border:1px solid black; padding-top:8px; padding-bottom:8px;margin-bottom:40px;">
                <div class="col-md-3" style="margin-left:5px; width:28%;">
				<img class="anim" src="images/search3.png" width="160" height="190" /></div>
                <div class="col-md-3" style="margin-left:25px; width:28%;">
				<img class="anim" src="images/search4.png" width="220" height="195" /></div>
                <div class="col-md-3" style="margin-left:30px; width:28%;">
				<img class="anim" src="images/search5.png" width="225" height="195" /></div>
            </div>
        </div>
        <div class="col-md-12 animated fadeIn" style="margin-top:30px;border:1px solid black; padding-top:8px; padding-bottom:10px; width:92%">
            <h1>Top Selling Products</h1><br/>
                <div class="col-md-2" style="margin-left:23px; width:22%;">
				<img class="anim" src="images/topselling1.jpg" width="225" height="202" /></div>
                <div class="col-md-2" style="margin-left:30px; width:22%;">
				<img class="anim" src="images/topselling2.jpg" width="225" height="202" /></div>
                <div class="col-md-2" style="margin-left:30px; width:22%;">
				<img class="anim" src="images/topselling3.jpg" width="225" height="202"/></div>
                <div class="col-md-2" style="margin-left:30px; width:22%;">
				<img class="anim" src="images/topselling4.jpg" width="220" height="202" /></div>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/jquery.min.js" ></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
@stop