@extends('layouts.template')

@section('page-header')
    @include('components.page-header', [
    'pageTitle' => $pageTitle,
    'pageSubtitle' => '',
    'pageIcon' => $pageIcon,
    'parentMenu' => $parentMenu,
    'current' => $current
    ])
@endsection

@section('content')
    @include('components.notification')

    <div class="card">
        <div class="card-header">

            <h5>Laba Rugi</h5>
            {{-- <div class="col-md-4 pull-right">
                @include('components.search')
            </div> --}}

        </div>
        {{-- form filter --}}
        <div class="card-body">
            @include('pages.general-ledger.laba-rugi._form-filter')
        </div>
        {{-- end form filter --}}

        {{-- show buku besar --}}
        @if (isset($month) && isset($year))
        @include('pages.general-ledger.laba-rugi._show-laba-rugi')
        @endif
    </div>
@endsection
