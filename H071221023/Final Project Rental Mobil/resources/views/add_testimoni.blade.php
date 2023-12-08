@extends('layouts.main')

@section('container')

    <body>
        <div class="oleez-loader"></div>
        <main class="contact-page">
            <div class="container">
                <h1 class="oleez-page-title wow fadeInUp">Berikan Ulasan anda</h1>
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0 pr-lg-5 wow fadeInLeft">
                        <div class="embed-responsive">
                            <img src="/image/homepage2.jpg" width="600" height="450" frameborder="0" style="border:0;"
                                allowfullscreen="" aria-hidden="false" tabindex="0"></i>
                        </div>
                    </div>
                    <div class="col-md-6 pl-lg-5 wow fadeInRight">
                        <form action="{{ route('testi.user') }} " class="oleez-contact-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ Session()->get('id', '') }}">
                                <input type="text" class="oleez-input" id="fullName" name="fullname"
                                    value="{{ Session()->get('fullname', '') }} " required>
                                <label for="fullName">*Username</label>
                            </div>
                            <div class="form-group">
                                <label for="carsname">*Car/Bus Name</label>
                                <select name="car_name" class="form-select" aria-label="Default select example"
                                    id="car">
                                    <option value="">Select </option>
                                    @foreach ($car as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">*Ulasan Anda</label>
                                <textarea name="message" id="message" rows="10" class="oleez-textarea" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
