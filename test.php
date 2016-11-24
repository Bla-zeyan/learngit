<?php
//git练习

function square($num1,$num2)
{
    for ($i=0; $i <$num1 ; $i++)
    {
        echo "\n";
          for ($j=0; $j <$num2 ; $j++)
          {
              echo "*";
            }
    }
  }

square(4,6);

function diamond($num1)
{
    echo "============空心菱形======================\n";
    for ($a=1; $a<=$num1 ; $a++)
      {
    	for ($b=1; $b <=$num1-$a ; $b++) {
    		echo " ";
    	}
    	for ($c=1; $c<=2*$a-1 ; $c++) {
    				if($c==1||$c==2*$a-1){
    					echo "*";
    				}else {
    						echo " ";
    	}
    	}echo "\n";
    	}
    	for ($a=$num1-1; $a>=0 ; $a--) {
    		for ($b=1; $b <=$num1-$a ; $b++) {
    			echo " ";
    		}
    		for ($c=1; $c<=2*$a-1 ; $c++) {
    					if($c==1||$c==2*$a-1){
    						echo "*";
    					}else {
    							echo " ";
    		          }
    		}echo "\n";
    	}
}

diamond(6);
