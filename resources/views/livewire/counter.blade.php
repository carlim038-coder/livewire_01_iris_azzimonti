<div style="text-align: center; margin-top: 50px;">
    <h1>Counter</h1>
    <h2>Valore: {{ $counter }}</h2>
    
    <button wire:click="increase">+</button>
    <button wire:click="decrease">-</button>
    
    <br><br>

    <button wire:click="increaseByNumber(5)">+5</button>
    <button wire:click="decreaseByNumber(5)">-5</button>
</div>