<div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0">Admissions List</h1>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admissions</a></li>
                            <li class="breadcrumb-item active">Admission List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        {{-- Content Navigation --}}


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->


                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">

                            <!-- /.card-header -->
                            <div class="card-body">

                                {{-- card 1 admission information  --}}
                                <div class="callout callout-info">
                                    <p class="text-bold">Admissions List</p>
                                    {{-- <div class="row"> --}}
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Program</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($all_students))
                                                @foreach ($all_students as $s)
                                                    <tr>
                                                        {{-- <td><img src="storage\app\{{$s->picture}}" alt=""></td> --}}
                                                        <td>#</td>
                                                        <td>{{ $s->name }}</td>
                                                        <td>{{ $s->program }}</td>
                                                        <td><a href="{{ route('student', [$s->id])}}"><i
                                                                    class="bi bi-pencil-square"><i class="fa fa-pencil-square-o"></i></i></a>
                                                                    <a wire:click="deleteStudent({{$s->id}})"><i class="fa-solid fa-trash-can"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            @elseif(empty($all_students))
                                                <tr>
                                                    <td>
                                                        <h6 class="text-danger">No Records Found!!!</h6>
                                                    </td>
                                                </tr>

                                            @endif
                                            {{-- </tbody>
                                    </table>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
