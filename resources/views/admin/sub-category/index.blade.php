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
                                <h5>Sub-Category </h5>
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
                                            <h5>Sub-Category</h5>
                                            </div>


                         <div class="card-block">
                                 <table id="subcategories_table"
                                 class="display" style="width:100%">



                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Sub-Category</th>
                                        <th>action</th>
                                        <th>action</th>
                                    </tr>
                                </thead>

                                @foreach ($subcategorys as $subcategory)
                                 <tbody>
                                     <tr>
                                         <td>{{ $subcategory->category->category_name}}</td>
                                         <td>{{ $subcategory->subcategory_name }}</td>
                                         <td>
                                             <a href="{{ route('subcategory.edit',
                                             $subcategory->id) }}">Edit</a>
                                         </td>
                                         <td>
                                            <a href="{{ route('subcategory.destroy',
                                            $subcategory->id) }}">Delete</a>
                                         </td>
                                     </tr>
                                </tbody>
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
            $('#subcategories_table').DataTable();
        } );

</script>
@endpush
