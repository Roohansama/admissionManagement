<div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Academics</h1>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admissions</a></li>
                            <li class="breadcrumb-item active">Academics</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        {{-- Content Navigation --}}
        <div class="row g-0 px-3 border-round py-3">
            <div class="col col-3">
                <button type="button" wire:click="student"
                    class="btn btn-secondary rounded btn-block btn-flat">Student</button>
            </div>
            <div class="col col-3">
                <button type="button" wire:click="guardian"
                    class="btn btn-secondary rounded btn-block btn-flat">Guardian</button>
            </div>
            <div class="col col-3">
                <button type="button" class="btn btn-secondary rounded btn-block btn-flat">Academics</button>
            </div>
        </div>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">

                            <!-- /.card-header -->
                            <div class="card-body">

                                {{-- card 1 admission information  --}}

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Father Name</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Mobile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $stu->name }}</td>
                                            <td>{{ $stu->father }}</td>
                                            <td>{{ $stu->batch }}</td>
                                            <td>{{ $stu->program }}</td>
                                            <td>{{ $stu->class }}</td>
                                            <td>{{ $stu->mobile }}</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">

                            <!-- /.card-header -->
                            <div class="card-body">

                                {{-- card 1 admission information  --}}
                                <div class="callout callout-info">
                                    <p class="text-bold">Add Academics</p>
                                    <div class="row">

                                        <div class="row">
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Study Level</label>
                                                <select class="form-control select2" title="level" wire:model="level"
                                                    style="width: 100%;">
                                                    <option selected="selected">Select option</option>
                                                    <option value="university">UNIVERSITY</option>
                                                    <option value="intermediate">INTERMEDIATE</option>
                                                </select>
                                                @error('level')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Class</label>
                                                <select class="form-control select2" title="class" wire:model="class"
                                                    style="width: 100%;">
                                                    <option selected="selected">Select Class</option>
                                                    @if ($level == 'intermediate')
                                                        <option value="1">1ST YEAR</option>
                                                        <option value="2">2ND YEAR</option>
                                                    @elseif ($level == 'university')
                                                        <option value="1">1ST PROF</option>
                                                        <option value="2">2ND PROF</option>
                                                    @endif

                                                </select>
                                                @error('class')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Program</label>
                                                <select class="form-control select2" title="program"
                                                    wire:model="program" style="width: 100%;">
                                                    <option selected="selected">Select Program</option>
                                                    @if ($level == 'intermediate')
                                                        <option value="premed">PRE MEDICAL</option>
                                                    @elseif ($level == 'university')
                                                        <option value="pharmd">PHARMD</option>
                                                    @endif

                                                </select>
                                                @error('program')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Institute</label>
                                                <input type="email" class="form-control" wire:model="institute"
                                                    id="exampleInputEmail1">
                                                @error('institute')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Board</label>
                                                <input type="email" class="form-control" wire:model="board"
                                                    id="exampleInputEmail1">
                                                @error('board')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Roll #</label>
                                                <input type="email" class="form-control" wire:model="roll"
                                                    id="exampleInputEmail1">
                                                @error('roll')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Reigstration #</label>
                                                <input type="email" class="form-control" wire:model="registration"
                                                    id="exampleInputEmail1">
                                                @error('registration')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Obtained Marks</label>
                                                <input type="email" class="form-control" wire:model="obtained"
                                                    id="exampleInputEmail1">
                                                @error('obtained')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Total Marks</label>
                                                <input type="email" class="form-control" wire:model="total"
                                                    id="exampleInputEmail1">
                                                @error('total')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Passing Year</label>
                                                <input type="email" class="form-control" wire:model="year"
                                                    id="exampleInputEmail1">
                                                @error('year')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Exam Type</label>
                                                <input type="email" class="form-control" wire:model="exam"
                                                    id="exampleInputEmail1">
                                                @error('exam')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="card-title">
                                            <button class="btn btn-info" wire:click="saveClose">Save</button>
                                            {{-- <button class="btn btn-success">Save</button> --}}
                                        </h3>
                                    </div>
                                    @if (!empty($messgae))
                                    <div class="col text-danger">
                                        <h3>{{$message}}</h3>
                                    </div>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">

                            <!-- /.card-header -->
                            <div class="card-body">

                                {{-- card 1 admission information  --}}
                                <div class="callout callout-info">
                                    <p class="text-bold">Academics List</p>
                                    {{-- <div class="row"> --}}
                                   
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Study Level</th>
                                                    <th scope="col">Class</th>
                                                    <th scope="col">Program</th>
                                                    <th scope="col">Institute</th>
                                                    <th scope="col">Board</th>
                                                    <th scope="col">Roll #</th>
                                                    <th scope="col">Registration #</th>
                                                    <th scope="col">Obtained Marks</th>
                                                    <th scope="col">Total Marks</th>
                                                    <th scope="col">Passing year</th>
                                                  
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($stu->academics))
                                                    @foreach ($stu->academics as $a)
                                                        <tr>
                                                            <td>{{ $a->level }}</td>
                                                            <td>{{ $a->class }}</td>
                                                            <td>{{ $a->program }}</td>
                                                            <td>{{ $a->institute }}</td>
                                                            <td>{{ $a->board }}</td>
                                                            <td>{{ $a->roll }}</td>
                                                            <td>{{ $a->registration }}</td>
                                                            <td>{{ $a->obtained }}</td>
                                                            <td>{{ $a->total }}</td>
                                                            <td>{{ $a->year }}</td>
                                                           
                                                            <td><a
                                                                    wire:click="editAcademic({{ $a->id }})"><i class="fa fa-pencil-square-o"></i></a>
                                                                    <a
                                                                    wire:click="deleteAcademic({{ $a->id }})"><i class="fa-solid fa-trash-can"></i></a>
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                @elseif(empty($stu->academics))
                                                    <tr>
                                                        <td>
                                                            <h6 class="text-danger">No Records Found!!!</h6>
                                                        </td>
                                                    </tr>

                                                @endif
                                            </tbody>
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
