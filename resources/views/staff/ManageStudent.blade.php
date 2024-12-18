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
                New view
              </a>
            </span>
            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Create new report
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
                  <div class="col-md-4">
                    <div class="row row-cards">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="h3 card-title">Basic</div>
                              <div>
                                <select id="rating-default">
                                  <option value="">Select a rating</option>
                                  <option value="5">Excellent</option>
                                  <option value="4" selected>Very Good</option>
                                  <option value="3">Average</option>
                                  <option value="2">Poor</option>
                                  <option value="1">Terrible</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="h3 card-title">Different icon</div>
                              <div class="space-y">
                                <select id="rating-default">
                                  <option value="">Select a rating</option>
                                  <option value="5">Excellent</option>
                                  <option value="4" selected>Very Good</option>
                                  <option value="3">Average</option>
                                  <option value="2">Poor</option>
                                  <option value="1">Terrible</option>
                                </select>
                                <select id="rating-heart-filled">
                                  <option value="">Select a rating</option>
                                  <option value="5">Excellent</option>
                                  <option value="4" selected>Very Good</option>
                                  <option value="3">Average</option>
                                  <option value="2">Poor</option>
                                  <option value="1">Terrible</option>
                                </select>
                                <select id="rating-ghost-filled">
                                  <option value="">Select a rating</option>
                                  <option value="5">Excellent</option>
                                  <option value="4" selected>Very Good</option>
                                  <option value="3">Average</option>
                                  <option value="2">Poor</option>
                                  <option value="1">Terrible</option>
                                </select>
                                <select id="rating-circle-filled">
                                  <option value="">Select a rating</option>
                                  <option value="5">Excellent</option>
                                  <option value="4" selected>Very Good</option>
                                  <option value="3">Average</option>
                                  <option value="2">Poor</option>
                                  <option value="1">Terrible</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                          <div class="card-body">
                            <table
                            class="table table-vcenter card-table">
                                          <thead>
                                            <tr>
                                              <th>Name</th>
                                              <th>Title</th>
                                              <th>Email</th>
                                              <th>Role</th>
                                              <th class="w-1"></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td >Paweł Kuna</td>
                                              <td class="text-muted" >
                                                UI Designer, Training
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                                              <td class="text-muted" >
                                                User
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td >Jeffie Lewzey</td>
                                              <td class="text-muted" >
                                                Chemical Engineer, Support
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                                              <td class="text-muted" >
                                                Admin
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td >Mallory Hulme</td>
                                              <td class="text-muted" >
                                                Geologist IV, Support
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                                              <td class="text-muted" >
                                                User
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td >Dunn Slane</td>
                                              <td class="text-muted" >
                                                Research Nurse, Sales
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                                              <td class="text-muted" >
                                                Owner
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td >Emmy Levet</td>
                                              <td class="text-muted" >
                                                VP Product Management, Accounting
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                                              <td class="text-muted" >
                                                Admin
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td >Maryjo Lebarree</td>
                                              <td class="text-muted" >
                                                Civil Engineer, Product Management
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                                              <td class="text-muted" >
                                                User
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td >Egan Poetz</td>
                                              <td class="text-muted" >
                                                Research Nurse, Engineering
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                                              <td class="text-muted" >
                                                Admin
                                              </td>
                                              <td>
                                                <a href="#">Edit</a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td >Kellie Skingley</td>
                                              <td class="text-muted" >
                                                Teacher, Services
                                              </td>
                                              <td class="text-muted" ><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                                              <td class="text-muted" >
                                                Owner
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