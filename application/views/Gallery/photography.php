  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Photography
        </h4>
      </div>
      <div class="modal-body">
        <div class="gallery-text">
          <div class="row featurette">
              <?php echo($item['description']) ?>
              <img class="featurette-image img-responsive center-block" src="<?php echo APP_URL ?>/application/resources/gallery/<?php echo($item['name']) ?>" alt="Generic placeholder image">
          </div>
        </div>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal -->