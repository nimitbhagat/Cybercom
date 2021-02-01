    <?php 

$details=['Nimit'=>[
    'EMP060',
    'Valsad',
    '9879177098'], 
'Vidhi'=>[
    'EMP005',
    'Surat',
    '9254631859']];


foreach($details as $d=>$key){
    echo("<b>$d</b><br>");
    foreach($key as $values){
        echo("$values<br>");
    }
    echo("<hr>");
}
?>