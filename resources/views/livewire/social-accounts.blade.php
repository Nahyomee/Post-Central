<div class="grid grid-cols-1 grid-rows-1 md:grid-cols-3 gap-4">
    @foreach ($socials as $sm)
        <div
        class="bg-zinc-500 me-4 block rounded-lg shadow-secondary-1 dark:text-white text-surface">
            <div class="p-6">
            <h5
                class="mb-2 text-xl font-medium leading-tight">
                {{$sm->name}}
            </h5>
            <button class="bg-gray">Connect</button>
            </div>
        </div>
        
    @endforeach
    <x-filament::pagination :paginator="$socials" extreme-links />

</div>
