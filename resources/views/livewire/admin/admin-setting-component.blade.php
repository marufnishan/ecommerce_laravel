<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="email" placeholder="Email" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Phone" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone2</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Phone2" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Address" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Map</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Map" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Twiter</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Twiter" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Facebook</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Facebook" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Pinterest</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Pinterest" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Instagram</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Instagram" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Youtube</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Youtube" class="form-control input-md" />                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>