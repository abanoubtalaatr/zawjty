<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased" style="direction: rtl">
{{-- <div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

</div> --}}
{{--navbar --}}
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"> زوجتي </a>
    <div style="display: flex; justify-content: space-between">
        <div class="dropdown navbar-toggler ml-5">
            <a class="dropdown-toggle navbar-brand" data-toggle="dropdown">
                <i class="fas fa-user-circle"></i>
            </a>
            <div class="dropdown-menu text-right">
                <a class="dropdown-item" href="">الرسائل</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalNotification"
                   href="javascript:void(0)">الاشعارات</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">تسجيل الخروج</a>
            </div>
        </div>

        <button class="btn-slid navbar-brand" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupsportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-home"></i>
                    الرئيسية
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user/search">
                    <i class="fas fa-search"></i>
                    البحث
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                </a>
                <div class="dropdown-menu text-right">
                    <a class="dropdown-item" href="">الرسائل</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalNotification"
                       href="javascript:void(0)">الاشعارات</a>
                    <div class="dropdown-divider"></div>
                    @if(auth()->user())
                        @if(auth()->user()->user_type=='user' )
                            <form action="{{route('user.logout')}}" method="post">
                                @csrf
                                @method('post')
                                <button class="dropdown-item" type="submit">تسجيل الخروج</button>
                            </form>
                        @endif
                    @endif

                </div>
            </li>
            <li class="nav-item">
                <a>
                    <input type="checkbox" id="switch" name="mode">
                    <label for="switch" class="mt-2 label"></label>
                </a>
            </li>

            <li class="nav-item">
                @if(auth()->user())
                    @if(auth()->user()->user_type=='user')

                    @else
                        <a class="nav-link" href="/user/register">
                            <i class="fas fa-user-plus"></i>
                            تسجيل / دخول
                        </a>
                    @endif
                @else
                    <a class="nav-link" href="/user/register">
                        <i class="fas fa-user-plus"></i>
                        تسجيل / دخول
                    </a>
                @endif
            </li>
        </ul>
    </div>
</nav>
{{--sidebar--}}
<nav class="slidbar-menu slider-navs">
    <ul>
        @if(auth()->user() && auth()->user()->user_type=='user')
            <li class="nav-item">
                <a class="nav-link" href="/user/profile">
                    <i class="fas ml-2 fa-edit"></i>
                    تعديل بياناتي
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                    <i class="fas ml-2 fa-camera"></i>
                    الصورة الشخصية
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <i class="fas ml-2 fa-share-alt"></i>
                وسائل التواصل خارج الموقع
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="upgrade.html">
                <i class="fas ml-2 fa-money-check-alt"></i>
                ترقية عضويتي
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="favusers.html">
                <i class="fas ml-2 fa-heart"></i>
                الأعضاء المعجب بهم
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userslikesme.html">
                <i class="fas ml-2 fa-grin-hearts"></i>
                الأعضاء المعجبين بصفحتي
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="usersvisitme.html">
                <i class="fas ml-2 fa-eye"></i>
                اعضاء زارو صفحتي
            </a>
        </li>
        @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link" href="/user/blocked-user">
                    <i class="fas ml-2 fa-ban"></i>
                    الأعضاء المحجوبين
                </a>
            </li>
        @endif
        @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link" href="/user/stories">
                    <i class="fas ml-2 fa-dove"></i>
                    سجل قصتي الناجحة
                </a>
            </li>
        @endif
    </ul>
</nav>
@yield('content')
<div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-4 border-top border-bottom footer">
        <div class="col mb-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title name-website">زوجتي</h5>
                    <p class="card-text about-us-text">
                        نرتقي بك لتكون الإستثناء الجميل وسط زحام المنافسين. بإبداعٍ ..
                    </p>
                    <ul class="social-media">
                        <li>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://accounts.snapchat.com/"><i class="fab fa-snapchat-ghost"></i></a>
                        </li>
                        <li>
                            <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col mb-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title quick-link">
                        الدخول
                        <div class="brdr-text-footer-0"></div>
                    </h5>
                </div>
                <ul class="list-footer">
                    <li><a href="aboutzawjaty.html">من نحن ؟</a></li>
                    <li><a href="/user/register">دخول / تسجيل</a></li>
                    <li><a href="/user/search">البحث المتقدم</a></li>
                    <li><a href="/user/stories">قصص ناجحة</a></li>
                    <li><a href="articles.html">المقالات</a></li>
                </ul>
            </div>
        </div>
        <div class="col mb-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title quick-link">
                        البحث المتقدم
                        <div class="brdr-text-footer"></div>
                    </h5>
                </div>
                <ul class="list-footer">
                    <li><a href="policy.html">سياسة الخصوصية</a></li>
                    <li><a href="/contact-us">تحتاج مساعدة ؟</a></li>
                    <li><a href="onlinenow.html">المتواجدين الأن</a></li>
                    <li><a href="/user/new-woman">جديد الإناث المسجلين</a></li>
                </ul>
            </div>
        </div>

        <div class="col mb-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title quick-link">
                        روابط سريعة
                        <div class="brdr-text-footer-2"></div>
                    </h5>
                </div>
                <ul class="list-footer">
                    <li><a href="/user/new-man">جديد الذكور المسجلين</a></li>
                    <li><a href="/user/msyar-woman">نساء يطلبن زواج المسيار</a></li>
                    <li><a href="/user/polygamy-woman">نساء يطلبن زواج التعدد</a></li>
                    <li><a href="/user/normal">زواج عادي</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 copy-footer">
        <div class="col box-right">
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li><img src="{{asset('imgs/master.png')}}" alt="master"></li>
                        <li><img src="{{asset('imgs/visa.png')}}" alt="visa"></li>
                        <li>
                            <img src="{{asset('imgs/paypal.png')}}" class="paypal" alt="paypal">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col box-left">
            <div class="card">
                <div class="card-body">
                    <p>
                        جميع الحقوق محفوظة للافانا © 2022
                        <img src="{{asset('imgs/paypal.png')}}" width="60" alt="paypal">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="onair-theme">
    <div class="onair-content">
        <input type="checkbox" id="switch" name="mode">
        <label for="switch" class="mt-2 label"></label>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <small id="emailHelp" class="form-text small-txt-popup">لن نشارك بريدك الإلكتروني مع أي شخص
                    آخر</small>
            </div>
            <div class="modal-body text-right">
                <form class="contact-form">
                    <div class="form-group">
                        <label for="exampleInputName">اسمك</label>
                        <input type="email" class="form-control" id="exampleInputName"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">بريدك الإلكتروني</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الرسالة</label>
                        <textarea class="form-control textarea-contact" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn global-btn-fa">ارسال</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('css/bootstrap-4.6.1-dist/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('css/bootstrap-4.6.1-dist/js/popper.min.js') }}"></script>
<script src="{{ asset('css/bootstrap-4.6.1-dist/js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ asset('js/main.js') }}"></script> --}}
<script>
    // Dark & Light Mode
    var checkbox = document.querySelector("input[name=mode]");
    checkbox.addEventListener("change", function () {
        if (this.checked) {
            trans();
            document.documentElement.setAttribute("data-theme", "dark");
        } else {
            trans();
            document.documentElement.setAttribute("data-theme", "light");
        }
    });

    let trans = () => {
        document.documentElement.classList.add("transition");
        window.setTimeout(() => {
            document.documentElement.classList.remove("transition");
        }, 1000);
    };
</script>
<script>
    $(".btn-slid").click(function () {
        $(this).toggleClass("click");
        $(".slidbar-menu").toggleClass("show");
    });
</script>
</body>

</html>
