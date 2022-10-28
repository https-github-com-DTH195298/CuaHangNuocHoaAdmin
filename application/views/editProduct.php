<?php foreach ($mangketqua as $value): ?>
<div class="container-fluid">
        <form class="form-control-lg" action="../updateProduct" method="post" enctype="multidata/form-data">
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
            <label class="form-label" >brand</label>
            <br>
            <input type="text" name="brand" class="form-control-lg" value="<?=$value['brand']?>" />
          </div>
          <div class="form-outline">
            <label class="form-label" >price</label>
            <br>
            <input type="text" name="price" class="form-control-lg" value="<?=$value['price']?>" />
          </div>
          <div class="form-outline">
            <label class="form-label" >amount</label>
            <br>
            <input type="text" name="amount" class="form-control-lg" value="<?=$value['amount']?>" />
          </div>
          <div class="form-outline" >
            <label class="form-label" >image</label>
            <input type="text" name="Start_Date" class="form-control" value="<?=$value['imageproduct']?>" />
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