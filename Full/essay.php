
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/rport.css">
</head>
<body>
    <?php
    include('report/conn.php');
    $select=mysqli_query($conn,"SELECT * FROM `location`");
    $row=mysqli_fetch_array($select);

    $std=mysqli_query($conn,"SELECT * FROM student");
    $srow=mysqli_fetch_array($std);

    $report=mysqli_query($conn,"SELECT * FROM report");
    $rrow=mysqli_fetch_array($report);
    ?>
<section style="border: 2px solid green">
                <div class="content">
                    <div class="outline" st>
                       <div class="logo2">
                        <img src="../pinterest/rtb.jpg" alt="">
                     <div class="header">
                    <label ><?php echo $row['school_name'] ?></label><br>
                    <label ><?php echo $row['district'] ?></label><br>
                    <label ><?php echo $row['email'] ?></label><br>
                    <label >TEL: <?php echo $row['tel'] ?></label><br>
                    <label ><?php echo $row['assess_kind'] ?></label><br><br>
                </div>
                <img src="../pinterest/logo.jpg" alt="">
                </div>
                    <hr>
                    <div class="header2">
                <div class="rtb">
                    <label >Names: <?php echo $srow['name_student'] ?></label><br>
                    <label >Level: <?php echo $srow['level'] ?></label><br>
                </div>
                <div class="term">
                    <label >Term: <?php echo $srow['Term'] ?></label><br><br>
                </div>
                <div class="middle">
                    <label >Certificate: <?php echo $srow['cert'] ?></label><br>
                    <label >Sector: <?php echo $srow['sector'] ?></label><br>
                    <label >Sub-sector: <?php echo $srow['subsector'] ?></label><br>
                    <label >RTQF Level: <?php echo $srow['rtqf_level'] ?></label><br><br>
                </div>
                    </div>
                    <div class="status">           
                <label ><?php echo $rrow['status_'] ?></label>
                    </div>
                    <hr>
                    <table border="2" class="table1">
                <tr>
                    <td colspan="5"><b>Behaviour</b></td>
                    <td colspan="4">1<sup>st</sup>Term:<?php echo $rrow['behaviour1'] ?></td>
                    <td colspan="4">2<sup>nd</sup>Term:<?php echo $rrow['behaviour2'] ?></td>
                    <td colspan="4">3<sup>rd</sup>Term:<?php echo $rrow['behaviour3'] ?></td>
                    <td colspan="3">All Term:</td>
                </tr>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Module Title</th>
                    <th colspan="3">Max</th>
                    <th colspan="4">1 st term</th>
                    <th colspan="4">2 nd term</th>
                    <th colspan="4">3 rd term</th>
                    <th colspan="3">Annual</th>
                </tr>
                <tr>
                    <th>F.Ass</th>
                    <th>I.Ass</th>
                    <th>Total</th>
                    <th>F.Ass</th>
                    <th>I.Ass</th>
                    <th>C.Ass</th>
                    <th>Total</th>
                    <th>F.Ass</th>
                    <th>I.Ass</th>
                    <th>C.Ass</th>
                    <th>Total</th>
                    <th>F.Ass</th>
                    <th>I.Ass</th>
                    <th>C.Ass</th>
                    <th>Total</th>
                    <th>Annual(%)</th>
                    <th>Re-assessment(%)</th>
                    <th>Decision</th>
                </tr>
                <?php
                $mark=mysqli_query($conn,"SELECT * FROM report")
                ?>
                <tr>
                    <td><?php echo $rrow['module_code']?></td>
                    <td><?php echo $rrow['module_name']?></td>
                    <td><?php echo $rrow['fasscredit']?></td>
                    <td><?php echo $rrow['casscredit']?></td>
                    <td><?php echo $rrow['fasscredit']+$rrow['casscredit'];?></td>
                    <td><?php echo $rrow['fass1']?></td>
                    <td><?php echo 'N/A';?></td>
                    <td><?php echo $rrow['cass1']?></td>
                    <td><?php echo $rrow['total1']?></td>
                    <td><?php echo $rrow['fass2']?></td>
                    <td><?php echo 'N/A';?></td>
                    <td><?php echo $rrow['cass2']?></td>
                    <td><?php echo $rrow['total2']?></td>
                    <td><?php echo $rrow['fass3']?></td>
                    <td><?php echo 'N/A';?></td>
                    <td><?php echo $rrow['cass3']?></td>
                    <td><?php echo $rrow['total3']?></td>
                    <td><?php echo $rrow['annual']?></td>
                    <td><?php echo $rrow['re_ass']?></td>
                    <td><?php echo $rrow['decision']?></td>
                </tr>
                <tr>
                    <td colspan="1"><b>Total</b></td>
                    <td colspan="1" rowspan="1"></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b>---</b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b>---</b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b>---</b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td><b><?php echo $rrow['totatll1'] ?></b></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="1"><b>Percentage</b></td>
                    <td colspan="4" rowspan="2"></td>
                    <td colspan="4"><center><b><?php echo $rrow['percentage1'] ?></b></center></td>
                    <td colspan="4"><center><b><?php echo $rrow['percentage2'] ?></b></center></td>
                    <td colspan="4"><center><b><?php echo $rrow['percentage3'] ?></b></center></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="1">position</td>
                    <td colspan="4"><center><b><?php echo $rrow['position1'] ?></b></center></td>
                    <td colspan="4"><center><b><?php echo $rrow['position2'] ?></b></center></td>
                    <td colspan="4"><center><b><?php echo $rrow['position3'] ?></b></center></td>
                    <td colspan="3"></td>
                </tr>
                
                    </table>
                    <hr>
                    <label ><b>C</b>: Competent</label><br>
                <label ><b>NYC</b>: Not Yet Competent</label>
                    <div class="under">
        
                    <div class="signature">
                <label>Signature</label><br>
                <label>...................................</label><br><br>
                <label>11/09/2000</label>
                    </div>
                    <div class="manager">
                <label>Approved by school manager <br>Furah Mubarak <br>signature & stamp</label><br><br>
                    </div>
                    <div class="line">
                    <div class="explain">              
                <label><b>F.Ass:</b> Formative Assessment</label><br>
                <label><b>I.Ass:</b>  Integrated Assessment</label><br>
                <label><b>C.Ass:</b> Comprehensive Assessment</label><br><br>
            
                <table border="1" class="table2">
                    <tr>
                        <td>Promoted at 1st sitting</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Promoted after Re-assessment</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Advanced to repeat</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Dismissed</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                </table><br>
                    </div>
                    <div class="code">
                <img src="../pinterest/code.png" alt=""><br>
                <span>&copyCopyright By Furah Mubarak</span>
                    </div>
                    </div>
                </div>
               
            </section>

</body>
</html>