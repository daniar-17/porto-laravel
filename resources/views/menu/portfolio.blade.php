<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">My <span class="text-primary">Portfolio</span></h1>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{asset('assets/images/customer_app/03 Dashboard.png')}}" alt="" class="img-fluid rounded" />
                </div>
                <div class="card-body">
                    <ul class="list-inline fs-14 text-muted">
                        <li class="list-inline-item">
                            <i class="ri-checkbox-circle-line align-bottom me-1"></i> PHP, Laravel & MySQL
                        </li>
                    </ul>
                    <a href="javascript:void(0);">
                        <h5>Customer App</h5>
                    </a>
                    <p class="text-muted fs-14">This is a web-based application about creating customer data.</p>
                    
                    <div>
                        <a href="javascript:void(0);" class="link-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="assets/images/small/img-8.jpg" alt="" class="img-fluid rounded" />
                </div>
                <div class="card-body">
                    <ul class="list-inline fs-14 text-muted">
                        <li class="list-inline-item">
                            <i class="ri-checkbox-circle-line align-bottom me-1"></i> PHP, Laravel & MySQL
                        </li>
                    </ul>
                    <a href="javascript:void(0);">
                        <h5>Design your apps in your own way ?</h5>
                    </a>
                    <p class="text-muted fs-14">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
                    
                    <div>
                        <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="assets/images/small/img-8.jpg" alt="" class="img-fluid rounded" />
                </div>
                <div class="card-body">
                    <ul class="list-inline fs-14 text-muted">
                        <li class="list-inline-item">
                            <i class="ri-checkbox-circle-line align-bottom me-1"></i> PHP, Laravel & MySQL
                        </li>
                    </ul>
                    <a href="javascript:void(0);">
                        <h5>Design your apps in your own way ?</h5>
                    </a>
                    <p class="text-muted fs-14">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
                    <div>
                        <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modals --}}

<!--  Extra Large modal example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel"><i class="ri-award-fill align-bottom me-1 text-primary"></i> Cutomer App</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <h4 class="fs-14 text-muted">
                            This is a web-based application about creating customer data. This application is made for the needs of a technical test, this application has several features : 
                        </h4>
                        <hr class="text-muted">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ri-checkbox-circle-fill text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 fs-14">
                                <p class="text-muted mb-0">Create, Read, Update and Delete Data Customer.</p>
                            </div>
                        </div>
                        <div class="d-flex mt-2 mb-2">
                            <div class="flex-shrink-0">
                                <i class="ri-checkbox-circle-fill text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <p class="text-muted mb-0 fs-14">Create, Read, Update and Delete Data User to Access App.</p>
                            </div>
                        </div>
                        <div class="d-flex mt-2 mb-2">
                            <div class="flex-shrink-0">
                                <i class="ri-checkbox-circle-fill text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <p class="text-muted mb-0 fs-14">Login, Reister, <strong>Send OTP to Verify Email</strong></p>
                            </div>
                        </div>
                        <div class="d-flex mt-2 mb-2">
                            <div class="flex-shrink-0">
                                <i class="ri-checkbox-circle-fill text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <p class="text-muted mb-0 fs-14">If you add customer data, it will <strong>Automatically Send an Email.</strong></p>
                            </div>
                        </div>
                        <div class="d-flex mt-2 mb-2">
                            <div class="flex-shrink-0">
                                <i class="ri-checkbox-circle-fill text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <p class="text-muted mb-0 fs-14">If you add customer data, it will <strong>Automatically Send Notifications to Telegram</strong></p>
                            </div>
                        </div>
                        <div class="d-flex mt-2 mb-2">
                            <div class="flex-shrink-0">
                                <i class="ri-checkbox-circle-fill text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <p class="text-muted mb-0 fs-14">You can add data with <strong>Multiple Row or Import from File Excel.</strong></p>
                            </div>
                        </div>
                        <div class="d-flex mt-2 mb-2">
                            <div class="flex-shrink-0">
                                <i class="ri-checkbox-circle-fill text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <p class="text-muted mb-0 fs-14"><strong>Show Data With Charts.</strong></p>
                            </div>
                        </div>
                        <p class="mb-2">
                            <span class="text-primary">Languages and Tools :</span> 
                            <div class="hstack gap-2 mb-2">
                                <span class="badge badge-soft-primary">PHP</span>
                                <span class="badge badge-soft-primary">Laravel</span>
                                <span class="badge badge-soft-primary">MySql</span>
                                <span class="badge badge-soft-primary">JQuery</span>
                                <span class="badge badge-soft-primary">Ajax</span>
                            </div>
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="card bg-soft-dark">
                            <div class="card-body">
                                <!-- Swiper -->
                                <div class="swiper navigation-swiper rounded">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/customer_app/02 Sent OTP.png')}}" alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/customer_app/02 Sent OTP Email.png')}}" alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/customer_app/03 Dashboard.png')}}" alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/customer_app/04 Data Customer.png')}}" alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/customer_app/04 Notif In Telegram.png')}}" alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/customer_app/04 Sent Email Customer.png')}}" alt="" class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/customer_app/05 Data User.png')}}" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next bg-white shadow"></div>
                                    <div class="swiper-button-prev bg-white shadow"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->