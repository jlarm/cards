<div class="mx-auto max-w-2xl">
    <form class="space-y-3">
        <flux:field>
            <flux:label>Player Name</flux:label>

            <flux:input size="sm" wire:model="playerName" type="text" />

            <flux:error name="playerName" />
        </flux:field>

        <flux:field>
            <flux:label>Team Name</flux:label>

            <flux:input size="sm" wire:model="teamName" type="text" />

            <flux:error name="teamName" />
        </flux:field>

        <flux:field>
            <flux:label>Set Name</flux:label>

            <flux:input size="sm" wire:model="setName" type="text" />

            <flux:error name="setName" />
        </flux:field>

        <flux:field>
            <flux:label>Card Number</flux:label>

            <flux:input size="sm" wire:model="cardNumber" type="text" />

            <flux:error name="cardNumber" />
        </flux:field>

        <flux:field>
            <flux:label>Variation</flux:label>

            <flux:input size="sm" wire:model="variation" type="text" />

            <flux:error name="variation" />
        </flux:field>

        <flux:field>
            <flux:label>Grade</flux:label>

            <flux:input size="sm" wire:model="grade" type="text" />

            <flux:error name="grade" />
        </flux:field>

        <flux:field>
            <flux:label>Graded By</flux:label>

            <flux:input size="sm" wire:model="gradedBy" type="text" />

            <flux:error name="gradedBy" />
        </flux:field>

        <flux:field>
            <flux:label>Condition</flux:label>

            <flux:input size="sm" wire:model="condition" type="text" />

            <flux:error name="condition" />
        </flux:field>

        <flux:field>
            <flux:label>Estimated Price</flux:label>

            <flux:input size="sm" wire:model="estimatedPrice" type="text" placeholder="99.99" />

            <flux:error name="estimatedPrice" />
        </flux:field>

        <flux:field>
            <flux:label>Purchase Price</flux:label>

            <flux:input size="sm" wire:model="purchasedPrice" type="text" placeholder="99.99" />

            <flux:error name="purchasedPrice" />
        </flux:field>

        <flux:field>
            <flux:label>Status</flux:label>

            <flux:input size="sm" wire:model="status" type="text" />

            <flux:error name="status" />
        </flux:field>

        <div class="grid grid-cols-2 gap-x-3">
            <flux:field>
                <flux:label>Sold Price</flux:label>

                <flux:input size="sm" wire:model="soldPrice" type="text" placeholder="99.99" />

                <flux:error name="soldPrice" />
            </flux:field>

            <flux:field>
                <flux:label>Sold Date</flux:label>

                <flux:date-picker size="sm" wire:model="soldDate" type="date" />

                <flux:error name="soldDate" />
            </flux:field>
        </div>

        <flux:field>
            <flux:label>Image</flux:label>

            <flux:input size="sm" wire:model="image" type="file" />

            <flux:error name="image" />
        </flux:field>

        <flux:field>
            <flux:label>Notes</flux:label>

            <flux:editor wire:model="notes" />

            <flux:error name="notes" />
        </flux:field>

        <flux:button variant="primary">Submit</flux:button>
    </form>
</div>
