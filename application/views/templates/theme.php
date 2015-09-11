<?php $this->load->view('templates/header');?>
<body>
<div id="wrapper">
<?php $this->load->view('templates/navbar-top');?>
<?php $this->load->view('templates/sidebar');?>
<?php $this->load->view($main_view);?>
</div>
</body>
<?php $this->load->view('templates/footer');?>