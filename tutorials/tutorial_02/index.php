<?php
$x=9;
$sa=1;
for($i=1;$i<=11;$i++)
{
	if($i<=6)
	{
	for($s=6;$s>=$i;$s--)
	{
		echo "&nbsp; ";
	}
	$v=($i*2)-1;
	for($s=1;$s<=$v;$s++)
	{
		echo "*&nbsp;";
	}
	echo "<br>";
	}
	elseif ($i>6) {
	for($s=0;$s<=$sa;$s++)
	{
		echo "&nbsp; ";
	}
	for($s=$x;$s>=1;$s--)
	{
		echo "*&nbsp;";
	}
	echo "<br>";
	$x-=2;
	$sa++;
	}
}
