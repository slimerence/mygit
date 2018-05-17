@extends('layouts.frontend.layout')

@section('content')
    <div class="container">
        @foreach ($messages as $message)
            <div class="card commentcard">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{$message->content}}</p>
                        <footer class="blockquote-footer">{{ $message->lastname.'.'.$message->firstname}}</footer>
                        <hr>
                        @foreach($message->comments as $comment)
                            {{ $comment->content }}
                        @endforeach
                    </blockquote>
                    <div class="container">

                        <form action="/{{$message->id}}" method="POST" target="_self">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" value="Delete" class="btn-dark btn btn-primary btn-sm card-btn">
                        </form>
                        <input type="submit" value="Comment" class="btn btn-primary btn-sm card-btn" id="{{'cmbtn'.$message->id}}"
                               onclick="$('{{'#comment'.$message->id}}').slideToggle();">
                    </div>
                    <form action="{{route("newcmt")}}" class="morecomment" method="post" target="_self">
                        {{csrf_field()}}
                        <input type="hidden" name="message_id" value="{{$message->id}}">
                    <div class="input-group" id="{{'comment'.$message->id}}" style="display: none">
                            <input type="text" class="form-control typedcmt" placeholder="Make more comments..." name="content">
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-outline-secondary" value="confirm">
                                <button class="btn btn-outline-secondary" type="button" onclick="$('{{'#comment'.$message->id}}').slideToggle(function() {
                                        $('.typedcmt').val('');});">cancel</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>



@endsection