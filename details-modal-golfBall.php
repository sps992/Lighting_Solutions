<div class="modal fade details-3" id="details-3" tabindex="-1" role="dialog" aria-labelledby="details-3" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h4 class="modal-title text-center">GU10 Bulbs</h4>
    </div>
    <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-4">
            <div class="center-block">
              <img src="images/golfBall.jpg" alt="LED Golf Ball" class="details img-responsive"/>
            </div>
          </div>
          <div class="col-sm-6">
            <h4>Details</h4>
            <p>
             This bulb lasts up to 15 years, has a very low energy consumption, has a smooth and high-quality finish. Has a true replication of incadescent warm white light(2700k).
            </p>
            <form action="add_cart.php" method="post">
              <div class="form-group">
                <div class="col-xs-3">
                  <label for="quantity" id="quantity-label">Quantity:</label>
                  <select name="quantity" id="quantity" class="form-control">
                    <option value=""></option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">Box of 4</option>
                    </select>
                </div>
                <br /><br /><br /><br />
                <div class="form-group">
                  <label for="type">Watts:</label>
                  <select name="type" id="type" class="form-control">
                    <option value=""></option>
                    <option value="">50 Watts</option>
                    </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal">Close</button>
      <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
    </div>
   </div>
 </div>
</div>
