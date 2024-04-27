<div class="mx-auto contenedor h-full flex items-center justify-between">
    <h1 class="text-white font-bold text-2xl md:text-3xl">PayPal Fees</h1>

    <nav class="hidden md:flex gap-5 lg:gap-10 text-white text-sm lg:text-base">
        <a href="https://betocodigo.dev/a">betocodigo.dev</a>
        <a href="https://github.com/">Ver Código en GitHub</a>
    </nav>

    @if(request()->routeIs('livewire-version'))
        <a href="{{ route('alpine-version') }}" class="version">Ver Versión AlpineJs</a>
    @else
        <a href="{{ route('livewire-version') }}" class="version">Ver Versión Livewire</a>
    @endif
</div>
