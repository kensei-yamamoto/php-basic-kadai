<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach文を使って連想配列の値とキーを出力しよう</title>
    </head>
    <body>
        <p>
            <?php 

                //連想配列
                $array = ['名前' => '玉ねぎ','値段' => 200,'産地' => '北海道'];
               
                //配列内の各値を取り出し⇒表示
                foreach($array as $key => $value){
                    echo "{$key}:{$value}<br>";
                }
            ?>
        </p>
    </body>
</html>
