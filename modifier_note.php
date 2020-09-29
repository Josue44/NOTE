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
          <em class="text-center " align ="center">Changer les notes  </em>
          </div>

          <div class="panel-body">
          <?php
if(isset($_POST['btn1']))
{

  if(empty($_POST['date']))
 {
   
  header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie une date! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  
 }else
 {
  
      $q2 = 'update Note set Date_Note = "'.$_POST['date'].'" where Num_Note="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre date est bien changé! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}

if(isset($_POST['btn2']))
{

  if(empty($_POST['idee']))
 {
  header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie une Idee Générale! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  
 }else
 {
  
      $q2 = 'update Note set Idee_Generale = "'.$_POST['idee'].'" where Num_Note="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre Idee Générale est bien changé <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}
 
 
if(isset($_POST['btn3']))
{

  if(empty($_POST['resume']))
 {
  header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie un  résumé ! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  
 }else
 {
  
      $q2 = 'update Note set Resume = "'.$_POST['resume'].'" where Num_Note="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre résumé est bien changé !<a href="#" class="pull-right"></a>
        </div>'; 
 } 
}

if(isset($_POST['btn4']))
{

  if(empty($_POST['rappel']))
 {
  header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie un rappel ! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  
 }else
 {
  
      $q2 = 'update Note set Rappel = "'.$_POST['rappel'].'" where Num_Note="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre rappel est bien changé ! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}

if(isset($_POST['btn5']))
{

  if(empty($_POST['module']))
 {
  header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie une date <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        $ID = $_GET['id'];
 }else
 {
              $ID = $_GET['id'];
              $qq =  'select * from note where Num_Note="'.$_GET['id'].'"';
              $rr = $db -> query($qq) ;
              $cc = $rr -> fetch();
             

               $num=$cc['Num_Module'];

      
      $q2 = 'update Module set Nom_Module = "'.$_POST['module'].'" where Num_Module="'.$cc['Num_Module'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_note.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre date de depart Bien changé <a href="#" class="pull-right"></a>
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
     
 


              $q =  "select * from Note where Num_Note='".$_GET['id']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {

               $num=$c['Num_Module'];

              $q1 =  "select * from module where Num_Module='$num'";
              $r1 = $db -> query($q1) ;
              $c1 = $r1 -> fetch();

              ?>
              <tr>
              <td> <label><center>Date :</center> </label></td>
              <td> <input class="form-control" name="date" type="text" value="<?php echo $c['Date_Note'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn1">changer</button></td>
              </tr>
              <tr>
              <td> <label> <center>Idée Générale:</center></label></td>
              <td> <input class="form-control" name="idee" type="text" value="<?php echo $c['Idee_Generale'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn2">changer</button> </td>
              </tr>
              <tr>
              <td> <label><center>Résumé:</center> </label></td>
              <td> <input class="form-control" name="resume" type="text" value="<?php echo $c['Resume'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn3">changer</button> </td>
              </tr>
              <tr>
              <td> <label> <center>Rappel:</center></label></td>
              <td> <input class="form-control" name="rappel" type="text" value="<?php echo $c['Rappel'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn4">changer</button> </td>
              </tr>
              <tr>
              <td> <label> <center>Module:</center></label></td>
              <td> <input class="form-control" name="module" type="text" value="<?php echo $c1['Nom_Module'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn5">changer</button> </td>
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

  