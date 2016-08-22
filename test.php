<?php
for($i=0;$i<40;$i++) {  //產生40個
    $b=rand(0,99);  //產生0~99的亂數

    for($j=0;$j<=$i;$j++){  //檢查重覆

        if($b==$a[$j]){
            $b=rand(0,99);  //如果重覆，重新產生亂數
            $j=0;
        }
    }

    $a[$i]=$b;  //寫入陣列
}
asort($a);  //排序



    for($i=0;$i<10;$i++)
    {
        for($j=0;$j<10;$j++) {

            $QQ[$i][$j]='0';

        }

    }




    for($j=0;$j<40;$j++){
        if($a[$j]<10)
        {
           $QQ[0][$a[$j]]='M';
           continue;
        }
        else
        {
            $str=str_split($a[$j]);
            $QQ[$str[0]][$str[1]]='M';
            continue;
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

            $QQ[$i][$j]=$num;
        }
    }

    for($i=0;$i<10;$i++)
    {
        for($j=0;$j<=10;$j++) {
            if($j==10)
            {
                if($i==9)
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
