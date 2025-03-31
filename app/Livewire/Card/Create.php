<?php

namespace App\Livewire\Card;

use App\Livewire\Forms\CardForm;
use App\Models\Card;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public CardForm $form;

    public function addCard(): void
    {
        $this->form->validate();

        if ($this->form->image) {
            $this->form->image = $this->form->image->store('cards', 'public');
        }

        Card::create([
            'name' => $this->form->name,
            'team' => $this->form->team,
            'set' => $this->form->set,
            'card_number' => $this->form->card_number,
            'variation' => $this->form->variation,
            'grade' => $this->form->grade,
            'graded_by' => $this->form->graded_by,
            'condition' => $this->form->condition,
            'estimated_price' => $this->form->estimated_price,
            'purchase_price' => $this->form->purchase_price,
            'status' => $this->form->status,
            'sold_price' => $this->form->sold_price,
            'sold_date' => $this->form->sold_date,
            'image' => $this->form->image,
            'notes' => $this->form->notes,
        ]);

        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.card.create')
            ->title('Create Card');
    }
}
