<!-- resources/views/components/Timeline.blade.php -->
<div class="flex flex-col space-y-6 justify-center align-middle m-52">
    @foreach($items as $item)
        <div class="flex">
            <div class="w-5 h-5 flex items-center justify-center bg-red-600 rounded-full">
                <span class="text-white">{{ $item['state'] }}</span>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-white">{{ $item['title'] }}</h3>
                <p class="text-gray-600">{{ $item['description'] }}</p>
            </div>
        </div>
    @endforeach
</div>
