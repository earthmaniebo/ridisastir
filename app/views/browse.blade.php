@extends('layouts.browse-layout')

@section('content')
    <iframe width="100%" height="95%"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?client=ubuntu&amp;channel=fs&amp;q=philippines&amp;oe=utf-8&amp;ie=UTF8&amp;hq=&amp;hnear=Philippines&amp;ll=12.879721,121.774017&amp;spn=18.131853,28.256836&amp;t=h&amp;z=5&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?client=ubuntu&amp;channel=fs&amp;q=philippines&amp;oe=utf-8&amp;ie=UTF8&amp;hq=&amp;hnear=Philippines&amp;ll=12.879721,121.774017&amp;spn=18.131853,28.256836&amp;t=h&amp;z=5&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
    @include('commons.requestmodal')
@stop