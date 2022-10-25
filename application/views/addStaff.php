<div class="container-fluid">
        <form class="form-control-lg" action="addStaff_Controller" method="post" enctype="multidata/form-data">
          <!-- Name input -->
          <div class="form-outline" >
            <label class="form-label" >Name</label>
            <br>
            <input type="text" name="name" class="form-control-lg" />
          </div>
          <div class="form-outline">
            <label class="form-label" >Position</label>
            <br>
            <input type="text" name="Position" class="form-control-lg" />
          </div>
          <div class="form-outline">
            <label class="form-label" >Location</label>
            <br>
            <input type="text" name="Location" class="form-control-lg" />
          </div>
          <div class="form-outline">
            <label class="form-label" >Age</label>
            <br>
            <input type="text" name="Age" class="form-control-lg" />
          </div>
          <div class="form-outline" >
            <label class="form-label" >Start Day</label>
            <input type="date" name="Start_Date" class="form-control" />
            <label for="datetimepickerInline" class="form-label"></label>
        </div>
        <br>
        <div class="form-outline">
            <label class="form-label" >Salary</label>
            <br>
            <input type="text" name="Salary" class="form-control-lg" />
          </div>
          <hr>
                    <!-- Submit input -->
            <input type="submit" class="btn btn-primary btn-block mb-4" width="50%">Add Staff</input>
</form>
                </div>