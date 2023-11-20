<html>
  <head>
    <title>Department of Justice</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      body
      {
      margin:0;
      padding:0;
      background-color:#f1f1f1;
      }
      .box
      {
      width:1270px;
      padding:20px;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:5px;
      margin-top:100px;
      }
    </style>
  </head>
 <body>
    <div class="container box">
        <!-- <img src="TheJudicialLogo.png" placeholder="South African Judiciary Logo"/> -->
      <h1 align="center">Department of Justice</h1>
      <br />
      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a id="allresults" class="nav-link" href="#">All Candidates</a></li>
        <li role="presentation"><a id="addCandidate" class="nav-link" href="newcandidate.php">Add New Candidate</a></li>
        <li role="presentation"><a id="shortlist_Filter" class="nav-link" href="#">Shortlisted Candidates</a></li>
        <li role="presentation"><a id="shortlist_Filter" class="nav-link" href="export.csv.php">Download csv externally</a></li>
        <!-- <li role="presentation"><a id="download_csv" class="nav-link" href="#">Download csv internally</a></li> -->
      </ul> 
      <div align ="left">
        <!--<button type="button" id="shortlisted_results" class="btn btn-primary">Shortlisted</button>
        <button type="button" id="allresults" class="btn btn-primary">All Candidates</button> -->
      </div>
      <div align ="right">         <!-- It will show Modal for Create new Records !-->
        <button type="button" id="btnModal_filter" class="btn btn-info">Filter candidates</button>
      </div>
      <br /><!-- Data will load under this tag!-->
      <div id="result" class="table-responsive">   
      </div>
    </div>
 </body>
</html>

<!-- Filtering Modal -->
<div id="Modal_Filter" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Filter Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- check boxes go inside here -->    

            <div class="row"> <!-- Row ( Applied For Reg Mag ) -->
                <div class="col-4"> <!-- Applied For Reg Mag --->
                    <label class="form-check-label" for="chkbx_CandidateColumns">Show/Hide Table Columns:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbx_CandidateColumns" name="chkbx_CandidateColumns">
                </div>
            </div>

            <div class="row" id="Column_Section"> <!-- Reg Mag Section -->
                <div class="col-4">
                    <label class="form-check-label" for="chkbxExpSection">Experience Section:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbxExpSection" name="chkbxExpSection">
                        <div class="list-group" id="ExperienceSection">
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Experience1" value="Experience1">Exp 1</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Period1" value="Period1">Period 1</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Duration1" value="Duration1">Duration 1</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Experience2" value="Experience2">Exp 2</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Period2" value="Period2">Period 2</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Duration2" value="Duration2">Duration 2</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Experience3" value="Experience3">Experience 3</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Period3" value="Period3">Period 3</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Experience_Section[]" id="Duration3" value="Duration3">Duration 3</label>
                        </div>
                </div>
                <div class="col-4">
                    <label class="form-check-label" for="chkbxApplicationDetails">Application Details:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbxApplicationDetails" name="chkbxApplicationDetails">
                        <div class="list-group" id="chkbxApplicationDetails_Section">
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="GP_Province" value="Gauteng">Qualification/Year</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="KZN_Province" value="Kwa-Zulu Natal">Disabled </label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="WC_Province" value="Western Cape">Disablility Details</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="EC_Province" value="Eastern Cape">Application for transfer </label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="NW_Province" value="North West">Motivation for transfer </label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="FS_Province" value="Free State">Reason for transfer</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="LP_Province" value="Limpopo"> Remark</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="MP_Province" value="Mpumalanga"> Reason for DQ</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="NC_Province" value="Northern Cape"> Acting experience</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="NW_Province" value="North West">Managerial  Experience </label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="FS_Province" value="Free State">Applied For RC President</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="LP_Province" value="Limpopo"> Applied For Reg Mag</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="MP_Province" value="Mpumalanga"> Applied For Chief Mag</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="Application_Details[]" id="NC_Province" value="Northern Cape"> Applied For Snr Judicial Educator</label>
                        </div>
                </div>
                <div class="col-4">
                    <label class="form-check-label" for="chkbxLocation">Provinces Candidate applied:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbxLocation" name="chkbxLocation">
                        <div class="list-group" id="ProvinceSection">
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="GP_Province" value="Gauteng">Gauteng</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="KZN_Province" value="Kwa-Zulu Natal">Kwa-Zulu Natal</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="WC_Province" value="Western Cape">Western Cape</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="EC_Province" value="Eastern Cape">Eastern Cape</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="NW_Province" value="North West">North West</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="FS_Province" value="Free State">Free State</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="LP_Province" value="Limpopo">Limpopo</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="MP_Province" value="Mpumalanga">Mpumalanga</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" name="All_Provinces[]" id="NC_Province" value="Northern Cape">Northern Cape</label>
                            <br>
                            <label for="input_specific_city" class="form-label">All Candidates within a Specific City:</label> <!-- Name of the city candidate is applying for as RCP  --->
                            <input type="text" class="form-control" name="input_specific_city" id="input_specific_city">
                        </div>
                        
                </div>
            </div>  

        <div class="col-md-6"> <!-- is Shortlisted -->
            <label for="input_shortlistFilter" class="form-label hide">Shortlisted?</label><br>
            <select name="input_shortlistFilter" id="input_shortlistFilter" class="form-select hide" placeholder="Is candidate shortlisted?">
            <option selected value="No">No</option>  
            <option value="Yes">Yes</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnFilterOptions">Save changes</button>
        <button type="button" id="closeFilter" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- This is Customer Modal. It will be use for Create new Records and Update Existing Records!-->
<div id="customerModal" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create New Records</h4>
      </div>
      <div class="modal-body">
          <div class="row"> <!-- Row ( Title | Full Names | Surname )-->
            <div class="col-md-2"> <!--Title-->
              <label for="inputTitle" class="form-label">Title:</label>
              <select name="inputTitle" id="inputTitle" class="form-select" placeholder="">
              <option selected>Select a Title...</option>  
              <option value="Ms">Ms</option>
              <option value="Mr">Mr</option>
              </select>
            </div>
            <div class="col-md-4"> <!-- Full Names: -->
              <label for="inputFullNames" class="form-label">Full Names:</label>
              <input type="text" class="form-control" name="inputFullNames" id="inputFullNames" placeholder="">
            </div>
            <div class="col-md-6"> <!-- Surname -->
              <label for="inputSurname" class="form-label">Surname:</label>
              <input type="text" class="form-control" name="inputSurname" id="inputSurname" placeholder="">
            </div>
          </div>

          <div class="row"> <!-- Second Row (Age | Gender | ID | Race)-->
            <div class="col-md-3"> <!-- Age -->
                <label for="inputAge" class="form-label">Age:</label>
                <input type="text" class="form-control" name="inputAge" id="inputAge">
            </div>
            <div class="col-md-3"> <!-- Race -->
                <label for="inputRace" class="form-label">Race:</label><br>
                <select name="inputRace" id="inputRace" class="form-select">
                <option selected>Choose a Race...</option>  
                <option value="African">African</option>
                    <option value="Colored">Colored</option>
                    <option value="White">White</option>
                    <option value="Indian">Indian</option>
                </select>
            </div>
            <div class="col-md-3"> <!-- Identity Number -->
                <label for="inputId" class="form-label">Identity Number:</label>
                <input type="text" class="form-control" name="inputId" id="inputId">
            </div>
            <div class="col-md-3"> <!-- Gender -->
                <label for="inputGender" class="form-label">Gender:</label><br>
                <select name="inputGender" id="inputGender" class="form-select">
                <option selected>Select a Gender...</option>  
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Other">Other</option>
                </select>
            </div>
          </div>
        
          <div class="row"> <!-- Third Row (Current Rank | Current HQ)-->
              <div class="col-md-6"> <!-- Current Rank/Occupation -->
                  <label for="inputCurrentRank" class="form-label">Current Rank/Occupation:</label><br>
                  <select name="inputCurrentRank" id="inputCurrentRank" class="form-select">
                      <option selected>Current Occupation...</option>  
                      <option value="Additional Magistrate">Additional Magistrate</option>
                      <option value="Clerk">Clerk</option>
                      <option value="Prosecutor">Prosecutor</option>
                      <option value="Senior Prosecutor">Senior Prosecutor</option>
                      <option value="Magistrate">Magistrate</option>
                      <option value="Senior Magistrate">Senior Magistrate</option>
                      <option value="Chief Magistrate">Chief Magistrate</option>
                      <option value="Regional Magistrate">Regional Magistrate</option>
                      <option value="Articled Clerk">Articled Clerk</option>
                      <option value="Candidate Attorney">Candidate Attorney</option>
                      <option value="Professional Assistant">Professional Assistant</option>
                      <option value="Attorney">Attorney</option>
                      <option value="Advocate">Advocate </option>
                      <option value="State Advocate">State Advocate</option>
                  </select>
              </div>
              <div class="col-md-6"> <!-- Current Headquarters -->
                  <label for="inputCurrentHQ" class="form-label">Current Headquarters:</label>
                  <input type="text" class="form-control" name="inputCurrentHQ" id="inputCurrentHQ">
              </div>
          </div>

          <div class="row">  <!-- Fourth Row  (Landline | Cell | Fax | email)-->
              <div class="col-md-3"> <!-- Landline Number -->
                  <label for="inputLandline" class="form-label">Landline Number:</label>
                  <input type="text" class="form-control" name="inputLandline" id="inputLandline">
              </div>
              <div class="col-md-3"> <!-- Cell Number -->
                  <label for="inputCell" class="form-label">Cell Number:</label>
                  <input type="text" class="form-control" name="inputCell" id="inputCell" >
              </div>
              <div class="col-md-3"> <!-- Fax Number -->
                  <label for="inputFax" class="form-label">Fax Number:</label>
                  <input type="text" class="form-control" name="inputFax" id="inputFax" >
              </div>
              <div class="col-md-3"> <!-- Email Address -->
                  <label for="inputemail" class="form-label">Email Address:</label>
                  <input type="text" class="form-control" name="inputemail" id="inputemail" placeholder="example@gmail.com">
              </div>
          </div>

          <h6>Experience</h6>

          <div class="row"> <!-- Fifth Row (Experience 1) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 1-->
                <label for="inputExperience1" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience1" id="inputExperience1">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod1" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod1" id="inputPeriod1">
            </div>
            <div class="col-md-4">
                <label for="inputDuration1" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration1" id="inputDuration1">
            </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 2) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 2-->
                <label for="inputExperience2" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience2" id="inputExperience2">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod2" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod2" id="inputPeriod2">
            </div>
            <div class="col-md-4">
                <label for="inputDuration2" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration2" id="inputDuration2">
            </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 3) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 3-->
                <label for="inputExperience3" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience3" id="inputExperience3">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod3" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod3" id="inputPeriod3">
            </div>
            <div class="col-md-4">
                <label for="inputDuration3" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration3" id="inputDuration3">
            </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 4) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 4-->
                <label for="inputExperience2" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience4" id="inputExperience4">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod2" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod4" id="inputPeriod4">
            </div>
            <div class="col-md-4">
                <label for="inputDuration4" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration4" id="inputDuration4">
            </div> 
            <div class="col-md-4"> <!-- EXPERIENCE SECION 5-->
                <label for="inputExperience5" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience5" id="inputExperience5">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod5" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod5" id="inputPeriod5">
            </div>
            <div class="col-md-4">
                <label for="inputDuration5" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration5" id="inputDuration5">
            </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 6) Try find PHP to duplicate this-->
              <div class="col-md-4"> <!-- EXPERIENCE SECION 6-->
                  <label for="inputExperience6" class="form-label">Experience:</label>
                  <input type="text" class="form-control" name="inputExperience6" id="inputExperience6">
              </div>
              <div class="col-md-4">
                  <label for="inputPeriod6" class="form-label">Period:</label>
                  <input type="text" class="form-control" name="inputPeriod6" id="inputPeriod6">
              </div>
              <div class="col-md-4">
                  <label for="inputDuration6" class="form-label">Duration:</label>
                  <input type="text" class="form-control" name="inputDuration6" id="inputDuration6">
              </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 7) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 7-->
                <label for="inputExperience7" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience7" id="inputExperience7">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod7" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod7" id="inputPeriod7">
            </div>
            <div class="col-md-4">
                <label for="inputDuration7" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration7" id="inputDuration7">
            </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 8) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 8-->
                <label for="inputExperience8" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience8" id="inputExperience8">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod8" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod8" id="inputPeriod8">
            </div>
            <div class="col-md-4">
                <label for="inputDuration8" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration8" id="inputDuration8">
            </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 9) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 9-->
                <label for="inputExperience9" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience9" id="inputExperience9">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod9" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod9" id="inputPeriod9">
            </div>
            <div class="col-md-4">
                <label for="inputDuration9" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration9" id="inputDuration9">
            </div> 
          </div>

          <div class="row"> <!-- Fifth Row (Experience 10) Try find PHP to duplicate this-->
            <div class="col-md-4"> <!-- EXPERIENCE SECION 10-->
                <label for="inputExperience10" class="form-label">Experience:</label>
                <input type="text" class="form-control" name="inputExperience10" id="inputExperience10">
            </div>
            <div class="col-md-4">
                <label for="inputPeriod10" class="form-label">Period:</label>
                <input type="text" class="form-control" name="inputPeriod10" id="inputPeriod10">
            </div>
            <div class="col-md-4">
                <label for="inputDuration10" class="form-label">Duration:</label>
                <input type="text" class="form-control" name="inputDuration10" id="inputDuration10">
            </div> 
          </div>

          <div class="row"> <!-- Row ( Grand Total | Experience button )-->
              <div class="col-md-8">
                  <!-- <button type="button" id="btnaddExpRow" class="btn btn-danger btn-xs btnaddExpRow">Add Experience Row</button> -->
              </div> 
              <div class="col-md-4">
                  <label for="inputGrandTotal" class="form-label">Grand Total:</label>
                  <input type="text" class="form-control" name="inputGrandTotal" id="inputGrandTotal">
              </div> 
          </div>

          <div class="row"> <!-- Sixth Row ( Qualification/Year | Disabled | Disabilities Details )-->
            <div class="col-md-2"> <!-- Qualification/Year -->
                <label for="inputQualification_Year" class="form-label">Qualification/Year:</label><br>
                <select name="inputQualification_Year" id="inputQualification_Year" class="form-select">
                  <option selected>Qualification/Year</option>  
                  <option value="Dip Luris">Dip Luris</option>  
                  <option value="B Luris">B Luris</option>              
                  <option value="B Proc">B Proc</option>       
                  <option value="Dip Legum">Dip Legum</option>
                  <option value="LLB">LLB</option>
                  <option value="LLM">LLM</option>
                </select>
            </div>
            <div class="col-md-2"> <!-- Disabled -->
                <label class="form-check-label" for="chkbxIsDisabled">Disabled:</label> </br>
                <input class="form-check-input" type="checkbox" value="Not Disabled" id="chkbxIsDisabled" name="chkbxIsDisabled">
            </div>
            <div class="col-md-8 hide" id="DisabilitiesDetailsSection"> <!-- Disabilities Details -->
                <label for="inputDisabilitiesDetails" class="form-label">Disabilities Details:</label>
                <input type="textarea" class="form-control" value="No Disabilities"name="inputDisabilitiesDetails" id="inputDisabilitiesDetails">
            </div>
          </div>
        
          <div class="row"> <!-- Seventh Row ( Application For Transfer | Motivation For Transfer Attached | Reason For Transfer )-->
              <div class="col-4"> <!-- Application For Transfer -->
                  <label class="form-check-label" for="chkbxApplicationForTransfer">Application For Transfer:</label>
                  <input class="form-check-input" type="checkbox" value="Not Applying for Transfer" id="chkbxApplicationForTransfer" name="chkbxApplicationForTransfer">
              </div>
              <div class="col-4 TransferGroup" > <!-- Transfer Attached -->
                  <label class="form-check-label" for="chkbxMotivationTransfer">Motivation For Transfer Attached:</label>
                  <input class="form-check-input" type="checkbox" value="Motivation is Not Attached" id="chkbxMotivationTransfer" name="chkbxMotivationTransfer">
              </div>
              <div class="col-4 TransferGroup" id=""> <!-- Reason For Transfer -->
                  <label for="inputTransferReason" class="form-label">Reason For Transfer:</label>
                  <input type="text" class="form-control" value="No Transfer" name="inputTransferReason" id="inputTransferReason">
              </div>
          </div>

          <div class="row"> <!-- 8 Row ( Remark | DQ Reason )-->
              <div class="col-md-6"> <!-- Remarks -->
                  <label for="inputRemarks" class="form-label">Remarks:</label>
                  <input type="text" class="form-control" value="No Remarks" name="inputRemarks"id="inputRemarks">
              </div>
              <div class="col-md-6"> <!-- Reason For Disqualification -->
                  <label for="inputDQReason" class="form-label">Reason For Disqualification:</label>
                  <input type="text" class="form-control" value="Not Disqualified" name="inputDQReason" id="inputDQReason" ">
              </div>
          </div>

          <div class="row"> <!-- 9 Row ( Acting Experience | Managerial Experience ) -->
              <div class="col-md-6"> <!-- Acting Experience -->
                  <label class="form-check-label" for="chkbxActingExperience">Acting Experience:</label>
                  <input class="form-check-input" type="checkbox" value="" id="chkbxActingExperience" name="chkbxActingExperience">
              </div>
              <div class="col-md-6"> <!-- Managerial Experience -->
                  <label class="form-check-label" for="chkbxManagerialExperience">Managerial Experience:</label>
                  <input class="form-check-input" type="checkbox" value="" id="chkbxManagerialExperience" name="chkbxManagerialExperience">
              </div>
          </div>

            <div class="row"> <!-- 10 Row ( Applied For RC President ) -->
                <div class="col-md-6"> <!-- Applied For RC President -->
                    <label class="form-check-label" for="chkbxRCP">Applied For RC President:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbxRCP" name="chkbxRCP" <?php /* if(!empty($_POST['applied_for_rcp'])) { ?> checked="checked" <?php } */ ?>>
                </div>
            </div>

            <div class="row" id="RCP_Section"> <!-- RCP_Section -->
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbx_RCP_Gauteng">Gauteng:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbx_RCP_Gauteng" name="chkbxReg_Mag_Gauteng">
                        <div class="list-group" id="RCP_Gauteng_Cities">
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Johannesburg">Johannesburg</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Pretoria">Pretoria</label>
                        </div> -->
                    <br>
                    <label for="input_rcp_gp_cities" class="form-label">Name of cities in Gauteng:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_gp_cities" id="input_rcp_gp_cities">
                    <label for="input_rcp_ec_cities" class="form-label">Name of cities in Eastern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_ec_cities" id="input_rcp_ec_cities">
                    <label for="input_rcp_mp_cities" class="form-label">Name of cities in Mpumalanga:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_mp_cities" id="input_rcp_mp_cities">
                </div>
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbx_RCP_WP">Western Cape:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbx_RCP_WP" name="chkbx_RCP_WP">
                            <div class="list-group" id="RCP_WP_Cities">
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Cape Town">Cape Town</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="George">George</label>
                        </div> -->
                    <br>
                    <label for="input_rcp_wp_cities" class="form-label">Name of cities in Western Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_wp_cities" id="input_rcp_wp_cities">
                    <label for="input_rcp_fs_cities" class="form-label">Name of cities in Free State:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_fs_cities" id="input_rcp_fs_cities">
                    <label for="input_rcp_lp_cities" class="form-label">Name of cities in Limpopo:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_lp_cities" id="input_rcp_lp_cities">
                </div>
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbx_RCP_KZN">KwaZulu Natal:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbx_RCP_KZN" name="chkbx_RCP_KZN">
                        <div class="list-group" id="RCP_KZN_Cities">
                        <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Durban">Durban</label>
                        <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="Pietermaritzburg">Pietermaritzburg</label>
                        </div> -->
                    <br>
                    <label for="input_rcp_kzn_cities" class="form-label">Name of cities in Kwa Zulu-Natal:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_kzn_cities" id="input_rcp_kzn_cities">
                    <label for="input_rcp_nw_cities" class="form-label">Name of cities in North West:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_nw_cities" id="input_rcp_nw_cities">
                    <label for="input_rcp_np_cities" class="form-label">Name of cities in Northern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rcp_np_cities" id="input_rcp_np_cities">
                </div>
            </div>
    
            <div class="row"> <!-- Row ( Applied For Reg Mag ) -->
                <div class="col-md-12"> <!-- Applied For Reg Mag -->
                    <label class="form-check-label" for="chkbx_Reg_Mag">Applied For Reg Mag:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbx_Reg_Mag" name="chkbx_Reg_Mag">
                </div>
            </div>

            <div class="row" id="Reg_Mag_Section"> <!-- Reg Mag Section -->
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxReg_Mag_Gauteng">Gauteng:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxReg_Mag_Gauteng" name="chkbxReg_Mag_Gauteng">
                        <div class="list-group" id="Reg_Mag_Gauteng_Cities">
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Johannesburg">Johannesburg</label>
                            <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Pretoria">Pretoria</label>
                        </div> -->
                    <br>
                    <label for="input_rm_gp_cities" class="form-label">Name of cities in Gauteng:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rm_gp_cities" id="input_rm_gp_cities">
                    <label for="input_rm_ec_cities" class="form-label">Name of cities in Eastern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rm_ec_cities" id="input_rm_ec_cities">
                    <label for="input_rm_mp_cities" class="form-label">Name of cities in Mpumalanga:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rm_mp_cities" id="input_rm_mp_cities">
                </div>
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxReg_Mag_WP">Western Cape:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxReg_Mag_WP" name="chkbxReg_Mag_WP">
                        <div class="list-group" id="Reg_Mag_WP_Cities">
                                <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Cape Town">Cape Town</label>
                                <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="George">George</label>
                        </div> -->
                
                    <br>
                    <label for="input_rm_wc_cities" class="form-label">Name of cities in Western Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rm_wc_cities" id="input_rm_wc_cities">
                    <label for="input_rm_fs_cities" class="form-label">Name of cities in Free State:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rm_fs_cities" id="input_rm_fs_cities">
                    <label for="input_rm_lp_cities" class="form-label">Name of cities in Limpopo:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_rm_lp_cities" id="input_rm_lp_cities">
                </div>
                <div class="col-4">
                        <!-- <label class="form-check-label" for="chkbxReg_Mag_KZN">KwaZulu Natal:</label>
                            <input class="form-check-input" type="checkbox" value="" id="chkbxReg_Mag_KZN" name="chkbxReg_Mag_KZN">
                            <div class="list-group" id="Reg_Mag_KZN_Cities">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Durban">Durban</label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Pietermaritzburg">Pietermaritzburg</label>
                            </div> -->
                        <br>
                        <label for="input_rm_kzn_cities" class="form-label">Name of cities in Kwa Zulu-Natal:</label> <!-- Name of the city candidate is applying for as RCP  -->
                        <input type="text" class="form-control" name="input_rm_kzn_cities" id="input_rm_kzn_cities">
                        <label for="input_rm_nw_cities" class="form-label">Name of cities in North West:</label> <!-- Name of the city candidate is applying for as RCP  -->
                        <input type="text" class="form-control" name="input_rm_nw_cities" id="input_rm_nw_cities">
                        <label for="input_rm_np_cities" class="form-label">Name of cities in Northern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                        <input type="text" class="form-control" name="input_rm_np_cities" id="input_rm_np_cities">
                </div>
            </div>

            <div class="row"> <!-- Row ( Applied For Chief Mag )-->
                <div class="col-md-6"> <!-- Applied For Chief Mag -->
                    <label class="form-check-label" for="chkbx_Chief_Mag">Applied For Chief Mag:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbx_Chief_Mag" name="chkbx_Chief_Mag">
                </div>
            </div>

            <div  class="row" id="Snr_Chief_Mag_Section"> <!-- Senior Chief Magistrate -->
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxChief_Mag_Gauteng">Gauteng:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxChief_Mag_Gauteng" name="chkbxChief_Mag_Gauteng">
                        <div class="list-group" id="Chief_Mag_Gauteng_Cities">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Johannesburg">Johannesburg</label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Pretoria">Pretoria</label>
                        </div> -->
                    <label for="input_cm_gp_cities" class="form-label">Name of cities in Gauteng:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_gp_cities" id="input_cm_gp_cities">
                    <label for="input_cm_ec_cities" class="form-label">Name of cities in Eastern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_ec_cities" id="input_cm_ec_cities">
                    <label for="input_cm_mp_cities" class="form-label">Name of cities in Mpumalanga:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_mp_cities" id="input_cm_mp_cities">
                </div>
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxChief_Mag_WP">Western Cape:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxChief_Mag_WP" name="chkbxChief_Mag_WP">
                        <div class="list-group" id="Chief_Mag_WP_Cities">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Cape Town">Cape Town</label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="George">George</label>
                        </div> -->
                    <label for="input_cm_wc_cities" class="form-label">Name of cities in Western Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_wc_cities" id="input_cm_wc_cities">
                    <label for="input_cm_fs_cities" class="form-label">Name of cities in Free State:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_fs_cities" id="input_cm_fs_cities">
                    <label for="input_cm_lp_cities" class="form-label">Name of cities in Limpopo:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_lp_cities" id="input_cm_lp_cities">
                </div>
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxChief_Mag_KZN">KwaZulu Natal:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxChief_Mag_KZN" name="chkbxChief_Mag_KZN">
                        <div class="list-group" id="Chief_Mag_KZN_Cities">
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Durban">Durban</label>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Pietermaritzburg">Pietermaritzburg</label>
                        </div> -->
                    <label for="input_cm_kzn_cities" class="form-label">Name of cities in Kwa Zulu-Natal:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_kzn_cities" id="input_cm_kzn_cities">
                    <label for="input_cm_nw_cities" class="form-label">Name of cities in North West:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_nw_cities" id="input_cm_nw_cities">
                    <label for="input_cm_np_cities" class="form-label">Name of cities in Northern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_cm_np_cities" id="input_cm_np_cities">  
                </div>
            </div>

            <div class="row"> <!-- Row ( Applied For Snr Judicial Educator )-->
                <div class="col-md-12"> <!-- Applied For Snr Judicial Educator -->
                    <label class="form-check-label" for="chkbxSnr_JE">Applied For Snr Judicial Educator:</label>
                    <input class="form-check-input" type="checkbox" value="" id="chkbxSnr_JE" name="chkbxSnr_JE">
                </div>
            </div>

            <div  class="row" id="Snr_JE_Section"> <!-- Snr Judicial Educator -->
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxSnr_JE_Gauteng">Gauteng:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxSnr_JE_Gauteng" name="chkbxSnr_JE_Gauteng">
                        <div class="list-group" id="Snr_JE_Gauteng_Cities">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Johannesburg">Johannesburg</label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Pretoria">Pretoria</label>
                        </div> -->
                    <label for="input_snr_je_gp_cities" class="form-label">Name of cities in Gauteng:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_gp_cities" id="input_snr_je_gp_cities">
                    <label for="input_snr_je_ec_cities" class="form-label">Name of cities in Eastern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_ec_cities" id="input_snr_je_ec_cities">
                    <label for="input_snr_je_mp_cities" class="form-label">Name of cities in Mpumalanga:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_mp_cities" id="input_snr_je_mp_cities">
                </div>
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxSnr_JE_WP">Western Cape:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxSnr_JE_WP" name="chkbxSnr_JE_WP">
                        <div class="list-group" id="Snr_JE_WP_Cities">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="Cape Town">Cape Town</label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="George">George</label>
                        </div> -->
                    <label for="input_snr_je_wc_cities" class="form-label">Name of cities in Western Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_wc_cities" id="input_snr_je_wc_cities">
                    <label for="input_snr_je_fs_cities" class="form-label">Name of cities in Free State:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_fs_cities" id="input_snr_je_fs_cities">
                    <label for="input_snr_je_lp_cities" class="form-label">Name of cities in Limpopo:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_lp_cities" id="input_snr_je_lp_cities">
                </div>
                <div class="col-4">
                    <!-- <label class="form-check-label" for="chkbxSnr_JE_KZN">KwaZulu Natal:</label>
                        <input class="form-check-input" type="checkbox" value="" id="chkbxSnr_JE_KZN" name="chkbxSnr_JE_KZN">
                        <div class="list-group" id="Snr_JE_KZN_Cities">
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Durban">Durban</label>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="Pietermaritzburg">Pietermaritzburg</label>
                        </div> -->
                    <label for="input_snr_je_kzn_cities" class="form-label">Name of cities in Kwa Zulu-Natal:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_kzn_cities" id="input_snr_je_kzn_cities">
                    <label for="input_snr_je_nw_cities" class="form-label">Name of cities in North West:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_nw_cities" id="input_snr_je_nw_cities">
                    <label for="input_snr_je_np_cities" class="form-label">Name of cities in Northern Cape:</label> <!-- Name of the city candidate is applying for as RCP  -->
                    <input type="text" class="form-control" name="input_snr_je_np_cities" id="input_snr_je_np_cities">
                </div>
            </div>

            <div class="row"> <!-- Row ( is Shortlisted | candidate_id | Submit/action | Clear )-->
                <div class="col-md-6"> <!-- is Shortlisted -->
                    <label for="inputIs_shortlisted" class="form-label hide">Shortlisted?</label><br>
                    <select name="inputIs_shortlisted" id="inputIs_shortlisted" class="form-select hide" placeholder="Is candidate shortlisted?">
                    <option selected value="No">No</option>  
                    <option value="Yes">Yes</option>
                    </select>
                </div>
                
                <div class="col-md-2"> <!-- Clear all textboxes -->
                    <button type="button" class="btn btn-default" id="btnClearAll">Clear</button>
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="candidate_Id" id="candidate_Id" />
        <input type="submit" name="action" id="action" class="btn btn-success" />
        <button type="button" id="closeCandidate" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
        //Column tables
        $("#Column_Section").hide();
        $("#ExperienceSection").hide();
        $("#chkbxApplicationDetails_Section").hide();
        $("#ProvinceSection").hide();
        
        /* Show/Hide Table Column Selections*/
        $('#chkbx_CandidateColumns').click(function(){
            $("#Column_Section").toggle(this.checked);
        });

        /* Show/Hide Experience Section */
        $('#chkbxExpSection').click(function() {
            $("#ExperienceSection").toggle(this.checked);
        });

        /* Show/Hide Application Section */
        $('#chkbxApplicationDetails').click(function() {
            $("#chkbxApplicationDetails_Section").toggle(this.checked);
        });

        /* Show/Hide Provinces */
        $('#chkbxLocation').click(function() {
            $("#ProvinceSection").toggle(this.checked);
        });

        

        //Default Settings for the form
        //Transfer Settings
        
            $(".TransferGroup").hide();
            
        //Disability Settings
            $("#DisabilitiesDetailsSection").hide();
            
            $("#chkbxApplicationForTransfer").val('Not Applying for Transfer');
            
            $("#chkbxMotivationTransfer").val('Motivation is Not Attached');     

            $("#chkbxManagerialExperience").val('No Managerial Experience');
            $("#chkbxActingExperience").val('No Acting Experienced');

        //Applying For RCP
            $("#chkbxRCP").val('Not Applying for Regional Court President');
            $("#RCP_GP_JHB").val('Not Applying for Regional Court President in Johannesburg');
            $("#RCP_GP_PTA").val('Not Applying for Regional Court President in Pretoria');
            $("#RCP_WP_CT").val('Not Applying for Regional Court President in Cape Town');
            $("#RCP_WP_George").val('Not Applying for Regional Court President in George');
            $("#RCP_KZN_DBN").val('Not Applying for Regional Court President in Durban');
            $("#RCP_KZN_PMB").val('Not Applying for Regional Court President in Pietermaritzburg');

            $("#RCP_Section").hide();
            $("#RCP_Gauteng_Cities").hide();
            $("#RCP_WP_Cities").hide();
            $("#RCP_KZN_Cities").hide();

        //Applying For Chief Magistrate
            $("#chkbx_Chief_Mag").val('Not Applying for Chief Magistrate');
            $("#Chief_Mag_GP_JHB").val('Not Applying for Chief Magistrate in Johannesburg');
            $("#Chief_Mag_GP_PTA").val('Not Applying for Chief Magistrate in Pretoria');
            $("#Chief_Mag_WP_CT").val('Not Applying for Chief Magistrate in Cape Town');
            $("#Chief_Mag_WP_George").val('Not Applying for Chief Magistrate in George');
            $("#Chief_Mag_KZN_DBN").val('Not Applying for Chief Magistrate in Durban');
            $("#Chief_Mag_KZN_PMB").val('Not Applying for Chief Magistrate in Pietermaritzburg');

            $("#Snr_Chief_Mag_Section").hide();
            $("#Chief_Mag_Gauteng_Cities").hide();
            $("#Chief_Mag_WP_Cities").hide();
            $("#Chief_Mag_KZN_Cities").hide();

        //Applying For Senior Judicial Educator
            $("#chkbxSnr_JE").val('Not Applying for Senior Judicial Educator');
            $("#SnrJE_GP_JHB").val('Not Applying for Senior Judicial Educator in Johannesburg');
            $("#SnrJE_GP_PTA").val('Not Applying for Senior Judicial Educator in Pretoria');
            $("#SnrJE_WP_CT").val('Not Applying for Senior Judicial Educator in Cape Town');
            $("#SnrJE_WP_George").val('Not Applying for Senior Judicial Educator in George');
            $("#SnrJE_KZN_DBN").val('Not Applying for Senior Judicial Educator in Durban');
            $("#SnrJE_KZN_PMB").val('Not Applying for Senior Judicial Educator in Pietermaritzburg');

            $("#Snr_JE_Section").hide();
            $("#Snr_JE_Gauteng_Cities").hide();
            $("#Snr_JE_WP_Cities").hide();
            $("#Snr_JE_KZN_Cities").hide();

        //Applying For Regional Magistrate
            $("#chkbx_Reg_Mag").val('Not Applying for Regional Magistrate');
            $("#Reg_Mag_GP_JHB").val('Not Applying for Regional Magistrate in Johannesburg');
            $("#Reg_Mag_GP_PTA").val('Not Applying for Regional Magistrate in Pretoria');
            $("#Reg_Mag_WP_CT").val('Not Applying for Regional Magistrate in Cape Town');
            $("#Reg_Mag_WP_George").val('Not Applying for Regional Magistrate in George');
            $("#Reg_Mag_KZN_DBN").val('Not Applying for Regional Magistrate in Durban');
            $("#Reg_Mag_KZN_PMB").val('Not Applying for Regional Magistrate in Pietermaritzburg');

            $("#Reg_Mag_Section").hide();
            $("#Reg_Mag_Gauteng_Cities").hide();
            $("#Reg_Mag_WP_Cities").hide();
            $("#Reg_Mag_KZN_Cities").hide();

        //Candidate should not be shortlisted by default
            $("#inputIs_shortlisted").val('No');
            $("#input_shortlistFilter").val('No');
            
        //Is candidate disabled? Enables and disables
            $('#chkbxIsDisabled').click(function() {
            if ($(this).is(':checked')){
                $("#chkbxIsDisabled").val('Disabled');
                $("#DisabilitiesDetailsSection").show();
            }
            else{
                $("#chkbxIsDisabled").val('Not Disabled');
                $("#DisabilitiesDetailsSection").hide();
            }
            });

        //Application for Transfer
          $('#chkbxApplicationForTransfer').click(function() {
              if ($(this).is(':checked')){ 
                  $(".TransferGroup").show();
                  $("#chkbxApplicationForTransfer").val('Applying for Transfer');     
              }
              else{
                  $("#chkbxApplicationForTransfer").val('Not Applying for Transfer');
                  $(".TransferGroup").hide();
              }
          });

        //Is Motivation for Transfer Attached
            $('#chkbxMotivationTransfer').click(function() {
                if ($(this).is(':checked')) {
                    $("#chkbxMotivationTransfer").val('Motivation is Attached');
                } else {
                    $("#chkbxMotivationTransfer").val('Motivation is Not Attached');
                }
            });
        
        //Does candidate have Acting Experience
            $('#chkbxActingExperience').click(function() {
                if ($(this).is(':checked')) {
                    $("#chkbxActingExperience").val('Acting Experience');
                } else {
                    $("#chkbxActingExperience").val('No Acting Experienced');
                }
            });
                
        //Does candidate have Managerial Experience
            $('#chkbxManagerialExperience').click(function() {
                if ($(this).is(':checked')) {
                    $("#chkbxManagerialExperience").val('Managerial Experience');
                } else {
                    $("#chkbxManagerialExperience").val('No Managerial Experience');
                }
            }); 

        //Applying for Regional Court President
            $('#chkbxRCP').click(function() {
                //If value = appling, the checkbox should be checked by default
                if ($(this).is(':checked')) {
                    $("#chkbxRCP").val('Applying for Regional Court President');
                } else {
                    $("#chkbxRCP").val('Not Applying for Regional Court President');
                }
            });
            //Select should bring up everything in db
                /* $('#chkbxRCP').click(function(){
                    if ($(this).val('Applying for Regional Court President')) {
                        $(this).is(':checked');
                    } else {
                        $(this).is(':checked', false)
                    }
                }); */
        // RCP Section GP
            //RCP Section JHB
            $('#RCP_GP_JHB').click(function() {
                if ($(this).is(':checked')) { 
                    $("#RCP_GP_JHB").val('Applying for Regional Court President in Johannesburg');
                } else {
                    $("#RCP_GP_JHB").val('Not Applying for Regional Court President in Johannesburg');
                }
            });
            // RCP Section PTA
            $('#RCP_GP_PTA').click(function() {
                if ($(this).is(':checked')) { 
                    $("#RCP_GP_PTA").val('Applying for Regional Court President in Pretoria');
                } else {
                    $("#RCP_GP_PTA").val('Not Applying for Regional Court President in Pretoria');
                }
            });

        // RCP Section WP
            //RCP Section CT
                $('#RCP_WP_CT').click(function() {
                    if ($(this).is(':checked')) { 
                        $("#RCP_WP_CT").val('Applying for Regional Court President in Cape Town');
                    } else {
                        $("#RCP_WP_CT").val('Not Applying for Regional Court President in Cape Town');
                    }
                });
            // RCP Section George
                $('#RCP_WP_George').click(function() {
                    if ($(this).is(':checked')) { 
                        $("#RCP_WP_George").val('Applying for Regional Court President in George');
                    } else {
                        $("#RCP_WP_George").val('Not Applying for Regional Court President in George');
                    }
                });
        // RCP Section KZN
            //RCP Section DBN
            $('#RCP_KZN_DBN').click(function() {
                if ($(this).is(':checked')) { 
                    $("#RCP_KZN_DBN").val('Applying for Regional Court President in Durban');
                } else {
                    $("#RCP_KZN_DBN").val('Not Applying for Regional Court President in Durban');
                }
            });
            //RCP Section PMB
                $('#RCP_KZN_PMB').click(function() {
                    if ($(this).is(':checked')) { 
                        $("#RCP_KZN_PMB").val('Applying for Regional Court President in Pietermaritzburg');
                    } else {
                        $("#RCP_KZN_PMB").val('Not Applying for Regional Court President in Pietermaritzburg');
                    }
                });
    
            //Applying for Chief Magistrate
            $('#chkbx_Chief_Mag').click(function() {
                if ($(this).is(':checked')) {
                    $("#chkbx_Chief_Mag").val('Applying for Chief Magistrate');
                } else {
                    $("#chkbx_Chief_Mag").val('Not Applying for Chief Magistrate');
                }
            });

            //Chief Magistrate Section GP
            //Chief Magistrate Section JHB
            $('#Chief_Mag_GP_JHB').click(function() {
                if ($(this).is(':checked')) { 
                    $("#Chief_Mag_GP_JHB").val('Applying for Chief Magistrate in Johannesburg');
                } else {
                    $("#Chief_Mag_GP_JHB").val('Not Applying for Chief Magistrate in Johannesburg');
                }
            });
            //Chief Magistrate Section PTA
            $('#Chief_Mag_GP_PTA').click(function() {
                if ($(this).is(':checked')) { 
                    $("#Chief_Mag_GP_PTA").val('Applying for Chief Magistrate in Pretoria');
                } else {
                    $("#Chief_Mag_GP_PTA").val('Not Applying for Chief Magistrate in Pretoria');
                }
            });

            //Chief Magistrate Section WP
            //Chief Magistrate Section CT
                $('#Chief_Mag_WP_CT').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Chief_Mag_WP_CT").val('Applying for Chief Magistrate in Cape Town');
                      } else {
                          $("#Chief_Mag_WP_CT").val('Not Applying for Chief Magistrate in Cape Town');
                      }
                  });
            //Chief Magistrate Section George
                  $('#Chief_Mag_WP_George').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Chief_Mag_WP_George").val('Applying for Chief Magistrate in George');
                      } else {
                          $("#Chief_Mag_WP_George").val('Not Applying for Chief Magistrate in George');
                      }
                  });

        //Chief Magistrate Section KZN
          //Chief Magistrate Section DBN
                $('#Chief_Mag_KZN_DBN').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Chief_Mag_KZN_DBN").val('Applying for Chief Magistrate in Durban');
                      } else {
                          $("#Chief_Mag_KZN_DBN").val('Not Applying for Chief Magistrate in Durban');
                      }
                  });
          //Chief Magistrate Section PMB
                  $('#Chief_Mag_KZN_PMB').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Chief_Mag_KZN_PMB").val('Applying for Chief Magistrate in Pietermaritzburg');
                      } else {
                          $("#Chief_Mag_KZN_PMB").val('Not Applying for Chief Magistrate in Pietermaritzburg');
                      }
                  });

        //Applying for Senior Judicial Educator
          $('#chkbxSnr_JE').click(function() {
              if ($(this).is(':checked')) {
                  $("#chkbxSnr_JE").val('Applying for Senior Judicial Educator');
              } else {
                  $("#chkbxSnr_JE").val('Not Applying for Senior Judicial Educator');
              }
          });

        //Senior Judicial Educator Section GP
          //Senior Judicial Educator Section JHB
            $('#SnrJE_GP_JHB').click(function() {
                if ($(this).is(':checked')) { 
                    $("#SnrJE_GP_JHB").val('Applying for Senior Judicial Educator in Johannesburg');
                } else {
                    $("#SnrJE_GP_JHB").val('Not Applying for Senior Judicial Educator in Johannesburg');
                }
            });
          //Senior Judicial Educator Section PTA
            $('#SnrJE_GP_PTA').click(function() {
                if ($(this).is(':checked')) { 
                    $("#SnrJE_GP_PTA").val('Applying for Senior Judicial Educator in Pretoria');
                } else {
                    $("#SnrJE_GP_PTA").val('Not Applying for Senior Judicial Educator in Pretoria');
                }
            });

        //Senior Judicial Educator Section WP
          //Senior Judicial Educator Section CT
                $('#SnrJE_WP_CT').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#SnrJE_WP_CT").val('Applying for Senior Judicial Educator in Cape Town');
                      } else {
                          $("#SnrJE_WP_CT").val('Not Applying for Senior Judicial Educator in Cape Town');
                      }
                  });
          //Senior Judicial Educator Section George
                  $('#SnrJE_WP_George').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#SnrJE_WP_George").val('Applying for Senior Judicial Educator in George');
                      } else {
                          $("#SnrJE_WP_George").val('Not Applying for Senior Judicial Educator in George');
                      }
                  });

        //Senior Judicial Educator Section KZN
          //Senior Judicial Educator Section DBN
                $('#SnrJE_KZN_DBN').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#SnrJE_KZN_DBN").val('Applying for Senior Judicial Educator in Durban');
                      } else {
                          $("#SnrJE_KZN_DBN").val('Not Applying for Senior Judicial Educator in Durban');
                      }
                  });
          //Regional Magistrate Section PMB
                  $('#SnrJE_KZN_PMB').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#SnrJE_KZN_PMB").val('Applying for Senior Judicial Educator in Pietermaritzburg');
                      } else {
                          $("#SnrJE_KZN_PMB").val('Not Applying for Senior Judicial Educator in Pietermaritzburg');
                      }
                  });
      
        //Applying for Regional Magistrate
                  $('#chkbx_Reg_Mag').click(function() {
                      if ($(this).is(':checked')) {
                          $("#chkbx_Reg_Mag").val('Applying for Regional Magistrate');
                      } else {
                          $("#chkbx_Reg_Mag").val('Not Applying for Regional Magistrate');
                      }
                  });

        //Regional Magistrate Section GP
          //Regional Magistrate Section JHB
            $('#Reg_Mag_GP_JHB').click(function() {
                if ($(this).is(':checked')) { 
                    $("#Reg_Mag_GP_JHB").val('Applying for Regional Magistrate in Johannesburg');
                } else {
                    $("#Reg_Mag_GP_JHB").val('Not Applying for Regional Magistrate in Johannesburg');
                }
            });
          //Regional Magistrate Section PTA
            $('#Reg_Mag_GP_PTA').click(function() {
                if ($(this).is(':checked')) { 
                    $("#Reg_Mag_GP_PTA").val('Applying for Regional Magistrate in Pretoria');
                } else {
                    $("#Reg_Mag_GP_PTA").val('Not Applying for Regional Magistrate in Pretoria');
                }
            });

        //Regional Magistrate Section WP
            //Regional Magistrate Section CT
                $('#Reg_Mag_WP_CT').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Reg_Mag_WP_CT").val('Applying for Regional Magistrate in Cape Town');
                      } else {
                          $("#Reg_Mag_WP_CT").val('Not Applying for Regional Magistrate in Cape Town');
                      }
                  });
            //Regional Magistrate Section George
                  $('#Reg_Mag_WP_George').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Reg_Mag_WP_George").val('Applying for Regional Magistrate in George');
                      } else {
                          $("#Reg_Mag_WP_George").val('Not Applying for Regional Magistrate in George');
                      }
                  });

        //Regional Magistrate Section KZN
          //Regional Magistrate Section DBN
                $('#Reg_Mag_KZN_DBN').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Reg_Mag_KZN_DBN").val('Applying for Regional Magistrate in Durban');
                      } else {
                          $("#Reg_Mag_KZN_DBN").val('Not Applying for Regional Magistrate in Durban');
                      }
                  });
          //Regional Magistrate Section PMB
                  $('#Reg_Mag_KZN_PMB').click(function() {
                      if ($(this).is(':checked')) { 
                          $("#Reg_Mag_KZN_PMB").val('Applying for Regional Magistrate in Pietermaritzburg');
                      } else {
                          $("#Reg_Mag_KZN_PMB").val('Not Applying for Regional Magistrate in Pietermaritzburg');
                      }
                  });

        fetchUser(); //This function will load all data on web page when page load
        function fetchUser() // This function will fetch data from table and display under <div id="result">
        {
            var action = "Load";
            $.ajax({
            url : "action.php", //Request send to "action.php page"
            method:"POST", //Using of Post method for send data
            data:{action:action}, //action variable data has been send to server
            success:function(data){
            $('#result').html(data); //It will display data under div tag with id result
            }
            });
        }

    /* Fetches Shortlisted candidates */
        $('#shortlisted_results').click(function(){
            //$('#shortlisted_results').hide();
            //$('#allresults').show();
            var action = "LoadShortlisted";
            console.log('I am');
            $.ajax({
                url : "action.php",
                method: "POST",
                data:{action},
                success:function (data) {
                    $('#result').html(data);
                }
            }); 
        });

    /* Fetches All candidates */
        $('#allresults').click(function(){
            //$('#shortlisted_results').show();
            //$('#allresults').hide();
                var action = "Load";

                $.ajax({
                    url : "action.php",
                    method: "POST",
                    data:{action},
                    success:function (data) {
                        $('#result').html(data);
                    }
                }); 
        });

    /* Fetches Shortlisted candidates */
        $('#shortlist_Filter').click(function () {
          var action = "Shortlisted_Filter";
          
          $.ajax({
              url : "action.php",
              method: "POST",
              data:{action},
              success:function(data){
                $('#result').html(data);
              }
          });
        });

    //testing area
        $('#btnTesting').click(function () {
            var action = "Testing";

            //Regional Court President
                var rcp_gp_jhb = $('#RCP_GP_JHB').val(); 
                var rcp_gp_pta = $('#RCP_GP_PTA').val();
                var rcp_wp_ct = $('#RCP_WP_CT').val(); 
                var rcp_wp_george = $('#RCP_WP_George').val();
                var rcp_kzn_dbn = $('#RCP_KZN_DBN').val(); 
                var rcp_kzn_pmb = $('#RCP_KZN_PMB').val();

            //Chief Magistrate 
                var chiefmag_gp_jhb = $('#Chief_Mag_GP_JHB').val(); 
                var chiefmag_gp_pta = $('#Chief_Mag_GP_PTA').val();
                var chiefmag_wp_ct = $('#Chief_Mag_WP_CT').val(); 
                var chiefmag_wp_george = $('#Chief_Mag_WP_George').val();
                var chiefmag_kzn_dbn = $('#Chief_Mag_KZN_DBN').val(); 
                var chiefmag_kzn_pmb = $('#Chief_Mag_KZN_PMB').val();

            //Senior Judicial Educator
                var snr_je_gp_jhb = $('#SnrJE_GP_JHB').val(); 
                var snr_je_gp_pta = $('#SnrJE_GP_PTA').val();
                var snr_je_wp_ct = $('#SnrJE_WP_CT').val(); 
                var snr_je_wp_george = $('#SnrJE_WP_George').val();
                var snr_je_kzn_dbn = $('#SnrJE_KZN_DBN').val(); 
                var snr_je_kzn_pmb = $('#SnrJE_KZN_PMB').val();

            //Regional Magistrate
                var rm_gp_jhb = $('#Reg_Mag_GP_JHB').val();
                var rm_gp_pta = $('#Reg_Mag_GP_PTA').val();
                var rm_wp_ct = $('#Reg_Mag_WP_CT').val();
                var rm_wp_george = $('#Reg_Mag_WP_George').val();
                var rm_kzn_dbn = $('#Reg_Mag_KZN_DBN').val();
                var rm_kzn_pmb = $('#Reg_Mag_KZN_PMB').val();

            //shortlisted
                var is_shortlisted = $('#inputIs_shortlisted').val();

            $.ajax({
                url : "action.php",
                method: "POST",
                data:{action:action,
                    rcp_gp_jhb:rcp_gp_jhb,
                    rcp_gp_pta:rcp_gp_pta,
                    rcp_wp_ct:rcp_wp_ct,
                    rcp_wp_george:rcp_wp_george,
                    rcp_kzn_dbn:rcp_kzn_dbn,
                    rcp_kzn_pmb:rcp_kzn_pmb,
                    rm_gp_jhb:rm_gp_jhb,
                    rm_gp_pta:rm_gp_pta,
                    rm_wp_ct:rm_wp_ct,
                    rm_wp_george:rm_wp_george,
                    rm_kzn_dbn:rm_kzn_dbn,
                    rm_kzn_pmb:rm_kzn_pmb,
                    chiefmag_gp_jhb:chiefmag_gp_jhb,
                    chiefmag_gp_pta:chiefmag_gp_pta,
                    chiefmag_wp_ct:chiefmag_wp_ct,
                    chiefmag_wp_george:chiefmag_wp_george,
                    chiefmag_kzn_dbn:chiefmag_kzn_dbn,
                    chiefmag_kzn_pmb:chiefmag_kzn_pmb,
                    snr_je_gp_jhb:snr_je_gp_jhb,
                    snr_je_gp_pta:snr_je_gp_pta,
                    snr_je_wp_ct:snr_je_wp_ct,
                    snr_je_wp_george:snr_je_wp_george,
                    snr_je_kzn_dbn:snr_je_kzn_dbn,
                    snr_je_kzn_pmb:snr_je_kzn_pmb,
                    is_shortlisted:is_shortlisted                 
                },
                success:function(data){
                    //$('#result').html(data);
                    console.log(data)
                }
            });
        });

        //filter_Options
            $('#btnFilterOptions').click(function () {
                var action = "filter_Options";   //We have define action variable value is equal to select
                var is_shortlisted = $('#input_shortlistFilter').val(); //Get the value of last name textbox

                $.ajax({
                url:"action.php",   //Request send to "action.php page"
                method:"POST",    //Using of Post method for send data
                data:{
                    action:action,
                    is_shortlisted:is_shortlisted}, //Send data to server 
                    dataType:"json",   //Here we have define json data type, so server will send data in json format.
                    success:function(data){
                        $('#action').val("filter_Options");     //This code will change Button value to Update
                        $('#input_shortlistFilter').val(data.is_shortlisted);  //It will assign value of modal last name textbox
                    }
                });
            });
        
        //Modal Filtering data
          $('#btnModal_filter').click(function(){
              $('#Modal_Filter').modal('show'); //It will load modal on web page
              $('.modal-title').text("Filter Candidates"); //It will change Modal title to Create new Records
              $('#action').val('filter_Options'); //This will reset Button value ot Create
          });

    //This JQuery code will Reset value of Modal item when modal will load for create new records
        $('#modal_button').click(function(){
            $('#customerModal').modal('show'); //It will load modal on web page
            $('#first_name').val(''); //This will clear Modal first name textbox
            $('#inputSurname').val(''); //This will clear Modal last name textbox
            $('.modal-title').text("Create New Records"); //It will change Modal title to Create new Records
            $('#action').val('Update'); //This will reset Button value to Create
        });
 
    //This area is for selecting candidates
        $('#select').click(function(){
            //var action = "select";
                
                
            /* if ($("#chkbxRCP").is(':checked')) {
                $("#RCP_Section").toggle(this.checked);
            } */

            //var action = $('#select').val();
            /* 
                $('#chkbxRCP').click(function() {
                            //If value = appling, the checkbox should be checked by default
                            if ($(this).is(':checked')) {
                                $("#chkbxRCP").val('Applying for Regional Court President');
                            } else {
                                $("#chkbxRCP").val('Not Applying for Regional Court President');
                            }
                        });
                var remarks = $('#inputRemarks').val(); //Get the value of last name textbox
                var reason_for_dq = $('#inputDQReason').val(); //Get the value of last name textbox
                var acting_experience = $('#chkbxActingExperience').val(); //Get the value of last name textbox
                var managerial_experience = $('#chkbxManagerialExperience').val(); //Get the value of last name textbox
                $.ajax({
                    url : "action.php",    //Request send to "action.php page"
                    method:"POST",     //Using of Post method for send data
                    data:{id:id,
                        remarks:remarks,
                        reason_for_dq:reason_for_dq,
                        acting_experience:acting_experience,
                        managerial_experience:managerial_experience
                    }, //Send data to server 
                    success:function(data){
                        $('#inputRemarks').val(data.remarks);     //It will define value of id variable to this customer id hidden field
                        $('#inputDQReason').val(data.reason_for_dq);  //It will assign value to modal first name texbox
                        $('#chkbxActingExperience').val(data.acting_experience);  //It will assign value of modal last name textbox
                        $('#chkbxManagerialExperience').val(data.managerial_experience);  //It will assign value of modal last name textbox
                    }
                    }); */
        });

        //This section is for creating candidates
        //This JQuery code is for Click on Modal action button for Create new records or Update existing records. This code will use for both Create and Update of data through modal
          $('#action').click(function(){
            var id = $('#candidate_Id').val();  //Get the value of hidden field customer id
            var action = $('#action').val();    //Get the value of Modal Action button and stored into action variable
            
            var title = $('#inputTitle').val();  //Get the value of title.
            var full_names = $('#inputFullNames').val(); //Get the value of first name textbox.
            var surname = $('#inputSurname').val(); //Get the value of surname textbox
            var age = $('#inputAge').val(); //Get the value of age
            var gender = $('#inputGender').val(); //Get the value of gender
            var id_number = $('#inputId').val(); //Get the value of last name textbox
            var race = $('#inputRace').val(); //Get the value of last name textbox
            var current_rank = $('#inputCurrentRank').val(); //Get the value of last name textbox
            var current_headquarters = $('#inputCurrentHQ').val(); //Get the value of last name textbox
            var landline_number = $('#inputLandline').val(); //Get the value of last name textbox

            var cellphone_number = $('#inputCell').val(); //Get the value of last name textbox
            var fax_number = $('#inputFax').val();  //THIS WAS CHANGED
            var email_address = $('#inputemail').val();  //THIS WAS CHANGED

            var experience1 = $('#inputExperience1').val(); //Get the value of first name textbox
            var period1 = $('#inputPeriod1').val(); //Get the value of last name textbox
            var duration1 = $('#inputDuration1').val(); //Get the value of last name textbox
            
            var grand_total = $('#inputGrandTotal').val(); //Get the value of last name textbox
            var qualification_year = $('#inputQualification_Year').val(); //Get the value of last name textbox
            var disabled_person = $('#chkbxIsDisabled').val(); //Get the value of last name textbox
            var disability_details = $('#inputDisabilitiesDetails').val(); //Get the value of last name textbox
            var application_for_transfer = $('#chkbxApplicationForTransfer').val(); //Get the value of last name textbox
            var motivation_for_transfer_attached = $('#chkbxMotivationTransfer').val(); //Get the value of last name textbox
            var reason_for_transfer = $('#inputTransferReason').val(); //Get the value of last name textbox
            var remarks = $('#inputRemarks').val(); //Get the value of last name textbox
            var reason_for_dq = $('#inputDQReason').val(); //Get the value of last name textbox
            var acting_experience = $('#chkbxActingExperience').val(); //Get the value of last name textbox
            var managerial_experience = $('#chkbxManagerialExperience').val(); //Get the value of last name textbox
                  
            var applied_for_rcp = $('#chkbxRCP').val(); //Get the value of last name textbox
            var rcp_gp_cities = $('#input_rcp_gp_cities').val(); //Get the name of the city applied for in GP
            var rcp_wc_cities = $('#input_rcp_wp_cities').val(); //Get the name of the city applied for in WP
            var rcp_kzn_cities = $('#input_rcp_kzn_cities').val(); //Get the name of the city applied for in KZN
            var rcp_ec_cities = $('#input_rcp_ec_cities').val(); //Get the name of the city applied for in EC
            var rcp_mp_cities = $('#input_rcp_mp_cities').val(); //Get the name of the city applied for in MP
            var rcp_fs_cities = $('#input_rcp_fs_cities').val(); //Get the name of the city applied for in FS
            var rcp_lp_cities = $('#input_rcp_lp_cities').val(); //Get the name of the city applied for in LP
            var rcp_nw_cities = $('#input_rcp_nw_cities').val(); //Get the name of the city applied for in NW
            var rcp_np_cities = $('#input_rcp_np_cities').val(); //Get the name of the city applied for in NP
                
            var applied_for_reg_mag	 = $('#chkbx_Reg_Mag').val(); //Get the value of last name textbox
            var rm_gp_cities	 = $('#input_rm_gp_cities').val(); //Get the name of the city applied for in WP
            var rm_wc_cities	 = $('#input_rm_wc_cities').val(); //Get the name of the city applied for in KZN
            var rm_kzn_cities	 = $('#input_rm_kzn_cities').val(); //Get the name of the city applied for in EC
            var rm_ec_cities	 = $('#input_rm_ec_cities').val(); //Get the name of the city applied for in MP
            var rm_mp_cities	 = $('#input_rm_mp_cities').val(); //Get the name of the city applied for in FS
            var rm_fs_cities	 = $('#input_rm_fs_cities').val(); //Get the name of the city applied for in LP
            var rm_lp_cities	 = $('#input_rm_lp_cities').val(); //Get the name of the city applied for in NW
            var rm_nw_cities	 = $('#input_rm_nw_cities').val(); //Get the name of the city applied for in NW
            var rm_np_cities	 = $('#input_rm_np_cities').val(); //Get the name of the city applied for in NP
        
              
            var applied_for_chief_mag = $('#chkbx_Chief_Mag').val(); //Get the value of last name textbox
            var cm_gp_cities = $('#input_cm_gp_cities').val(); //Get the name of the city applied for in GP
            var cm_wc_cities = $('#input_cm_wc_cities').val(); //Get the name of the city applied for in WP
            var cm_kzn_cities = $('#input_cm_kzn_cities').val(); //Get the name of the city applied for in KZN
            var cm_ec_cities = $('#input_cm_ec_cities').val(); //Get the name of the city applied for in EC
            var cm_mp_cities = $('#input_cm_mp_cities').val(); //Get the name of the city applied for in MP
            var cm_fs_cities = $('#input_cm_fs_cities').val(); //Get the name of the city applied for in FS
            var cm_lp_cities = $('#input_cm_lp_cities').val(); //Get the name of the city applied for in LP
            var cm_nw_cities = $('#input_cm_nw_cities').val(); //Get the name of the city applied for in NW
            var cm_np_cities = $('#input_cm_np_cities').val(); //Get the name of the city applied for in NP
            
              
            var applied_for_snr_je = $('#chkbxSnr_JE').val(); //Get the value of last name textbox
            var snr_je_gp_cities = $('#input_snr_je_gp_cities').val(); //Get the name of the city applied for in GP
            var snr_je_wc_cities = $('#input_snr_je_wc_cities').val(); //Get the name of the city applied for in WP
            var snr_je_kzn_cities = $('#input_snr_je_kzn_cities').val(); //Get the name of the city applied for in KZN
            var snr_je_ec_cities = $('#input_snr_je_ec_cities').val(); //Get the name of the city applied for in EC
            var snr_je_mp_cities = $('#input_snr_je_mp_cities').val(); //Get the name of the city applied for in MP
            var snr_je_fs_cities = $('#input_snr_je_fs_cities').val(); //Get the name of the city applied for in FS
            var snr_je_lp_cities = $('#input_snr_je_lp_cities').val(); //Get the name of the city applied for in LP
            var snr_je_nw_cities = $('#input_snr_je_nw_cities').val(); //Get the name of the city applied for in NW
            var snr_je_np_cities = $('#input_snr_je_np_cities').val(); //Get the name of the city applied for in NP
        
            var is_shortlisted = $('#inputIs_shortlisted').val(); //Get the value of last name textbox

              $.ajax({
                  url : "action.php",    //Request send to "action.php page"
                  method:"POST",     //Using of Post method for send data
                  data:{id:id,
                    action:action,
                    title:title, 
                    full_names:full_names,
                    surname:surname,
                    age:age,
                    gender:gender,
                    id_number:id_number,
                    race:race,
                    current_rank:current_rank,
                    current_headquarters:current_headquarters,
                    landline_number:landline_number,
                    cellphone_number:cellphone_number,
                    fax_number:fax_number,
                    email_address:email_address,
                    experience1:experience1,
                    period1:period1,
                    duration1:duration1,
                    grand_total:grand_total,
                    qualification_year:qualification_year,
                    disabled_person:disabled_person,
                    disability_details:disability_details,
                    application_for_transfer:application_for_transfer, 
                    motivation_for_transfer_attached:motivation_for_transfer_attached,
                    reason_for_transfer:reason_for_transfer,
                    remarks:remarks,
                    reason_for_dq:reason_for_dq,
                    acting_experience:acting_experience,
                    managerial_experience:managerial_experience,

                    applied_for_rcp:applied_for_rcp,
                    rcp_gp_cities:rcp_gp_cities,
                    rcp_wc_cities:rcp_wc_cities,
                    rcp_kzn_cities:rcp_kzn_cities,
                    rcp_ec_cities:rcp_ec_cities,
                    rcp_mp_cities:rcp_mp_cities,
                    rcp_fs_cities:rcp_fs_cities,
                    rcp_lp_cities:rcp_lp_cities,
                    rcp_nw_cities:rcp_nw_cities,
                    rcp_np_cities:rcp_np_cities,
                    applied_for_reg_mag:applied_for_reg_mag,
                    rm_gp_cities:rm_gp_cities,
                    rm_wc_cities:rm_wc_cities,
                    rm_kzn_cities:rm_kzn_cities,
                    rm_ec_cities:rm_ec_cities,
                    rm_mp_cities:rm_mp_cities,
                    rm_fs_cities:rm_fs_cities,
                    rm_lp_cities:rm_lp_cities,
                    rm_nw_cities:rm_nw_cities,
                    rm_np_cities:rm_np_cities,

                    applied_for_chief_mag:applied_for_chief_mag,
                    cm_gp_cities:cm_gp_cities,
                    cm_wc_cities:cm_wc_cities,
                    cm_kzn_cities:cm_kzn_cities,
                    cm_ec_cities:cm_ec_cities,
                    cm_mp_cities:cm_mp_cities,
                    cm_fs_cities:cm_fs_cities,
                    cm_lp_cities:cm_lp_cities,
                    cm_nw_cities:cm_nw_cities,
                    cm_np_cities:cm_np_cities,
                      
                    applied_for_snr_je:applied_for_snr_je,
                    snr_je_gp_cities:snr_je_gp_cities,
                    snr_je_wc_cities:snr_je_wc_cities,
                    snr_je_kzn_cities:snr_je_kzn_cities,
                    snr_je_ec_cities:snr_je_ec_cities,
                    snr_je_mp_cities:snr_je_mp_cities,
                    snr_je_fs_cities:snr_je_fs_cities,
                    snr_je_lp_cities:snr_je_lp_cities,
                    snr_je_nw_cities:snr_je_nw_cities,
                    snr_je_np_cities:snr_je_np_cities,

                    is_shortlisted:is_shortlisted
                }, //Send data to server 
                  success:function(data){
                    //$('#action').val("Create");     //This code will change Button value to Update
                    $('#candidate_Id').val(id);     //It will define value of id variable to this customer id hidden field
                    $('#inputTitle').val(data.title);  //It will assign value to modal first name texbox
                    $('#inputFullNames').val(data.full_names);  //It will assign value of modal last name textbox
                    $('#inputSurname').val(data.surname);  //It will assign value of modal last name textbox
                    $('#inputAge').val(data.age); //Get the value of last name textbox
                    $('#inputGender').val(data.gender); //Get the value of last name textbox
                    $('#inputId').val(data.id_number); //Get the value of last name textbox
                    $('#inputRace').val(data.race); //Get the value of last name textbox
                    $('#inputCurrentRank').val(data.current_rank); //Get the value of last name textbox
                    $('#inputCurrentHQ').val(data.current_headquarters); //Get the value of last name textbox
                    $('#inputLandline').val(data.landline_number); //Get the value of last name textbox
                    $('#inputCell').val(data.cellphone_number); //Get the value of last name textbox
                    $('#inputFax').val(data.fax_number);     //It will define value of id variable to this customer id hidden field
                    $('#inputemail').val(data.email_address);  //It will assign value to modal first name texbox
                    $('#inputExperience1').val(data.experience1);  //It will assign value of modal last name textbox
                    $('#inputPeriod1').val(data.period1);  //It will assign value of modal last name textbox
                    $('#inputDuration1').val(data.duration1); //Get the value of last name textbox
                    $('#inputGrandTotal').val(data.grand_total); //Get the value of last name textbox
                    $('#inputQualification_Year').val(data.qualification_year); //Get the value of last name textbox
                    $('#chkbxIsDisabled').val(data.disabled_person); //Get the value of last name textbox
                    $('#inputDisabilitiesDetails').val(data.disability_details); //Get the value of last name textbox
                    $('#chkbxApplicationForTransfer').val(data.application_for_transfer); //Get the value of last name textbox
                    $('#chkbxMotivationTransfer').val(data.motivation_for_transfer_attached); //Get the value of last name textbox
                    $('#inputTransferReason').val(data.reason_for_transfer); //Get the value of last name textbox
                    $('#inputRemarks').val(data.remarks);     //It will define value of id variable to this customer id hidden field
                    $('#inputDQReason').val(data.reason_for_dq);  //It will assign value to modal first name texbox
                    $('#chkbxActingExperience').val(data.acting_experience);  //It will assign value of modal last name textbox
                    $('#chkbxManagerialExperience').val(data.managerial_experience);  //It will assign value of modal last name textbox
                    $('#chkbxRCP').val(data.applied_for_rcp);  //It will assign value of modal last name textbox
                    $('#input_rcp_gp_cities').val(data.rcp_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_wp_cities').val(data.rcp_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_kzn_cities').val(data.rcp_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_ec_cities').val(data.rcp_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_mp_cities').val(data.rcp_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_fs_cities').val(data.rcp_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_lp_cities').val(data.rcp_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_nw_cities').val(data.rcp_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_np_cities').val(data.rcp_np_cities);  //It will assign value of modal last name textbox
                
                      
                    $('#chkbx_Reg_Mag').val(data.applied_for_reg_mag);  //It will assign value of modal last name textbox
                    $('#input_rm_gp_cities').val(data.rm_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_wc_cities').val(data.rm_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_kzn_cities').val(data.rm_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_ec_cities').val(data.rm_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_mp_cities').val(data.rm_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_fs_cities').val(data.rm_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_lp_cities').val(data.rm_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_nw_cities').val(data.rm_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_np_cities').val(data.rm_np_cities);  //It will assign value of modal last name textbox
            
                    
                    $('#chkbx_Chief_Mag').val(data.applied_for_chief_mag);  //It will assign value of modal last name textbox
                    $('#input_cm_gp_cities').val(data.cm_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_wc_cities').val(data.cm_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_kzn_cities').val(data.cm_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_ec_cities').val(data.cm_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_mp_cities').val(data.cm_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_fs_cities').val(data.cm_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_lp_cities').val(data.cm_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_nw_cities').val(data.cm_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_np_cities').val(data.cm_np_cities);  //It will assign value of modal last name textbox
                        
                      
                    $('#chkbxSnr_JE').val(data.applied_for_snr_je);  //It will assign value of modal last name textbox
                    $('#input_snr_je_gp_cities').val(data.snr_je_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_wc_cities').val(data.snr_je_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_kzn_cities').val(data.snr_je_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_ec_cities').val(data.snr_je_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_mp_cities').val(data.snr_je_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_fs_cities').val(data.snr_je_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_lp_cities').val(data.snr_je_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_nw_cities').val(data.snr_je_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_np_cities').val(data.snr_je_np_cities);  //It will assign value of modal last name textbox
                
                    $('#inputIs_shortlisted').val(data.is_shortlisted);  //It will assign value of modal last name textbox

                      alert(data);    //It will pop up which data it was received from server side
                      //fetchUser();    // Fetch User function has been called and it will load data under divison tag with id result
                  }
              });
          }); 
  
    //This JQuery code is for Update customer data. If we have click on any customer row update button then this code will execute
          $(document).on('click', '.update', function(){
            console.log("Update Button from index works!")
            //Setting the variables
            var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
            var action = "Select";   //We have define action variable value is equal to select

            var title = $('#inputTitle').val();  //Get the value of title.
            var full_names = $('#inputFullNames').val(); //Get the value of first name textbox.
            var surname = $('#inputSurname').val(); //Get the value of surname textbox
            var age = $('#inputAge').val(); //Get the value of age
            var gender = $('#inputGender').val(); //Get the value of gender
            var id_number = $('#inputId').val(); //Get the value of last name textbox
            var race = $('#inputRace').val(); //Get the value of last name textbox
            var current_rank = $('#inputCurrentRank').val(); //Get the value of last name textbox
            var current_headquarters = $('#inputCurrentHQ').val(); //Get the value of last name textbox
            var landline_number = $('#inputLandline').val(); //Get the value of last name textbox

            var cellphone_number = $('#inputCell').val(); //Get the value of last name textbox
            var fax_number = $('#inputFax').val();  //THIS WAS CHANGED
            var email_address = $('#inputemail').val();  //THIS WAS CHANGED

            var experience1 = $('#inputExperience1').val(); //Get the value of first name textbox
            var period1 = $('#inputPeriod1').val(); //Get the value of last name textbox
            var duration1 = $('#inputDuration1').val(); //Get the value of last name textbox
                
            var grand_total = $('#inputGrandTotal').val(); //Get the value of last name textbox
            var qualification_year = $('#inputQualification_Year').val(); //Get the value of last name textbox
            var disabled_person = $('#chkbxIsDisabled').val(); //Get the value of last name textbox
            var disability_details = $('#inputDisabilitiesDetails').val(); //Get the value of last name textbox
            var application_for_transfer = $('#chkbxApplicationForTransfer').val(); //Get the value of last name textbox
            var motivation_for_transfer_attached = $('#chkbxMotivationTransfer').val(); //Get the value of last name textbox
            var reason_for_transfer = $('#inputTransferReason').val(); //Get the value of last name textbox
            var remarks = $('#inputRemarks').val(); //Get the value of last name textbox
            var reason_for_dq = $('#inputDQReason').val(); //Get the value of last name textbox
            var acting_experience = $('#chkbxActingExperience').val(); //Get the value of last name textbox
            var managerial_experience = $('#chkbxManagerialExperience').val(); //Get the value of last name textbox
                  
            var applied_for_rcp = $('#chkbxRCP').val(); //Did Candidate appply for Regional Court President?
            var rcp_gp_cities = $('#input_rcp_gp_cities').val(); //Get the name of the city applied for in GP
            var rcp_wc_cities = $('#input_rcp_wp_cities').val(); //Get the name of the city applied for in WP
            var rcp_kzn_cities = $('#input_rcp_kzn_cities').val(); //Get the name of the city applied for in KZN
            var rcp_ec_cities = $('#input_rcp_ec_cities').val(); //Get the name of the city applied for in EC
            var rcp_mp_cities = $('#input_rcp_mp_cities').val(); //Get the name of the city applied for in MP
            var rcp_fs_cities = $('#input_rcp_fs_cities').val(); //Get the name of the city applied for in FS
            var rcp_lp_cities = $('#input_rcp_lp_cities').val(); //Get the name of the city applied for in LP
            var rcp_nw_cities = $('#input_rcp_nw_cities').val(); //Get the name of the city applied for in NW
            var rcp_np_cities = $('#input_rcp_np_cities').val(); //Get the name of the city applied for in NP
            
            var applied_for_reg_mag	 = $('#chkbx_Reg_Mag').val(); //Did Candidate appply for Regional Magistrate?
            var rm_gp_cities	 = $('#input_rm_gp_cities').val(); //Get the name of the city applied for in WP
            var rm_wc_cities	 = $('#input_rm_wc_cities').val(); //Get the name of the city applied for in KZN
            var rm_kzn_cities	 = $('#input_rm_kzn_cities').val(); //Get the name of the city applied for in EC
            var rm_ec_cities	 = $('#input_rm_ec_cities').val(); //Get the name of the city applied for in MP
            var rm_mp_cities	 = $('#input_rm_mp_cities').val(); //Get the name of the city applied for in FS
            var rm_fs_cities	 = $('#input_rm_fs_cities').val(); //Get the name of the city applied for in LP
            var rm_lp_cities	 = $('#input_rm_lp_cities').val(); //Get the name of the city applied for in NW
            var rm_nw_cities	 = $('#input_rm_nw_cities').val(); //Get the name of the city applied for in NW
            var rm_np_cities	 = $('#input_rm_np_cities').val(); //Get the name of the city applied for in NP
        
            var applied_for_chief_mag = $('#chkbx_Chief_Mag').val(); //Did Candidate appply for Chief Magistrate?
            var cm_gp_cities = $('#input_cm_gp_cities').val(); //Get the name of the city applied for in GP
            var cm_wc_cities = $('#input_cm_wc_cities').val(); //Get the name of the city applied for in WP
            var cm_kzn_cities = $('#input_cm_kzn_cities').val(); //Get the name of the city applied for in KZN
            var cm_ec_cities = $('#input_cm_ec_cities').val(); //Get the name of the city applied for in EC
            var cm_mp_cities = $('#input_cm_mp_cities').val(); //Get the name of the city applied for in MP
            var cm_fs_cities = $('#input_cm_fs_cities').val(); //Get the name of the city applied for in FS
            var cm_lp_cities = $('#input_cm_lp_cities').val(); //Get the name of the city applied for in LP
            var cm_nw_cities = $('#input_cm_nw_cities').val(); //Get the name of the city applied for in NW
            var cm_np_cities = $('#input_cm_np_cities').val(); //Get the name of the city applied for in NP
            
            var applied_for_snr_je = $('#chkbxSnr_JE').val(); //Did Candidate appply for Senior Judicial Educator?
            var snr_je_gp_cities = $('#input_snr_je_gp_cities').val(); //Get the name of the city applied for in GP
            var snr_je_wc_cities = $('#input_snr_je_wc_cities').val(); //Get the name of the city applied for in WP
            var snr_je_kzn_cities = $('#input_snr_je_kzn_cities').val(); //Get the name of the city applied for in KZN
            var snr_je_ec_cities = $('#input_snr_je_ec_cities').val(); //Get the name of the city applied for in EC
            var snr_je_mp_cities = $('#input_snr_je_mp_cities').val(); //Get the name of the city applied for in MP
            var snr_je_fs_cities = $('#input_snr_je_fs_cities').val(); //Get the name of the city applied for in FS
            var snr_je_lp_cities = $('#input_snr_je_lp_cities').val(); //Get the name of the city applied for in LP
            var snr_je_nw_cities = $('#input_snr_je_nw_cities').val(); //Get the name of the city applied for in NW
            var snr_je_np_cities = $('#input_snr_je_np_cities').val(); //Get the name of the city applied for in NP
            
            var is_shortlisted = $('#inputIs_shortlisted').val(); //Get the value of last name textbox

            $.ajax({
            url:"action.php",   //Request send to "action.php page"
            method:"POST",    //Using of Post method for send data
            data:{id:id,
                action:action,
                title:title,
                full_names:full_names,
                surname:surname,
                age:age,
                gender:gender,
                id_number:id_number,
                race:race,
                current_rank:current_rank,
                current_headquarters:current_headquarters,
                landline_number:landline_number,
                cellphone_number:cellphone_number,
                fax_number:fax_number,
                email_address:email_address,
                experience1:experience1,
                period1:period1,
                duration1:duration1,
                grand_total:grand_total,
                qualification_year:qualification_year,
                disabled_person:disabled_person,
                disability_details:disability_details,
                application_for_transfer:application_for_transfer,
                motivation_for_transfer_attached:motivation_for_transfer_attached,  
                reason_for_transfer:reason_for_transfer,
                remarks:remarks,
                reason_for_dq:reason_for_dq,
                acting_experience:acting_experience,
                managerial_experience:managerial_experience,
                applied_for_rcp:applied_for_rcp,
                rcp_gp_cities:rcp_gp_cities,
                rcp_wc_cities:rcp_wc_cities,
                rcp_kzn_cities:rcp_kzn_cities,
                rcp_ec_cities:rcp_ec_cities,
                rcp_mp_cities:rcp_mp_cities,
                rcp_fs_cities:rcp_fs_cities,
                rcp_lp_cities:rcp_lp_cities,
                rcp_nw_cities:rcp_nw_cities,
                rcp_np_cities:rcp_np_cities,

                applied_for_reg_mag:applied_for_reg_mag,
                rm_gp_cities:rm_gp_cities,
                rm_wc_cities:rm_wc_cities,
                rm_kzn_cities:rm_kzn_cities,
                rm_ec_cities:rm_ec_cities,
                rm_mp_cities:rm_mp_cities,
                rm_fs_cities:rm_fs_cities,
                rm_lp_cities:rm_lp_cities,
                rm_nw_cities:rm_nw_cities,
                rm_np_cities:rm_np_cities,

                applied_for_chief_mag:applied_for_chief_mag,
                cm_gp_cities:cm_gp_cities,
                cm_wc_cities:cm_wc_cities,
                cm_kzn_cities:cm_kzn_cities,
                cm_ec_cities:cm_ec_cities,
                cm_mp_cities:cm_mp_cities,
                cm_fs_cities:cm_fs_cities,
                cm_lp_cities:cm_lp_cities,
                cm_nw_cities:cm_nw_cities,
                cm_np_cities:cm_np_cities,

                applied_for_snr_je:applied_for_snr_je,
                snr_je_gp_cities:snr_je_gp_cities,
                snr_je_wc_cities:snr_je_wc_cities,
                snr_je_kzn_cities:snr_je_kzn_cities,
                snr_je_ec_cities:snr_je_ec_cities,
                snr_je_mp_cities:snr_je_mp_cities,
                snr_je_fs_cities:snr_je_fs_cities,
                snr_je_lp_cities:snr_je_lp_cities,
                snr_je_nw_cities:snr_je_nw_cities,
                snr_je_np_cities:snr_je_np_cities,

                is_shortlisted:is_shortlisted}, //Send data to server 
                dataType:"json",   //Here we have define json data type, so server will send data in json format.
                success:function(data){
                    $('#customerModal').modal('show');   //It will display modal on webpage
                    $('.modal-title').text("Update Records"); //This code will change this class text to Update records
                    $('#action').val("Update");     //This code will change Button value to Update
                    $('#candidate_Id').val(id);     //It will define value of id variable to this customer id hidden field
                    $('#inputTitle').val(data.title);  //It will assign value to modal first name texbox
                    $('#inputFullNames').val(data.full_names);  //It will assign value of modal last name textbox
                    $('#inputSurname').val(data.surname);  //It will assign value of modal last name textbox
                    $('#inputAge').val(data.age); //Get the value of last name textbox
                    $('#inputGender').val(data.gender); //Get the value of last name textbox
                    $('#inputId').val(data.id_number); //Get the value of last name textbox
                    $('#inputRace').val(data.race); //Get the value of last name textbox
                    $('#inputCurrentRank').val(data.current_rank); //Get the value of last name textbox
                    $('#inputCurrentHQ').val(data.current_headquarters); //Get the value of last name textbox
                    $('#inputLandline').val(data.landline_number); //Get the value of last name textbox
                    $('#inputCell').val(data.cellphone_number); //Get the value of last name textbox
                    $('#inputFax').val(data.fax_number);     //It will define value of id variable to this customer id hidden field
                    $('#inputemail').val(data.email_address);  //It will assign value to modal first name texbox
                    $('#inputExperience1').val(data.experience1);  //It will assign value of modal last name textbox
                    $('#inputPeriod1').val(data.period1);  //It will assign value of modal last name textbox
                    $('#inputDuration1').val(data.duration1); //Get the value of last name textbox
                    $('#inputGrandTotal').val(data.grand_total); //Get the value of last name textbox
                    $('#inputQualification_Year').val(data.qualification_year); //Get the value of last name textbox
                    $('#chkbxIsDisabled').val(data.disabled_person); //Get the value of last name textbox
                    $('#inputDisabilitiesDetails').val(data.disability_details); //Get the value of last name textbox
                    $('#chkbxApplicationForTransfer').val(data.application_for_transfer); //Get the value of last name textbox
                    $('#chkbxMotivationTransfer').val(data.motivation_for_transfer_attached); //Get the value of last name textbox
                    $('#inputTransferReason').val(data.reason_for_transfer); //Get the value of last name textbox
                    $('#inputRemarks').val(data.remarks);     //It will define value of id variable to this customer id hidden field
                    $('#inputDQReason').val(data.reason_for_dq);  //It will assign value to modal first name texbox
                    $('#chkbxActingExperience').val(data.acting_experience);  //It will assign value of modal last name textbox
                    $('#chkbxManagerialExperience').val(data.managerial_experience);  //It will assign value of modal last name textbox
                    $('#chkbxRCP').val(data.applied_for_rcp);  //It will assign value of modal last name textbox

                    
                        if ($("#chkbxRCP").val('Applying for Regional Court President')) {
                            //console.log("Hello");
                            /* $("#chkbxRCP").prop('checked', true); */
                            //$('#chkbxRCP').is(":checked")
                        } 

                    $('#input_rcp_gp_cities').val(data.rcp_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_wp_cities').val(data.rcp_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_kzn_cities').val(data.rcp_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_ec_cities').val(data.rcp_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_mp_cities').val(data.rcp_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_fs_cities').val(data.rcp_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_lp_cities').val(data.rcp_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_nw_cities').val(data.rcp_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_rcp_np_cities').val(data.rcp_np_cities);  //It will assign value of modal last name textbox
                
                    $('#chkbx_Reg_Mag').val(data.applied_for_reg_mag);  //It will assign value of modal last name textbox
                    $('#input_rm_gp_cities').val(data.rm_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_wc_cities').val(data.rm_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_kzn_cities').val(data.rm_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_ec_cities').val(data.rm_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_mp_cities').val(data.rm_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_fs_cities').val(data.rm_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_lp_cities').val(data.rm_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_nw_cities').val(data.rm_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_rm_np_cities').val(data.rm_np_cities);  //It will assign value of modal last name textbox
                                      
                    $('#chkbx_Chief_Mag').val(data.applied_for_chief_mag);  //It will assign value of modal last name textbox
                    $('#input_cm_gp_cities').val(data.cm_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_wc_cities').val(data.cm_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_kzn_cities').val(data.cm_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_ec_cities').val(data.cm_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_mp_cities').val(data.cm_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_fs_cities').val(data.cm_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_lp_cities').val(data.cm_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_nw_cities').val(data.cm_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_cm_np_cities').val(data.cm_np_cities);  //It will assign value of modal last name textbox

                    $('#chkbxSnr_JE').val(data.applied_for_snr_je);  //It will assign value of modal last name textbox
                    $('#input_snr_je_gp_cities').val(data.snr_je_gp_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_wc_cities').val(data.snr_je_wc_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_kzn_cities').val(data.snr_je_kzn_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_ec_cities').val(data.snr_je_ec_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_mp_cities').val(data.snr_je_mp_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_fs_cities').val(data.snr_je_fs_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_lp_cities').val(data.snr_je_lp_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_nw_cities').val(data.snr_je_nw_cities);  //It will assign value of modal last name textbox
                    $('#input_snr_je_np_cities').val(data.snr_je_np_cities);  //It will assign value of modal last name textbox

                    $('#inputIs_shortlisted').val(data.is_shortlisted);  //It will assign value of modal last name textbox
                }
                
            });
            
          });
          
    //This JQuery code is for Update customer data. If we have click on any customer row update button then this code will execute
          $(document).on('click', '.updateShort', function(){
              //Setting the variables
              var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
              var action = "selectShort";   //We have define action variable value is equal to select

              var title = $('#inputTitle').val();  //Get the value of title.
              var full_names = $('#inputFullNames').val(); //Get the value of first name textbox.
              var surname = $('#inputSurname').val(); //Get the value of surname textbox
              var age = $('#inputAge').val(); //Get the value of age
              var gender = $('#inputGender').val(); //Get the value of gender
              var id_number = $('#inputId').val(); //Get the value of last name textbox
              var race = $('#inputRace').val(); //Get the value of last name textbox
              var current_rank = $('#inputCurrentRank').val(); //Get the value of last name textbox
              var current_headquarters = $('#inputCurrentHQ').val(); //Get the value of last name textbox
              var landline_number = $('#inputLandline').val(); //Get the value of last name textbox

              var cellphone_number = $('#inputCell').val(); //Get the value of last name textbox
              var fax_number = $('#inputFax').val();  //THIS WAS CHANGED
              var email_address = $('#inputemail').val();  //THIS WAS CHANGED

              var experience1 = $('#inputExperience1').val(); //Get the value of first name textbox
              var period1 = $('#inputPeriod1').val(); //Get the value of last name textbox
              var duration1 = $('#inputDuration1').val(); //Get the value of last name textbox

              var grand_total = $('#inputGrandTotal').val(); //Get the value of last name textbox
              var qualification_year = $('#inputQualification_Year').val(); //Get the value of last name textbox
              var disabled_person = $('#chkbxIsDisabled').val(); //Get the value of last name textbox
              var disability_details = $('#inputDisabilitiesDetails').val(); //Get the value of last name textbox
              var application_for_transfer = $('#chkbxApplicationForTransfer').val(); //Get the value of last name textbox
              var motivation_for_transfer_attached = $('#chkbxMotivationTransfer').val(); //Get the value of last name textbox
              var reason_for_transfer = $('#inputTransferReason').val(); //Get the value of last name textbox
              var remarks = $('#inputRemarks').val(); //Get the value of last name textbox
              var reason_for_dq = $('#inputDQReason').val(); //Get the value of last name textbox
              var acting_experience = $('#chkbxActingExperience').val(); //Get the value of last name textbox
              var managerial_experience = $('#chkbxManagerialExperience').val(); //Get the value of last name textbox
                  
              var applied_for_rcp = $('#chkbxRCP').val(); //Get the value of last name textbox
              var applied_for_reg_mag	 = $('#chkbx_Reg_Mag').val(); //Get the value of last name textbox
              var applied_for_chief_mag = $('#chkbx_Chief_Mag').val(); //Get the value of last name textbox
              var applied_for_snr_je = $('#chkbxSnr_JE').val(); //Get the value of last name textbox
              var is_shortlisted = $('#inputIs_shortlisted').val(); //Get the value of last name textbox

            $.ajax({
            url:"action.php",   //Request send to "action.php page"
            method:"POST",    //Using of Post method for send data
            data:{id:id,
                  action:action,
                  title:title,
                  full_names:full_names,
                  surname:surname,
                  age:age,
                  gender:gender,
                  id_number:id_number,
                  race:race,
                  current_rank:current_rank,
                  current_headquarters:current_headquarters,
                  landline_number:landline_number,
                  cellphone_number:cellphone_number,
                  fax_number:fax_number,
                  email_address:email_address,
                  experience1:experience1,
                  period1:period1,
                  duration1:duration1,
                  grand_total:grand_total,
                  qualification_year:qualification_year,
                  disabled_person:disabled_person,
                  disability_details:disability_details,
                  application_for_transfer:application_for_transfer,
                  motivation_for_transfer_attached:motivation_for_transfer_attached,  
                  reason_for_transfer:reason_for_transfer,
                  remarks:remarks,
                  reason_for_dq:reason_for_dq,
                  acting_experience:acting_experience,
                  managerial_experience:managerial_experience,
                  applied_for_rcp:applied_for_rcp,
                  applied_for_reg_mag:applied_for_reg_mag,
                  applied_for_chief_mag:applied_for_chief_mag,
                  applied_for_snr_je:applied_for_snr_je,
                  is_shortlisted:is_shortlisted}, //Send data to server 
            dataType:"json",   //Here we have define json data type, so server will send data in json format.
            success:function(data){
              $('#customerModal').modal('show');   //It will display modal on webpage
              $('.modal-title').text("Update Records"); //This code will change this class text to Update records
              $('#action').val("Update");     //This code will change Button value to Update
              $('#shorttest_id').val(id);     //It will define value of id variable to this customer id hidden field
                  $('#inputTitle').val(data.title);  //It will assign value to modal first name texbox
                  $('#inputFullNames').val(data.full_names);  //It will assign value of modal last name textbox
                  $('#inputSurname').val(data.surname);  //It will assign value of modal last name textbox
                  $('#inputAge').val(data.age); //Get the value of last name textbox
                  $('#inputGender').val(data.gender); //Get the value of last name textbox
                  $('#inputId').val(data.id_number); //Get the value of last name textbox
                  $('#inputRace').val(data.race); //Get the value of last name textbox

                  $('#inputCurrentRank').val(data.current_rank); //Get the value of last name textbox
                  $('#inputCurrentHQ').val(data.current_headquarters); //Get the value of last name textbox
                  $('#inputLandline').val(data.landline_number); //Get the value of last name textbox
                  $('#inputCell').val(data.cellphone_number); //Get the value of last name textbox
                  $('#inputFax').val(data.fax_number);     //It will define value of id variable to this customer id hidden field
                  $('#inputemail').val(data.email_address);  //It will assign value to modal first name texbox
                  $('#inputExperience1').val(data.experience1);  //It will assign value of modal last name textbox
                  $('#inputPeriod1').val(data.period1);  //It will assign value of modal last name textbox
                  $('#inputDuration1').val(data.duration1); //Get the value of last name textbox
                  $('#inputGrandTotal').val(data.grand_total); //Get the value of last name textbox
                  $('#inputQualification_Year').val(data.qualification_year); //Get the value of last name textbox
                  $('#chkbxIsDisabled').val(data.disabled_person); //Get the value of last name textbox
                  $('#inputDisabilitiesDetails').val(data.disability_details); //Get the value of last name textbox
                  $('#chkbxApplicationForTransfer').val(data.application_for_transfer); //Get the value of last name textbox
                  $('#chkbxMotivationTransfer').val(data.motivation_for_transfer_attached); //Get the value of last name textbox
                  $('#inputTransferReason').val(data.reason_for_transfer); //Get the value of last name textbox
                  $('#inputRemarks').val(data.remarks);     //It will define value of id variable to this customer id hidden field
                  $('#inputDQReason').val(data.reason_for_dq);  //It will assign value to modal first name texbox
                  $('#chkbxActingExperience').val(data.acting_experience);  //It will assign value of modal last name textbox
                  $('#chkbxManagerialExperience').val(data.managerial_experience);  //It will assign value of modal last name textbox
                  $('#chkbxRCP').val(data.applied_for_rcp);  //It will assign value of modal last name textbox
                  $('#chkbx_Reg_Mag').val(data.applied_for_reg_mag);  //It will assign value of modal last name textbox
                  $('#chkbx_Chief_Mag').val(data.applied_for_chief_mag);  //It will assign value of modal last name textbox
                  $('#chkbxSnr_JE').val(data.applied_for_snr_je);  //It will assign value of modal last name textbox
                  $('#inputIs_shortlisted').val(data.is_shortlisted);  //It will assign value of modal last name textbox
                }
            
            });
            
          });

    //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
          $(document).on('click', '.delete', function(){
            var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
            if(confirm("Are you sure you want to remove this data?")) //Confim Box if OK then
            {
            var action = "Delete"; //Define action variable value Delete
            $.ajax({
              url:"action.php",    //Request send to "action.php page"
              method:"POST",     //Using of Post method for send data
              data:{id:id, action:action}, //Data send to server from ajax method
              success:function(data)
              {
              fetchUser();    // fetchUser() function has been called and it will load data under divison tag with id result
              alert(data);    //It will pop up which data it was received from server side
              }
            })
            }
            else  //Confim Box if cancel then 
            {
            return false; //No action will perform
            }
          });

    //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
          $(document).on('click', '.deleteShort', function(){
            var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
            if(confirm("Are you sure you want to remove this data?")) //Confim Box if OK then
            {
            var action = "deleteShort"; //Define action variable value Delete
            $.ajax({
              url:"action.php",    //Request send to "action.php page"
              method:"POST",     //Using of Post method for send data
              data:{id:id, action:action}, //Data send to server from ajax method
              success:function(data)
              {
              fetchUser();    // fetchUser() function has been called and it will load data under divison tag with id result
              alert(data);    //It will pop up which data it was received from server side
              }
            })
            }
            else  //Confim Box if cancel then 
            {
            return false; //No action will perform
            }
          });

        /* Reg Court Pres Section */
          $('#chkbxRCP').click(function(){
            console.log("RCP box");
              $("#RCP_Section").toggle(this.checked);
          });

        /* Reg Court Pres Cities */
            $('#chkbx_RCP_Gauteng').click(function(){
                $("#RCP_Gauteng_Cities").toggle(this.checked);
            });

            $('#chkbx_RCP_WP').click(function(){
                $("#RCP_WP_Cities").toggle(this.checked);
            });

            $('#chkbx_RCP_KZN').click(function(){
                $("#RCP_KZN_Cities").toggle(this.checked);
            });

        
        /* Chief Mag Section */
            $('#chkbx_Chief_Mag').click(function(){
                $("#Snr_Chief_Mag_Section").toggle(this.checked);
            });

        /* Chief Mag Cities */
            $('#chkbxChief_Mag_Gauteng').click(function(){
                $("#Chief_Mag_Gauteng_Cities").toggle(this.checked);
            });

            $('#chkbxChief_Mag_WP').click(function(){
                $("#Chief_Mag_WP_Cities").toggle(this.checked);
            });

            $('#chkbxChief_Mag_KZN').click(function(){
                $("#Chief_Mag_KZN_Cities").toggle(this.checked);
            });

        /* Snr JE Section */
            $('#chkbxSnr_JE').click(function () {
                $("#Snr_JE_Section").toggle(this.checked);
            });

        /* Snr JE Cities */
            $('#chkbxSnr_JE_Gauteng').click(function() {
                $("#Snr_JE_Gauteng_Cities").toggle(this.checked);
            });

            $('#chkbxSnr_JE_WP').click(function() {
                $("#Snr_JE_WP_Cities").toggle(this.checked);
            });

            $('#chkbxSnr_JE_KZN').click(function() {
                $("#Snr_JE_KZN_Cities").toggle(this.checked);
            });

        /* Reg Mag Sections */
            $('#chkbx_Reg_Mag').click(function(){
                $("#Reg_Mag_Section").toggle(this.checked);
            });

        /* Reg Mag Cities*/
            $('#chkbxReg_Mag_Gauteng').click(function() {
                $("#Reg_Mag_Gauteng_Cities").toggle(this.checked);
            });

            $('#chkbxReg_Mag_WP').click(function() {
                $("#Reg_Mag_WP_Cities").toggle(this.checked);
            });

            $('#chkbxReg_Mag_KZN').click(function() {
                $("#Reg_Mag_KZN_Cities").toggle(this.checked);
            });

        /*This section helps with connecting buttons to php back end
            $('#btnTesting').click(function () {
                var action = "Testing";
                download_csv
                $.ajax({
                    url : "action.php",
                    method: "POST",
                    data:{action},
                    success:function(data){
                    //$('#result').html(data);
                    console.log("Working")
                    }
                });
            }); */

        /*This section helps with connecting buttons to php back end */
          /* $('#download_csv').click(function () {
            var action = "download_csv";
            
            $.ajax({
                url : "action.php",
                method: "POST",
                data:{action},
                success:function(data){
                  alert("Downloaded");
                }
            });
           // console.log("level unlocked");
          }); */

        
    //Close Candidate Modal
        $('#closeCandidate').click(function(){
                $('#customerModal').modal('hide');
        });
     
    //Close Filter Modal
        $('#closeFilter').click(function(){
                $('#Modal_Filter').modal('hide');
        });
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>