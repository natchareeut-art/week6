@extends('layout')
@section('title', 'บทความทั้งหมด')
@section('content')
<h1 class="text-center py-2">บทความทั้งหมด</h1>
@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover text-center align-middle">
        <thead>
            <tr><th>บทความ</th><th>เนื้อหา</th><th>สถานะ</th></tr>
        </thead>
        <tbody>
        @foreach ($blogs as $item)
            <tr>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['content'] }}</td>
                <td>
                    @if ($item['status'])
                        <span class="btn btn-sm btn-outline-success disabled">เผยแพร่</span>
                    @else
                        <span class="btn btn-sm btn-outline-danger disabled">ฉบับร่าง</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
