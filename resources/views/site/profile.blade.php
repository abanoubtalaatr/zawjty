@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">تعديل البيانات</h3>
            <div class="brdr-text"></div>
        </div>
    </div>
    <div class="container mt-5 search-for-man">
        <div class="text-right">
            <h5 class="card-title">تعديل البيانات
                <div class="brdr-text-footer-4"></div>
            </h5>
        </div>
        @if(auth()->user()->currentPackage())
            <div class="text-right my-5 ">
                <div class="">
                    مرحبا بك معانا في موقع زوجتي :  <strong class="border px-3 py-2 rounded">{{auth()->user()->name}}</strong>
                </div>
                <hr>
                <div>
                    <h4>باقتك الحالية</h4>
                    <p>
                    <h6>باقة:  {{auth()->user()->currentPackage()->period}} شهر </h6>
                    <h6>تنتهي في:  {{auth()->user()->currentPackage()->expire_at}}</h6>
                    <h6>السعر : {{auth()->user()->currentPackage()->price}} $</h6>
                    </p>
                </div>

            </div>
        @endif
        <form action="{{route('user.update_profile',auth()->user()->id)}}" method="post">
            <div class="row row-cols-2 row-cols-md-2 mt-5 p-3" style="">
                @csrf
                @method('post')
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">معلومات أكثر</label>
                            </div>
                            <div class="mb-3">
                                <textarea name="description"
                                          class="form-control">{{auth()->user()->description}}</textarea>
                            </div>
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">اريد الشريك أن..</label>
                            </div>
                            <div class="mb-3">
                                <textarea name="description_partner"
                                          class="form-control">{{auth()->user()->description_partner}}</textarea>
                            </div>
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">مقيم في</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="country_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Country::all() as $country)
                                        <option
                                            value="{{$country->id}}"@if($country->id ==auth()->user()->country_id) {{'selected'}}@endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الجنسية</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="nationality_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Country::all() as $country)
                                        <option
                                            value="{{$country->id}}"@if($country->id ==auth()->user()->nationality_id) {{'selected'}}@endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">العمر</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="age_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Age::all() as $age)

                                        <option

                                            value="{{$age->id}}" @if($age->id == auth()->user()->age_id){{'selected'}}@endif>{{$age->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الطول</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="long_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Long::all() as $long)
                                        <option
                                            value="{{$long->id}}" @if($long->id == auth()->user()->long_id){{'selected'}}@endif>{{$long->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الوزن</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="weight_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Weight::all() as $weight)
                                        <option
                                            value="{{$weight->id}}" @if($weight->id == auth()->user()->weight_id){{'selected'}}@endif>{{$weight->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="text-right">
                                <label for="exampleFormControlSelect1">نوع الشعر</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="hair_type_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\HairType::all() as $type)
                                        <option
                                            value="{{$type->id}}" @if($type->id == auth()->user()->hair_type_id){{'selected'}}@endif>{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون الشعر</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="hair_color_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\HairColor::all() as $color)
                                        <option
                                            value="{{$color->id}}"@if($color->id == auth()->user()->hair_color_id){{'selected'}}@endif>{{$color->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون العيون</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="color_eye_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\ColorEye::all() as $color)
                                        <option
                                            value="{{$color->id}}"@if($color->id == auth()->user()->color_eye_id){{'selected'}}@endif>{{$color->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون البشرة</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="color_skin_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\ColorEye::all() as $color)
                                        <option
                                            value="{{$color->id}}"@if($color->id == auth()->user()->color_skin_id){{'selected'}}@endif>{{$color->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الحالة الصحية</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="health_status_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\HealthStatus::all() as $status)
                                        <option
                                            value="{{$status->id}}"@if($status->id == auth()->user()->health_status_id){{'selected'}}@endif>{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">التدين</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="religiosity_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Religiosity::all() as $religiosity)
                                        <option
                                            value="{{$religiosity->id}}"@if($religiosity->id == auth()->user()->religiosity_id){{'selected'}}@endif>{{$religiosity->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->

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
                            <div class="mb-3">
                                <select class="form-control" name="beard_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Beard::all() as $beard)
                                        <option
                                            value="{{$beard->id}}"@if($beard->id == auth()->user()->beard_id){{'selected'}}@endif>{{$beard->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الإلتزام بالصلاة</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="commitment_prayer_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\CommitmentPrayer::all() as $prayer)
                                        <option
                                            value="{{$prayer->id}}"@if($prayer->id == auth()->user()->commitment_prayer_id){{'selected'}}@endif>{{$prayer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">التدخين</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="smooking_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Smooking::all() as $smooking)
                                        <option
                                            value="{{$smooking->id}}"@if($smooking->id == auth()->user()->smooking_id){{'selected'}}@endif>{{$smooking->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الإستماع للأغاني</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="music_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Music::all() as $music)
                                        <option
                                            value="{{$music->id}}"@if($music->id == auth()->user()->music_id){{'selected'}}@endif>{{$music->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">المؤهل العلمي</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="eduction_id"
                                        id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Education::all() as $education)
                                        <option
                                            value="{{$education->id}}"@if($education->id == auth()->user()->eduction_id){{'selected'}}@endif>{{$education->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">مجال العمل</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="working_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\Working::all() as $working)
                                        <option
                                            value="{{$working->id}}"@if($working->id == auth()->user()->working_id){{'selected'}}@endif>{{$working->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الوضع المادي</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="financial_status_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\FinancialStatus::all() as $status)
                                        <option
                                            value="{{$status->id}}"@if($status->id == auth()->user()->financial_status_id){{'selected'}}@endif>{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الدخل السنوي</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="annual_income_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\AnnualIncome::all() as $item)
                                        <option
                                            value="{{$item->id}}"@if($item->id == auth()->user()->annual_income_id){{'selected'}}@endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">يريد زواج</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="want_married_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\WantMarried::all() as $item)
                                        <option
                                            value="{{$item->id}}"@if($item->id == auth()->user()->want_married_id){{'selected'}}@endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">نوع الزواج المرغوب</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="marriage_type_id"
                                        id="exampleFormControlSelect1">
                                    @foreach(\App\Models\MarriageType::all() as $item)
                                        <option
                                            value="{{$item->id}}"@if($item->id == auth()->user()->marriage_type_id){{'selected'}}@endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الحالة الإجتماعية</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="marital_status_id" id="exampleFormControlSelect1">
                                    @foreach(\App\Models\MaritalStatus::all() as $item)
                                        <option
                                            value="{{$item->id}}"@if($item->id == auth()->user()->marital_status_id){{'selected'}}@endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">إنجاب الأطفال</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="having_children_id"
                                        id="exampleFormControlSelect1">
                                    @foreach(\App\Models\HavingChildren::all() as $item)
                                        <option
                                            value="{{$item->id}}"@if($item->id == auth()->user()->having_children_id){{'selected'}}@endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="">
                    <button class="btn global-btn-1">
                        تعديل
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
