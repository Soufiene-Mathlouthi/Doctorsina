@extends('auth.profile.user.layouts.master')
@section('content')
<div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <div class="row justify-content-center">

    <div class="card">

        <div class="card-header">{{$document->doc}}</div>
        <div class=" align-center">
                <!--Begin::Portlet-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head kt-portlet__head--noborder">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
FILE FOR
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Widget -->
                        <div class="kt-widget kt-widget--user-profile-2">
                            <div class="kt-widget__head">
                                <div class="kt-widget__media">
                                    <img class="kt-widget__img kt-hidden-" src="https://cdn-icons-png.flaticon.com/512/240/240219.png" alt="image">
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest  kt-hidden">
                                        MP
                                    </div>
                                </div>

                                <div class="kt-widget__info">
                                    <a href="#" class="kt-widget__username">
                                    {{$patients[0]->first_name}}                                        
                                    </a>

                                    <span class="kt-widget__desc">
                                  By  {{$doctors[0]->first_name}}    
                                    </span>
                                </div>
                            </div>  

                            <div class="kt-widget__body">
                                <div class="kt-widget__section">
                                {{$document->description}}             
                                </div>

                                <div class="kt-widget__item">
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Email:</span>
                                        <a href="#" class="kt-widget__data"> {{$patients[0]->email}}   </a>
                                    </div>
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Phone:</span>
                                        <a href="#" class="kt-widget__data"> {{$patients[0]->phone}}   </a>
                                    </div>
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Doctor's email:</span>
                                        <span class="kt-widget__data"> {{$doctors[0]->email}}   </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="kt-widget__footer">
                            <a href="{{$document->doc}}" class="btn btn-outline-danger sstretched-link">DOWNLOAD</a>
                            </div>
                        </div>             
                        <!--end::Widget -->
                    </div>
                </div>
                <!--End::Portlet--> 
            </div>
</div></div></div>

@endsection
