<?php
// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A(); //создан экземпляр класса
// $a2 = new A(); //создан экземпляр класса
// $a1->foo(); //вызываем метод foo у класса A x=0 увеличиваем на 1 и выводим 1
// $a2->foo(); //вызываем метод foo у класса A x=1 увеличиваем на 1 и выводим 2
// $a1->foo(); //вызываем метод foo у класса A x=2 увеличиваем на 1 и выводим 3
// $a2->foo(); //вызываем метод foo у класса A x=3 увеличиваем на 1 и выводим 4

// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// class B extends A {
// }
// $a1 = new A(); //создан экземпляр класса
// $b1 = new B(); //создан экземпляр класса потомка
// $a1->foo(); //вызываем метод foo у класса A x=0 увеличиваем на 1 и выводим 1
// $b1->foo(); //вызываем метод foo у класса B x=0 увеличиваем на 1 и выводим 1
// $a1->foo(); //вызываем метод foo у класса A x=1 увеличиваем на 1 и выводим 2
// $b1->foo(); //вызываем метод foo у класса B x=1 увеличиваем на 1 и выводим 2

//foo у класса А и класса В разные и изменение x у каждого свое


// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// class B extends A {
// }
// $a1 = new A; //создан экземпляр класса
// $b1 = new B; //создан экземпляр класса потомка
// $a1->foo(); //вызываем метод foo у класса A x=0 увеличиваем на 1 и выводим 1
// $b1->foo(); //вызываем метод foo у класса B x=0 увеличиваем на 1 и выводим 1
// $a1->foo(); //вызываем метод foo у класса A x=1 увеличиваем на 1 и выводим 2
// $b1->foo(); //вызываем метод foo у класса B x=1 увеличиваем на 1 и выводим 2
// т.к. в классах отсутствует контструктор, круглые скобки при вызове не обязательны, и различий с примером выше не будет