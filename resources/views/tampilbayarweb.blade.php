@extends('layout.maindetail')

@section('body')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}" defer></script>
    <script type="text/javascript">
        // var payButton = document.getElementById('bayar-button');
        // payButton.addEventListener('click', function() {
        window.snap.pay('{{ $snapToken }}');
        // });
    </script>
@endsection
