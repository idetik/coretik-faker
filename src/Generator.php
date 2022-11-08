<?php

namespace Coretik\Faker;

use Faker\Factory;
use Coretik\Faker\Provider\Post;
use Coretik\Faker\Provider\Page;
use Coretik\Faker\Provider\Attachment;

class Generator
{
    public static function get()
    {
        $generator = Factory::create('fr_FR');
        $generator->addProvider(new Attachment($generator));
        $generator->addProvider(new Page($generator));
        $generator->addProvider(new Post($generator));
        return $generator;
    }
}
