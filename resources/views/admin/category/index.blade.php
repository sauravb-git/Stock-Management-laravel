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
                                 <table id="categories_table"
                                 class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>action</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                     @foreach ($category as $categorys)
                                     <tr>
                                         <td>{{ $categorys->id }}</td>
                                         <td>{{ $categorys->category_name }}</td>
                                         <td>
                                             <a href="{{ route('category.edit',$categorys->id)
                                            }}">Edit</a>
                                         </td>
                                         <td>
                                            <a href="{{ route('category.destroy',$categorys->id) }}">Delete</a>
                                         </td>
                                     </tr>
                                     @endforeach
                                  </table>
                             </div>
                         </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    @endsection

@push('scripts')
<script  src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script  src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>
<script>

       $(document).ready(function() {
            $('#categories_table').DataTable();
        } );

</script>
@endpush
