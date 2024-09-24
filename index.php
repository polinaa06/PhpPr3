<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr3  </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="title">
        <h2>Практическая работа №3</h2>
        <p>Выполнила: Безвинная Полина 425 ВЕБ</p>
    </div>

    <div class="content section">

        <?php

        class Animal
        {
            public $weight, $age, $color;

            public function __construct($weight, $age, $color)
            {
                $this->weight = $weight;
                $this->age = $age;
                $this->color = $color;
            }

            public function info()
            {
                echo "<p>Вес: {$this->weight} кг</p>";
                echo "<p>Возраст: {$this->age} лет</p>";
                echo "<p>Окрас: {$this->color}</p>";
            }
        }

        class Lion extends Animal
        {
            private $speed; // размер прайда
        
            public function __construct($weight, $age, $color, $speed)
            {
                parent::__construct($weight, $age, $color);
                $this->speed = $speed;
            }

            public function info()
            {
                $baseInfo = parent::info();
                echo "<p>Скорость: {$this->speed} км/ч</p>";
            }
        }

        class Rabbit extends Animal
        {
            private $place; // длина ушей
        
            public function __construct($weight, $age, $color, $place)
            {
                parent::__construct($weight, $age, $color);
                $this->place = $place;
            }

            public function info()
            {
                $baseInfo = parent::info();
                echo "<p>Место обитания: {$this->place}</p>";
            }
        }

        class Wolf extends Animal
        {
            private $height; // размер стаи
        
            public function __construct($weight, $age, $color, $height)
            {
                parent::__construct($weight, $age, $color);
                $this->height = $height;
            }

            public function info()
            {
                $baseInfo = parent::info();
                echo "<p>Рост: {$this->height} см</p>";
            }
        }


        $lion = new Lion(190, 5, 'золотистый', 40);
        $rabbit = new Rabbit(2, 1, 'белый', "Лес");
        $wolf = new Wolf(50, 4, 'серый', 90);

        ?>
        <div class="item">
            <h3>Лев</h3>
            <?
            echo $lion->info();
            ?>
        </div>

        <div class="item">
            <h3>Заяц</h3>
            <?
            echo $rabbit->info();
            ?>
        </div>

        <div class="item">
            <h3>Волк</h3>
            <?
            echo $wolf->info();
            ?>
        </div>


    </div>
</body>

</html>