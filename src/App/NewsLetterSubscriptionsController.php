<?php

namespace App;

class NewsLetterSubscriptionsController
{
    public function store(NewsLetter $newsletter)
    {
        $newsletter->subscribe('abc@g.com');
    }
}