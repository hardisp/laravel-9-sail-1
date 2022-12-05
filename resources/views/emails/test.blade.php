<html>
    <head>
        <title>Test Email</title>
    </head>

    <body>
        <br/>
        <p>Name: {{ $data['name'] }}</p>

        <a href={{ $data['url'] }}>See details</a>

        <p>Thanks</p>
        <p>Admin</p>
        <div>
            {{-- <img src="{{asset('img/logo.png')}}" height="100" width="100"/> --}}
            <img src="{{ $message->embed(public_path() . '/img/logo.png') }}"" height="100" width="100"/>
        </div>
    </body>
</html>