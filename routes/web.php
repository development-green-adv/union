<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
});



// Frontalni prikaz stranica sa podacima
Route::get('/', "FrontController@getHomePage");
Route::get("/sr/prikaz/{category?}/{id?}/{alias?}", "FrontController@getPrikazPage");
Route::get("/sr/novosti/{sucategoryAlias?}/{pageCategory?}", "FrontController@getNovostiPage");
Route::get("/sr/novost/{alias?}/{id?}", "FrontController@showNovosti");
Route::get("/sr/kontakt", "FrontController@getContactPage");


Route::get("/sr/o-univerzitetu", "FrontController@getOuniverzitetu");
Route::get("/sr/istorija-univerziteta", "FrontController@getIstorijaUniverziteta");
Route::get("/sr/organizaciona-sema", "FrontController@getOrganizaciona");
Route::get("/sr/pravna-dokumentacija","FrontController@getPravnaDokumentacija");
Route::get("/sr/akreditacija","FrontController@getAkreditacija");
Route::get("/sr/studentski-parlament","FrontController@getStudentskiParlament");
Route::get("/sr/galerija-fotografija","FrontController@getPhotoGallery");
Route::get("/sr/video-galerija", "FrontController@getVideoGallery");
Route::get("/sr/pridruzeni-clanovi-univerziteta", "FrontController@getPridruzeniClanoviUniverziteta");
Route::get("/sr/nenastavno-osoblje", "FrontController@getNenastavnoOsoblje");
Route::get("/sr/nastavno-osoblje", "FrontController@getNastavnoOsoblje");
Route::get("/sr/upis", "FrontController@getUpit");
Route::get("/sr/kalendar-rada", "FrontController@getCalendar");



// rute za admin deo
Route::get("/admin/login", "AdminController@loginView")->name("admin.login");
Route::get("/admin/home", "AdminController@homePage")->middleware("auth");


// rute za kategorije
Route::get("/admin/dodaj-kategoriju/{lang?}", "AdminController@getAddCategory")->middleware("auth");
Route::post("/admin/dodaj-kategorije", "AdminController@storeCategory")->middleware("auth");
Route::get("/admin/lista-kategorija", "AdminController@getListCategory")->middleware("auth");
Route::get("/admin/izmeni-kategoriju/{id}", "AdminController@getEditCategory")->middleware("auth");
Route::post("/admin/izmeni-kategoriju", "AdminController@editCategory")->middleware("auth");
Route::get("/admin/obrisi-kategoriju/{id}", "AdminController@deleteCategory")->middleware("auth");
Route::get("/admin/sortiraj-kategorije", "AdminController@getSortCategory")->middleware("auth");
Route::post("/admin/sortiraj-kategorije", "AdminController@sortCategory")->middleware("auth");




// rute za podkategorije
Route::get("/admin/dodaj-podkategorije", "AdminController@getAddSubcategory")->middleware("auth");
Route::post("/admin/dodaj-podkategorije", "AdminController@addSubcategory")->middleware("auth");
Route::get("/admin/lista-podkategorija", "AdminController@getListSubcategory")->middleware("auth");
Route::get("/admin/obrisi-podkategoriju/{id}", "AdminController@deleteSubcategory")->middleware("auth");





// rute za stranice
Route::get("/admin/dodaj-stranicu", "AdminController@getAddPage")->middleware("auth");
Route::post("/admin/dodaj-stranicu", "AdminController@addPage")->middleware("auth");
Route::get("/admin/lista-stranica", "AdminController@listPages")->middleware("auth");
Route::get("/admin/izmeni-stranicu/{id}", "AdminController@getEditPage")->middleware("auth");
Route::post("/admin/izmeni-stranicu", "AdminController@editPage")->middleware("auth");
Route::get("/admin/obrisi-stranicu/{id}", "AdminController@deletePage")->middleware("auth");



// rute za nastavni kadar
Route::get("/admin/dodaj-nastavni-kadar", "AdminController@getAddNastavniKadar")->middleware("auth");
Route::post("/admin/dodaj-nastavni-kadar", "AdminController@storeNastavniKadar")->middleware("auth");
Route::get("/admin/lista-nastavnog-kadra", "AdminController@listNastavnogKadra")->middleware("auth");
Route::get("/admin/izmeni-nastavni-kadar/{id}", "AdminController@getEditNastavniKadar")->middleware("auth");
Route::post("/admin/izmeni-nastavni-kadar", "AdminController@updateNastavniKadar")->middleware("auth");
Route::get("/admin/obrisi-nastavni-kadar/{id}", "AdminController@deleteNastavniKadar")->middleware("auth");




// rute za banere
Route::get("/admin/dodaj-baner", "AdminController@getAddBaner")->middleware("auth");
Route::post("/admin/dodaj-baner", "AdminController@storeBaner")->middleware("auth");
Route::get("/admin/lista-banera", "AdminController@getListBaners")->middleware("auth");
Route::get("/admin/obrisi-baner/{id}", "AdminController@deleteBaner")->middleware("auth");


// rute za galeriju
Route::get("/admin/dodaj-galeriju", "AdminController@getAddGallery")->middleware("auth");
Route::post("/admin/dodaj-galeriju", "AdminController@storeGallery")->middleware("auth");
Route::get("/admin/lista-galerija", "AdminController@listGallery")->middleware("auth");
Route::get("/admin/obrisi-galeriju/{id}", "AdminController@deleteGallery")->middleware("auth");



// ruta za video galeriju
Route::get("/admin/dodaj-video-galeriju", "AdminController@getAddVideoGallery")->middleware("auth");
Route::post("/admin/dodaj-video-galeriju", "AdminController@storeVideoGallery")->middleware("auth");
Route::get("/admin/lista-video-galerija", "AdminController@listVideoGallery")->middleware("auth");
Route::get("/admin/obrisi-video-galeriju/{id}", "AdminController@deleteVideoGallery")->middleware("auth");



// ajax rute
Route::post("/admin/get-category-by-lang", "AdminController@getCategoryByLang")->middleware("auth");


// rute za proizvode
Route::get("/admin/add-products", "AdminController@getAddProducts")->middleware("auth");

// ruta za dodavanje slika
Route::post("/admin/dodaj-galeriju-slika", "AdminController@storeImages")->middleware("auth");

// ruta za dokumente
Route::get("/admin/dodaj-document", "AdminController@getAddDocument")->middleware("auth");
Route::post("/admin/dodaj-document", "AdminController@storeDocument")->middleware("auth");
Route::get("/admin/lista-dokumenata", "AdminController@getListDocuments")->middleware("auth");
Route::get("/admin/obrisi-dokument/{id}/{path}", "AdminController@deleteDocument")->middleware("auth");

// rute za admine
Route::get("/admin/dodaj-administratora", "AdminController@getAddAdmin")->middleware("auth");
Route::post("/admin/dodaj-administratora", "AdminController@storeAdmin")->middleware("auth");
Route::get("/admin/lista-administratora", "AdminController@listAdmins")->middleware("auth");
Route::get("/admin/obrisi-administratora/{id}", "AdminController@deleteAdmin")->middleware("auth");


Route::get("/home", "HomeController@index");

Auth::routes();

