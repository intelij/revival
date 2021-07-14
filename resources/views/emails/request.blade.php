
{{--@section('emails.main')--}}
<div style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;margin-top:1em">
	<h2>Hey!</h2> <br><br>

	You received an email from : {{ $name }} <br><br>

	User details: <br><br>

	Name:  {{ $name }}<br>
	Email:  {{ $email }}<br>
	Phone:  {{ $phone }}<br>
	Company:  {{ $company }}<br>
	<br><br>

	Thanks
</div>
{{--@stop--}}
