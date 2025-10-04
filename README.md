Создание пользовательских классов и реализация сортировки массива объектов в PHP.

Создать класс Product, содержащий поля:

id (целое число);
code (строка);
name (строка);
sort (целое число).

Объявить 10 различных объектов класса Product.
Поместить их в массив.
Создать класс ProductRepository, который:
Принимает массив товаров в конструкторе;
Сохраняет массив во внутреннее свойство.

В классе ProductRepository реализовать методы:

sortBySort() — сортирует товары по полю sort по возрастанию;
sortByName() — сортирует товары по полю name в алфавитном порядке.

Команда для инициализации phinx - php vendor/robmorgan/phinx/bin/phinx init

Команда для установки миграций - php vendor/robmorgan/phinx/bin/phinx migrate

Команды для установки сидов: php vendor/robmorgan/phinx/bin/phinx seed:run