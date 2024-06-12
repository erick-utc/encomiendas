<div {{ $attributes-> merge(['class' => 'p-4 text-sm rounded-lg ' . $css]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Default title' }}</span> {{ $slot }}
</div>