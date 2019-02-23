<?php include '../admin/include/config.php';

 if(!isset($_SESSION['aid'])){
 
   header('Location: login.php');
//     echo"<script>window.location.assign('index.php');</script>";
}
frthtr
include "../admin/php_function_file.php";

if(isset($_REQUEST['snd_id']))
{
    $_SESSION['snd_id']=$_REQUEST['snd_id'];
    
}

$Qry2 = mysql_query("SELECT `vid`, `vname` FROM `vibhag` WHERE 1") or die(mysql_error());
                                                                                
                $qry_data1=mysql_fetch_array($Qry2);


  $Qry1 = mysql_query("SELECT `sn_id`, `fk_spardha_id`, `fk_upprakar_id`, `sn_date`, `sn_status`, `sp_nav`,`sp_khel`,`sp_prakar`,`spardha_level`,`sn_prakar_type`,
		             `snd_id`, `fk_sn_id`, `fk_vayogat_id`, `fk_weight_id`, `fk_school_id`, `fk_player_id`, `fk_result_id`,`shala_number`,`shala_name`,`kheladu_img`,
		             CONCAT(kheladu_nav_first,' ',kheladu_nav_middle,' ',kheladu_nav_last) as name,`kheladu_janmtarikh`,`kheladu_shaikshnik_aharta`,`sp_sthal`,`sp_prarambh_tarikh`,
		             `sp_samapan_tarikh`,`sp_prakar_type`,`spardha_level`
                 
                                                                        FROM `spardha_nikal` SN,
                                                                        
                                                                        `spardha` SP,
                                                                        `spardha_nikal_details` SND,
                                                                        `shala` S,
                                                                        `kheladu_master` KM
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        WHERE 
                                                                              
                                                                                SN.fk_spardha_id=SP.sp_id AND
                                                                                SN.sn_id=SND.fk_sn_id AND
                                                                                SND.fk_school_id=S.shala_id AND
                                                                                SND.fk_player_id=KM.kheladu_id AND
                                                                                
                                                                                SND.snd_id='".$_SESSION['snd_id']."'
                                                                              
                                                                                
                                                                                ORDER BY sn_id DESC") or die(mysql_error());
                                                                                
                $qry_data=mysql_fetch_array($Qry1);


 ?>


<!DOCTYPE html>
<html>
     <meta charset="UTF-8">
   

<body class="hold-transition skin-blue sidebar-mini" >


       <table width="745px" height="405px" border="0" align="center" style="line-height: 15%;" id="print_table">
  <tr class="">
    <td width="20">&nbsp;</td>
    <td width="730" height="600px" align="center" valign="top">
       <table align="center" width="730" style="font-family:ind_hi_1_001;line-height: 12%;"  cellpadding='0' cellspacing='0' border="0">
      <tr>
        <td width="65">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td width="50">&nbsp;</td>
      </tr>
       <tr>
        <td width="65">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td width="50">&nbsp;</td>
      </tr>
  
       <tr>
        <td width="65">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2" align="right">&nbsp;</td>
        <td width="50">&nbsp;</td>
      </tr> <tr>
        <td width="65">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td colspan="2" align="right">&nbsp;</td>
        <td width="50">&nbsp;</td>
      </tr>   <tr>
        <td>&nbsp;</td>
        <td colspan="5">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2" align="right"><span class="par3" style="font-size:16px;" >&nbsp;&nbsp;</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="5">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
       <tr height="">
        <td height="45">&nbsp;</td>
        <td height="68" colspan="5" align="center">&nbsp;</td>
        <td height="45">&nbsp;</td>
      </tr>
       <tr height="">
        <td height="45">&nbsp;</td>
        <td height="68" colspan="5" align="center">&nbsp;</td>
        <td height="45">&nbsp;</td>
      </tr>
      
      <?php
      
      if($qry_data['spardha_level']=='तालुकास्तरीय')
      {
        ?>
      
       
       <tr>
        <td width="65">&nbsp;</td>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
       <td>&nbsp;</td>
       
       
        
        
        <td colspan="2" align="center"><span class="par3" style="font-size:16px;">&nbsp;
        
        TKS:

            <?php
            
                        if(strlen($qry_data['snd_id'])==3)
                        {
                            echo "0".$qry_data['snd_id'];
                        }
                        else if(strlen($qry_data['snd_id'])==2)
                        {
                            echo "00".$qry_data['snd_id'];
                        }
                         else if(strlen($qry_data['snd_id'])==1)
                        {
                            echo "000".$qry_data['snd_id'];
                        }
                        else
                        {
                            echo $qry_data['snd_id'];
                        }
                        
            ?>

      </span></td>
        
        <td >&nbsp;</td>
      </tr>
      
      <?php
      }
      else
      {
      ?>
      
      <tr>
        <td width="65">&nbsp;</td>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
       <td>&nbsp;</td>
       
       
        
        
        <td colspan="2" align="center"><span class="par3" style="font-size:16px;">&nbsp;
        
JKS:

            <?php
            
                        if(strlen($qry_data['snd_id'])==3)
                        {
                            echo "0".$qry_data['snd_id'];
                        }
                        else if(strlen($qry_data['snd_id'])==2)
                        {
                            echo "00".$qry_data['snd_id'];
                        }
                         else if(strlen($qry_data['snd_id'])==1)
                        {
                            echo "000".$qry_data['snd_id'];
                        }
                        else
                        {
                            echo $qry_data['snd_id'];
                        }
                        
            ?>


      </span></td>
        
        <td >&nbsp;</td>
      </tr>
      
      
      
      <?php
      }
      ?>
      
      <!--
        
        <td colspan="2" align="center"><span class="par3" style="font-size:16px;">&nbsp;
        
          <img src="img/khedalu_photo/<?php echo $qry_data['kheladu_img']; ?>" style="display:block;width:100px;height:100px;margin-top:-15px;margin-left:15px" >
        <?php
      
     
        
        ?>&nbsp;&nbsp;</span></td>
        
        <td >&nbsp;</td>
      </tr> -->
      
      <tr height="">
        <td height="45">&nbsp;</td>
        <td height="68" colspan="5" align="center">&nbsp;</td>
        <td height="45">&nbsp;</td>
      </tr>
       <tr height="">
        <td height="45">&nbsp;</td>
        <td height="68" colspan="5" align="center">&nbsp;</td>
        <td height="45">&nbsp;</td>
      </tr><tr height="">
        <td height="45">&nbsp;</td>
        <td height="68" colspan="5" align="center">&nbsp;</td>
        <td height="45">&nbsp;</td>
      </tr>
       <tr height="">
        <td height="45">&nbsp;</td>
        <td height="68" colspan="5" align="center">&nbsp;</td>
        <td height="45">&nbsp;</td>
      </tr>
      <tr>
        <td height="20">&nbsp;</td>
        <td height="20" colspan="5" align="center" valign="top"><p class='par1' align='center' style=\"font-family:ind_hi_1_001\" ><strong><?php echo $qry_data['sp_nav']; ?>     स्पर्धा</strong></p>
        </td>
        <td height="20">&nbsp;</td>
      </tr>
      <tr>
    
        <td height="20" colspan="7" align="center" valign="top"><p class='par2' align='center'><strong>   <?php echo get_vayogat_name($qry_data['fk_vayogat_id']); ?></strong></p></td>
        
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td colspan="5">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="5">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="5" align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
     <!--  <tr>
        <td height="50">&nbsp;</td>
        <td height="40" colspan="5" align="right">&nbsp;</td>
        <td height="50">&nbsp;</td>
        </tr> 
         <tr>
        <td>&nbsp;</td>
        <td colspan="5" align="right">&nbsp;</td>
        <td>&nbsp;</td>
        </tr> -->
         <tr>
        <td>&nbsp;</td>
        <td colspan="5" align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
       
        <tr>
            <td colspan="7" ><div style="height:50px">&nbsp;</div></td>
        
        </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td width="59" height="35">&nbsp;</td>
        <td width="212" height="35"><p class='certi_head' ><strong>नाव</strong></p></td>
        <td height="35" colspan="3"><p class='certi_nrml' >   <?php echo $qry_data['name']; ?> .</p></td>
        <td height="35">&nbsp;</td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td>
        <td height="35"><p class='certi_head' ><strong>जन्म तारीख</strong></p></td>
        <td width="107" height="35"><p class='certi_nrml'><?php echo date("d-m-Y",strtotime($qry_data['kheladu_janmtarikh'])); ?></p></td>
        <td width="67" height="35"><p class='certi_head' ><strong>इयत्ता</strong></p></td>
        <td width="170" height="35"><p class='certi_nrml'><?php echo $qry_data['kheladu_shaikshnik_aharta']; ?> Th</p></td>
        <td height="35">&nbsp;</td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td>
        <td height="35"><p class='certi_head' ><strong>संस्था</strong></p></td>
        <td colspan="4" style="line-height: 130%;"><p ><?php echo $qry_data['shala_name']; ?></p></td>
     
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td>
        <td height="35"><p class='certi_head' ><strong>जिल्हा </strong></p></td>
        <td height="35" colspan="3"><p class='certi_nrml'  ><?php echo $qry_data1['vname']; ?></p></td>
        <td height="35">&nbsp;</td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td>
        <td height="35"><p class='certi_head' ><strong>स्पर्धेचे ठिकाण</strong></p></td>
        <td height="35" colspan="3"><p class='certi_nrml' > <?php echo $qry_data['sp_sthal']; ?></p></td>
        <td height="35">&nbsp;</td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td>
        <td height="35"><p class='certi_head' ><strong>स्पर्धेचा कालावधी</strong></p></td>
        <td height="35" colspan="3"><p class='certi_nrml'  ><?php echo date("d-m-Y",strtotime($qry_data['sp_prarambh_tarikh'])); ?> ते  
        <?php echo date("d-m-Y",strtotime($qry_data['sp_samapan_tarikh'])); ?></p></td>
        <td height="35">&nbsp;</td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td>
        <td height="35" ><p class='certi_head' ><strong>खेळ </strong></p></td>
        <td height="35" colspan="2"><p class='certi_nrml'  > <?php echo get_sport_name($qry_data['sp_khel']); ?></p>
      
        
        
        <td height="35" colspan="2">&nbsp;</td>
      </tr>
       <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td> 
        <td height="35"><p class='certi_head' ><strong>बाब/ वजनगट </strong></p></td>
        <td height="35"  colspan="2"><p class='certi_nrml'  ><?php echo get_uppreakar_name($qry_data['fk_upprakar_id']); ?><?php echo get_vajangat_name($qry_data['fk_weight_id']); ?></p>
         <td height="35" align="left" colspan="2" >&nbsp;</td>
        
        </td>
        
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td height="35">&nbsp;</td>
        <td height="35"><p class='certi_head' ><strong>प्राविण्य (वेळ /अंतर /उंची)</strong></p></td>
        <td height="35" ><p class='certi_nrml'><?php echo get_rank_name($qry_data['fk_result_id']); ?></p></td>
      
        <td height="35" colspan="3" align="center">
            
        <?php
      
          if($qry_data['spardha_level']=='तालुकास्तरीय')
          {
        ?>
        <img src="img/sign.png" style="display:block;width:60px;margin-right:60px;margin-top:-10px" >
        
        <?php
          }
          ?>
            
            
            
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="5">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="5">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    
       <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td colspan="2" rowspan="4" align="center"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
     <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td height="20">&nbsp;</td>
        <td height="20" colspan="3">&nbsp;</td>
        <td height="20" colspan="2" align="center"><p class='par2' ><strong>जिल्हा क्रीडा अधिकारी</strong></p></td>
        <td height="20">&nbsp;</td>
      </tr>
       <tr>
        <td height="5">&nbsp;</td>
        <td height="5" colspan="3">&nbsp;</td>
        <td height="5" colspan="2" align="center"><p class="certi_nrml"><?php echo $qry_data1['vname']; ?>.</p> </td>
        <td height="5">&nbsp;</td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td colspan="5">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
        
      <!--  <tr>
        <td height="7" colspan="7">&nbsp;</td>
        </tr>-->
    </table>
    </td>
  </tr>
  
  
  
</table>

<input type="button" value="Print" onclick="print1()" />

<script>
function print1()
{
    var prtContent = document.getElementById("print_table");
    var WinPrint = window.open('', '_blank', 'left=0,top=0,width=600,height=500,toolbar=0,scrollbars=0,status=0,visible=none');
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print(false);
    WinPrint.close();  
    window.location="certificate.php";
}
    
</script>

</body>
</html>
