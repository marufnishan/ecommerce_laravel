<div class="content">
    <div class="container-fluid" style="background: #FFFFFF;">
        <div class="row ">
            <x-sidebar />
            <div id="main" class="smain">
                <div class="col-md-12" style="margin: 0; padding:0; background:black ">
                    <div class="col-md-6"><button class="openbtn" onclick="openNav()">☰ DASHBOARD</button></div>
                    <div class="col-md-6" id="dhome">
                        <a href="/">
                            <button class="openbtn pull-right">
                                <img src="{{ asset('assets/images/logo-top-1.png') }}"
                                    style="height:32px; width:32px">HOME
                            </button>
                        </a>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-8" style="padding-top: 10px ;">
                                All Sellers
                            </div>
                            <div class="col-md-4" style="padding-top: 10px">
                                <input type="text" class="form-control" placeholder="Search...."
                                    wire:model="searchTerm" />
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(Session::has('update_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('update_message')}}</div>
                            @endif
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr style="background:#009688;color: white;">
                                        <th>SellerId</th>
                                        <th>Name</th>
                                        <th>Profile Image</th>
                                        <th>Shop Name</th>
                                        <th>Shop Thumbnail</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>NID</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>Country</th>
                                        <th>Zipcode</th>
                                        <th>Service_location</th>
                                        <th>Created_at</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sellers as $seller)
                                    <tr>
                                        <td>{{$seller->seller_id}}</td>
                                        <td>{{$seller->user->name}}</td>
                                        <td><img src="{{asset('assets/images/sellers')}}/{{$seller->image}}" width="60" /></td>
                                        <td>{{$seller->shop_name}}</td>
                                        <td><img src="{{asset('assets/images/shops')}}/{{$seller->shop_thumbnail}}" width="60" /></td>
                                        <td>{{$seller->user->email}}</td>
                                        <td>{{$seller->mobile}}</td>
                                        <td>{{$seller->nid}}</td>
                                        <td>{{$seller->address}}</td>
                                        <td>{{$seller->city}}</td>
                                        <td>{{$seller->province}}</td>
                                        <td>{{$seller->country}}</td>
                                        <td>{{$seller->zipcode}}</td>
                                        <td>{{$seller->service_location}}</td>
                                        <td>{{$seller->created_at}}</td>
                                        <td style="display: inline-block;width: 100px;">
                                            <a 
                                                href="{{route('admin.edit_seller',['seller_id'=>$seller->seller_id])}}"><i
                                                    class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"
                                                onclick="confirm('Are you sure,You want to delete this seller profile ?') || event.stopImmediatePropagation()"
                                                wire:click.prevent="deleteProfile({{$seller->seller_id}})"
                                                style="margin-left:10px;"><i
                                                    class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$sellers->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
