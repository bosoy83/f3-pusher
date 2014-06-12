<div class="well">

<form id="settings-form" role="form" method="post" class="form-horizontal clearfix">

    <div class="clearfix">
        <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
    </div>

    <hr />

    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4">
            <ul class="nav nav-pills nav-stacked">
                <li class="active">
                    <a href="#tab-general" data-toggle="tab"> General Settings </a>
                </li>
                              
            </ul>
        </div>

        <div class="col-lg-10 col-md-9 col-sm-8">

            <div class="tab-content stacked-content">

                <div class="tab-pane fade in active" id="tab-general">
                    <h4>General Settings</h4>
                    
                    <hr />
                    <h5>App Credentials</h5>
                    <p class="help-text">These credentials give you access to the Pusher API. For more information check the documentation on <a target="_blank" href="http://pusher.com/docs/quickstart">how to use these</a>.</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>App ID</label>
                                <input name="pusher[app_id]" placeholder="App ID" value="<?php echo $flash->old('pusher.app_id'); ?>" class="form-control" type="text" />
                            </div>                          
                        </div>
                    </div>
                    <h5>Access Tokens</h5>
                    <p class="help-text">If a token becomes compromised, you can create a new key/secret pair. You will be able to delete the old token when you've updated your app.</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Key</label>
                                <input name="pusher[key]" placeholder="App ID" value="<?php echo $flash->old('pusher.key'); ?>" class="form-control" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label>Secret</label>
                                <input name="pusher[secret]" placeholder="The email address that the system will send from by default" value="<?php echo $flash->old('pusher.secret'); ?>" class="form-control" type="text" />
                            </div>                            
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                
                
                
            </div>

        </div>
    </div>

</form>

</div>