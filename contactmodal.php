<!-- Modal -->
<div class="modal fade" id="successmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

      </div>
       <div class="modal-body">
        <h2>Requirements registered successfuly</h2>
      </div>
      <div class="modal-footer">
      <button type="button"  class="btn btn-secondary"   style="margin: 0 auto;height: 40px;width: 100px;" data-dismiss="modal">Close</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<div id="contact-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3> When Are You Willing To Purchase</h3>
        </div>
        <form id="contactForm" name="contact" role="form">
          <div class="modal-body">				
            <div class="form-group">
              <label for="name">Name*</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email">Email*</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email">Location Preferences</label>
              <input type="text" name="location" class="form-control">
            </div>
            <div class="form-group">
              <label for="message">Not making a purchase today? Tell us when</label><br/>
              <label class="radio-inline">
              <input type="radio" name="optradio" value="Now" checked>
              Now
              </label>
              <label class="radio-inline">
              <input type="radio" name="optradio" value="Just a visit">Just a visit
              </label>
              <label class="radio-inline">
              <input type="radio" name="optradio" value="Within a year">Within a year
              </label>
              <label class="radio-inline">
              <input type="radio" name="optradio" value="no">After 2-3 years
              </label>
            </div>
            <br>
  

            <div class="form-group">
              <label for="message">Buy/Rent</label><br/>
              <label class="radio-inline">
              <input type="radio" name="buy_rent" value="buy">
              Buy
              </label>
              <label class="radio-inline">
              <input type="radio" name="buy_rent" value="rent">Rent
              </label>
            </div>
            <br>
  
            <div class="form-group" >
              <label for="message">Help us know more about you</label><br/>
              
              <select class="form-control" id="type" name="type">
                <option >Type  </option>
                <option value="Apartment">Apartment</option>
                <option value="Shop">Shop</option>
                <option value="OfficeSpace">Office Space</option>
                <option value="Bungalow">Bungalow</option>
              </select> &nbsp;&nbsp;&nbsp;&nbsp;

              <select class="form-control" id="bhk" name="bhk">
                <option >BHK   </option>
                <option value="1RK">1RK</option>
                <option value="1BHK">1BHK</option>
                <option value="2BHK">2BHK</option>
                <option value="3BHK">3 & 3+ BHK</option>
                <option value="3BHK + Servant Quarters">3BHK + Servant Quarters</option>
                <option value="4 & 4+ BHK">4 & 4+ BHK</option>
                <option value="4BHK + Servant Quarters">4BHK + Servant Quarters</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
              <select class="form-control" id="buybudget" name="budget1">
                <option >Budget</option>
                <option value="20L – 50L">20L – 50L</option>
                <option value="50L – 1Cr">50L – 1Cr</option>
                <option value="1Cr – 2Cr">1Cr – 2Cr</option>
                <option value="2Cr – 5Cr">2Cr – 5Cr</option>
                <option value="5Cr+">5Cr+</option>
              </select>
              
              <select class="form-control" id="rentbudget" name="budget">
                <option >Budget</option>
                <option value="5k – 10k">5k – 10k</option>
                <option value="10k – 20k">10k – 20k</option>
                <option value="20k – 30k">20k – 30k</option>
                <option value="30k – 50k">30k – 50k</option>
                <option value="50k+">50k+</option>
              </select>
              </div>
              <br>
              <div class="form-group">
              <label for="message">Do you belive in Vaastu Shastra?</label><br/>
              <label class="radio-inline">
              <input type="radio" name="vaastu" value="yes">
              Yes
              </label>
              <label class="radio-inline">
              <input type="radio" name="vaastu" value="no">No
              </label>
            
            </div>
            <br>
            <div class="form-group" id="more-info">
              <label for="message">Directions that you prefer for following</label><br/>
              <select class="form-control" id="door-facing" name="door-facing">
                <option >Door Facing</option>
                <option value="East ">East</option>
                <option value="North">North</option>
                <option value="South">South</option>
                <option value="West">West</option>
                <option value="Northeast">Northeast</option>
                <option value="Southeast">Southeast</option>
                <option value="Southwest">Southwest</option>
                <option value="Northwest">Northwest</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
              <select class="form-control" id="kitchen" name="kitchen">
                <option>Kitchen</option>
                <option value="East ">East</option>
                <option value="North">North</option>
                <option value="South">South</option>
                <option value="West">West</option>
                <option value="Northeast">Northeast</option>
                <option value="Southeast">Southeast</option>
                <option value="Southwest">Southwest</option>
                <option value="Northwest">Northwest</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;
              <select class="form-control" id="bedroom" name="bedroom">
                <option>Bedroom</option>
                <option value="East ">East</option>
                <option value="North">North</option>
                <option value="South">South</option>
                <option value="West">West</option>
                <option value="Northeast">Northeast</option>
                <option value="Southeast">Southeast</option>
                <option value="Southwest">Southwest</option>
                <option value="Northwest">Northwest</option>
              </select>
              </div>
              <br>
  
          <div class="modal-footer">					
            
            <input type="submit" class="btn btn-success" id="submit">
          </div>
        </form>
      </div>
    </div>
  </div>