<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class GOST_1983
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class GOST_1983 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'щ', 'ю', 'я',
                'Щ', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'ъ', 'ы', 'ь', 'э',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Ъ', 'Ы', 'Ь', 'Э',
            ],
            'lat' => [
                'šč', 'ju', 'ja',
                'Šč', 'Ju', 'Ja',
                'a', 'b', 'v', 'g', 'd', 'e', 'ë', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'č', 'š', 'ʺ', 'y', 'ʹ', 'è',
                'A', 'B', 'V', 'G', 'D', 'E', 'Ë', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Č', 'Š', 'ʺ', 'Y', 'ʹ', 'È',
            ]
        ];
    }
}
