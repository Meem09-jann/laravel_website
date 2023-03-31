<!-- FLASH MESSAGE--> 
    @if ($flash = session('message'))
    <div class="alert alert-success alert-dismissable" style="margin: 30px 20px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong style="text-align:center; color: green;" aria-hidden="true">{{Session::get('message')}}</strong>
    </div>
    @endif 
    
    @if ($flash = session('dltmessage'))
    <div class="alert alert-danger alert-dismissable" style="margin: 30px 20px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong style="text-align:center; color: red;" aria-hidden="true">{{Session::get('dltmessage')}}</strong>
    </div>
    @endif 

    @if ($errors->any())
    <div class="alert-dismissable" style="margin: 30px 20px;">
        <ul>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissable">  
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>    
                <li>{{ $error }}</li>
            </div>
        @endforeach   
        </ul>
    </div>
    @endif
<!-- FLASH MESSAGE END--> 