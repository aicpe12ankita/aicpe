<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Role Management </h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card mb-3">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Assign Role</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Select User</label>
                                <select class="form-control selcect2-single">
                                  <option value="admin">Test 1</option>
                                  <option value="institution">John Doe</option>
                                  <option value="employer">Sarah Kortney</option>
                                </select>
                              </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="card d-flex flex-row mb-4">
                      <a class="d-flex" href="#">
                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                              class="img-thumbnail border-0 m-4 list-thumbnail align-self-center">
                      </a>
                      <div class=" d-flex flex-grow-1 min-width-zero">
                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                              <div class="min-width-zero">
                                  <a href="#">
                                      <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                                  </a>
                                  <p class="mb-2 text-muted text-small">Designation : Administrator</p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3">
                      <div class="card mb-2">
                        <div class="card-body">
                            <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="Dashboard" value="Dashboard">
                                <span class="custom-control-label"> Dashboard</span>
                            </label></h4>  
                            <ul class="privleges">
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="DashboardView" value="DashboardView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                            </ul> 
                        </div>
                      </div>
                      <!-- -----------master tables -->
                      <div class="card mb-2">
                        <div class="card-body">
                            <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="MasterTable" value="MasterTable">
                                <span class="custom-control-label"> Master Tables</span>
                            </label></h4>  
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableCountries" value="MasterTableCountries">
                                <span class="custom-control-label"> Countries</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCountriesView" value="MasterTableCountriesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCountriesAdd" value="MasterTableCountriesAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCountriesEdit" value="MasterTableCountriesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCountriesDelete" value="MasterTableCountriesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableStates" value="MasterTableStates">
                                <span class="custom-control-label"> States</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableStatesView" value="MasterTableStatesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableStatesAdd" value="MasterTableStatesAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableStatesEdit" value="MasterTableStatesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableStatesDelete" value="MasterTableStatesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableDistrict" value="MasterTableDistrict">
                                <span class="custom-control-label"> District</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableDistrictView" value="MasterTableDistrictView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableDistrictAdd" value="MasterTableDistrictAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableDistrictEdit" value="MasterTableDistrictEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableDistrictDelete" value="MasterTableDistrictDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableCities" value="MasterTableCities">
                                <span class="custom-control-label"> Cities</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCitiesView" value="MasterTableCitiesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCitiesAdd" value="MasterTableCitiesAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCitiesEdit" value="MasterTableCitiesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCitiesDelete" value="MasterTableCitiesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableAwards" value="MasterTableAwards">
                                <span class="custom-control-label"> Awards</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAwardsView" value="MasterTableAwardsView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAwardsAdd" value="MasterTableAwardsAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAwardsEdit" value="MasterTableAwardsEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAwardsDelete" value="MasterTableAwardsDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableInstStaff" value="MasterTableInstStaff">
                                <span class="custom-control-label"> Institute Staff Designation</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableInstStaffView" value="MasterTableInstStaffView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableInstStaffAdd" value="MasterTableInstStaffAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableInstStaffEdit" value="MasterTableInstStaffEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableInstStaffDelete" value="MasterTableInstStaffDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableEmpStaff" value="MasterTableEmpStaff">
                                <span class="custom-control-label"> Employer Staff Designation</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableEmpStaffView" value="MasterTableEmpStaffView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableEmpStaffAdd" value="MasterTableEmpStaffAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableEmpStaffEdit" value="MasterTableEmpStaffEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableEmpStaffDelete" value="MasterTableEmpStaffDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableAdminStaff" value="MasterTableAdminStaff">
                                <span class="custom-control-label"> Admin Staff Designation</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAdminStaffView" value="MasterTableAdminStaffView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAdminStaffAdd" value="MasterTableAdminStaffAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAdminStaffEdit" value="MasterTableAdminStaffEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAdminStaffDelete" value="MasterTableAdminStaffDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTablePaymentMode" value="MasterTablePaymentMode">
                                <span class="custom-control-label"> Payment Mode</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePaymentModeView" value="MasterTablePaymentModeView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePaymentModeAdd" value="MasterTablePaymentModeAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePaymentModeEdit" value="MasterTablePaymentModeEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePaymentModeDelete" value="MasterTablePaymentModeDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableTransactionType" value="MasterTableTransactionType">
                                <span class="custom-control-label"> Transaction type</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableTransactionTypeView" value="MasterTableTransactionTypeView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableTransactionTypeAdd" value="MasterTableTransactionTypeAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableTransactionTypeEdit" value="MasterTableTransactionTypeEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableTransactionTypeDelete" value="MasterTableTransactionTypeDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableQualification" value="MasterTableQualification">
                                <span class="custom-control-label"> Qualification</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableQualificationView" value="MasterTableQualificationView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableQualificationAdd" value="MasterTableQualificationAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableQualificationEdit" value="MasterTableQualificationEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableQualificationDelete" value="MasterTableQualificationDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTablePhoto" value="MasterTablePhoto">
                                <span class="custom-control-label"> Photo ID Type</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePhotoView" value="MasterTablePhotoView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePhotoAdd" value="MasterTablePhotoAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePhotoEdit" value="MasterTablePhotoEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTablePhotoDelete" value="MasterTablePhotoDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableAicpeContent" value="MasterTableAicpeContent">
                                <span class="custom-control-label"> AICPE World Content</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAicpeContentView" value="MasterTableAicpeContentView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAicpeContentAdd" value="MasterTableAicpeContentAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAicpeContentEdit" value="MasterTableAicpeContentEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableAicpeContentDelete" value="MasterTableAicpeContentDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="MasterTableCurrencyConverter" value="MasterTableCurrencyConverter">
                                <span class="custom-control-label"> Currency Converter</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCurrencyConverterView" value="MasterTableCurrencyConverterView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCurrencyConverterAdd" value="MasterTableCurrencyConverterAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCurrencyConverterEdit" value="MasterTableCurrencyConverterEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MasterTableCurrencyConverterDelete" value="MasterTableCurrencyConverterDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                        </div>
                      </div>
                      <!-- -----------Wallet -->
                    <div class="card mb-2">
                      <div class="card-body">
                        <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="Wallet" value="Wallet">
                            <span class="custom-control-label"> Wallet</span>
                        </label></h4>  
                        <ul class="privleges">
                          <li class="custom-li">
                            <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                            <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="WalletView" value="WalletView">
                            <span class="custom-control-label">View</span>
                            </label>
                          </li>
                          <li class="custom-li">
                            <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                            <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="WalletDelete" value="WalletDelete">
                            <span class="custom-control-label">Delete</span>
                            </label>
                          </li>
                        </ul> 
                      </div>
                    </div>
                    <!-- -------------Postage Record------ -->
                    <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="PostageRecords" value="">
                          <span class="custom-control-label"> PostageRecords</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PostageRecordsView" value="PostageRecordsView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PostageRecordsAdd" value="PostageRecordsAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PostageRecordsEdit" value="PostageRecordsEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PostageRecordsDelete" value="PostageRecordsDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- --------------------Address Label----------------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="AddressLabel" value="AddressLabel">
                          <span class="custom-control-label"> Address Label</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AddressLabelView" value="AddressLabelView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AddressLabelAdd" value="AddressLabelAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AddressLabelDelete" value="AddressLabelDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AddressLabelEdit" value="AddressLabelPrint">
                          <span class="custom-control-label">Print</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- --------------------Business Report -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="Business" value="Business">
                          <span class="custom-control-label"> Business</span>
                      </label></h4>  
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="VirtualBusinessChart" value="VirtualBusinessChart">
                          <span class="custom-control-label"> AICPE - Institution Business Chart </span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="VirtualBusinessChartView" value="VirtualBusinessChartView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="VirtualBusinessChart" value="VirtualBusinessChart">
                          <span class="custom-control-label"> AICPE Monthly Business Chart </span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="VirtualBusinessChartView" value="VirtualBusinessChartView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="VirtualBusinessChart" value="VirtualBusinessChart">
                          <span class="custom-control-label"> Virtual Business Chart </span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="VirtualBusinessChartView" value="VirtualBusinessChartView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card mb-2">
                        <div class="card-body">
                            <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="Institutions" value="Institutions">
                                <span class="custom-control-label"> Institutions</span>
                            </label></h4>  
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="InstitutionsList" value="InstitutionsList">
                                <span class="custom-control-label"> Institutions</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsListView" value="InstitutionsListView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsListAdd" value="InstitutionsListAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsListEdit" value="InstitutionsListEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsListDelete" value="InstitutionsListDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="InstitutionsRemarks" value="InstitutionsRemarks">
                                <span class="custom-control-label"> Institutions Remarks</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsRemarksView" value="InstitutionsRemarksView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsRemarksAdd" value="InstitutionsRemarksAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsRemarksEdit" value="InstitutionsRemarksEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsRemarksDelete" value="InstitutionsRemarksDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="InstitutionsStaff" value="InstitutionsStaff">
                                <span class="custom-control-label"> Institutions Staff</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsStaffView" value="InstitutionsStaffView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsStaffAdd" value="InstitutionsStaffAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsStaffEdit" value="InstitutionsStaffEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionsStaffDelete" value="InstitutionsStaffDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                        </div>
                      </div>

                      <!-- admissions -->

                      <div class="card mb-2">
                        <div class="card-body">
                            <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="Admissions" value="Admissions">
                                <span class="custom-control-label"> Admissions</span>
                            </label></h4>  
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AdmissionsList" value="AdmissionsList">
                                <span class="custom-control-label"> Admissions List</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdmissionsListView" value="AdmissionsListView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdmissionsListAdd" value="AdmissionsListAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdmissionsListEdit" value="AdmissionsListEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdmissionsListDelete" value="AdmissionsListDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AicpeAdmissions" value="AicpeAdmissions">
                                <span class="custom-control-label"> AICPE Admissions</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAdmissionsView" value="AicpeAdmissionsView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAdmissionsAdd" value="AicpeAdmissionsAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAdmissionsEdit" value="AicpeAdmissionsEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAdmissionsDelete" value="AicpeAdmissionsDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AssociatesAdmissions" value="AssociatesAdmissions">
                                <span class="custom-control-label"> Associates Admissions</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssociatesAdmissionsView" value="AssociatesAdmissionsView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssociatesAdmissionsAdd" value="AssociatesAdmissionsAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssociatesAdmissionsEdit" value="AssociatesAdmissionsEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssociatesAdmissionsDelete" value="AssociatesAdmissionsDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                            <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="DropoutStudents" value="DropoutStudents">
                              <span class="custom-control-label"> Dropout Students</span>
                              </label></h4>
                            <li class="custom-li">
                              <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="DropoutStudentsView" value="DropoutStudentsView">
                              <span class="custom-control-label">View</span>
                              </label>
                            </li>
                            <li class="custom-li">
                              <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="DropoutStudentsEdit" value="DropoutStudentsEdit">
                              <span class="custom-control-label">Edit</span>
                              </label>
                            </li>
                            <li class="custom-li">
                              <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="DropoutStudentsDelete" value="DropoutStudentsDelete">
                              <span class="custom-control-label">Delete</span>
                              </label>
                            </li>
                          </ul>
                          <ul class="privleges">
                            <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="OldStudents" value="OldStudents">
                              <span class="custom-control-label"> Old Students</span>
                              </label></h4>
                            <li class="custom-li">
                              <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="OldStudentsView" value="OldStudentsView">
                              <span class="custom-control-label">View</span>
                              </label>
                            </li>
                            <li class="custom-li">
                              <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="OldStudentsEdit" value="OldStudentsEdit">
                              <span class="custom-control-label">Edit</span>
                              </label>
                            </li>
                            <li class="custom-li">
                              <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="OldStudentsDelete" value="OldStudentsDelete">
                              <span class="custom-control-label">Delete</span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- --------- Associates  -->
                      <div class="card mb-2">
                          <div class="card-body">
                            <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                              <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="AicpeAssociates" value="AicpeAssociates">
                                <span class="custom-control-label"> AICPE Associates</span>
                            </label></h4>  
                            <ul class="privleges">
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociatesView" value="AicpeAssociatesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociatesAdd" value="AicpeAssociatesAdd">
                                <span class="custom-control-label">Add</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociatesEdit" value="AicpeAssociatesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociatesDelete" value="AicpeAssociatesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociatesBlock" value="AicpeAssociatesBlock">
                                <span class="custom-control-label">Block</span>
                                </label>
                              </li>
                            </ul> 
                          </div>
                        </div>
                        <!-- ---Enquiries------------------- -->
                        <div class="card mb-2">
                          <div class="card-body">
                            <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="Enquiries" value="Enquiries">
                                <span class="custom-control-label"> Enquiries</span>
                            </label></h4>  
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="StudentsEnquiries" value="StudentsEnquiries">
                                <span class="custom-control-label"> Students Enquiries </span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StudentsEnquiriesView" value="StudentsEnquiriesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StudentsEnquiriesEdit" value="StudentsEnquiriesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StudentsEnquiriesDelete" value="StudentsEnquiriesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="EmployerEnquiries" value="EmployerEnquiries">
                                <span class="custom-control-label"> Employer Enquiries</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerEnquiriesView" value="EmployerEnquiriesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerEnquiriesEdit" value="EmployerEnquiriesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerEnquiriesDelete" value="EmployerEnquiriesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="InstitutionEnquiries" value="InstitutionEnquiries">
                                <span class="custom-control-label"> Institution Enquiries</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionEnquiriesView" value="InstitutionEnquiriesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionEnquiriesEdit" value="InstitutionEnquiriesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionEnquiriesDelete" value="InstitutionEnquiriesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                            <ul class="privleges">
                              <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="QuickEnquiries" value="QuickEnquiries">
                                <span class="custom-control-label"> Quick Enquiries</span>
                                </label></h4>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="QuickEnquiriesView" value="QuickEnquiriesView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="QuickEnquiriesEdit" value="QuickEnquiriesEdit">
                                <span class="custom-control-label">Edit</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="InstitutionEnquiriesDelete" value="InstitutionEnquiriesDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- ---------------students Invention ---------------->
                        <div class="card mb-2">
                          <div class="card-body">
                            <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="StudentsInventions" value="StudentsInventions">
                                <span class="custom-control-label"> Students Inventions</span>
                            </label></h4>  
                            <ul class="privleges">
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StudentsInventionsView" value="StudentsInventionsView">
                                <span class="custom-control-label">View</span>
                                </label>
                              </li>
                              <li class="custom-li">
                                <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                                <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StudentsInventionsDelete" value="StudentsInventionsDelete">
                                <span class="custom-control-label">Delete</span>
                                </label>
                              </li>
                            </ul> 
                          </div>
                        </div>
                        <!-- ---------------------Marketing Material---------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="MarketingMaterial" value="MarketingMaterial">
                          <span class="custom-control-label"> Marketing Material</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MarketingMaterialView" value="MarketingMaterialView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MarketingMaterialAdd" value="MarketingMaterialAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MarketingMaterialEdit" value="MarketingMaterialEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MarketingMaterialDelete" value="MarketingMaterialDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- -----------------------------Gallery------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="Gallery" value="Gallery">
                          <span class="custom-control-label"> Gallery</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="GalleryView" value="GalleryView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="GalleryAdd" value="GalleryAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="GalleryEdit" value="GalleryEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="GalleryDelete" value="GalleryDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- --------------------------Birthdays ANd Anniversary----- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="BirthdayAndAnniversary" value="BirthdayAndAnniversary">
                          <span class="custom-control-label"> Birthday And Anniversary</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BirthdayAndAnniversaryView" value="BirthdayAndAnniversaryView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BirthdayAndAnniversaryAdd" value="BirthdayAndAnniversaryAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BirthdayAndAnniversaryEdit" value="BirthdayAndAnniversaryEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BirthdayAndAnniversaryDelete" value="BirthdayAndAnniversaryDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- -------------------SMS Management------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="SMSManagement" value="SMSManagement">
                          <span class="custom-control-label"> SMS Management</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SMSManagementView" value="SMSManagementView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SMSManagementAdd" value="SMSManagementAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SMSManagementEdit" value="SMSManagementEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SMSManagementDelete" value="SMSManagementDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SMSManagementSms" value="SMSManagementSms">
                          <span class="custom-control-label">Send SMS Or Email</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- -----------------------Recharge Report-------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="RechargeReport" value="RechargeReport">
                          <span class="custom-control-label"> Recharge Report</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="RechargeReportView" value="RechargeReportView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="RechargeReportDelete" value="RechargeReportDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- ----------------------Role Management-------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="RoleManagement" value="RoleManagement">
                          <span class="custom-control-label"> Role Management</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="RoleManagementView" value="RoleManagementView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="RoleManagementAdd" value="RoleManagementAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="RoleManagementEdit" value="RoleManagementEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="Courses" value="Courses">
                          <span class="custom-control-label"> Courses</span>
                      </label></h4>  
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="CoursesSubjects" value="CoursesSubjects">
                          <span class="custom-control-label"> Subjects</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesSubjectsView" value="CoursesSubjectsView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesSubjectsAdd" value="CoursesSubjectsAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesSubjectsEdit" value="CoursesSubjectsEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesSubjectsDelete" value="CoursesSubjectsDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="CoursesCourseTypes" value="CoursesCourseTypes">
                          <span class="custom-control-label"> Course Types</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesCourseTypesView" value="CoursesCourseTypesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesCourseTypesAdd" value="CoursesCourseTypesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesCourseTypesEdit" value="CoursesCourseTypesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CoursesCourseTypesDelete" value="CoursesCourseTypesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AicpeCourses" value="AicpeCourses">
                          <span class="custom-control-label"> AICPE Courses</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeCoursesView" value="AicpeCoursesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeCoursesAdd" value="AicpeCoursesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeCoursesEdit" value="AicpeCoursesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeCoursesDelete" value="AicpeCoursesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AicpeAssociateCourses" value="AicpeAssociateCourses">
                          <span class="custom-control-label"> AICPE Associate Courses</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociateCoursesView" value="AicpeAssociateCoursesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociateCoursesAdd" value="AicpeAssociateCoursesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociateCoursesEdit" value="AicpeAssociateCoursesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AicpeAssociateCoursesDelete" value="AicpeAssociateCoursesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="NonAicpeCourses" value="NonAicpeCourses">
                          <span class="custom-control-label"> Non - Aicpe Courses</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAicpeCoursesView" value="NonAicpeCoursesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAicpeCoursesAdd" value="NonAicpeCoursesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAicpeCoursesEdit" value="NonAicpeCoursesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAicpeCoursesDelete" value="NonAicpeCoursesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="NewCourse" value="NewCourse">
                          <span class="custom-control-label"> New Course Suggestation </span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NewCourseView" value="NewCourseView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NewCourseAdd" value="NewCourseAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NewCourseEdit" value="NewCourseEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NewCourseDelete" value="NewCourseDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="QuestionBank" value="QuestionBank">
                          <span class="custom-control-label"> Question Bank</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="QuestionBankView" value="QuestionBankView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="QuestionBankAdd" value="QuestionBankAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="QuestionBankEdit" value="QuestionBankEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="QuestionBankDelete" value="QuestionBankDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="CourseWiseAdmissions" value="CourseWiseAdmissions">
                          <span class="custom-control-label"> Course Wise Admissions</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseWiseAdmissionsView" value="CourseWiseAdmissionsView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseWiseAdmissionsAdd" value="CourseWiseAdmissionsAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseWiseAdmissionsEdit" value="CourseWiseAdmissionsEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseWiseAdmissionsDelete" value="CourseWiseAdmissionsDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- ------------------Free E-Books---------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="EBooks" value="EBooks">
                          <span class="custom-control-label"> Free E-Books</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EBooksView" value="EBooksView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EBooksEdit" value="EBooksEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EBooksDelete" value="EBooksDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EBooksBlock" value="EBooksBlock">
                          <span class="custom-control-label">Block</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- ------------Employer -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="Employer" value="Employer">
                          <span class="custom-control-label"> Employer</span>
                      </label></h4>  
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="EmployerList" value="EmployerList">
                          <span class="custom-control-label"> Employer List</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerListView" value="EmployerListView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerListAdd" value="EmployerListAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerListEdit" value="EmployerListEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerListDelete" value="EmployerListDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="EmployerJobPost" value="EmployerJobPost">
                          <span class="custom-control-label"> Employer Job Post</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerJobPostView" value="EmployerJobPostView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerJobPostAdd" value="EmployerJobPostAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerJobPostEdit" value="EmployerJobPostEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerJobPostDelete" value="EmployerJobPostDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- --------Staff Management ------------>
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="StaffManagement" value="StaffManagement">
                          <span class="custom-control-label"> Staff Management</span>
                      </label></h4>  
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AdministrativeStaff" value="AdministrativeStaff">
                          <span class="custom-control-label"> Administrative Staff </span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdministrativeStaffView" value="AdministrativeStaffView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdministrativeStaffAdd" value="AdministrativeStaffAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdministrativeStaffEdit" value="AdministrativeStaffEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AdministrativeStaffDelete" value="AdministrativeStaffDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="FieldStaff" value="FieldStaff">
                          <span class="custom-control-label"> Field Staff</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FieldStaffView" value="FieldStaffView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FieldStaffAdd" value="FieldStaffAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FieldStaffEdit" value="FieldStaffEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FieldStaffDelete" value="FieldStaffDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AgentAndOtherStaff" value="AgentAndOtherStaff">
                          <span class="custom-control-label">Agent And Other Staff</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AgentAndOtherStaffView" value="AgentAndOtherStaffView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AgentAndOtherStaffAdd" value="AgentAndOtherStaffAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AgentAndOtherStaffEdit" value="AgentAndOtherStaffEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AgentAndOtherStaffDelete" value="AgentAndOtherStaffDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="StaffTasks" value="StaffTasks">
                          <span class="custom-control-label"> Tasks</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffTasksView" value="StaffTasksView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffTasksAdd" value="StaffTasksAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffTasksEdit" value="StaffTasksEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffTasksDelete" value="StaffTasksDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- ------------Certificates--------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="Certificates" value="Certificates">
                          <span class="custom-control-label"> Certificates</span>
                      </label></h4>  
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AICPEVocationalCertificates" value="AICPEVocationalCertificates">
                          <span class="custom-control-label"> AICPE Vocational Certificates </span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEVocationalCertificatesView" value="AICPEVocationalCertificatesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEVocationalCertificatesAdd" value="AICPEVocationalCertificatesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEVocationalCertificatesDelete" value="AICPEVocationalCertificatesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEVocationalCertificatesPrint" value="AICPEVocationalCertificatesPrint">
                          <span class="custom-control-label">Print</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AICPETypingCertificates" value="AICPETypingCertificates">
                          <span class="custom-control-label"> AICPE Typing Certificates</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPETypingCertificatesView" value="AICPETypingCertificatesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPETypingCertificatesAdd" value="AICPETypingCertificatesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPETypingCertificatesDelete" value="AICPETypingCertificatesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPETypingCertificatesPrint" value="AICPETypingCertificatesPrint">
                          <span class="custom-control-label">Print</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="NonAICPECertificates" value="NonAICPECertificates">
                          <span class="custom-control-label">Non AICPE Certificates</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAICPECertificatesView" value="NonAICPECertificatesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAICPECertificatesAdd" value="NonAICPECertificatesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAICPECertificatesDelete" value="NonAICPECertificatesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="NonAICPECertificatesPrint" value="NonAICPECertificatesPrint">
                          <span class="custom-control-label">Print</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="Participation Certificates" value="Participation Certificates">
                          <span class="custom-control-label"> Tasks</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="Participation CertificatesView" value="Participation CertificatesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="Participation CertificatesAdd" value="Participation CertificatesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="Participation CertificatesDelete" value="Participation CertificatesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                                  </div> <!-- col-lg-3 --> 
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
 $(".masterdiv").click(function () 
    {
      
     $(this).parent().parent().siblings("ul").children().find("input:checkbox").prop("checked",  $(this).prop("checked"));
      if (this.checked == true)
      {

       $(this).parent().parent().parent().siblings("h4").find("input:checkbox").prop("checked",  true);  
      }
     else
      {
        var Count = $(this).parent().parent().siblings("li").children().find(":checkbox:checked").length;
           if(Count==0)
            {
               $(this).parent().parent().siblings("h4").find("input:checkbox").prop("checked", false);
            }
      }

    });

  $(".parentdiv").click(function () 
    {
      $(this).parent().parent().siblings("ul").children().find("input:checkbox").prop("checked",  $(this).prop("checked"));
       if (this.checked == true) 
       { 
                $(this).parent().parent().parent().siblings("h4").find("input:checkbox").prop("checked",  true);  
                $(this).parent().siblings("div").children().find("input:checkbox").prop("checked",  true);
       
       }
       else
       {
      
        var Count = $(this).parent().parent().siblings("li").children().find(":checkbox:checked").length;
              if(Count==0)
              {
                $(this).parent().parent().parent().siblings("h4").find("input:checkbox").prop("checked", false);
                $(this).parent().siblings("ul").find("input:checkbox").prop("checked",  false);
              }
       }

  });

 $(".mgr-tp").click(function() 
        {                      
            $(this).parent().parent().siblings("ul").children().children().find("input:checkbox").prop("checked",  $(this).prop("checked"));
            $(this).parent().siblings("ul").children().find("input:checkbox").prop("checked",  $(this).prop("checked"));
            $(this).parent().siblings("li").children().find("input:checkbox").prop("checked",  $(this).prop("checked"));  
            if (this.checked == true)
            {    
               $(this).parent().parent().parent().siblings("h4").find("input:checkbox").prop("checked",  true);  
               $(this).parent().parent().siblings("div").find("input:checkbox").prop("checked",  true);
               $(this).parent().parent().siblings("h4").find("input:checkbox").prop("checked",  true);

            }
            else
            {
                var Count = $(this).parent().parent().parent().siblings("ul").children().children().find(":checkbox:checked").length;
               var Countli = $(this).parent().parent().siblings("li").children().find(":checkbox:checked").length;
              
                if(Countli==0)
                {  
                   $(this).parent().parent().siblings("div").find("input:checkbox").prop("checked",  false);
                    if(Count ==0)
                        { 
                            $(this).parent().parent().parent().siblings("h4").find("input:checkbox").prop("checked",false);
                            $(this).parent().siblings("ul").children().find("input:checkbox").prop("checked",  false);
                            $(this).parent().parent().siblings("h4").find("input:checkbox").prop("checked",  false);
                        }
                }
            }
        
        });


 $(".mgr-tp1").click(function() 
         {    
          $(this).parent().parent().siblings("li").children().find("input:checkbox").prop("checked",  $(this).prop("checked"));
             
            if (this.checked == true)
            {    
               $(this).parent().parent().parent().siblings("h4").find("input:checkbox").prop("checked",  true);  
            }
            else
            {
             var Count = $(this).parent().parent().parent().siblings("ul").find(":checkbox:checked").length;
                if(Count==0)
                {  
                   $(this).parent().parent().parent().siblings("h4").find("input:checkbox").prop("checked",false);
                }
            }
        
        });
 </script>