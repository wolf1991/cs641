  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Login Modal
        </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo APP_URL ?>/home/response/login" method="post">
          <div class="form-group">
              <input type="email" class="form-control" name="inputEmail3" placeholder="Email">
              <i class="fa fa-user"></i>
          </div>
          <div class="form-group help">
              <input type="password" class="form-control" name="inputPassword3" placeholder="Password">
              <i class="fa fa-lock"></i>
              <a href="#" class="fa fa-question-circle"></a>
          </div>
          <div class="form-group">
              <div class="main-checkbox">
                  <input type="checkbox" value="None" id="checkbox1" name="check"/>
                  <label for="checkbox1"></label>
              </div>
              <span class="text">Remember me</span>
              <button type="submit"  data-dismiss="modal" class="btn btn-default">Login</button>
          </div>
        </form>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal -->