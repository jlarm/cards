<?php

namespace App\Observers;

use App\Models\Card;
use Illuminate\Support\Str;

class CardObserver
{
    public function creating(Card $card): void
    {
        $card->uuid = (string) Str::uuid();
        $card->estimated_price = $card->estimated_price * 100;
        $card->purchase_price = $card->purchase_price * 100;
        $card->sold_price = $card->sold_price * 100;
    }
}
