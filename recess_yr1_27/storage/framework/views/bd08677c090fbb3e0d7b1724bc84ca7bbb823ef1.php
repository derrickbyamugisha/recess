<?php $__env->startSection('content'); ?>
 
 <center> <h2 ><b>List of districts </b></h2> </center>
 
 <center>
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr>
        	<th></th>
            <th> Name </th>
            <th> Head agent </th>
            <th> Number of members </th>
            <th> Agents </th>   
        </tr>
    </thead>
    <tbody>
 <!--============================================-->
		<?php if(count($district_data) > 0): ?>
		  <?php $__currentLoopData = $district_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="odd gradeX">
				<td class="patient-img">
						<img src="img/doc/doc1.svg" alt="">
				</td>
				<td><?php echo e($d_data->districtName); ?></td>
				<td class="left"><?php echo e($d_data->headAgent); ?></td>
				<td class="left"><?php echo e($d_data->no_of_members); ?></td>
				<td class="left"><?php echo e($d_data->no_of_agents); ?></td> 
				 
			</tr>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	   <?php endif; ?>
<!--============================================-->
	</tbody>
</table>
</center>
<div style="min-height:162px"></div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>