<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
  <?
		
		wp_head();
	?>
	
	  <link rel="stylesheet" href="<?bloginfo("stylesheet_url");?>" type="text/css" media="screen">
	  <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	  <link href='http://fonts.googleapis.com/css?family=Gruppo' rel='stylesheet' type='text/css'>
	  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,100italic,light,lightitalic,regular,regularitalic,600,600italic,bold,bolditalic' rel='stylesheet' type='text/css'>
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	  <title><?wp_title( '|', true, 'right' );?></title>
</head>
<body>
  <script type="text/javascript">
  $ = jQuery;
  function mainmenu(){
  $("header .menu ul").css({display: "none"}); // Opera Fix
  $("header .menu li").hover(function(){
  		$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(400);
  		},function(){
  		$(this).find('ul:first').css({visibility: "hidden"});
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