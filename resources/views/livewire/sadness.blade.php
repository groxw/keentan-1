<div>


    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if ($inhale == 0)
    <div class="flex w-full">
        <p wire:poll>{{ $seconds }}</p>
        <div class="grid h-20 flex-grow card bg-base-300 rounded-box place-items-center" wire:poll>{{ $count }}</div>
        <div class="divider divider-horizontal">OR</div>
        <div class="grid h-20 flex-grow card bg-base-300 rounded-box place-items-center">
            <div class="radial-progress" style="--value:{{ $count }}; --size:12rem; --thickness: 2rem;">
                <div class="progress-bar"></div>

            </div>
            <button id="startButton" wire:click='startCounter'>Start</button>
            <button id="startButton" wire:click='exhale'>Stop</button>
            


        </div>
      </div>
    
    @endif
</div>

<script>
    document.addEventListener('livewire:init', function () {
        Livewire.on('startCounter', function (data) {
            let count = 0;
            let interval = setInterval(function () {
                if (count <= 100) {
                    @this.set('count', count) ;
                    count++;
                } else {
                    clearInterval(interval);
                }
            }, data.timeInterval);
        });
    });
</script>

