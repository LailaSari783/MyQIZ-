<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ Str::singular(ucwords(Request::segment(1))) }}{{ Request::segment(2) ? ' - ' . ucwords(Request::segment(2)) : '' }} Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            @role('admin')
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                {{ Str::singular(ucwords(Request::segment(1))) }}{{ Request::segment(2) ? ' - ' . ucwords(Request::segment(2)) : '' }}
                Page
            </li>
        @endrole


        @role('lecturer')
            <li class="breadcrumb-item">
                <a href="{{ route('lecturer.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                {{ Str::singular(ucwords(Request::segment(1))) }}{{ Request::segment(2) ? ' - ' . ucwords(Request::segment(2)) : '' }}
                Page
            </li>
        @endrole


        @role('student')
            <li class="breadcrumb-item">
                <a href="{{ route('student.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                {{ Str::singular(ucwords(Request::segment(1))) }}{{ Request::segment(2) ? ' - ' . ucwords(Request::segment(2)) : '' }}
                Page
            </li>
        @endrole

        @role('hod')
            <li class="breadcrumb-item">
                <a href="{{ route('hod.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                {{ Str::singular(ucwords(Request::segment(1))) }}{{ Request::segment(2) ? ' - ' . ucwords(Request::segment(2)) : '' }}
                Page
            </li>
        @endrole
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>