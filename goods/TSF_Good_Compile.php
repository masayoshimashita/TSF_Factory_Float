#!/usr/bin/php
<?php
   //Read
$csv = file("TSF_Goods_Index.csv") ;

//Index
$Index = array_shift($csv) ;
$Index = explode(",",$Index) ;
$Index[10] = str_replace(array("\r\n","\n","\r"), '', $Index[10]) ;
//Output
foreach($csv as $dat){
	//キーを割り振る
	$dat = explode(",",$dat) ;
	$C_dat = array_combine($Index,$dat) ;
	//出力判定
	if($C_dat["flug"] == 1 ){
		//$fh = fopeen("","w");
		print_r($C_dat) ;
	}
}
?>