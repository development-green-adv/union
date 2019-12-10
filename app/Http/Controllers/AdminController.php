<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\ImageGallery;
use App\Category;
use App\News;
use App\Event;
use App\Blog;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function loginView(){

        // ako je korisnik ulogovan ne moze otici na login ponovo 
        if(!Auth::guest()){
            return view("admin/pages/home");
        }else{
            return view("admin/pages/login");
        }

    } 

    public function homePage(){

        return view("admin/pages/home");

    }


    public function getAddProducts(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();
        return view("admin/pages/add-product", compact("allImages"));

    }


    public function getAddCategory(){

        return view("admin/pages/dodaj-kategorije");

    }


    public function storeCategory(Request $request){

        $category = new Category();

        // validacija input polja
        $request->validate([
            'category_name' => 'required|max:150'
        ]);

        // provera da li u bazi postoji kategorija sa ovim imenom
        $categoryName = $category->where('category_name', $request->input('category_name'))->get();
        if(count($categoryName) > 0){
            return redirect()->back()->with('messageError', 'Kategorija sa ovim imenom vec postoji');
        }else{

            $last = $category->orderBy('position', 'desc')->first();

            if(empty($last)){
                $position = 0;
            }else{
                $position = $last->position + 1;
            }

            // kreiranje aliasa za kategoriju
            $alias = str_slug($request->input('category_name'), '-');

            //setovanje polja u bazi podataka
            $category->category_name = $request->input('category_name');
            $category->alias = $alias;
            $category->category_keywords = $request->input('category_keywords');
            $category->category_description = $request->input('category_description');
            $category->status = $request->input('status');
            $category->position = $position;

            // sacuvavanje podataka u bazi
            $save = $category->save();

            // provera, ako je sacuvano, vraca na stranicu za dodavanje kategorija ili vraca poruku
            if($save){
                return redirect()->back()->with('message', 'Uspešno ste dodali kategoriju');
            }else{
                return "nije sacuvano";
            }

        }
        
    }


   






































    public function storeImages(Request $request){
        
        $images = $request->file("images");

        for($i = 0; $i < count($images); $i++){

            $new = $i.time().".".$images[$i]->getClientOriginalExtension();
            $slika = $images[$i]->move(public_path("images_gallery"), $new);

            $gallery = new ImageGallery();
            $gallery->image_name = $new;
            $gallery->save();

        }

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return $allImages;

    }




    public function getAddAdmin(){

        return view("admin/pages/dodaj-administratora");

    }

    public function storeAdmin(Request $request){

        $user = new User();

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));

        $storeAdmin = $user->save();

        if($storeAdmin){

            return redirect()->back()->with("success", "Admin je uspesno dodat");

        }else{

            return redirect()->back()->with("Niste dodali admina");

        }

    }

    public function listAdmins(){

        $users = User::get();

        return view("admin/pages/lista-administratora", compact("users"));

    }

    public function deleteAdmin($id){

        $deleteUser = User::where("id", $id)->delete();

        if($deleteUser){

            return redirect()->back()->with("success", "Admin je uspesno izbrisan");

        }else{

            return redirect()->back()->with("Niste izbrisali admina");

        }

    }

}
