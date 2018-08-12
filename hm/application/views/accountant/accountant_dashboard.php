<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accountant</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/assets1/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/assets1/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/assets1/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/bootstrap-clockpicker.min.css">

   <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/pres/css/style.css' />
  <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/pres/css/print.css' media="print" />
  <script type='text/javascript' src='<?php echo base_url();?>assets/pres/js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='<?php echo base_url();?>assets/pres/js/example.js'></script>


   <style type="text/css">
     
     .logo_img{
      height:80px;


     }
     .pb{

        width: 80px;
        height: 40px;
        background-color: #214761;
        margin-left: 550px;
        color: white;

     }
   </style>
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url();?>assets/assets1/img/images.jpg" class="logo_img"/>

                    </a>
                    
                </div>


              
                <span class="logout-spn" >

                
                  <div class="btn-group ">
  <a class="btn btn-primary" href="#"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span></i> </a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="fa fa-caret-down fa-3x " title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a></li>
    <li><a href="<?php echo base_url();?>Login/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="fa fa-unlock"></i> Make admin</a></li>
  </ul>
</div>
</a>
                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="<?php echo base_url();?>Admin/dashboard_content" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                   

                    <li>
                        <a href="<?php echo base_url();?>Accountant/notice_board"><i class="fa fa-edit "></i>Notice Board</a>
                    </li>


                    <li>
                        <a href="<?php echo base_url();?>Accountant/show_patient"><i class="fa fa-edit "></i>Patient</a>
                    </li>


                    <li>
                        <a href="<?php echo base_url();?>Accountant/account_manager"><i class="fa fa-edit "></i>Account Manager</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>Accountant/message"><i class="fa fa-edit "></i>Message</a>
                    </li>
                    
                    
                    
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h3>DASHBOARD:
                      
                      <?php 
                $name=$this->session->userdata('name');
                print_r($name);

                ?></h3> 
                       
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
         <div class="panel panel-default ">
      <div class="panel-heading"></div>
      <div class="panel-body">


        <?php echo $contents;?>
        
</div>
    </div>

                     
                  </div>
              </div>
                 <!-- /. ROW  -->   
				   
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018 www.kabirit.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.kabirit.com</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/assets1/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/assets1/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/assets1/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/assets1/js/bootbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
  .find('input').change(function(){
    console.log(this.value);
  });
var input = $('#single-input').clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'
});

$('.clockpicker-with-callbacks').clockpicker({
    donetext: 'Done',
    init: function() { 
      console.log("colorpicker initiated");
    },
    beforeShow: function() {
      console.log("before show");
    },
    afterShow: function() {
      console.log("after show");
    },
    beforeHide: function() {
      console.log("before hide");
    },
    afterHide: function() {
      console.log("after hide");
    },
    beforeHourSelect: function() {
      console.log("before hour selected");
    },
    afterHourSelect: function() {
      console.log("after hour selected");
    },
    beforeDone: function() {
      console.log("before done");
    },
    afterDone: function() {
      console.log("after done");
    }
  })
  .find('input').change(function(){
    console.log(this.value);
  });

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
  // Have to stop propagation here
  e.stopPropagation();
  input.clockpicker('show')
      .clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
  $('input').prop('readOnly', true);
}
</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
<script type="text/javascript">
hljs.configure({tabReplace: '    '});
hljs.initHighlightingOnLoad();
</script>
   <script>
       


       $(document).on("click","#delete",function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you want to delete !!",function(confirmed){
            if(confirmed){
                window.location.href=link;
            };
        });
       });

         $(document).on("click","#edit",function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you want to Update !!",function(confirmed){
            if(confirmed){
                window.location.href=link;
            };
        });
       });

   </script>
   <script type="text/javascript">
     

     n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
   </script>
</body>
</html>
