<?php
require_bundle();

if (!is_mod())
{
  die("Restricted");
}

$filename='discours_'.time().'.sql';

$cmd = "(mysqldump discours --user=".MYSQL_USERNAME." --password=".MYSQL_PASSWORD." --single-transaction > ".BACKUP_DIR."/$filename) 2>&1";

$result = exec($cmd, $output);

var_dump ($output);
echo "<br>";

if (file_exists (BACKUP_DIR."/$filename"))
{
  echo "<b>Backup file created</b><br>";
}

if(empty($output))
{
  echo "Backup ok!";
}

else
{
  echo "Error!";
}
?>