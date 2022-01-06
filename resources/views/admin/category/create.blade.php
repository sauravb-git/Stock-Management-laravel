@extends('admin__master')
@section('content')


<div class="pcoded-main-container">
    <div class="pcoded-wrapper">


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="feather icon-clipboard bg-c-blue"></i>
                            <div class="d-inline">
                                <h5>Category </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Basic Form Inputs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-inner-content">

                <div class="main-body">
                    <div class="page-wrapper">

                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Category</h5>
                                            </div>



                                        <div class="card-block">
                                            <form action="{{ route('category.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2
                                                    col-form-label">Simple Input</label>
                                                    <div class="col-sm-2">
                                                        <input type="text"
                                                         name="category_name"
                                                         class="form-control">
                                                    </div>
                                                </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <button class="btn btn-primary "> Submit</button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>






                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
