<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
    </head>
    <body>
        <p>
            <?php 

                //独自作成のソート関数
                function ort_2way($array,$order){

                    //第二引数がTRUE(昇順要求)の場合
                    if($order){
                        echo '昇順にソートします。<br>';

                        //配列内の数値を昇順にソート
                        sort($array,SORT_NUMERIC);

                    //第二引数がFALSE(降順要求)の場合
                    }else{
                        echo '降順にソートします。<br>';

                        //配列内の数値を降順にソート
                        rsort($array,SORT_NUMERIC);
                    }

                    //配列内の各値を取り出し⇒表示
                    foreach($array as $num){
                        echo "{$num}<br>";
                    }
                };

                $nums = [15, 4, 18, 23, 10 ];       //配列を準備
                ort_2way($nums,true);               //独自関数の呼び出し
                ort_2way($nums,false);              //独自関数の呼び出し
            ?>
        </p>
    </body>
</html>
