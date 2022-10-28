<?php foreach ($mangketqua as $value): ?>
<div class="container-fluid">
        <form class="form-control-lg" action="../updateStaff" method="post" enctype="multidata/form-data">
          <!-- Name input -->
          <div class="form-outline" >
            <br>
            <input type="hidden" name="id" class="form-control-lg" value="<?=$value['id']?>" />
          </div>
          <div class="form-outline" >
            <label class="form-label" >Name</label>
            <br>
            <input type="text" name="name" class="form-control-lg" value="<?=$value['name']?>" />
          </div>
          <div class="form-outline">
            <label class="form-label" >Position</label>
            <br>
            <input type="text" name="Position" class="form-control-lg" value="<?=$value['Position']?>" />
          </div>
          <div class="form-outline">
            <label class="form-label" >Location</label>
            <br>
            <input type="text" name="Location" class="form-control-lg" value="<?=$value['Location']?>" />
          </div>
          <div class="form-outline">
            <label class="form-label" >Age</label>
            <br>
            <input type="text" name="Age" class="form-control-lg" value="<?=$value['Age']?>" />
          </div>
          <div class="form-outline" >
            <label class="form-label" >Start Day</label>
            <input type="date" name="Start_Date" class="form-control" value="<?=$value['Start_Date']?>" />
            <label for="datetimepickerInline" class="form-label"></label>
        </div>
        <br>
        <div class="form-outline">
            <label class="form-label" >Salary</label>
            <br>
            <input type="text" name="Salary" class="form-control-lg" value="<?=$value['Salary']?>" />
          </div>
          <br>
          <div class="form-outline">
            <br>
          </div>
          <input type="submit" class="form-control-lg" value="Save" />
                    <!-- Submit input -->
</form>
</div>
                <?php endforeach ?>