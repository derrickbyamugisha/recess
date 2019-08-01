<?php $__env->startSection('content'); ?> 
 
 <center> <h2 ><b>Donations </b></h2> </center> 
     
 <a href="/donation_form"><div id="add-more-container">
 	<center>
 	<div id="add-more-button">+</div>
 	</center>
 	<p>Receive a donation</p>
 </div></a>
 
  <center>
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr> 			 
            <th> Count </th>
            <th> Donor </th> 
            <th> Amount </th>
            <th> Month </th> 
            <th>  </th>
        </tr>
    </thead>
    <tbody>
 	<!--============================================-->   			 
		<?php if(count($donation_data) > 0): ?>
		  <?php $__currentLoopData = $donation_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="odd gradeX">  
				<td class="left"><?php echo e($d_data->donationID); ?></td>
				<td class="left"><?php echo e($d_data->donatedBy); ?></td>
				<td class="left"><?php echo e($d_data->amountdonated); ?></td> 
				<td class="left"><?php echo e($d_data->month); ?></td>   
			</tr>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	   <?php endif; ?>
	   </tbody>
	   </table>
	<!--============================================-->
 <div style="min-height:162px;"></div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>