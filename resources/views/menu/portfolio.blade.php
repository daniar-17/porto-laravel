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
                    <img src="assets/images/small/img-8.jpg" alt="" class="img-fluid rounded" />
                </div>
                <div class="card-body">
                    <ul class="list-inline fs-14 text-muted">
                        <li class="list-inline-item">
                            <i class="ri-checkbox-circle-line text-success align-bottom me-1"></i> PHP, Laravel & MySQL
                        </li>
                    </ul>
                    <a href="javascript:void(0);">
                        <h5>Design your apps in your own way ?</h5>
                    </a>
                    <p class="text-muted fs-14">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
                    
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
                            <i class="ri-checkbox-circle-line text-success align-bottom me-1"></i> PHP, Laravel & MySQL
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
                            <i class="ri-checkbox-circle-line text-success align-bottom me-1"></i> PHP, Laravel & MySQL
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
                <h5 class="modal-title" id="myExtraLargeModalLabel">Judul Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=""></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=""></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <img class="d-block img-fluid mx-auto rounded" src="{{asset('assets/images/small/img-3.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid mx-auto rounded" src="{{asset('assets/images/small/img-2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block img-fluid mx-auto rounded" src="{{asset('assets/images/small/img-1.jpg')}}" alt="Third slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block img-fluid mx-auto rounded" src="{{asset('assets/images/small/img-4.jpg')}}" alt="Four slide">
                            </div>
                        </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success shadow-none fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->