<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編kadai_016</title>
  </head>

  <body>
    <p>
      <?php
      class Food {
        private $name;
        private $price;

        public function __construct($name,$price)
        {
          $this->name = $name;
          $this->price = $price;          
        }
        
        public function getName(){
          return $this->name;
        }
        public function getPrice(){
          return $this->price;
        }
      }

      class Animal {
        private $name;
        private $height;
        private $weight;
        
        public function __construct($name,$height,$weight)
        {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;          
        }
        public function getName(){
          return $this->name;
        }
        public function getHeight(){
          return $this->height;
        }
        public function getWeight(){
          return $this->weight;
        }
      }

      $food = new Food('potato',250);
      $animal = new Animal('dog',60,5000);

      print_r($food);
      echo '<br>';
      print_r($animal);
      echo '<br>';
      echo $food->getPrice();
      echo '<br>';
      echo $animal->getHeight();
      ?>
    </p>
  </body>
</html>