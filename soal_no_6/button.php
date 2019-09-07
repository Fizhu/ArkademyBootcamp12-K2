
<!-- Modal -->
<div class="modal fade" id='edit<?php echo $row['id']; ?>' role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">EDIT DATA</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			<?php
				$edit=mysqli_query($conn,"select * from Name where id='".$row['id']."'");
				$erow=mysqli_fetch_array($edit);
			?>
          <form class="form-horizontal" method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
            <div class="form-group">
              <div class="col">
                <input type="text" class="form-control" id="name" placeholder="Name .." name="name">
              </div>
            </div>
            <div class="form-group">
              <div class="col">
              <select name="id_work" class="form-control" id="work" required>
                <option value="" disabled selected>Work ..</option>
                <option value="1">Frontend Dev</option>
                <option value="2">Backend Dev</option>
              </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col">
              <select name="id_salary" class="form-control" id="salary" required>
                <option value="" disabled selected>Salary ..</option>
                <option value="1">Rp. 10.000.000</option>
                <option value="2">Rp. 12.000.000</option>
              </select>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col">
                <button type="submit" class="btn btn-info" value="Update" style="float: right;">&nbsp;SIMPAN&nbsp;</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>