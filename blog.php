<?php if(!isset($_GET['formato'])) { ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>2021 Robson Castilho - AMP e PHP -  1.1v</title>
		
		
		<link rel="amphtml" href="<?php echo 'http://www.rcastilho.com.br/blog/' . $_GET['slug'] . '/amp'; ?>">
		
				<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
				
		
		<style>
			*{margin:0;padding:0}
			body{padding:10px}
			body *{font-family: 'Roboto', sans-serif;font-weight: 300;margin-bottom:5px;}
			article{max-width:700px;margin:auto;margin-top:10px;text-align:center;}
			article header{background: linear-gradient(36deg, #0dd3ff, #0389ff, #1c79c0);padding:20px}
			article header h1{color:#fff;margin-	bottom:5px 0;}
			article header h3{color:#fff;}	
			article p{margin:20px 0;}
			article img{width:100%}
			.fa-external-link-square-alt{height:14px;margin-bottom:-3px;}
		</style>
		
	</head>

<?php }else if($_GET['formato'] == 'amp'){ ?>

<!DOCTYPE html>
<html amp>
	<head>
		<meta charset="utf-8">
		<title>Primeira página AMP - 2021 Robson Castilho - AMP e PHP -  1.1v</title>
		<link rel="canonical" href="<?php echo 'http://www.rcastilho.com.br/blog/' . $_GET['slug']; ?>">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
		<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
		
		<style amp-custom>
			*{margin:0;padding:0}
			body{padding:10px}
			body *{font-family: 'Roboto', sans-serif;font-weight: 300;margin-bottom:5px;}
			article{max-width:700px;margin:auto;margin-top:10px;text-align:center;}
			article header{background: linear-gradient(36deg, #0dd3ff, #0389ff, #1c79c0);padding:20px}
			article header h1{color:#fff;margin-bottom:5px 0;}
			article header h3{color:#fff;}	
			article p{margin:20px 0;}
			.fa-external-link-square-alt{height:14px;margin-bottom:-3px;}
		</style>

	</head>

<?php } ?>


	<body>
	
		<article>
	
			<header>
				<h1>2021 Robson Castilho - AMP e PHP -  1.1v</h1>
				<h3>Site em Desenvolvimento - Maio/2018</h3>
			</header>
			
			<p>Site antigo está desativado.</p>

			<?php if(isset($_GET['formato']) and $_GET['formato'] == 'amp'){ ?>
				  <amp-social-share type="facebook" width="20" height="20" data-param-app_id="254325784911610"></amp-social-share>
				  <amp-social-share type="gplus" width="20" height="20"></amp-social-share>
				  <amp-social-share type="linkedin" width="20" height="20"></amp-social-share>
				  <amp-social-share type="twitter" width="20" height="20"></amp-social-share>
				  <amp-social-share type="whatsapp" width="20" height="20"></amp-social-share>
			<?php } ?>
			
			<?php 
			if(!isset($_GET['formato'])) { 
				echo "<img alt='Páginas AMP' src='http://www.rcastilho.com.br/eleanor.jpg'>";
			}else if($_GET['formato'] == 'amp'){
				echo "<amp-img alt='Páginas AMP' layout='responsive' src='http://www.rcastilho.com.br/eleanor.jpg' width='350' height='124'></amp-img>";
			}
			?>

			<footer>
				<p>	<a href="http://webmail.rcastilho.com.br">Caixa de Correio</a> </p>
				<!--<a href="https://www.ampproject.org/pt_br/" target="_blank">AMP Project <svg class="svg-inline--fa fa-external-link-square-alt" aria-hidden="true" data-prefix="fas" data-icon="external-link-square-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 80v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48zm-88 16H248.029c-21.313 0-32.08 25.861-16.971 40.971l31.984 31.987L67.515 364.485c-4.686 4.686-4.686 12.284 0 16.971l31.029 31.029c4.687 4.686 12.285 4.686 16.971 0l195.526-195.526 31.988 31.991C358.058 263.977 384 253.425 384 231.979V120c0-13.255-10.745-24-24-24z"></path></svg></a>-->
			</footer>
		
		</article>
		
		
		<footer>
		
			<?php 
			if(!isset($_GET['formato'])) { ?>
				
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119115862-1"></script>
				<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-119115862-1');</script>
		
			<?php
			}else if($_GET['formato'] == 'amp'){ ?>
				
				<amp-analytics type="googleanalytics" id="analytics1">
					<script type="application/json">
					{
					  "vars": {
						"account": "UA-119115862-1"
					  },
					  "triggers": {
						"trackPageview": {
						  "on": "visible",
						  "request": "pageview"
						}
					  }
					}
					</script>
				</amp-analytics>
			
			<?php } ?>
		
		
		
			
		
		</footer>
		
	</body>
	
</html>