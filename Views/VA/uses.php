<?php 
	include"header.php";
 ?>


<div class="container text-center">
	<div class="row text-center my-4">
		<div class="col-12">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B">Daily Uses Records</h1>
		</div>
	</div>

<div class="table-responsive-sm">
<table class="table">
    
    <tbody>

	<form action="/uses" method="GET" >

<input type="number" autofocus="autofocus" name="query" placeholder="Quantity" class="w-50 text-center" />
<input type="submit" name="kiwango" value="Proceed" class="btn btn-primary" />
<a href="/admini" class="btn btn-danger">Cancel</a><br>



<?php	
	if (isset($_GET['kiwango'])){


    $query = $_GET['query']; 
	
         
        $query = htmlspecialchars($query); 
		
			 
        if(($query) > 0){

        	echo"<span style='color: black; font-weight: bold;' class='btn btn-info'>DATE</span><input type='date' name='uses_date' required />";

        		echo "
					<thead>
					<tr class='bg-primary'>
						<th>S/N</th>
						<th>USES DETAILS</th>
            			<th>COST</th>
        			</tr>
    				</thead>";

			$i=0;
				while($i<$query){
            			
					$s2=($i+1);
					echo "
					<tr class='bg-info'><td colspan=''>$s2.</td><td><input type='text' class='input-group' name='description'  placeholder='Description'></td><td><input type='text' name='amount'  placeholder='Amount'></td></tr>";
		
		
					$i++;				  
					}
					echo "<tr><td colspan='3'><input type='reset' name='submit' class='btn btn-secondary' value='Clear' /><input type='submit' name='submit' class='btn btn-success' value='Add Item' /><a href='/uses'><input type='button' value='Cancel' class='btn btn-danger' style='margin-left:30%; width:10%;'/></a></td></tr>";
		
		}

		
}
?>
		
		
            </form>

	</tbody >
	
	</table>
</div>
</div>
</body>
</html>