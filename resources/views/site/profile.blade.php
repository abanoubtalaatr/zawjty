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
                                <select class="form-control" name="residing_in" id="exampleFormControlSelect1">
                                    @if(auth()->user()->residing_in=='السعودية')
                                        <option value="السعودية" selected>السعودية</option>
                                    @endif

                                    @if(auth()->user()->residing_in == 'الإمارات')
                                        <option value="الإمارات" selected>الإمارات</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='الكويت')
                                        <option value="الكويت" selected>الكويت</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='قطر')
                                        <option value="قطر" selected>قطر</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='البحرين')
                                        <option value="البحرين" selected>البحرين</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='عمان')
                                        <option value="عمان" selected>عمان</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='اليمن')
                                        <option value="اليمن" selected>اليمن</option>

                                    @endif

                                    @if(auth()->user()->residing_in=='الأردن')
                                        <option value="الأردن" selected>الأردن</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='سورية')
                                        <option value="سورية" selected>سورية</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='لبنان')
                                        <option value="لبنان" selected>لبنان</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='فلسطين')
                                        <option value="فلسطين" selected>فلسطين</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='مصر')
                                        <option value="مصر" selected>مصر</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='العراق')
                                        <option value="العراق" selected>العراق</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='المغرب')
                                        <option value="المغرب" selected>المغرب</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='الجزائر')
                                        <option value="الجزائر" selected>الجزائر</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='تونس')
                                        <option value="تونس" selected>تونس</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='ليبيا')
                                        <option value="ليبيا" selected>ليبيا</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='السودان')
                                        <option value="السودان" selected>السودان</option>
                                    @endif

                                    @if(auth()->user()->residing_in=='الصومال')
                                        <option value="الصومال" selected>الصومال</option>
                                    @endif

                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الجنسية</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="nationality" id="exampleFormControlSelect1">
                                    @if(auth()->user()->nationality=='السعودية')
                                        <option value="السعودية" selected>السعودية</option>
                                    @endif

                                    @if(auth()->user()->nationality == 'الإمارات')
                                        <option value="الإمارات" selected>الإمارات</option>
                                    @endif

                                    @if(auth()->user()->nationality=='الكويت')
                                        <option value="الكويت" selected>الكويت</option>
                                    @endif

                                    @if(auth()->user()->nationality=='قطر')
                                        <option value="قطر" selected>قطر</option>
                                    @endif

                                    @if(auth()->user()->nationality=='البحرين')
                                        <option value="البحرين" selected>البحرين</option>
                                    @endif

                                    @if(auth()->user()->nationality=='عمان')
                                        <option value="عمان" selected>عمان</option>
                                    @endif

                                    @if(auth()->user()->nationality=='اليمن')
                                        <option value="اليمن" selected>اليمن</option>

                                    @endif

                                    @if(auth()->user()->nationality=='الأردن')
                                        <option value="الأردن" selected>الأردن</option>
                                    @endif

                                    @if(auth()->user()->nationality=='سورية')
                                        <option value="سورية" selected>سورية</option>
                                    @endif

                                    @if(auth()->user()->nationality=='لبنان')
                                        <option value="لبنان" selected>لبنان</option>
                                    @endif

                                    @if(auth()->user()->nationality=='فلسطين')
                                        <option value="فلسطين" selected>فلسطين</option>
                                    @endif

                                    @if(auth()->user()->nationality=='مصر')
                                        <option value="مصر" selected>مصر</option>
                                    @endif

                                    @if(auth()->user()->nationality=='العراق')
                                        <option value="العراق" selected>العراق</option>
                                    @endif

                                    @if(auth()->user()->nationality=='المغرب')
                                        <option value="المغرب" selected>المغرب</option>
                                    @endif

                                    @if(auth()->user()->nationality=='الجزائر')
                                        <option value="الجزائر" selected>الجزائر</option>
                                    @endif

                                    @if(auth()->user()->nationality=='تونس')
                                        <option value="تونس" selected>تونس</option>
                                    @endif

                                    @if(auth()->user()->nationality=='ليبيا')
                                        <option value="ليبيا" selected>ليبيا</option>
                                    @endif

                                    @if(auth()->user()->nationality=='السودان')
                                        <option value="السودان" selected>السودان</option>
                                    @endif

                                    @if(auth()->user()->nationality=='الصومال')
                                        <option value="الصومال" selected>الصومال</option>
                                    @endif

                                </select>
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">العمر</label>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="age" value="{{auth()->user()->age}}">
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الطول</label>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="long" value="{{auth()->user()->long}}">
                            </div>
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الوزن</label>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="weight"
                                       value="{{auth()->user()->weight}}">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">نوع الشعر</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="type_of_hair" id="exampleFormControlSelect1">
                                    @if(auth()->user()->type_of_hair == 'عادي')
                                        <option value="عادي" selected>عادي</option>
                                    @endif

                                    @if(auth()->user()->type_of_hair =='ناعم')
                                        <option value="ناعم" selected>ناعم</option>
                                    @endif

                                    @if(auth()->user()->type_of_hair =='مجعد')
                                        <option value="مجعد">مجعد</option>
                                    @endif

                                    @if(auth()->user()->type_of_hair =='خشن')
                                        <option value="خشن">خشن</option>
                                    @endif

                                    @if(auth()->user()->type_of_hair =='أصلع قليلا')
                                        <option value="أصلع قليلا">أصلع قليلا</option>
                                    @endif

                                    @if(auth()->user()->type_of_hair =='أصلع')
                                        <option value="أصلع">أصلع</option>
                                    @endif
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون الشعر</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="color_of_hair" id="exampleFormControlSelect1">
                                    <option value="أحمر">أحمر</option>
                                    <option value="أسود">أسود</option>
                                    <option value="أسود داكن">أسود داكن</option>
                                    <option value="أشقر">أشقر</option>
                                    <option value="أشقر داكن">أشقر داكن</option>
                                    <option value="بني فاتح">بني فاتح</option>
                                    <option value="بني داكن">بني داكن</option>
                                    <option value="رمادي">رمادي</option>
                                    <option value="أبيض">أبيض</option>
                                    <option value="غير ذلك">غير ذلك</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون العيون</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="color_of_eye" id="exampleFormControlSelect1">
                                    <option value="أسود">أسود</option>
                                    <option value="بني">بني</option>
                                    <option value="أخضر">أخضر</option>
                                    <option value="أزرق">أزرق</option>
                                    <option value="رمادي">رمادي</option>
                                    <option value="عسلي">عسلي</option>
                                    <option value="غير ذلك">غير ذلك</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">لون البشرة</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="color_of_skin" id="exampleFormControlSelect1">
                                    <option value="أبيض">أبيض</option>
                                    <option value="أسمر">أسمر</option>
                                    <option value="قمحي">قمحي</option>
                                    <option value="قمحي غامق">قمحي غامق</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الحالة الصحية</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="health_status" id="exampleFormControlSelect1">
                                    <option value="سليم">سليم</option>
                                    <option value="غير سليم">غير سليم</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">التدين</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="religiosity" id="exampleFormControlSelect1">
                                    <option value="لست متدين">لست متدين</option>
                                    <option value="متدين قليلا">متدين قليلا</option>
                                    <option value="متدين">متدين</option>
                                    <option value="متدين كثيرا">متدين كثيرا</option>
                                    <option value="ُفضل أن لا اقول">أُفضل أن لا اقول</option>
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
                                <select class="form-control" name="bread" id="exampleFormControlSelect1">
                                    <option value="نعم">نعم</option>
                                    <option value="لا">لا</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الإلتزام بالصلاة</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="commitment_to_prayer" id="exampleFormControlSelect1">
                                    <option value="ملتزم">ملتزم</option>
                                    <option value="غير ملتزم">غير ملتزم</option>
                                    <option value="ُفضل أن لا اقول">أُفضل أن لا اقول</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">التدخين</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="smoking" id="exampleFormControlSelect1">
                                    <option value="غير مدخن">غير مدخن</option>
                                    <option value="مدخن">مدخن</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الإستماع للأغاني</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="listening_to_songs" id="exampleFormControlSelect1">
                                    <option value="لا استمع لها">لا استمع لها</option>
                                    <option value="نعم استمع لها">نعم استمع لها</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">المؤهل العلمي</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="educational_qualification"
                                        id="exampleFormControlSelect1">
                                    <option value="غير دارس">غير دارس</option>
                                    <option value="دراسة متوسط">دراسة متوسطة</option>
                                    <option value="دراسة ثانوية">دراسة ثانوية</option>
                                    <option value="دراسة جامعية">دراسة جامعية</option>
                                    <option value="دكتوراه">دكتوراه</option>
                                    <option value="دراسة ذاتية">دراسة ذاتية</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">مجال العمل</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="working_field" id="exampleFormControlSelect1">
                                    <option value="بدون عمل حاليا">بدون عمل حاليا</option>
                                    <option value="لا زلت أدرس">لا زلت أدرس</option>
                                    <option value="مجال الفن / الأدب">مجال الفن / الأدب</option>
                                    <option value="الإدارة">الإدارة</option>
                                    <option value="مجال التجارة">مجال التجارة</option>
                                    <option value="مجال الأغذية">مجال الأغذية</option>
                                    <option value="مجال الإنشاءات والبناء">مجال الإنشاءات والبناء</option>
                                    <option value="مجال القانون">مجال القانون</option>
                                    <option value="مجال الطب">مجال الطب</option>
                                    <option value="السياسة / الحكومة">السياسة / الحكومة</option>
                                    <option value="متقاعد">متقاعد</option>
                                    <option value="التسويق والمبيعات">التسويق والمبيعات</option>
                                    <option value="صاحب عمل خاص">صاحب عمل خاص</option>
                                    <option value="مجال الهندسة / العلوم">مجال الهندسة / العلوم</option>
                                    <option value="مجال الكمبيوتر أو المعلومات">مجال الكمبيوتر أو المعلومات</option>
                                    <option value="شيء آخر">شيء آخر</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الوضع المادي</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="financial_status" id="exampleFormControlSelect1">
                                    <option value="فقير">فقير</option>
                                    <option value="أقل من المتوسط">أقل من المتوسط</option>
                                    <option value="متوسط">متوسط</option>
                                    <option value="أكتر من المتوسط">أكتر من المتوسط</option>
                                    <option value="جيد">جيد</option>
                                    <option value="ميسور">ميسور</option>
                                    <option value="غني">غني</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الدخل السنوي</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="annual_income" id="exampleFormControlSelect1">
                                    <option value="أقل من 8000 دولار">أقل من 8000 دولار</option>
                                    <option value="أقل من 25 الف دولار">أقل من 25 الف دولار</option>
                                    <option value="أكتر من 25 الف دولار">أكتر من 25 الف دولار</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">يريد زواج</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="wants_marriage" id="exampleFormControlSelect1">
                                    <option value="زواج اول">زواج اول</option>
                                    <option value="زواج ثاني">زواج ثاني</option>
                                    <option value="زواج ثالث">زواج ثالث</option>
                                    <option value="زواج رابع">زواج رابع</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">نوع الزواج المرغوب</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="desired_type_of_marriage"
                                        id="exampleFormControlSelect1">
                                    <option value="زواج عادي">زواج عادي</option>
                                    <option value="زواج مسيار">زواج مسيار</option>
                                    <option value="زواج تعدد">زواج تعدد</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">الحالة الإجتماعية</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="marital_status" id="exampleFormControlSelect1">
                                    <option value="عازب">عازب</option>
                                    <option value="متزوج">متزوج</option>
                                    <option value="مطلق">مطلق</option>
                                    <option value="أرمل">أرمل</option>
                                </select>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="text-right">
                                <label for="exampleFormControlSelect1">إنجاب الأطفال</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="desire_to_have_children"
                                        id="exampleFormControlSelect1">
                                    <option value="نعم">نعم</option>
                                    <option value="لا">لا</option>
                                </select>
                            </div>

                            <div class="text-right">
                                <label for="exampleFormControlSelect1">إنجاب الأطفال</label>
                            </div>
                            <div class="mb-3">
                                <select class="form-control" name="desire_to_have_children"
                                        id="exampleFormControlSelect1">
                                    <option value="نعم">نعم</option>
                                    <option value="لا">لا</option>
                                </select>
                            </div>
                            <!--  -->
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
