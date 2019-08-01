<?php $__env->startSection('content'); ?> 

 <center> <h2 id="headline"><b>List of agents</b></h2> </center>
 
 <a href="/agent_form"><div id="add-more-container">
 	<center>
 	<div id="add-more-button">+</div>
 	</center>
 	<p>Add a new agent</p>
 </div></a>
 
  <center>
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr> 						 
        	<th></th>
            <th> Name </th>
            <th> Username </th>
            <th> Signature </th>
            <th> District </th>  
            <th> Head Agent ? </th>  
            <th> Salary </th>  
            <th>  </th>
        </tr>
    </thead>
    <tbody>
 	<!--============================================-->
		<?php if(count($agent_data) > 0): ?>
		  <?php $__currentLoopData = $agent_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="odd gradeX">
				<td class="patient-img">
						<img src="img/doc/doc1.svg" alt="">
				</td>
				<td><?php echo e($d_data->agentName); ?></td>
				<td class="left"><?php echo e($d_data->agentUsername); ?></td>
				<td class="left"><?php echo e($d_data->signatre); ?></td>
				<td class="left"><?php echo e($d_data->districtName); ?></td> 
				<td class="left"><?php echo e($d_data->agentHead); ?></td> 
				<td class="left"><?php echo e($d_data->wageUnits); ?></td> 
				<td>
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-pencil"></i>
					</button>
					<button class="btn btn-danger btn-xs">
						<i class="fa fa-trash-o "></i>
					</button>
				</td>
			</tr>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	   <?php endif; ?>
	<!--============================================-->
	</tbody>
</table>
</center>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>