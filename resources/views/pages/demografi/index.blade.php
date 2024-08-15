@extends('layouts.app')

@section('content')
<section class="section-box box-about-section-1">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 text-center mb-4">
                <h2 class="display-4 text-primary">Peta Wilayah</h2>
            </div>
            <div class="col-lg-12 text-center mb-4">
                <img src="assets/imgs/peta.png" alt="Peta Wilayah" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-dark">JUMLAH DEKOPINWIL</h5>
                        <h2 class="card-text text-dark">34</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-dark">JUMLAH DEKOPINDA</h5>
                        <h2 class="card-text text-dark">514</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-dark">JUMLAH INDUK KOPERASI</h5>
                        <h2 class="card-text text-dark">59</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
.section-box {
    background-color: #e6f7ff;
    padding: 40px 0;
}
.card {
    border-radius: 10px;
    background-color: #121C36;
    color: white;
}
.card-title {
    font-size: 1.2rem;
    font-weight: 500;
}
.card-text {
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
