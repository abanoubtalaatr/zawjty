<div style="width: 100%; height: 400px; position: relative" class="my-5">
    <div class="inner-banner-wrap mb-5"
         style="background-image:url({{asset('storage/'. \App\Models\Slider::where('name', $title)->first()->image)}}); height: 100%; width: 100%;background-size: cover">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="inner-banner-content">
                    <div class="header-breadcrumb">
                        <ul class="list-unstyled" style="position: absolute;z-index: 4">
                            {{--                            <li class="fw-bolder text-white" style="font-size:40px">{{ $title ?? 'Default Title' }}</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="overlay"--}}
{{--         style="position:absolute; bottom: 0;top: 0;right: 0;left: 0;background-color: rgba(0,0,0,.35); width: 100%;height: auto"></div>--}}
</div>
