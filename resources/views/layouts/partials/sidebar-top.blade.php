 @if(Auth::user()->role === "Admin")
    <div class="pull-left" style="padding-bottom: 10px;">
        <img src="{{asset('/images/Img/user8-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px;">
        {{Auth::user()->name}} <br>
        <small><i class="fa fa-circle text-success"></i> Admin</small>
    </div>
    @endif

    @if(Auth::user()->role==="Records Officer")
    <div class="pull-left" style="padding-bottom: 10px;">    
        <img src="{{asset('/images/Img/user7-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Records Officer</small></div>
    @endif

    @if(Auth::user()->role==="Nurse")
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user5-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
     </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Nurse</small></div>
    @endif

    @if(Auth::user()->role==="Doctor" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small><i class="icon-stethoscope"></i> Doctor</small></div>
    @endif

    @if(Auth::user()->role==="Lab Attendant" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Lab Attendant</small></div>
    @endif
    @if(Auth::user()->role==="Pharmacist" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Pharmacist</small></div>
    @endif
