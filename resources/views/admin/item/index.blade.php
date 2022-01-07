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
                                <h5>Item </h5>
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
                                            <h5>Item</h5>
                                            </div>


                         <div class="card-block">
                                 <table id="items_table"
                                 class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>action</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                     @foreach ($items as $item)
                                     <tr>
                                        <td>{{ $item->item }}</td>
                                        <td>{{ $item->category->category_name }}</td>
                                        <td>{{ $item->subcategory->subcategory_name }}</td>
                                        <td>
                                 <a href="{{ route('item.edit',$item->id) }}">Edit</a>
                                        </td>

                                        <td>
                                           <a href="">Delete</a>
                                        </td>
                                    </tr>
                                     @endforeach
                                     <tbody>
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
            $('#items_table').DataTable();
        } );

</script>
@endpush
