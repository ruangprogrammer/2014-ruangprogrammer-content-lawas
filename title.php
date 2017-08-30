<?php
if($_GET["content"]=="profil"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='2' "));
}elseif($_GET["content"]=="paketweb"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='9' "));
}elseif($_GET["content"]=="paketweb1"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='10' "));
}elseif($_GET["content"]=="paketweb2"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='11' "));
}elseif($_GET["content"]=="paketweb3"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='12' "));
}elseif($_GET["content"]=="paketweb4"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='13' "));
}elseif($_GET["content"]=="paketweb5"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='14' "));
}elseif($_GET["content"]=="cara_order"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='3' "));
}elseif($_GET["content"]=="faq"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='8' "));
}elseif($_GET["content"]=="karir"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='6' "));
}elseif($_GET["content"]=="kontak"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='15' "));
}elseif($_GET["content"]=="order_online"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='16' "));
}elseif($_GET["content"]=="artikel"){
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='17' "));		
}elseif($_GET["content"]=="detail-artikel"){
	$tberita=mysql_fetch_array(mysql_query("SELECT judul FROM berita where id='$_GET[id]' "));
}else{
	$titl=mysql_fetch_array(mysql_query("SELECT title, keyword, deskripsi FROM seo WHERE id='1' "));
}

if($_GET["content"]=="detail-artikel"){
	$title = "$tberita[judul] - Ruang Programmer";
}else{
	$title = "$titl[title]";
}
	$keyword = "$titl[keyword]";
	$deskripsi = "$titl[deskripsi]";
?>