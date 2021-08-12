<?php

namespace App\Http\Controllers;

use App\Development\Development;
use App\Http\Requests\DirectionStoreRequest;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{

    public function index()
    {
        $items = Direction::all();
        return view('admin.direction.index', compact('items'));
    }


    public function store(DirectionStoreRequest $request)
    {
        Development::photo($request, 'upload', 'logo');
        Direction::create($request->all());
        return back()->with('ok', 'Ավելացված է');
    }


    public function edit($id)
    {
        $item = Direction::find($id);
        return view('admin.direction.edit', compact('item'));
    }


    public function update(DirectionStoreRequest $request, Direction $direction)
    {
        Development::photo($request, 'upload', 'logo');
        $direction->update($request->all());
        return redirect()->route('direction.index')->with('ok', 'Խմբագրված է');
    }


    public function destroy(Direction $direction)
    {
        $direction->delete();
        return back()->with('ok', 'Ջնջվել է');
    }
}
