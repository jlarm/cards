<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'team' => 'integer',
            'set' => 'string',
            'card_number' => 'string',
            'variation' => 'string',
            'grade' => 'string',
            'graded_by' => 'string',
            'condition' => 'string',
            'estimated_price' => 'integer',
            'purchase_price' => 'integer',
            'status' => 'string',
            'sold_price' => 'integer',
            'sold_date' => 'timestamp',
            'image' => 'string',
            'notes' => 'string',
        ];
    }
}
