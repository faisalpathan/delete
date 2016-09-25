@extends('Wireframes.layout')
@section('content')
<br/>

            <div class="container" style="border:1px solid black; padding:10 10 10 10;width:1140px;">
            <h1>Order History</h1><br/>
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
                <td>2</td>
                <td>Xiaomi Redmi Note 2</td>
                <td>Mobiles</td>
                <td>20/08/2016</td>
                <td>12000/-</td>
                <td>Pending</td>
            </tr>
            <tr class="animtable">
            <td>3</td>
                <td>Xiaomi Redmi Note 4</td>
                <td>Mobiles</td>
                <td>20/08/2016</td>
                <td>12000/-</td>
                <td>Pending</td>
                         </tr>
            <tr class="animtable">
                <td>4</td>
                <td>Xiaomi Redmi Note 4G</td>
                <td>Mobiles</td>
                <td>20/08/2016</td>
                <td>12000/-</td>
                <td>Pending</td>
            </tr>
            
        </tbody>
		</table><br/>

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