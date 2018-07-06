@extends('layouts.main')

@section('content')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            {!! Breadcrumbs::render('projects.create') !!}
        </div>
    </div>
</div>
<div class="m-content">
    <div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile">
        <form class="m-form m-form--label-align-right" id="project-form" method="POST" action="{{ route('projects.store') }}">
            {{ csrf_field() }}
            <div class="m-portlet__head">
                <div class="m-portlet__head-progress">

                    <!-- here can place a progress bar-->
                </div>
                <div class="m-portlet__head-wrapper">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Create New Project
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <a href="{{ route('projects') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
                            <span>
                                <i class="la la-arrow-left"></i>
                                <span>Back</span>
                            </span>
                        </a>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md">
                                <span>
                                    <i class="la la-check"></i>
                                    <span>Save</span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-accent dropdown-toggle dropdown-toggle-split m-btn m-btn--md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-plus"></i> Save & New</a>
                                <a class="dropdown-item" href="#"><i class="la la-undo"></i> Save & Close</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="la la-close"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--begin::Form-->
        
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="m-form__section m-form__section--first">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">Project Info:</h3>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">Project Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="name" class="form-control m-input">
                                    <span class="m-form__help">Please enter your project name</span>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Project Manager:</label>
                                <div class="col-lg-9">
                                    <select class="form-control m-select2" id="m_select2_pm" name="pm_id">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Project Leader:</label>
                                <div class="col-lg-9">
                                    <select class="form-control m-select2" id="m_select2_pl" name="pl_id">
                                        <option></option>
                                        <option value="1">Mustard</option>
                                        <option value="2">Ketchup</option>
                                        <option value="3">Relish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Project Description:</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control m-input" name="description" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="m-form__seperator m-form__seperator--dashed"></div>
                        <div class="m-form__section m-form__section--last">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">Project Plan:</h3>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Start Date:</label>
                                <div class="col-lg-9">
                                    <div class="input-group date">
                                        <input type="text" class="form-control m-input m_datepicker" name="start_date" readonly placeholder="Select start date" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">End Date:</label>
                                <div class="col-lg-9">
                                    <div class="input-group date">
                                        <input type="text" class="form-control m-input m_datepicker" name="end_date" readonly placeholder="Select end date" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Kick-off Date:</label>
                                <div class="col-lg-9">
                                    <div class="input-group date">
                                        <input type="text" class="form-control m-input m_datepicker" name="kick_off" readonly placeholder="Select kick-off date" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Sign-off Date:</label>
                                <div class="col-lg-9">
                                    <div class="input-group date">
                                        <input type="text" class="form-control m-input m_datepicker" name="sign_off" readonly placeholder="Select sign-off date" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Project Status:</label>
                                <div class="col-lg-9">
                                    <input data-switch="true" type="checkbox" name="status" checked="checked" data-on-text="Open" data-handle-width="50" data-off-text="Close" data-on-color="success">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--right">
                    <div class="m-portlet__head-tools">
                        <a href="{{ route('projects') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
                            <span>
                                <i class="la la-arrow-left"></i>
                                <span>Back</span>
                            </span>
                        </a>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-accent m-btn m-btn--icon m-btn--wide m-btn--md">
                                <span>
                                    <i class="la la-check"></i>
                                    <span>Save</span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-accent dropdown-toggle dropdown-toggle-split m-btn m-btn--md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-plus"></i> Save & New</a>
                                <a class="dropdown-item" href="#"><i class="la la-undo"></i> Save & Close</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="la la-close"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
<script type="text/javascript">
var pm_user = [];
var Select2 = {
    init: function() {
        $(".m_datepicker").datepicker({
            todayHighlight: !0,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("[data-switch=true]").bootstrapSwitch(),
        form = $("#project-form").validate({
            rules: {
                start_date: {
                    date: !0,
                    required: !0
                },
                end_date: {
                    date: !0,
                    required: !0
                },
                kick_off: {
                    date: !0,
                    required: !0
                },
                sign_off: {
                    date: !0,
                    required: !0
                },
                name: {
                    required: !0
                }
            },
            invalidHandler: function() {
            },
            submitHandler: function() {
                $(form.currentForm).find('button[type="submit"]').addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0)
                $(form.currentForm).ajaxSubmit({
                    url: $(form.currentForm).attr('action'),
                    success: function(response) {
                        window.location.href = '{{ route("projects") }}';
                    },
                    error: function(response) {
                        $(info.submitButton).removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1)
                        if (response.status == 422) {
                            form.showErrors(response.responseJSON);
                        }
                    }
                });
            }
        }),
        $('#m_select2_pm, #m_select2_pl').select2({
            placeholder: "Select a person",
            data: pm_user
        });
    }
};
jQuery(document).ready(function() {
    $.getJSON('http://localhost:8000/api/users', function(data) {
        $.each(data, function(index, item) {
            pm_user.push({
                id: item.id,
                text: item.fullname
            });
        }), Select2.init();
    });
});
</script>
@endsection