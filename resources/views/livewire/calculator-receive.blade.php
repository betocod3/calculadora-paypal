<?php

use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public string $receive = '';
    public string $send = '';
    public string $fee = '';

    public function calculateReceive(): void
    {
        $this->send = round((floatval($this->receive) + 0.30) / 0.946, 2);
        $this->fee = $this->send - floatval($this->receive);
    }
}; ?>

<div class="bg-gray-800 py-7 px-9 rounded flex flex-col gap-5">
    <h2 class="text-white font-bold text-2xl">Calculadora para Recibir</h2>
    <div class="flex flex-col gap-5">
        <div>
            <span class="text-white">Para recibir:</span>
            <div class="flex justify-between items-center">
                <input type="text" wire:model="receive" wire:keydown="calculateReceive"
                       class="inputcito" x-mask:dynamic="$money($input, '.', '')">
                <span class="spancito">$USD</span>
            </div>
        </div>

        <div>
            <span class="text-white">Hay que enviar:</span>
            <div class="flex justify-between items-center">
                <input placeholder="@if($receive > 0){{ $send }}@endif" disabled class="inputcito">
                <span class="spancito">$USD</span>
            </div>
        </div>

        <div>
            <span class="text-white">La comisión es de:</span>
            <div class="flex justify-between items-center">
                <input placeholder="@if($receive > 0){{ $fee }}@endif" disabled class="inputcito">
                <span class="spancito">$USD</span>
            </div>
        </div>
    </div>
</div>
