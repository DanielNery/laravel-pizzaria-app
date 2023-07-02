<div class="flex items-center">
    @for ($i = 1; $i <= 5; $i++)
        @if ($rating >= $i)
            <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 24 24">
                <path d="M12 2L14.2737 7.54549H20.647L15.5454 11.9277L17.8191 17.4732L12 14.5098L6.18092 17.4732L8.45459 11.9277L3.35303 7.54549H9.72626L12 2Z"/>
            </svg>
        @else
            <svg class="w-4 h-4 text-gray-400 fill-current" viewBox="0 0 24 24">
                <path d="M12 2L14.2737 7.54549H20.647L15.5454 11.9277L17.8191 17.4732L12 14.5098L6.18092 17.4732L8.45459 11.9277L3.35303 7.54549H9.72626L12 2Z"/>
            </svg>
        @endif
    @endfor
</div>
