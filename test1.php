<?php
    $time1=microtime(true);
    for($i=0;$i<1200;$i++) {  //產生40個
        $b=rand(0,2999);  //產生0~99的亂數

        for($j=0;$j<=$i;$j++){  //檢查重覆

            if($b==$a[$j]){
                $b=rand(0,2999);  //如果重覆，重新產生亂數
                $j=0;
            }
        }

        $a[$i]=$b;  //寫入陣列
    }
    asort($a);  //排序


    for($i=0;$i<50;$i++)
    {
        for($j=0;$j<60;$j++) {

            $QQ[$i][$j]='0';

        }

    }

    for($j=0;$j<1200;$j++){
        if($a[$j]<10)
        {
          $QQ[0][$a[$j]]='M';
          continue;
        }
        else
        {
            $count=$a[$j]/60;
            $count=intval($count);
            $remain=$a[$j]%60;

            $QQ[$count][$remain]='M';



        }


    }


    for($i=0;$i<50;$i++)
    {
        for($j=0;$j<60;$j++) {
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

            $QQ[$i][$j]=$num;
        }
    }

    for($i=0;$i<50;$i++)
    {
        for($j=0;$j<=60;$j++) {
            if($j==60)
            {
                if($i==49)
                {
                    break;
                }
                echo 'N';
            }
            else
            {
                echo $QQ[$i][$j];
            }
        }

    }



?>
