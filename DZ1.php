<?php 
/* 1 Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п*/
class Product{// класс товар

/* 2. Описать свойства класса из п.1 (состояние).*/
	private $name;
	private $price;
	private $color;

/* 3 Описать поведение класса из п.1 (методы).*/
	public function __construct($name, $price, $color){
		$this->setName($name);
		$this->setPrice($price);
		$this->setColor($color);
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function setPrice($price){
		$this->price = $price;
	}
	public function getPrice(){
		return $this->price;
	}
	public function setColor($color){
		$this->color = $color;
	}
	public function getColor(){
		return $this->color;
	}
	public function call(){
		echo "Я умею звонить";
	}
	/**/
}

/* 4. Придумать наследников класса из п.1. Чем они будут отличаться?*/
class OldPhones extends Product{
	public function sms(){
		echo "Я умею отправлять смс";
	}
}
$phone1 = new OldPhones('Nokia 3310', 500, 'Grey');
echo $phone1->getName().'<br>';
echo $phone1->call().'<br>';
echo $phone1->sms().'<br><br>';
class SmartFones extends OldPhones{
	public function internet(){
		echo "Я имею доступ в интернет";
	}
	public function fingerPrint(){
		echo "Я умею разблокироваться по отпечатку пальца";
	}
	public function nfc(){
		echo "Я поддерживаю технологию NFC";
	}
}
$phone2 = new SmartFones('Xiaomi MI 9', 15000, 'White');
echo $phone2->getName().'<br>';
echo $phone2->call().'<br>';
echo $phone2->internet().'<br>';
echo $phone2->fingerPrint().'<br>';
echo $phone2->nfc().'<br><br><br><br>';

/* 5 Дан код: Что он выведет на каждом шаге? Почему?*/
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();// Код выведет 1. Вызывается метод объекта $a1, так как в методе используется преинкремент, то сначал значение увеличивается, а потом выводится.
$a2->foo();// Код выведет 2. Потому что используется статическая переменная, после завершения работы метода она не удаляется, а сохраняет свое значение, и так как это экземпляры одного класса то при каждом вызове метода любого экземпяра одного класса значение переменной $x всегда будет на единицу выше предыдушего вызова.
$a1->foo();// Код выведет 3. Здесь происходит тоже самое что и в пункте 2.
$a2->foo();// Код выведет 4. Здесь происходит тоже самое что и в пункте 2 и 3. 

/* 6 Немного изменим п.5, Объясните результаты в этом случае*/
class B {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class C extends B {
}
$a3 = new B();
$b4 = new C();
$a3->foo(); // Код выведет 1. Так как преинкремент, и сохранит свое значение в классе B
$b4->foo(); // Код выведет 1. Так как класс С потомок класса B, и вызывается метод уже объекта C то значение 1.  
$a3->foo(); // Код выведет 2. Здесь происходит тоже самое что в пункте 5, где выводится значение 2,3,4. Вызывается метод объекта $a3 класса В во второй раз
$b4->foo(); // Код выведет 2. Здесь происходит тоже самое что в пункте 5, где выводится значение 2,3,4. Только уже вызывается метод объекта $b4 класса C во второй раз

/* 7. *Дан код Что он выведет на каждом шаге? Почему?*/
/*Код выведет тоже самое что и в пункте 6 При создании нового экземпляра класса если не передаются параметры скобки не обязательны в конце 
$a3 = new B(); и $a3 = new B; одно и тоже */
class D {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class E extends D {
}
$a5 = new D;
$b6 = new E;
$a5->foo(); 
$b6->foo(); 
$a5->foo(); 
$b6->foo(); 
