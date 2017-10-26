<?php
class CompleteRange{

    public function build($var) {

	    $array=$var;
      	$array = array_filter($array, function ($v) { return $v > 0; });
	    $maximo=max($array);
	    $minimo=min($array);
      	$arraysito=array();

		  for ($i=$minimo; $i <= $maximo; $i++){
          	$arraysito[]=$i;
		  }

      	echo json_encode($arraysito);
    }
}

 $var1=[1,2,4,5];
 echo CompleteRange::build($var1);
 echo "<br>";
 $var2=[2,4,9];
 echo CompleteRange::build($var2);
 echo "<br>";
 $var3=[55,58,60];
 echo CompleteRange::build($var3);

?>
