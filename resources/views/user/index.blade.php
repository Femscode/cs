@extends('user.master')
@section('headlinks')
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
                            <img src="https://setsub.com/dashboard/images/Wema-logo.jpg" width="100" alt="Bank Logo">
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
                <div class="widget widget-three">
                    <h5 class="">Latest Transactions</h5>
                    <div class="widget-heading">

                        <div class="widget-content widget-content-area br-6 col-md-12">
                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="dt--top-section">
                                    <div class="row">
                                        <div
                                            class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">
                                            <div class="dataTables_length" id="default-ordering_length">
                                                <label>Results : <select name="default-ordering_length"
                                                        aria-controls="default-ordering" class="form-control">
                                                        <option value="7">7</option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select></label>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">
                                            <div id="default-ordering_filter" class="dataTables_filter">
                                                <label><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg><input type="search" class="form-control"
                                                        placeholder="Search..."
                                                        aria-controls="default-ordering"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="default-ordering" class="table table-hover dataTable"
                                        style="width: 100%;" role="grid" aria-describedby="default-ordering_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 108px;">Description</th>
                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 166px;">Amount</th>
                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 77px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr role="row">
                                                <td>Funding</td>
                                                <td>₦500</td>
                                                <td class="text-center"><button
                                                        class="btn btn-primary btn-sm">View</button> </td>
                                            </tr>
                                            <tr role="row">
                                                <td>Funding</td>
                                                <td>₦500</td>
                                                <td class="text-center"><button
                                                        class="btn btn-primary btn-sm">View</button> </td>
                                            </tr>
                                            <tr role="row">
                                                <td>Funding</td>
                                                <td>₦500</td>
                                                <td class="text-center"><button
                                                        class="btn btn-primary btn-sm">View</button> </td>
                                            </tr>
                                            <tr role="row">
                                                <td>Funding</td>
                                                <td>₦500</td>
                                                <td class="text-center"><button
                                                        class="btn btn-primary btn-sm">View</button> </td>
                                            </tr>


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Position</th>
                                                <th class="invisible" rowspan="1" colspan="1"></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="dt--bottom-section d-sm-flex justify-content-sm-between text-center">
                                    <div class="dt--pages-count  mb-sm-0 mb-3">
                                        <div class="dataTables_info" id="default-ordering_info" role="status"
                                            aria-live="polite">Showing page 1 of 4</div>
                                    </div>
                                    <div class="dt--pagination">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="default-ordering_paginate">
                                            <ul class="pagination pagination-style-13 pagination-bordered">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="default-ordering_previous"><a href="#"
                                                        aria-controls="default-ordering" data-dt-idx="0" tabindex="0"
                                                        class="page-link"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-arrow-left">
                                                            <line x1="19" y1="12" x2="5" y2="12"></line>
                                                            <polyline points="12 19 5 12 12 5"></polyline>
                                                        </svg></a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="default-ordering" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="default-ordering" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="default-ordering" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="default-ordering" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item next" id="default-ordering_next"><a
                                                        href="#" aria-controls="default-ordering" data-dt-idx="5"
                                                        tabindex="0" class="page-link"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-arrow-right">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                        </svg></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
</div>
@endsection
@section('scripts')
@endsection