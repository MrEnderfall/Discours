<?php
echo "<!-- SCRIPT START ".benchmark()." -->";

$pdo = pdo();

/*echo "  <!-- START ".$topic->post_id." ".benchmark()." -->\n";
$sql = $pdo->prepare("SELECT * FROM posts WHERE parent_topic = 68");
$sql->execute();
echo "  <!-- END ".$topic->post_id." ".benchmark()." -->\n";
die();*/

ob_start();
?>
<style type="text/css">
p
{
  margin-bottom:1em;
}
</style>

<content class="page" style="margin-top:2em;">
  
  <h2 style="text-align:center;">Где я нахожусь?</h2>

  <div align="center">
    Дискурс — это место, где люди могут общаться с интересными им собеседниками на любые темы.
  </div>
  
</content>
<?php
$html = ob_get_contents();
ob_end_clean();

$twig_data = array
(
  "html" => $html,
  "final_title" => "О проекте"
);

echo render($twig_data);
?>