<?php

namespace App\Http\Controllers;

use App\Baner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\ImageGallery;
use App\Category;
use App\Page;
use App\File;
use App\Gallery;
use App\Nastava;
use App\Video;
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

        $categories = Category::where("status", 1)->get();
        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-kategorije", compact("categories", "allImages"));

    }


    public function storeCategory(Request $request){

        $category = new Category();

        // provera da li u bazi postoji kategorija sa ovim imenom
        //$categoryName = $category->where('category_name', $request->input('category_name'))->get();
        

        $last = $category->where('lang', $request->input('lang'))->where("parent_cat", $request->input("category"))->orderBy('position', 'desc')->first();

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
        $category->baner_image = $request->input("mainImage");
        $category->category_keywords = $request->input('category_keywords');
        $category->category_description = $request->input('category_description');
        $category->status = $request->input('status');
        $category->position = $position;
        $category->parent_cat = $request->input("category");
        $category->lang = $request->input("lang");

        // sacuvavanje podataka u bazi
        $save = $category->save();

        // provera, ako je sacuvano, vraca na stranicu za dodavanje kategorija ili vraca poruku
        if($save){
            return redirect()->back()->with('message', 'Uspešno ste dodali kategoriju');
        }else{
            return "nije sacuvano";
        }
    
    }


    public function getListCategory(){

        $datas = Category::orderBy("id", "asc")->get();

        return view("admin/pages/lista-kategorija", compact("datas"));

    }


    public function getEditCategory($id){

        $data = Category::where("id", $id)->first();

        return view("admin/pages/izmeni-kategoriju", compact("data"));

    }


    public function editCategory(Request $request){

        $category = new Category();

        // validacija input polja
        $request->validate([
            'category_name' => 'required|max:150'
        ]);

        // id kategorije
        $id = $request->input('id');

        // kreiranje aliasa za kategoriju
        $alias = str_slug($request->input('category_name'), '-');

        // izmena podataka u bazi
        $category->where('id', $id)->update([
            'category_name'         =>   $request->input('category_name'),
            'alias'                 =>   $alias,
            'category_keywords'     =>   $request->input('category_keywords'),
            'category_description'  =>   $request->input('category_description'),
            'status'                =>   $request->input('status'),
            'lang'                  =>   $request->input('lang')
        ]);

        // povratak nazad sa porukom
        return redirect()->back()->with('message', 'Uspešno ste izmenili kategoriju');

    }



    public function deleteCategory($id){

        $deleteCategory = Category::where("id", $id)->delete();

        if($deleteCategory){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali kategoriju');

        }else{

            return redirect()->back()->with('messageError', 'Kategorija nije izbrisana');

        }

    }


    public function getSortCategory(){

        $categories = Category::where("status", 1)->orderBy('position', 'asc')->get();

        return view("admin/pages/sortiraj-kategorije", compact("categories"));

    }


    public function sortCategory(Request $request){

        $arr = $request->page_id_array;

        for($i = 0; $i < count($_POST['page_id_array']); $i++)
        {
            $category = new Category();

            $category->where("id", $_POST['page_id_array'][$i])->update(["position" => $i]);

        }

    }


    public function getAddPage(){

        $categories = Category::where('status', 1)->get();
        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-stranicu", compact("categories", "allImages"));

    }



    public function addPage(Request $request){

        $page = new Page();        

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
        }else{
            $gallery = "";
        }

        if(!empty($request->input("video_link"))){
            $videos = implode(",", $request->input("video_link"));
        }else{
            $videos = "";
        }
         
        $alias = str_slug($request->input('page_title'), '-');

        $page->page_lang = $request->input("lang");
        $page->page_title = $request->input("page_title");
        $page->alias = $alias;
        $page->page_category = $request->input("category");
        $page->page_text = $request->input("page_text");
        $page->page_type = $request->input("page_type");
        $page->na_pocetnoj = $request->input("na_pocetnoj");
        $page->main_image = $request->input("mainImage");
        $page->image_galley = $gallery;
        $page->video_gallery = $videos;
        $page->link_1 = $request->input("opis_link1")."^".$request->input("link1");
        $page->link_2 = $request->input("opis_link2")."^".$request->input("link2");
        $page->link_3 = $request->input("opis_link3")."^".$request->input("link3");
        $page->link_4 = $request->input("opis_link4")."^".$request->input("link4");
        $page->status = $request->input("status");

        $savePage = $page->save();

        if($savePage){

            return redirect()->back()->with('success', 'Uspešno ste dodali stranicu');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali stranicu');

        }

    }


    public function listPages(){

        $rows = Page::get();

        return view("admin/pages/lista-stranica", compact("rows"));

    }


    public function getEditPage($id){

        $page = Page::where("id", $id)->first();
        $categories = Category::where('status', 1)->get();
        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/izmeni-stranicu", compact("allImages", "categories", "page"));

    }


    public function editPage(Request $request){

        $page = new Page();

        $alias = str_slug($request->input('page_title'), '-');

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
             $gallery = "";
         }
 
         if(!empty($request->input("video_link"))){
             $videos = implode(",", $request->input("video_link"));
         }else{
             $videos = "";
         }

        $pageSave = $page->where("id", $request->input("id"))->update([
            
            'page_title'   => $request->input("page_title"),
            'alias'        => $alias,
            'page_lang'    => $request->input("lang"),
            'page_text'    => $request->input("page_text"),
            'page_category'=> $request->input("category"),
            'page_type'    => $request->input("page_type"),
            'image_galley' => $gallery,
            'main_image'   => $request->input("mainImage"),
            'video_gallery'=> $videos,
            'link_1'       => $request->input("opis_link1")."^".$request->input("link1"),
            'link_2'       => $request->input("opis_link2")."^".$request->input("link2"),
            'link_3'       => $request->input("opis_link3")."^".$request->input("link3"),
            'link_4'       => $request->input("opis_link4")."^".$request->input("link4"),
            'status'       => $request->input("status")

        ]);


        if($pageSave){

            return redirect()->back()->with('success', 'Uspešno ste izmenili stranicu');

        }else{

            return redirect()->back()->with('messageError', 'Niste izmenili stranicu');

        }


    }


    public function deletePage($id){

        $deletePage = Page::where('id', $id)->delete();

        if($deletePage){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali stranicu');

        }else{

            return redirect()->back()->with('messageError', 'Niste izbrisali stranicu');

        }

    }




    public function getAddNastavniKadar(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-nastavni-kadar", compact("allImages"));

    }


    public function storeNastavniKadar(Request $request){

        $nastava = new Nastava();

        $last = $nastava->where('lang', $request->input('lang'))->orderBy('position', 'desc')->first();

        if(empty($last)){
            $position = 0;
        }else{
            $position = $last->position + 1;
        }

        $nastava->name = $request->input("name");
        $nastava->prof_text = $request->input("prof_text");
        $nastava->email = $request->input("email");
        $nastava->pdf_link = $request->input("pdf_link");
        $nastava->main_image = $request->input("mainImage");
        $nastava->status = $request->input("status");
        $nastava->lang = $request->input("lang");
        $nastava->position = $position;

        $saveNastava = $nastava->save();

        if($saveNastava){

            return redirect()->back()->with('success', 'Uspešno ste dodali kadar');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali kadar');

        }

    }


    public function listNastavnogKadra(){

        $datas = Nastava::get();

        return view("admin/pages/lista-nastavnog-kadra", compact("datas"));

    }


    public function getEditNastavniKadar($id){

        $nastavni = Nastava::where("id", $id)->first();
        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/izmeni-nastavni-kadar", compact("nastavni", "allImages"));

    }


    public function updateNastavniKadar(Request $request){

        $nastavniUpdate = Nastava::where("id", $request->input("id"))->update([

            "name" => $request->input("name"),
            "prof_text" => $request->input("prof_text"),
            "email" => $request->input("email"),
            "pdf_link" => $request->input("pdf_link"),
            "main_image" => $request->input("mainImage"),
            "status" => $request->input("status"),
            "lang" => $request->input("lang")

        ]);


        if($nastavniUpdate){

            return redirect()->back()->with('success', 'Uspešno ste izmenili kadar');

        }else{

            return redirect()->back()->with('messageError', 'Niste izmenili kadar');

        }


    }


    public function deleteNastavniKadar($id){

        $deleteNastavni = Nastava::where("id", $id)->delete();

        if($deleteNastavni){

            return redirect()->back()->with('success', 'Uspešno ste obrisali kadar');

        }else{

            return redirect()->back()->with('messageError', 'Niste obrisali kadar');

        }

    }


    public function getAddBaner(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-baner", compact("allImages"));

    }
    

    public function storeBaner(Request $request){

        $baner = new Baner();

        if($request->input("lang") == "" || $request->input("mainImage") == ""){

            return redirect()->back()->with('messageError', 'Morate izbrati jezik i sliku');

        }else{

            $last = $baner->where('lang', $request->input('lang'))->orderBy('position', 'desc')->first();

            if(empty($last)){
                $position = 0;
            }else{
                $position = $last->position + 1;
            }

            $baner->title = $request->input("title");
            $baner->subtitle = $request->input("subtitle");
            $baner->link = $request->input("link");
            $baner->link_name = $request->input("link_name");
            $baner->baner_image = $request->input("mainImage");
            $baner->lang = $request->input("lang");
            $baner->position = $position;
            $baner->status = $request->input("status");
            
            $saveBaner = $baner->save();

            if($saveBaner){

                return redirect()->back()->with('success', 'Uspešno ste dodali baner');
    
            }else{
    
                return redirect()->back()->with('messageError', 'Niste dodali baner');
    
            }

        }

    }


    public function getListBaners(){

        $rows = Baner::get();

        return view("admin/pages/lista-banera", compact("rows"));

    }


    public function deleteBaner($id){

        $deleteBaner = Baner::where("id", $id)->delete();

        if($deleteBaner){

            return redirect()->back()->with('success', 'Uspešno ste obrisali baner');

        }else{

            return redirect()->back()->with('messageError', 'Niste obrisali baner');

        }

    }


    public function getAddGallery(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-galeriju", compact("allImages"));

    }


    public function storeGallery(Request $request){

        $galleryy = new Gallery();

        if($request->input("lang") != ""){

            $gallExist = Gallery::where("lang", $request->input("lang"))->get();

            if(count($gallExist) > 0){

                $deletGallery = Gallery::where("lang", $request->input("lang"))->delete();

                if($deletGallery){
    
                    if(!empty($request->input("galleryImages"))){
                        $gallery = implode(",", $request->input("galleryImages"));
                    }else{
                        $gallery = "";
                    }
        
                    $galleryy->gallery_name = $request->input("gallery_name");
                    $galleryy->gallery_image = $gallery;
                    $galleryy->lang = $request->input("lang");
                    $saveGall = $galleryy->save();
        
        
                    if($saveGall){
        
                        return redirect()->back()->with('success', 'Uspešno ste dodali galeriju');
        
                    }else{
        
                        return redirect()->back()->with('messageError', 'Niste dodali galeriju');
        
                    }
    
                }

            }else{

                if(!empty($request->input("galleryImages"))){
                    $gallery = implode(",", $request->input("galleryImages"));
                }else{
                    $gallery = "";
                }
    
                $galleryy->gallery_name = $request->input("gallery_name");
                $galleryy->gallery_image = $gallery;
                $galleryy->lang = $request->input("lang");
                $saveGall = $galleryy->save();
    
    
                if($saveGall){
    
                    return redirect()->back()->with('success', 'Uspešno ste dodali galeriju');
    
                }else{
    
                    return redirect()->back()->with('messageError', 'Niste dodali galeriju');
    
                }

            }

        }else{

            return redirect()->back()->with("messageError", "Morate izabrati jezik");

        }

    }


    public function listGallery(){

        $rows = Gallery::get();

        return view("admin/pages/lista-galerija", compact("rows"));

    }


    public function deleteGallery($id){

        $deleteGall = Gallery::where("id", $id)->delete();

        if($deleteGall){

            return redirect()->back()->with('success', 'Uspešno ste obirsali galeriju');

        }else{

            return redirect()->back()->with('messageError', 'Niste obrisali galeriju');

        }

    }


    
    public function getAddVideoGallery(){

        return view("admin/pages/dodaj-video-galeriju");

    }


    public function storeVideoGallery(Request $request){

        $video = new Video();

        if($request->input("lang") != ""){

            $videoExist = Video::where("lang", $request->input("lang"))->get();

            if(count($videoExist) > 0){

                $deletVid = Video::where("lang", $request->input("lang"))->delete();

                if($deletVid){

                    if(!empty($request->input("video_link"))){
                        $videos = implode(",", $request->input("video_link"));
                    }else{
                        $videos = "";
                    }
            
                    $video->video_name = $request->input("gallery_name");
                    $video->video_gallery = $videos;
                    $video->lang = $request->input("lang");
            
                    $saveVideo = $video->save();
            
                    if($saveVideo){
            
                        return redirect()->back()->with('success', 'Uspešno ste dodali video galeriju');
            
                    }else{
            
                        return redirect()->back()->with('messageError', 'Niste dodali video galeriju');
            
                    }

                }

            }else{

                if(!empty($request->input("video_link"))){
                    $videos = implode(",", $request->input("video_link"));
                }else{
                    $videos = "";
                }
        
                $video->video_name = $request->input("gallery_name");
                $video->video_gallery = $videos;
                $video->lang = $request->input("lang");
        
                $saveVideo = $video->save();
        
                if($saveVideo){
        
                    return redirect()->back()->with('success', 'Uspešno ste dodali video galeriju');
        
                }else{
        
                    return redirect()->back()->with('messageError', 'Niste dodali video galeriju');
        
                }

            }
        
        }else{

            return redirect()->back()->with("messageError", "Morate izabrati jezik");

        }

    }



    public function listVideoGallery(){

        $rows = Video::get();

        return view("admin/pages/lista-video-galerija", compact("rows"));

    }

























    public function getAddDocument(){

        return view("admin/pages/dodaj-document");

    }


    public function storeDocument(Request $request){

        $docum = new File();

        $document = $request->file("document_file");
        $new = "pdf".time().".".$document->getClientOriginalExtension();
        $document->move(public_path("documents"), $new);

        $docum->document_text = $request->input("document_text");
        $docum->document_file = $new;
        $saveDocumentt = $docum->save();

        if($saveDocumentt){

            return redirect()->back()->with('success', 'Uspešno ste dodali dokument');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali dokument');

        }

    }


    public function getListDocuments(){

        $datas = File::all();
        return view("admin/pages/lista-dokumenata", compact("datas"));

    }


    public function deleteDocument($id, $path){

        $deleteDocument = File::where("id", $id)->delete();

        if($deleteDocument){

            return redirect()->back()->with('success', 'Uspešno ste dodali dokument');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali dokument');

        }

    }






















    public function getCategoryByLang(Request $request){

        return Category::where("lang", $request->da)->where("status", 1)->get();

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
