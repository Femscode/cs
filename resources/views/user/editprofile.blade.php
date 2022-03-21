@extends('user.master')
@section('head-links')
<link href="{{ asset('adminasset/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">

            <!-- Content -->
            <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="">Profile</h3>
                            <a href="/editprofile" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                        </div>
                        <div class="text-center user-info">
                            <img src="adminasset/assets/img/90x90.jpg" alt="avatar">
                            <p class="">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="user-info-list">

                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>{{ Date('d-m-y',strtotime(Auth::user()->created_at)) }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{ Auth::user()->email }}</a>
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>{{ Auth::user()->phone }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <div class="social-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="social-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="social-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>                                    
                        </div>
                    </div>
                </div>

          

            </div>

            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                <div class="education layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Update Profile</h3>
                        <form id="update_profile" class="section general-info" enctype='multipart/form-data'>
                            <div class="info">
                                <h6 class="">Update Profile</h6>
                                <div class="row">
                                    <div class="col-lg-11 mx-auto">
                                        <div class="row">
                                    
                                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <input type="text" class="form-control mb-4"
                                                                    id="name" value="{{ Auth::user()->name }}"
                                                                    value="Jimmy Turner">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Referral Code</label>
                                                                <input disabled type="text" class="form-control mb-4"
                                                                    id="name" value="{{ Auth::user()->name }}"
                                                                    value="Jimmy Turner">
                                                            </div>
                                                        </div>

                                                       
                                                     
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profession">Phone Number</label>
                                                        <input type="number" class="form-control mb-4"
                                                            id="phone" placeholder="{{ Auth::user()->phone }}"
                                                            value="{{ Auth::user()->phone }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profession">Email Address</label>
                                                        <input readonly type="text" class="form-control mb-4"
                                                            id="profession" placeholder="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4 text-right mb-5">
                                                <button id="profilesubmit" type='submit'
                                                    class="btn btn-primary">Update</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </form>
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
@endsection
@section('scripts')
<script src='cdn/sweetalert.min.js'></script>
<script>
    $(document).ready(function () {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#update_profile").on("submit", async function(e) {
            e.preventDefault();
            swal('Updating profile, please wait...')
            // var image = $('#image')[0].files;
            var fd = new FormData;
            fd.append('name', $("#name").val());
          
            fd.append('phone', $("#phone").val());
            
            // console.log(image[0],'tje image')
            // if(image[0] != undefined) {
            // fd.append('image', image[0]);
            // }
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('updateprofile')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    swal.close()
                    swal('success', 'Profile Updated successfully!', 'success')
                    window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    swal.close()
                    swal('Opps!', 'Profile not updated, contact the administrator', 'error')
                }
            })

        })


})
</script>
@endsection