<?php 

$details=['Nimit'=>[
    'EMP060',
    'Valsad',
    '9879177098'], 
'Vidhi'=>[
    'EMP005',
    'Surat',
    '9254631859']];


echo("<b>Original Array</b>:&nbsp");
print_r($details);

//To print Single Element at Index 'Nimit'
echo("<HR><b>Array At Index 'Nimit'</b><br>");
print_r ($details['Nimit']);
?>