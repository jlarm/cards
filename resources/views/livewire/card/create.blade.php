<div class="mx-auto max-w-2xl">
    <form wire:submit.prevent="addCard" class="space-y-3">
        <flux:field>
            <flux:label>
                Player Name
                <span class="text-red-500">*</span>
            </flux:label>

            <flux:input size="sm" wire:model="form.name" type="text" />

            <flux:error name="name" />
        </flux:field>

        <flux:field>
            <flux:label>
                Team Name
                <span class="text-red-500">*</span>
            </flux:label>

            <flux:input size="sm" wire:model="form.team" type="text" />

            <flux:error name="team" />
        </flux:field>

        <flux:field>
            <flux:label>Set Name</flux:label>

            <flux:input size="sm" wire:model="form.setName" type="text" />

            <flux:error name="setName" />
        </flux:field>

        <flux:field>
            <flux:label>Card Number</flux:label>

            <flux:input size="sm" wire:model="form.cardNumber" type="text" />

            <flux:error name="cardNumber" />
        </flux:field>

        <flux:field>
            <flux:label>Variation</flux:label>

            <flux:input size="sm" wire:model="form.variation" type="text" />

            <flux:error name="variation" />
        </flux:field>

        <flux:field>
            <flux:label>Grade</flux:label>

            <flux:input size="sm" wire:model="form.grade" type="text" />

            <flux:error name="grade" />
        </flux:field>

        <flux:field>
            <flux:label>Graded By</flux:label>

            <flux:input size="sm" wire:model="form.gradedBy" type="text" />

            <flux:error name="gradedBy" />
        </flux:field>

        <flux:field>
            <flux:label>Condition</flux:label>

            <flux:input size="sm" wire:model="form.condition" type="text" />

            <flux:error name="condition" />
        </flux:field>

        <flux:field>
            <flux:label>Estimated Price</flux:label>

            <flux:input size="sm" wire:model="form.estimated_price" type="text" placeholder="99.99" />

            <flux:error name="estimated_price" />
        </flux:field>

        <flux:field>
            <flux:label>Purchase Price</flux:label>

            <flux:input size="sm" wire:model="form.purchased_price" type="text" placeholder="99.99" />

            <flux:error name="purchased_price" />
        </flux:field>

        <flux:field>
            <flux:label>Status</flux:label>

            <flux:input size="sm" wire:model="form.status" type="text" />

            <flux:error name="status" />
        </flux:field>

        <div class="grid grid-cols-2 gap-x-3">
            <flux:field>
                <flux:label>Sold Price</flux:label>

                <flux:input size="sm" wire:model="form.sold_price" type="text" placeholder="99.99" />

                <flux:error name="sold_price" />
            </flux:field>

            <flux:field>
                <flux:label>Sold Date</flux:label>

                <flux:date-picker size="sm" wire:model="form.soldDate" type="date" />

                <flux:error name="soldDate" />
            </flux:field>
        </div>

        <flux:field>
            <flux:label>Image</flux:label>

            <flux:input size="sm" wire:model="form.image" type="file" />

            <flux:error name="image" />
        </flux:field>

        <flux:field>
            <flux:label>Notes</flux:label>

            <flux:editor wire:model="form.notes" />

            <flux:error name="notes" />
        </flux:field>

        <flux:button type="submit" variant="primary">Submit</flux:button>
    </form>
</div>
