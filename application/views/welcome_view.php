    <div class="container">

      <div class="starter-template">
        <h1>Jon Scott Photography</h1>
      </div>
      <div class="row ">
	      <div class="col-md-6 well text-center">
	      <h2 class="">Client Management</h2>
	      	<?php echo anchor('Client/create', 'Add Client', array('class' => 'btn btn-primary btn-block')); ?>
	      	<?php echo anchor('Client/list_clients', 'List Clients', array('class' => 'btn btn-success btn-block')); ?>
	      </div>
	      <div class="col-md-6 well text-center">
	      <h2 class="">Event Management</h2>
	      	<?php echo anchor('Event/create', 'Add Event', array('class' => 'btn btn-primary btn-block')); ?>
	      </div>
      </div>

    </div>