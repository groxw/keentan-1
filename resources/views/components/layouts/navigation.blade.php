<x-slot:sidebar class="bg-base-100" drawer="main-drawer">
    <x-menu title="Components" icon="o-cursor-arrow-rays" separator>
        <x-menu-item title="Messages" icon="o-envelope"   />
        <x-menu-item title="Navigate to Alert docs" icon="o-arrow-right" link="/docs/components/alert" />

        <x-menu-separator />
        <x-menu-item title="Another item"  />

        <x-menu-separator title="Magic" icon="o-sparkles"  />
        <x-menu-item title="Hello"  />
        <x-menu-item title="Active state" active />

        <x-menu-separator title="Tricks"  />
        <x-menu-item title="Hi"  />
        <x-menu-item title="Some style" class="text-purple-500 font-bold" />
    </x-menu>
</x-slot:sidebar>
