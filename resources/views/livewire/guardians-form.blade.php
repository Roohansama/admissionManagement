<div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0">Guardians</h1>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admissions</a></li>
                            <li class="breadcrumb-item active">Guardians</li>
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
                <button type="button" class="btn btn-secondary rounded btn-block btn-flat">Guardian</button>
            </div>
            <div class="col col-3">
                <button type="button" wire:click="academic"
                    class="btn btn-secondary rounded btn-block btn-flat">Academics</button>
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
                                    <p class="text-bold">Add guardian</p>
                                    <div class="row">

                                        <div class="row">
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Relation</label>
                                                <select class="form-control select2" title="relation"
                                                    wire:model="relation" style="width: 100%;">
                                                    <option selected="selected">Select option</option>
                                                    <option value="father">Father</option>
                                                </select>
                                                @error('relation')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Guardian Name</label>
                                                <input type="email" class="form-control" wire:model="name"
                                                    id="exampleInputEmail1" >
                                                @error('name')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Occupation</label>
                                                <input type="email" class="form-control" wire:model="occupation"
                                                    id="exampleInputEmail1" >
                                                @error('occupation')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Organization</label>
                                                <input type="email" class="form-control" wire:model="organization"
                                                    id="exampleInputEmail1" >
                                            </div>
                                            @error('organization')
                                                <div class="row">
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Designation</label>
                                                <input type="email" class="form-control" wire:model="designation"
                                                    id="exampleInputEmail1" >
                                                @error('desgination')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Monthly Income</label>
                                                <input type="email" class="form-control" wire:model="income"
                                                    id="exampleInputEmail1" >
                                                @error('income')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">CNIC</label>
                                                <input type="email" class="form-control" oninput="this.value = this.value.slice(0, 11)" wire:model="cnic"
                                                    id="exampleInputEmail1" >
                                                @error('cnic')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Mobile</label>
                                                <input type="email" class="form-control" wire:model="mobile"
                                                    id="exampleInputEmail1" >
                                                @error('mobile')
                                                    <div class="row">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Whatsapp</label>
                                                <select class="form-control select2" title="whatsapp"
                                                    wire:model="whatsapp" style="width: 100%;">
                                                    <option selected="selected">Select option</option>
                                                    <option value="yes">yes</option>
                                                    <option value="no">no</option>
                                                </select>
                                                @error('whatsapp')
                                                    <div class="whatsapp">
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group px-1 col-3">
                                                <label for="exampleInputEmail1">Office Address</label>
                                                <input type="email" class="form-control" wire:model="address"
                                                    id="exampleInputEmail1" >
                                                @error('address')
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
                                            <button class="btn btn-success" wire:click="saveNext">Save & Next</button>
                                            {{-- <button class="btn btn-warning" wire:click="reset">New Guardian</button> --}}
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
                                    <p class="text-bold">Guardians List</p>
                                    {{-- <div class="row"> --}}
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Guardian Name</th>
                                                <th scope="col">Relation</th>
                                                <th scope="col">Occupation</th>
                                                <th scope="col">Monthly Income</th>
                                                <th scope="col">Works At</th>
                                                <th scope="col">CNIC/ B-Form</th>
                                                <th scope="col">Mobile Form</th>
                                                <th scope="col">Office Address</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($stu->guardians))
                                                @foreach ($stu->guardians as $g)
                                                    <tr>
                                                        <td>{{ $g->name }}</td>
                                                        <td>{{ $g->relation }}</td>
                                                        <td>{{ $g->occupation }}</td>
                                                        <td>{{ $g->income }}</td>
                                                        <td>{{ $g->organization }}</td>
                                                        <td>{{ $g->cnic }}</td>
                                                        <td>{{ $g->mobile }}</td>
                                                        <td>{{ $g->address }}</td>
                                                        <td><a wire:click="editGuardian({{ $g->id }})"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a wire:click="deleteGuardian({{ $g->id }})"><i class="fa-solid fa-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @elseif(empty($stu->guardians))
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
