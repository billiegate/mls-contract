                        <form method="POST" action="{{ route('step2') }}">
                            @csrf
                            <h3>Title Company Information</h3>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="contact" class="">{{ __('Contact') }}</label>
                                        <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}">

                                        @if ($errors->has('contact'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('contact') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="company_address" class="">{{ __('Address') }}</label>
                                        <textarea id="company_address" class="form-control{{ $errors->has('company_address') ? ' is-invalid' : '' }}" name="company_address" >{{ old('company_address') }}</textarea>

                                        @if ($errors->has('company_address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('company_address') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="company_email" class="">{{ __('E-mail') }}</label>
                                        <input id="company_email" type="email" class="form-control{{ $errors->has('company_email') ? ' is-invalid' : '' }}" name="company_email" value="{{ old('company_email') }}" >

                                        @if ($errors->has('company_email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('company_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="company_phone" class="">{{ __('Phone') }}</label>
                                        <input id="company_phone" type="text" class="form-control{{ $errors->has('company_phone') ? ' is-invalid' : '' }}" name="company_phone" value="{{ old('company_phone') }}" >

                                        @if ($errors->has('company_phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('company_phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="company_fax" class="">{{ __('Fax') }}</label>
                                        <input id="company_fax" type="text" class="form-control{{ $errors->has('company_fax') ? ' is-invalid' : '' }}" name="company_fax" value="{{ old('company_fax') }}" >

                                        @if ($errors->has('company_fax'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('company_fax') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-sm-12">
                                            <b><u>SHORT SALE ADDENDUM ONLY-(*pg 13)</u></b>
                                        </div>
                                        <div class="col-12">
                                            <h5>Section 3</h5>
                                            <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Except all deadlines" name="deadlines" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Except all deadlines') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="All time periods" name="deadlines" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('All time periods') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <h5>Section 6</h5>
                                            <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="May not accept back up" name="backups" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('May not accept back up') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="May accept back ups" name="backups" id="remember" {{ old('remember') ? 'checked' : '' }}>
backups
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('May accept back ups') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 row">
                                            <input id="inspection_period" type="text" name="inspection_period" value="30" class="form-control col-2">
                                            <label for="term" class="col-9">Days to cancel if no seller delivered written approval (30 days if left blank)</label> 
                                        </div>

                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-12 col-offset-md-1">
                                <button type="submit" class="btn btn-success col-12">next</button>
                            </div>
                    </form>
                            