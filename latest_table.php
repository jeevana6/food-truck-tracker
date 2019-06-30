<html>
<head></head>
<body>
		<table border="1">
			<thead>
                    <tr>
						<th>#</th>
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Address</th>
                        <th>City <i class="fa fa-sort"></i></th>
                        <th>food_type</th>
                        <th>ph_number <i class="fa fa-sort"></i></th>
						
                    </tr>
                </thead>
				<?php
				$con=mysqli_connect("localhost", "root", "","jagath");
				if(!$con)
					die(mysqli_error($con));
				$query="select username,address,city,food_type,ph_number from vendor_table where city='warangal' ";
				$r=mysqli_query($con,$query);
				if(mysqli_num_rows($r)>0)
				{
					$count=0;
					while($row=mysqli_fetch_assoc($r))
					{
						$count=$count+1;
						echo "<tr>";
						echo "<td>".$count."</td><td>".$row["username"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["food_type"]."</td><td>".$row["ph_number"]."</td>";
						echo "</tr>";
						/*$add[$count]=$row["address"];
						echo $add[$count];*/
					}
					echo "</table>";
				}
				else
				{
				echo "0 result";
				}
				mysqli_close($con);
				?>
				<form action="distance.php"  target="bottom" method="post">
				<button type="submit" name="view_distance">VIEW DISTANCE</button>
				</form>
</body>
</html>