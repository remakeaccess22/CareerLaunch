<x-panels class="flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="group-hover:text-violet-600 transition-colors duration-300 text-xl font-bold">
            {{ $job->employer->name }}
        </h3>
        <p class="text-sm mt-4">
            {{ $job->salary }}
        </p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-2">
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">Manager</x-tag>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>
</x-panels>
