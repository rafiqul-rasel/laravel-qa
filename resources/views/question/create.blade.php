@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">

                            <h2>Ask Questions</h2>
                            <div class="ml-auto">

                                <a href="{{route('question.index')}}" class="btn btn-outline-secondary askquestion">All Question</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('question.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="questitle">Question Title:</label>
                                <input type="text" class="form-control {{$errors->has('title')?'is-invalid':''}}"  id="questitle" name="title" aria-describedby="title" placeholder="Enter Your Question Title">
                                <small id="emailHelp" class="form-text text-muted">Enter Your question title</small>
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{$errors->first('title')}}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Explain Your Question:</label>
                                <textarea class="form-control {{$errors->has('body')?'is-invalid':''}}" name="body" id="exampleFormControlTextarea1" rows="7"></textarea>
                                @if($errors->has('body'))
                                    <div class="invalid-feedback">
                                        <strong>{{$errors->first('body')}}</strong>
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-outline-secondary">Ask The Question</button>
                        </form>


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
