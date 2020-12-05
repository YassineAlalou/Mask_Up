@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Welcome {{ Auth::user()->name }}</div>

                    <div class="card-body">
                        @foreach($orders as $order )
                            <div class="card" id="order{{$order -> id}}">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <div class="raw" >
                                            <a href="./img/{{$order -> image}}" download>
                                            <img src="./img/{{$order -> image}}" class="img-fluid" alt=""
                                                 style="height: 250px; width: 300px;" id="theImage">
                                            </a>
                                        </div>
                                        <div class="raw">
                                            <img src="{{$order -> screen}}" class="img-fluid" alt=""
                                                 style="height: 250px; width: 300px;" id="theImage2">
                                        </div>
                                        <button type="button" class="btn btn-dark" onclick="myFunction6()"
                                                data-toggle="tooltip"
                                                data-placement="bottom" title="Download image : mockup + design">
                                            <i class="fa fa-download"></i>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <label style="margin-top: 10px;">Name : </label><h4
                                                class="card-title">{{$order -> fullname}}</h4>
                                            <hr class="my-4">
                                            <label style="margin-top: 10px;">E-mail : </label>
                                            <p class="card-text">{{$order -> email}}</p>
                                            <hr class="my-4">
                                            <label style="margin-top: 10px;">Address : </label>
                                            <h5 class="card-text">{{$order -> address}}</h5>
                                            <h5 class="card-text">{{$order -> city}}</h5>
                                            <h5 class="card-text">{{$order -> country}}</h5>
                                            <hr class="my-4">
                                            <label style="margin-top: 10px;">Phone number : </label>
                                            <h5 class="card-text">{{$order -> num}}</h5>
                                            <hr class="my-4">
                                            <label style="margin-top: 10px;">Quantity And Price : </label>
                                            <h5 class="card-text">{{$order -> qte}}  |  {{$order -> price}} €</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer w-100 text-muted">
                                    Created at : {{$order -> created_at}}
                                    <a type="button" class="btn btn-danger" data-toggle="tooltip"
                                            data-placement="bottom" title="Reset the mockup" style="margin-left: 68%;"
                                            href="/order/delete/{{$order -> id}}" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fa fa-close"></i> delete
                                    </a>
                                    @csrf
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    <script>

        function myFunction5() {
            domtoimage.toJpeg(document.getElementById('theImage'), {quality: 0.95})
                .then(function (dataUrl) {
                    var link = document.createElement('a');
                    link.download = 'my-image-name.jpeg';
                    link.href = dataUrl;
                    link.click();
                });
        }

        function myFunction6() {
            domtoimage.toJpeg(document.getElementById('theImage2'), {quality: 0.95})
                .then(function (dataUrl) {
                    var link = document.createElement('a');
                    link.download = 'my-image-name.jpeg';
                    link.href = dataUrl;
                    link.click();
                });
        }

    </script>
@endsection
