<!--Mounth calculator-->

<form method="post">
<table border="2">
<tr>
<th>Enter your Mounth</th>
<td><input type="number" name="txtmounth"></td>
</tr>


<tr>
<th>Calculate</th>
<td><input type="submit" name="btn_sub"></td>
</tr>
</table>

</form>
<?php
if(isset($_POST['btn_sub'])){
$num=$_POST['txtmounth'];
if($num==1){
echo" The Mounth is January";
}

elseif($num==2){
echo" The Mounth is Fabruary";
}	
elseif($num==3){
echo"The Mounth is March";
}	
elseif($num==4){
echo"The Mounth is Aprial";
}
elseif($num==5){
echo"The Mounth is May";
}	
elseif($num==6){
echo"The Mounth is June";
}			
elseif($num==7){
echo"The Mounth is July";
}	
elseif($num==8){
echo"The Mounth is Agust";
}	
elseif($num==9){
echo"The Mounth is Septumber";
}	
elseif($num==10){
echo"The Mounth is Octuber";
}	
elseif($num==11){
echo"The Mounth is November";
}	
elseif($num==12){
echo"The Mounth is December";
}	
else{
echo"Please enter the right mounth number";
}	
}


?>