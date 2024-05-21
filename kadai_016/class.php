<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach文を使って連想配列の値とキーを出力しよう</title>
    </head>
    <body>
        <p>
            <?php 

                //Foodクラス
                class Food{

                    private $name;
                    private $price;

                    //コンストラクタ
                    public function __construct(string $name, int $price) {
                        
                        $this->name = $name;
                        $this->price = $price;
                    } 

                    //show_priceメソッド
                    public function show_price(){

                        //priceの値を出力
                        echo $this->price. '<br>';
                    }
                }

                //Animalクラス
                class Animal{

                    private $name;
                    private $height;
                    private $weight;

                    //コンストラクタ
                    public function __construct(string $name, int $height,int $weight) {

                        $this->name = $name;
                        $this->height = $height;
                        $this->weight = $weight;
                    } 

                    //show_heightメソッド
                    public function show_height(){

                        //heightの値を出力
                        echo $this->height. '<br>';
                    }   
                }

                //インスタンス化
                $food = new Food('ハンバーガー',150);
                $animal = new Animal('虎',100,80);

                //各プロパティの出力
                print_r($food);
                echo '<br>';
                print_r($animal);
                echo '<br>';

                //メソッドの呼び出し
                $food->show_price();
                $animal->show_height()
            ?>
        </p>
    </body>
</html>
