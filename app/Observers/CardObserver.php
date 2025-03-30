<?php

namespace App\Observers;

use App\Models\Card;
use Illuminate\Support\Str;

class CardObserver
{
    public function creating(Card $card): void
    {
        $card->uuid = (string) Str::uuid();
    }
}
