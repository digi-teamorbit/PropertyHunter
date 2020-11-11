<div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="footer-list-1">
                    <h3>Newsletter Sign Up</h3>
                    <p>Subscribe now and recieved a 50% </p>
                    <form action="{{route('newsletterSubmit')}}" method="post">
                    	@csrf
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group-1">
                          <input type="email" name="email" placeholder="Enter Email ID" required="">
                          <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>