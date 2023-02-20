@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">{{request()->has('gender') && request()->gender =='man'?'البحث عن ذكر':'البحث عن انثي'}}</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5 search-for-man">
        <div class="text-right">
            <h5 class="card-title">
                <i class="fas fa-search"></i>{{request()->has('gender') && request()->gender =='man'?'البحث التفصيلي عن ذكر':'البحث التفصيلي عن انثي'}}
                <div class="brdr-text-footer-4"></div>
            </h5>
        </div>
        <form action="{{route('user.search')}}" method="post">
            @csrf
            @method('post')

            @if(request()->has('gender'))
                @if(request()->get('gender') == 'man')
                    <input hidden name="gender" value="ذكر">

                @else
                    <input hidden name="gender" value="انثي">
                @endif

            @endif
            <div class="row row-cols-2 row-cols-md-2 mt-5 p-3">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-right">
                                <label for="exampleFormControlSelect1">مقيم في</label>
                            </div>
                            <div>
                                <select class="form-control" name="country_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\Country::all() as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الجنسية</label>
                            </div>
                            <div>
                                <select class="form-control" name="nationality_id" id="exampleFormControlSelect1">
                                    <option value=""></option>

                                    @foreach(\App\Models\Nationality::all() as $nationality)
                                        <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">العمر من</label>
                            </div>
                            <div>
                                <select class="form-control" name="fromAge" id="exampleFormControlSelect1">
                                    <option value=""></option>

                                    @foreach(\App\Models\Age::all() as $age)
                                        <option value="{{$age->id}}">{{$age->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">العمر الي</label>
                            </div>
                            <div>
                                <select class="form-control" name="toAge" id="exampleFormControlSelect1">
                                    <option value=""></option>

                                    @foreach(\App\Models\Age::all() as $age)
                                        <option value="{{$age->id}}">{{$age->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1"> الطول من</label>
                            </div>
                            <div>
                                <select class="form-control" name="fromLong" id="exampleFormControlSelect1">
                                    <option value=""></option>

                                    @foreach(\App\Models\Long::all() as $long)
                                        <option value="{{$long->id}}">{{$long->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-right">
                                <label for="exampleFormControlSelect1"> الطول الي</label>
                            </div>
                            <div>
                                <select class="form-control" name="toLong" id="exampleFormControlSelect1">
                                    <option value=""></option>

                                    @foreach(\App\Models\Long::all() as $long)
                                        <option value="{{$long->id}}">{{$long->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1"> الوزن من</label>
                            </div>
                            <div>
                                <select class="form-control" name="weight" id="exampleFormControlSelect1">
                                    {{--                                    <option value="0" selected="">الكل</option>--}}
                                    <option value=""></option>

                                    @foreach(\App\Models\Weight::all() as $weight)
                                        <option value="{{$weight->id}}">{{$weight->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">نوع الشعر</label>
                            </div>
                            <div>
                                <select class="form-control" name="hair_type_id" id="exampleFormControlSelect1">
                                    <option value=""></option>

                                    @foreach(\App\Models\HairType::all() as $hairType)
                                        <option value="{{$hairType->id}}">{{$hairType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون الشعر</label>
                            </div>
                            <div>
                                <select class="form-control" name="hair_color_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\HairColor::all() as $hairColor)
                                        <option value="{{$hairColor->id}}">{{$hairColor->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون العيون</label>
                            </div>
                            <div>
                                <select class="form-control" name="color_eye_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\ColorEye::all() as $colorEye)
                                        <option value="{{$colorEye->id}}">{{$colorEye->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون البشرة</label>
                            </div>
                            <div>
                                <select class="form-control" name="color_skin_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\ColorSkin::all() as $colorSkin)
                                        <option value="{{$colorSkin->id}}">{{$colorSkin->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الحالة الصحية</label>
                            </div>
                            <div>
                                <select class="form-control" name="health_status_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\HealthStatus::all() as $healthStatus)
                                        <option value="{{$healthStatus->id}}">{{$healthStatus->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">التدين</label>
                            </div>
                            <div>
                                <select class="form-control" name="religiosity_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\Religiosity::all() as $religiosity)
                                        <option value="{{$religiosity->id}}">{{$religiosity->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">اللحية</label>
                            </div>
                            <div>
                                <select class="form-control" name="beard_id" id="exampleFormControlSelect1">
                                    {{--                                    <option value="0" selected="">الكل</option>--}}
                                    <option value=""></option>
                                    @foreach(\App\Models\Beard::all() as $beard)
                                        <option value="{{$beard->id}}">{{$beard->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الإلتزام بالصلاة</label>
                            </div>
                            <div>
                                <select class="form-control" name="commitment_prayer_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\CommitmentPrayer::all() as $commitmentPrayer)
                                        <option value="{{$commitmentPrayer->id}}">{{$commitmentPrayer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">التدخين</label>
                            </div>
                            <div>
                                <select class="form-control" name="smoking_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\Smooking::all() as $smooking)
                                        <option value="{{$smooking->id}}">{{$smooking->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الإستماع للأغاني</label>
                            </div>
                            <div>
                                <select class="form-control" name="music_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\Music::all() as $music)
                                        <option value="{{$music->id}}">{{$music->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">المؤهل العلمي</label>
                            </div>
                            <div>
                                <select class="form-control" name="eduction_id"
                                        id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\Education::all() as $eduction)
                                        <option value="{{$eduction->id}}">{{$eduction->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">مجال العمل</label>
                            </div>
                            <div>
                                <select class="form-control" name="working_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\Working::all() as $working)
                                        <option value="{{$working->id}}">{{$working->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الوضع المادي</label>
                            </div>
                            <div>
                                <select class="form-control" name="financial_status_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\FinancialStatus::all() as $status)
                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الدخل السنوي</label>
                            </div>
                            <div>
                                <select class="form-control" name="annual_income_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\AnnualIncome::all() as $income)
                                        <option value="{{$income->id}}">{{$income->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">يريد زواج</label>
                            </div>
                            <div>
                                <select class="form-control" name="want_married_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\WantMarried::all() as $status)
                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">نوع الزواج المرغوب</label>
                            </div>
                            <div>
                                <select class="form-control" name="marriage_type_id"
                                        id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\MarriageType::all() as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الحالة الإجتماعية</label>
                            </div>
                            <div>
                                <select class="form-control" name="marital_status_id" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\MaritalStatus::all() as $status)
                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">إنجاب الأطفال</label>
                            </div>
                            <div>
                                <select class="form-control" name="having_children_id"
                                        id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    @foreach(\App\Models\HavingChildren::all() as $children)
                                        <option value="{{$children->id}}">{{$children->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-search mb-4 mt-4">
                <button class="btn global-btn-1" type="submit">
                    ابحث الان
                    <i class="fas fa-long-arrow-alt-left"></i>
                </button>
            </div>
        </form>
    </div>
@endsection
