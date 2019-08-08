<div class="row">
    <div class="col-lg-12">           
        <h2 class="text-center">Students Edit</h2>        
            <form method="post" action="<?php echo base_url('students/update/'.$student->id);?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" value="<?php echo $student->name; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-3">Class</label>
                            <div class="col-md-9">
                                <input type="text" name="class" class="form-control" value="<?php echo $student->class; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-3">Contact No</label>
                            <div class="col-md-9">
                                <input type="text" name="contact_no" class="form-control" value="<?php echo $student->contact_no; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 pull-right">
                        <input type="submit" name="Save" class="btn" value="Update">
                    </div>
                </div>
                
            </form>
     </div>
</div>
