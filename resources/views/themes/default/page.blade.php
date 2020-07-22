@extends(theme_layout('default'))

@section('content')

    @isset($title)
        @includeIf($THEMEBLOCK->banner)
    @endisset

    @isset($blocks)
        @foreach($blocks as $block)
            @includeIf(theme_block($block->name))
        @endforeach
    @endisset

    @isset($post)
        @includeIf($THEMEBLOCK->banner)
    @endisset
    
    {{-- @include($THEMEBLOCK->banner) --}}
    {{-- @include($THEMEBLOCK->sliders)
    @include($THEMEBLOCK->about)
    @include($THEMEBLOCK->staff)
    @include($THEMEBLOCK->history)
    @include($THEMEBLOCK->statement)
    @include($THEMEBLOCK->news)
    @include($THEMEBLOCK->gallery)
    @include($THEMEBLOCK->contact) --}}

@endsection