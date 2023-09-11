@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>追加する質問</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('questions.store') }}" class="w-1/2">
            @csrf

                <div class="form-control my-4">
                    <input type="text" name="content" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">次へ</button>
        </form>
    </div>
@endsection

<!--name="content[]"-->