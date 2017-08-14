@extends('layouts.back')

@section('content')
{{-- @include('back.partials.sidebar') --}}
			<div class="col-lg-12">
				<!-- First Basic Table strats here-->
				<div class="panel ">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="ti-menu"></i> Bordered Table
						</h3>
						<span class="pull-right">
							<i class="fa fa-fw ti-angle-up clickable"></i>
							<i class="fa fa-fw ti-close removepanel clickable"></i>
						</span>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th>Address</th>
										<th>User Level</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach($users as $user)
									<tr>
										<td>{{ $user->id }}</td>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>{{ STR::words($user->address,2) }}</td>
										<td>{{ $user->role->title }}</td>
										<td>
										<a href="{{ url('back/user/'.$user->id.'/edit') }}" class="btn btn-primary btn-xs">
										<span class="fa fa-fw ti-pencil"></span>
										</a>
										<a class="btn btn-danger btn-xs">
										<span class="fa fa-fw ti-trash"></span>
										</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							{{ $users->links() }}
							{{-- {{ $users->render() }} --}}
						</div>
					</div>
				</div>
			</div>

@endsection
