@extends('Wireframes.layout')
@section('content')
<br/>

<div class="container animated fadeIn" style="border:1px solid black;width:1140px;">
                <h1><font color="lightgreen"><span class="glyphicon glyphicon-check"></span>&nbsp;Order Confirmed</font></h1>
                <br/><br/>
                <h2><span class="glyphicon glyphicon-gift"></span>&nbsp;Congratulations</h2>
                <br/>
                <h4><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Your Order for following products has been placed successfully. It will  be processed and dispatched<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;immediately. You are likely to receive it in 8-9 days.</h4>
                <br/>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for Shopping with us.&nbsp;<i class="fa fa-smile-o" aria-hidden="true"></i></h4>
                <br/><br/>
                 <table id="example" class="table table-striped table-bordered animated fadeIn" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sr <noframes></noframes></th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Ordered On</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="animtable">
                <td>1</td>
                <td>Xiaomi Redmi Note 3</td>
                <td>Mobiles</td>
                <td>20/08/2016</td>
                <td>12000/-</td>
                <td>Pending</td>
            </tr>
            <tr class="animtable">
                <td>1</td>
                <td>Xiaomi Redmi Note 3</td>
                <td>Mobiles</td>
                <td>20/08/2016</td>
                <td>12000/-</td>
                <td>Pending</td>
            </tr>
            <tr class="animtable">
            <td>1</td>
                <td>Xiaomi Redmi Note 3</td>
                <td>Mobiles</td>
                <td>20/08/2016</td>
                <td>12000/-</td>
                <td>Pending</td>
                         </tr>
            <tr class="animtable">
                <td>1</td>
                <td>Xiaomi Redmi Note 3</td>
                <td>Mobiles</td>
                <td>20/08/2016</td>
                <td>12000/-</td>
                <td>Pending</td>
            </tr>
            
        </tbody>
    </table></br>
            </div> 
			<script src="js/jquery.min.js" ></script>
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