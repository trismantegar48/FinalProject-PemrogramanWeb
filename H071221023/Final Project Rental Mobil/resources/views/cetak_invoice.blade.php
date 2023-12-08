<!-- Invoice -->
<style>
    .status {
        text-transform: uppercase;
        color: red
    }

    .head {
        display: block;
    }

    .tes {
        float: right;
        margin-top: -75px;
        margin-right: 85px;
    }

    .sewa {
        float: right;
        margin-left: 400px;
        margin-top: -165px;
    }


    .durasi {
        margin-top: -200px;
        margin-left: 250px;
    }

    .harga {
        margin-top: -200px;
        margin-left: 400px;
    }

    .total {
        margin-top: -200px;
        margin-left: 600px;

    }
</style>

<body>
    <img src="image/logo.png" alt="logo" height="50">
    <div class="head">
        <h2 class="text-uppercase" style="font: 20px Heebo, sans-serif; text-transform:uppercase;"><strong> Sarfaraz Rent
                Car</strong></h2>
        <div class="tes">
            <h3 class="status mb-2" align="left"> {{ $trans->status }}</h3>
            <p> Booking Code : {{ $trans->bookingcode }} </p>
            <p> Periode : {{ date('d-m-Y', strtotime($trans->start_date)) }} - {{ date('d-m-Y', strtotime($trans->end_date)) }}</p>
        </div>
    </div>

    <br><br>
    <hr>
    {{-- Seller - Buyer --}}
    <div class="head">
        <div class="px-0">
            <h3 class="seller-name fw-bold"><strong> Pemilik </strong></h3>
            <p> Sarfaraz Rent Car</p>
            <p class="seller-address"> Perumahan Puri Mandastana Blok Q No.3</p>
            <p> 08123456789 </p>
        </div>

        <div class="sewa" style="float:left;" align="left">
            <h3 align="left"> <strong> Penyewa</strong></h3>
            <p> {{ ucwords($trans->fullname) }} </p>
            <p> {{ ucwords($trans->alamat) }} </p>
            <p> {{ $trans->no_telp }} </p>
        </div>
    </div>

    {{-- Table --}}
    <br>
    <hr>

    <div>
        <p scope="col" class="border-0 pl-0"><strong> Armada </strong></p>
        <p class="pl-0"> {{ $trans->armada->name }}</p>
        <p class="pl-0"> Layanan Supir</p>
        <p class="pl-0"> Layanan Pengantaran Unit</p>
        <p class="pl-0 fw-bold"> <strong> Grand Total</strong> (Total + Biaya Tambahan) </p>

    </div>

    <div class="durasi">
        <p scope="col" class="text-center border-0"> <strong> Durasi </strong></p>
        <p class="text-center">{{ $trans->durasi_sewa }} Hari</p>
    </div>

    <div class="harga">
        <p scope="col" class="text-center border-0"> <strong> Harga </strong></p>
        <p> {{ number_format($trans->armada->price, 0, ',', '.') }}</p>
    </div>

    <div class="total">
        <p scope="col" class="text-right border-0"> <strong> Total </strong></p>
        <p class="text-right">Rp. {{ number_format($trans->total, 0, ',', '.') }}
        <p class="text-right" style="padding-top:px;">{{ $trans->supir }}</p>
        <p class="text-right">{{ $trans->pengantaran }}</p>
        <p class="text-right fw-bold">
            <strong>Rp. {{ number_format($trans->total + $trans->service, 0, ',', '.') }} </strong>
        </p>
    </div>

    {{-- <p class="text" style="color: red"> <strong> Catatan :</strong> </p> --}}
    <p>*{{ $trans->note }} </p>


</body>
