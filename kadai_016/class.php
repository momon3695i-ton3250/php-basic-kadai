<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しようt</title>
</head>
<body>
    <p>
        <?php
        //Food
        //クラスを定義
        class Food{

        //プロパティを定義
        private $name;
        private $price;

        //メゾットを定義
        public function show_price(){
           echo $this->price. '<br>';
        }
        //コンストラクタを定義
        public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
        }

        }
        //インスタンス化する
        $food = new Food('potato',250);
        print_r($food);
        echo'<br>';
        $food->show_price();


        //Animal
        //クラスを定義
        class Animal{

        //プロパティを定義
        private $name;
        private $height;
        private $weight;

        //メゾットを定義
        public function show_height(){
           echo $this->height .'<br>';
        }
        //コンストラクタを定義
        public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        }
        //インスタンス化する
        $animal = new Animal('dog', 60, 5000);
        print_r($animal);
        echo '<br>';



        $animal->show_height();
        ?>
    </p>
</body>
</html>