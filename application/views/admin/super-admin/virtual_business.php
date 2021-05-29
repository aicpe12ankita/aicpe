<?php $this->load->view('admin/includes/admin_header'); ?>
<script src="https://www.koolchart.com/demo/LicenseKey/KoolChartLicense.js"></script>
  <script src="https://www.koolchart.com/demo/KoolChart/JS/KoolChart.js"></script>
  <link rel="stylesheet" href="https://www.koolchart.com/demo/KoolChart/Assets/Css/KoolChart.css"/>
<style type="text/css">.imageDiv{ width:100%; height:100%;}</style> 
    <main>
        <div class="row">
            <div class="col-12">
                <h1>Virtual Business Report</h1>
                
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Set Target</h4>
                        <form>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="month[]">
                                            <?php  for($i=1; $i<13;$i++){ ?>
                                                 <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>Month <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                   <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="year[]">
                                            <?php $dt = date('Y') + 10;
                                           for($i=$dt; $i>2015;$i--){ ?>
                                                 <option <?php $tmp_dt = date('Y'); if($i==$tmp_dt){ echo "selected"; } ?>><?php echo $i; ?></option>
                                           <?php } ?>
                                        </select>
                                        <span>Year <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <input type="text" class="form-control" name="target[]" />
                                        <span>Target <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="month[]">
                                            <?php  for($i=1; $i<13;$i++){ ?>
                                                 <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>Month <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                   <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="year[]">
                                            <?php $dt = date('Y') + 10;
                                           for($i=$dt; $i>2015;$i--){ ?>
                                                 <option <?php $tmp_dt = date('Y'); if($i==$tmp_dt){ echo "selected"; } ?>><?php echo $i; ?></option>
                                           <?php } ?>
                                        </select>
                                        <span>Year <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <input type="text" class="form-control" name="target[]" />
                                        <span>Target <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="month[]">
                                            <?php  for($i=1; $i<13;$i++){ ?>
                                                 <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>Month <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                   <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="year[]">
                                            <?php $dt = date('Y') + 10;
                                           for($i=$dt; $i>2015;$i--){ ?>
                                                 <option <?php $tmp_dt = date('Y'); if($i==$tmp_dt){ echo "selected"; } ?>><?php echo $i; ?></option>
                                           <?php } ?>
                                        </select>
                                        <span>Year <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <input type="text" class="form-control" name="target[]" />
                                        <span>Target <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="month[]">
                                            <?php  for($i=1; $i<13;$i++){ ?>
                                                 <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>Month <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                   <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="year[]">
                                            <?php $dt = date('Y') + 10;
                                           for($i=$dt; $i>2015;$i--){ ?>
                                                 <option <?php $tmp_dt = date('Y'); if($i==$tmp_dt){ echo "selected"; } ?>><?php echo $i; ?></option>
                                           <?php } ?>
                                        </select>
                                        <span>Year <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <input type="text" class="form-control" name="target[]" />
                                        <span>Target <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="month[]">
                                            <?php  for($i=1; $i<13;$i++){ ?>
                                                 <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>Month <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                   <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="year[]">
                                            <?php $dt = date('Y') + 10;
                                           for($i=$dt; $i>2015;$i--){ ?>
                                                 <option <?php $tmp_dt = date('Y'); if($i==$tmp_dt){ echo "selected"; } ?>><?php echo $i; ?></option>
                                           <?php } ?>
                                        </select>
                                        <span>Year <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <input type="text" class="form-control" name="target[]" />
                                        <span>Target <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="month[]">
                                            <?php  for($i=1; $i<13;$i++){ ?>
                                                 <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>Month <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                   <label class="form-group has-float-label">
                                        <select class="form-control select2-single" data-width="100%" name="year[]">
                                            <?php $dt = date('Y') + 10;
                                           for($i=$dt; $i>2015;$i--){ ?>
                                                 <option <?php $tmp_dt = date('Y'); if($i==$tmp_dt){ echo "selected"; } ?>><?php echo $i; ?></option>
                                           <?php } ?>
                                        </select>
                                        <span>Year <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-group has-float-label">
                                        <input type="text" class="form-control" name="target[]" />
                                        <span>Target <span class="mandetory">*</span></span>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="ubmit"> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div id="chartHolder" style="height:500px; width:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>

 <script>
      var chartVars = "KoolOnLoadCallFunction=chartReadyHandler";
      KoolChart.create("chart1", "chartHolder", chartVars, "100%", "100%");
      function chartReadyHandler(id) {  
        document.getElementById(id).setLayout(layoutStr);  
        document.getElementById(id).setData(chartData);
      }
  var layoutStr =  '<KoolChart backgroundColor="#FFFFFF"  borderStyle="none">'   +'<Options>'    +'<Caption text="Target And Actual Business Report." fontFamily="Malgun Gothic"/>'   +'</Options>'   +'<NumberFormatter id="numfmt" useThousandsSeparator="true"/>'    +'<Combination2DChart showDataTips="true">'    +'<horizontalAxis>'     +'<CategoryAxis categoryField="Month" padding="1"/>'     +'</horizontalAxis>'    +'<verticalAxis>'     +'<LinearAxis  formatter="{numfmt}" maximum="100" interval="10"/>'    +'</verticalAxis>'    +'<series>'     +'<VTarget2DResultSeries id="result" columnWidthRatio="0.54" labelPosition="inside" yField="Result" displayName="Result" color="#ffffff" htmlJsFunction="userElementFunc">'      +'<showDataEffect>'       +'<SeriesInterpolate/>'       +'</showDataEffect>'     +'</VTarget2DResultSeries>'     +'<VTarget2DGoalSeries id="goal" columnWidthRatio="0.54" labelPosition="outside" yField="Goal" displayName="Goal" color="#f7921e" htmlJsFunction="userElementFunc">'      +'<showDataEffect>'       +'<SeriesInterpolate/>'       +'</showDataEffect>'      +'<fill>'       +'<SolidColor color="#f7921e"/>'      +'</fill>'     +'</VTarget2DGoalSeries>'    +'</series>'   +'</Combination2DChart>'  +'</KoolChart>';
  var chartData =  [{"Month":"Jan","Goal":45,"Result":43},  {"Month":"Feb","Goal":65.8,"Result":82.1},  {"Month":"Mar","Goal":30,"Result":40},  {"Month":"Apr","Goal":63,"Result":30},  {"Month":"May","Goal":60.8,"Result":53.4},  {"Month":"Jun","Goal":45.8,"Result":70.4}];
  function userElementFunc(id, index, data, values){ 
   var src,   goalValue = data.Goal,   
   resultValue = data.Result;   
    if(id == "result" && resultValue > goalValue){  
     src = "https://www.koolchart.com/demo/KoolChart/Assets/Images/smile.gif";  
  }else if(id == "goal" && goalValue - resultValue > 20){ 
    src = "https://www.koolchart.com/demo/KoolChart/Assets/Images/cry.gif"; 
     }  if(src){   
      var div = document.createElement("div");  
       div.className = "imageDiv";   
       div.style.background = "url(" + src + ") center/100% 100% no-repeat";  
        return {    
          content : div,   
          width : 43,   
          height : 43,  
          leftOffset : -1, 
          topOffset : -38  
           }; 
      } 
  }
</script>