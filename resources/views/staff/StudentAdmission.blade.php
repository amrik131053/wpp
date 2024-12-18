@extends('Layouts/innerHeader')
@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
            New Admission
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Basic information</h3>
          </div>
          <div class="card-body">
            <div class="datagrid">
              <div class="datagrid-item">
                <div class="datagrid-title">Nationality</div>
                <div class="datagrid-content"><select class="form-control">
                    <option>Indian</option>
                    <option>Other</option>
                    {{-- <option>Other</option> --}}
                    </select>
                </div>
              </div>
              <div class="datagrid-item">
                <div class="datagrid-title">Name</div>
                <div class="datagrid-content"><input type="text" class="form-control" ></div>
              </div>
              <div class="datagrid-item">
                <div class="datagrid-title">Father Name</div>
                <div class="datagrid-content"><input type="text" class="form-control" ></div>
              </div>
              <div class="datagrid-item">
                <div class="datagrid-title">Date of Birth</div>
                <div class="datagrid-content"><input type="date" class="form-control" ></div>
              </div>
              <div class="datagrid-item">
                <div class="datagrid-title">Aadhaar No</div>
                <div class="datagrid-content"><input type="text" class="form-control" ></div>
              </div>
              <div class="datagrid-item">
                <div class="datagrid-title">Mobile No</div>
                <div class="datagrid-content"><input type="text" class="form-control" ></div>
              </div>
              <div class="datagrid-item">
                <div class="datagrid-title">Gender</div>
                <div class="datagrid-content"><select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                    </select>
                </div>
              </div>
              <div class="datagrid-item">
                <div class="datagrid-title">Category</div>
                <div class="datagrid-content"><select class="form-control">
                    <option value="General">General</option>
                    <option value="SC">SC</option>
                    <option value="OBC">OBC</option>
                    <option value="ST">ST</option>
                    {{-- <option>Other</option> --}}
                    </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Br>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Course Information</h3>
            </div>
            <div class="card-body">
              <div class="datagrid">
                <div class="datagrid-item">
                  <div class="datagrid-title">Session</div>
                  <div class="datagrid-content"><select class="form-control">
                      <option value="">Select</option>
                      <option value="A2024">A2024</option>
                      <option value="J2025">J2025</option>
                      </select>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">College </div>
                  <div class="datagrid-content"><select class="form-control">
                      <option value="">Select</option>
                      <option value="">Faculty of Engineering Technology</option>
                     
                      </select>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Department </div>
                  <div class="datagrid-content"><select class="form-control">
                      <option value="">Select</option>
                      <option value="">Diploma in Computer Science and Engineering</option>
                     
                      </select>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Program </div>
                  <div class="datagrid-content"><select class="form-control">
                      <option value="">Select</option>
                      <option value="">Diploma in Computer Science and Engineering</option>
                     
                      </select>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Lateral entry </div>
                  <div class="datagrid-content"><select class="form-control">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                     
                      </select>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Batch</div>
                  <div class="datagrid-content">
                    <input type="text" value="2024" readonly class="form-control">
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Fee Category</div>
                  <div class="datagrid-content"><select class="form-control">
                      <option value="0">General</option>
                      <option value="1">Sc in Punjab</option>
                      <option value="2">OBC in Punjab</option>
                     
                      </select>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Scholarship</div>
                  <div class="datagrid-content"><select class="form-control">
                    <option value="NA">Not Applicable</option>
                      <option value="0">Early Bird Scholarship</option>
                      <option value="1">Single Girl Child Scholarship</option>
                     
                     
                      </select>
                  </div>
                </div>
                
              </div>
            </div>
          </div><br>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Reference</h3>
            </div>

            <div class="card-body">
              <div class="mb-12">
                <label class="form-label">Buttons group</label>
                <div class="btn-group w-100"role="group">
                  <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-1" autocomplete="off" checked>
                  <label for="btn-radio-basic-1" type="button" class="btn">Staff</label>
                  <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-2" autocomplete="off">
                  <label for="btn-radio-basic-2" type="button" class="btn">Student</label>
                  <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-3" autocomplete="off">
                  <label for="btn-radio-basic-3" type="button" class="btn">Consultant</label>
                  <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-4" autocomplete="off">
                  <label for="btn-radio-basic-4" type="button" class="btn">Team</label>
                </div>
              </div><br>
              <div class="datagrid">
                <div class="datagrid-item">
                  <div class="datagrid-title">Select</div>
                  <div class="datagrid-content"><input type="text" class="form-control" placeholder="Empoyee ID">
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Name </div>
                  <div class="datagrid-content"><input type="text" class="form-control" placeholder="Name" readonly>
                  </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Department </div>
                  <div class="datagrid-content"><input type="text" class="form-control" placeholder="Department" readonly>
                     
                      </select>
                  </div>
                </div>
                 
              </div>
            </div>
          </div>

          <br>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Fee</h3>
            </div>
            <div class="card-body">
              <div class="datagrid">
                <div class="datagrid-item">
                  
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Fee Category</div>
                  <div class="datagrid-title"> 
                    One Time Charges: 1000/-
                    
                  </div>
                  
                 
                    <div class="datagrid-title"> Tutuion Fee: 1000/-  
                  
                  </div>
                  <div class="datagrid-title"> 
                  
                   Examination Fee: 1000/-
                  </div>
                </div>
           
                
                 
              </div>
            </div>
          </div>
          <br>
         <div style="text-align: right"> <button class="btn btn-success" >Create</button></div>
          


      </div>
    </div>
   
  </div>

@endsection