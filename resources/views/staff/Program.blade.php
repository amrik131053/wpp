@extends('Layouts/innerHeader')
@section('title', 'Program')

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
           Program
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <span class="d-none d-sm-inline">
              <a href="#" class="btn">
                Filter
              </a>
            </span>
            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Create Program
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
                                            <tr>
                                                <td >1</td>
                                              <td ></td>
                                              <td class="text-muted" >
                                                Guru Kashi University
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">GKU</a></td>
                                              <td class="text-muted" >
                                                Active
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                                                                     
                                          </tbody>
                                        </table>
                          </div>
                        </div>
                      </div>

          </div>
        </div>
      </div>
    
   
         
           
















</div>
@endsection