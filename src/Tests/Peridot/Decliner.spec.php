<?php
/**
 * Author: <sfdiem5@gmail.com>
 * Date: 14.05.15
 */

require_once __DIR__ . '/../../Decliner/Decliner.php';
require_once __DIR__ . '/../../Decliner/Declinable/Word.php';

describe('Decliner', function () {

    describe('::on', function(){

        it('должен вернуть "0 дней"', function() {
            $decline = Decliner\Decliner::on(0, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '0 дней', "но вернул '{$decline}'");
        });

        it('должен вернуть "1 день"', function() {
            $decline = Decliner\Decliner::on(1, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '1 день', "но вернул '{$decline}'");
        });

        it('должен вернуть "2 дня"', function() {
            $decline = Decliner\Decliner::on(2, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '2 дня', "но вернул '{$decline}'");
        });

        it('должен вернуть "5 дней"', function() {
            $decline = Decliner\Decliner::on(5, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '5 дней', "но вернул '{$decline}'");
        });

        it('должен вернуть "16 дней"', function() {
            $decline = Decliner\Decliner::on(16, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '16 дней', "но вернул '{$decline}'");
        });

        it('должен вернуть "23458 дней"', function() {
            $decline = Decliner\Decliner::on(23458, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '23458 дней', "но вернул '{$decline}'");
        });

        it('должен вернуть "11 дней"', function() {
            $decline = Decliner\Decliner::on(11, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '11 дней', "но вернул '{$decline}'");
        });

        it('должен вернуть "112 дней"', function() {
            $decline = Decliner\Decliner::on(112, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '112 дней', "но вернул '{$decline}'");
        });

        it('должен вернуть "121 день"', function() {
            $decline = Decliner\Decliner::on(121, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '121 день', "но вернул '{$decline}'");
        });

        it('должен вернуть "143 дня"', function() {
            $decline = Decliner\Decliner::on(143, new \Decliner\Declinable\Word('день', 'дня', 'дней'));
            assert($decline === '143 дня', "но вернул '{$decline}'");
        });

    });

});