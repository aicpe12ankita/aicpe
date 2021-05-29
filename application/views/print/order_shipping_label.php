<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Invoice</title>
        <style type="text/css">
        table {
        padding:0;
        margin:0;
        border-collapse: collapse;
        }
        table th {
        font-weight:bold;
        }
        @page {
        size: 2in 3in landscape;   /* auto is the initial value */
        margin: 15px;  /* this affects the margin in the printer settings */
        }
        .logocont img {
        max-width: 50%;
        height: auto;
        }
        .order-print {
        background-color: #fff;
        padding:0px;
        margin-top:0px;
        margin-bottom:0px;
        font-family: "arial", sans-serif;
        }
        .order-print p {
        font-size: 10px;
        margin: 0;
        line-height: 18px;
        }
        .order-print h4 {
        font-size: 11px;
        margin: 0;
        }
        .order-print .fa-facebook-official {
        font-size: 10px;
        }
        .order-print .Thanks-note {
        font-size:10px;
        text-align: center;
        margin: 0px 0 10px;
        }
        .order-print .margin-top20 {
        margin-top:10px;
        }
        /*.order-print table{ border-collapse: collapse; -webkit-print-color-adjust: exact;}*/
        .order-print table td {
        font-size: 10px;
        padding:5px;
        -webkit-print-color-adjust: exact;
        }
        .order-print table th {
        font-size: 10px;
        padding:5px;
        }
        .sku_table {
        margin-top: 15px;
        width: 100%;
        }
        .order-print .gift-message {
        margin: 10px 0;
        float: left;
        width: 100%;
        }
        .order-print .imp-info {
        font-size: 10px;
        }
        .order-print .text-center {
        text-align: center;
        }
        .page-break {
        display: block;
        margin:0;
        border-bottom:none;
        page-break-after: always;
        -webkit-print-color-adjust: exact;
        }
        </style>
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
        jQuery(document).ready(function () {
        //var heightval = jQuery(document).height();
        window.print();
        // var skuh = jQuery('.sku_table').height();
        // var currpos = jQuery('.sku_table').offset().top;
        // var calcH = currpos + skuh;
        // if(calcH >= 400) {
        // }
        });
        </script>
    </head>
    <body>        
        <?php 
        if(isset($print_data) && count($print_data) > 0)
        {
            foreach($print_data as $value => $row)
            {
        ?>
                <div class="container order-print" style="width: 600px;">
                    <div style="position: inherit; width: 150px;text-align: center;font-size: 11px;font-weight: bold; "> 
                        <?php $upc = $row['upc']; ?>
                        <span style="margin-bottom:0px;"><?php echo $row['sku']; ?></span>
                       <span>Vikki chalkley <br>
                        33 bingen rd,<br>
                        Hitchin,<br>
                        Herts, SG5 2PP,<br>
                        United Kingdom</span>
                    </div>
                </div>
                <div class="page-break"></div>
        <?php     
            }        
        } ?>
    </body>
</html>