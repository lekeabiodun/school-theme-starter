@extends(theme_layout('eclipse'))

@section('content')
	{{-- {{dd($blocks)}} --}}
	@foreach($blocks as $block)
		{!! theme_block('eclipse', $block->name) !!}
	@endforeach
	{{-- {!! theme_block('eclipse', 'sliders') !!}

	{!! theme_block('eclipse', 'statement') !!}

	{!! theme_block('eclipse', 'about') !!}

	{!! theme_block('eclipse', 'news') !!} --}}
	

	{{--
	"news_title"
	"news_subtitle"
	"staff_subtitle"
	"staff_title"
	"history"
	"history_image"
	"statement_title"
	"statement_subtitle"
	"statement_image"
	"mission_title"
	"mission"
	"vision_title"
	"vision"
	"community_title"
	"community"
	"logo"
	"logo-light"
	"working_time_title"
	"address_title"
	"working_time"
	"address"
	"footer_text"
	"mobile"
	"email"
	"contact_title"
	"statement_bg"
	"menu_title"
	"about_title"
	"about_subtitle"
	"about"
	"about_image"
	"site_title"
	"site_subtitle"
	"theme_color"
	"gallery_1"
	"gallery_2"
	"gallery_3"
	"gallery_4"
	"gallery_5"
	"gallery_6"
	"gallery_7"
	"gallery_8"
	"history_title"
	"history_subtitle"
	"contact_subtitle"
	"gallery_title"
	"gallery_subtitle"
	--}}
    
@endsection