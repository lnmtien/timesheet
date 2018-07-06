@extends('layouts.main')

@section('content')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            {!! Breadcrumbs::render('projects') !!}
        </div>
        <div>
            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                    <i class="la la-plus m--hide"></i>
                    <i class="la la-ellipsis-h"></i>
                </a>
                <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav">
                                    <li class="m-nav__section m-nav__section--first m--hide">
                                        <span class="m-nav__section-text">Quick Actions</span>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="{{ route('projects.create') }}" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-plus"></i>
                                            <span class="m-nav__link-text">New Project</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m-content">
    <!--begin::Portlet-->
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        All Projects
                        <small></small>
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-4">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>Status:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_status">
                                            <option value="">All</option>
                                            <option value="0">Open</option>
                                            <option value="1">Close</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span>
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m_datatable" id="json_data"></div>
        </div>
    </div>
    <!--end::Portlet-->
</div>
<script type="text/javascript">
    var DatatableJsonRemoteDemo = {
        init: function() {
            var t, e;
            t = $(".m_datatable").mDatatable({
                data: {
                    type: "remote",
                    source: {
                        read: {
                            url: 'http://localhost:8000/api/projects',
                            method: 'get'
                        }
                    },
                    pageSize: 10
                },
                layout: {
                    theme: "default",
                    class: "",
                    scroll: !1,
                    footer: !1
                },
                sortable: !0,
                pagination: !0,
                search: {
                    input: $("#generalSearch")
                },
                columns: [
                    {
                        field: "id",
                        title: "#",
                        width: 50,
                        sortable: !0,
                        selector: !1,
                        textAlign: "center"
                    }, 
                    {
                        field: "name",
                        title: "Name"
                    }, 
                    {
                        field: "pm_user",
                        title: "Manager",
                        template: function(t) {
                            return t.pm_user.fullname
                        }
                    },
                    {
                        field: "pl_user",
                        title: "Leader",
                        template: function(t) {
                            return t.pl_user.fullname
                        }
                    },
                    {
                        field: "start_date",
                        title: "Start Date"
                    }, 
                    {
                        field: "end_date",
                        title: "End Date"
                    }, 
                    {
                        field: "kick_off",
                        title: "Kick Off"
                    }, 
                    {
                        field: "sign_off",
                        title: "Sign Off"
                    }, 
                    {
                        field: "status",
                        title: "Status",
                        template: function(t) {
                            var e = {
                                0: {
                                    title: "Open",
                                    class: "m-badge--brand"
                                },
                                1: {
                                    title: "Close",
                                    class: " m-badge--metal"
                                }
                            };
                            return '<span class="m-badge ' + e[t.status].class + ' m-badge--wide">' + e[t.status].title + "</span>"
                        }
                    }, 
                    /*{
                        field: "Actions",
                        width: 110,
                        title: "Actions",
                        sortable: !1,
                        overflow: "visible",
                        template: function(t, e, a) {
                            return '\t\t\t\t\t\t<div class="dropdown ' + (a.getPageSize() - e <= 4 ? "dropup" : "") + '">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Download">\t\t\t\t\t\t\t<i class="la la-download"></i>\t\t\t\t\t\t</a>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit settings">\t\t\t\t\t\t\t<i class="la la-cog"></i>\t\t\t\t\t\t</a>\t\t\t\t\t'
                        }
                    }*/
                ]
            }), e = t.getDataSourceQuery(), $("#m_form_status").on("change", function() {
                t.search($(this).val(), "status")
            }).val(void 0 !== e.status ? e.status : ""), $("#m_form_status").selectpicker()
        }
    };
    jQuery(document).ready(function() {
        DatatableJsonRemoteDemo.init()
    });
</script>
@endsection