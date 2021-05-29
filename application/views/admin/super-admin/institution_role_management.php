<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Institution Role Management </h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
          <form method="post" enctype="multipart/form-data" id="role_form">
            <div class="row">
               
                <div class="col-lg-3">
                    <div class="card mb-3">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Assign Role</h5>
                        </div>
                        <div class="card-body">
                           <div class="form-group">
                                <label>Select Institution</label>
                                <select class="form-control selcect2-single" id=
                                "inst_select" name="user_select" required>
                                <option>&nbsp;</option>
                                <?php if($institutions!=""){
                                  foreach ($institutions as $users) { ?>
                                  <option value="<?php echo $users->id; ?>"><?php echo $users->inst_name; ?></option>
                                  <?php } } ?>
                                </select>
                              </div>
                               
                        </div>
                    </div>
                    <div class="card d-flex flex-row mb-4" id="inst_response">
                      
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
                  <!-- -----------------------------Enquiries------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="Enquiries" value="Enquiries">
                          <span class="custom-control-label"> Enquiries</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EnquiriesView" value="EnquiriesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EnquiriesAdd" value="EnquiriesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EnquiriesEdit" value="EnquiriesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EnquiriesDelete" value="EnquiriesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- -----------------------------Payments------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="Payments" value="Payments">
                          <span class="custom-control-label"> Payments</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PaymentsView" value="PaymentsView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PaymentsAdd" value="PaymentsAdd">
                          <span class="custom-control-label">Pay Now</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PaymentsEdit" value="PaymentsEdit">
                          <span class="custom-control-label">Payment History</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PaymentsDelete" value="PaymentsDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                   <!-- -----------------------------Employer------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="Employer" value="Employer">
                          <span class="custom-control-label"> Employer</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerView" value="EmployerView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerAdd" value="EmployerAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerEdit" value="EmployerEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="EmployerDelete" value="EmployerDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- -----------------------------AICPE World Membership------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="AICPEWorldMembership" value="AICPEWorldMembership">
                          <span class="custom-control-label"> AICPE World Membership</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEWorldMembershipView" value="AICPEWorldMembershipView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEWorldMembershipAdd" value="AICPEWorldMembershipAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEWorldMembershipEdit" value="AICPEWorldMembershipEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AICPEWorldMembershipDelete" value="AICPEWorldMembershipDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- -----------------------------Assignments------------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                        <input type="checkbox" class="custom-control-input parentdiv" name="privleges[]" id ="Assignments" value="Assignments">
                          <span class="custom-control-label"> Assignments</span>
                      </label></h4>  
                      <ul class="privleges">
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssignmentsView" value="AssignmentsView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssignmentsAdd" value="AssignmentsAdd">
                          <span class="custom-control-label">Pay Now</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssignmentsEdit" value="AssignmentsEdit">
                          <span class="custom-control-label">Payment History</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AssignmentsDelete" value="AssignmentsDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                    </div>
                  </div>
                  <!-- --------------------Exam Manager--------- -->
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="ExamManager" value="ExamManager">
                          <span class="custom-control-label"> Exam Manager</span>
                      </label></h4>  
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="ExamStatus" value="ExamStatus">
                          <span class="custom-control-label"> Exam Status</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ExamStatusView" value="ExamStatusView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ExamStatusAdd" value="ExamStatusAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ExamStatusEdit" value="ExamStatusEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ExamStatusDelete" value="ExamStatusDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="HallTickets" value="HallTickets">
                          <span class="custom-control-label">Hall Tickets</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="HallTicketsView" value="HallTicketsView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="HallTicketsDelete" value="HallTicketsDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="SecretCode" value="SecretCode">
                          <span class="custom-control-label"> Secret Code</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SecretCodeView" value="SecretCodeView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SecretCodeDelete" value="SecretCodeDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="PaperBasedExams" value="PaperBasedExams">
                          <span class="custom-control-label"> Paper Based Exams</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PaperBasedExamsView" value="PaperBasedExamsView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="PaperBasedExamsAdd" value="PaperBasedExamsAdd">
                          <span class="custom-control-label">Add Result</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="OfflineExam" value="OfflineExam">
                          <span class="custom-control-label"> Offline Exam</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="OfflineExamView" value="OfflineExamView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="OfflineExamAdd" value="OfflineExamAdd">
                          <span class="custom-control-label">Add Result</span>
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
                   
                </div>
                <div class="col-lg-3">
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
                      <!-- -----------------------Library Management ----------- -->
                      <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="division_master"><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input masterdiv" name="privleges[]" id ="LibraryManagement" value="LibraryManagement">
                          <span class="custom-control-label"> Library Management</span>
                      </label></h4>  
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="BooksCategories" value="BooksCategories">
                          <span class="custom-control-label"> Books Categories</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksCategoriesView" value="BooksCategoriesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksCategoriesAdd" value="BooksCategoriesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksCategoriesEdit" value="BooksCategoriesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksCategoriesDelete" value="BooksCategoriesDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="Books" value="Books">
                          <span class="custom-control-label">Books</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksView" value="BooksView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksAdd" value="BooksAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksEdit" value="BooksEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksDelete" value="BooksDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="BooksIssued" value="BooksIssued">
                          <span class="custom-control-label"> Books Issued</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksIssuedView" value="BooksIssuedView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksIssuedAdd" value="BooksIssuedAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksIssuedEdit" value="BooksIssuedEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksIssuedDelete" value="BooksIssuedDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="BooksReturn" value="BooksReturn">
                          <span class="custom-control-label"> Books Return</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksReturnView" value="BooksReturnView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksReturnAdd" value="BooksReturnAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksReturnEdit" value="BooksReturnEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksReturnDelete" value="BooksReturnDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="BooksFine" value="BooksFine">
                          <span class="custom-control-label"> Books Fine</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksFineView" value="BooksFineView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksFineAdd" value="BooksFineAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksFineEdit" value="BooksFineEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="BooksFineDelete" value="BooksFineDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul>
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="FreeEBooks" value="FreeEBooks">
                          <span class="custom-control-label"> Free E-Books</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FreeEBooksView" value="FreeEBooksView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FreeEBooksAdd" value="FreeEBooksAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FreeEBooksEdit" value="FreeEBooksEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="FreeEBooksDelete" value="FreeEBooksDelete">
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
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="MarketingMaterialDelete" value="MarketingMaterialDelete">
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
                          <span class="custom-control-label">Buy</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="SMSManagementSms" value="SMSManagementSms">
                          <span class="custom-control-label">Send SMS </span>
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
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="AllCourses" value="AllCourses">
                          <span class="custom-control-label"> All Courses</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AllCoursesView" value="AllCoursesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AllCoursesEdit" value="AllCoursesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="AllCoursesDelete" value="AllCoursesDelete">
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
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="CourseMaterial" value="CourseMaterial">
                          <span class="custom-control-label"> Course Material</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseMaterialView" value="CourseMaterialView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseMaterialAdd" value="CourseMaterialAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseMaterialEdit" value="CourseMaterialEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="CourseMaterialDelete" value="CourseMaterialDelete">
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
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="StaffList" value="StaffList">
                          <span class="custom-control-label"> Staff List</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffListView" value="StaffListView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffListAdd" value="StaffListAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffListEdit" value="StaffListEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="StaffListDelete" value="StaffListDelete">
                          <span class="custom-control-label">Delete</span>
                          </label>
                        </li>
                      </ul> 
                      
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="Incentives" value="Incentives">
                          <span class="custom-control-label">Incentives</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="IncentivesView" value="IncentivesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="IncentivesAdd" value="IncentivesAdd">
                          <span class="custom-control-label">Add</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="IncentivesEdit" value="IncentivesEdit">
                          <span class="custom-control-label">Edit</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="IncentivesDelete" value="IncentivesDelete">
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
                          <span class="custom-control-label">  Certificates </span>
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
                          <span class="custom-control-label">Request Certificate</span>
                          </label>
                        </li>
                      </ul> 
                      <ul class="privleges">
                        <h4><label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp1 mstrdiv" name="privleges[]" id ="ParticipationCertificates" value="ParticipationCertificates">
                          <span class="custom-control-label"> Participation Certificates</span>
                          </label></h4>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ParticipationCertificatesView" value="ParticipationCertificatesView">
                          <span class="custom-control-label">View</span>
                          </label>
                        </li>
                        <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ParticipationCertificatesAdd" value="ParticipationCertificatesAdd">
                          <span class="custom-control-label">Add Certificate</span>
                          </label>
                        </li>
                       <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ParticipationCertificatesAddStud" value="ParticipationCertificatesAddStud">
                          <span class="custom-control-label">Add Students</span>
                          </label>
                        </li>
                         <li class="custom-li">
                          <label class="custom-control custom-checkbox mb-1 align-self-center pr-4">
                          <input type="checkbox" class="custom-control-input mgr-tp" name="privleges[]" id ="ParticipationCertificatesRequestCert" value="ParticipationCertificatesRequestCert">
                          <span class="custom-control-label">Request Certificate</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> <!-- col-lg-3 --> 

            </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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

 <script type="text/javascript">
  var base = $('#base_url').val();
    $('#inst_select').change(function(){
    var id= $('#inst_select').val();
    var str ="";
    $.ajax({
          url: base+'get-role-institute',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            if(response!=""){
                str ='<a class="d-flex" href="#"><img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg" class="img-thumbnail border-0 m-4 list-thumbnail align-self-center"></a><div class=" d-flex flex-grow-1 min-width-zero"><div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero"><div class="min-width-zero"><a href="#"><p class="list-item-heading mb-1 truncate">'+response.inst_name+'</p></a><p class="mb-2 text-muted text-small">'+response.address+'</p></div></div></div>';


              var priv_list = response.privileges;
              var privarray = priv_list.split(',');
              $('#inst_response').html(str);
               $('input:checkbox').removeAttr('checked');
            for(i=0;i<privarray.length ;i++){
                var idname=privarray[i];
                  $("#"+idname+"").prop("checked", true);
                }
            }
            
          } 
        });
  });
   $('#role_form').on('submit',function(){
     var formdata = new FormData(this);
     $.ajax({
              url: base+'add-role-institute',
              type:'post',
              data: formdata,
              processData: false,
              contentType: false,
              dataType: 'json',
              beforeSend: function()
              {
                $(".main-loader").show();
              },      
              complete:function()
              {
                $(".main-loader").hide();
              },
              success: function(response){
                  if(response==true){
                    toastr.success('Roles has been assigned to the institution successfully','Success',{timeOut:5000});
                      $('#role_form').each( function(){
                        this.reset();
                      });
                   
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
      });
   });
 </script>