<div class="block">
<div class="entry">
<h1>Documents</h1>
<div class="">
<ul>

<?php
$path    = 'uploads';
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $filename)
{
?>
<li><a href="uploads/<?php echo $filename; ?>" target="_blank"><?php echo $filename; ?></a></li>
<?php
}
?>

</ul>
</div>
</div>

</div>