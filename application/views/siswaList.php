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
 <h1>Contoh Insert Update dan delete</h1>
 <divclass="paging"><?php echo $pagination;?></div>
 <divclass="data"><?php echo $table;?></div>
 <divclass="paging"><?php echo $pagination;?></div><br/>
 <?php echo anchor('siswa/add/',
 'Tambah Siswa baru',array('class'=>'add'));?>
 </div>
 </body>
</html>
