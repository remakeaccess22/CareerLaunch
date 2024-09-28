@props(['job'])

<x-panels class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Laracasts</a>
        <h3 class="group-hover:text-violet-600 transition-colors duration-300 text-xl font-bold">
            {{ $job->title }}
        </h3>
        <p class="text-sm text-gray-400 mt-auto">
            {{ $job->salary }}
        </p>
    </div>
    <div class="space-x-2">
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
    </div>
</x-panels>
