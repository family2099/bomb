<?php
header("Content-Type:text/html; charset=utf-8");
$str=$_GET['map'];
$str1=str_replace('N',"",$str);
// echo $str1;
// exit;
$strMnum=substr_count($str,'M');

$strNnum=substr_count($str,'N');

$torf=1;

$mapStr=str_split($str);
$mapStr1=str_split($str1);
$strNum=count($mapStr);




if($strNum<109 || $strNum>109)
{
    echo "不符合,因為字串超過或少於109個<br>";
    $torf=0;
}
else if(is_null($str))
{
    echo "不符合,因為是NULL<br>";
    $torf=0;
}
else if(empty($str))
{
    echo "不符合,因為是空值<br>";
    $torf=0;
}
else if(!isset($str))
{
    echo "不符合,因為變數不存在<br>";
    $torf=0;
}
else if($strNnum>9 || $strNnum<9)
{

    echo "不符合,因為N超過或少於9個<br>";
    $torf=0;
}
else if($strMnum>40 || $strMnum<40)
{
    $torf=0;
    echo "不符合,因為M超過或少於40個<br>";
}
else
{
    $q=0;
    // var_dump($mapStr);
    for($i=0;$i<10;$i++)
    {
        for($j=0;$j<10;$j++) {

            $QQ[$i][$j]=$mapStr1[$q];
            $q++;
        }

    }


        for($i=0;$i<10;$i++)
        {
            for($j=0;$j<10;$j++) {
                $num=0;

                if($QQ[$i][$j]==='M')
                {
                    continue;
                }

                if($QQ[$i-1][$j]==='M')
                {
                    $num++;
                }

                if($QQ[$i+1][$j]==='M')
                {
                    $num++;
                }

                if($QQ[$i][$j-1]==='M')
                {
                    $num++;
                }

                if($QQ[$i-1][$j-1]==='M')
                {
                    $num++;
                }

                if($QQ[$i+1][$j-1]==='M')
                {
                    $num++;
                }

                if($QQ[$i][$j+1]==='M')
                {
                    $num++;
                }

                if($QQ[$i+1][$j+1]==='M')
                {
                    $num++;
                }

                if($QQ[$i-1][$j+1]==='M')
                {
                    $num++;
                }

                if($num!=$QQ[$i][$j])
                {
                    echo $num;
                    echo $QQ[$i][$j];
                    echo  $i.$j;
                    echo "不符合,因為炸彈數量不對";
                    $torf=0;
                    break 2;
                }


            }
        }

}



if($torf==1)
{
    echo "符合";

}







?>