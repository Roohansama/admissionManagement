<div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Admission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admissions</a></li>
                            <li class="breadcrumb-item active">New Admission</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        {{-- Content Navigation --}}
        <div class="row g-0 px-3 border-round">
            <div class="col col-3">
                <button type="button" class="btn btn-secondary rounded btn-block btn-flat">Student</button>
            </div>
            <div class="col col-3">
                <button type="button" wire:click="guardian"
                    class="btn btn-secondary rounded btn-block btn-flat">Guardian</button>
            </div>
            <div class="col col-3">
                <button type="button" wire:click="academic"
                    class="btn btn-secondary rounded btn-block btn-flat">Academics</button>
            </div>
        </div>

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
                                    <p class="text-bold">Admission Details</p>
                                    <div class="row">
                                        <div class="col col-9">
                                            <div class="row">
                                                <div class="form-group px-1 col-4">
                                                    <label for="exampleInputEmail1">Study Level</label>
                                                    <select class="form-control select2" title="level"
                                                        wire:model="level" style="width: 100%;">
                                                        <option selected="selected">Select option</option>
                                                        <option value="University">University</option>
                                                    </select>
                                                    @error('level')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                                   

                                                </div>

                                                <div class="form-group px-1 col-4">
                                                    <label for="exampleInputEmail1">Batch</label>
                                                    <select class="form-control select2" title="batch"
                                                        wire:model="batch" style="width: 100%;">
                                                        <option selected="selected">Select option</option>
                                                        <option value="2019-24">2019-24</option>
                                                    </select>
                                                    @error('batch')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group px-1 col-4">
                                                    <label for="exampleInputEmail1">Class</label>
                                                    <select class="form-control select2" title="class"
                                                        wire:model="class" style="width: 100%;">
                                                        <option selected="selected">Select option</option>
                                                        <option value="1">1st Prof</option>
                                                    </select>
                                                    @error('class')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                          
                                            <div class="row">

                                                <div class="form-group px-1 col-4">
                                                    <label for="exampleInputEmail1">Program</label>
                                                    <select class="form-control select2" title="program"
                                                        wire:model="program" style="width: 100%;">
                                                        <option selected="selected">Select option</option>
                                                        <option value="pharmd-(morning)">PHARMD-(MORNING)</option>
                                                    </select>
                                                    @error('program')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group px-1 col-4">
                                                    <label for="exampleInputEmail1">Admission Type</label>
                                                    <select class="form-control select2" title="type"
                                                        wire:model="type" style="width: 100%;">
                                                        <option selected="selected">Select option</option>
                                                        <option value="regular">Regular</option>
                                                    </select>
                                                    @error('type')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col col-3">
                                        
                                            {{-- <input type="file" wire:model="picture">
                                            @error('image') <span class="error">{{ $message }}</span> @enderror --}}
                                    
                                        </div>
                                    </div>
                                </div>

                                {{-- card 2 Student information  --}}
                                <div class="callout callout-warning">
                                    <p class="text-bold">Student Information</p>


                                    <div class="row">
                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Student Name</label>
                                            <input type="email" class="form-control" wire:model="name"
                                                id="exampleInputEmail1" />
                                                @error('name')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Father Name</label>
                                            <input type="email" class="form-control" wire:model="father"
                                                id="exampleInputEmail1" />
                                                @error('father')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Gender</label>
                                            <select class="form-control select2" title="gender" wire:model="gender"
                                                style="width: 100%;">
                                                <option selected="selected">Select option</option>
                                                <option value="Male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            @error('gender')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Date of Birth</label>
                                            <div class="input-group date" id="reservationdate"
                                                data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    wire:model="dob" data-target="#reservationdate" />
                                                <div class="input-group-append" data-target="#reservationdate"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('dob')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">CNIC / B-Form</label>
                                            <input type="text" class="form-control" oninput="this.value = this.value.slice(0, 11)" wire:model="cnic"
                                                id="exampleInputEmail1" >
                                                @error('cnic')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" wire:model="email"
                                                id="exampleInputEmail1">
                                                @error('email')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Religion</label>
                                            <select class="form-control select2" title="religion"
                                                wire:model="religion" style="width: 100%;">
                                                <option selected="selected">Select option</option>
                                                <option value="Islam">Islam</option>
                                            </select>
                                            @error('religion')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Marital Status</label>
                                            <select class="form-control select2" title="marital" wire:model="marital"
                                                style="width: 100%;">
                                                <option selected="selected">Select option</option>
                                                <option value="married">married</option>
                                                <option value="single">single</option>
                                            </select>
                                            @error('marital')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Student Mobile</label>
                                            <input type="email" class="form-control" wire:model="mobile"
                                                id="exampleInputEmail1" />
                                                @error('mobile')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Landline</label>
                                            <input type="email" class="form-control" wire:model="landline"
                                                id="exampleInputEmail1" />
                                                @error('landline')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Blood Group</label>
                                            <select class="form-control select2" title="blood" wire:model="blood"
                                                style="width: 100%;">
                                                <option selected="selected">Select option</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                            @error('blood')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Nationality</label>
                                            <select class="form-control select2" title="nationality"
                                                wire:model="nationality" style="width: 100%;">
                                                <option selected="selected">Select option</option>
                                                <option value="Pakistani">Pakistani</option>
                                            </select>
                                            @error('nationality')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Hafiz e Quran</label>
                                            <select class="form-control select2" title="hafiz" wire:model="hafiz"
                                                style="width: 100%;">
                                                <option selected="selected">Select option</option>
                                                <option value="yes">yes</option>
                                                <option value="no">no</option>
                                            </select>
                                            @error('hafiz')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>

                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">Referred By</label>
                                            <select class="form-control select2" title="referred"
                                                wire:model="referred" style="width: 100%;">
                                                <option selected="selected">Select option</option>
                                                <option value="Self">Self</option>
                                            </select>
                                            @error('referred')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>
                                        {{-- @dd($fieldvalue->city) --}}
                                        <div class="form-group px-1 col-3">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="email" class="form-control" wire:model="city"
                                                id="exampleInputEmail1"  />
                                                @error('city')
                                                <div class="row">
                                                    <span class="text-danger">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="form-group px-1 col-9">
                                            <label for="exampleInputEmail1">Present Address</label>
                                            <label>Textarea</label>
                                            <textarea class="form-control" style="resize: none;" rows="3" title="level" wire:model="address1"
                                                placeholder="Enter ..."></textarea>
                                                @error('address1')
                                                        <div class="row">
                                                            <span class="text-danger">Please Enter Current Address</span>
                                                        </div>
                                                    @enderror
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="form-group px-1 col-9">
                                            <label for="exampleInputEmail1">Permanent Address</label>
                                            <label>Textarea</label>
                                            <textarea class="form-control" style="resize: none;" rows="3"title="level" wire:model="address2"
                                                placeholder="Enter ..."></textarea>
                                                @error('address2')
                                                <div class="row">
                                                    <span class="text-danger">Please Enter Permanent Address</span>
                                                </div>
                                            @enderror
                                        </div>
                                       
                                    </div>


                                </div>
                                <div class="callout callout-success">
                                    <p class="text-bold">Person accompanying student at time of admission</p>
                                    <div class="row">
                                        <div class="form-group px-1 col-3">
                                            <label>Person Name</label>
                                            <input class="form-control" wire:model="person"
                                                placeholder="Enter ..." />
                                                @error('person')
                                                        <div class="row">
                                                            <span class="text-danger">{{ $message }}</span>
                                                        </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group px-1 col-3">
                                            <label>Relation</label>
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
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="card-title">
                                            <button class="btn btn-info" wire:click="saveClose">Save & Close</button>
                                            <button class="btn btn-success" wire:click="saveNext">Save & Next</button>
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

                <div class="row text-success">
                    {{-- {{ $message }} --}}
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    @script
        <script>
            $(function() {
                $('#reservationdate').datetimepicker({
                    format: 'y-m-d',
                });
            })
        </script>
    @endscript
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
