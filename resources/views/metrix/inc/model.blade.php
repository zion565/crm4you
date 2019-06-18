<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade" id="customer-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="userCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form id="userForm" name="userForm" class="form-horizontal">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 control-label">שם</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="הכנס שם" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label">אימייל</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="הכנס אימייל" value="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">פלאפון</label>
                        <div class="col-sm-9">
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="הכנס פלאפון" value="" required="">
                        </div>
                    </div>

                    <div class="form-group row" data-select2-id="12">
{{--                        <label class="col-md-3 m-t-15">Single Select</label>--}}
                        <label class="col-sm-2 control-label">סטטוס</label>
                        <div class="col-md-9" data-select2-id="11">
                            <select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">בחר סטטוס</option>
                                <optgroup label="סטטוסים מוגדרים" data-select2-id="16">
                                    @foreach($statuses as $status)
                                    <option value={{$status['id']}} data-select2-id="17">{{$status['title']}}</option>

                                    @endforeach
                                </optgroup>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-primary" id="btn-save" value="create">Save changes
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>