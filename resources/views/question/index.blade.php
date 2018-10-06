@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">

                            <h2>All Questions</h2>
                            <div class="ml-auto">

                                <a href="{{route('question.create')}}" class="btn btn-outline-secondary askquestion">Ask Question</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="flex">
                                <div class="vote">
                                    <strong></strong>
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="mt-0">{{$question->title}}</h3>
                                {{str_limit($question->body,250)}}
                                <p class="lead">
                                    Asked By: <a href="{{$question->user->name}}">{{$question->user->name}}</a>
                                    <small class="text-muted">{{$question->created_Date}}</small>
                                </p>
                            </div>
                        </div>

                        @endforeach

                    </div>
                   <div class="pagination">{{$questions->links()}}</div>

                </div>
            </div>
        </div>
    </div>
@endsection
