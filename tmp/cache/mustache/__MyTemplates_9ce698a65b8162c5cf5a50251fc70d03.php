<?php

class __MyTemplates_9ce698a65b8162c5cf5a50251fc70d03 extends Mustache_Template
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
        $buffer .= $this->section286f0c60935455a05d2ef5cdb6b2ae9c($context, $indent, $value);

        return $buffer;
    }

    private function section8564447c76ed0202884438a2b478ff4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                            <p>{{message}}</p>
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
                
                $buffer .= $indent . '                                            <p>';
                $value = $this->resolveValue($context->find('message'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section286f0c60935455a05d2ef5cdb6b2ae9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-content-wrap">
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-tle fw-normal">Change Password1111</h2>
                                    <div class="nk-block-des">
                                        {{#message}}
                                            <p>{{message}}</p>
                                        {{/message}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">

                            <div class="card-inner">
                                <form action="/changePasswordAdmin" class="validatedForm" method="post" class="gy-3" autocomplete="off">
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Old Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="oldPassword" placeholder="Enter Old Password" ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">New Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="newPassword" id="newPassword" placeholder="Enter New Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-label">Re-enter New Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="re_enterPassword" placeholder="Re-enter New Password" ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-5 offset-lg-3">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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


    <style>
        .tb-member-action .d-md-inline a {
            font-size: 13px;
            margin-right: 10px;
        }
    </style>
        <script>
            jQuery(\'.validatedForm\').validate({
                rules: {
                    oldPassword: {
                        required: true,
                    },
                    newPassword: {
                        required: true,
                        minlength: 3
                    },
                    re_enterPassword: {
                        required: true,
                        equalTo: "#newPassword"
                    }

                },
                messages:{
                    oldPassword: {
                        required: "This is required field"
                    },
                    newPassword: {
                        required: "This is required field",
                        minlength: "Please enter atleast 3 characters"
                    },
                    re_enterPassword: {
                        required: "This is required field",
                        equalTo: "Password doesn\'t match with New Password"
                    }
                }
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
                
                $buffer .= $indent . '    <div class="nk-content ">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <div class="nk-content-inner">
';
                $buffer .= $indent . '                <div class="nk-content-body">
';
                $buffer .= $indent . '                    <div class="nk-content-wrap">
';
                $buffer .= $indent . '                        <div class="nk-block-head nk-block-head-lg">
';
                $buffer .= $indent . '                            <div class="nk-block-between-md g-4">
';
                $buffer .= $indent . '                                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                                    <h2 class="nk-tle fw-normal">Change Password1111</h2>
';
                $buffer .= $indent . '                                    <div class="nk-block-des">
';
                // 'message' section
                $value = $context->find('message');
                $buffer .= $this->section8564447c76ed0202884438a2b478ff4c($context, $indent, $value);
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
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            <div class="card-inner">
';
                $buffer .= $indent . '                                <form action="/changePasswordAdmin" class="validatedForm" method="post" class="gy-3" autocomplete="off">
';
                $buffer .= $indent . '                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                        <div class="col-lg-3">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <label class="form-label">Old Password</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text" class="form-control" name="oldPassword" placeholder="Enter Old Password" ">
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                        <div class="col-lg-3">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <label class="form-label">New Password</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text" class="form-control" name="newPassword" id="newPassword" placeholder="Enter New Password">
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                        <div class="col-lg-3">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <label class="form-label">Re-enter New Password</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text" class="form-control" name="re_enterPassword" placeholder="Re-enter New Password" ">
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="row g-3">
';
                $buffer .= $indent . '                                        <div class="col-lg-5 offset-lg-3">
';
                $buffer .= $indent . '                                            <div class="form-group mt-2">
';
                $buffer .= $indent . '                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </form>
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
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <style>
';
                $buffer .= $indent . '        .tb-member-action .d-md-inline a {
';
                $buffer .= $indent . '            font-size: 13px;
';
                $buffer .= $indent . '            margin-right: 10px;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    </style>
';
                $buffer .= $indent . '        <script>
';
                $buffer .= $indent . '            jQuery(\'.validatedForm\').validate({
';
                $buffer .= $indent . '                rules: {
';
                $buffer .= $indent . '                    oldPassword: {
';
                $buffer .= $indent . '                        required: true,
';
                $buffer .= $indent . '                    },
';
                $buffer .= $indent . '                    newPassword: {
';
                $buffer .= $indent . '                        required: true,
';
                $buffer .= $indent . '                        minlength: 3
';
                $buffer .= $indent . '                    },
';
                $buffer .= $indent . '                    re_enterPassword: {
';
                $buffer .= $indent . '                        required: true,
';
                $buffer .= $indent . '                        equalTo: "#newPassword"
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                },
';
                $buffer .= $indent . '                messages:{
';
                $buffer .= $indent . '                    oldPassword: {
';
                $buffer .= $indent . '                        required: "This is required field"
';
                $buffer .= $indent . '                    },
';
                $buffer .= $indent . '                    newPassword: {
';
                $buffer .= $indent . '                        required: "This is required field",
';
                $buffer .= $indent . '                        minlength: "Please enter atleast 3 characters"
';
                $buffer .= $indent . '                    },
';
                $buffer .= $indent . '                    re_enterPassword: {
';
                $buffer .= $indent . '                        required: "This is required field",
';
                $buffer .= $indent . '                        equalTo: "Password doesn\'t match with New Password"
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        </script>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
