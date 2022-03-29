@extends('user.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">

    <div class="layout-px-spacing">


        <div class="row layout-top-spacing">


            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-three">

                    <div class="widget-heading">
                        <div class="wallet-usr-info">
                            <div class="usr-name">
                                <span><img src="{{ asset('adminasset/assets/img/90x90.jpg')}}" alt="admin-profile"
                                        class="img-fluid">
                                    {{ Auth::user()->name }}</span>
                            </div>
                            <div class="add">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="card-body skew-shadow">
                            <img src="adminasset/assets/img/wema.jpg" width="100" alt="Bank Logo">
                            <h4 class="py-4 mb-0 text-white">8117204728</h4>

                        </div>

                    </div>

                    <div class="widget-amount">

                        <div class="w-a-info funds-received">
                            <span>Funded <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg></span>
                            <p> ₦0.00</p>
                        </div>

                        <div class="w-a-info funds-spent">
                            <span>Spent <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg></span>
                            <p> ₦0.00</p>
                        </div>
                    </div>

                    <div class="widget-content">

                        <div class="bills-stats">
                            <span>Fund Wallet</span>
                        </div>
                        <div class="wallet-balance">
                            <p>Wallet Balance</p>
                            <h5 class=""><span class="w-currency"> ₦</span>0.00</h5>
                        </div>


                    </div>

                </div>
            </div>


            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Buy Data</h4>
                                </div>
                            </div>
                        </div>
                        <form id='buy_data'>
                            <div class="widget-content widget-content-area">
                                <p class="">Phone Number</p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-settings">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path
                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                </path>
                                            </svg> </button>

                                    </div>
                                    <input required type="number" id='phone' class="form-control"
                                        placeholder="Phone Number" aria-label="Phone Number"  minlength="8">

                                </div>
                                <p class="">Data Amount(₦)</p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-settings">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path
                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                </path>
                                            </svg> </button>

                                    </div>
                                    <select required id='amount' class="form-control" placeholder="Phone Number">
                                        <option value=''>--SELECT DATA PLAN--</option>
                                        <option value='300'>1GB</option>
                                        <option value='500'>3GB</option>
                                        <option value='1500'>7GB</option>
                                        <option value='3400'>10GB</option>
                                    </select>
                                   

                                </div>
                                <div>

                                    <input id='select_network' type="checkbox">
                                    <span class="slider round"></span>
                                    <label class="switch s-primary mb-0">
                                        Manually Select Network
                                    </label>
                                </div>
                                <div class="input-group mb-4" style='display:none' id='nnetwork'>
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-settings">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path
                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                </path>
                                            </svg> </button>
                                            <select id='network' class="form-control" placeholder="Phone Number">
                                                <option value=''>--select network</option>
                                                <option value='MTN'>MTN</option>
                                                <option value='GLO'>GLO</option>
                                                <option value='AIRTEL'>AIRTEL</option>
                                                <option value='9MOBILE'>9MOBILE</option>
                                            </select>

                                    </div>
                                   


                                </div>

                                <button type="submit" class="btn btn-primary float-right">
                                    Buy
                                </button>




                            </div>
                        </form>
                    </div>

                </div>
            </div>



            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row widget-statistic">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">31.6K</p>
                                        <h5 class="">Buy Airtime</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-link">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                            </path>
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">1,900</p>
                                        <h5 class="">Buy Data</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-message-circle">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">18.2%</p>
                                        <h5 class="">Electricity Bills</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-message-circle">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">18.2%</p>
                                        <h5 class="">Cable Subscription</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">31.6K</p>
                                        <h5 class="">Generate Airtime Pin</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-link">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                            </path>
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">1,900</p>
                                        <h5 class="">My Referrals</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-message-circle">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">18.2%</p>
                                        <h5 class="">WAEC PIN</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-message-circle">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">18.2%</p>
                                        <h5 class="">Engagement</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>




        </div>

    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All
                rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg></p>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-cente#ec4d37" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">PIN VALIDATION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container height-100 d-flex justify-content-center align-items-center">
                        <div class="position-relative">
                            <div class="card p-2 text-center">
                                <h6>Please input your transaction pin</h6>
                                <div> </div>
                                <div id='otp' class="inputs d-flex flex-row justify-content-center mt-2">
                                    <input class="m-2 text-center form-control rounded" type="number" id="first"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" id="second"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" id="third"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" id="fourth"
                                        maxlength="1" />
                                </div>
                                <div class="mt-4"> <button id='buyairtime'
                                        class="btn btn-danger px-4 validate">Validate</button> </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="pinValidation" tabindex="-1" role="dialog" aria-labelledby="pinValidationTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-cente#ec4d37" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">SET UP YOUR PIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container height-100 d-flex justify-content-center align-items-center">
                        <div class="position-relative">
                            <div class="card p-2 text-center">
                                <h6>Please set up your transaction pin</h6>
                                <div> </div>
                                <form id='submitpin'>
                                <div id='potp' class="inputs d-flex flex-row justify-content-center mt-2">
                                    <input class="m-2 text-center form-control rounded" type="number" id="pfirst"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" id="psecond"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" id="pthird"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" id="pfourth"
                                        maxlength="1" />
                                </div>
                                <input class='form-control' disabled id='pin_email' type='email' value='{{ Auth::user()->email }}'>
                                <div class="mt-4"> <button type='submit'
                                        class="btn btn-danger px-4 validate">Submit</button> </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
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
        $("#buy_data").on('submit',async function(e) {
            e.preventDefault();
           console.log($("#phone").length,'thed')
            if($("#phone").val() !== null && $("#amount").val() !== null ) {

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
            Swal.fire('Updating pin,please wait...')
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
                    Swal.fire('success', 'Please check your email to complete PIN verification!', 'success')
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    swal.close()
                    Swal.fire('Opps!', 'Something went wrong, please try again later or contact the administrator', 'error')
                }
            })
        })
        $("#buyairtime").on("click", async function(e) {
            e.preventDefault();
            Swal.fire('Purchasing airtime,please wait...')
            // var image = $('#image')[0].files;
            var fd = new FormData;
            fd.append('phone', $("#phone").val());
          
            fd.append('network', $("#network").val());
            fd.append('first', $("#first").val());
            fd.append('second', $("#second").val());
            fd.append('third', $("#third").val());
            fd.append('fourth', $("#fourth").val());
            fd.append('amount', $("#amount").val());
            
            // console.log(image[0],'tje image')
            // if(image[0] != undefined) {
            // fd.append('image', image[0]);
            // }
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('buydata2')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    if($data == 'Incorrect Pin') {
                        Swal.fire('Opps!','Incorrect Pin','error')
                    }
                    else if($data == "Insufficient Balance") {
                        Swal.fire('Opps!','Insufficient balance','error')
                    }
                    else {

                    
                    swal.close()
                    $("#exampleModalCenter").modal('hide')
                    Swal.fire('success', 'Data Purchase successfully!', 'success')
                    }

                },
                error: function(data) {
                    console.log(data)
                    swal.close()
                    $("#exampleModalCenter").modal('hide')

                    Swal.fire('Opps!', 'Something went wrong, please try again later or contact the administrator', 'error')
                }
            })

        })


})
</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection