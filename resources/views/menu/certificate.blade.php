<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <h1 class="mb-3 ff-secondary fw-semibold lh-base">My <span class="text-primary">Certificate</span></h1>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row align-items-center">
        <div class="col-lg-6 col-sm-7 col-10 mx-auto">
            <div>
                <img src="{{asset('assets/images/file.png')}}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <!-- Swiper -->
                    <div class="swiper pagination-fraction-swiper rounded">
                        <div class="swiper-wrapper">
                            @foreach ($datas as $item)
                                <div class="swiper-slide">
                                    <a href="javascript:void(0);" class="link-success" data-bs-toggle="modal" data-bs-target=".{{ $item->name }}">
                                        <img src="{{asset('assets/images/sertifikat/'.$item->sertifikat)}}" alt="" class="img-fluid" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next bg-white shadow"></div>
                        <div class="swiper-button-prev bg-white shadow"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

{{-- Modals --}}
@foreach ($datas as $item)
    <div class="modal fade {{ $item->name }}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel"><i class="ri-award-fill align-bottom me-1 text-primary"></i> Sertifikat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="rounded shadow" alt="200x200" width="100%" src="{{asset('assets/images/sertifikat/'.$item->sertifikat)}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endforeach