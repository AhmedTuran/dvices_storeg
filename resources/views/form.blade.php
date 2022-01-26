@if ($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<div class="row">
    <div class="col-6 mb-3">
        <label>device no.</label>
        <input type="text" name="device_no" class="form-control" value="{{old('device_no' , $dev->device_no)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>type of device</label>
        <input type="text" name="type_of_device" class="form-control" value="{{old('type_of_device',$dev->type_of_device)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>the counter of device</label>
        <input type="number" name="device_counter" class="form-control" value="{{old('device_counter',$dev->device_counter)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>device style</label>
        <input type="text" name="divice_style" class="form-control" value="{{old('divice_style', $dev->divice_style)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>device category</label>
        <input type="text" name="divice_category" class="form-control" value="{{old('divice_category',$dev->divice_category)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>SN</label>
        <input type="text" name="SN" class="form-control" value="{{old('SN',$dev->SN)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>oner</label>
        <input type="text" name="oner" class="form-control" value="{{old('oner',$dev->oner)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>main oner</label>
        <input type="text" name="main_oner" class="form-control" value="{{old('main_oner',$dev->main_oner)}}" />
    </div>

    <div class="col-12 mb-3"> 
        <label>maintenance</label>
        <input name="maintenancy_doc" class="form-control" value="{{old('maintenancy_doc',$dev->maintenancy_doc)}}"></input>
    </div>
    <div class="col-6 mb-3">
        <label>maintenance price</label>
        <input type="number" name="maintenancy_price" class="form-control" value="{{old('maintenancy_price',$dev->maintenancy_price)}}" />
    </div>
    <div class="col-6 mb-3">
        <label>date of maintenance</label>
        <input type="datetime-local" name="maintenancy_date" class="form-control" value="{{old('maintenancy_date',$dev->maintenancy_date)}} " />
    </div>
