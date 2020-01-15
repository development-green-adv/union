@extends("layout/master")

@section("title", "Enter title here")

@section("seo_content")

    <meta name="keywords" content="" />
    <meta name="description" content="" />

@endsection

@section("content")

    @include("inc/header")


        <section class="studije_cover" style="background-image: url('{{ asset('images/web/studije-cover.png') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_contact mb-3 mb-md-0">
                                <img class="img-fluid" src="{{ asset('images/web/fax-icon.png') }}">
                            </div>
                            <div class="footer_contact" style="padding-left: 15px;">
                                <h1>O UNIVERZITETU</h1>
                                <div class="red-line1" style="margin-top: 5px; margin-bottom: 10px;"></div>
                                <h6>UNIVERZITET - UNION NIKOLA TESLA</h6>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


       <section class="page_section">
               <div class="container">
                   <div class="row">
                       <div class="col-12 col-md-8">
                            <h5 style="text-transform: uppercase;"><b>O univerzitetu</b></h5>
                            <div class="red-line1"></div>

                            
                            <p>
                                Univerzitet “Union – Nikola Tesla“ osnovan je sa ciljem da omogući zakonito funkcionisanje fakulteta
                                bez svojstva pravnog lica, kao i fakulteta sa svojstvom pravnog lica u njegovom sastavu u skladu sa
                                zajedničkim evropskim tradicijama i vrednostima Republike Srbije. Kao zajednica visokoškolskih
                                ustanova Univerzitet omogućava razmenu znanja i iskustava u različitim obrazovno-naučnim
                                poljima, potencijalno otvarajući prostor za multidiciplinarne studije.
                            </p><br>

                            <p>
                                Univerzitet akredituje studijske programe osnovnih akademskih studija u teničko-tehnološkom polju i
                                to: <b>>Građevinarstvo, Arhitektura i urbanizam, u društveno-humanističkom: Predzetnički biznis i
                                menadžment nekretnina,  Međunarodna politika i bezbednost a u prirodno-matematičkom:
                                Zaštita životne sredine.</b>
                            </p><br>

                            <p>
                                Na Univerzitetu se akredituju studijski programi  master akademske studije u tehničko-tehnološkom
                                polju: <b>Opšte građevinarstvo, Organizacija i tehnologija građenja i upravljanje izgradnjom
                                objekata i Arhitektura i urbanizam;</b> u društveno-humanističkom polju: <b>Menadžment i
                                preduzetništvo, Međunarodna politika i bezbednost,</b> a u prirodno-matematičkom polju studijski
                                program: <b>Zaštita životne sredine.</b>
                            </p><br>
                            <p>
                                Univerzitet akredituje studijske programe doktorskih studija i to u tehničko-tehnološkom polju:
                                <b>Građevinarstvo, Arhitektura i urbanizam,</b> u društveno-humanističkom polju: <b>Menadžment
                                održivog razvoja, Međunarodna politika i bezbednost</b> a u prirodno-matematičkom polju studijski
                                program: <b>Zaštita životne sredine.</b>
                            </p><br>

                            <p>
                                Shodno napred navedenom Univerzitet je nosilac aktivnosti u međunarodnoj saradnji, a u odnosima
                                sa domaćim licima istupa u interesu članica, organizacionih jedinica, radi ostvarivanja i zaštite
                                njihovih interesa. Univerzitet vrši zakonom poverene funkcije i vodi evidencije za koje je nadležan.
                                Univerzitet je otvoren za pristup novih članova koji, u skladu sa zakonom, budu akreditovani, te tako
                                da trenutno broji 5 fakulteta bez svojstva pravnog lica, a po završenoj reakreditaciji imaće 4 fakulteta
                                bez svojstva pravnog lica.
                            </p><br>

                            <p>
                                Svojim aktivnostima Univerzitet obezbeđuje da članovi u realizaciji studijskih programa ostvare
                                propisane standarde i obezbede studentima odgovarajući kvalitet obrazovanja predviđen
                                standardima.
                            </p><br>
                             
                            <p>
                                Univerzitet preko postupka izbora u zvanje nastavnika obezbeđuje angažovanje nastavnika koji su
                                kompetentni za odgovarajuće oblasti. Univerzitet prati i analizira angažovanje nastavnika i saradnika
                                i preduzima mere za koje je nadležan u cilju obezbeđenja kvaliteta.   
                            </p><br>
                            <p>
                                Univerzitet prati primenu propisa i ukazuje na nedostatke i preduzima mere u cilju obezbeđenja
                                zakonitosti, u granicama svojih ovlašćenja. On prati primenu propisa i daje predloge nadležnim
                                državnim organima za njihovu promenu. Učestvuje u radu Konferencije univerziteta i preko nje
                                usklađuje ostvarivanje svojih funkcija sa drugim univerzitetima u Srbiji.
                            </p><br>

                            <h5>
                                <b>OSNOVNI ZADACI UNIVERZITETA</b>
                            </h5>
                            <br>
                            
                            <p>
                                Osnovni zadatak Univerziteta je obavljanje delatnosti  visokog obrazovanja i naučno-istraživačke,
                                odnosno umetničko-istraživačke delatnosti kao komponente jedinstvenog procesa visokog
                                obrazovanja, ekspertsko-konsultantske i druge delatnosti radi komercijalizacije rezultata svog rada,
                                izdavačke delatnosti, a  takođe i obavljanje i drugih poslova kojima se komercijalizuju rezultati
                                naučnog, istraživačkog i umetničkog rada, pod uslovom da se tim poslovima ne ugrožava kvalitet
                                nastave.
                            </p>
                            <br>
                            <p>
                                <b>Delatnost univerziteta zasnovana je na sledećim principima:</b>
                            </p>

                            <br>

                            <ul>
                                <li>autonomiji ustanove i akademskim slobodama nastavno-naučnog osoblja;
                                    javnosti rada;
                                </li>
                                <li>uvažavanju humanističkih i demokratskih vrednosti;</li>
                                <li>zabrani svakog oblika diskriminacije;</li>
                                <li>saradnja svih učesnika u procesu rada na osnovama međusobnog uvažavanja, tolerancije i
                                    poštovanja stručne kompetentnosti;</li>
                                <li>prihvatanju međunarodnih standarda u oblasti visokog obrazovanja i  stvaranju uslova za
                                    njihovu racionalnu primenu.</li>
                            </ul><br>

                            <p>
                                <b>Univerzitet ostvaruje osnovnu delatnost prema klasifikaciji delatnosti.
                                Na Univerzitetu se ostvaruju:</b>
                            </p><br>

                            <ul>
                                <li>akademske studije prvog stepena (osnovne akademske studije);</li>
                                <li>akademske studije drugog stepena (master akademske studije)</li>
                                <li>akademske studije trećeg stepena (doktorske akademske studije).</li>
                            </ul><br>


                            <p>
                                <b>Studijski programi ostvaruju se u okviru sledećih obrazovno-naučnih odnosno obrazovno-umetničkih polja:</b>
                            </p>
                            <br>

                            <ul>
                                <li>tehničko-tehnološke nauke;</li>
                                <li>društveno-humanističke nauke;</li>
                                <li>prirodno-matematičke nauke</li>
                            </ul><br>

                            <h5>MISIJA</h5><br>

                            <p>
                                Polazeći od toga da je visoko obrazovanje osnov za, na znanju zasnovanog razvoja društva i
                                njegovog daljeg ekonomskog i kulturnog napretka, osnov za unapređenja ljudskih prava i osnovnih
                                sloboda, misija Univerziteta „Union-Nikola Tesla“ jeste da omogući najviše akademske standarde i
                                obezbedi sticanje znanja i veština u skladu sa potrebama društva i projektovanim nacionalnim
                                razvojem. Da bi ostvario svoj misiju Univerzitet „Union-Nikola Tesla“,  je trajno opredeljen da teži
                                unapređenju kvaliteta visokog obrazovanja. Misija Univerziteta je da postane prepoznatljiv za
                                školovanje stručnjaka u oblasti graditeljstva, arhitekture i urbanizma, menadžmenta i biznisa, 
                                ekologije i zaštite životne sredine, menadžmenta nekretnina i međunarodne politike i bezbednosti.
                                Radi toga Univerzitet, preko svojih organizacionih jedinica, neprekidno prati i analizira ostvarivanje
                                svojih ciljeva i planira i preduzima mere za stalno unapređenje kvaliteta celokupnog rada. U tome
                                organ upravljanja, svi stručni organi i Komisija za obezbeđenje i unapređenje kvaliteta obezbeđuju
                                jedinstvo pravaca razvoja i stvaraju uslove i podstiču sve zaposlene i sve studente da daju doprinos
                                neprekidnom poboljšanju kvaliteta svih oblasti rada.
                            </p><br>

                            <h5>
                                CILjEVI KVALITETA
                            </h5><br>

                            <p>
                                <b>Cilj obezbeđenja kvaliteta je ostvarivanje Zakonom postavljenih ciljeva visokog obrazovanja i vizije
                                daljeg razvoja visokog obrazovanja na Univerzitetu „Union-Nikola Tesla“. Univerzitet za svoje
                                osnovne dugoročne ciljeve  kvaliteta postavlja:</b>
                            </p><br>

                            <ul>
                                <li>neprekidno i sistematsko unapređenje kvaliteta visokog obrazovanja</li>
                                <li>poboljšanje kvaliteta studijskih programa,</li>
                                <li>povećanje efikasnosti studija,</li>
                                <li>poboljšanje kvaliteta nastave,</li>
                                <li>poboljšanje procesa studentskog vrednovanja pedagoškog rada nastavnika,</li>
                                <li>poboljšanje kvaliteta vrednovanja studentskog rada,</li>
                                <li>poboljšanje kvaliteta i inteziviranje naučnoistraživačkog rada nastavnog osoblja.</li>
                            </ul><br>
                            
                            <h5>MERE OBEZBEĐENjA KVALITETA</h5><br>
                            <p>
                                <b>
                                    Mere za obezbeđenje kvaliteta uključuju:
                                </b>
                            </p><br>
                            
                            <ul>
                                <li>utvrđivanje oblasti obezbeđenja kvaliteta (studijski programi, nastava, nastavno osoblje,
                                    ocenjivanje studenata, biblioteka, prostor i oprema)</li>
                                <li>obavezno samovrednovanje i ocena kvaliteta studijskih programa i ustanove</li>
                                <li>međunarodna saradnja kroz izvođenje zajedničkih studijskih programa, razmene nastavnika i
                                    studenata</li>
                                <li>stalna saradnja sa diplomiranim studentima i poslodavcima u cilju provere kvaliteta studijskih
                                    programa i kompetencija koje su stekli studenti završetkom studija</li>
                            </ul><br>

                            <h5>
                                UPOZNAVAWE ZAPOSLENIH I STUDENATA SA POLITIKOM I CILJEVIMA KVALITETA ŠKOLE - JAVNOST U RADU
                            </h5><br>

                            <p>
                                <b>
                                    Svi zaposleni su na adekvatan način upoznati sa zadacima, misijom, ciljevima i merama kvaliteta:
                                </b>
                            </p><br>

                            <ul>
                                <li>menadžment Univerziteta je učestvovao u kreiranju politike kvaliteta i definisanju ciljeva
                                    kvaliteta,</li>
                                <li>neposredni izvršioci, i ostali korisnici usluga i proizvoda Univerziteta su upoznati sa
                                    navedenim preko postavljenih tekstova politike i ciljeva kvaliteta na vidljivim mestima.</li>
                            </ul>

                        </div>
                       <div class="col-12 col-md-4">
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}"><br><br>
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}">
                       </div>
                   </div>
               </div>
       </section>
        
       @include("inc/news-sr")


    @include("inc/footer")


@endsection