<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
  <?
		wp_head();
	?>
	
	  <link rel="stylesheet" href="<?bloginfo("stylesheet_url");?>" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Neuton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:light,lightitalic' rel='stylesheet' type='text/css'>
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	  <title><?wp_title( '|', true, 'right' );?></title>
</head>
<body>
  <script type="text/javascript">
  function mainmenu(){
  $("header .menu ul").css({display: "none"}); // Opera Fix
  $("header .menu li").hover(function(){
  		$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(100);
  		$(this).parent().find('li').css({border: "none"});
  		},function(){
  		$(this).find('ul:first').css({visibility: "hidden"});
  		$(this).parent().find('li').css({"border-bottom" : "1px solid #ccc"});
  });
  		
  }

   $(document).ready(function(){
  	mainmenu();
  });
  </script>
  <div id="container">
    <header>
      <h1><a href="<?bloginfo('url')?>"><?bloginfo('name');?></a></h1>
      <h2><em><a href="<?bloginfo('url')?>"><?bloginfo('description');?></a></em></h2>
      <nav>
        <?
         wp_nav_menu( array('menu' => 'Header Nav' ) ); 
        
        ?>
      </nav>
    </header>