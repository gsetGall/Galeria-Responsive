<?
extract($_GET);
?>

<? if ($id == '712') { ?> 
<img src="img/712.png">
<? } else { ?>
<img src="uploads/<? echo $id.'.jpg'; ?>">
<? }  ?>