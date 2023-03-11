@extends('layouts.app')
@section('content')
    <div class="container-fluid mb-5">
        <div class="skewed"></div>
        <div class="row row-cols-1 row-cols-md-2 section-hero">
            <div class="col mb-4 section-hero-box-left">
                <div class="card">
                    <h1 class="card-title">
                        زوجتي
                        <br>
                        للزواج الإسلامي
                        <br>
                        نبحث لك عن نصفك الآخر
                    </h1>
                    <q>
                        وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَاجًا
                        لِّتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً ۚ
                        إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِّقَوْمٍ يَتَفَكَّرُونَ
                    </q>
                </div>
            </div>
            <div class="col mb-4 section-hero-box-right">
                <div class="card">
                    <div class="card-body">
                        <form class="p-3" action="{{route('user.search',['title' => 'نتيجة البحث'])}}" method="post">
                            @csrf
                            @method('post')
                            <h5 class="card-title">عن ماذا تبحث ؟</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                                       value="ذكر" checked="">
                                <label class="form-check-label mr-3 ml-3" for="exampleRadios1">
                                    اريد ذكر
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                                       value="انثي">
                                <label class="form-check-label mr-3" for="exampleRadios2">
                                    اريد أنثى
                                </label>
                            </div>
                            <hr class="hr-line">
                            <h5 class="card-title">العمر بين</h5>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="new-label-fay">من عام</label>
                                        <select name="fromAge" class="form-control input-age">
                                            <option value="18">18</option>
                                            <option value="23" selected="">23</option>
                                            <option value="28">28</option>
                                            <option value="33">33</option>
                                            <option value="38">38</option>
                                            <option value="43">43</option>
                                            <option value="48">48</option>
                                            <option value="53">53</option>
                                            <option value="58">58</option>
                                            <option value="63">63</option>
                                            <option value="68">68</option>
                                            <option value="73">73</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2" class="new-label-fay">الي عام</label>
                                        <select name="toAge" class="form-control input-age">
                                            <option value="20">20</option>
                                            <option value="27">27</option>
                                            <option value="34">34</option>
                                            <option value="41">41</option>
                                            <option value="48" selected="">48</option>
                                            <option value="55">55</option>
                                            <option value="62">62</option>
                                            <option value="69">69</option>
                                            <option value="76">76</option>
                                            <option value="83">83</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right mt-3">
                                <button class="btn w-25 img-w-res global-btn-fa" type="submit">
                                    ابحث الان
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container Xumbotron-be-one-ofus">
        <div class="row">
            <div class="jumbotron mt-5 mb-5 text-center">
                <h3 class="card-title">إشترك الان</h3>
                <p class="card-text text-p">
                    زوجتي هو موقع زواج عربي إسلامي يتيح لجميع الاعضاء التسجيل مجانا، وهو
                    للزواج فقط ولا مجال للتعارف أو للصداقة أو غيرها فسياسة الموقع قائمة
                    على تعاليم الدين الإسلامي
                </p>
                <a href="{{route('user.packages')}}" class="btn global-btn-3 btn-md">
                    إشترك الان
                    <i class="fas fa-long-arrow-alt-left"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="mainss mt-5">
        <div class="text-right mr-5 mt-4 mb-4">
            <h5 class="friends text-right">
                ابرز المشتركين
                <div class="brdr-text-footer-5"></div>
            </h5>
        </div>
        <div class="slide-container">
            <img id="slide-left" class="arrow" src="{{asset('imgs/next.png')}}">
            <div class="container-fluid parent-box" id="slider">
                @foreach($mostPopular as $index => $popular)
                    <div class="thumbnail">
                        <div class="col mb-4 text-center">
                            <a href="user/{{$popular->id}}/details">
                                <div class="card px-4" style="border-radius: 5px">
                                    <div class="card-body">
                                        <div>
                                            <img src="https://picsum.photos/200/300?random={{$index}}" class="w-100"
                                                 alt="...">
                                        </div>
                                        <h5 class="card-title">{{$popular->name}}</h5>
                                        <p>{{$popular->age}} عام</p>
                                        <!-- <button class="btn btn-2 w-100">see</button> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <img id="slide-right" class="arrow" src="{{asset('imgs/left-arrow.png')}}">
        </div>
    </div>
    <div class="container-fluid">
        <svg class="svg-homepage" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="path-home" fill-opacity="1"
                  d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <div class="row row-cols-2 new-quick-links-55 row-cols-md-4">
            <div class="col mb-1 mt-1">
                <a href="onlinenow.html">
                    <div class="card">
                        <div class="text-center">
                            <img src="{{asset('imgs/onlinenow.svg')}}" class="card-img-top w-75" alt="onlinenow">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">متواجدون الان</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-1 mt-1">
                <a href="storylove.html">
                    <div class="card">
                        <div class="text-center">
                            <img src="{{asset('imgs/storyloves.svg')}}" class="card-img-top w-75" alt="storyloves">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">قصص النجاح</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-1 mt-1">
                <a href="{{route('user.new_man')}}">
                    <div class="card">
                        <div class="text-center">
                            <img src="{{asset('imgs/newus.svg')}}" class="card-img-top w-75" alt="newusers">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">أعضاء جدد</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-1 mt-1">
                <a href="{{route('user.new_woman')}}">
                    <div class="card">
                        <div class="text-center">
                            <img src="{{asset('imgs/beoneofus.svg')}}" class="card-img-top w-75" alt="beoneofus">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">إشترك مجانا</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="mainss mt-5 mb-5">
        <div class="text-right mr-5 mt-5 mb-4">
            <h5 class="friends text-right">
                آخر الأعضاء دخولا

                <div class="brdr-text-footer-5"></div>
            </h5>
        </div>
        <div class="slide-container">
            <img id="slide-left" class="arrow" src="{{asset('imgs/next.png')}}">
            <div class="container-fluid parent-box" id="slider">
                @foreach($newUsers as $index=> $user)
                    <div class="thumbnail">
                        <div class="col mb-4 text-center">
                            <a href="/admin/{{$user->id}}/details">
                                <div class="card px-4" style="border-radius: 5px">
                                    <div class="card-body">
                                        <div>
                                            <img src="https://picsum.photos/200/300?random={{$index}}" class="w-100" alt="...">
                                        </div>
                                        <h5 class="card-title">{{$user->name}}</h5>
                                        <p>{{$user->age}} عام</p>
                                        <!-- <button class="btn btn-2 w-100">see</button> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <img id="slide-right" class="arrow" src="{{asset('imgs/left-arrow.png')}}">
        </div>
    </div>
@endsection
