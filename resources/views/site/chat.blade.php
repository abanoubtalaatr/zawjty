@extends('layouts.app')
@section('content')
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <style>
        #chat3 .form-control {
            border-color: transparent;
        }

        #chat3 .form-control:focus {
            border-color: transparent;
            box-shadow: inset 0px 0px 0px 1px transparent;
        }

        .badge-dot {
            border-radius: 50%;
            height: 10px;
            width: 10px;
            margin-left: 2.9rem;
            margin-top: -.75rem;
        }
    </style>
    <div class="container-fluid section-intro-privecy">
        <div class="row row-cols-1 row-cols-md-1 row-privecy">
            <div class="col mb-4 text-right col-privecy">
                <img src="{{asset('imgs/trulove.svg')}}" class="text-right" alt="purelove">
            </div>
            <h3 class="card-title">الرسائل</h3>
            <div class="brdr-text"></div>
        </div>
    </div>

    <div class="container text-center my-5">
        <h4 class="text-right">My name is : {{auth()->user()->name}}</h4>

    </div>
    <div class="container mt-5 mb-5">
        <section style="background-color: #CDC4F9;">
            <div class="container py-5">

                <div class="row">
                    <div class="col-md-12">

                        <div class="card" id="chat3" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0"
                                         style="overflow-y: scroll;text-align: right;">

                                        <div class="p-3">
                                            <div data-mdb-perfect-scrollbar="true"
                                                 style="position: relative; height: 400px">
                                                <ul class="list-unstyled mb-0">
                                                    @foreach($chats as $id =>$chat)

                                                        <li class="p-2 border-bottom "
                                                            onclick="getChat({{$chat->id}}, {{auth()->user()->id}},{{$chat->sender->id==auth()->user()->id ? $chat->receiver->id:$chat->sender->id}})">
                                                            <button href=""
                                                                    class="d-flex justify-content-between border-none"
                                                                    style="border: none;background: transparent">
                                                                <div class="d-flex flex-row">
                                                                    <div>
                                                                        <img
                                                                            src="{{$chat->receiver->image??"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"}}"
                                                                            alt="avatar"
                                                                            class="d-flex align-self-center me-3"
                                                                            width="60">
                                                                        <span
                                                                            class="badge bg-success badge-dot"></span>
                                                                    </div>
                                                                    <div class="pt-1" style="text-align: right;">
                                                                        <p class="fw-bold mb-0">{{$chat->receiver->id == auth()->user()->id ? $chat->sender->name:$chat->receiver->name}}</p>
                                                                        <p class="small text-muted">{{$chat->lastMessage}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="pt-1" style="    margin-right: 20px;">
                                                                    {{--                                                                <p class="small text-muted mb-1">Just now</p>--}}
                                                                    {{--                                                                    <span--}}
                                                                    {{--                                                                        class="badge bg-danger rounded-pill float-end">3</span>--}}
                                                                </div>
                                                            </button>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                    <input hidden name="chat_id" value="">
                                    <input hidden name="receiver_id" value="">
                                    <div class="col-md-6 col-lg-7 col-xl-8 d-none messages"
                                         style="border: 1px dotted;text-align: right">

                                        <div id="message_container" class="pt-3 pe-3 messages-container d-none pb-3"
                                             data-mdb-perfect-scrollbar="true"
                                             style="position: relative; overflow-y: scroll;height: 400px;margin-bottom: 45px">

                                        </div>
                                        <div
                                            class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2 "
                                            style=" position: absolute;bottom: 0;right: 0;left: 0 ">

                                            <input type="text" class="form-control form-control-lg"
                                                   id="exampleFormControlInput2"
                                                   name="message"
                                                   placeholder="Type message">
                                            <button class="btn btn-success h-100 mx-1"
                                                    onclick="sendMessage()">
                                                <i class="fas fa-paper-plane"></i>
                                            </button>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>

    <script type="text/javascript">

        function getChat(chatId, loggedUser, receiverId) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".messages-container").empty();
            $(".messages").addClass('d-block');

            $("input[name='chat_id']").val(chatId)
            $('input[name="receiver_id"]').val(receiverId);


            $.ajax({
                type: 'get',
                url: chatId + '/' + 'messages',
                processData: false,
                contentType: false,
                success: function (data) {
                    $('.messages-container').addClass('d-block');

                    data.data.forEach(function (row) {

                        if (row.sender_id == loggedUser) {
                            let textSender = `                                            <div class="d-flex flex-row justify-content-start">
                                                <img
                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                                <div>
                                                    <p class="small p-2 ms-3 mb-1 rounded-3"
                                                       style="background-color: #f5f6f7;">${row.message}.</p>
                                                    <p class="small ms-3 mb-3 rounded-3 text-muted float-end">${row.created_at}</p>
                                                </div>
                                            </div>
`;
                            $(".messages-container").append(textSender)
                        } else {
                            let textReceiver = `

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">${row.message}.</p>
                                                    <p class="small me-3 mb-3 rounded-3 text-muted">${row.created_at}</p>
                                                </div>
                                                <img
                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                            </div>`;
                            $(".messages-container").append(textReceiver)
                        }
                    })

                    $("#message_container").scrollTop(1000000000000000000000000000)
                },
                error: function (request, status, error) {
                    alert(request.responseText.message);
                }
            });


        }

        function sendMessage() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let chatId = $("input[name='chat_id']").val()
            let receiverId = $("input[name='receiver_id']").val()
            console.log(receiverId);
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('bebf31c04ae593b96249', {
                cluster: 'eu'
            });

            var channel = pusher.subscribe('chat');
            var messageFromPusher;
            channel.bind('chat' + chatId, function (data) {
                messageFromPusher = data.message

            });
            let message = $("input[name=message]").val();
            if (message) {
                $.ajax({
                    type: 'post',
                    url: "{{route('chats.store')}}",
                    data: {message: message, receiver_id: receiverId},
                    success: function (data) {
                        $("input[name=message]").val('');

                        let textSender = `                                            <div class="d-flex flex-row justify-content-start">
                                                <img
                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                                <div>
                                                    <p class="small p-2 ms-3 mb-1 rounded-3"
                                                       style="background-color: #f5f6f7;">${messageFromPusher}</p>
                                                    <p class="small ms-3 mb-3 rounded-3 text-muted float-end"></p>
                                                </div>
                                            </div>
`;
                        $(".messages-container").append(textSender)
                        $("#message_container").scrollTop(1000000000000000000000000000)
                    },
                    error: function (request, status, error) {
                        alert(request.responseText.message);
                    }
                });
            } else {
                alert('برجاء ادخال نص الرسالة')
            }

        }
    </script>


@endsection

