<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            @foreach ($ports as $port)
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/'.$port['img_1']) }}"
                        title="{{ $port['title'] }}">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/'.$port['img_1']) }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">{{ $port['text'] }}</div>
                            <div class="project-name">{{ $port['title'] }}</div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
