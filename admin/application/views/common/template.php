
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/head'); ?>
</head>
<body id="page-top">
	
<?php
$this->load->view('common/header');
$this->load->view($main_content);
$this->load->view('common/footer');
$this->load->view('common/script');

?>
</body>
</html>