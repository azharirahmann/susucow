<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use App\ImageFile;

class MenuController extends Controller
{
    public function create(){
        return view('backend.admin.menu.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_menu' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $menu = new Menu();
        $menu->nama_menu = $request->nama_menu;
        $menu->jenis = $request->jenis;
        $menu->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $file_name = time().'_'.$request->nama_menu.'.'.$request->gambar->getClientOriginalExtension();
            Storage::putFileAs('public/menu', $image, $file_name);

            $destinationPath = public_path('/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$file_name);

            $menu->gambar = $file_name;
        }

        $menu->save();
        Session::flash('success', 'Menu successfully created !');
        return redirect()->back();
    }

    public function index(){
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('backend.admin.menu.index', compact('menus'));
    }

    public function show(Menu $menu){
        return view('backend.admin.menu.show', compact('menu'));
    }

    public function update(Request $request, Menu $menu){
        $menu->nama_menu = $request->nama_menu;
        $menu->jenis = $request->jenis;
        $menu->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $file_name = time().'_'.$request->nama_menu.'.'.$request->gambar->getClientOriginalExtension();
            Storage::putFileAs('public/menu', $image, $file_name);

            //save thumbnail
            $destinationPath = public_path('/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$file_name);

            //delete previous image
            $oldFilename = $menu->gambar;

            $tes = storage_path('app/public/menu'). '/' . $oldFilename;
            File::delete($tes);
            $tes2 = public_path('/thumbnail'). '/' . $oldFilename;
            File::delete($tes2);

            $menu->gambar = $file_name;
        }
        $menu->update();
        Session::flash('success', 'Menu successfully updated !');
        return redirect()->back();
    }

    public function destroy(Menu $menu){
        //delete previous image
        $oldFilename = $menu->gambar;

        $tes = storage_path('app/public/menu'). '/' . $oldFilename;
        File::delete($tes);
        $tes2 = public_path('/thumbnail'). '/' . $oldFilename;
        File::delete($tes2);

        Menu::destroy($menu->id);
        Session::flash('delete', 'Menu successfully deleted !');
        return redirect(route('menus.index'));
    }
}
