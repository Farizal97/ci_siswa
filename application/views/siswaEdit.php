<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <htmlxmlns="http://www.w3.org/1999/xhtml">
<head>
<metahttp-equiv="Content-Type"content="text/html; charset=iso-8859-1"/>
<title>SIMPLE CRUD APPLICATION</title>
<linkhref="<?php echo base_url();?>style/style.css"
rel="stylesheet"type="text/css"/>
</head>
<body>
<divclass="content">
<h1><?php echo $title;?></h1>
<?php echo $message;?>
<?php echo validation_errors();?>
<?php echo form_open($action);?>
<divclass="data">
<table>
<tr>
<tdwidth="30%">ID</td>
<td><inputtype="text"name="id"disabled="disable"class="text"
value="<?php echo (isset($siswa['id']))?$siswa['id']:'';?>"/></td>
<inputtype="hidden"name="id"value="<?php echo
(isset($siswa['id']))?$siswa['id']:'';?>"/>
</tr>
<tr>
<tdvalign="top">nama<spanstyle="color:red;">*</span></td>
<td><inputtype="text"name="nama"class="text"value="<?php echo
(set_value('nama'))?set_value('nama'):$siswa['nama'];?>"/>
<?php echo form_error('nama');?></td>
</tr>
<tr>
<tdvalign="top">Alamat</td>
 <td><inputtype="text"name="alamat"class="text"value="<?php echo
 set_value('alamat')?set_value('alamat'):$siswa['alamat'];?>"/>
 <?php echo form_error('alamat');?></td>
 </tr>
<tr>
<tdvalign="top">jenis_kelamin<spanstyle="color:red;">*</span></td>
<td><inputtype="radio"name="jenis_kelamin"value="M"<?php echo
 set_radio('jenis_kelamin','M', TRUE);?>/> Laki-Laki
 <inputtype="radio"name="jenis_kelamin"value="F"<?php echo
 set_radio('jenis_kelamin','F');?>/> Perempuan
 <?php echo form_error('jenis_kelamin');?></td>
 </tr>
 <tr>
 <tdvalign="top">Date of birth (dd-mm-yyyy)<span
 style="color:red;">*</span></td>
 <td><inputtype="text"name="tanggal_lahir"class="text"
 value="<?php echo (set_value('tanggal_lahir'))?
 set_value('tanggal_lahir'):$siswa['tanggal_lahir'];?>"/> 
 <?php echo form_error('tanggal_lahir');?></td>
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td><inputtype="submit"value="Save"/></td>
 </tr>
 </table>
 </div>
</form>
 <br/>
<?php echo $link_back;?>
 </div>
 </body>
</html>
