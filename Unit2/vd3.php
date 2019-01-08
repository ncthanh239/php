<?php
    $name = array('Nam', 'Khánh', 'Bình', 'Hậu' , 'Tuan'); 
    var_dump(in_array('Nam',$name));
    if(in_array('Nam',$name)){
    	echo "<br>Nam co trong danh sach";
    }else{
    	echo "Nam khong co trong danh sach";
    }

    echo "<br> So luong phan tu trong mang: ". count($name);
    echo "<br>";
    var_dump(array_search('Tuan', $name));
    if(array_search('Nam',$name) !==false){
    	echo "<br> Tim thay";
    }else{
    	echo "<br> Khong tim thay";
    }
    	$arr = array(1,3,1,5,"zent",1,5,"zent");
    	$arr_result = array_count_values($arr);

    	echo "<pre>";
    		print_r($arr_result);
    	echo "</pre>";

    	$arrr= array(
    		10=>"Zent",
    		'name' => "Zent"
    	);
    	array_unshift($arrr,'new1','new2');
    	echo "<pre>";
    		print_r($arrr);
    	echo "</pre>";

?>