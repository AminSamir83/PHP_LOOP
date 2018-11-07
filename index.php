<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 07/11/2018
 * Time: 12:34
 */
$x=rand(0,100);
echo "somme jusqu'à ".$x."<br>";
$somme_for=0;
$somme_while=0;
for ($i=0;$i<=$x;$i++)
{$somme_for+=$i;}
echo "la somme for est égale à ".$somme_for."<br>";
$j=0;
while ($j<=$x)
{$somme_while+=$j;
$j++;}
echo "la somme while est égale à ".$somme_while."<br>";