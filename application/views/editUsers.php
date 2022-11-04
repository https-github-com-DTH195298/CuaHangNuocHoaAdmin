<?php foreach ($mangketqua as $value): ?>
<div class="container-fluid">
        <form class="form-control-lg" action="../updateUsers" method="post" enctype="multidata/form-data">
          <!-- Name input -->
          <div class="form-outline" >
            <br>
            <input type="hidden" name="id" class="form-control-lg" value="<?=$value['id']?>" />
          </div>
          <div class="form-outline" >
            <label class="form-label" >email</label>
            <br>
            <input type="text" name="email" class="form-control-lg" value="<?=$value['email']?>" />
          </div>
          <div class="form-outline">
            <label class="form-label" >password</label>
            <br>
            <input type="text" name="password" class="form-control-lg" value="<?=$value['password']?>" />
          </div>
          <div class="form-outline">
            <label class="form-label">avatar</label>
            <br>
            <input type="text" name="avatar" class="form-control-lg" value="<?=$value['avatar']?>" />
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