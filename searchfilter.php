<div class="search-form" id="filterdiv"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  <form action="search.php" method="post" name="search">
    <input type="text" class="form-control" name="search" placeholder="Search of Properties">
    <div class="row">
    <div class="col-lg-7">
              <select name="delivery_type" class="form-control">
                <option value="">Rent/Sale</option>
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
              </select>
            </div>
    <div class="col-lg-5">
              <select name="search_price" class="form-control">
                <option>Price</option>
                <option value="1">$5000 - $50,000</option>
                <option value="2">$50,000 - $100,000</option>
                <option value="3">$100,000 - $200,000</option>
                <option value="4">$200,000 - above</option>
              </select>
            </div>
            
            
          </div>

          <div class="row">
          <div class="col-lg-7">
              <select name="property_type" class="form-control">
                <option>Property Type</option>
                <option value="Apartment">Apartment</option>
                <option value="Bungalow">Bungalow</option>
                <option value="Office-Space">Office-Space</option>
              </select>
              </div>
              <div class="col-lg-5">
            <select name="bhk" class="form-control">
                  <option value = "">BHKs</option>
                  <option value="rk">1RK</option>
                  <option value="1">1BHK</option>
                  <option value="2">2BHK</option>
                  <option value="3">3BHK</option>
                  <option value="4">3+BHK</option>
                </select>
              </div>
          </div>
    <input type="text" class="form-control" name="area_search" placeholder="Type Area or Pincode">

          <button name="submit" class="btn btn-primary">Find Now</button>
</form>
  </div>
