<?php 

$city=['Nimit'=>'Valsad', 'Hemil'=>"Vapi",'Harshit'=>'Silvassa','Vidhi'=>'Surat','Dhaval'=>'Ahmedabad'];
echo("<b>Original Array</b>:&nbsp");
print_r($city);

//To print Single Element at Index 'Nimit'
echo("<HR><b>Element At Index 'Nimit'</b><br>");
echo $city['Nimit'];

//To print All Element
echo("<HR><b>All the Element of array With Index</b><br>");
print_r($city);
?>