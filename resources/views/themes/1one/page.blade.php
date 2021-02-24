@extends(theme_layout('1one'))

@section('content')

    @isset($blocks)
        @foreach($blocks as $block)
            @includeIf(theme_block($block->name))
        @endforeach
    @endisset


@endsection