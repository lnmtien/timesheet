@extends('layouts.main')

@section('content')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            {!! Breadcrumbs::render('profile') !!}
        </div>
    </div>
</div>
<div class="m-content">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="m-portlet m-portlet--full-height  ">
                <div class="m-portlet__body">
                    <div class="m-card-profile">
                        <div class="m-card-profile__title m--hide">
                            Your Profile
                        </div>
                        <div class="m-card-profile__pic">
                            <div class="m-card-profile__pic-wrapper">
                                @if (Auth::user()->avatar)
                                    <img src="{{ url('uploads/' . Auth::user()->avatar) . '.png' }}" alt="" />
                                @else
                                    <img src="{{ url('assets/app/media/img/users/user4.jpg') }}" alt="" />
                                @endif
                            </div>
                        </div>
                        <div class="m-card-profile__details">
                            <span class="m-card-profile__name">{{ Auth::user()->fullname }}</span>
                            <a href="" class="m-card-profile__email m-link">{{ Auth::user()->email }}</a>
                        </div>
                    </div>
                    <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                        <li class="m-nav__separator m-nav__separator--fit"></li>
                        <li class="m-nav__section m--hide">
                            <span class="m-nav__section-text">Section</span>
                        </li>
                        <li class="m-nav__item">
                            <a href="header/profile&amp;demo=default.html" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                <span class="m-nav__link-title">  
                                    <span class="m-nav__link-wrap">      
                                        <span class="m-nav__link-text">My Profile</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="m-portlet__body-separator"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                    <i class="flaticon-share m--hide"></i>
                                    Update Profile
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
                                    Change Password
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="m_user_profile_tab_1">
                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{ route('profile') }}/detail/{{ Auth::user()->id }}" id="info-form">
                            <div class="m-portlet__body">
                                {{ csrf_field() }}
                                <div class="m-form__content">
                                    <div class="m-alert m-alert--icon alert alert-danger m--hide" id="info-form-msg">
                                        <div class="m-alert__icon">
                                            <i class="la la-warning"></i>
                                        </div>
                                        <div class="m-alert__text">
                                            Oh snap! Change a few things up and try submitting again.
                                        </div>
                                        <div class="m-alert__close">
                                            <button type="button" class="close" data-close="alert" aria-label="Close">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <div class="col-10 ml-auto">
                                        <h3 class="m-form__section">Personal Details</h3>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Full Name</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" name="fullname" value="{{ Auth::user()->fullname }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" name="email" value="{{ Auth::user()->email }}" readonly>
                                        <span class="m-form__help">Email is unchangeable</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Birthday</label>
                                    <div class="col-7">
                                        <div class='input-group'>
                                            <input type='text' class="form-control m-input" name="birthday" value="{{ date('m/d/Y', strtotime(Auth::user()->birthday)) }}" placeholder="Select date" id='m_datepicker' />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar-check-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Phone</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" name="phone" value="{{ Auth::user()->phone }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Avatar</label>
                                    <div class="col-7">
                                        <div class="custom-file">
                                            <input class="custom-file-input" type="file" name="avatar" value="" id="profile-avatar">
                                            <label class="custom-file-label" for="profile-avatar">Choose file</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-7">
                                            <button type="submit" class="btn btn-accent m-btn m-btn--pill m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
                                            <button type="reset" class="btn btn-secondary m-btn m-btn--pill m-btn--air m-btn--custom">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane " id="m_user_profile_tab_2">
                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{ route('profile') }}/passwd/{{ Auth::user()->id }}" id="pass-form">
                            <div class="m-portlet__body">
                                {{ csrf_field() }}
                                <div class="m-form__content">
                                    <div class="m-alert m-alert--icon alert alert-danger m--hide" id="pass-form-msg">
                                        <div class="m-alert__icon">
                                            <i class="la la-warning"></i>
                                        </div>
                                        <div class="m-alert__text">
                                            Oh snap! Change a few things up and try submitting again.
                                        </div>
                                        <div class="m-alert__close">
                                            <button type="button" class="close" data-close="alert" aria-label="Close">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <div class="col-10 ml-auto">
                                        <h3 class="m-form__section">Change Password</h3>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Current Password</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" name="current_password" type="password" value="">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">New Password</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" name="password" type="password" value="">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Confirm New Password</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" name="password_confirmation" type="password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-7">
                                            <button type="submit" class="btn btn-accent m-btn m-btn--pill m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
                                            <button type="reset" class="btn btn-secondary m-btn m-btn--pill m-btn--air m-btn--custom">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane " id="m_user_profile_tab_3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var FormWidgets = function() {
        var info, pass;
        return {
            init: function() {
                ! function() {
                    $("#m_datepicker").datepicker({
                        todayHighlight: !0,
                        templates: {
                            leftArrow: '<i class="la la-angle-left"></i>',
                            rightArrow: '<i class="la la-angle-right"></i>'
                        }
                    })
                }(), info = $("#info-form").validate({
                    rules: {
                        birthdate: {
                            date: !0
                        },
                        fullname: {
                            required: !0
                        }
                    },
                    invalidHandler: function() {
                        $("#info-form-msg").removeClass("m--hide").show(), mUtil.scrollTo("info-form-msg", -200)
                    },
                    submitHandler: function() {
                        $(info.submitButton).addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0);
                        $(info.currentForm).ajaxSubmit({
                            url: $(info.currentForm).attr('action'),
                            success: function(response) {
                                setTimeout(function() {
                                    $(info.submitButton).removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1)
                                    $("#info-form-msg").removeClass("m--hide").hide(), mUtil.scrollTo("info-form-msg", -200)
                                }, 1e3)
                            },
                            error: function(response) {
                                $(info.submitButton).removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1)
                                $("#info-form-msg").removeClass("m--hide").show(), mUtil.scrollTo("info-form-msg", -200)
                                if (response.status == 422) {
                                    info.showErrors(response.responseJSON);
                                }
                            }
                        });
                    }
                }), pass = $("#pass-form").validate({
                    rules: {
                        current_password: {
                            required: !0,
                            minlength: 8
                        },
                        password: {
                            required: !0,
                            minlength: 8
                        },
                        password_confirmation: {
                            required: !0,
                            minlength: 8
                        }
                    },
                    invalidHandler: function() {
                        $("#pass-form-msg").removeClass("m--hide").show(), mUtil.scrollTo("pass-form-msg", -200)
                    },
                    submitHandler: function() {
                        $(pass.submitButton).addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0);
                        $(pass.currentForm).ajaxSubmit({
                            url: $(pass.currentForm).attr('action'),
                            success: function(response) {
                                setTimeout(function() {
                                    $(pass.submitButton).removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1)
                                    $("#info-form-msg").removeClass("m--hide").hide(), mUtil.scrollTo("info-form-msg", -200)
                                }, 1e3)
                            },
                            error: function(response) {
                                $(pass.submitButton).removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1)
                                $("#pass-form-msg").removeClass("m--hide").show(), mUtil.scrollTo("pass-form-msg", -200)
                                if (response.status == 422) {
                                    pass.showErrors(response.responseJSON);
                                }
                            }
                        });
                    }
                })
            }
        }
    }();
    jQuery(document).ready(function() {
        FormWidgets.init()
    });
</script>
@endsection