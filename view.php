<?php 


DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','su');
DEFINE('DB_PWD','P@ss123');
DEFINE('DB_NAME','isa052');


$connect=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die($connect);

$sql="SELECT * FROM tb_isa052";
$result=mysqli_query($connect,$sql);
 
 ?>
			<table>
  				<tr>
  				 
            <th>ID</th>
  					<th>ISO</th>
  					<th>Year</th>
  					<th>Value</th>
  					
  				</tr>
  				<?php 
  						 
  					 	# code... mysqli
						while ($row=mysqli_fetch_assoc($result)):
				 
  				?>
  				<tr>
  					<td>
  						<?php   echo $row['id']; ?>
  					</td>

  					<td>
  						<?php   echo $row['iso_2']; ?>
  					</td>

  					<td>
  						<?php   echo $row['year']; ?>
  					</td>

            <td>
              <?php   echo $row['value']; ?>
            </td>

  					<td>
  						 
  						
  						 
  					</td>
  				</tr>
  			<?php endwhile;?> 
  		 
  			</table>
  		</div>
  	</div>
  </div>
 