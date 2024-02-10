@props([
    'id' => 0,
    'thumbnail' => '',
    'title' => 'Failed to load, contact admin',
    'hashtags' => [],
    'description' => '',
    'goal' => 'Failed to load, contact admin',
    'collected' => 'Failed to load, contact admin',
])

<a href="{{ route('cause.show', $id) }}"
    class="flex flex-col bg-white rounded-lg lg:max-h-64 lg:flex-row dark:bg-gray-800 w-[900px]">
    <img class="object-cover w-screen rounded-t-lg max-h-64 lg:max-h-full lg:rounded-t-none lg:rounded-l-lg lg:w-1/3"
        src="{{ $thumbnail }}" alt="Thumbnail">
    <div class="flex flex-col w-full px-2 pt-4 pb-6 lg:p-4">
        <div class="flex flex-col gap-3 lg:flex-row lg:gap-5">
            <h1 class="text-4xl text-left text-nowrap">{{ $title }}</h1>
            <div class="flex flex-wrap items-start w-full gap-2 lg:w-4/5">
                @if ($hashtags)
                    @foreach ($hashtags as $hashtag)
                        <x-hashtag :value="$hashtag" />
                    @endforeach
                @endif
            </div>
        </div>
        <p class="mt-3 overflow-y-auto h-28">{{ $description }}</p>
        <x-progress-bar :goal="$goal" :collected="$collected" />
    </div>
</a>
