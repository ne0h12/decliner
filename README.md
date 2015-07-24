#Склонение слов по числительному

```php 

$apples = ['Akane', 'Anna', 'Apollo', 'Brina'];

$decline = Decliner\Decliner::on(count($apples), new \Decliner\Declinable\Word('яблоко', 'яблока', 'яблок'));

echo sprintf('В корзине %s', $decline); // В корзине 4 яблока

```