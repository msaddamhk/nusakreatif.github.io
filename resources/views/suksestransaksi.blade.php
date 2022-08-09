@extends('layout.sukses')
@section('body')
    <div class="page-content page-success ">
        <div class="section-success" data-aos="zoom-in">
            <div class="container " style="margin-top:300px">
                <div class="row align-items-center row-login justify-content-center">
                    <div class="col-lg-6 text-center">
                        <img src="/images/success.svg" alt="" class="mb-4" />
                        {{-- <h2 style="font-size: 100px">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </h2> --}}
                        <h1>
                            Transaksi Berhasil!
                        </h1>
                        <p style="font-size: 20px">
                            Pesanan Anda Sedang Diproses
                        </p>
                        <div>
                            <a href="/pesanandetail" class="btn btn-success w-50">
                                Pesanan
                            </a>
                            {{-- <a href="/index.html" class="btn btn-signup w-50 mt-2">
                                Go To Shopping
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <form action="{{ route('pesan1') }}" method="post">
        @csrf
        <input type="hidden" class="form-control" name="harga" id="harga" value="{{ $totalharga }}">
    </form> --}}
@endsection
