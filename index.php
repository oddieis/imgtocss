<?php
$imageurl = 'http://www.ima.umn.edu/images/complex/complex-graphic480x480.png';
$img = imagecreatefromstring(file_get_contents($imageurl));
printf('<div style="width:%spx;height:%spx">',imagesx($img),imagesy($img));
for ($x = 0; $x < imagesx($img); $x++)
{
	for ($y = 0; $y < imagesy($img); $y++)
	{
		$rgb = imagecolorat($img, $x, $y);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;

		printf('<div style="display: inline-block; width: 1px; height: 1px; background: #%s%s%s"></div>',dechex($r), dechex($g), dechex($b));
	}
}
print '</div>';
?>