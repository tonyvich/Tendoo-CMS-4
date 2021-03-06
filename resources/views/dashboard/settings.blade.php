@extends( 'dashboard.layout.master' )

@section( 'dashboard.body' )

<div class="row-col">
  <div class="col-sm-3 col-lg-2 b-r">
    <div class="p-y">
      <div class="nav-active-border left b-primary">
        <ul class="nav nav-sm">
          <li class="nav-item">
            <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab-1" aria-expanded="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab-2" aria-expanded="false">Account Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab-3" aria-expanded="false">Emails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab-4" aria-expanded="false">Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block active" href="#" data-toggle="tab" data-target="#tab-5" aria-expanded="true">Security</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-9 col-lg-10 light bg">
    <div class="tab-content pos-rlt">
      <div class="tab-pane" id="tab-1" aria-expanded="false">
        <div class="p-a-md b-b _600">Public profile</div>
        <form role="form" class="p-a-md col-md-6">
          <div class="form-group">
            <label>Profile picture</label>
            <div class="form-file">
              <input type="file">
              <button class="btn white">Upload new picture</button>
            </div>
          </div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control">
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Available for hire
            </label>
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane" id="tab-2" aria-expanded="false">
        <div class="p-a-md b-b _600">Account settings</div>
        <form role="form" class="p-a-md col-md-6">
          <div class="form-group">
            <label>Client ID</label>
            <input type="text" disabled="" class="form-control" value="d6386c0651d6380745846efe300b9869">
          </div>
          <div class="form-group">
            <label>Secret Key</label>
            <input type="text" disabled="" class="form-control" value="3f9573e88f65787d86d8a685aeb4bd13">
          </div>
          <div class="form-group">
            <label>App Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>App URL</label>
            <input type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane" id="tab-3" aria-expanded="false">
        <div class="p-a-md b-b _600">Emails</div>
        <form role="form" class="p-a-md col-md-6">
          <p>E-mail me whenever</p>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone posts a comment
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone follow me
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
            </label>
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane" id="tab-4" aria-expanded="false">
        <div class="p-a-md b-b _600">Notifications</div>
        <form role="form" class="p-a-md col-md-6">
          <p>Notice me whenever</p>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone seeing my profile page
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone follow me
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
            </label>
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane active" id="tab-5" aria-expanded="true">
        <div class="p-a-md b-b _600">Security</div>
        <div class="p-a-md">
          <div class="clearfix m-b-lg">
            <form role="form" class="col-md-6 p-a-0">
              <div class="form-group">
                <label>Old Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="form-group">
                <label>New Password Again</label>
                <input type="password" class="form-control">
              </div>
              <button type="submit" class="btn btn-info m-t">Update</button>
            </form>
          </div>

          <p><strong>Delete account?</strong></p>
          <button type="submit" class="btn btn-danger m-t" data-toggle="modal" data-target="#modal">Delete Account</button>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection