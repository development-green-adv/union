<section class="header_info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center text-md-left mb-2 mb-md-0 header_contact_section">
                <a href="#"><span><img class="img-fluid" src="{{ asset('images/web/pin.png') }}"></span> Cara Dusana 62-64, 11000 Beograd</a>
                <a href="#"><span><img class="img-fluid" src="{{ asset('images/web/fon.png') }}"></span> 011 2180-143; 011 2180-271</a>
            </div>
            <div class="col-12 col-md-6 header_lang_section text-center text-md-right">
                <a href="/">Naslovna</a>
                <a href="#">Srpski</a>
                <a href="#">Engleski</a>
                <a href="#">Arabian</a>
                <div class="d-inline-block big-letters">
                    <span id="letter-1">A</span>
                    <span id="letter-2">A</span>
                    <span id="letter-2">A</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="menu_header_section-wrapper">
    <div class="container menu_header_section">
        <div class="row">
            <div class="col-12 text-center">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            @foreach($categories as $category)

                                @if($category->parent_cat == 0)

                                    <li class="nav-item align-self-center">
                                        
                                        @if($category->category_name != "NOVOSTI")

                                            <a class="nav-link" href="#">{{ $category->category_name }}</a>

                                        @endif

                                        <ul class="dropdown-menu">

                                            @foreach($categories as $subcategory)

                                                @if($category->id == $subcategory->parent_cat)

                                                    <li>
                                                        <a href="#">{{ $subcategory->category_name }}</a>
                                                    
                                                        <ul class="dropdown-menu-inner">
                                                            <?php 
                                                                $count = 0
                                                            ?>
                                                            
                                                            @if(count($pages) > 0)

                                                                @foreach($pages as $page)

                                                                    @if($page->page_category == $subcategory->id)

                                                                        @if($page->page_type != "novost")

                                                                            <li><a href="/sr/prikaz/{{ $subcategory->alias }}/{{ $page->id }}/{{ $page->alias }}">{{ $page->page_title }}</a></li>    
                                                                        
                                                                        @else

                                                                            <?php $count++; ?>

                                                                            @if($count == 1)

                                                                                <li><a class="#" href="/sr/novosti/{{ $subcategory->alias }}/{{ $page->page_category }}">Novosti</a></li>

                                                                            @endif

                                                                        @endif

                                                                    @endif
                                                            
                                                                @endforeach

                                                            @endif

                                                        </ul>
                                                    
                                                    </li>
                                                    
                                                @endif

                                            @endforeach

                                        </ul>

                                    </li>

                                @endif
                        
                            @endforeach
                            

                            <li class="nav-item align-self-center">
                                <a class="nav-link llogo" href="/"><img style="height: 140px;" class="img-fluid" src="{{ asset('images/web/logo.png') }}" /></a>
                            </li>
                            <li class="nav-item align-self-center">
                                <a class="nav-link" href="#">O UNIVERZITETU</a>

                                <ul class="dropdown-menu">

                                    <li><a href="/sr/o-univerzitetu">O Univerzitetu</a></li>
                                    <li><a href="/sr/istorija-univerziteta">Istorija univerziteta</a></li>
                                    <li><a href="/sr/organizaciona-sema">Organizaciona šema</a></li>
                                    <li><a href="/sr/pravna-dokumentacija">Pravna dokumentacija</a></li>
                                    <li><a href="/sr/akreditacija">Akreditacija</a></li>
                                    <li><a href="/sr/studentski-parlament">Studentski parlament</a></li>
                                    <li><a href="/sr/galerija-fotografija">Galerija fotografija</a></li>
                                    <li><a href="/sr/video-galerija">Video galerija</a></li>
                                    <li><a href="/sr/pridruzeni-clanovi-univerziteta">Pridruženi članovi univerziteta</a></li>

                                </ul>

                            </li>
                            <li class="nav-item align-self-center">
                                <a class="nav-link" href="#">NASTAVA</a>

                                <ul class="dropdown-menu">

                                    <li><a href="/sr/nastavno-osoblje">Nastavno osoblje</a></li>
                                    <li><a href="/sr/nenastavno-osoblje">Nenastavno osoblje</a></li>
                                    <li><a href="/sr/kalendar-rada">Kalendar rada</a></li>

                                </ul>
                            </li>
                            <li class="nav-item align-self-center">
                                <a class="nav-link" href="/sr/kontakt">KONTAKTIRAJTE NAS</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="red_header_section">

</section>
<div class="container blue-line" style="border-top: 8px solid #1d4d62;">

</div>

<nav class="navbar navbar-expand-lg mobile-nav">
    <a class="navbar-brand" href="/"><img style="height: 50px;" class="img-fluid" src="{{ asset('images/web/logo.png') }}" /></a>
    <button class="navbar-toggler collapsed mobile-btn" style="float: right; margin-top: 15px;" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>	
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @foreach($categories as $category)

                @if($category->parent_cat == 0)

                    <li class="nav-item align-self-center">
                        
                        @if($category->category_name != "NOVOSTI")

                            <a class="nav-link" href="#">{{ $category->category_name }}</a>

                        @endif

                        <ul class="dropdown-menu">

                            @foreach($categories as $subcategory)

                                @if($category->id == $subcategory->parent_cat)

                                    <li>
                                        <a href="#">{{ $subcategory->category_name }}</a>
                                    
                                        <ul class="dropdown-menu-inner">
                                            <?php 
                                                $count = 0
                                            ?>
                                            
                                            @if(count($pages) > 0)

                                                @foreach($pages as $page)

                                                    @if($page->page_category == $subcategory->id)

                                                        @if($page->page_type != "novost")

                                                            <li><a href="/sr/prikaz/{{ $subcategory->alias }}/{{ $page->id }}/{{ $page->alias }}">{{ $page->page_title }}</a></li>    
                                                        
                                                        @else

                                                            <?php $count++; ?>

                                                            @if($count == 1)

                                                                <li><a class="#" href="/sr/novosti/{{ $subcategory->alias }}/{{ $page->page_category }}">Novosti</a></li>

                                                            @endif

                                                        @endif

                                                    @endif
                                            
                                                @endforeach

                                            @endif

                                        </ul>
                                    
                                    </li>
                                    
                                @endif

                            @endforeach

                        </ul>

                    </li>

                @endif
        
            @endforeach
            

            {{-- <li class="nav-item align-self-center">
                <a class="nav-link llogo" href="/"><img style="height: 140px;" class="img-fluid" src="{{ asset('images/web/logo.png') }}" /></a>
            </li> --}}
            <li class="nav-item align-self-center">
                <a class="nav-link" href="#">O UNIVERZITETU</a>

                <ul class="dropdown-menu">

                    <li><a href="/sr/o-univerzitetu">O Univerzitetu</a></li>
                    <li><a href="/sr/istorija-univerziteta">Istorija univerziteta</a></li>
                    <li><a href="/sr/organizaciona-sema">Organizaciona šema</a></li>
                    <li><a href="/sr/pravna-dokumentacija">Pravna dokumentacija</a></li>
                    <li><a href="/sr/akreditacija">Akreditacija</a></li>
                    <li><a href="/sr/studentski-parlament">Studentski parlament</a></li>
                    <li><a href="/sr/galerija-fotografija">Galerija fotografija</a></li>
                    <li><a href="/sr/video-galerija">Video galerija</a></li>
                    <li><a href="/sr/pridruzeni-clanovi-univerziteta">Pridruženi članovi univerziteta</a></li>

                </ul>

            </li>
            <li class="nav-item align-self-center">
                <a class="nav-link" href="#">NASTAVA</a>

                <ul class="dropdown-menu">

                    <li><a href="/sr/nastavno-osoblje">Nastavno osoblje</a></li>
                    <li><a href="/sr/nenastavno-osoblje">Nenastavno osoblje</a></li>
                    <li><a href="/sr/kalendar-rada">Kalendar rada</a></li>

                </ul>
            </li>
            <li class="nav-item align-self-center">
                <a class="nav-link" href="/sr/kontakt">KONTAKTIRAJTE NAS</a>
            </li>
        </ul>
    </div>
</nav>