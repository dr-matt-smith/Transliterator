<?php

namespace Artemiso\Transliterator\Mapping\uk;

/**
 * Class Passport_2007
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Passport2007 extends Standart
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'щ', 'є', 'ж', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
                'Щ', 'Є', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь',
                'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь'
            ],
            'lat' => [
                'shch', 'ie', 'zh', 'kh', 'ts', 'ch', 'sh', 'iu', 'ia',
                'Shch', 'Ie', 'Zh', 'Kh', 'Ts', 'Ch', 'Sh', 'Iu', 'Ia',
                'a', 'b', 'v', 'g', 'g', 'd', 'e', 'z', 'y', 'i', 'i', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', '',
                'A', 'B', 'V', 'G', 'G', 'D', 'E', 'Z', 'Y', 'I', 'I', 'I', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', ''
            ]
        ];
    }
}