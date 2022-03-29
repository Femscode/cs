@extends('user.master')
@section('head-links')
<link href="{{ asset('adminasset/assets/css/apps/invoice-preview.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row invoice layout-top-spacing layout-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                
                <div class="doc-container">

                    <div class="row">

                        <div class="col-xl-9">

                            <div class="invoice-container">
                                <div class="invoice-inbox">
                                    
                                    <div id="ct" class="">
                                        
                                        <div class="invoice-00001">
                                            <div class="content-section">

                                                <div class="inv--head-section inv--detail-section">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-6 col-12 mr-auto">
                                                            <div class="d-flex">
                                                                <img class="company-logo" src="{{ asset('adminasset/assets/img/veenodelogo.png')}}" alt="company">
                                                                <h3 class="in-heading align-self-center">Veenode.</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 text-sm-right">
                                                            <p class="inv-list-number"><span class="inv-title">Invoice : </span> <span class="inv-number">#0001</span></p>
                                                        </div>

                                                        <div class="col-sm-6 align-self-center mt-3">
                                                            <p class="inv-street-addr">{{ $transaction->title }}</p>
                                                            <p class="inv-email-address">{{ Auth::user()->email }}</p>
                                                            <p class="inv-email-address">(120) 456 789</p>
                                                        </div>
                                                        <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                            <p class="inv-created-date"><span class="inv-title">Transaction Date : </span> <span class="inv-date">{{ Date('d-F, Y',strtotime($transaction->created_at)) }}</span></p>
                                                            {{-- <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2020</span></p> --}}
                                                        </div>
                                                    
                                                    </div>
                                                    
                                                </div>

                                                <div class="inv--detail-section inv--customer-detail-section">

                                                    <div class="row">

                                                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p class="inv-to">Receipt For</p>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        
                                                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                            <p class="inv-customer-name">Description</p>
                                                            <p class="inv-street-addr">{{ $transaction->description }}</p>
                                                           
                                                        </div>
                                                        
                                                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                            <div class="inv--payment-info">
                                                                <p><span class=" inv-subtitle">Amount:</span> <span>₦{{number_format($transaction->amount,2) }}</span></p>
                                                                <p><span class=" inv-subtitle">Account Number: </span> <span>1234567890</span></p>
                                                                <p><span class=" inv-subtitle">Transaction Id:</span> <span>VS70134</span></p>
                                                                <p><span class=" inv-subtitle">Country: </span> <span>Nigerian</span></p>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>

                                                
                                                <div class="inv--total-amounts">
                                                
                                                    <div class="row mt-4">
                                                        <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        </div>
                                                        <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                            <div class="text-sm-right">
                                                                <div class="row">
                                                                    <div class="col-sm-8 col-7">
                                                                        <p class="">Sub Total: </p>
                                                                    </div>
                                                                    <div class="col-sm-4 col-5">
                                                                        <p class="">₦{{number_format($transaction->amount,2) }}</p>
                                                                    </div>
                                                                    <div class="col-sm-8 col-7">
                                                                        <p class="">Charges: </p>
                                                                    </div>
                                                                    <div class="col-sm-4 col-5">
                                                                        <p class="">₦0.00</p>
                                                                    </div>
                                                                    <div class="col-sm-8 col-7">
                                                                        <p class=" discount-rate">Discount : <span class="discount-percentage">0%</span> </p>
                                                                    </div>
                                                                    <div class="col-sm-4 col-5">
                                                                        <p class="">₦0.00</p>
                                                                    </div>
                                                                    <div class="col-sm-8 col-7 grand-total-title">
                                                                        <h4 class="">Grand Total : </h4>
                                                                    </div>
                                                                    <div class="col-sm-4 col-5 grand-total-amount">
                                                                        <h4 class="">₦{{number_format($transaction->amount,2) }}</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="inv--note">

                                                    <div class="row mt-4">
                                                        <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                            <p>Note: Thank you for doing Business with us.</p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div> 
                                        
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="col-xl-3">

                            <div class="invoice-actions-btn">

                                <div class="invoice-action-btn">

                                    <div class="row">
                                        <div class="col-xl-12 col-md-3 col-sm-6">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-send">Send Receipt</a>
                                        </div>
                                        <div class="col-xl-12 col-md-3 col-sm-6">
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                                        </div>
                                        <div class="col-xl-12 col-md-3 col-sm-6">
                                            <a href="javascript:void(0);" class="btn btn-success btn-download action-print">Download</a>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>


                    </div>
                    
                    
                </div>

            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
</div>
<style>
    .height-100 {
        height: 50vh
    }

    .card h6 {
        color: #ec4d37;
        font-size: 20px
    }


    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0
    }

    .card-2 {
        background-color: #fff;
        padding: 10px;
        width: 350px;
        height: 50px;
        bottom: -50px;
        left: 20px;
        position: absolute;
        border-radius: 5px
    }

    .card-2 .content {
        margin-top: 50px;
        color: black;
    }

    .card-2 .content a {
        color: #ec4d37
    }

    .form-control:focus {
        box-shadow: none;
        border: 2px solid #ec4d37
    }

    .validate {
        border-radius: 20px;
        height: 40px;
        background-color: #ec4d37;
        border: 1px solid #ec4d37;
        width: 140px
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
</script>

<script>
document.addEventListener("DOMContentLoaded", function(event) {

function POTPInput() {
const pinputs = document.querySelectorAll('#potp > *[id]');
for (let i = 0; i < pinputs.length; i++) { pinputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { pinputs[i].value='' ; if (i !==0) pinputs[i - 1].focus(); } else { if (i===pinputs.length - 1 && pinputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { pinputs[i].value=event.key; if (i !==pinputs.length - 1) pinputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { pinputs[i].value=String.fromCharCode(event.keyCode); if (i !==pinputs.length - 1) pinputs[i + 1].focus(); event.preventDefault(); } } }); } } POTPInput(); });
</script>

@endsection
@section('scripts')
<script src="{{ asset('adminasset/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('adminasset/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('adminasset/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('adminasset/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('adminasset/assets/js/app.js')}}"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('adminasset/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{ asset('adminasset/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminasset/assets/js/scrollspyNav.js')}}"></script>
<script src="{{ asset('adminasset/plugins/jquery-step/jquery.steps.min.js')}}"></script>
<script src="{{ asset('adminasset/plugins/jquery-step/custom-jquery.steps.js')}}"></script>
<script src='cdn/sweetalert.min.js'></script>
<script>
    $(document).ready(function () {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#cable_subscription").on('submit',async function(e) {
            e.preventDefault();
            //this is where the first validation will take place
         
            if($("#cable_type").val() !== null && $("#amount").val() !== null ) {

                $("#exampleModalCenter").modal('show')
            }
        })
        $.get('{{ route("checkpin") }}  ',function(data) {
            if(data == true) {
                $("#pinValidation").modal('show')
                }
            console.log(data)
        })
        $("#select_network").click(function() {
           if($("#select_network").prop('checked')) {
            $("#nnetwork").show()
           } else {
               $("#nnetwork").hide()
           }
        })
        $("#submitpin").on('submit',async function(e) {
            e.preventDefault();
            swal('Updating pin,please wait...')
            // var image = $('#image')[0].files;
            var fd = new FormData;
           
            fd.append('first', $("#pfirst").val());
            fd.append('second', $("#psecond").val());
            fd.append('third', $("#pthird").val());
            fd.append('fourth', $("#pfourth").val());
           
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('updatepin')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    swal.close()
                    $("#pinValidation").modal('hide')
                    swal('success', 'Please check your email to complete PIN verification!', 'success')
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    swal.close()
                    swal('Opps!', 'Something went wrong, please try again later or contact the administrator', 'error')
                }
            })
        })
        $("#buycable").on("click", async function(e) {
            e.preventDefault();
            swal('Subscribing ,please wait...')
            // var image = $('#image')[0].files;
            var fd = new FormData;
            fd.append('amount', $("#amount").val());
            fd.append('first', $("#first").val());
            fd.append('second', $("#second").val());
            fd.append('third', $("#third").val());
            fd.append('fourth', $("#fourth").val());
           
            
            // console.log(image[0],'tje image')
            // if(image[0] != undefined) {
            // fd.append('image', image[0]);
            // }
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('fundwallet2')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    if($data == 'Incorrect Pin') {
                        swal('Opps!','Incorrect Pin','error')
                    }
                    else if($data == "Insufficient Balance") {
                        swal('Opps!','Insufficient balance','error')
                    }
                    else {

                    
                    swal.close()
                    $("#exampleModalCenter").modal('hide')
                    swal('success', 'Account Funded successfully!', 'success')
                    }
                    window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    swal.close()
                    $("#exampleModalCenter").modal('hide')

                    swal('Opps!', 'Something went wrong, please try again later or contact the administrator', 'error')
                }
            })

        })


})
</script>
<script src="{{ asset('adminasset/assets/js/apps/invoice-preview.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection