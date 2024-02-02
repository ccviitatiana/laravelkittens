<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CatController extends Controller
{
    public function index()
    {
        return view('cats.index', [
            'posts' => Cat::latest()->paginate()
        ]);
    }

    public function destroy(Cat $cat)
    {
        $cat->delete();
        return redirect()->route('cats.index');
    }

    public function create(Cat $cat)
    {
        return view('cats.create', compact('cat'));
    }

    public function store(Request $request)
    {
        $cat = $request->user()->cats()->create([
            'cat_id' => 1,
            'breed' => $breed = $request->breed,
            'slug' => Str::slug($breed),
            'body' => $request->body
        ]);
        return redirect()->route('cats.edit', $cat);
    }

    public function edit(Cat $cat)
    {

        return view('cats.edit', compact('cat'));
    }

}
