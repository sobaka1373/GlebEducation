<?php
$size = $_REQUEST['number'];
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
       $array[$i][$j] = mt_rand(1, 10);
    }
}
?>
<style>
    table, td {border: 1px solid black}
</style>
<table>
<?php for ($i = 0; $i < count($array); $i++) : ?>
   <tr>
       <?php for ($j = 0; $j < count($array); $j++) : ?>
           <td> <?php echo $array[$i][$j]; ?> </td>
       <?php endfor; ?>
   </tr>
<?php endfor; ?>
</table>
