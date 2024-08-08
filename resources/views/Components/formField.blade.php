<div class="row">
    <div class="col-sm-4 ">
        <label for="url" class="form-label">URL</label>
        <input type="text" name="url" id="url" class="form-control" value="{{isset($data) ? $data->url : ""}}">
    </div>

    <div class="col-sm-4 ">
        <label for="update_date" class="form-label">Update Date</label>
        <input type="string" name="update_date" placeholder="Select Nepali Date" id="dateField"
            class="nepali-datepicker form-control" value="{{isset($data) ? toNepaliDate($data->update_date) : ""}}">
        @error('update_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-sm-4 ">
        <label for="customer_name" class="form-label">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name" class="form-control"  value="{{isset($data) ? $data->customer_name : ""}}">

    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control"  value="{{isset($data) ? $data->address : ""}}">

    </div>
    <div class="col-sm-4">
        <label for="user_name" class="form-label">User Name</label>
        <input type="text" name="user_name" id="user_name" class="form-control"  value="{{isset($data) ? $data->user_name : ""}}">

    </div>
    <div class="col-sm-4">
        <label for="password" class="form-label">Password</label>
        <input type="text" name="password" id="password" class="form-control"  value="{{isset($data) ? $data->password : ""}}">

    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <label for="server" class="form-label">Server</label>
        <input type="text" name="server" id="server" class="form-control"  value="{{isset($data) ? $data->server : ""}}">

    </div>
    <div class="col-sm-4">
        <label for="folder" class="form-label">Folder</label>
        <input type="text" name="folder" id="folder" class="form-control" value="{{isset($data) ? $data->folder : ""}}">

    </div>
    <div class="col-sm-4">
        <label for="mode" class="form-label">Mode</label>
        <input type="text" name="mode" id="mode" class="form-control"  value="{{isset($data) ? $data->mode : ""}}">

    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <label for="Date" class="form-label">Date</label>
        <input type="string" name="date" placeholder="Select Nepali Date" class="nepali-datepicker form-control"  value="{{isset($data) ? toNepaliDate($data->date) : ""}}">
        @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="col-sm-4">
        <label for="call_date" class="form-label">Call Date</label>
        <input type="string" name="call_date" placeholder="Select Nepali Date" class="nepali-datepicker form-control"  value="{{isset($data) ? toNepaliDate($data->call_date) : ""}}">
        @error('call_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="col-sm-4">
        <label for="response_type" class="form-label">Response Type</label>
        <input type="text" name="response_type" id="response_type" class="form-control"  value="{{isset($data) ? $data->response_type : ""}}">

    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <label for="database_detail" class="form-label">Database Detail</label>
        <input type="text" name="database_detail" id="database_detail" class="form-control"  value="{{isset($data) ? $data->database_detail : ""}}">

    </div>
    <div class="col-sm-4">
        <label for="status" class="form-label">Status</label>
        <input type="number" name="status" id="status" class="form-control" value="{{isset($data) ? $data->status : ""}}">
        @error('status')
            <div>{{ $message }}</div>
        @enderror

    </div>
    <div class="col-sm-4">
        <label for="age" class="form-label">Age:</label>
        <input type="number" name="age" id="age" class="form-control" value="{{isset($data) ? $data->age : ""}}">
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>