                        <form method="POST" action="{{ route('step1') }}">
                            @csrf
                            <h3>Contact Info</h3>

                            <div class="form-group row">
                                <div class="col-md-6">

                                    <div class="col-md-12">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                                        <!-- FEDERAL NATIONAL MORTGAGE ASSOC -->
                                        <label for="owner" class="">{{ __('SELLER: OWNER OF RECORD (unless otherwise stated)') }}</label>
                                        <input id="owner" type="text" class="form-control{{ $errors->has('owner') ? ' is-invalid' : '' }}" name="owner" value="{{ old('owner') }}" required autofocus>

                                        @if ($errors->has('owner'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('owner') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    
                                    <div class="col-md-12">
                                        <label for="country" class="">{{ __('Country') }}</label>
                                        <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label for="legal_description" class="">{{ __('Legal Description') }}</label>
                                        <input id="legal_description" type="text" class="form-control{{ $errors->has('legal_description') ? ' is-invalid' : '' }}" name="legal_description" value="{{ old('legal_description') }}" >

                                        @if ($errors->has('legal_description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('legal_description') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="deposit" class="">{{ __('Deposit') }}</label>
                                        <input id="deposit" type="text" class="form-control{{ $errors->has('deposit') ? ' is-invalid' : '' }}" name="deposit" value="{{ old('deposit') }}" >

                                        @if ($errors->has('deposit'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('deposit') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="today_day" class="">{{ __('Today\'s Day') }}</label>
                                        <input id="today_day" type="text" class="form-control{{ $errors->has('today_day') ? ' is-invalid' : '' }}" name="today_day" value="{{ old('today_day') }}" >

                                        @if ($errors->has('today_day'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('today_day') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="buyer_address" class="">{{ __('Buyer\'s Address') }}</label>
                                        <input id="buyer_address" type="text" class="form-control{{ $errors->has('buyer_address') ? ' is-invalid' : '' }}" name="buyer_address" value="{{ old('buyer_address') }}" >

                                        @if ($errors->has('buyer_address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('buyer_address') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="broker" class="">{{ __('Name of Listing Brokerage') }}</label>
                                        <input id="broker" type="text" class="form-control{{ $errors->has('broker') ? ' is-invalid' : '' }}" name="broker" value="{{ old('broker') }}" required>

                                        @if ($errors->has('broker'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('broker') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="agent_phone" class="">{{ __('List Agent Phone') }}</label>
                                        <input id="agent_phone" type="text" class="form-control{{ $errors->has('agent_phone') ? ' is-invalid' : '' }}" name="agent_phone" value="{{ old('agent_phone') }}" >

                                        @if ($errors->has('agent_phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('agent_phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="check_amount" class="">{{ __('Check Amount (In Words)') }}</label>
                                        <input id="check_amount" type="text" class="form-control{{ $errors->has('check_amount') ? ' is-invalid' : '' }}" name="check_amount" value="{{ old('check_amount') }}" >

                                        @if ($errors->has('check_amount'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('check_amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="personal_property" class="">{{ __('Personal Property Included') }}</label>
                                        <textarea id="personal_property" class="form-control{{ $errors->has('personal_property') ? ' is-invalid' : '' }}" name="personal_property" >{{ old('personal_property') }}</textarea>

                                        @if ($errors->has('personal_property'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('personal_property') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="rate" class="">{{ __('Rate') }}</label>
                                                <input id="rate" type="number" class="form-control{{ $errors->has('rate') ? ' is-invalid' : '' }}" name="rate" value="{{ old('rate') }}" >

                                                @if ($errors->has('rate'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('rate') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label for="term" class="">{{ __('Term') }}</label>
                                                <input id="term" type="text" class="form-control{{ $errors->has('term') ? ' is-invalid' : '' }}" name="term" value="{{ old('term') }}" required >

                                                @if ($errors->has('term'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('term') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                    
                                    <div class="row col-md-12">
                                        <div class="col-sm-12">
                                            <b>Use a negative number for deposit</b>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="escrow_offer" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Escrow Made With Offer') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="escrow_offer" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Escrow with x days of effective date') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-12 row">
                                        <label for="term" class="col-9">{{ __('Inspection Period') }}</label>
                                        <input id="inspection_period" type="text" class="form-control{{ $errors->has('term') ? ' is-invalid' : '' }} col-3" name="inspection_period" value="10" >   
                                        @if ($errors->has('inspection_period'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('term') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    

                                    <div class="col-md-12">
                                        <label for="sales_agent_name" class="">{{ __('Name of Sales Agent and Commission ($ or %)') }}</label>
                                        <input id="sales_agent_name" type="text" class="form-control{{ $errors->has('sales_agent_name') ? ' is-invalid' : '' }}" name="sales_agent_name" value="{{ old('sales_agent_name') }}" >

                                        @if ($errors->has('sales_agent_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sales_agent_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    
                                    <div class="col-md-12">
                                        <label for="sales_agent_email" class="">{{ __('Sales Agent Email') }}</label>
                                        <input id="sales_agent_email" type="text" class="form-control{{ $errors->has('sales_agent_email') ? ' is-invalid' : '' }}" name="sales_agent_email" value="{{ old('sales_agent_email') }}" >

                                        @if ($errors->has('sales_agent_email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sales_agent_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>



                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="address" class="">{{ __('Address') }}</label>
                                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" >

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="tax_id" class="">{{ __('Tax ID') }}</label>
                                        <input id="tax_id" type="text" class="form-control{{ $errors->has('tax_id') ? ' is-invalid' : '' }}" name="tax_id" value="{{ old('tax_id') }}" >

                                        @if ($errors->has('tax_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tax_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="purchase_price" class="">{{ __('Purchase Price') }}</label>
                                        <input id="purchase_price" type="text" class="form-control{{ $errors->has('purchase_price') ? ' is-invalid' : '' }}" name="purchase_price" value="{{ old('purchase_price') }}">

                                        @if ($errors->has('purchase_price'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('purchase_price') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="sale_price" class="">{{ __('Net (Sale Price - Down Pmt)') }}</label>
                                        <input id="sale_price" type="text" class="form-control{{ $errors->has('sale_price') ? ' is-invalid' : '' }}" name="sale_price" value="{{ old('sale_price') }}" required>

                                        @if ($errors->has('sale_price'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sale_price') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="closing_day" class="">{{ __('Closing Day') }}</label>
                                        <input id="closing_day" type="text" class="form-control{{ $errors->has('closing_day') ? ' is-invalid' : '' }}" name="closing_day" value="{{ old('closing_day') }}" >

                                        @if ($errors->has('closing_day'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('closing_day') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="sign" class="">{{ __('Sign Offer by Date') }}</label>
                                        <input id="sign" type="text" class="form-control{{ $errors->has('sign') ? ' is-invalid' : '' }}" name="sign" value="{{ old('sign') }}" >

                                        @if ($errors->has('sign'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sign') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="agent" class="">{{ __('Name of Listing Agent & Commission ($ or %)') }}</label>
                                        <input id="agent" type="text" class="form-control{{ $errors->has('agent') ? ' is-invalid' : '' }}" name="agent" value="{{ old('agent') }}" >

                                        @if ($errors->has('agent'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('agent') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="agent_email" class="">{{ __('List Agent Email') }}</label>
                                        <input id="agent_email" type="text" class="form-control{{ $errors->has('agent_email') ? ' is-invalid' : '' }}" name="agent_email" value="{{ old('agent_email') }}" required>

                                        @if ($errors->has('agent_email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('agent_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="escrow_check_comment" class="">{{ __('Escrow Check Comment') }}</label>
                                        <textarea id="escrow_check_comment" class="form-control{{ $errors->has('escrow_check_comment') ? ' is-invalid' : '' }}" name="escrow_check_comment" >{{ old('escrow_check_comment') }}</textarea>

                                        @if ($errors->has('escrow_check_comment'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('escrow_check_comment') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-sm-4">
                                            <b>Financing</b>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Cash Buyer" name="financing" id="financing1" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="financing">
                                                    {{ __('Cash Buyer') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Financed Buyer" name="financing" id="financing2" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="financing">
                                                    {{ __('Financed Buyer') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-sm-12">
                                            <b>Choose One</b>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Conventional" name="finance_type" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Conventional') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="FHA" name="finance_type" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('FHA') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="VA" name="finance_type" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('VA') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Adj" name="finance_type" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Adj') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Fix" name="finance_type" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Fix') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Adj and Fix" name="finance_type" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Adj and Fix') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row col-md-12">
                                        <div class="col-sm-4">
                                            <b>Financing</b>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Cash Buyer') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Financed Buyer') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row col-md-12">
                                        <div class="col-sm-12">
                                            <b>Assignability</b>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="May Assign and Release" name="assignability" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('May Assign and Release') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="May Assign Not Release" name="assignability" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('May Assign Not Release') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="May Not Assign" name="assignability" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('May Not Assign') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="selling_brokerage" class="">{{ __('Name of selling brokerage') }}</label>
                                        <input id="selling_brokerage" type="text" class="form-control{{ $errors->has('selling_brokerage') ? ' is-invalid' : '' }}" name="selling_brokerage" value="{{ old('selling_brokerage') }}" >

                                        @if ($errors->has('selling_brokerage'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('selling_brokerage') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="sales_agent_phone" class="">{{ __('Sales Agent Phone') }}</label>
                                        <input id="sales_agent_phone" type="text" class="form-control{{ $errors->has('sales_agent_phone') ? ' is-invalid' : '' }}" name="sales_agent_phone" value="{{ old('sales_agent_phone') }}" >

                                        @if ($errors->has('sales_agent_phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sales_agent_phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-offset-md-1">
                                <button type="submit" class="btn btn-success col-12">next</button>
                            </div>

                        </form>