@extends('master')

@section('content')
    @include('header2')
    <!-- Page Wrapper -->

    <section id="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">

                   

                        <div class="card-body">



                            <div class="chat">

                                <h1 class="sendername">{{ $meeting->provider->username }}</h1>
                                @if (Session::has('success'))
                                    <div class="identity">
                                        <p>{{ Session::get('success') }}</p>
                                    </div>

                                @endif
                                <div id="ref">
                                    <div class="msgbody" id="msgbody">
@if(isset($messages))
                                        @foreach($messages as $message)
                                            @if($message->sender=='customer')

                                                    <div class="sender">
                                                        {{ $message->messagebody }}
                                                    </div>

                                                @else

                                                <div class="reciver">
                                                    {{ $message->messagebody }}

                                                </div>
                                                @endif
                                                    @endforeach
@endif


<!--
    <form class="inputclass" action="{{ route('customer.sendmessage', $meeting->id) }}" method="POST">
   @csrf
        <input type="text" name="messagebody" />
        <button type="submit" > <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
    </form>-->


<div class="inputclass">
    <input type="text" name="messagebody" id="messagebody" />
    <button type="submit" onclick="getMessage({{$meeting->id}})"> <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
</div>
                                    </div>
                                    </div>
                                    </div>

                            </div>



                        </div>
                    </div>
                </div>



        </section>
    </section>

    <script type="text/javascript">
        function getMessage(id){
            //console.log("button presses function called!");
            console.log($('#messagebody').val());
            console.log(id);


            $.ajax({
                url: '/customer/message/' + id,

                type: "POST",
                data:{"_token": '{{csrf_token()}}',
                    messagebody : $('#messagebody').val()
                },
                success:function (response){

                    let dat = window.location.href;
                    console.log(dat);
                    $.ajax({
                        url: dat,
                        type: "GET",
                        success: function () {
                            $("#ref").load(document.URL + " #msgbody");

                            //$("#sidecart").load("") = doc.getElementById("sidecart")

                        },
                    });

                },
                error:function(response){
                    alert(response.error);
                }

            });

        }







    </script>





@endsection
