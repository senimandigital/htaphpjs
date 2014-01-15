<?php require_once('../Connections/senimandigital.php'); ?>
<?php
if (isset($_GET['folder_a'])) {
$_GET['folder_a'] = $_GET['folder_a'];
foreach(new RecursiveDirectoryIterator($_GET['folder_a']) as $row_folder_a){
if ($row_folder_a->getExtension() <> 'php') continue;
$folder_a[] = array('getPathname' => $row_folder_a->getPathname(),
                    'getBasename' => $row_folder_a->getBasename());
} // foreach(new RecursiveDirectoryIterator(__DIR__) as $row_folder_a)
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Senimandigital</title>
<meta name="Description" content="Kita sering menambahkan style langsung pada halaman, terkadang kita perlu untuk menghapusnya namun memeriksanya satu persatu tentu bukan hal mudah." />
<?php echo $WEBSITE['SCRIPT']['HEADER']; ?>
<?php echo $WEBSITE['STYLE']['HEADER']; ?>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="3">
<tr>
<td>
<fieldset>
  <a href="../source/get_style.php">STYLE</a> |
</fieldset>
</td>
</tr>
<tr>
  <td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td valign="top">
  <content>
  <fieldset>
  <article>
  <h3>STYLE</h3><hr />
<form id="form1" name="form1" method="get" action="">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><input type="text" name="folder_a" id="folder_a" placeholder="Folder Path" value="<?php echo $_GET['folder_a']; ?>" style="width:99%" />    </td>
    </tr>
</table>
</form>
<?php if (isset($_GET['folder_a'])) { ?>
  <table width="100%" border="1" cellpadding="0" cellspacing="0" class="DataList">
<?php foreach($folder_a as $key => $row_folder_a) { ?>
<?php
$html = file_get_contents($row_folder_a['getPathname']);
if (!strpos($html, '/style>')) continue;
preg_match_all("%<style.*?>(.*?)</style>%s", $html, $patterns);
?>
    <thead>
      <tr>
        <th scope="col"><?php echo $row_folder_a['getBasename']; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><pre><?php echo htmlentities($patterns[0][0]);?></pre></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td><hr /></td>
      </tr>
    </tfoot>
<?php } ?>
  </table>
<?php } ?>
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
