<?php 
	
$str = 'nguyen chi thanh';
$str = strtolower($str);
$n = strlen($str);
$str{0} = strtoupper($str{0});
$k = array();
for($i = 1; $i < $n; $i++)
{
   
    if($str{$i} == ' ')
    {
        $str{$i+1} = strtoupper($str{$i+1});
        $i++;
        
    }   
}

echo $str;


 ?>