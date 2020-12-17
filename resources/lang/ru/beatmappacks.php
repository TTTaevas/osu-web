<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'index' => [
        'description' => 'Предварительно упакованные коллекции карт, основанные на общих темах.',
        'nav_title' => 'список',
        'title' => 'Сборки карт',

        'blurb' => [
            'important' => 'ПРОЧИТАЙТЕ ЭТО ПЕРЕД ЗАГРУЗКОЙ',
            'instruction' => [
                '_' => "Установка: как только вы скачали карту, распакуйте содержимое .rar архива в папку osu! > Songs.
                    Все песни внутри сборки будут в формате .zip и/или .osz, поэтому osu! потребуется распаковать их в следующий раз, когда вы начнёте играть.
                    Просим :scary распаковывать эти файлы самостоятельно,
                    так как карта может отображаться некорректно в osu! и не работать",
                'scary' => 'НЕ',
            ],
            'note' => [
                '_' => 'Также, строго советуем вам :scary, так как самые старые карты куда менее качественны, чем самые недавние.',
                'scary' => 'загружать карты, начиная со свежих',
            ],
        ],
    ],

    'show' => [
        'download' => 'Скачать',
        'item' => [
            'cleared' => 'пройдено',
            'not_cleared' => 'не пройдено',
        ],
        'no_diff_reduction' => [
            '_' => ':link не должны быть использованы при прохождении этой сборки.',
            'link' => 'Упрощающие игру моды',
        ],
    ],

    'mode' => [
        'artist' => 'Исполнители/Альбомы',
        'chart' => 'Чарты',
        'standard' => 'Стандартные',
        'theme' => 'Темы',
    ],

    'require_login' => [
        '_' => 'Вы должны :link для загрузки',
        'link_text' => 'войти',
    ],
];
