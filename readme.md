# AUSGEZEICHNET.org Seal for KirbyCMS

## Installation

Via composer: 

```bash
composer require deichrakete/kirby-ausgezeichnet
```

or just place it into the `site/plugins` folder.

## Configuration

You can define the following options:

```php
# site/config.php

return [
    'deichrakete.ausgezeichnet' => [
        'orgID' => '', # your AUSGEZEICHNET.org ID
        'lang' => 'de_DE', # language of the Seal
        'use-snippet' => false, # see description below
        'type' => 'rounded',
        'position' => 'right',
        'margin-bottom' => 0,
        'margin-horizontal' => 0,
        'background-color' => '#ffffff',
        'panel-background-color' => '#4e4d4d',
        'panel-text-color' => '#ffffff'
    ]
]
```

The Seal loads per default in a render hook. If you want to load the Seal with a snippet, just change `use-snippet` to `true` and place `snippet('ausgezeichnet-seal')` in your template.
