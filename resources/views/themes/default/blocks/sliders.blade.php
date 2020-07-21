    <div id="layerslider">
        @foreach(get_site('sliders') as $slider)
            <div class="ls-slide" data-ls="transition2d:48;timeshift:-2000;">
                <!-- Background image -->
                <img src="{{ $slider->image }}" class="ls-bg"  alt="Slide background"/>
                <!-- Text -->
                <div class="ls-l header-text" data-ls="offsetxin:0;durationin:2000;delayin:200;easingin:easeInOutExpo;rotatexin:100;scalexin:0.8;scaleyin:0.8;transformoriginin:50% 50% -150;offsetxout:0;durationout:500;rotatexout:-20;scalexout:0.8;scaleyout:0.8;transformoriginout:50% 50% -150;">
                <h1>{{ $slider->title }}</h1>
                <p class="subtitle hidden-xs"> {{ $slider->subtitle }} </p>
                <!-- Button -->
                <div class="page-scroll hidden-xs">
                    <a class="btn" href="{{ $slider->link }}">{{ $slider->action }}</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>