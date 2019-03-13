<?php 

function decToBin($dec){
	$bin = decbin($dec);
	return $bin;
}

function decToOct($dec){
	$oct = decoct($dec);
	return $oct;
}

function decToHex($dec){
	$hex = dechex($dec);
	return $hex;
}

function BinToDec($bin)
{
	$dec = base_convert($bin, 2, 10);
	return $dec;
}

function BintoOct($bin)
{
	$oct = base_convert($bin, 2, 8);
	return $oct;
}

function BinToHex($bin)
{
	$hex = base_convert($bin, 2, 16);
	return $hex;
}

function OctTobin($oct)
{
	$bin = base_convert($oct, 8, 2);
	return $bin;
}

function OctToDec($oct)
{
	$dec = base_convert($oct, 8, 10);
	return $dec;
}

function OctToHex($oct)
{
	$hex = base_convert($oct, 8, 16);
	return $hex;
}

function HexToDec($s) 
{
	return intval('0x'.$s, 16);
}

function HexToBin($hex) 
{
	$bin = base_convert($hex, 16, 2);
	return $bin;
}
function HexToOct($hex)
{
	$oct = base_convert($hex, 16,8);
	return $oct;
}

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function textBinASCII($text){
	$bin = [];
    for($i=0; strlen($text)>$i; $i++)
    	$bin[] = decbin(ord($text[$i]));
    return implode(' ',$bin);
}

function ASCIIBinText($bin){
	$text = [];
	$bin = explode(" ", $bin);
	for($i=0; count($bin)>$i; $i++)
		$text[] = chr(bindec($bin[$i]));
		
	return implode($text);
}

function hostToIp($host)
{
	$ip = getHostByName($host);
	return $ip;
}

function ipTolong($ip)
{
	$dec = sprintf('%u', ip2long($ip));
	return $dec;
}
function ipToBin($ip)
{ 
	$bin = sprintf("%032b", ip2long($ip));
	return wordwrap($bin, 8, '.', true);
} 

function Cipher($ch, $key){
	if (!ctype_alpha($ch))
		return $ch;

	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);

}

function Encipher($input, $key){
	$output = "";

	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
		$output .= Cipher($ch, $key);

	return $output;
}

function md5hash($str){
	$md5 = md5($str);
	return $md5; 
}

function sha1hash($str){
	$sha1 = sha1($str);
	return $sha1; 
}

function base64Decode($str){
	return base64_decode($str); 
}

function base64Encode($str){
	return base64_encode($str); 
}

function strtoascii($str) {
	return ord($str);
}

function asciitostr($ascii) {
	return chr($ascii);
}


?>

