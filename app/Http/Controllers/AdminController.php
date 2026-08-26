<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function about(): View
    {
        return view('about', [
            'name' => config('student.full_name_th'),
            'data' => now()->format('d/m/Y'),
        ]);
    }

    public function blog(): View
    {
        return view('blog', ['blogs' => [
            ['title' => 'บทความที่ 1', 'content' => 'เริ่มต้นเรียนรู้ Controller', 'status' => true],
            ['title' => 'บทความที่ 2', 'content' => 'เชื่อม Route ไปยังเมธอด', 'status' => false],
            ['title' => 'บทความที่ 3', 'content' => 'แสดงข้อมูลด้วย Blade Table', 'status' => true],
        ]]);
    }

    public function create(): View
    {
        return view('form');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('blog')->with('status', 'รับข้อมูลบทความแล้ว');
    }
}
