@extends('home')

@section('stdsubject.content')
	<div class="panel panel-default">
		<div class="panel-heading">Dashboard</div>
		<div class="panel-body">
			<div class="dashboard-notice js-notice">
			<h2>Welcome to the <strong>Gonzaga</strong> Records Manager!</h2>
			<p>Here are some quick tips for a first-time teacher member.</p>
			<ul>
				<li>
					Use the link on your right panel to switch to your subject context.
				</li>
				<li>
					After you switch context you'll see student scores dashboard that lists out
					student score per quarter.
				</li>
				<li>
					To upload students scores, First download the spreedsheet schema,
					i.e The schema will contain student names and quarter fieldset that you will have to fill
				</li>
			</ul>
			</div>
		</div>
	</div>
@endsection
