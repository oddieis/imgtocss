<?php
$imageurl = 'http://www.ima.umn.edu/images/complex/complex-graphic480x480.png';
$img = imagecreatefromstring(file_get_contents($imageurl));
print '<div style="width: ' . imagesx($img) . 'px;height:' . imagesy($img) . 'px">';
for ($x = 0; $x < imagesx($img); $x++)
{
	for ($y = 0; $y < imagesy($img); $y++)
	{
		$rgb = imagecolorat($img, $x, $y);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;

		print '<div style="display: inline-block; width: 1px; height: 1px; background: #' . dechex($r) . dechex($g) . dechex($b) . '"></div>';
	}
}
print '</div>';
?>