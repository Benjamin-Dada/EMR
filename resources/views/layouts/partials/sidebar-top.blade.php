 @if(Auth::user()->role === "0")
    <div class="pull-left" style="padding-bottom: 10px;">
        <img src="{{asset('/images/Img/user8-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px;">
        {{Auth::user()->name}} <br>
        <small><i class="fa fa-circle text-success"></i> Admin</small>
    </div>
    @endif

    @if(Auth::user()->role==="1")
    <div class="pull-left" style="padding-bottom: 10px;">    
        <img src="{{asset('/images/Img/user7-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Front Desk</small></div>
    @endif

    @if(Auth::user()->role==="2")
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user5-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
     </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Nurse</small></div>
    @endif

    @if(Auth::user()->role==="3" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small><i class="icon-stethoscope"></i> Doctor</small></div>
    @endif

    @if(Auth::user()->role==="4" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Lab</small></div>
    @endif
    @if(Auth::user()->role==="5" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Pharmacy</small></div>
    @endif
