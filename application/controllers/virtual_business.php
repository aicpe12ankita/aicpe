<?php $this->load->view('admin/includes/admin_header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/charts/KoolChart.css"> 
    <main>
        <div class="row">
            <div class="col-12">
                <h1>AICPE - Institution Business Chart</h1>
                
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4></h4>
                        <form>
                            <div class="form-group">
                                <label>Select Institution</label>
                                <select class="form-control select2-single">
                                    <option>Test Institution 1</option>
                                    <option>Test Institution 2</option>
                                    <option>Test Institution 3</option>
                                    <option>Test Institution 4</option>
                                    <option>Test Institution 5</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div id="chartHolder" style="height:300px; width:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts/KoolChartLicense.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts/KoolChart.js"></script>
<script type="text/javascript">
    var chartVars = "KoolOnLoadCallFunction=chartReadyHandler";

KoolChart.create("chart1", "chartHolder", chartVars, "100%", "100%");

function chartReadyHandler(id) {
  document.getElementById(id).setLayout(layoutStr);
  document.getElementById(id).setData(chartData);
}

var layoutStr =
  '<KoolChart backgroundColor="#FFFFFF"  borderStyle="none">'
   +'<Options>'
    +'<Caption text="Displays images based on target and actual values." fontFamily="Malgun Gothic"/>'
   +'</Options>'
   +'<NumberFormatter id="numfmt" useThousandsSeparator="true"/>' 
   +'<Combination2DChart showDataTips="true">'
    +'<horizontalAxis>'
     +'<CategoryAxis categoryField="Month" padding="1"/>' 
    +'</horizontalAxis>'
    +'<verticalAxis>'
     +'<LinearAxis  formatter="{numfmt}" maximum="100" interval="10"/>'
    +'</verticalAxis>'
    +'<series>'
     +'<VTarget2DResultSeries id="result" columnWidthRatio="0.54" labelPosition="inside" yField="Result" displayName="Result" color="#ffffff" htmlJsFunction="userElementFunc">'
      +'<showDataEffect>'
       +'<SeriesInterpolate/>' 
      +'</showDataEffect>'
     +'</VTarget2DResultSeries>'
     +'<VTarget2DGoalSeries id="goal" columnWidthRatio="0.54" labelPosition="outside" yField="Goal" displayName="Goal" color="#f7921e" htmlJsFunction="userElementFunc">'
      +'<showDataEffect>'
       +'<SeriesInterpolate/>' 
      +'</showDataEffect>'
      +'<fill>'
       +'<SolidColor color="#f7921e"/>'
      +'</fill>'
     +'</VTarget2DGoalSeries>'
    +'</series>'
   +'</Combination2DChart>'
  +'</KoolChart>';

var chartData =
  [{"Month":"Jan","Goal":45,"Result":43},
  {"Month":"Feb","Goal":65.8,"Result":82.1},
  {"Month":"Mar","Goal":30,"Result":40},
  {"Month":"Apr","Goal":63,"Result":30},
  {"Month":"May","Goal":60.8,"Result":53.4},
  {"Month":"Jun","Goal":45.8,"Result":70.4},
  {"Month":"Jul","Goal":26,"Result":18},
  {"Month":"Aug","Goal":55,"Result":28},
  {"Month":"Sep","Goal":75,"Result":62},
  {"Month":"Oct","Goal":60,"Result":35}];

function userElementFunc(id, index, data, values){
  var src,
   goalValue = data.Goal,
   resultValue = data.Result;
  
  if(id == "result" && resultValue > goalValue){
   src = "https://www.koolchart.com/demo/KoolChart/Assets/Images/smile.gif";
  }else if(id == "goal" && goalValue - resultValue > 20){
   src = "https://www.koolchart.com/demo/KoolChart/Assets/Images/cry.gif";
  }

  if(src){
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