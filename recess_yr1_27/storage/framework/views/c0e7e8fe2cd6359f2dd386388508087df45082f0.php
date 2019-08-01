<?php $__env->startSection('content'); ?>

 <center> <h2 id="headline"><b> Agents' payments </b></h2> </center>
 
 <div>
 	<center> 
	 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
		    <tr>  <th colspan="2">Total donations : </th> <td> <?php echo e($other_data['don_total']); ?> </td>  </tr> 
		    <tr>  <td></td> <td> </td> <td></td> <td></td> <td></td>  </tr>
		    <tr>  <th colspan="2">Treasury amount : </th> <td> <?php echo e($other_data['amount_for_treasury']); ?> </td>  </tr> 
			<tr>  <td></td> <td> </td> <td></td> <td></td> <td></td>  </tr> 
			<tr>  <th></th><th colspan="2">Admin's wage : </th> <td> <?php echo e(ceil($other_data['amont_per_unit']*2)); ?> </td> <td></td>   </tr> 
		    <tr > <th> Agent name</th> <th> Username</th> <th> District</th> <th> Is Head?</th> <th> Amount</th>   </tr> 
		</thead>
		<tbody>  
			<!--============================================--> 			
		<?php if(count($agent_data) > 0): ?>
		  <?php $__currentLoopData = $agent_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="odd gradeX">  
				<td class="left"><?php echo e($d_data->agentName); ?></td>  
				<td class="left"><?php echo e($d_data->agentUsername); ?></td> 
				<td class="left"><?php echo e($d_data->districtName); ?></td> 
				<td class="left"><?php echo e($d_data->agentHead); ?></td> 
				<td class="left"><?php echo e(ceil($other_data['amont_per_unit']*$d_data->wageUnits)); ?></td>  <!-- amont_per_unit * wageUnits-->
			</tr>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	   <?php endif; ?>
	<!--============================================-->
		</tbody>
		
	</table> 
</center>
 </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>