<?php

namespace App\Models;

use App\Observers\CardObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(CardObserver::class)]
class Card extends Model
{
    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'team' => 'string',
            'set' => 'string',
            'card_number' => 'string',
            'variation' => 'string',
            'grade' => 'string',
            'graded_by' => 'string',
            'condition' => 'string',
            'status' => 'string',
            'sold_date' => 'timestamp',
            'image' => 'string',
            'notes' => 'string',
        ];
    }
}
