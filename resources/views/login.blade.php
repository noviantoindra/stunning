@extends('layouts.template')

@section('content')
<!-- Start breadcrumb Area -->
<div class="rbt-breadcrumb-default pt--100 pt_md--50 ptb_sm--30 bg-gradient-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h2 class="title">Login</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area -->

<div class="rbt-elements-area bg-color-white">
    <div class="container">
        <div class="row gy-5 row--30">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <form class="max-width-auto">
                        <div class="form-group">
                            <input name="con_name" type="text" />
                            <label>Username or email *</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <input name="con_email" type="email">
                            <label>Password *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="row mb--30">
                            <div class="col-lg-6">
                                <div class="rbt-checkbox">
                                    <input type="checkbox" id="rememberme" name="rememberme">
                                    <label for="rememberme">Remember me</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="rbt-lost-password text-end">
                                    <a class="rbt-btn-link" href="#">Lost your password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Log In</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
