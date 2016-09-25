@extends('Wireframes.layout')
@section('content')
<br/>

<div class="section animated fadeIn">
<div class="container text-center" style="border:1px solid black; width:1140px; padding:10 10 60 10;">
<div class="row"><h1>You must be Log in or Sign up before you can but any product</h1><br/><br/>
      <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
    Log in
</button>

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Origami TechSupport Log in
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Username</label><br/>
                    <div class="col-sm-7" style="margin-left:130px;">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label><br/>
                    <div class="col-sm-7" style="margin-left:130px;">
                        <input type="password" class="form-control"
                            id="inputPassword3" placeholder="Password"/>
                    </div>
                  </div>
                  <div class="form-group" style="margin-left:130px;">
                    <div class="col-sm-offset-2 col-sm-7">
                      <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-7" style="margin-left:130px;">
                      <button type="submit" class="btn btn-default btn-success">Log in</button>
                    </div>
                  </div>
                </form>
                
                
                
                
                
                
            </div>
            
            <!-- Modal Footer -->
        </div>
    </div>
</div>


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="btn btn-success btn-lg">Signup</button>
            </div>
            </div>
            </div>
            </div>
            <br/><br/>
            <div class="container animated fadeIn" style="border:1px solid black; padding:10 10 10 10;width:1140px;">
            <h1 class="animated fadeIn">Checkout</h1><br/>
                <table id="example" class="table table-striped table-bordered animated fadeIn" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Availability</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment Option</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Product Name</th>
                <th>Availability</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment Option</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <tr class="animtable">
                <td>Xiaomi Redmi Note 3</td>
                <td>In Stock</td>
                <td>3</td>
                <td>36000</td>
                <td>Cash On Delivery</td>
                <td>Remove</td>
            </tr>
            <tr class="animtable">
                <td>Samsung S6</td>
                <td>In Stock</td>
                <td>1</td>
                <td>56000</td>
                <td>Net Banking</td>
                <td>Remove</td>
            </tr>
            <tr class="animtable">
            <td>Xiaomi Redmi Note 4</td>
                <td>In Stock</td>
                <td>1</td>
                <td>20000</td>
                <td>Debit</td>
                <td>Added</td>
                            </tr>
            <tr class="animtable">
                <td>One plus X</td>
                <td>In Stock</td>
                <td>2</td>
                <td>30000</td>
                <td>Cash On Delivery</td>
                <td>Added</td>
            </tr>
            
        </tbody>
    </table></br>
        <div style="margin-left:30px">
        <h2>Shipping Address</h2><br/>
        <textarea placeholder="Address" style="width:340px; height:100px;"></textarea>
        <div style="position:relative;top:-100px;left:380px;"><input type="checkbox">Same as Permenant Address</div>
         <div style="position:relative;top:-110px;left:800px;"><button class="btn btn-success btn-lg" style="width:200px; height:60px;">Buy Now</button></div>  
          </div> 
           </div>
             
			<script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
			<script>
						 $(document).ready(function() {
				$('#example').DataTable( {
					"paging":   false,
					"ordering": true,
					"info":     false
				} );
			} );
					
            </script>                                                                                                                                                                                                      
</body>
</html>
@stop