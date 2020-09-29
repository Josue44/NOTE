
<!DOCTYPE html>
<html>
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
					<div class="panel-heading">Modules</div>
					<div class="panel-body">
						<table data-toggle="table"   data-search="true"  data-pagination="true"  >
						    <thead>
						    <tr>
						                

						        <th  data-sortable="true" ><h3><center>Numéro module</center></h3></th>
						        <th   data-sortable="true"><h3><center>Nom module</center></h3></th>
						        <th data-sortable="true"><h3><center>Nombres Heures</center></h3></th>


							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from module";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['Num_Module'] ; ?>
							</td>
							<td> 
							<?php echo $c['Nom_Module']; ?>
							</td>
							<td> 
							<?php echo $c['Nb_Heures'] ; ?>
							</td>
							
                            
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_module.php?id=".$c['Num_Module']."\" class=\"btn btn-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_module.php?id=".$c['Num_Module']."\" class=\"btn btn-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>		
		<span><a href="ajouter_mod.php" class="btn btn-info col-xs-6 col-sm-4 col-lg-2" >Ajouter Module</a></span>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
	</html>