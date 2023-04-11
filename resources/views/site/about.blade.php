@extends('layouts.app')
@section('content')
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">نبذة عن موقع زوجتي</h3>
            <div class="brdr-text"></div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="jumbotron jumbotron-box-lg text-right">
            <h4 class="card-title">نبذة عن موقع زوجتي</h4>
            <div class="box-1-jumb">
                <p>
                    موقع زوجتي موقع زواج خاص للمسلمين في جميع دول العالم يسعى للمساهمة
                    في مساعدة الجنسين على الزواج الشرعي بطريقة اسلامية ، بتوفير جميع
                    الأدوات الازمة لتسجيل الطلبات والبحث وتسهيل عملية إيجاد الطرف الآخر
                    بالمواصفات المطلوبة
                </p>
            </div>
            <hr class="my-4" />
            <div class="mt-5 mb-5">
                <p class="jumb-title-19 box-1-jumb txt-ju-ju">
                    تعتمد سياسة موقعنا على المبدأيين التاليين :
                </p>
                <p class="box-1-jumb">
                    موقع زوجتي قائم على الزواج الشرعي فقط وليس للتعارف أو الصداقة أو
                    زواج المتعة أو زواج مؤقت أو زواج عرفي، فسياستنا قائمة على الجدية في
                    العرض والإلتزام بالشروط
                </p>
            </div>
            <hr class="my-4" />
            <div class="box-2-jumb">
                <p class="jumb-title-19 txt-ju-ju">القائمين على الموقع :</p>
                <p>
                    جميع القائمين على الموقع مسلمون، من اهل
                    <span class="jumb-title-19">السنة والجماعة</span>
                </p>
            </div>
            <!-- <hr class="my-4" /> -->
        </div>
        <p class="becare-ofurself"><q>نتمنى لك التوفيق في إيجاد شريك حياتك</q></p>
    </div>
@endsection
