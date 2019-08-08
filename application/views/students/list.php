<div class="row">
    <div class="col-lg-12">           
        <h2>Students CRUD           
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('students/create') ?>"> Create New Student</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Name</th>
          <th>Class</th>
          <th>Contact No</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->name; ?></td>
          <td><?php echo $d->class; ?></td>          
          <td><?php echo $d->contact_no; ?></td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('students/delete/'.$d->id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('students/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>