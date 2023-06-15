<?php

class __MyTemplates_4ad961459f94d70190f831acd786cfb3 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section5abba7bdcab239afc1d0d4793be1dc4c($context, $indent, $value);

        return $buffer;
    }

    private function section04d1d06e93c0c8ffab9ac756f44e4de2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="form-group example-alert">
                                <div class="alert alert-danger alert-icon alert-dismissible">
                                    <em class="icon ni ni-cross-circle"></em> This account has already existed. Please use another email. <button class="close" data-dismiss="alert"></button>
                                </div>
                            </div>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="form-group example-alert">
';
                $buffer .= $indent . '                                <div class="alert alert-danger alert-icon alert-dismissible">
';
                $buffer .= $indent . '                                    <em class="icon ni ni-cross-circle"></em> This account has already existed. Please use another email. <button class="close" data-dismiss="alert"></button>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56023fb16f876f6f17f1858c792c0d52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="form-group example-alert">
                                <div class="alert alert-danger alert-icon alert-dismissible">
                                    <em class="icon ni ni-cross-circle"></em> This email address is incorrect. Please use correct email address. <button class="close" data-dismiss="alert"></button>
                                </div>
                            </div>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="form-group example-alert">
';
                $buffer .= $indent . '                                <div class="alert alert-danger alert-icon alert-dismissible">
';
                $buffer .= $indent . '                                    <em class="icon ni ni-cross-circle"></em> This email address is incorrect. Please use correct email address. <button class="close" data-dismiss="alert"></button>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5abba7bdcab239afc1d0d4793be1dc4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-wrap ">
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="kyc-app wide-sm m-auto">
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal text-center">
                                    <a href="/login" class="logo-link">
                                        <!--<img class="logo-light logo-img logo-img-lg" src="./assets/images/logo-small.png" srcset="./assets/images/logo-small2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="./assets/images/logo-dark-small.png" srcset="./assets/images/logo-dark-small2x.png 2x" alt="logo-dark">-->
                                    </a>
                                    <span class="ml-1">Account Application</span>
                                </h2>
                                <div class="wide-xs mx-auto">
                                    <div class="nk-block-des text-center">
                                      <!--<p>In order to comply with anti money laundering regulations clients will be required to pass indentity verification (KYC/AML) before funding their account (this does not apply to trial accounts).</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            {{#isExistMail}}
                            <div class="form-group example-alert">
                                <div class="alert alert-danger alert-icon alert-dismissible">
                                    <em class="icon ni ni-cross-circle"></em> This account has already existed. Please use another email. <button class="close" data-dismiss="alert"></button>
                                </div>
                            </div>
                            {{/isExistMail}}
                            {{#invalidEmail}}
                            <div class="form-group example-alert">
                                <div class="alert alert-danger alert-icon alert-dismissible">
                                    <em class="icon ni ni-cross-circle"></em> This email address is incorrect. Please use correct email address. <button class="close" data-dismiss="alert"></button>
                                </div>
                            </div>
                            {{/invalidEmail}}
                            <form class="card card-bordered" action="/register" method="post">
                                <input type="hidden" name="userId" value="{{userId}}">
                                <div class="nk-kycfm">
                                    <div class="nk-kycfm-head">
                                        <div class="nk-kycfm-count">01</div>
                                        <div class="nk-kycfm-title">
                                            <h5 class="title">Personal Details</h5>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-content">
                                        <div class="nk-kycfm-note">
                                            <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
                                            <p>Please enter your name as its shown on your goverment issued identification.</p>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="firstName" class="form-control form-control-lg" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="lastName" class="form-control form-control-lg" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="email" name="email" class="form-control form-control-lg" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="mainContactNumber" class="form-control form-control-lg" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="dateOfBirth" class="form-control form-control-lg date-picker-alt" data-date-format="dd-mm-yyyy" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Alternative Contact Details </label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="alternativeContact" class="form-control form-control-lg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-head">
                                        <div class="nk-kycfm-count">02</div>
                                        <div class="nk-kycfm-title">
                                            <h5 class="title">Address Details</h5>
                                            <p class="sub-title">Please ensure the address details you enter below match the details on your KYC/AML documents.</p>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-content">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="addressLine1" class="form-control form-control-lg" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Address Line 2</label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="addressLine2" class="form-control form-control-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">City <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="city" class="form-control form-control-lg" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">County <span class="text-danger"></span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="county" class="form-control form-control-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Country <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <select class="form-select" name="country" data-search="on" data-ui="lg" required>
                                                            
                                                            <option value="Andorra">Andorra</option>
                                                        
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                              
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                   
                                                      
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                              
                                                            <option value="Bulgaria">Bulgaria</option>
                                                 
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                    
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                
                                                            <option value="Colombia">Colombia</option>
                                          
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                              
                                                            <option value="Croatia (Hrvatska)">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                               
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                       
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                   
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="France Metropolitan">France Metropolitan</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                           
                                                            <option value="Germany">Germany</option>
                                                            
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                       
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                      
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                       
                                                            <option value="Japan">Japan</option>
                                                   
                                                            <option value="Latvia">Latvia</option>
                                                  
                                               
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                           
                                                        
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                 
                                                            <option value="Mexico">Mexico</option>
                                                   
                                                            <option value="Monaco">Monaco</option>
                                                    
                                                            <option value="Morocco">Morocco</option>
                                                   
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                 
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                     
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                   
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                         
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                       
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                          
                                                            <option value="San Marino">San Marino</option>
                                                          
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                       
                                                            <option value="Seychelles">Seychelles</option>
                                                          
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                        
                                                            <option value="South Africa">South Africa</option>
                                                          
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="St. Helena">St. Helena</option>
                                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                               
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                           
                                                            <option value="Thailand">Thailand</option>
                                                     
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                 
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                            <option value="Other">Other</option>
                                              
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Post Code <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" name="postalCode" class="form-control form-control-lg" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-head">
                                        <div class="nk-kycfm-count">03</div>
                                        <div class="nk-kycfm-title">
                                            <h5 class="title">Algorithm Type</h5>
                                            <p class="sub-title">Choose the algorithm and investment you want to start with.</p>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-content">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Algorithm Type <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <select class="form-select" id="accountType" name="accountType" data-ui="lg" required>
                                                            <option value="tc">14 Day Trial</option>
                                                            <option value="gd">Apollo</option>
                                                            <option value="gd+">Thor</option>
                                                            <option value="pt">Odin</option>
                                                             <option value="pt">Zeus</option>
                                                             <option value="pt">Staking</option>
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Application Type</label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <select class="form-select" name="applicationType" data-ui="lg" required>
                                                            <option value="individual">Individual</option>
                                                            <option value="corporate">Corporate</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Currency <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <select class="form-select" name="accountCurrency" id="accountCurrency" data-ui="lg" required>
                                                           <option value="USD">USD</option>
                                                           <!-- <option value="EUR">EUR</option>
                                                            <option value="GBP">GBP</option>
                                                           
                                                           
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                            <option value="XRP">XRP</option>
                                                            <option value="LTC">LTC</option>
                                                            
                                                           <!--<option value="CHF">CHF</option>
                                                            <option value="JPY">JPY</option>
                                                            <option value="AUD">AUD</option>-->
                                                         
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Initial Investment <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" id="initialInvestment" min="1000" placeholder="Minimum Investment is $1000" class="form-control form-control-lg" value="1000">
                                                        <input type="hidden" id="initialInvestment1" name="initialInvestment">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label-group">
                                                        <label class="form-label">Affiliate Code</label>
                                                    </div>
                                                    <div class="form-control-group">
                                                        <input type="text" id="promotionCode" class="form-control form-control-lg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-head kycAmlDocuments">
                                        <div class="nk-kycfm-count">04</div>
                                        <div class="nk-kycfm-title">
                                            <h5 class="title">KYC/AML Document Upload</h5>
                                            <p class="sub-title">To verify your identity, please upload any of the following documents.</p>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-content kycAmlDocuments">
                                        <div class="nk-kycfm-note">
                                            <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
                                            <p>In order to complete, please upload any of the following personal document.</p>
                                        </div>
                                        <ul class="nk-kycfm-control-list g-3">
                                            <li class="nk-kycfm-control-item">
                                                <input class="nk-kycfm-control" type="radio" name="id-proof" id="passport" data-title="Passport" checked>
                                                <label class="nk-kycfm-label" for="passport">
                                                    <span class="nk-kycfm-label-icon">
                                                        <div class="label-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.9904 75.9285">
                                                                <path fill="currentColor" d="M27.14,23.73A15.55,15.55,0,1,0,42.57,39.4v-.12A15.5,15.5,0,0,0,27.14,23.73Zm11.42,9.72H33a25.55,25.55,0,0,0-2.21-6.53A12.89,12.89,0,0,1,38.56,33.45ZM31,39.28a26.9929,26.9929,0,0,1-.2,3.24H23.49a26.0021,26.0021,0,0,1,0-6.48H30.8A29.3354,29.3354,0,0,1,31,39.28ZM26.77,26.36h.75a21.7394,21.7394,0,0,1,2.85,7.09H23.91A21.7583,21.7583,0,0,1,26.77,26.36Zm-3.28.56a25.1381,25.1381,0,0,0-2.2,6.53H15.72a12.88,12.88,0,0,1,7.78-6.53ZM14.28,39.28A13.2013,13.2013,0,0,1,14.74,36H20.9a29.25,29.25,0,0,0,0,6.48H14.74A13.1271,13.1271,0,0,1,14.28,39.28Zm1.44,5.83h5.57a25.9082,25.9082,0,0,0,2.2,6.53A12.89,12.89,0,0,1,15.72,45.11ZM27.51,52.2h-.74a21.7372,21.7372,0,0,1-2.85-7.09h6.44A21.52,21.52,0,0,1,27.51,52.2Zm3.28-.56A25.1413,25.1413,0,0,0,33,45.11h5.57a12.84,12.84,0,0,1-7.77,6.53Zm2.59-9.12a28.4606,28.4606,0,0,0,0-6.48h6.15a11.7,11.7,0,0,1,0,6.48ZM14.29,62.6H40v2.6H14.28V62.61ZM56.57,49l1.33-5,2.48.67-1.33,5Zm-6,22.52L55.24,54l2.48.67L53.06,72.14Zm21.6-61.24-29.8-8a5.13,5.13,0,0,0-6.29,3.61h0L33.39,16H6.57A2.58,2.58,0,0,0,4,18.55V70.38A2.57,2.57,0,0,0,6.52,73L6.57,73h29.7l17.95,4.85a5.12,5.12,0,0,0,6.28-3.6v-.06L75.8,16.61a5.18,5.18,0,0,0-3.6066-6.3763L72.18,10.23ZM6.57,70.38V18.55H45.14a2.57,2.57,0,0,1,2.57,2.57V67.79a2.57,2.57,0,0,1-2.55,2.59H6.57ZM73.34,15.91,58,73.48a2.59,2.59,0,0,1-2.48,1.93,2.5192,2.5192,0,0,1-.67-.09l-9-2.42a5.15,5.15,0,0,0,4.37-5.11V47.24l1.32.36,1.33-5-2.49-.67-.16.62V21.94l2.62.71,3.05,10,2.13.57L57.88,24l3.76,1,1.65,3,1.42.39-.25-4.09,2.24-3.42-1.41-.39L62.4,22.15l-3.76-1,4.76-7.92-2.13-.57-7.6,7.14-4-1.08A5.1,5.1,0,0,0,45.14,16H36.05l2.51-9.45a2.57,2.57,0,0,1,3.12-1.84h0l29.81,8.05a2.56,2.56,0,0,1,1.56,1.21A2.65,2.65,0,0,1,73.34,15.91ZM56.57,39.59l.66-2.5,2.44.65L59,40.24Zm4.88,1.31.66-2.51,2.44.66-.65,2.5Zm-9.76-2.61.66-2.51,2.45.66-.66,2.5Z" transform="translate(-3.9995 -2.101)" fill="#6476ff" /></svg>
                                                        </div>
                                                    </span>
                                                    <span class="nk-kycfm-label-text">Passport</span>
                                                </label>
                                            </li>
                                            <li class="nk-kycfm-control-item">
                                                <input class="nk-kycfm-control" type="radio" name="id-proof" id="national-id" data-title="National ID">
                                                <label class="nk-kycfm-label" for="national-id">
                                                    <span class="nk-kycfm-label-icon">
                                                        <div class="label-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 63.0105">
                                                                <path fill="currentColor" d="M76,18.79,56.53,9.56a6.19,6.19,0,0,0-5.19,0l-19.5,9.23a3.35,3.35,0,0,0-1.9,2.55H8.33A6.26,6.26,0,0,0,2,27.51v38.3A6.27,6.27,0,0,0,8.33,72H71.67A6.27,6.27,0,0,0,78,65.81v-44A3.37,3.37,0,0,0,76,18.79Zm-.56,47a3.77,3.77,0,0,1-3.8,3.71H8.33a3.77,3.77,0,0,1-3.8-3.71V27.51a3.75,3.75,0,0,1,3.7993-3.7H29.87v9.34A34.49,34.49,0,0,0,44,60.41l7.51,5.8a4.11,4.11,0,0,0,4.94,0l7.51-5.8A36.5307,36.5307,0,0,0,75.47,45.62V65.81Zm0-32.66a32.09,32.09,0,0,1-13.1,25.34l-7.51,5.8a1.5,1.5,0,0,1-1.8,0l-7.51-5.8A32.05,32.05,0,0,1,32.4,33.15V21.83A.91.91,0,0,1,33,21l19.5-9.23a3.51,3.51,0,0,1,3,0L74.92,21a.91.91,0,0,1,.55.82V33.15ZM53.87,21.43a12.47,12.47,0,0,0-12.6,12.31,12.62,12.62,0,0,0,25.23,0,12.46,12.46,0,0,0-12.6178-12.3l-.0122,0Zm0,22.14A9.83,9.83,0,1,1,64,33.78a10,10,0,0,1-10.1,9.79Zm3.31-13.22-5.32,5.19-1.18-1.15a1.29,1.29,0,0,0-1.79,0,1.2,1.2,0,0,0-.013,1.697l.013.013h0l2.08,2a1.27,1.27,0,0,0,1.79,0L59,32.09a1.22,1.22,0,0,0,0-1.72h0a1.29,1.29,0,0,0-1.8,0ZM29.87,57.16h-20a1.24,1.24,0,1,0,0,2.47h20a1.24,1.24,0,0,0,0-2.47ZM19.73,62.1H9.89a1.24,1.24,0,0,0,0,2.48h9.84a1.24,1.24,0,0,0,0-2.48Zm8.66-14.28h0L24,45.71a.36.36,0,0,1-.22-.34V44.16a1.878,1.878,0,0,1,.18-.24,10.9991,10.9991,0,0,0,1.35-2.48,2.53,2.53,0,0,0,1.23-2.16V37.51a2.61,2.61,0,0,0-.46-1.43V34a4.69,4.69,0,0,0-1.15-3.43,6.68,6.68,0,0,0-5.19-1.85,6.67,6.67,0,0,0-5.18,1.85A4.61,4.61,0,0,0,13.4,34v2a2.46,2.46,0,0,0-.46,1.43v1.78a2.49,2.49,0,0,0,.78,1.81,10.148,10.148,0,0,0,1.52,3v1.2a.36.36,0,0,1-.21.33l-4.1,2.15A4.79,4.79,0,0,0,8.33,52v1.43a1.26,1.26,0,0,0,.37.88,1.33,1.33,0,0,0,.9.36H29.87a1.31,1.31,0,0,0,.9-.36,1.26,1.26,0,0,0,.37-.88V52.11A4.76,4.76,0,0,0,28.39,47.82Zm.21,4.4H10.87V52a2.27,2.27,0,0,1,1.25-2l4.12-2.16a2.85,2.85,0,0,0,1.54-2.5V43.72a1.3,1.3,0,0,0-.3-.8,7.39,7.39,0,0,1-1.4-2.8,1.53,1.53,0,0,0-.6-.83V37.46a1.22,1.22,0,0,0,.43-.92v-2.7a2.17,2.17,0,0,1,.53-1.58,4.38,4.38,0,0,1,3.28-1,4.43,4.43,0,0,1,3.26,1,2.22,2.22,0,0,1,.55,1.6.8552.8552,0,0,0,0,.16v2.56a1.36,1.36,0,0,0,.46,1l-.08,1.86a1.23,1.23,0,0,0-.84.8,8.5819,8.5819,0,0,1-1.19,2.31c-.1.14-.22.28-.33.41a1.22,1.22,0,0,0-.33.82v1.66A2.86,2.86,0,0,0,22.86,48l4.41,2a2.28,2.28,0,0,1,1.33,2.07v.15Z" transform="translate(-2 -8.9898)" fill="#6476ff" /></svg>
                                                        </div>
                                                    </span>
                                                    <span class="nk-kycfm-label-text">National ID</span>
                                                </label>
                                            </li>
                                            <li class="nk-kycfm-control-item">
                                                <input class="nk-kycfm-control" type="radio" name="id-proof" id="driver-licence" data-title="Driving License">
                                                <label class="nk-kycfm-label" for="driver-licence">
                                                    <span class="nk-kycfm-label-icon">
                                                        <div class="label-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 76.1">
                                                                <path fill="currentColor" d="M70.5,2H9.9A7.9167,7.9167,0,0,0,2,9.9V51.5A7.49,7.49,0,0,0,9.5,59H31.6a1.538,1.538,0,0,0,1.5-1.5A1.4727,1.4727,0,0,0,31.6,56H9.7A4.6946,4.6946,0,0,1,5,51.3V15H75V46.9a1.5,1.5,0,1,0,3,0V10.1C78,5.6,74.7,2,70.5,2ZM75,11H5V9.5A4.6115,4.6115,0,0,1,9.8,5H70.3a4.6115,4.6115,0,0,1,4.8,4.5V11ZM64.3,29.5a4.1408,4.1408,0,0,1-1.5,2.9.9593.9593,0,0,0-.3,1L63,35a.9879.9879,0,0,0,.7.7l3.9,1a2.0749,2.0749,0,0,1,1,.6.972.972,0,0,0,1.4-.1h0a.9663.9663,0,0,0-.1-1.4h0a5.7028,5.7028,0,0,0-2.2-1.1l-3-.8-.1-.5a7.08,7.08,0,0,0,1.6-3.1,1.8059,1.8059,0,0,0,1-1.4l.2-1.7a1.8411,1.8411,0,0,0-.8-1.8l.1-1.1.2-.2a2.5846,2.5846,0,0,0,.1-3.4,4.3847,4.3847,0,0,0-3.8-1.8,7.2965,7.2965,0,0,0-3.5.9c-4.1.1-4.6,2.4-4.6,4,0,.3.1.9.1,1.5-.1.1-.3.2-.4.3a1.9638,1.9638,0,0,0-.5,1.5l.2,1.7a2.0944,2.0944,0,0,0,1.1,1.5,6.1046,6.1046,0,0,0,1.5,3l-.1.6-3,.8A5.4636,5.4636,0,0,0,49.9,40a.9448.9448,0,0,0,1,1H65a1,1,0,0,0,0-2H52.1a3.1116,3.1116,0,0,1,2.5-2.3l3.6-.9a.9879.9879,0,0,0,.7-.7l.4-1.7a.8065.8065,0,0,0-.3-.9,4.6858,4.6858,0,0,1-1.4-2.9.8949.8949,0,0,0-1-.8l-.3-1.6a.9448.9448,0,0,0,1-1v-.1a19.0913,19.0913,0,0,1-.2-2c0-1,0-2,2.9-2a1.4213,1.4213,0,0,0,.6-.2,4.1045,4.1045,0,0,1,2.6-.7,2.1984,2.1984,0,0,1,2.1.9c.4.6.2.8.1.9l-.4.2a.9078.9078,0,0,0-.3.7L64.6,26a.7787.7787,0,0,0,.7.9h.2l-.1,1.6A1.0278,1.0278,0,0,0,64.3,29.5ZM34.1,27a1.538,1.538,0,0,0,1.5-1.5A1.4727,1.4727,0,0,0,34.1,24h-6a1.5,1.5,0,0,0,0,3ZM12.8,37h21a1.5,1.5,0,0,0,0-3h-21a1.538,1.538,0,0,0-1.5,1.5A1.4727,1.4727,0,0,0,12.8,37Zm-.4-10h9a1.5,1.5,0,0,0,0-3h-9a1.5,1.5,0,1,0,0,3ZM74.9,55a2.0059,2.0059,0,0,0-2-2h-.2a7.0756,7.0756,0,0,0-3.1,1c-1.4-3-3.8-5.6-5.4-6.4-1.1-.6-4.9-1.2-8.3-1.2s-7.1.6-8.2,1.2c-1.7.8-4,3.4-5.4,6.4a6.6831,6.6831,0,0,0-3.1-1,2.2959,2.2959,0,0,0-1.4.4A2.0876,2.0876,0,0,0,37,55a5.5585,5.5585,0,0,0,2,4c.2.1.3.2.5.3a16.4687,16.4687,0,0,0-1,5.8c0,2.1.2,5.8,1.5,7.7v2.4a2.9483,2.9483,0,0,0,2.8,2.9h3.4A2.8616,2.8616,0,0,0,49,75.3h0v-1a27.5212,27.5212,0,0,0,7,1,27.5212,27.5212,0,0,0,7-1v1a2.7754,2.7754,0,0,0,2.7,2.8H69a2.8183,2.8183,0,0,0,2.9-2.8h0V72.9c1.2-1.9,1.4-5.5,1.4-7.7a16.0869,16.0869,0,0,0-1-5.8.8643.8643,0,0,0,.6-.3A5.7634,5.7634,0,0,0,74.9,55ZM49.3,50.1a22.2387,22.2387,0,0,1,6.8-.8,30.84,30.84,0,0,1,6.8.8c1.1.5,3.6,3.4,4.6,6.5-2.7.4-9.1,1.2-11.5,1.2s-8.7-.9-11.4-1.2C45.7,53.5,48.2,50.7,49.3,50.1Zm-8.1,6.6c-.1-.2-.3-.3-.4-.5a2.1859,2.1859,0,0,1,.5.3c0,.1,0,.1-.1.2ZM46.1,75H43V74h3v1.1Zm23,0H66V74h3v1.1Zm.4-5H66.9a6.7381,6.7381,0,0,0-2.6.9h0a32.0084,32.0084,0,0,1-8.2,1.4,42.62,42.62,0,0,1-7.6-1.5,6.1538,6.1538,0,0,0-1.9-.2l-4,.4a19.5493,19.5493,0,0,1-.8-5.9,6.15,6.15,0,0,1,.1-1.4c1.9.1,4.2.7,4.2,1.4a1.52,1.52,0,0,0,1.4,1.5h0c.8,0,1.5-1.4,1.5-1.4v-.7c0-3.4-4.7-4-6.5-4.1.2-.5.4-1,.6-1.4h0c.4.1,9.8,1.4,13,1.4S68.7,59.1,69,59h0c.2.5.4.9.6,1.4-1.8.1-6.4.7-6.4,4.1a1.4036,1.4036,0,0,0,2.8,0v-.1c0-.7,2.2-1.3,4.2-1.4a6.602,6.602,0,0,1,.1,1.4A17.2549,17.2549,0,0,1,69.5,70Zm1.6-13.3c0-.1-.1-.1-.1-.2l.5-.3A2.1813,2.1813,0,0,1,71.1,56.7ZM59.2,64h-6a1.5,1.5,0,0,0,0,3h6a1.5,1.5,0,0,0,0-3Z" transform="translate(-2 -2)" fill="#6476ff" /></svg>
                                                        </div>
                                                    </span>
                                                    <span class="nk-kycfm-label-text">Driving License</span>
                                                </label>
                                            </li>
                                        </ul>
                                        <h6 class="title">To avoid delays when verifying account, Please make sure:</h6>
                                        <ul class="list list-sm list-checked">
                                            <li>Your documents are not expired</li>
                                            <li>Document should be good condition and clearly visible.</li>
                                            <li>The name and address match the details given above</li>
                                        </ul>
                                        <div class="nk-kycfm-upload">
                                            <div class="row align-items-center">
                                                <div class="col-sm-8">
                                                    <div class="nk-kycfm-upload-box">
                                                        <form></form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-kycfm-upload">
                                            <h6 class="title nk-kycfm-upload-title">Your identification document here</h6>
                                            <div class="row align-items-center">
                                                <div class="col-sm-8">
                                                    <div class="nk-kycfm-upload-box">
                                                        <form action="/register" class="dropzone needsclick dz-clickable" id="photoIdUpload">
                                                            <input type="hidden" name="userId" value="{{userId}}">
                                                            <input type="hidden" name="docType" value="photoId">
                                                            <div class="dz-message needsclick">
                                                                <span class="note needsclick">Drag and drop file</span>
                                                                <span class="dz-message-or">or</span>
                                                                <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 d-none d-sm-block">
                                                    <div class="mx-md-4">
                                                        <img src="./assets/images/icons/id-front.svg" alt="ID Front">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-kycfm-upload">
                                            <h6 class="title nk-kycfm-upload-title">Upload your proof of address here</h6>
                                            <div class="row align-items-center">
                                                <div class="col-sm-8">
                                                    <div class="nk-kycfm-upload-box">
                                                        <form action="/register" class="dropzone needsclick dz-clickable" id="addressProofUpload">
                                                            <input type="hidden" name="userId" value="{{userId}}">
                                                            <input type="hidden" name="docType" value="addressProof">
                                                            <div class="dz-message needsclick">
                                                                <span class="note needsclick">Drag and drop file</span>
                                                                <span class="dz-message-or">or</span>
                                                                <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 d-none d-sm-block">
                                                    <div class="mx-md-4">
                                                        <img src="./assets/images/icons/id-back.svg" alt="ID Back">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-footer">
                                        <div class="form-group">
                                            <div class="custom-control custom-control-xs custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="tc-agree" required>
                                                <label class="custom-control-label" for="tc-agree">I Have Read The <a href="https://www.rdtmarkets.com/terms-of-service">Terms & Policy</a></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-control-xs custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="info-assure" required>
                                                <label class="custom-control-label" for="info-assure">All The Personal Information I Have Entered Is Correct.</label>
                                            </div>
                                        </div>
                                        <div class="nk-kycfm-action pt-2">
                                            <button type="submit" class="btn btn-lg btn-primary pl-5 pr-5">Create Account</button>
                                            <a href="/login" class="btn btn-lg btn-info pl-5 pr-5">Return to Login</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-footer nk-footer-fluid bg-lighter">
        <div class="container-xl wide-lg">
            <div class="nk-footer-wrap">
                <div class="nk-footer-copyright"> &copy; 2022 Rdtmarkets</div>
                <div class="nk-footer-links">
                    <ul class="nav nav-sm">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.rdtmarkets.com/terms-of-service">Terms & Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.rdtmarkets.com/faq">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="button" id="showConfirmModal" class="btn btn-success" data-toggle="modal" data-target="#modalAlert" hidden/>

<script>
Dropzone.options.photoIdUpload = {
    maxFilesize: 2,
    acceptedFiles: "image/*,application/pdf,.doc,.docx,",
}

Dropzone.options.addressProofUpload = {
    maxFilesize: 2,
    acceptedFiles: "image/*,application/pdf,.doc,.docx,",
}

var registered = "{{registered}}";

$(document).ready(function() {
    if (registered) {
        $(\'#showConfirmModal\').click();
    }

    $(\'.kycAmlDocuments\').hide();

    $(\'#accountType\').on(\'change\', function() {
        var accountType = document.getElementById(\'accountType\').value;
        var currencyOption = \'\';

        if (accountType == \'c/d\') {
             currencyOption = `
                <option value="BTC">BTC</option>
                <option value="LTC">LTC</option>
                <option value="ETH">ETH</option>
                <option value="XRP">XRP</option>
                <option value="LINK">LINK</option>
                <option value="BNB">BNB</option>`;
        } else {
            currencyOption = `
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="CHF">CHF</option>
                <option value="JPY">JPY</option>
                <option value="AUD">AUD</option>`;
        }
        $(\'#accountCurrency\').html(currencyOption);

        $(\'.kycAmlDocuments\').show();

        var initialInvestment = document.getElementById(\'initialInvestment\');
        switch(accountType) {
            case \'tc\':
                initialInvestment.min = 1000;
                initialInvestment.placeholder = "Minimum Investment is 1000";
                $(\'.kycAmlDocuments\').hide();
                break;
            case \'gd\':
                initialInvestment.min = 10000;
                initialInvestment.placeholder = "Minimum Investment is 5,000";
                break;
            case \'gd+\':
                initialInvestment.min = 25000;
                initialInvestment.placeholder = "Minimum Investment is 25,000";
                break;
            case \'pt\':
                initialInvestment.min = 100000;
                initialInvestment.placeholder = "Minimum Investment is 100,000";
                break;
            case \'c/d\':
                initialInvestment.min = 10000;
                initialInvestment.placeholder = "Minimum Investment is 10,000";
                break;
        }
    });

    $(\'#promotionCode\').on(\'change\', function() {
        var accountType = $(\'#accountType\').val();
        if (accountType == \'tc\' && $(this).val() == 250) {
            $(\'#initialInvestment\').val(\'250\');
        }
    });

    $(\'#initialInvestment\').on(\'blur\', function(e) {
        var minInvest = parseInt($(this).attr(\'min\'));
        var initialInvestment = parseInt($(this).val().replace(\',\', \'\'));
        if (isNaN(initialInvestment)) {
            $(this).val(minInvest.toLocaleString(undefined,{ minimumFractionDigits: 0}));
            $(\'#initialInvestment1\').val(minInvest);
        } else {
            if (minInvest > initialInvestment) {
                $(this).val(minInvest.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#initialInvestment1\').val(minInvest);
            } else {
                $(this).val(initialInvestment.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#initialInvestment1\').val(initialInvestment);
            }
        }
    });
});
</script>

';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="nk-wrap ">
';
                $buffer .= $indent . '    <div class="nk-content nk-content-lg nk-content-fluid">
';
                $buffer .= $indent . '        <div class="container-xl wide-lg">
';
                $buffer .= $indent . '            <div class="nk-content-inner">
';
                $buffer .= $indent . '                <div class="nk-content-body">
';
                $buffer .= $indent . '                    <div class="kyc-app wide-sm m-auto">
';
                $buffer .= $indent . '                        <div class="nk-block-head nk-block-head-lg">
';
                $buffer .= $indent . '                            <div class="nk-block-head-content">
';
                $buffer .= $indent . '                                <h2 class="nk-block-title fw-normal text-center">
';
                $buffer .= $indent . '                                    <a href="/login" class="logo-link">
';
                $buffer .= $indent . '                                        <!--<img class="logo-light logo-img logo-img-lg" src="./assets/images/logo-small.png" srcset="./assets/images/logo-small2x.png 2x" alt="logo">
';
                $buffer .= $indent . '                                        <img class="logo-dark logo-img logo-img-lg" src="./assets/images/logo-dark-small.png" srcset="./assets/images/logo-dark-small2x.png 2x" alt="logo-dark">-->
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                    <span class="ml-1">Account Application</span>
';
                $buffer .= $indent . '                                </h2>
';
                $buffer .= $indent . '                                <div class="wide-xs mx-auto">
';
                $buffer .= $indent . '                                    <div class="nk-block-des text-center">
';
                $buffer .= $indent . '                                      <!--<p>In order to comply with anti money laundering regulations clients will be required to pass indentity verification (KYC/AML) before funding their account (this does not apply to trial accounts).</p>-->
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-block">
';
                // 'isExistMail' section
                $value = $context->find('isExistMail');
                $buffer .= $this->section04d1d06e93c0c8ffab9ac756f44e4de2($context, $indent, $value);
                // 'invalidEmail' section
                $value = $context->find('invalidEmail');
                $buffer .= $this->section56023fb16f876f6f17f1858c792c0d52($context, $indent, $value);
                $buffer .= $indent . '                            <form class="card card-bordered" action="/register" method="post">
';
                $buffer .= $indent . '                                <input type="hidden" name="userId" value="';
                $value = $this->resolveValue($context->find('userId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="nk-kycfm">
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-head">
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-count">01</div>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-title">
';
                $buffer .= $indent . '                                            <h5 class="title">Personal Details</h5>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-content">
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-note">
';
                $buffer .= $indent . '                                            <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
';
                $buffer .= $indent . '                                            <p>Please enter your name as its shown on your goverment issued identification.</p>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="row g-4">
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">First Name <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="firstName" class="form-control form-control-lg" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="lastName" class="form-control form-control-lg" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="email" name="email" class="form-control form-control-lg" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="mainContactNumber" class="form-control form-control-lg" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="dateOfBirth" class="form-control form-control-lg date-picker-alt" data-date-format="dd-mm-yyyy" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Alternative Contact Details </label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="alternativeContact" class="form-control form-control-lg">
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-head">
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-count">02</div>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-title">
';
                $buffer .= $indent . '                                            <h5 class="title">Address Details</h5>
';
                $buffer .= $indent . '                                            <p class="sub-title">Please ensure the address details you enter below match the details on your KYC/AML documents.</p>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-content">
';
                $buffer .= $indent . '                                        <div class="row g-4">
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Address Line 1 <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="addressLine1" class="form-control form-control-lg" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Address Line 2</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="addressLine2" class="form-control form-control-lg">
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">City <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="city" class="form-control form-control-lg" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">County <span class="text-danger"></span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="county" class="form-control form-control-lg">
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Country <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <select class="form-select" name="country" data-search="on" data-ui="lg" required>
';
                $buffer .= $indent . '                                                            
';
                $buffer .= $indent . '                                                            <option value="Andorra">Andorra</option>
';
                $buffer .= $indent . '                                                        
';
                $buffer .= $indent . '                                                            <option value="Anguilla">Anguilla</option>
';
                $buffer .= $indent . '                                                            <option value="Antarctica">Antarctica</option>
';
                $buffer .= $indent . '                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
';
                $buffer .= $indent . '                                                            <option value="Argentina">Argentina</option>
';
                $buffer .= $indent . '                                                            <option value="Armenia">Armenia</option>
';
                $buffer .= $indent . '                                                            <option value="Aruba">Aruba</option>
';
                $buffer .= $indent . '                                                            <option value="Australia">Australia</option>
';
                $buffer .= $indent . '                                                            <option value="Austria">Austria</option>
';
                $buffer .= $indent . '                                                            <option value="Azerbaijan">Azerbaijan</option>
';
                $buffer .= $indent . '                                                            <option value="Bahamas">Bahamas</option>
';
                $buffer .= $indent . '                                                            <option value="Bahrain">Bahrain</option>
';
                $buffer .= $indent . '                                                            <option value="Bangladesh">Bangladesh</option>
';
                $buffer .= $indent . '                                                            <option value="Barbados">Barbados</option>
';
                $buffer .= $indent . '                                                            <option value="Belarus">Belarus</option>
';
                $buffer .= $indent . '                                                            <option value="Belgium">Belgium</option>
';
                $buffer .= $indent . '                                                            <option value="Belize">Belize</option>
';
                $buffer .= $indent . '                                              
';
                $buffer .= $indent . '                                                            <option value="Bermuda">Bermuda</option>
';
                $buffer .= $indent . '                                                            <option value="Bhutan">Bhutan</option>
';
                $buffer .= $indent . '                                                            <option value="Bolivia">Bolivia</option>
';
                $buffer .= $indent . '                                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
';
                $buffer .= $indent . '                                                   
';
                $buffer .= $indent . '                                                      
';
                $buffer .= $indent . '                                                            <option value="Brazil">Brazil</option>
';
                $buffer .= $indent . '                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
';
                $buffer .= $indent . '                                              
';
                $buffer .= $indent . '                                                            <option value="Bulgaria">Bulgaria</option>
';
                $buffer .= $indent . '                                                 
';
                $buffer .= $indent . '                                                            <option value="Canada">Canada</option>
';
                $buffer .= $indent . '                                                            <option value="Cape Verde">Cape Verde</option>
';
                $buffer .= $indent . '                                                            <option value="Cayman Islands">Cayman Islands</option>
';
                $buffer .= $indent . '                                                    
';
                $buffer .= $indent . '                                                            <option value="Chile">Chile</option>
';
                $buffer .= $indent . '                                                            <option value="China">China</option>
';
                $buffer .= $indent . '                                                
';
                $buffer .= $indent . '                                                            <option value="Colombia">Colombia</option>
';
                $buffer .= $indent . '                                          
';
                $buffer .= $indent . '                                                            <option value="Cook Islands">Cook Islands</option>
';
                $buffer .= $indent . '                                                            <option value="Costa Rica">Costa Rica</option>
';
                $buffer .= $indent . '                                              
';
                $buffer .= $indent . '                                                            <option value="Croatia (Hrvatska)">Croatia</option>
';
                $buffer .= $indent . '                                                            <option value="Cuba">Cuba</option>
';
                $buffer .= $indent . '                                                            <option value="Cyprus">Cyprus</option>
';
                $buffer .= $indent . '                                                            <option value="Czech Republic">Czech Republic</option>
';
                $buffer .= $indent . '                                                            <option value="Denmark">Denmark</option>
';
                $buffer .= $indent . '                                               
';
                $buffer .= $indent . '                                                            <option value="Dominica">Dominica</option>
';
                $buffer .= $indent . '                                                            <option value="Dominican Republic">Dominican Republic</option>
';
                $buffer .= $indent . '                                                       
';
                $buffer .= $indent . '                                                            <option value="Ecuador">Ecuador</option>
';
                $buffer .= $indent . '                                                            <option value="Egypt">Egypt</option>
';
                $buffer .= $indent . '                                                            <option value="El Salvador">El Salvador</option>
';
                $buffer .= $indent . '                                                   
';
                $buffer .= $indent . '                                                            <option value="Estonia">Estonia</option>
';
                $buffer .= $indent . '                                                            <option value="Ethiopia">Ethiopia</option>
';
                $buffer .= $indent . '                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
';
                $buffer .= $indent . '                                                            <option value="Faroe Islands">Faroe Islands</option>
';
                $buffer .= $indent . '                                                            <option value="Fiji">Fiji</option>
';
                $buffer .= $indent . '                                                            <option value="Finland">Finland</option>
';
                $buffer .= $indent . '                                                            <option value="France">France</option>
';
                $buffer .= $indent . '                                                            <option value="France Metropolitan">France Metropolitan</option>
';
                $buffer .= $indent . '                                                            <option value="French Guiana">French Guiana</option>
';
                $buffer .= $indent . '                                                            <option value="French Polynesia">French Polynesia</option>
';
                $buffer .= $indent . '                                                            <option value="French Southern Territories">French Southern Territories</option>
';
                $buffer .= $indent . '                                           
';
                $buffer .= $indent . '                                                            <option value="Germany">Germany</option>
';
                $buffer .= $indent . '                                                            
';
                $buffer .= $indent . '                                                            <option value="Gibraltar">Gibraltar</option>
';
                $buffer .= $indent . '                                                            <option value="Greece">Greece</option>
';
                $buffer .= $indent . '                                       
';
                $buffer .= $indent . '                                                            <option value="Hong Kong">Hong Kong</option>
';
                $buffer .= $indent . '                                                            <option value="Hungary">Hungary</option>
';
                $buffer .= $indent . '                                                            <option value="Iceland">Iceland</option>
';
                $buffer .= $indent . '                                                            <option value="India">India</option>
';
                $buffer .= $indent . '                                                      
';
                $buffer .= $indent . '                                                            <option value="Ireland">Ireland</option>
';
                $buffer .= $indent . '                                                            <option value="Israel">Israel</option>
';
                $buffer .= $indent . '                                                            <option value="Italy">Italy</option>
';
                $buffer .= $indent . '                                                       
';
                $buffer .= $indent . '                                                            <option value="Japan">Japan</option>
';
                $buffer .= $indent . '                                                   
';
                $buffer .= $indent . '                                                            <option value="Latvia">Latvia</option>
';
                $buffer .= $indent . '                                                  
';
                $buffer .= $indent . '                                               
';
                $buffer .= $indent . '                                                            <option value="Liechtenstein">Liechtenstein</option>
';
                $buffer .= $indent . '                                                            <option value="Lithuania">Lithuania</option>
';
                $buffer .= $indent . '                                                            <option value="Luxembourg">Luxembourg</option>
';
                $buffer .= $indent . '                                                            <option value="Macau">Macau</option>
';
                $buffer .= $indent . '                                                           
';
                $buffer .= $indent . '                                                        
';
                $buffer .= $indent . '                                                            <option value="Malaysia">Malaysia</option>
';
                $buffer .= $indent . '                                                            <option value="Maldives">Maldives</option>
';
                $buffer .= $indent . '                                                            <option value="Mali">Mali</option>
';
                $buffer .= $indent . '                                                            <option value="Malta">Malta</option>
';
                $buffer .= $indent . '                                                            <option value="Marshall Islands">Marshall Islands</option>
';
                $buffer .= $indent . '                                                            <option value="Martinique">Martinique</option>
';
                $buffer .= $indent . '                                                            <option value="Mauritania">Mauritania</option>
';
                $buffer .= $indent . '                                                            <option value="Mauritius">Mauritius</option>
';
                $buffer .= $indent . '                                                 
';
                $buffer .= $indent . '                                                            <option value="Mexico">Mexico</option>
';
                $buffer .= $indent . '                                                   
';
                $buffer .= $indent . '                                                            <option value="Monaco">Monaco</option>
';
                $buffer .= $indent . '                                                    
';
                $buffer .= $indent . '                                                            <option value="Morocco">Morocco</option>
';
                $buffer .= $indent . '                                                   
';
                $buffer .= $indent . '                                                            <option value="Netherlands">Netherlands</option>
';
                $buffer .= $indent . '                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
';
                $buffer .= $indent . '                                                            <option value="New Caledonia">New Caledonia</option>
';
                $buffer .= $indent . '                                                            <option value="New Zealand">New Zealand</option>
';
                $buffer .= $indent . '                                                 
';
                $buffer .= $indent . '                                                            <option value="Norway">Norway</option>
';
                $buffer .= $indent . '                                                            <option value="Oman">Oman</option>
';
                $buffer .= $indent . '                                                            <option value="Pakistan">Pakistan</option>
';
                $buffer .= $indent . '                                                     
';
                $buffer .= $indent . '                                                            <option value="Panama">Panama</option>
';
                $buffer .= $indent . '                                                            <option value="Papua New Guinea">Papua New Guinea</option>
';
                $buffer .= $indent . '                                                            <option value="Paraguay">Paraguay</option>
';
                $buffer .= $indent . '                                                            <option value="Peru">Peru</option>
';
                $buffer .= $indent . '                                                            <option value="Philippines">Philippines</option>
';
                $buffer .= $indent . '                                                   
';
                $buffer .= $indent . '                                                            <option value="Poland">Poland</option>
';
                $buffer .= $indent . '                                                            <option value="Portugal">Portugal</option>
';
                $buffer .= $indent . '                                                         
';
                $buffer .= $indent . '                                                            <option value="Qatar">Qatar</option>
';
                $buffer .= $indent . '                                                            <option value="Reunion">Reunion</option>
';
                $buffer .= $indent . '                                                            <option value="Romania">Romania</option>
';
                $buffer .= $indent . '                                                            <option value="Russian Federation">Russian Federation</option>
';
                $buffer .= $indent . '                                                       
';
                $buffer .= $indent . '                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
';
                $buffer .= $indent . '                                                            <option value="Saint Lucia">Saint Lucia</option>
';
                $buffer .= $indent . '                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
';
                $buffer .= $indent . '                                                          
';
                $buffer .= $indent . '                                                            <option value="San Marino">San Marino</option>
';
                $buffer .= $indent . '                                                          
';
                $buffer .= $indent . '                                                            <option value="Saudi Arabia">Saudi Arabia</option>
';
                $buffer .= $indent . '                                                       
';
                $buffer .= $indent . '                                                            <option value="Seychelles">Seychelles</option>
';
                $buffer .= $indent . '                                                          
';
                $buffer .= $indent . '                                                            <option value="Singapore">Singapore</option>
';
                $buffer .= $indent . '                                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
';
                $buffer .= $indent . '                                                            <option value="Slovenia">Slovenia</option>
';
                $buffer .= $indent . '                                                            <option value="Solomon Islands">Solomon Islands</option>
';
                $buffer .= $indent . '                                                        
';
                $buffer .= $indent . '                                                            <option value="South Africa">South Africa</option>
';
                $buffer .= $indent . '                                                          
';
                $buffer .= $indent . '                                                            <option value="Spain">Spain</option>
';
                $buffer .= $indent . '                                                            <option value="Sri Lanka">Sri Lanka</option>
';
                $buffer .= $indent . '                                                            <option value="St. Helena">St. Helena</option>
';
                $buffer .= $indent . '                                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
';
                $buffer .= $indent . '                                               
';
                $buffer .= $indent . '                                                            <option value="Sweden">Sweden</option>
';
                $buffer .= $indent . '                                                            <option value="Switzerland">Switzerland</option>
';
                $buffer .= $indent . '                                           
';
                $buffer .= $indent . '                                                            <option value="Thailand">Thailand</option>
';
                $buffer .= $indent . '                                                     
';
                $buffer .= $indent . '                                                            <option value="Turkey">Turkey</option>
';
                $buffer .= $indent . '                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
';
                $buffer .= $indent . '                                                 
';
                $buffer .= $indent . '                                                            <option value="Ukraine">Ukraine</option>
';
                $buffer .= $indent . '                                                            <option value="United Arab Emirates">United Arab Emirates</option>
';
                $buffer .= $indent . '                                                            <option value="United Kingdom">United Kingdom</option>
';
                $buffer .= $indent . '                                                            <option value="United States">United States</option>
';
                $buffer .= $indent . '                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
';
                $buffer .= $indent . '                                                            <option value="Other">Other</option>
';
                $buffer .= $indent . '                                              
';
                $buffer .= $indent . '                                                        </select>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Post Code <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" name="postalCode" class="form-control form-control-lg" required>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-head">
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-count">03</div>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-title">
';
                $buffer .= $indent . '                                            <h5 class="title">Algorithm Type</h5>
';
                $buffer .= $indent . '                                            <p class="sub-title">Choose the algorithm and investment you want to start with.</p>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-content">
';
                $buffer .= $indent . '                                        <div class="row g-4">
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Algorithm Type <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <select class="form-select" id="accountType" name="accountType" data-ui="lg" required>
';
                $buffer .= $indent . '                                                            <option value="tc">14 Day Trial</option>
';
                $buffer .= $indent . '                                                            <option value="gd">Apollo</option>
';
                $buffer .= $indent . '                                                            <option value="gd+">Thor</option>
';
                $buffer .= $indent . '                                                            <option value="pt">Odin</option>
';
                $buffer .= $indent . '                                                             <option value="pt">Zeus</option>
';
                $buffer .= $indent . '                                                             <option value="pt">Staking</option>
';
                $buffer .= $indent . '                                                          
';
                $buffer .= $indent . '                                                        </select>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Application Type</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <select class="form-select" name="applicationType" data-ui="lg" required>
';
                $buffer .= $indent . '                                                            <option value="individual">Individual</option>
';
                $buffer .= $indent . '                                                            <option value="corporate">Corporate</option>
';
                $buffer .= $indent . '                                                        </select>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Currency <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <select class="form-select" name="accountCurrency" id="accountCurrency" data-ui="lg" required>
';
                $buffer .= $indent . '                                                           <option value="USD">USD</option>
';
                $buffer .= $indent . '                                                           <!-- <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                                                            <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                                                           
';
                $buffer .= $indent . '                                                           
';
                $buffer .= $indent . '                                                            <option value="BTC">BTC</option>
';
                $buffer .= $indent . '                                                            <option value="ETH">ETH</option>
';
                $buffer .= $indent . '                                                            <option value="XRP">XRP</option>
';
                $buffer .= $indent . '                                                            <option value="LTC">LTC</option>
';
                $buffer .= $indent . '                                                            
';
                $buffer .= $indent . '                                                           <!--<option value="CHF">CHF</option>
';
                $buffer .= $indent . '                                                            <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                                                            <option value="AUD">AUD</option>-->
';
                $buffer .= $indent . '                                                         
';
                $buffer .= $indent . '                                                            
';
                $buffer .= $indent . '                                                        </select>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Initial Investment <span class="text-danger">*</span></label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" id="initialInvestment" min="1000" placeholder="Minimum Investment is $1000" class="form-control form-control-lg" value="1000">
';
                $buffer .= $indent . '                                                        <input type="hidden" id="initialInvestment1" name="initialInvestment">
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-label-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Affiliate Code</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="form-control-group">
';
                $buffer .= $indent . '                                                        <input type="text" id="promotionCode" class="form-control form-control-lg">
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-head kycAmlDocuments">
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-count">04</div>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-title">
';
                $buffer .= $indent . '                                            <h5 class="title">KYC/AML Document Upload</h5>
';
                $buffer .= $indent . '                                            <p class="sub-title">To verify your identity, please upload any of the following documents.</p>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-content kycAmlDocuments">
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-note">
';
                $buffer .= $indent . '                                            <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
';
                $buffer .= $indent . '                                            <p>In order to complete, please upload any of the following personal document.</p>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <ul class="nk-kycfm-control-list g-3">
';
                $buffer .= $indent . '                                            <li class="nk-kycfm-control-item">
';
                $buffer .= $indent . '                                                <input class="nk-kycfm-control" type="radio" name="id-proof" id="passport" data-title="Passport" checked>
';
                $buffer .= $indent . '                                                <label class="nk-kycfm-label" for="passport">
';
                $buffer .= $indent . '                                                    <span class="nk-kycfm-label-icon">
';
                $buffer .= $indent . '                                                        <div class="label-icon">
';
                $buffer .= $indent . '                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.9904 75.9285">
';
                $buffer .= $indent . '                                                                <path fill="currentColor" d="M27.14,23.73A15.55,15.55,0,1,0,42.57,39.4v-.12A15.5,15.5,0,0,0,27.14,23.73Zm11.42,9.72H33a25.55,25.55,0,0,0-2.21-6.53A12.89,12.89,0,0,1,38.56,33.45ZM31,39.28a26.9929,26.9929,0,0,1-.2,3.24H23.49a26.0021,26.0021,0,0,1,0-6.48H30.8A29.3354,29.3354,0,0,1,31,39.28ZM26.77,26.36h.75a21.7394,21.7394,0,0,1,2.85,7.09H23.91A21.7583,21.7583,0,0,1,26.77,26.36Zm-3.28.56a25.1381,25.1381,0,0,0-2.2,6.53H15.72a12.88,12.88,0,0,1,7.78-6.53ZM14.28,39.28A13.2013,13.2013,0,0,1,14.74,36H20.9a29.25,29.25,0,0,0,0,6.48H14.74A13.1271,13.1271,0,0,1,14.28,39.28Zm1.44,5.83h5.57a25.9082,25.9082,0,0,0,2.2,6.53A12.89,12.89,0,0,1,15.72,45.11ZM27.51,52.2h-.74a21.7372,21.7372,0,0,1-2.85-7.09h6.44A21.52,21.52,0,0,1,27.51,52.2Zm3.28-.56A25.1413,25.1413,0,0,0,33,45.11h5.57a12.84,12.84,0,0,1-7.77,6.53Zm2.59-9.12a28.4606,28.4606,0,0,0,0-6.48h6.15a11.7,11.7,0,0,1,0,6.48ZM14.29,62.6H40v2.6H14.28V62.61ZM56.57,49l1.33-5,2.48.67-1.33,5Zm-6,22.52L55.24,54l2.48.67L53.06,72.14Zm21.6-61.24-29.8-8a5.13,5.13,0,0,0-6.29,3.61h0L33.39,16H6.57A2.58,2.58,0,0,0,4,18.55V70.38A2.57,2.57,0,0,0,6.52,73L6.57,73h29.7l17.95,4.85a5.12,5.12,0,0,0,6.28-3.6v-.06L75.8,16.61a5.18,5.18,0,0,0-3.6066-6.3763L72.18,10.23ZM6.57,70.38V18.55H45.14a2.57,2.57,0,0,1,2.57,2.57V67.79a2.57,2.57,0,0,1-2.55,2.59H6.57ZM73.34,15.91,58,73.48a2.59,2.59,0,0,1-2.48,1.93,2.5192,2.5192,0,0,1-.67-.09l-9-2.42a5.15,5.15,0,0,0,4.37-5.11V47.24l1.32.36,1.33-5-2.49-.67-.16.62V21.94l2.62.71,3.05,10,2.13.57L57.88,24l3.76,1,1.65,3,1.42.39-.25-4.09,2.24-3.42-1.41-.39L62.4,22.15l-3.76-1,4.76-7.92-2.13-.57-7.6,7.14-4-1.08A5.1,5.1,0,0,0,45.14,16H36.05l2.51-9.45a2.57,2.57,0,0,1,3.12-1.84h0l29.81,8.05a2.56,2.56,0,0,1,1.56,1.21A2.65,2.65,0,0,1,73.34,15.91ZM56.57,39.59l.66-2.5,2.44.65L59,40.24Zm4.88,1.31.66-2.51,2.44.66-.65,2.5Zm-9.76-2.61.66-2.51,2.45.66-.66,2.5Z" transform="translate(-3.9995 -2.101)" fill="#6476ff" /></svg>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </span>
';
                $buffer .= $indent . '                                                    <span class="nk-kycfm-label-text">Passport</span>
';
                $buffer .= $indent . '                                                </label>
';
                $buffer .= $indent . '                                            </li>
';
                $buffer .= $indent . '                                            <li class="nk-kycfm-control-item">
';
                $buffer .= $indent . '                                                <input class="nk-kycfm-control" type="radio" name="id-proof" id="national-id" data-title="National ID">
';
                $buffer .= $indent . '                                                <label class="nk-kycfm-label" for="national-id">
';
                $buffer .= $indent . '                                                    <span class="nk-kycfm-label-icon">
';
                $buffer .= $indent . '                                                        <div class="label-icon">
';
                $buffer .= $indent . '                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 63.0105">
';
                $buffer .= $indent . '                                                                <path fill="currentColor" d="M76,18.79,56.53,9.56a6.19,6.19,0,0,0-5.19,0l-19.5,9.23a3.35,3.35,0,0,0-1.9,2.55H8.33A6.26,6.26,0,0,0,2,27.51v38.3A6.27,6.27,0,0,0,8.33,72H71.67A6.27,6.27,0,0,0,78,65.81v-44A3.37,3.37,0,0,0,76,18.79Zm-.56,47a3.77,3.77,0,0,1-3.8,3.71H8.33a3.77,3.77,0,0,1-3.8-3.71V27.51a3.75,3.75,0,0,1,3.7993-3.7H29.87v9.34A34.49,34.49,0,0,0,44,60.41l7.51,5.8a4.11,4.11,0,0,0,4.94,0l7.51-5.8A36.5307,36.5307,0,0,0,75.47,45.62V65.81Zm0-32.66a32.09,32.09,0,0,1-13.1,25.34l-7.51,5.8a1.5,1.5,0,0,1-1.8,0l-7.51-5.8A32.05,32.05,0,0,1,32.4,33.15V21.83A.91.91,0,0,1,33,21l19.5-9.23a3.51,3.51,0,0,1,3,0L74.92,21a.91.91,0,0,1,.55.82V33.15ZM53.87,21.43a12.47,12.47,0,0,0-12.6,12.31,12.62,12.62,0,0,0,25.23,0,12.46,12.46,0,0,0-12.6178-12.3l-.0122,0Zm0,22.14A9.83,9.83,0,1,1,64,33.78a10,10,0,0,1-10.1,9.79Zm3.31-13.22-5.32,5.19-1.18-1.15a1.29,1.29,0,0,0-1.79,0,1.2,1.2,0,0,0-.013,1.697l.013.013h0l2.08,2a1.27,1.27,0,0,0,1.79,0L59,32.09a1.22,1.22,0,0,0,0-1.72h0a1.29,1.29,0,0,0-1.8,0ZM29.87,57.16h-20a1.24,1.24,0,1,0,0,2.47h20a1.24,1.24,0,0,0,0-2.47ZM19.73,62.1H9.89a1.24,1.24,0,0,0,0,2.48h9.84a1.24,1.24,0,0,0,0-2.48Zm8.66-14.28h0L24,45.71a.36.36,0,0,1-.22-.34V44.16a1.878,1.878,0,0,1,.18-.24,10.9991,10.9991,0,0,0,1.35-2.48,2.53,2.53,0,0,0,1.23-2.16V37.51a2.61,2.61,0,0,0-.46-1.43V34a4.69,4.69,0,0,0-1.15-3.43,6.68,6.68,0,0,0-5.19-1.85,6.67,6.67,0,0,0-5.18,1.85A4.61,4.61,0,0,0,13.4,34v2a2.46,2.46,0,0,0-.46,1.43v1.78a2.49,2.49,0,0,0,.78,1.81,10.148,10.148,0,0,0,1.52,3v1.2a.36.36,0,0,1-.21.33l-4.1,2.15A4.79,4.79,0,0,0,8.33,52v1.43a1.26,1.26,0,0,0,.37.88,1.33,1.33,0,0,0,.9.36H29.87a1.31,1.31,0,0,0,.9-.36,1.26,1.26,0,0,0,.37-.88V52.11A4.76,4.76,0,0,0,28.39,47.82Zm.21,4.4H10.87V52a2.27,2.27,0,0,1,1.25-2l4.12-2.16a2.85,2.85,0,0,0,1.54-2.5V43.72a1.3,1.3,0,0,0-.3-.8,7.39,7.39,0,0,1-1.4-2.8,1.53,1.53,0,0,0-.6-.83V37.46a1.22,1.22,0,0,0,.43-.92v-2.7a2.17,2.17,0,0,1,.53-1.58,4.38,4.38,0,0,1,3.28-1,4.43,4.43,0,0,1,3.26,1,2.22,2.22,0,0,1,.55,1.6.8552.8552,0,0,0,0,.16v2.56a1.36,1.36,0,0,0,.46,1l-.08,1.86a1.23,1.23,0,0,0-.84.8,8.5819,8.5819,0,0,1-1.19,2.31c-.1.14-.22.28-.33.41a1.22,1.22,0,0,0-.33.82v1.66A2.86,2.86,0,0,0,22.86,48l4.41,2a2.28,2.28,0,0,1,1.33,2.07v.15Z" transform="translate(-2 -8.9898)" fill="#6476ff" /></svg>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </span>
';
                $buffer .= $indent . '                                                    <span class="nk-kycfm-label-text">National ID</span>
';
                $buffer .= $indent . '                                                </label>
';
                $buffer .= $indent . '                                            </li>
';
                $buffer .= $indent . '                                            <li class="nk-kycfm-control-item">
';
                $buffer .= $indent . '                                                <input class="nk-kycfm-control" type="radio" name="id-proof" id="driver-licence" data-title="Driving License">
';
                $buffer .= $indent . '                                                <label class="nk-kycfm-label" for="driver-licence">
';
                $buffer .= $indent . '                                                    <span class="nk-kycfm-label-icon">
';
                $buffer .= $indent . '                                                        <div class="label-icon">
';
                $buffer .= $indent . '                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 76.1">
';
                $buffer .= $indent . '                                                                <path fill="currentColor" d="M70.5,2H9.9A7.9167,7.9167,0,0,0,2,9.9V51.5A7.49,7.49,0,0,0,9.5,59H31.6a1.538,1.538,0,0,0,1.5-1.5A1.4727,1.4727,0,0,0,31.6,56H9.7A4.6946,4.6946,0,0,1,5,51.3V15H75V46.9a1.5,1.5,0,1,0,3,0V10.1C78,5.6,74.7,2,70.5,2ZM75,11H5V9.5A4.6115,4.6115,0,0,1,9.8,5H70.3a4.6115,4.6115,0,0,1,4.8,4.5V11ZM64.3,29.5a4.1408,4.1408,0,0,1-1.5,2.9.9593.9593,0,0,0-.3,1L63,35a.9879.9879,0,0,0,.7.7l3.9,1a2.0749,2.0749,0,0,1,1,.6.972.972,0,0,0,1.4-.1h0a.9663.9663,0,0,0-.1-1.4h0a5.7028,5.7028,0,0,0-2.2-1.1l-3-.8-.1-.5a7.08,7.08,0,0,0,1.6-3.1,1.8059,1.8059,0,0,0,1-1.4l.2-1.7a1.8411,1.8411,0,0,0-.8-1.8l.1-1.1.2-.2a2.5846,2.5846,0,0,0,.1-3.4,4.3847,4.3847,0,0,0-3.8-1.8,7.2965,7.2965,0,0,0-3.5.9c-4.1.1-4.6,2.4-4.6,4,0,.3.1.9.1,1.5-.1.1-.3.2-.4.3a1.9638,1.9638,0,0,0-.5,1.5l.2,1.7a2.0944,2.0944,0,0,0,1.1,1.5,6.1046,6.1046,0,0,0,1.5,3l-.1.6-3,.8A5.4636,5.4636,0,0,0,49.9,40a.9448.9448,0,0,0,1,1H65a1,1,0,0,0,0-2H52.1a3.1116,3.1116,0,0,1,2.5-2.3l3.6-.9a.9879.9879,0,0,0,.7-.7l.4-1.7a.8065.8065,0,0,0-.3-.9,4.6858,4.6858,0,0,1-1.4-2.9.8949.8949,0,0,0-1-.8l-.3-1.6a.9448.9448,0,0,0,1-1v-.1a19.0913,19.0913,0,0,1-.2-2c0-1,0-2,2.9-2a1.4213,1.4213,0,0,0,.6-.2,4.1045,4.1045,0,0,1,2.6-.7,2.1984,2.1984,0,0,1,2.1.9c.4.6.2.8.1.9l-.4.2a.9078.9078,0,0,0-.3.7L64.6,26a.7787.7787,0,0,0,.7.9h.2l-.1,1.6A1.0278,1.0278,0,0,0,64.3,29.5ZM34.1,27a1.538,1.538,0,0,0,1.5-1.5A1.4727,1.4727,0,0,0,34.1,24h-6a1.5,1.5,0,0,0,0,3ZM12.8,37h21a1.5,1.5,0,0,0,0-3h-21a1.538,1.538,0,0,0-1.5,1.5A1.4727,1.4727,0,0,0,12.8,37Zm-.4-10h9a1.5,1.5,0,0,0,0-3h-9a1.5,1.5,0,1,0,0,3ZM74.9,55a2.0059,2.0059,0,0,0-2-2h-.2a7.0756,7.0756,0,0,0-3.1,1c-1.4-3-3.8-5.6-5.4-6.4-1.1-.6-4.9-1.2-8.3-1.2s-7.1.6-8.2,1.2c-1.7.8-4,3.4-5.4,6.4a6.6831,6.6831,0,0,0-3.1-1,2.2959,2.2959,0,0,0-1.4.4A2.0876,2.0876,0,0,0,37,55a5.5585,5.5585,0,0,0,2,4c.2.1.3.2.5.3a16.4687,16.4687,0,0,0-1,5.8c0,2.1.2,5.8,1.5,7.7v2.4a2.9483,2.9483,0,0,0,2.8,2.9h3.4A2.8616,2.8616,0,0,0,49,75.3h0v-1a27.5212,27.5212,0,0,0,7,1,27.5212,27.5212,0,0,0,7-1v1a2.7754,2.7754,0,0,0,2.7,2.8H69a2.8183,2.8183,0,0,0,2.9-2.8h0V72.9c1.2-1.9,1.4-5.5,1.4-7.7a16.0869,16.0869,0,0,0-1-5.8.8643.8643,0,0,0,.6-.3A5.7634,5.7634,0,0,0,74.9,55ZM49.3,50.1a22.2387,22.2387,0,0,1,6.8-.8,30.84,30.84,0,0,1,6.8.8c1.1.5,3.6,3.4,4.6,6.5-2.7.4-9.1,1.2-11.5,1.2s-8.7-.9-11.4-1.2C45.7,53.5,48.2,50.7,49.3,50.1Zm-8.1,6.6c-.1-.2-.3-.3-.4-.5a2.1859,2.1859,0,0,1,.5.3c0,.1,0,.1-.1.2ZM46.1,75H43V74h3v1.1Zm23,0H66V74h3v1.1Zm.4-5H66.9a6.7381,6.7381,0,0,0-2.6.9h0a32.0084,32.0084,0,0,1-8.2,1.4,42.62,42.62,0,0,1-7.6-1.5,6.1538,6.1538,0,0,0-1.9-.2l-4,.4a19.5493,19.5493,0,0,1-.8-5.9,6.15,6.15,0,0,1,.1-1.4c1.9.1,4.2.7,4.2,1.4a1.52,1.52,0,0,0,1.4,1.5h0c.8,0,1.5-1.4,1.5-1.4v-.7c0-3.4-4.7-4-6.5-4.1.2-.5.4-1,.6-1.4h0c.4.1,9.8,1.4,13,1.4S68.7,59.1,69,59h0c.2.5.4.9.6,1.4-1.8.1-6.4.7-6.4,4.1a1.4036,1.4036,0,0,0,2.8,0v-.1c0-.7,2.2-1.3,4.2-1.4a6.602,6.602,0,0,1,.1,1.4A17.2549,17.2549,0,0,1,69.5,70Zm1.6-13.3c0-.1-.1-.1-.1-.2l.5-.3A2.1813,2.1813,0,0,1,71.1,56.7ZM59.2,64h-6a1.5,1.5,0,0,0,0,3h6a1.5,1.5,0,0,0,0-3Z" transform="translate(-2 -2)" fill="#6476ff" /></svg>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </span>
';
                $buffer .= $indent . '                                                    <span class="nk-kycfm-label-text">Driving License</span>
';
                $buffer .= $indent . '                                                </label>
';
                $buffer .= $indent . '                                            </li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                        <h6 class="title">To avoid delays when verifying account, Please make sure:</h6>
';
                $buffer .= $indent . '                                        <ul class="list list-sm list-checked">
';
                $buffer .= $indent . '                                            <li>Your documents are not expired</li>
';
                $buffer .= $indent . '                                            <li>Document should be good condition and clearly visible.</li>
';
                $buffer .= $indent . '                                            <li>The name and address match the details given above</li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-upload">
';
                $buffer .= $indent . '                                            <div class="row align-items-center">
';
                $buffer .= $indent . '                                                <div class="col-sm-8">
';
                $buffer .= $indent . '                                                    <div class="nk-kycfm-upload-box">
';
                $buffer .= $indent . '                                                        <form></form>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-upload">
';
                $buffer .= $indent . '                                            <h6 class="title nk-kycfm-upload-title">Your identification document here</h6>
';
                $buffer .= $indent . '                                            <div class="row align-items-center">
';
                $buffer .= $indent . '                                                <div class="col-sm-8">
';
                $buffer .= $indent . '                                                    <div class="nk-kycfm-upload-box">
';
                $buffer .= $indent . '                                                        <form action="/register" class="dropzone needsclick dz-clickable" id="photoIdUpload">
';
                $buffer .= $indent . '                                                            <input type="hidden" name="userId" value="';
                $value = $this->resolveValue($context->find('userId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                            <input type="hidden" name="docType" value="photoId">
';
                $buffer .= $indent . '                                                            <div class="dz-message needsclick">
';
                $buffer .= $indent . '                                                                <span class="note needsclick">Drag and drop file</span>
';
                $buffer .= $indent . '                                                                <span class="dz-message-or">or</span>
';
                $buffer .= $indent . '                                                                <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </form>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-sm-4 d-none d-sm-block">
';
                $buffer .= $indent . '                                                    <div class="mx-md-4">
';
                $buffer .= $indent . '                                                        <img src="./assets/images/icons/id-front.svg" alt="ID Front">
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-upload">
';
                $buffer .= $indent . '                                            <h6 class="title nk-kycfm-upload-title">Upload your proof of address here</h6>
';
                $buffer .= $indent . '                                            <div class="row align-items-center">
';
                $buffer .= $indent . '                                                <div class="col-sm-8">
';
                $buffer .= $indent . '                                                    <div class="nk-kycfm-upload-box">
';
                $buffer .= $indent . '                                                        <form action="/register" class="dropzone needsclick dz-clickable" id="addressProofUpload">
';
                $buffer .= $indent . '                                                            <input type="hidden" name="userId" value="';
                $value = $this->resolveValue($context->find('userId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                            <input type="hidden" name="docType" value="addressProof">
';
                $buffer .= $indent . '                                                            <div class="dz-message needsclick">
';
                $buffer .= $indent . '                                                                <span class="note needsclick">Drag and drop file</span>
';
                $buffer .= $indent . '                                                                <span class="dz-message-or">or</span>
';
                $buffer .= $indent . '                                                                <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </form>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-sm-4 d-none d-sm-block">
';
                $buffer .= $indent . '                                                    <div class="mx-md-4">
';
                $buffer .= $indent . '                                                        <img src="./assets/images/icons/id-back.svg" alt="ID Back">
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-kycfm-footer">
';
                $buffer .= $indent . '                                        <div class="form-group">
';
                $buffer .= $indent . '                                            <div class="custom-control custom-control-xs custom-checkbox">
';
                $buffer .= $indent . '                                                <input type="checkbox" class="custom-control-input" id="tc-agree" required>
';
                $buffer .= $indent . '                                                <label class="custom-control-label" for="tc-agree">I Have Read The <a href="https://www.rdtmarkets.com/terms-of-service">Terms & Policy</a></label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="form-group">
';
                $buffer .= $indent . '                                            <div class="custom-control custom-control-xs custom-checkbox">
';
                $buffer .= $indent . '                                                <input type="checkbox" class="custom-control-input" id="info-assure" required>
';
                $buffer .= $indent . '                                                <label class="custom-control-label" for="info-assure">All The Personal Information I Have Entered Is Correct.</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="nk-kycfm-action pt-2">
';
                $buffer .= $indent . '                                            <button type="submit" class="btn btn-lg btn-primary pl-5 pr-5">Create Account</button>
';
                $buffer .= $indent . '                                            <a href="/login" class="btn btn-lg btn-info pl-5 pr-5">Return to Login</a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </form>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="nk-footer nk-footer-fluid bg-lighter">
';
                $buffer .= $indent . '        <div class="container-xl wide-lg">
';
                $buffer .= $indent . '            <div class="nk-footer-wrap">
';
                $buffer .= $indent . '                <div class="nk-footer-copyright"> &copy; 2022 Rdtmarkets</div>
';
                $buffer .= $indent . '                <div class="nk-footer-links">
';
                $buffer .= $indent . '                    <ul class="nav nav-sm">
';
                $buffer .= $indent . '                        <li class="nav-item">
';
                $buffer .= $indent . '                            <a class="nav-link" href="https://www.rdtmarkets.com/terms-of-service">Terms & Policy</a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li class="nav-item">
';
                $buffer .= $indent . '                            <a class="nav-link" href="https://www.rdtmarkets.com/faq">FAQ</a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '<input type="button" id="showConfirmModal" class="btn btn-success" data-toggle="modal" data-target="#modalAlert" hidden/>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . 'Dropzone.options.photoIdUpload = {
';
                $buffer .= $indent . '    maxFilesize: 2,
';
                $buffer .= $indent . '    acceptedFiles: "image/*,application/pdf,.doc,.docx,",
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'Dropzone.options.addressProofUpload = {
';
                $buffer .= $indent . '    maxFilesize: 2,
';
                $buffer .= $indent . '    acceptedFiles: "image/*,application/pdf,.doc,.docx,",
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'var registered = "';
                $value = $this->resolveValue($context->find('registered'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '";
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '$(document).ready(function() {
';
                $buffer .= $indent . '    if (registered) {
';
                $buffer .= $indent . '        $(\'#showConfirmModal\').click();
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.kycAmlDocuments\').hide();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#accountType\').on(\'change\', function() {
';
                $buffer .= $indent . '        var accountType = document.getElementById(\'accountType\').value;
';
                $buffer .= $indent . '        var currencyOption = \'\';
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        if (accountType == \'c/d\') {
';
                $buffer .= $indent . '             currencyOption = `
';
                $buffer .= $indent . '                <option value="BTC">BTC</option>
';
                $buffer .= $indent . '                <option value="LTC">LTC</option>
';
                $buffer .= $indent . '                <option value="ETH">ETH</option>
';
                $buffer .= $indent . '                <option value="XRP">XRP</option>
';
                $buffer .= $indent . '                <option value="LINK">LINK</option>
';
                $buffer .= $indent . '                <option value="BNB">BNB</option>`;
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            currencyOption = `
';
                $buffer .= $indent . '                <option value="USD">USD</option>
';
                $buffer .= $indent . '                <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                <option value="AUD">AUD</option>`;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        $(\'#accountCurrency\').html(currencyOption);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'.kycAmlDocuments\').show();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var initialInvestment = document.getElementById(\'initialInvestment\');
';
                $buffer .= $indent . '        switch(accountType) {
';
                $buffer .= $indent . '            case \'tc\':
';
                $buffer .= $indent . '                initialInvestment.min = 1000;
';
                $buffer .= $indent . '                initialInvestment.placeholder = "Minimum Investment is 1000";
';
                $buffer .= $indent . '                $(\'.kycAmlDocuments\').hide();
';
                $buffer .= $indent . '                break;
';
                $buffer .= $indent . '            case \'gd\':
';
                $buffer .= $indent . '                initialInvestment.min = 10000;
';
                $buffer .= $indent . '                initialInvestment.placeholder = "Minimum Investment is 5,000";
';
                $buffer .= $indent . '                break;
';
                $buffer .= $indent . '            case \'gd+\':
';
                $buffer .= $indent . '                initialInvestment.min = 25000;
';
                $buffer .= $indent . '                initialInvestment.placeholder = "Minimum Investment is 25,000";
';
                $buffer .= $indent . '                break;
';
                $buffer .= $indent . '            case \'pt\':
';
                $buffer .= $indent . '                initialInvestment.min = 100000;
';
                $buffer .= $indent . '                initialInvestment.placeholder = "Minimum Investment is 100,000";
';
                $buffer .= $indent . '                break;
';
                $buffer .= $indent . '            case \'c/d\':
';
                $buffer .= $indent . '                initialInvestment.min = 10000;
';
                $buffer .= $indent . '                initialInvestment.placeholder = "Minimum Investment is 10,000";
';
                $buffer .= $indent . '                break;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#promotionCode\').on(\'change\', function() {
';
                $buffer .= $indent . '        var accountType = $(\'#accountType\').val();
';
                $buffer .= $indent . '        if (accountType == \'tc\' && $(this).val() == 250) {
';
                $buffer .= $indent . '            $(\'#initialInvestment\').val(\'250\');
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#initialInvestment\').on(\'blur\', function(e) {
';
                $buffer .= $indent . '        var minInvest = parseInt($(this).attr(\'min\'));
';
                $buffer .= $indent . '        var initialInvestment = parseInt($(this).val().replace(\',\', \'\'));
';
                $buffer .= $indent . '        if (isNaN(initialInvestment)) {
';
                $buffer .= $indent . '            $(this).val(minInvest.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '            $(\'#initialInvestment1\').val(minInvest);
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            if (minInvest > initialInvestment) {
';
                $buffer .= $indent . '                $(this).val(minInvest.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#initialInvestment1\').val(minInvest);
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(this).val(initialInvestment.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#initialInvestment1\').val(initialInvestment);
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '</script>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
