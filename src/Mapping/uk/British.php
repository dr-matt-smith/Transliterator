<?php

namespace Artemiso\Transliterator\Mapping\uk;

/**
 * Class British
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class British extends Standard
{
    protected static $cyr = [
        'щ', 'є', 'ж', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
        'Щ', 'Є', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь',
        'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь'
    ];

    protected static $lat = [
        'shch', 'ye', 'zh', 'kh', 'ts', 'ch', 'sh', 'yu', 'ya',
        'Shch', 'Ye', 'Zh', 'Kh', 'Ts', 'Ch', 'Sh', 'Yu', 'Ya',
        'a', 'b', 'v', 'g', 'g', 'd', 'e', 'z', 'y', 'i', 'ï', 'ĭ', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', '′',
        'A', 'B', 'V', 'G', 'G', 'D', 'E', 'Z', 'Y', 'I', 'Ï', 'Ĭ', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', '′'
    ];
}
