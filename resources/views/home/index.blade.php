@extends('app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="users">
                <div class="title">
                    Users
                </div>
                @include('components.table')
            </div>
            <div class="items-center">
                <div class="download-text">
                    Export <small>(Download)</small>
                </div>
                <div class="generators">
                    <a href="{{ route('generate.xlsx') }}" class="item">
                        <div class="image">
                            <img src="{{ asset('img/xlsx.png') }}">
                        </div>
                        <p class="name">XLSX</p>
                    </a>
                    <a href="{{ route('generate.xml') }}" class="item">
                        <div class="image">
                            <img src="{{ asset('img/xml.png') }}">
                        </div>
                        <p class="name">XML</p>
                    </a>
                    <a href="{{ route('generate.txt') }}" class="item">
                        <div class="image">
                            <img src="{{ asset('img/txt.png') }}">
                        </div>
                        <p class="name">TXT</p>
                    </a>
                    <a href="{{ route('generate.csv') }}" class="item">
                        <div class="image">
                            <img src="{{ asset('img/csv.png') }}">
                        </div>
                        <p class="name">CSV</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
