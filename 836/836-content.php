<div class="type-836">
        <div class="container">
            <div class="title"><h1>Welcome to our checkout.</h1></div>
            <div class="col-sm-6" >
                <div class="tab-content">
                    <div id="stripe" class="tab-pane fade in active">
                        <br>
                        <div class='form-row'>
                            <div class='form-group required'>
                                <div class='error form-group hide'>
                                    <div class='alert-danger alert'>
                                        Please correct the errors and try again.
                                    </div>
                                </div>
                                <label class='control-label'>Name on Card</label>
                                <input id="nameOnCard" class='form-control' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group card required'>
                                <label class='control-label'>Card Number</label>
                                <input type='number' autocomplete='off' class='form-control card-number'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group card required'>
                                <label class='control-label'>Billing Address</label>
                                <input id="blAddress" autocomplete='off' class='form-control' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group cvc required'>
                                <label class='control-label'>CVC</label>
                                <input id="cvc" autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' type="number">
                            </div>
                            <div class='form-group expiration required'>
                                <label class='control-label'>Expiration</label>
                                <input id="datePicker" class='form-control card-expiry-month' type='text'>
                            </div>
                            <div class='form-group expiration required'>
                                <label class='control-label'>Year</label>
                                <input id="yearsPicker" type='text' class='form-control card-expiry-year'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group'>
                                <label class='control-label'></label>
                                <button class='form-control btn btn-primary' type='submit'> Continue →</button>  
                            </div>
                        </div>    
                    </div>
                </div>
            </div>   
            <div class="col-sm-6">
            <br>
                <label class='control-label'></label><!-- spacing -->
                <div class="alert alert-info">Please choose your method of payment and hit continue. You will then be sent down to pay using your selected payment option.</div>
                <br>
                <div class="btn-group-vertical btn-block">
                    <a class="btn btn-default" data-toggle="tab" href="#stripe">Stripe/Credit Card</a>
                    <a class="btn btn-default" data-toggle="tab" href="#paypal">PayPal</a>
                </div>
                <br><br>
                <div class="jumbotron jumbotron-flat">
                    <div class="center"><h2><i>BALANCE DUE:</i></h2></div>
                    <div class="paymentAmt">$100</div>
                </div>
                <br><br><br>
            </div>
        </div>
</div>