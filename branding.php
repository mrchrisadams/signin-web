<?php
function get_branding($title) {
echo '
<header id="header" role="banner">
    <div class="branding">
              <a href="/" title="Home" rel="home" id="logo">
          
          <img src="http://www.theodi.org/sites/default/files/logo.svg" alt="Home" class="b_svg" width="131" height ="54">
          <img src="http://www.theodi.org/sites/default/files/logo.png" alt="Home" class="b_png" width="131" height ="54">        </a>
      
              <hgroup id="name-and-slogan">

                                  <h1 id="site-name">
              <a href="/" title="Open Data Institute" rel="home">
                              
          <img src="http://www.theodi.org/sites/default/files/logo_a.svg" alt="Open Data Institute" class="b_svg" width="326" height ="30">
          <img src="http://www.theodi.org/sites/default/files/logo_a.png" alt="Open Data Institute" class="b_png" width="326" height ="30">                            </a>
            </h1>
          
                                  <h2 id="site-slogan">
                          
Knowledge For Everyone                  
</hgroup>
	  <div style="float: right; margin-right: 1em; margin-top: 0.5em;">
	  	<h1 style="font-weight: bold;">'.$title.'</h1>
	  </div>
          </div>
</header>
';
}	
function get_header() {
	echo '
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7"  lang="en" dir="ltr"><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7"  lang="en" dir="ltr"><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8"  lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"  lang="en" dir="ltr"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html  lang="en" dir="ltr"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#"><!--<![endif]-->

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta charset="utf-8" />
<link rel="shortcut icon" href="http://www.theodi.org/favicon.ico" type="image/vnd.microsoft.icon" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
  <title>Open Data Institute</title>

      <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cleartype" content="on">

  <style>@import url("http://www.theodi.org/modules/system/system.base.css?mc3hpr");
@import url("http://www.theodi.org/modules/system/system.messages.css?mc3hpr");
@import url("http://www.theodi.org/modules/system/system.theme.css?mc3hpr");</style>
<style>@import url("http://www.theodi.org/modules/aggregator/aggregator.css?mc3hpr");
@import url("http://www.theodi.org/sites/all/modules/date/date_api/date.css?mc3hpr");
@import url("http://www.theodi.org/modules/field/theme/field.css?mc3hpr");
@import url("http://www.theodi.org/modules/node/node.css?mc3hpr");
@import url("http://www.theodi.org/modules/user/user.css?mc3hpr");
@import url("http://www.theodi.org/sites/all/modules/views/css/views.css?mc3hpr");</style>
<style>@import url("http://www.theodi.org/sites/all/modules/ckeditor/ckeditor.css?mc3hpr");</style>
<style>@import url("http://www.theodi.org/sites/all/themes/odi/css/print.css?mc3hpr");
@import url("http://www.theodi.org/sites/all/themes/odi/css/odi.css?mc3hpr");</style>
';
if (file_exists('layout.css')) {
	echo '<link rel="stylesheet" type="text/css" href="layout.css">';
} else {
	echo '<link rel="stylesheet" type="text/css" href="../layout.css">';
}
echo '<!--[if IE 6]>
<style>@import url("http://www.theodi.org/sites/all/themes/odi/css/bootstrap.ie6.min.css?mc3hpr");
@import url("http://www.theodi.org/sites/all/themes/odi/css/ie6.css?mc3hpr");</style>
<![endif]-->
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114.png" />
  </head>
<body style="min-width: 800px;" class="html not-front not-logged-in one-sidebar sidebar-second page-node page-node- page-node-45 node-type-team-member section-people" >
';
}

function get_footers() {
echo '</body></html>';
}

?>
