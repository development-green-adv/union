<?php

namespace App\Http\Controllers;

use App\Baner;
use Illuminate\Http\Request;
use App\Category;
use App\Page;
use App\Nastava;

class FrontController extends Controller
{
    
    public function getHomePage(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();
        $baners = Baner::where("lang", "sr")->where("status", 1)->get();
    
        return view("/sr/welcome", compact("categories", "pages", "novosti", "baners"));

    }

    public function getPrikazPage($category=null, $id, $alias=null){

        $category = Category::where("alias", "like", $category)->first();
        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $currentPage = Page::where("id", $id)->first();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/prikaz", compact("categories", "pages", "currentPage", "category", "novosti"));

    }


    public function getNovostiPage($subcategoryAlias=null, $pageCategory=null){

        /*
        * Ovaj deo vraca kategorije i podkategorije za meni header
        * I sve stranice koje pripadaju pod tom kategorijom
        **/
        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();

        /*
        * Ovaj deo vraca generalne novosti sa upotom ako je novosti null
        **/

        if($subcategoryAlias != null && $pageCategory != null){

            $novosti = Page::where("page_type", "novost")->where("status", 1)->where("page_lang", "sr")->where("page_category", $pageCategory)->get();

            return view("/sr/novost", compact("categories", "pages", "novosti"));

        }else{

            $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

            return view("/sr/novost", compact("categories", "pages", "novosti"));

        }
        
    }


    public function showNovosti($alias=null, $id=null){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        
        $novost = Page::where("alias", $alias)->where("id", $id)->where("page_lang", "sr")->first();

        return view("/sr/novosti", compact("novost", "pages", "categories"));

    }

    public function getContactPage(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();

        return view("/sr/kontakt", compact("categories", "pages"));

    }

    public function getOuniverzitetu(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/o-univerzitetu", compact("categories", "pages", "novosti"));

    }


    public function getIstorijaUniverziteta(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/istorija-univerziteta", compact("categories", "pages", "novosti"));

    }

    public function getOrganizaciona(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/organizaciona-sema", compact("categories", "pages", "novosti"));

    }


    public function getPravnaDokumentacija(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/pravna-dokumentacija", compact("categories", "pages", "novosti"));

    }


    public function getAkreditacija(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/akreditacija", compact("categories", "pages", "novosti"));


    }


    public function getStudentskiParlament(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/studentski-parlament", compact("categories", "pages", "novosti"));

    }


    public function getPhotoGallery(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/galerija-fotografija", compact("categories", "pages", "novosti"));

    }

    public function getVideoGallery(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/video-galerija", compact("categories", "pages", "novosti"));

    }


    public function getPridruzeniClanoviUniverziteta(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/pridruzeni-clanovi-univerziteta", compact("categories", "pages", "novosti"));

    }


    public function getNenastavnoOsoblje(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/nenastavno-osoblje", compact("categories", "pages", "novosti"));

    }


    public function getNastavnoOsoblje(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $nastavnoo = Nastava::where("status", 1)->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/nastavno-osoblje", compact("nastavnoo", "categories", "pages", "novosti"));

    }


    public function getUpit(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $novosti = Page::where("page_type", "novost")->where("status", 1)->where("na_pocetnoj", 1)->where("page_lang", "sr")->get();

        return view("/sr/upit", compact("categories", "pages", "novosti"));

    }

    public function getCalendar(){

        $categories = Category::where("lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();
        $pages = Page::where("page_lang", "sr")->where("status", 1)->orderBy("id", "asc")->get();

        return view("/sr/kalendar-rada", compact("categories", "pages"));

    }

}
