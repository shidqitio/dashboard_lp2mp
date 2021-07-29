@extends('users.pusjian.layout.sidebar')

@section('title','pusjian')

@section('container')

@section('contain')
<div class="main-grid">

    <div class="social grid">

        <div class="grid-info">
            <div class="row">
                {{-- contain --}}
                <div class="col top-comment-grid">
                    <div class="comments likes">
                        <div class="comments-info likes-info">

                            <a href="#">Jumlah Bahan Ajar aktif TBO</a>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col top-comment-grid">
                    <div class="comments">
                        <div class="comments-info">

                            <a href="#">Rata-rata penjualan</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col top-comment-grid">
                    <div class="comments tweets">
                        <div class="comments-info tweets-info">
                            <h3>27000</h3>
                            <a href="#">Rata-rata penjualan</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                {{-- contain --}}
            </div>
        </div>
    </div>

</div>

@endsection