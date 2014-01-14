<?php require_once('../Connections/senimandigital.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Senimandigital</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Membandingkan dua buah folder" />
<?php echo $WEBSITE['SCRIPT']['HEADER']; ?>
<?php echo $WEBSITE['STYLE']['HEADER']; ?>
</head>
<body>
<?php
if ($_GET['folder_a'] && $_GET['folder_a']){
$_GET['folder_a'] = str_replace('\\\\', '\\', ($_GET['folder_a']));
$file_a  = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($_GET['folder_a']));
foreach($file_a AS $fileinfo_a){
if(strpos($fileinfo_a->getPathname(), '\\sistem\\'))	continue;
$array_a[] = str_replace($_GET['folder_a'], "", $fileinfo_a->getPathname());
$file_info_a[str_replace($_GET['folder_a'], "", $fileinfo_a->getPathname())] 
               = array('getPathname' => $fileinfo_a->getPathname(),
                       'getBasename' => $fileinfo_a->getBasename(),
                       'getFilesize' => $fileinfo_a->getSize(),
                       'getmTime'    => $fileinfo_a->getmTime(),
                       'fileType'    => $fileinfo_a->filetype()
                      );
}

$_GET['folder_b'] = str_replace('\\\\', '\\', ($_GET['folder_b']));
$file_b = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($_GET['folder_b']));
foreach($file_b AS $fileinfo_b){
$array_b[] = str_replace($_GET['folder_b'], "", $fileinfo_b->getPathname());
$file_info_b[str_replace($_GET['folder_b'], "", $fileinfo_b->getPathname())]
               = array('getPathname' => $fileinfo_b->getPathname(),
                       'getBasename' => $fileinfo_b->getBasename(),
                       'getFilesize' => $fileinfo_b->getSize(),
                       'getmTime'    => $fileinfo_b->getmTime()
                      );
}
}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="3">
<tr>
  <td><!-- #BeginLibraryItem "/Library/teknologi_file.lbi" --><fieldset>
  <a href="file.php">DUPLIKAT</a> |
  <a href="../synkron/index.php">SYNKRON</a> |
  <a href="../compare/file.php">COMPARE</a>
</fieldset><!-- #EndLibraryItem --></td></tr>
<tr>
  <td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td valign="top">
  <content>
  <fieldset>
  <article>
  <h3>COMPARE FOLDER</h3><hr />
  <form action="" method="get" name="compare_folder">
  <table width="100%" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td width="75">FOLDER 1</td>
    <td><input name="folder_a" type="text" id="folder_a" style="width:100%" value="<?php echo $_GET['folder_a']; ?>" /></td>
  </tr>
  <tr>
    <td>FOLDER 2</td>
    <td><input name="folder_b" type="text" id="folder_b" style="width:100%" value="<?php echo $_GET['folder_b']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2"><hr /></td>
    </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&lt;&lt;{Folder Name}</td>
          <td>&nbsp;</td>
          <td><div align="right">{Folder Name}&gt;&gt;</div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2">
<?php if ($_GET['folder_a'] && $_GET['folder_b']){ ?>
    <table width="100%" border="0" cellpadding="0" class="DataList">
  <tr>
    <th>FOLDER</th>
    <th nowrap="nowrap">SIZE A</th>
    <th nowrap="nowrap">SIZE B</th>
    <th>MD5</th>
    <th>FUNGSI</th>
    <th>DATE</th>
    <th colspan="2">AKSI</th>
    </tr>
  <?php foreach(array_unique(array_merge($array_a, $array_b)) as $_key => $value){ ?>
  <tr>
    <td><?php echo $value; ?></td>
    <td align="right"><?php echo $file_info_a[$value]['getFilesize'] ?></td>
    <td align="right"><?php echo $file_info_b[$value]['getFilesize'] ?></td>
    <td align="center"><?php echo ($file_info_a[$value]['getFilesize'] == $file_info_b[$value]['getFilesize'] && md5_file($file_info_a[$value]['getPathname']) == md5_file($file_info_b[$value]['getPathname'])) ? 'Sama' : 'Beda'; ?></td>
    <td align="right"><?php echo date('d-m-y', $file_info_a[$value]['getmTime']); ?></td>
    <td align="right"><?php echo date('d-m-y', $file_info_b[$value]['getmTime']); ?></td>
    <td align="center">
    <?php if (in_array($value, $array_a) && in_array($value, $array_b)) { ?><a target="_blank" href="file.php?file_a=<?php echo $_GET['folder_a']. '\\' . $value; ?>&file_b=<?php echo $_GET['folder_b']. '\\' . $value; ?>">Com</a><?php } ?>
    </td>
    <td align="center">
	<?php if ($file_info_a[$value]['getmTime'] <> $file_info_b[$value]['getmTime']
	      &&  $file_info_a[$value]['getFilesize'] == $file_info_b[$value]['getFilesize'] 
	) { ?><a href="../synkron/junk_refresh.php" target="_blank">Clean</a><?php } ?>
    </td>
  </tr>
  <?php } ?>
</table>
<?php } ?>
</td>
    </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
  </article>
  </fieldset>
  </content>
  </td>
  <td width="225" valign="top">
  <nav>
  <fieldset>
  <h3>DESCRIPTION</h3><hr />
  <script language="JavaScript" type="text/javascript">
  for(var i=0; i<document.getElementsByTagName('meta').length; i++) {
      if(document.getElementsByTagName('meta').item(i).name.toLowerCase() != 'description') continue;
         document.write('<p>'+ document.getElementsByTagName('meta').item(i).content + '</p>');
     }
  </script>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><strong>FITUR</strong></td>
  </tr>
  <tr>
    <td><strong>Compare</strong>: Membandingkan dua buah file.</td>
  </tr>
  <tr>
    <td><strong>Clean Junk</strong>: Mengembalikan ke tanggal tertua, dari dua file dengan content sama.</td>
  </tr>
  </table>
  </fieldset>
  </nav>
  </td>
</tr>
</table>
</td>
  </tr>
  <?php echo $WEBSITE['TEMPLATE']['FOTTER']; ?>
</table>
</body>
</html>
