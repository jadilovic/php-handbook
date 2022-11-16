<!-- <form **method="POST"**>
  <input type="text" name="age" />
  <input type="submit" />
</form> -->

<form **method="POST" action="/dashboard/post.php"**>
  <input type="text" name="name" />
  <input type="submit" />
</form>

<?php
echo "Hello Jasmin";

$base = 33;
$side = 22;
echo "</br>";

var_dump($base * $side);

echo "</br>";

echo "<h1>$base * $side";

// echo "</br>";

// var_dump(4 !== "4");
// echo "</br>";
// $test = true;
// var_dump(!$test);

// echo "</br>";
// var_dump($base++);
// echo "</br>";
// var_dump($base--);
// echo "</br>";
// var_dump($base);
// echo "</br>";
// $exaple = "My age is hi\nHow are you doing";
// var_dump($exaple);
// echo "</br>";
// echo $exaple;
// echo "</br>";
// $example2 = "This is a line\nThis is a line";
// echo $example2;

// echo "</br>";

// $firstName = 'Flavio';
// $lastName = 'Copes';

// echo $firstName . " " . $lastName;
// echo "</br>";
// echo strlen($firstName);
// echo "</br>";
// echo substr("Jasmin", 2, 2);
// echo "</br>";
// echo substr($firstName, 2);
// echo "</br>";
// echo str_replace("min", "tik", "Jasmin");
// echo "</br>";
// echo ucfirst("jasmin");
// echo "</br>";
// echo strpos("Jasmin", "s");
// echo "</br>";
// echo explode(" ", "Mark");
// echo "</br>";

// $boy = explode(" ", "John");
// echo $boy;
// echo "</br>";
// echo implode("-", $boy);
// echo "</br>";
var_dump(round(44.4));
echo "</br>";
var_dump(rand(0, 44));
echo "</br>";
var_dump(is_nan(6));
// echo "</br>";
$list = [4, 5, 6, 7];
$list2 = array(6, 7, 8, 9);
// var_dump(max($list), min($list2));
// echo "</br>";
// var_dump($list[0]);
// echo "</br>";
// $list[0] = 11;
// var_dump($list[0]);
// echo "</br>";
// $list4 = ['a', 'b'];
// $list4[] = 'c';
// var_dump($list4[2]);
// echo "</br>";
// array_unshift($list4, 3);
// var_dump($list4[0]);
// echo "</br>";
// var_dump(in_array('b', $list4));
// echo "</br>";
// var_dump(array_search('8', $list2));
// echo "</br>";
// var_dump(count($list2));
// echo "</br>";
function myFunction($value) {
    return $value * 2;
};
$listNew = (array_map("myFunction", $list2));
echo "</br>";
var_dump($listNew[3]);
echo "</br>";
function myReducer($val1, $val2) {
    echo "$val2 +";
    return $val1 + $val2;
};
$total = (array_reduce($list2, "myReducer"));
var_dump($total);
echo "</br>";
function myFilter($val1) {
    return $val1 & 1;
};
$filtered = (array_filter($list2, "myFilter"));
print_r($filtered);

$list5 = ['a', 'b', 'c'];

foreach ($list5 as $key => $value) {
  echo $key;
}

$character = 'a';

function test(&$c) {
  $c = 'b';
}

test($character);

echo $character; //'b'

$happyFunction = function() use ($character) {
    echo "Happy! $character";
};
$happyFunction();

$multiply = fn($one, $two) => $one * $two;

$multiply(4, 5);

echo "</br>";
var_dump($multiply(4, 5));
echo "</br>";

class Dog {
  public $name;
  public $age;
  public $color;
  public function __construct($age)
  {
    $this->age = $age;
  }
  public function bark() {
    echo "Wow";
  }
  public function whatColor() {
    echo $this->color . " very nice color";
  }
  public function whatAge() {
    echo $this->age . " is old dog";
  }
};

$boby = new Dog(33);

$boby->name = "Boby";
// $boby->age = 10;
$boby->color = "Red";

var_dump($boby);
echo "</br>";

echo $boby->bark();
echo "</br>";

echo $boby->whatColor();
echo "</br>";

echo $boby->whatAge();
echo "</br>";

class Cat {
  public int $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function eats() {
    echo $this->name . " mljac mljac";
  }
}
$mica = new Cat(7);
echo $mica->eats();
echo "</br>";

class Animal {
  public $age;

  public function __construct($age)
  {
    $this->age = $age;
  }

  public function eat() {
    echo "animal is eating";
  }
}

class Cow extends Animal {
  public function eat() {
    echo $this->age . " cow eating age";
  }
}

$sarena = new Cow(5);
$sarena->eat();
echo "</br>";
class Utils {
  public static function version() {
    return "1.0";
  }
}

echo Utils::version();

echo "</br>";

class Plane {
  public $brand;
}

$airbus = new Plane();
$boing = new Plane();

var_dump($airbus == $boing) . " == ";
echo "</br>";

var_dump($airbus === $boing) . " === ";
echo "</br>";

class Pas {
  const BREED = "Tornjak";
  public $name = 'Good dog';
  public $age = 10;
  public $color = 'gray';

  public function __clone()
  {
    $this->cloned = true;
  }
}

$buba = new Pas();

foreach ($buba as $key => $value) {
  echo $key . " => " . $value . ", ";
}
echo "</br>";
// // var_dump($buba->cloned);

// $cuko = clone $buba;
// echo "</br>";

// var_dump($cuko->cloned);
// echo "</br>";

// foreach ($cuko as $key => $value) {
//   echo $key . " => " . $value . ", ";
// }

// require_once("test.php");

// echo "</br>";
// echo __FILE__;

// echo "</br>";
// echo getcwd();

// echo "</br>";
// echo __DIR__;

// // phpinfo();
// echo "</br>";

try {
  echo 1 / 0;
} catch (DivisionByZeroError $e) {
  echo $e->getMessage() . " I told you so";
} catch (Throwable $th) {
  echo $th->getMessage();
} finally {
  echo "...finally";
}
echo "</br>";

$timeStamp = time();
echo date("Y-m-d", $timeStamp);

echo strtotime('now');
echo strtotime('4 May 2020');
echo strtotime('+1 day');
echo strtotime('+1 month');
echo strtotime('last Sunday');

echo "</br>";

define("TEST", "some value");
echo TEST;
echo "</br>";

enum Status {
  case EATING;
  case SLEEPING;
  case RUNNING;
}

class Ker {
  public Status $status;
}

$rex = new Ker();

$rex->status = Status::RUNNING;

// if ($rex->status == Status::RUNNING) {
//   echo "rex is running";
// } else {
//   echo "rex is sleeping or eating";
// }

// if (isset($_GET["name"])) {
//   echo '<p>The name is ' . $_GET['name'];
// } else {
//   echo "Get Not set";
// }

echo "</br>";

if (isset($_POST['name'])) {
  echo '<p>The name is ' . $_POST['name'];
} else {
  echo "Post Not set";
}

?>
<!-- <form>
  <input type="text" name="name" />
  <input type="submit" />
</form> -->

<!-- <form **method="POST"**>
  <input type="text" name="age" />
  <input type="submit" />
</form> -->