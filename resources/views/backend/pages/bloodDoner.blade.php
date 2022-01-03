@extends('backend.layouts.master')
@section('title','Find Donner')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Blood Donner</h3>
                            <a href="#" class="btn btn-primary"> Go Back</a>
                        </div>
                    </div>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Blood Donner Request</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Last Donation</th>
                    <th>Blood Group</th>
                    <th>Message</th>
                    <th style="width: 40px">Action</th>

                </tr>
                </thead>
                <tbody>
                @if($findDoners->count()>0)
                    <?php $sl = 1; ?>
                    @foreach($findDoners as $findDoner)
                        <tr>
                            <td>{{$sl}}</td>
                            <td>{{$findDoner->name}}</td>
                            <td>{{$findDoner->email}}</td>
                            <td>{{$findDoner->phone}}</td>
                            <td>{{$findDoner->address}}</td>
                            <td>{{$findDoner->last_donate}}</td>
                            <td>{{$findDoner->bloodgroup}}</td>
                            <td>{!! \Illuminate\Support\Str::limit($findDoner->message,20) !!}</td>
                            <td class="d-flex">

                                <form action="{{route('findDoner.destroy',[$findDoner->id])}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                </form>
                                <a href="{{route('findDoner.show',[$findDoner->id])}}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        <?php $sl++; ?>
                    @endforeach
                @else
                    <tr>
                        <td colspan="12">
                            <h5 class="text-center">No findDoner Found</h5>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
            @push('scripts')
                <!-- DataTables  & Plugins -->
                    <script src="{{asset('assets/backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/jszip/jszip.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
                    <script src="{{asset('assets/backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "responsive": true, "lengthChange": false, "autoWidth": false,
                                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            $('#example2').DataTable({
                                "paging": true,
                                "lengthChange": false,
                                "searching": false,
                                "ordering": true,
                                "info": true,
                                "autoWidth": false,
                                "responsive": true,
                            });
                        });
                    </script>
            @endpush
 @push('css')
                <link rel="stylesheet" href="{{asset('assets/backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
                <link rel="stylesheet" href="{{asset('assets/backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
                <link rel="stylesheet" href="{{asset('assets/backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    @endpush
