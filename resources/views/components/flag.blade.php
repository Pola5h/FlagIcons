@props(['type', 'code', 'width' => 'auto', 'height' => 'auto'])

<!-- Embedded CSS for disabling drag, copy, cut, select -->
<style>
    .flag-image {
        user-select: none; /* Prevent text/image selection */
        -webkit-user-drag: none; /* Disable dragging in WebKit browsers */
        pointer-events: none; /* Disable right-click and all pointer-based events */
        cursor: default; /* Keep the default cursor, even when hovering */
    }
</style>

@if ($type === 'country')
    <img src="{{ route('flag.icons', ['type' => 'country', 'file' => 'country-' . $code . '.svg']) }}" 
         alt="{{ $code }} flag" 
         class="flag-image"
         style="width: {{ $width }}; height: {{ $height }};">
@elseif ($type === 'language')
    <img src="{{ route('flag.icons', ['type' => 'language', 'file' => 'language-' . $code . '.svg']) }}" 
         alt="{{ $code }} language" 
         class="flag-image"
         style="width: {{ $width }}; height: {{ $height }};">
@endif
