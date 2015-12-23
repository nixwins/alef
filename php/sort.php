<?php
function getData()
{
	return   [[3,5,3,8,6],
				[5,8,2,4,4],
				[3,6,4,7,9],
				[3,6,7,9,3],
				[1,4,5,8,0]
			] ;
		 
}
function getSumArray($arr)
{
	$summ = 0;
	for($i=0; $i < count($arr); $i++)
	{
		$summ = $summ + $arr[$i];
	}
	return $summ;
}
function sortArray()
{
	$arr = getData();
	for($i=0; $i < count($arr); $i++)
	{
		for($j=0; $j < count($arr[$i])-1; $j++)
		{
			for($f=$j+1; $f < count($arr[$i]); $f++)
			{
				if($arr[$i][$j] > $arr[$i][$f])
				{
					$temp = $arr[$i][$j];
					$arr[$i][$j] = $arr[$i][$f];
					$arr[$i][$f] = $temp;
					
				}
			}
		
		}
	}
	return $arr;
}

function sortBySum()
{
	$arr = getData(); //sortArray() - элементы будет сортированном виде; 
	for($i=0; $i < count($arr) - 1; $i++)
	{
		$summ1 = getSumArray($arr[$i]);
		for($j=$i+1; $j < count($arr); $j++)
		{
			$summ2 = getSumArray($arr[$j]);
			
			if($summ1 > $summ2)
			{
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
				
			}
		}
		
		
	}
	return $arr;
	
	
}

function printArray()
{
	$sortedArray = sortArray();
	$count = count($sortedArray);
	for($i=0; $i < $count; $i++)
	{
		for($j=0; $j < count($sortedArray[$i]); $j++)
		{
			echo $sortedArray[$i][$j] . " ";
		}
		echo  "Summ = " . getSumArray($sortedArray[$i]) . "<hr>";
	}
}
function printAsForeach($sortedArray)
{
	//$sortedArray = sortArray();

	foreach($sortedArray as $value)
	{
		print_r($value) ;
		echo " Сумма ". getSumArray($value) . " <br>";
	}
	echo "<hr>";

}
echo "<h1> Сортировка двухмерного массива </h1>";
printArray();
echo "<h1> Сортировка массива по сумме значении  </h1>";
printAsForeach(sortBySum());
echo "<pre>";
print_r(sortBySum());
echo "</pre>";