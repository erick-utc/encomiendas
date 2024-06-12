@props(['type' => 'info'])

@php
    switch ($type)
    {
        case 'info':
            $css = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
        break;

        case 'danger':
            $css = "text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400";
        break;

        case 'success':
            $css = "text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400";
        break;
    
    default:
        $css = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
    break;
    }
@endphp

<div {{ $attributes-> merge(['class' => 'p-4 text-sm rounded-lg ' . $css]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Default title' }}</span> {{ $slot }}
</div>