@extends('layouts.app')

@section('content')
<section class="section-box box-content-blog-2">
    <div class="container">
        <div class="text-center blog-head">
            <span class="icon-1 shape-1"></span>
            <span class="icon-2 shape-2"></span>
            <span class="icon-3 shape-3"></span>
            <span class="btn btn-brand-4-sm">Berita Dekopin</span>

            <h2 class="heading-2 mb-20 mt-15">Berita & Informasi</h2>
            <p class="text-lg">Jelajahi Berita Dekopin untuk mendapatkan wawasan berharga, pendapat ahli, dan informasi terkini<br class="d-none d-lg-block"> tentang tren terbaru dalam dunia koperasi dan kesejahteraan.</p>

            <div class="box-button-preparing box-button-filters">
                {{-- Filter buttons can go here --}}
            </div>
        </div>

        <div class="row content-blog-2">
            <div class="col-lg-9">
                <div class="box-list-news-2">
                    <div class="row" id="berita">
                        <div class="col-lg-12">
                            <div class="card-news-style-2 card-news-style-3 border border-1 border-dark rounded-3 p-3">
                                <h3>Loading...</h3>
                            </div>
                        </div>
                    </div>

                    {{-- Pagination can go here if needed --}}
                </div>
            </div>

            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="sidebar-right sidebar-search">
                        <div class="form-search">
                            <input class="form-control" type="text" placeholder="Search...">
                            <button class="btn btn-search-black"></button>
                        </div>
                    </div>

                    <div class="sidebar-right sidebar-text">
                        <h5 class="mb-15">Tentang Dekopin</h5>
                        <p class="text-md neutral-500">Dekopin bertujuan untuk menjadi pendorong utama dalam memajukan koperasi di seluruh Indonesia, serta memberikan kontribusi nyata dalam pembangunan ekonomi yang lebih inklusif dan berkeadilan.</p>

                        <div class="box-socials-commingsoon mt-15">
                            <a class="icon-socials icon-facebook" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/fb.svg') }}">
                            </a>
                            <a class="icon-socials icon-instagram" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/in.svg') }}">
                            </a>
                            <a class="icon-socials icon-twitter" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/tw.svg') }}">
                            </a>
                            <a class="icon-socials icon-be" href="#">
                                <img alt="RKI" src="{{ asset('assets/imgs/template/icons/be.svg') }}">
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-right sidebar-posts">
                        <h5 class="mb-15">Postingan Populer</h5>

                        <ul class="list-popular-posts" id="popular-posts">
                            <li>
                                <div class="card-post border border-1 border-dark rounded-3 p-3">
                                    <h5>Loading...</h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-right sidebar-posts">
                        <h5 class="mb-15">Kategori</h5>

                        <ul class="list-categories" id="categories">
                            <li> <a href="#">Loading...</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-right sidebar-posts">
                        <h5 class="mb-15">Tags </h5>
                        <div class="box-tags-sidebar" id="tags">
                            <a class="btn btn-neutral-100" href="#">Loading...</a>
                        </div>
                    </div>

                    {{-- <div class="box-sidebar-normal"><a href="#"><img src="{{ asset('assets/imgs/page/job/ads.png') }}" alt="RKI"></a></div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('https://cms.rkicoop.co.id/api.php?act=berita&id_dekopin=11')
        .then(response => response.json())
        .then(data => {
            const beritaElement = document.getElementById('berita');
            beritaElement.innerHTML = ''; // Clear initial loading message

            if (data.length === 0) {
                beritaElement.innerHTML = '<div class="col-lg-12"><h3>Belum ada postingan</h3></div>';
                return;
            }

            data.forEach(item => {
                const col = document.createElement('div');
                col.className = 'col-lg-12 mb-4';

                const card = document.createElement('div');
                card.className = 'card-news-style-2 card-news-style-3 p-3';

                const cardImage = document.createElement('div');
                cardImage.className = 'card-image';
                const img = document.createElement('img');
                img.src = "https://cms.rkicoop.co.id/" + item.foto;
                img.alt = item.judul;
                cardImage.appendChild(img);

                const cardInfo = document.createElement('div');
                cardInfo.className = 'card-info';

                const cardMeta = document.createElement('div');
                cardMeta.className = 'card-meta';
                const category = document.createElement('a');
                category.className = 'btn btn-tag-sm';
                category.href = '#';
                category.textContent = item.id_kategori;
                const datePost = document.createElement('span');
                datePost.className = 'date-post';
                datePost.textContent = item.tgl_publish;
                cardMeta.appendChild(category);
                cardMeta.appendChild(datePost);

                const cardTitle = document.createElement('div');
                cardTitle.className = 'card-title';
                const titleLink = document.createElement('a');
                titleLink.className = 'link-new';
                titleLink.href = '#';
                titleLink.textContent = item.judul;
                cardTitle.appendChild(titleLink);

                const cardDesc = document.createElement('div');
                cardDesc.className = 'card-desc';
                const desc = document.createElement('p');
                desc.className = 'text-md neutral-500';
                desc.textContent = item.keterangan;
                cardDesc.appendChild(desc);

                const cardMore = document.createElement('div');
                cardMore.className = 'card-more';
                const readMoreLink = document.createElement('a');
                readMoreLink.className = 'btn btn-learmore-2';
                readMoreLink.href = '#';
                readMoreLink.innerHTML = 'Read More <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_599_4830)"><path d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z" fill=""></path></g><defs><clippath id="clip0_599_4830"><rect width="13" height="13" fill="white"></rect></clippath></defs></svg>';
                cardMore.appendChild(readMoreLink);

                cardInfo.appendChild(cardMeta);
                cardInfo.appendChild(cardTitle);
                cardInfo.appendChild(cardDesc);
                cardInfo.appendChild(cardMore);

                card.appendChild(cardImage);
                card.appendChild(cardInfo);

                col.appendChild(card);
                beritaElement.appendChild(col);
            });
        })
        .catch(error => {
            const beritaElement = document.getElementById('berita');
            beritaElement.innerHTML = '<div class="col-lg-12"><h3>Belum ada postingan</h3></div>';
            console.error('Error fetching news data:', error);
        });
});
</script>
