@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    @forelse ($warnings as $warning)
                        <div class="alert alert-warning" role="alert">
                            {{ $warning->message  }}.
                            <a href="{{route('warnings.show', ['warning' => $warning])}}">View this warning.</a>
                        </div>
                    @empty
                        <h4>This play has no warnings. They're doing great!</h4>
                    @endforelse
                    {{ $warnings->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection