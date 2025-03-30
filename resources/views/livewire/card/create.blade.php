<div class="mx-auto max-w-2xl">
    <form class="space-y-3">
        <flux:field>
            <flux:label>Player Name</flux:label>

            <flux:input size="sm" wire:model="form.playerName" type="text" />

            <flux:error name="playerName" />
        </flux:field>

        <flux:field>
            <flux:label>Team Name</flux:label>

            <flux:input size="sm" wire:model="form.teamName" type="text" />

            <flux:error name="teamName" />
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

            <flux:input size="sm" wire:model="form.estimatedPrice" type="text" placeholder="99.99" />

            <flux:error name="estimatedPrice" />
        </flux:field>

        <flux:field>
            <flux:label>Purchase Price</flux:label>

            <flux:input size="sm" wire:model="form.purchasedPrice" type="text" placeholder="99.99" />

            <flux:error name="purchasedPrice" />
        </flux:field>

        <flux:field>
            <flux:label>Status</flux:label>

            <flux:input size="sm" wire:model="form.status" type="text" />

            <flux:error name="status" />
        </flux:field>

        <div class="grid grid-cols-2 gap-x-3">
            <flux:field>
                <flux:label>Sold Price</flux:label>

                <flux:input size="sm" wire:model="form.soldPrice" type="text" placeholder="99.99" />

                <flux:error name="soldPrice" />
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

        <flux:button variant="primary">Submit</flux:button>
    </form>
</div>
