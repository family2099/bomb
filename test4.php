<?php
header("Content-Type:text/html; charset=utf-8");
$str=$_GET['map'];

$str1=str_replace('N',"",$str);

$strMnum=substr_count($str,'M');
$strmnum=substr_count($str,'m');
$strNnum=substr_count($str,'N');

$torf=1;

$mapStr=str_split($str);
$mapStr1=str_split($str1);
// var_dump($mapStr1);
$strNum=count($mapStr);


if($strNum<109 || $strNum>109)
{
    echo "字串為".$strNum."。";
    $torf=0;
}

else
{
    echo "字串長度正確,共109個。";
}

if(!preg_match("/^([0-8MN]+)$/",$str))
{
    echo "輸入格式不是0-8或MN。";
    $torf=0;
}

if(strpos($str,'m'))
{
    echo "地雷大小寫有錯。";
}

if(is_null($str))
{
    echo "是NULL。";
    $torf=0;
}

if(!is_string($str))
{
    echo "是不字串。";
    $torf=0;
}

if(empty($str))
{
    echo "是空值。";
    $torf=0;
}

if(!isset($str))
{
    echo "變數不存在。";
    $torf=0;
}

if($strNnum>9 || $strNnum<9)
{

    echo "N數量有錯，有".$strNnum."個N。";
    $torf=0;
}

if($strMnum>40 || $strMnum<40)
{
    if($strMnum+$strmnum!=40)
    {
        $torf=0;
        echo "地雷數量有錯，有".($strMnum+$strmnum)."顆地雷。";
    }
}

if($mapStr1)
{
    for($i=0;$i<10;$i++)
    {

        if($i==9 && $mapStr[$i*11+10]==='N')
        {
            echo "最後不能有N。";
            break;
        }




    }
    $q=0;

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

                if($QQ[$i][$j]==='M' || $QQ[$i][$j]==='m')
                {
                    continue;
                }

                if($QQ[$i-1][$j]==='M' || $QQ[$i-1][$j]==='m')
                {
                    $num++;
                }

                if($QQ[$i+1][$j]==='M' || $QQ[$i+1][$j]==='m')
                {
                    $num++;
                }

                if($QQ[$i][$j-1]==='M' || $QQ[$i][$j-1]==='m')
                {
                    $num++;
                }

                if($QQ[$i-1][$j-1]==='M' || $QQ[$i-1][$j-1]==='m')
                {
                    $num++;
                }

                if($QQ[$i+1][$j-1]==='M' || $QQ[$i+1][$j-1]==='m')
                {
                    $num++;
                }

                if($QQ[$i][$j+1]==='M' || $QQ[$i][$j+1]==='m')
                {
                    $num++;
                }

                if($QQ[$i+1][$j+1]==='M' || $QQ[$i+1][$j+1]==='m')
                {
                    $num++;
                }

                if($QQ[$i-1][$j+1]==='M' || $QQ[$i-1][$j+1]==='m')
                {
                    $num++;
                }

                if($num!=$QQ[$i][$j])
                {
                    echo "座標[".$i."][".$j."]炸彈數量不對,應該為".$num."。";
                    $torf=0;

                }


            }
        }

}



if($torf==1)
{
    echo "符合";

}

if($torf==0)
{
    echo "結果不符合";

}



?>