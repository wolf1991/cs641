  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Registration Modal
        </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo APP_URL ?>/home/response/signup" method="post">
          <div class="form-group">
              <label for="inputEmail3">Email : </label>
              <input type="email" class="form-control" name="inputEmail3" placeholder="Email" >
              <i class="fa fa-user"></i>
          </div>
          <div class="form-group">
              <label for="inputName3">Name : </label>
              <input type="name" class="form-control" name="inputName3" placeholder="Name" >
              <i class="fa fa-user"></i>
          </div>
          <div class="form-group help">
            <label for="inputPassword3">Password : </label>
              <input type="password" class="form-control" name="inputPassword3" placeholder="Password">
              <i class="fa fa-lock"></i>
          </div>
          <div class="form-group help">
            <label for="inputPasswordConfirm3">Confirm Password : </label>
              <input type="password" class="form-control" name="inputPasswordConfirm3" placeholder="Confirm Password">
              <i class="fa fa-lock"></i>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-default">Create</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->