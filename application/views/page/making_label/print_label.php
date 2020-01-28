

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
                margin: 0px;
            }

            table, td, th {
                border: 1px solid black;
                font-size: 8px;
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
        <?php foreach($label as $l){?>
        <div style="width: 340px; height: 500px; border: 1px solid black; float: left; padding: 5px; margin: 10px;">
            <div style="width: 80%; float: left;">
                <img src="<?php echo base_url() ?>assets/ismu-logo.png" width="80" class="header-brand-img" alt="lavalite">
                <p style="font-weight: bold; font-size: 17px;"><u>PT. INDOSEIKI METALUTAMA</u></p>
                <p style="font-size: 14px;">Partner in Forging and Fasteners</p>
            </div>
              
            <div class="demo" style="width: 20%; float: left;">
               <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo $l->serial_number?>&choe=UTF-8',60,55,40,0,'PNG'" width="70" style="margin:2px; float: right; position: relative; top: 0; left: 0;">
               <!-- <img src="<?php echo base_url('assets/phpqrcode/logo.png')?>" style="position: absolute;"  width="15"/> -->
                <center style="font-size: 8px;"><?php echo $l->serial_number?></center>
            </div>
            <div style="width: 100%; float: left;">
                <table style="border-collapse: collapse;">
                    <tr>
                        <td colspan="3" style="height: 30px; width: 60px;">
                            <p><center style="font-weight: bold; font-size: 20px;">SUBCONT PROCESS</center></p>
                            <center style="font-size: 20px;"><?php echo $l->vendor_code?> - <?php echo $l->vendor_name?></center>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 30px; width: 160px;">Del Date <br><center style="font-size: 20px;"><?php $t = explode(" ",$l->spk_start); echo $t[0]?></center></td>
                        <td colspan="2" style="height: 30px; width: 60px;">Finish Date <br><center style="font-size: 20px;"><?php $s = explode(" ",$l->spk_end); echo $s[0]?></center></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="height: 30px; width: 60px;">
                            Item No :
                            <p style="font-weight: bold; font-size: 20px;"><?php echo $l->item_id?></p>
                            Description :
                            <p style="font-weight: bold; font-size: 20px;"><?php echo $l->item_name?></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 30px; width: 60px;">SPK No <br><center style="font-size: 20px;"><?php echo $l->spk_no?></center></td>
                        <td colspan="2" style="height: 30px; width: 60px;">
                            Heat No1 <br><p style="font-size: 20px;"><?php echo $l->heatno_a?></p>
                            Heat No2 <br><p style="font-size: 20px;"><?php echo $l->heatno_b?></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="height: 30px; width: 60px;">
                            SPK No :
                            <p style="font-weight: bold; font-size: 16px;"><?php echo $l->item_name?></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 30px; width: 60px;">Process Name <br><center style="font-size: 20px;"><?php echo $l->process_name?></center></td>
                        <td style="height: 30px; width: 60px;">Qty <br><center style="font-size: 20px;"><?php echo $l->qty_batch?></center></td>
                        <td style="height: 30px; width: 60px;">Weight <br><center style="font-size: 20px;"><?php echo $l->weight?></center></td>
                    </tr>
                    <tr>
                        <td style="width: 60px;"><center style="font-size: 12px;">Note: QC Pass Stamp Required</center></td>
                        <td colspan="2" style="width: 60px;"><center style="font-size: 12px;">PIC SUBCONT Stamp here</center></td></td>
                    </tr>
                    <tr>
                        <td style="height: 100px; width: 60px;"></td>
                        <td colspan="2" style="height: 100px; width: 60px;"></td></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php } ?>
    </body>
</html>
<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/qr-code-logo-label/dist/jquery-qrcode.js"></script>
<script>
            $(document).ready(function() {
                $(".demo").qrcode({
                    render:'div',

            text:'https://www.jqueryscript.net',
            mode: 0,
            image:"assets/phpqrcode/logo.png",
            size: 50

                });
            });
   

</script> -->
