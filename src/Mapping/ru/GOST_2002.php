<?php

namespace Artemiso\Transliterator\Mapping\sru;

use Artemiso\Transliterator\TransliterateCharMap;

class GOST_2002 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return  array (
            'cyr' => array(
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
            ),
            'lat' => array(
                'a', 'b', 'v', 'g', 'd', 'e', 'ë', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'č', 'š', 'ŝ', 'ʺ', 'y', 'ʹ', 'è', 'û', 'â',
                'A', 'B', 'V', 'G', 'D', 'E', 'Ë', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Č', 'Š', 'Ŝ', 'ʺ', 'Y', 'ʹ', 'È', 'Û', 'Â'
            )
        );
    }
}