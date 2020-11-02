@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.master') 
@section('content')
@php
    $employees      = Helper::getEmployeesList();
    $departments    = App\Department::all();
    $locations      = App\Location::select('title', 'id')->get()->pluck('title', 'id')->toArray();
    $roles          = Spatie\Permission\Models\Role::all()->toArray();
    $register_form = App\SiteManagement::getMetaValue('reg_form_settings');
    $reg_one_title = !empty($register_form) && !empty($register_form[0]['step1-title']) ? $register_form[0]['step1-title'] : trans('lang.join_for_good');
    $reg_one_subtitle = !empty($register_form) && !empty($register_form[0]['step1-subtitle']) ? $register_form[0]['step1-subtitle'] : trans('lang.join_for_good_reason');
    $reg_two_title = !empty($register_form) && !empty($register_form[0]['step2-title']) ? $register_form[0]['step2-title'] : trans('lang.pro_info');
    $reg_two_subtitle = !empty($register_form) && !empty($register_form[0]['step2-subtitle']) ? $register_form[0]['step2-subtitle'] : '';
    $term_note = !empty($register_form) && !empty($register_form[0]['step2-term-note']) ? $register_form[0]['step2-term-note'] : trans('lang.agree_terms');
    $reg_three_title = !empty($register_form) && !empty($register_form[0]['step3-title']) ? $register_form[0]['step3-title'] : trans('lang.almost_there');
    $reg_three_subtitle = !empty($register_form) && !empty($register_form[0]['step3-subtitle']) ? $register_form[0]['step3-subtitle'] : trans('lang.acc_almost_created_note');
    $register_image = !empty($register_form) && !empty($register_form[0]['register_image']) ? '/uploads/settings/home/'.$register_form[0]['register_image'] : 'images/work.jpg';
    $reg_page = !empty($register_form) && !empty($register_form[0]['step3-page']) ? $register_form[0]['step3-page'] : '';
    $reg_four_title = !empty($register_form) && !empty($register_form[0]['step4-title']) ? $register_form[0]['step4-title'] : trans('lang.congrats');
    $reg_four_subtitle = !empty($register_form) && !empty($register_form[0]['step4-subtitle']) ? $register_form[0]['step4-subtitle'] : trans('lang.acc_creation_note');
    $show_emplyr_inn_sec = !empty($register_form) && !empty($register_form[0]['show_emplyr_inn_sec']) ? $register_form[0]['show_emplyr_inn_sec'] : 'true';
    $show_reg_form_banner = !empty($register_form) && !empty($register_form[0]['show_reg_form_banner']) ? $register_form[0]['show_reg_form_banner'] : 'true';
    $reg_form_banner = !empty($register_form) && !empty($register_form[0]['reg_form_banner']) ? $register_form[0]['reg_form_banner'] : null;
    $selected_registration_type = !empty($register_form) && !empty($register_form[0]['registration_type']) ? $register_form[0]['registration_type'] : 'multiple';
    $breadcrumbs_settings = \App\SiteManagement::getMetaValue('show_breadcrumb');
    $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
@endphp
@php $breadcrumbs = Breadcrumbs::generate('registerPage'); @endphp
@if (file_exists(resource_path('views/extend/front-end/includes/inner-banner.blade.php'))) 
    @include('extend.front-end.includes.inner-banner', 
        ['title' => trans('lang.login'), 'inner_banner' => $reg_form_banner, 'path' => 'uploads/settings/home/', 'show_banner' => $show_reg_form_banner ]
    )
@else 
    @include('front-end.includes.inner-banner', 
        ['title' =>  trans('lang.login'), 'inner_banner' => $reg_form_banner, 'path' => 'uploads/settings/home/', 'show_banner' => $show_reg_form_banner ]
    )
@endif
<div class="container">
    <div class="wt-main-section wt-haslayout wt-forgotpassword-holder">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header login-card" style="text">{{ trans('lang.login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            {{--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('lang.email_address') }}</label>  --}}
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="{{ trans('lang.email_address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus style="border-radius:0px; height:45px; ">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('lang.pass') }}</label>  --}}
                            <div class="col-md-12">
                                <input id="password" type="password"  placeholder="{{ trans('lang.pass') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required style="border-radius:0px; height:45px;">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6" style="text-align: right;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-right: 19%;">

                                    <label class="form-check-label" for="remember">
                                        {{ trans('lang.remember') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('lang.login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ trans('lang.forget_pass') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                {{--  <p class="google m-lg-top-bottom" style="
                text-align: center;
                border-bottom: 1px solid #e0e0e0;
                line-height: .1em;
                font-weight: 300;"><span>or</span></p>  --}}
                <div class="card-footer">
                    <div class="wt-registerformfooter" style="border-top: 0px">
                        <a href="{{{ route('register') }}}">{{{ trans('lang.create_account') }}}</a>                   
                    </div>
                </div>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
