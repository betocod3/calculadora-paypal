<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $send = '';
    public string $receive = '';
    public string $fee = '';

    public function calculateSend(): void
    {
        $this->receive = round((floatval($this->send) * 0.946) - 0.3, 2);
        $this->fee = floatval($this->send) - $this->receive;
    }
}; ?>

<div>
    <div class="bg-gray-800 py-7 px-9 rounded flex flex-col gap-5">
        <h2 class="text-white font-bold text-2xl">Calculadora para Enviar</h2>
        <div class="flex flex-col gap-5">
            <div>
                <span class="text-white">Si se envían:</span>
                <div class="flex justify-between items-center">
                    <input type="text" wire:model="send" wire:keydown="calculateSend"
                           class="inputcito" x-mask:dynamic="$money($input, '.', '')">
                    <span class="spancito">$USD</span>
                </div>
            </div>

            <div>
                <span class="text-white">La comisión es de:</span>
                <div class="flex justify-between items-center">
                    <input placeholder="@if($send > 0){{ $fee }}@endif" disabled class="inputcito">
                    <span class="spancito">$USD</span>
                </div>
            </div>

            <div>
                <span class="text-white">Se reciben:</span>
                <div class="flex justify-between items-center">
                    <input placeholder="@if($send > 0){{ $receive }}@endif" disabled class="inputcito">
                    <span class="spancito">$USD</span>
                </div>
            </div>
        </div>
    </div>
</div>
