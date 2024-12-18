@extends('Layouts/innerHeader')
@section('title', 'Organisation')

@section('content')
<div class="page-wrapper">
 

  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Overview
          </div>
          <h2 class="page-title">
           Organisation
          </h2>
        </div>
        
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <span class="d-none d-sm-inline">
              <a href="#" class="btn">
               Export
              </a>
            </span>
            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Create Organisation
            </a>
            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
       
          <div class="card-body">
            <div class="container-xl">
                <div class="row row-cards">
                   <div class="col-md-12">
                        <div class="card">
                          <div class="card-body">
                            <table  class="table table-vcenter card-table">
                                          <thead>
                                            <tr>
                                              <th>Sr No</th>
                                              <th>Logo Image</th>
                                              <th>Name Of Organisation</th>
                                              <th>Short Name</th>
                                              <th>Status</th>
                                              <th class="w-1"></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($organisations as $index => $item)
                                            
    

                                            <tr>
                                                <td >{{$index+1}}</td>
                                              <td ><img src="\assets\img\{{ $item->organisation_logo }}" style="width:200px"></td>
                                              <td class="text-muted" >
                                                {{ $item->organisation_name }}
                                              </td>
                                              <td class="text-muted" >{{ $item->organisation_short_name }}</td>
                                              <td class="text-muted" >
                                                {{ $item->organisation_status}}
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            @endforeach                                      
                                          </tbody>
                                        </table>
                                        <br>
                                      <div>  {{$organisations->links('pagination::bootstrap-4')}}</div>
                                      </div>
                        </div>
                      </div>
                     
          </div>
        </div>
      </div>
      <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">New Organisation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('organisations.store')}}" method="POST">
              @csrf
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Organisation Name</label>
                <input type="text" class="form-control" name="name" placeholder="Organisation Name" required>
              </div>
             
             
              <div class="row">
                <div class="col-lg-8">
                  <div class="mb-3">
                    <label class="form-label">Short Name</label>
                    <div class="input-group input-group-flat">
                      
                      <input type="text" class="form-control ps-0"  name="shortname"  autocomplete="off">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status">
                      <option value="1" selected>Active</option>
                      <option value="0">Inactive</option>
                     
                    </select>
                  </div>
                </div>
              </div>
            
          
              <div class="row">
                
               
                <div class="col-lg-12">
                  <div>
                    <label class="form-label">Remarks</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
              </a>
              <input type="submit" class="btn btn-primary ms-auto"  value=" Create Organisation">
              
            </div>
            </form>
          </div>
        </div>
      </div>
   
         
           
















</div>
@endsection