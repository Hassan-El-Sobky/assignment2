<?php


$myArr=['hambozo','hassan','hambozo','mohamed','hambozo','hambozo'];



function getNumMatches($arr,$term)
{
    $counter=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]==$term)
        {
            $counter++;
        }
    }
    return $counter;
}

$counterName=getNumMatches($myArr,"hambozo");

echo $counterName;


function getPriceWithDiscount($price)
{ 
    
    if($price <1000)
    {
        $price=$price-($price*(10/100));
        echo"$price";
    } elseif ($price >=1000)
    {
        $price=$price-($price*(5/100));
        echo"$price";
    };
}




?>