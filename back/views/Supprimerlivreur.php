<?php
include "../core/livreurC.php";
$lC=new livreurC();
$t=$lC->supprimerlivreur($_GET['idL']);
if ($t==1) {
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livreur supprimé ");
location="gestiondeslivreurs.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
else {
echo "" ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livreur supprimé");
location="gestiondeslivreurs.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
?>