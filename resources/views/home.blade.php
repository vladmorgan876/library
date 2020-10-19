@extends('layouts.app')

@section('content')

{{--    @role(['editor'])--}}
{{--    вы вошли как редактор--}}
{{--    @endrole--}}
{{--    @role(['author'])--}}
{{--    --}}{{--    Admin One--}}
{{--    вы вошли как автор--}}
{{--    @endrole--}}

    {{--    Author One--}}
    {{--    Author One--}}
    {{--    Editor One--}}
    {{--    Editor One--}}
{{--    @role(['admin'])--}}
    {{--    Admin One--}}
{{--    вы вошли как администратор--}}
{{--    @endrole--}}




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Отчет системы') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p ><span style="color: red">{{\Illuminate\Support\Facades\Auth::user()->name}}</span> {{ __(', Вы вошли в систему') }} @role(['admin'])как администратор <p><a href="/">Главная</a></p>@endrole</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
