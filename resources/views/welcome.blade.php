<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>MASK UP</title>

    <link rel="shortcut icon" href="./img/Logo.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicons -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./fabric.min.js"></script>

    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png"
          sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32"
          type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16"
          type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg"
          color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #img1 {

            margin: auto;
            margin-top: 10%;
            margin-bottom: 10%;
            display: block;
        }

        #img2 {
            padding: 10px;
        }

        #btn-import {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        #btn-color {
            border: 1px solid #1a202c;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .drawing-area {
            position: absolute;
            top: 70px;
            left: 55px;
            z-index: 10;
            width: 150px;
            height: 120px;
        }

        .canvas-container {
            width: 150px;
            height: 120px;
            position: relative;
            user-select: none;
        }

        #tshirt-div {
            width: 452px;
            height: 548px;
            position: relative;
            background-color: #fff;
        }

        #canvas {
            position: absolute;
            width: 150px;
            height: 120px;
            left: 0px;
            top: 0px;
            user-select: none;
            cursor: default;
        }

        #btn-grp {
            margin-bottom: 25px;
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/product/product.css" rel="stylesheet">


</head>

<body class="antialiased" style="background-color:#f4f4f4;">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">


    <div class="container px-lg-5">

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 ">
                <img src="./img/Logo.png" class="card-img-top" id="img1" style="width: 120px; height: 120px;">
            </div>

            <div class="col-lg-9 col-md-9 col-sm-9 ">
                <img src="./img/PCM.png" class="card-img-top" id="img2">
            </div>

        </div>

    </div>

    <form action="order" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <div class="upload-btn-wrapper">
                        <button class="btn btn-secondary" id="btn-import">
                            <input type="file" name="image" id="image"/>
                        </button>
                    </div>
                    <p class="lead">Import your design.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto"
                     style="width: 90%; height: 300px; border-radius: 21px 21px 21px 21px;"
                     id="outImage">

                    <img src="#" id="imgshow" align="center" style="max-width:100%;max-height:100%;">

                </div>
                <button type="button" class="btn btn-danger" onclick="reload()" data-toggle="tooltip"
                        data-placement="bottom" title="Reset the mockup" style="margin-left: 60%; margin-top: 20px;">
                    <i class="fa fa-close"></i> Reset
                </button>
                <script>function reload() {
                        location.reload();
                    }</script>

            </div>

            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <div class="btn-group" role="group" aria-label="Basic example" id="btn-color">
                        <button type="button" onclick="myFunction2()" class="btn btn-light">&nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;
                            &nbsp; &nbsp;
                        </button>
                        <button type="button" onclick="myFunction1()" class="btn btn-secondary">&nbsp; &nbsp; &nbsp;
                            &nbsp;
                            &nbsp; &nbsp; &nbsp;
                        </button>
                    </div>
                    <p class="lead">Choose your color.</p>
                </div>

                <div class="shadow-sm mx-auto" style="width: 90%; height: 300px; border-radius: 21px 21px 21px 21px;"
                     id="tshirt-div">

                    <img src="./img/MaskNoir.png" id="mockup" align="center" style="max-width:100%;height: 320px;">

                    <div id="drawingArea" class="drawing-area">
                        <div class="canvas-container">
                            <canvas id="canvas"></canvas>
                        </div>
                    </div>

                </div>


                <div class="input-group flex-nowrap" id="btn-import">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="quantite">QUANTITY</span>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control" id="qte" type="number" min="1" name="qte" onchange="calculPrice()">
                    </div>

                    <div class="col-xs-2">
                        <input class="form-control" id="price" type="text" name="price" placeholder="price" readonly>
                    </div>
                    <span class="input-group-text">€</span>
                    <script>
                        function calculPrice() {
                            var range = document.getElementById("qte").value
                            if (range == 1) {
                                document.getElementById("price").value = 10;
                            }
                            if (range >= 2 && range < 4) {
                                document.getElementById("price").value = "8";
                            }
                            if (range >= 4 && range < 9) {
                                document.getElementById("price").value = "7";
                            }
                            if (range >= 9 && range < 20) {
                                document.getElementById("price").value = "6";
                            }
                            if (range >= 20 && range < 50) {
                                document.getElementById("price").value = "5";
                            }
                            if (range >= 50) {
                                document.getElementById("price").value = "4";
                            }
                            console.log('calcul price');
                            console.log(document.getElementById("price").value);
                        }
                    </script>
                </div>


                <div class="btn-group" role="group" aria-label="Basic example" id="btn-grp">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal"
                            onclick="myFunction4()">
                        <i class="fa fa-cart-arrow-down"></i> Order
                    </button>

                </div>

            </div>
        </div>

        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Order Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="formGroupExampleInput">Full name :</label>
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                   placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Address :</label>
                            <input type="text" class="form-control" id="address" name="address"
                                   placeholder="Street address"
                                   style="margin-bottom: 30px;">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="country" id="country"
                                           placeholder="Country">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Phone number :</label>
                            <input type="text" class="form-control" id="num" name="num" placeholder="Phone number">
                            <input type="text" name="screen" id="screen" hidden>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Purchase</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>

        </div>
    </form>

    <div class="footer-copyright text-center py-3">© 2020 : Legal notices :
        <a type="button" class="btn btn-link" href="#">Terms and conditions</a> |

    </div>


    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <script>
        function myFunction4() {
            console.log('hello');
            window.scrollTo(0, 0);
            html2canvas(document.getElementById('tshirt-div')).then(function (canvas) {
                console.log(canvas.toDataURL('image/jpeg', 0.95))
                document.getElementById('screen').value = canvas.toDataURL('image/jpeg', 0.8)
            });
        }
    </script>


    <script>
        $('document').ready(function () {
            $("#image").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imgshow').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });

        function myFunction1() {
            document.getElementById("mockup").src = "./img/MaskNoir.png";
        }

        function myFunction2() {
            document.getElementById("mockup").src = "./img/MaskBlanc.png";
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.1.0/fabric.min.js"></script>


    <script>
        var canvas = new fabric.Canvas('canvas');
        canvas.setHeight(200);
        canvas.setWidth(350);
        fabric.Object.prototype.transparentCorners = false;
        fabric.Object.prototype.originX = fabric.Object.prototype.originY = 'center';

        document.getElementById('image').onchange = function handleImage(e) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var imgObj = new Image();
                imgObj.src = event.target.result;
                imgObj.onload = function () {
                    var image = new fabric.Image(imgObj);
                    image.set({
                        angle: 0,
                        position: 'absolute',
                        cornersize: 10,
                        opacity: 1,
                        meetOrSlice: 'slice',
                        centeredRotation: true,
                        centeredScaling: true,
                    }).scale(0.25);

                    canvas.centerObject(image);
                    canvas.add(image);
                    canvas.renderAll();
                }
            }
            reader.readAsDataURL(e.target.files[0]);
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>


    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"><\/script>')</script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>


</div>
</body>
</html>
