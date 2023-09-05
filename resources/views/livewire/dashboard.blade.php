<div>
    {{-- Be like water. --}}
    <div class="w-full">
      <div class="hero-content flex-col lg:flex-row">
        <img src="{{ asset('img/hap.svg') }}" class="max-w-xs rounded-lg " />
        <div>
          <h3 class="text-4xl font-semibold">Hey <b class="text-warning">Dont be Sad</b> </h3>
          <p class="py-6">Description about what is?</p>
        </div>
      </div>

    </div>
    <div class="flex w-full">
      <div class="grid h-20 flex-grow card bg-warning rounded-box place-items-center">
        <x-button label="Feeling Happy!" icon-right="o-face-smile" class="btn-warning btn-lg" />
      </div>
      <div class="divider divider-horizontal">OR</div>
      <div class="grid h-20 flex-grow card bg-primary rounded-box place-items-center">
        <a href="{{ route('sadness') }}" wire:navigate>
          <x-button label="Feeling Sad" icon-right="o-face-frown"  class="btn-primary btn-lg" />

        </a>

      </div>
    </div>
</div>
