@extends('layouts.app')

@section('content')
<section class="section-box box-about-section-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="padding-left-auto">
                    <a class="btn btn-tag-black mt-3 mt-md-0 ms-2 ms-md-0" href="#">Tentang Dekopin</a>
                    <h2 class="display-2 mt-15 mb-25 px-2 fw-bold">Dekopin</h2>
                    <p class="text-xl mb-45 px-2">Dekopin bertujuan untuk menjadi pendorong utama dalam memajukan koperasi di seluruh Indonesia, serta memberikan kontribusi nyata dalam pembangunan ekonomi yang lebih inklusif dan berkeadilan.</p>
                    <div class="box-buttons-feature-4">
                        <a class="btn btn-brand-4-medium mr-20" href="#">Gabung
                            <svg width="22" height="8" viewbox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 3.99934L18.4791 0.478516V3.30642H0V4.69236H18.4791V7.52031L22 3.99934Z" fill=""></path>
                            </svg>
                        </a>

                        <a class="btn btn-learmore-2" href="#">
                            <span>
                                <svg width="39" height="38" viewbox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" width="38" height="38" rx="19" fill="#191919"></rect>
                                    <g clip-path="url(#clip0_1_376)">
                                        <path d="M24.1537 16.8139L15.218 25.7497L13.75 24.2817L22.6847 15.3459H14.81V13.2695H26.2301V24.6897H24.1537V16.8139Z" fill="#eabb33"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_1_376">
                                            <rect width="13" height="13" fill="white" transform="translate(13.5 13)"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </span>

                            Baca lebih lanjut
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="box-image-rect">
                    <img src="{{ asset('assets/imgs/image-pak-nh.png') }}" alt="RKI">
                    {{-- <a class="btn btn-play popup-youtube text-lg" href="">
                        <div class="video-play-button"><span></span></div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box box-prepared-section" style="background: rgb(19 30 58);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 mb-30">
                <h2 class="heading-2 text-white">Dekopin Berkomitmen untuk Memperkuat Gerakan Koperasi di Seluruh Indonesia</h2>
            </div>
            <div class="col-lg-6 mb-30">
                <p class="text-lg text-white fw-normal">Dengan pendekatan yang inklusif dan berkelanjutan, Koperasi RKI berusaha menciptakan ekosistem yang mendukung kesejahteraan anggota koperasi dan masyarakat luas. Melalui kemitraan yang strategis dan program-program yang relevan, Koperasi RKI siap membawa koperasi Indonesia menuju masa depan yang lebih cerah dan berdaya saing global.</p>
            </div>
        </div>
        <div class="row mt-45">
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/marketing.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Visi Kami</h3>
                            <p class="text-lg text-white">Mewujudkan kesejahteraan berkelanjutan bagi seluruh masyarakat Indonesia melalui penguatan dan pengembangan gerakan koperasi.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/digital.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Misi Kami</h3>
                            <p class="text-lg text-white">Meningkatkan Kualitas dan Kinerja Koperasi serta Mendorong Pertumbuhan Koperasi.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/product.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Identitas Kami</h3>
                            <p class="text-lg text-white">Dekopin memiliki komitmen yang kuat untuk mewujudkan kesejahteraan berkelanjutan bagi masyarakat Indonesia. Kami percaya bahwa melalui penguatan dan pengembangan gerakan koperasi, kita dapat menciptakan peluang ekonomi yang lebih baik dan meningkatkan kualitas hidup bersama.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box wow animate__animated animate__fadeIn box-preparing-2 mt-0 mb-100">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-15 text-capitalize">solusi bisnis dalam mendukung dan memperkuat<br class="d-none d-lg-block">gerakan koperasi di Indonesia</h2>
            <p class="text-lg neutral-700">Dengan solusi-solusi ini, Dekopin berkomitmen untuk mendukung koperasi di Indonesia <br class="d-none d-lg-block"> dalam mencapai kesuksesan dan kesejahteraan yang berkelanjutan</p>
        </div>
        <div class="row mt-90">
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Program Edukasi dan Pelatihan</h5>
                        <p>Seminar tentang regulasi dan kebijakan koperasi, Workshop kewirausahaan dan inovasi bisnis dan Pelatihan manajemen koperasi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare2.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Fasilitasi Teknologi dan Digitalisasi</h5>
                        <p>Pengembangan platform digital untuk pengelolaan koperasi, Implementasi sistem informasi koperasi berbasis cloud dan Aplikasi mobile untuk anggota koperasi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare3.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Akses Pembiayaan dan Investasi</h5>
                        <p>Fasilitasi akses ke investor untuk pengembangan usaha koperasi, Kemitraan dengan lembaga keuangan untuk akses pembiayaan dan Program pinjaman mikro dan kredit usaha rakyat (KUR)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Jaringan Bisnis dan Kemitraan</h5>
                        <p>Membangun jaringan bisnis antar koperasi, Kolaborasi dengan perusahaan nasional dan internasional, dan Pengembangan kemitraan strategis dengan pemerintah dan sektor swasta</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare2.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Advokasi dan Kebijakan</h5>
                        <p>Advokasi kebijakan yang mendukung perkembangan koperasi, Pendampingan dalam penyusunan regulasi koperasi dan Lobi dan kampanye untuk kepentingan koperasi di tingkat nasional dan internasional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare3.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Pengembangan Produk dan Layanan</h5>
                        <p>Inovasi produk dan diversifikasi layanan koperasi, Pengembangan usaha kreatif dan sektor UMKM dan Fasilitasi akses pasar untuk produk koperasi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare2.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Sistem Pendukung Operasional</h5>
                        <p>Penyediaan infrastruktur dan fasilitas operasional, Pengembangan pusat layanan terpadu untuk koperasi dan Sistem monitoring dan evaluasi kinerja koperasi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare3.png') }}" alt="RKI"></div>
                    <div class="card-info">
                        <h5>Inkubator Bisnis dan Start-up</h5>
                        <p>Program inkubasi untuk start-up koperasi, Pendampingan bisnis dan mentoring bagi usaha baru dan Akses ke sumber daya dan jaringan bisnis untuk start-up</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
