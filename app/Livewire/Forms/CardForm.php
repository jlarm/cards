<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CardForm extends Form
{
    #[Validate(['required'])]
    public $name = '';

    #[Validate(['required', 'string', 'max:255'])]
    public $team = '';

    #[Validate(['nullable', 'string', 'max:255'])]
    public $set = '';

    #[Validate(['nullable', 'string', 'max:255'])]
    public $card_number = '';

    #[Validate(['nullable', 'string', 'max:255'])]
    public $variation = '';

    #[Validate(['nullable', 'string', 'max:255'])]
    public $grade = '';

    #[Validate(['nullable', 'string', 'max:255'])]
    public $graded_by = '';

    #[Validate(['nullable', 'string', 'max:255'])]
    public $condition = '';

    #[Validate(['nullable'])]
    public $estimated_price;

    #[Validate(['nullable'])]
    public $purchase_price;

    #[Validate(['nullable', 'string', 'max:255'])]
    public $status = '';

    #[Validate(['nullable'])]
    public $sold_price;

    #[Validate(['nullable', 'date'])]
    public $sold_date = '';

    #[Validate(['nullable', 'file', 'mimes:jpg,jpeg'])]
    public $image = '';

    #[Validate(['nullable'])]
    public $notes = '';
}
