@extends('layout.master')

@section('description', 'خانه هوشمند')
@section('keywords', 'bms, خانه هوشمند, طراحی bms, برق صنعتی, اتوماسیون خانگی')
@section('title', 'خانه هوشمند')

@section('content')


    <section class="container px-4 pt-5 my-5 text-center">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">فرم ثبت درخواست</h1>
                <p class="lead text-body-secondary">برای دریافت خدمات با ما در تماس باشید</p>
            </div>
        </div>
    </section>

    <div class="album bg-body-tertiary">
        <div class="container">
            <div class="row justify-content-center p-3 mx-1">
                <div class="card pt-3" style="max-width: 1000px;">
                    <div class="row">
                        <form action="{{ route('form.store') }}" method="post" class="mb-3">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="floatingInput"
                                       value="{{ old('name') }}" placeholder="نام: ">
                                <label for="floatingInput">نام: </label>
                                @error('name')
                                <span class="invalid-feedback">
                                        <strong>نام معتبر نیست!</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control @error('mobile') is-invalid @enderror " id="floatingInput" value="{{ old('mobile') }}"
                                       name="mobile" placeholder="شماره موبایل: ">
                                <label for="floatingInput">شماره موبایل: </label>
                                @error('mobile')
                                <span class="invalid-feedback">
                                        <strong>موبایل معتبر نیست!</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">ثبت درخواست</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
