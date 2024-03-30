     <!-- breadcrumb-area -->
     <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset("assets/img/bg/breadcrumb_bg.jpg") }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{ $header_2 ?? "" }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $header_1 ?? "" }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset("assets/img/images/breadcrumb_shape01.png") }}" alt="">
            <img src="{{ asset("assets/img/images/breadcrumb_shape02.png") }}" alt="">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
