<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'زوجتي') }}</title>
    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- Fonts -->
    @yield('head-scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector: 'textarea'});</script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        #tinymce {
            text-align: right;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
</head>
<body style="direction: ltr">
<div id="app" style="direction: rtl">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        {{--                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                        {{--                        <li><a clasfs="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                    @else
                        {{--                        <li><a class="nav-link" href="{{ route('our-memberships.index') }}">Home page</a></li>--}}
                        {{--                        <li><a class="nav-link" href="{{ route('crrs.index') }}"> Libya CPR</a></li>--}}
                        {{--                        <li><a class="nav-link" href="{{ route('courses.index') }}">Activities</a></li>--}}
                        {{--                        <li><a class="nav-link" href="{{ route('committees.index') }}"> Committees</a></li>--}}
                        {{--                        <li><a class="nav-link" href="{{ route('executives.index') }}"> Executive</a></li>--}}
                        {{--                        <li><a class="nav-link" href="{{ route('publishes.index') }}"> Publishing</a></li>--}}
                        {{--                        <li><a class="nav-link" href="{{ route('trainers.index') }}"> Trainers/Facilitators</a></li>--}}
                        {{--                        <li><a class="nav-link" href="{{ route('resuscitations.index') }}"> Resuscitations</a></li>--}}
                        @can('contact-list')
                            <li><a class="nav-link" href="{{ route('contact_us.all') }}"> رسائل التواصل</a></li>
                        @endcan

                        @can('user-list')
                            <li><a class="nav-link" href="{{ route('users.index') }}"> المستخدمين</a></li>
                        @endcan

                        @can('role-list')
                            <li><a class="nav-link" href="{{ route('roles.index') }}"> الصلاحيات والادوار</a></li>
                        @endcan
                        @can('package-list')
                            <li><a class="nav-link" href="{{ route('packages.index') }}"> الباقات</a></li>
                        @endcan

                        @can('subscribe-list')
                            <li><a class="nav-link" href="{{ route('subscribers') }}">المشتركين</a></li>
                        @endcan

                        @can('notification-list')
                            <li><a class="nav-link" href="{{ route('notifications.index') }}">الأشعارات</a></li>
                        @endcan

                        @can('privacy-list')
                            <li><a class="nav-link" href="{{ route('privacy.index') }}">صفحة ساسية الخصوصية</a></li>
                        @endcan


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show') }}"

                                >
                                    {{ __('تعديل الملف الشخصي') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل خروج') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <main class="py-4 text-right ">
        <div class="container" style="border: 1px solid;padding: 27px;border-radius: 15px;">
            @if(auth()->check())
                <div class="row">
                    <button class="border-0 mx-2 p-2">
                        <a href="/dashboard">الذهاب الي الصحفة الرئيسة للوحة التحكم</a>
                    </button>

                    <button class="border-0 mx-2 p-2">
                        <a href="/">الذهاب للموقع</a>
                    </button>
                </div>
            @endif
            @yield('content')
        </div>
    </main>

</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.wysihtml5').wysihtml5();
    });
</script>
</body>
</html>
