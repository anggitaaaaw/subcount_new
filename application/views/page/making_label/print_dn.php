<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Subcount Process | PT Indo Seiki Metal Utama</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            p {
                margin: 5px;
            }

            table, td, th {
                border: 1px solid black;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                height: 20px;
            }
        </style>
    </head>

    <body>
        
        <div style="width: 700px; height: 500px; padding: 5px;">
            <div style="width: 200px; float: left;">
                <img src="<?php echo base_url() ?>assets/ismu-logo.png" width="180" class="header-brand-img" alt="lavalite">
            </div>
            <div style="width: 400px; padding: 10px; float: left;">
                <span style="font-size: 18px; margin: 0px; font-weight: bold;">PT. INDOSEIKI METAL UTAMA</span><br>
                <span style="font-size: 12px; margin: 0px;">Kawasan Industri Jatake, Jl Industri Raya III Blok AD No. 23-B,</span><br>
                <span style="font-size: 12px; margin: 0px;">Bunder, Tangerang, Banten 15710</span>
            </div>
            <div style="width: 690px; float: left;">
                <hr>
                <center style="font-weight: bold; font-size: 24px;">DELIVERY NOTE</center>
            </div>
            <div style="width: 200px; padding: 10px; float: left;">
                <span style="font-size: 12px; margin: 0px;">Gate Name : Subcount Gate</span><br>
                <span style="font-size: 12px; margin: 0px;">Driver Name : <?php echo $label[0]->driver_name?></span><br>
                <span style="font-size: 12px; margin: 0px;">Plat No : <?php echo $label[0]->plat_no?></span>
                <div style="width: 100%; padding: 8px; border: 1px solid black;">
                    <span style="font-size: 12px; margin: 0px;">Deliver to :</span><br>
                    <span style="font-size: 12px; margin: 0px;">Attention Mr. </span><br>
                    <span style="font-size: 12px; margin: 0px;"><?php echo $label[0]->vendor_name?></span><br>
                    <span style="font-size: 12px; margin: 0px;"><?php echo $label[0]->vendor_address?></span><br>
                </div>
            </div>
            <div style="width: 150px; padding: 10px; float: right;">
                <span style="font-size: 12px; margin: 0px;">DN Date : <?php echo date("Y-m-d") ?></span><br>
                <span style="font-size: 12px; margin: 0px;">DN No : <?php echo $label[0]->dn_no?></span><br>
                <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=<?php echo $label[0]->dn_no?>&choe=UTF-8',60,55,40,0,'PNG'" width="100%" style="margin:0px;">
            </div>
            
            <div style="width: 100%; float: left;">
                <table style="border-collapse: collapse;">
                    <tr>
                        <th>No.</th>
                        <th>SPK No</th>
                        <th>Batch No</th>
                        <th>Item Code</th>
                        <th>Description</th>
                        <th>Heatno</th>
                        <th>Qty</th>
                        <th>Uom</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php $no = 1;
                foreach($label as $l){ ?>
                    <tr>
                        <td style="height: 20px; font-size: 11px; text-align: center;"><?php echo $no?></td>
                        <td style="height: 20px; font-size: 11px;"><?php echo $l->spk_no?></td>
                        <td style="height: 20px; font-size: 11px;"><?php echo $l->batch_qty?></td>
                        <td style="height: 20px; font-size: 11px;"><?php echo $l->item_code?></td>
                        <td style="height: 20px; font-size: 11px;"><?php echo $l->item_name?></td>
                        <td style="height: 20px; font-size: 11px;"><?php echo $l->heatno_a?></td>
                        <td style="height: 20px; font-size: 11px; text-align: center;"><?php echo $l->lpp_qty?></td>
                        <td style="height: 20px; font-size: 11px;"></td>
                    </tr>
                <?php $no++; } ?>
                    <tr>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                    </tr>
                    <tr>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <th style="width:100px;">Receive By</th>
                        <th style="width:100px;">Driver/Expedition</th>
                        <th style="width:100px;">Warehouse</th>
                        <th style="width:100px;">PIC</th>
                    </tr>
                    <tr>
                        <th style="height:100px;"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th align="left">Name:</th>
                        <th align="left">Name:</th>
                        <th align="left">Name:</th>
                        <th align="left">Name:</th>
                    </tr>
                    <tr>
                        <th align="left">Date:</th>
                        <th align="left">Date:</th>
                        <th align="left">Date:</th>
                        <th align="left">Date:</th>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>