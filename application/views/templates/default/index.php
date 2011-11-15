<?php
$website_name = (isset($page_title)) ? $page_title . ' - ' . lang('website_name') : lang('website_name');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $website_name; ?></title>
	<base href="<?php echo base_url(); ?>" />
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" />
	<?php echo $head?>
	<?php echo $css?>
	<?php echo $js?>
</head>

<body>
	<div class="container">
		
		<?php echo $this->load->view('header'); ?>

		<section id="main">
			<?php if (isset($page_title)): ?>
			<header class="page-header">
				<h1><?php echo $page_title; ?></h1>
			</header> 
			<?php endif; ?>
			<?php echo $messages?>
			<?php echo $content?>
		</section>

		<?php echo $this->load->view('footer'); ?>
		
	</div>
</body>
</html>