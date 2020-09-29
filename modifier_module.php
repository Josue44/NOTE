<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  

  header('location:index.php');

}





 
?>
<!DOCTYPE html>
<?php
 include('cnx.php');
?>
<html>
<head>
  <?php include('inccss.php'); ?>
  
       
            
 
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>

<?php include('menu.php'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
<br><br><br>

<div class="panel panel-default" align="center">

          <div class="panel-heading">
          <em class="text-center " align ="center">Changer les modules  </em>
          </div>

          <div class="panel-body">
          <?php


if(isset($_POST['btn1']))
{

  if(empty($_POST['module']))
 {
  header('location:modifier_module.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update Module set Nom_Module = "'.$_POST['module'].'" where Num_Module="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_module.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre nom de module est bien modifié! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}





if(isset($_POST['btn2']))
{

  if(empty($_POST['heures']))
 {
  header('location:modifier_module.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update Module set Nb_Heures = "'.$_POST['heures'].'" where Num_Module="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_module.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre nombres d heures est bien modifié! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}

?>

<div class="col-md-12">

<form  method="POST" enctype="multipart/form-data"   >  
<div class="col-md-1">
</div>    
<div class="col-md-10">
      <br><br>
          <div class="panel-body">
            <table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
                <thead>
                <tr>
                    <th data-field="id" data-align="right" >Champs</th>
                    <th data-field="name" >Informations</th>
                    <th data-field="price" >Modifier</th>
                </tr>
                </thead>
              <tbody>
              <?php
     
 


              $q =  "select * from Module where Num_Module='".$_GET['id']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
              <tr>
              <td> <label><center>Numéro :</center> </label></td>
              <td> <input class="form-control" name="num" type="text" value="<?php echo $c['Num_Module'];?>"></td>
              
              </tr>
              <tr>
              <td> <label> <center>Nom Module:</center></label></td>
              <td> <input class="form-control" name="module" type="text" value="<?php echo $c['Nom_Module'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn1">changer</button> </td>
              </tr>
              <tr>
              <td> <label><center>Nombres D'Heures:</center> </label></td>
              <td> <input class="form-control" name="heures" type="text" value="<?php echo $c['Nb_Heures'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn2">changer</button> </td>
              </tr>

            
              <?php
              }
              ?>
              </tbody>
            </table>
            <script>
                $(function () {
                    $('#hover, #striped, #condensed').click(function () {
                        var classes = 'table';
            
                        if ($('#hover').prop('checked')) {
                            classes += ' table-hover';
                        }
                        if ($('#condensed').prop('checked')) {
                            classes += ' table-condensed';
                        }
                        $('#table-style').bootstrapTable('destroy')
                            .bootstrapTable({
                                classes: classes,
                                striped: $('#striped').prop('checked')
                            });
                    });
                });
            
                function rowStyle(row, index) {
                    var classes = ['active', 'success', 'info', 'warning', 'danger'];
            
                    if (index % 2 === 0 && index / 2 < classes.length) {
                        return {
                            classes: classes[index / 2]
                        };
                    }
                    return {};
                }
            </script>
          </div>
        </div>
      
        </form>
      </div>
          
</div>
</div>

  <?php include('incjs.php'); ?>
</body>
</html>

  