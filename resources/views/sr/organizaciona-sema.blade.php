@extends("layout/master")

@section("title", "Enter title here")

@section("seo_content")

    <meta name="keywords" content="" />
    <meta name="description" content="" />

@endsection

@section("content")

    @include("inc/header")


        <section class="studije_cover" style="background-image: url('{{ asset('images/web/studije-cover.png') }}');">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_contact">
                                <img class="img-fluid" src="{{ asset('images/web/fax-icon.png') }}">
                            </div>
                            <div class="footer_contact" style="padding-left: 15px;">
                                <h1>ORGANIZACIONA ŠEMA</h1>
                                <div class="red-line1" style="margin-top: 5px; margin-bottom: 10px;"></div>
                                <h6>UNIVERZITET - UNION NIKOLA TESLA</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       <section class="page_section">
           <div class="row">
               <div class="container">
                   <div class="row">
                       <div class="col-12 col-md-8">
                            <h5 style="text-transform: uppercase;"><b>Organizaciona šema</b></h5>
                            <div class="red-line1"></div>

                            <p>
                                Univerzitet „Union – Nikola Tesla“ formiran je u junu 2011. godine . Sedište Univerziteta je u
                                Beogradu, ul. Cara Dušana br 62-64, 11000 Beograd. Univerzitet je samostalna visokoškolska
                                ustanova sa pravima, obavezama i odgovornostima utvrđenim zakonom i ovim Statutom. Univerzitet
                                ima svojstvo pravnog lica. Organizacione jedinice Univerziteta su fakulteti bez statusa pravnog lica:
                            </p><br>

                            <ul>
                                <li>Fakultet za graditeljski menadžment</li>
                                <li>Fakultet za preduzetnički biznis i menadžment nekretnina</li>
                                <li>Fakultet za ekonomiju i finansije</li>
                                <li>Fakultet za ekologiju i zaštitu životne sredine</li>
                                <li>Fakultet za međunarodnu politiku i bezbednost</li>
                                <li>Fakultet za informatiku i računarstvo</li>
                            </ul><br>

                            <p>
                                Fakultet bez statusa pravnog lica (u daljem tekstu: integrisani fakultet) je visokoškolska i
                                organizaciona jedinica Univerziteta koja ostvaruje integrisane studijske programe i programe
                                naučnoistraživačkog i stručnog rada i ima zajedničke kadrovske potencijale, prostor i opremu
                                objedinjene na nivou Univerziteta, pri čemu sva prava istupanja u pravnom prometu i poslovanju,
                                raspolaganja materijalnim resursima, upravljanja i odlučivanja, obavlja preko Univerziteta.
                                Univerzitet ima svoj znak (logo), zastavu i univerzitetska obeležja.
                            </p><br>

                            <p>
                                Fakulteti sa svojstvom pravnog lica:
                            </p><br>

                            <ul>
                                <li><a target="_blank" href="http://www.famns.edu.rs/">Fakultet za menadžment</a></li>
                                <li><a target="_blank" href="https://www.fpsp.edu.rs/">Fakultet za poslovne studije i pravo</a></li>
                                <li><a target="_blank" href="https://www.fiti.edu.rs/">Fakultet za informacione tehnologije i inženjerstvo</a></li>
                                <li><a target="_blank" href="https://www.fzs.edu.rs">Fakultet za sport</a></li>
                                <li><a target="_blank" href="http://konstantinveliki.edu.rs/">Fakultet za pravo, bezbednost i menadžment „Konstantin Veliki“</a></li>
                                <li><a target="_blank" href="http://www.ppf.edu.rs/">Poslovni i pravni fakultet</a></li>
                                <li><a target="_blank" href="https://fim.edu.rs">Fakultet za inženjerski menadžment</a></li>
                                <li><a target="_blank" href="http://www.fpn.rs">Fakultet primenjenih nauka</a></li>
                                <li><a target="_blank" href="http://www.diplomatija.com/">Fakultet za diplomatiju i bezbednost</a></li>
                            </ul><br>

                            <p>
                                Univerzitetska obeležja su: rektorski lanac i toga za rektora, prorektore i dekane. Sadržaj, izgled i
                                način korišćenja obeležja iz stava 1 i 2 ovog člana uređuju se opštim aktom koji donosi Univerzitet.
                                Delatnost univerziteta Univerzitet obavlja delatnost visokog obrazovanja i naučno-istraživačku,
                                odnosno umetničko-istraživačku delatnost kao komponente jedinstvenog procesa visokog
                                obrazovanja, ekspertsko-konsultantsku i drugu delatnost radi komercijalizacije rezultata svog rada,
                                izdavačku delatnost, a može obavljati i druge poslove kojima se komercijalizuju rezultati naučnog,
                                istraživačkog i umetničkog rada, pod uslovom da se tim poslovima ne ugrožava kvalitet nastave.
                                Delatnost univerziteta zasnovana je na sledećim principima: - autonomiji ustanove i akademskim
                                slobodama nastavno-naučnog osoblja; - javnosti rada; - uvažavanju humanističkih i demokratskih
                                vrednosti; - zabrani svakog oblika diskriminacije; - saradnja svih učesnika u procesu rada na
                                osnovama međusobnog uvažavanja, tolerancije i poštovanja stručne kompetentnosti; - prihvatanju
                                međunarodnih standarda u oblasti visokog obrazovanja i stvaranju uslova za njihovu racionalnu
                                primenu. Univerzitet ostvaruje osnovnu delatnost prema klasifikaciji delatnosti.
                            </p><br>

                            <p>
                                <b>Na Univerzitetu se ostvaruju:</b>
                            </p>
                            <br>

                            <ul>
                                <li>tehničko-tehnološke nauke;</li>
                                <li>akademske studije drugog stepena (master akademske studije);</li>
                                <li>akademske studije trećeg stepena (doktorske akademske studije).</li>
                            </ul><br>
                            <p>
                                <b>
                                    Studijski programi ostvaruju se u okviru sledećih obrazovno-naučnih odnosno obrazovno-umetničkih polja:
                                </b>
                            </p><br>

                            <ul>
                                <li>tehničko-tehnološke nauke;</li>
                                <li>društveno-humanističke nauke;</li>
                                <li>prirodno-matematičke nauke.</li>
                            </ul><br>

                            <p>
                                <b>
                                    Integrativna funkcija i javna ovlašćenja Univerziteta su:
                                </b>
                            </p><br>

                            <ul>
                                <li>integriše obrazovnu, naučnoistraživačku i stvaralačku delatnost svojih jedinica i donosi plan
                                    zajedničkih investicija i razvojni plan;</li>
                                <li>putem svojih organa osigurava jedinstveno i usklađeno delovanje svojih jedinica u okviru
                                    zajedničke politike i razvojnih planova o akademskim pitanjima, naučnim istraživanjima i plasiranju
                                    odnosno komercijalizaciji naučnih i stručnih rezultata;</li>
                                <li>donosi strateški plan razvoja Univerziteta;</li>
                                <li>donosi i realizuje studijske programe;</li>
                                <li>stara se o obezbeđivanju uslova i standarda za obrazovanje tokom čitavog života;</li>
                                <li>podnosi sva dokumenta potrebna za izdavanje i izmene dozvole za rad i akreditaciju studijskog
                                    programa;</li>
                                <li>kontinuirano se stara o obezbeđenju i kontroli kvaliteta;</li>
                                <li>donosi plan kapitalnih investicija;</li>
                                <li>planira i sprovodi politiku zapošljavanja i angažovanja nastavnika i saradnika;</li>
                                <li>utvrđuje politiku upisa i određuje broja studenata za upis u prvu godinu studija;</li>
                                <li>izdaje, overava i potpisuje diplome i dodatke diplomi;</li>
                                <li>vrši izbore u zvanja nastavnika Univerziteta;</li>
                                <li>zaključuje ugovor o radu sa nastavnikom izabranim u zvanje, sem u slučaju zapošljavanja
                                    nastavnika na fakultetu sa statusom pravnog lica, kada dekan fakulteta zaključuje ugovor o radu a
                                    na osnovu rešenja koje izdaje Univerzitet;</li>
                                <li>osigurava unutrašnju i spoljnu mobilnost studenata i nastavnika;</li>
                                <li>ostvaruje i realizuje međunarodnu saradnju;</li>
                                <li>obezbeđuje racionalno korišćenje ljudskih i materijalnih resursa;</li>
                                <li>razvija interdisciplinarne i multidisciplinarne studijske programe; obezbeđuje kontrolu i stalni rast
                                    kvaliteta i konkurentnost nastavnog, naučnog i stručnog rada;</li>
                                <li>utvrđuje i jedinstveno sprovodi standarde za obezbeđivanje kvaliteta obrazovnih usluga
                                    Univerziteta;</li>
                                <li>utvrđuje jedinstvene standarde rada službi i servisa svih visokoškolskih i drugih organizacionih
                                    jedinica;</li>
                                <li>planira i koordinira razvoj jedinstvenog informacionog i bibliotečkog sistema;</li>
                                <li>osigurava imovinu Univerziteta, zaposlene i studente;</li>
                                <li>ima i druga ovlašćenja utvrđena Zakonom i ovim Statutom. Ul. Cara Dušana 62-64, Beograd
                                    info@unionnikolatesla.edu.rs telefon: 011 2180 287 Rektor je poslovodni organ Univerziteta.</li>
                            </ul><br>

                            <p>
                                <b>
                                    LIsta organizacionih jedinica u sastavu ustanove.
                                </b>
                            </p><br>

                            <img class="img-fluid" src="{{ asset('images/web/semaorganizacija.jpg') }}">
                            <br>

                            <p>
                                Rektor se bira bez konkursa iz reda redovnih profesora koji su u radnom odnosu sa punim radnim
                                vremenom u visokoškolskoj ustanovi, a na period od tri godine, sa mogućnošću ponovnog izbora,
                                bez ograničenja. Rektor se može birati i iz reda profesora – emeritusa. Rektora, na predlog Odbora
                                osnivača, bira i razrešava Savet Univerziteta većinom glasova ukupnog broja članova. Rektoru
                                prestaje mandat pre isteka vremena na koje je biran: - na lični zahtev - ako prestane da ispunjava
                                uslove predviđene za izbor - razrešenjem Savet može razrešiti rektora dužnosti, uz prethodnu
                                saglasnost Odbora osnivača ili na predlog odbora osnivača, ako: - ne ispunjava dužnosti -
                                zloupotrebi položaj - krši odredbe Statuta, Zakona i drugih opštih akata Univerziteta - prekrši kodeks
                                profesionalne etike.
                            </p><br>

                            <p>
                                <b>
                                    Nadležnost rektora:
                                </b>
                            </p><br>

                            <ul>
                                <li>zastupa i predstavlja Univerzitet i potpisuje službene akte i dokumente;</li>
                                <li>organizuje i usklađuje poslovanje Univerziteta i rukovodi njime;</li>
                                <li>odgovara za ostvarivanje obrazovne, naučne delatnosti na Univerzitetu;</li>
                                <li>predlaže poslovnu politiku i mere za njeno sprovođenje;</li>
                                <li>predlaže godišnji program rada i plan razvoja Univerziteta;</li>
                                <li>sprovodi odluke Senata, Saveta Univerziteta i Odbora osnivača;</li>
                                <li>predsedava Senatom, priprema i predlaže dnevni red sednice Senata;</li>
                                <li>naredbodavac je za izvršenje finansijskog plana;</li>
                                <li>predlaže finansijski plan Univerziteta;</li>
                                <li>predlaže izveštaj o poslovanju i godišnji obračun Univerziteta;</li>
                                <li>predlaže poseban plan ukupnih budžetskih sredstava Univerziteta i visokoškolskih jedinica u
                                    njegovom sastavu;</li>
                                <li>predlaže plan korišćenja sredstava za investicije;</li>
                                <li>osniva jedinice u skladu sa ovim Statutom;</li>
                                <li>predlaže odluku o statusnoj promeni, promeni naziva i sedišta visokoškolske jedinice i prijemu
                                    nove visokoškolske i druge organizacije u sastav Univerziteta i prestanku svojstva jedinice
                                    Univerziteta;</li>
                                <li>planira politiku zapošljavanja i angažovanja nastavnika i saradnika;</li>
                                <li>utvrđuje uslove i postupak davanja saglasnosti za angažovanje nastavnika na drugoj
                                    visokoškolskoj ustanovi;</li>
                                <li>zaključuje ugovore u ime Univerziteta;</li>
                                <li>preduzima sve pravne radnje
                                    u ime i za račun Univerziteta;</li>
                                <li>informiše Senat o kršenju Statuta i drugih opštih akata Univerziteta, odnosno sumnji na
                                    nepridržavanje Statuta i drugih opštih akata Univerziteta radi preduzimanja odgovarajućih mera, kao
                                    i o preduzetim merama u slučaju sumnje u zakonitost pojedinih akata;</li>
                                <li>imenuje i razrešava prorektore i rukovodioce visokoškolskih jedinica u skladu sa ovim Statutom;</li>
                                <li>potpisuje diplome i dodatke diplomama;</li>
                                <li>obavlja promociju doktora nauka;</li>
                                <li>pokreće inicijativu i predlaže rešenja o pitanjima od značaja za obavljanje delatnosti Univerziteta;</li>
                                <li>donosi pravilnik kojim se utvrđuju radna mesta, vrsta i stepen stručne spreme i drugi uslovi za
                                    rad na određenom radnom mestu u visokoškolskim i drugim jedinicama bez svojstva pravnog lica;</li>
                                <li>vrši ovlašćenja direktora u ostvarivanju prava, obaveza i odgovornosti zaposlenih na
                                    Univerzitetu, u skladu sa zakonom i opštim aktima Univerziteta;</li>
                                <li>donosi odluku o objavljivanju konkursa za izbor nastavnika i saradnika;</li>
                                <li>donosi odluku o imenovanju komisija za pripremu izveštaja o prijavljenim kandidatima za izbor
                                    nastavnika i saradnika</li>
                                <li>potpisuje ugovore o radu, ugovore o izvršenju nastave i autorske ugovore sa nastavnicima i
                                    saradnicima na način utvrđen zakonskim propisima;</li>
                                <li>odlučuje o pojedinačnim pravima i obavezama i odgovornostima zaposlenih lica na Univerzitetu;</li>
                                <li>donosi rešenja iz radnih odnosa radnika Univerziteta i rešenja po zahtevima studenata;</li>
                                <li>donosi odluku o angažovanju istaknutih naučnika i stručnjaka, profesora u penziji i studenata na
                                    diplomskim akademskim studijama;</li>
                                <li>donosi odluku o prijemu nenastavnih radnika;</li>
                                <li>izdaje naloge komisijama, telima i radnim grupama, koje obrazuje za razradu određenih pitanja
                                    iz delokruga svoga rada;</li>
                                <li>donosi odluku o visini školarina i cenama usluga Univerziteta,</li>
                                <li>usmerava i usklađuje rad stručnih organa Univerziteta;</li>
                                <li>odlučuje o broju nastavnih grupa za izvođenje predavanja i vežbanja i usklađuje angažovanje
                                    nastavnika i saradnika za izvođenje nastave za svaku školsku godinu;</li>
                                <li>donosi odluku o obrazovanju unutrašnjih organizacionih jedinica;</li>
                                <li>pokreće postupak kod povrede radnih dužnosti radnika Univerziteta i izriče disciplinske mere
                                    određene zakonom, Statutom i ostalim opštim aktima Univerziteta;</li>
                                <li>daje ocenu o sposobnosti za nastavni rad nastavnika kao i ocenu rada na organizaciji i realizaciji
                                    nastave nastavnika prilikom njihovog izbora ili reizbora, i određivanju godišnjeg bonusa;</li>
                                <li>donosi odluku o izboru saradnika u nastavi i daje predlog Nastavno-naučnom veću o izboru
                                    asistenata</li>
                                <li>imenuje generalnog sekretara </li>
                                <li>obavlja i druge poslove utvrđene zakonom, ovim Statutom i drugim opštim aktima Univerziteta.</li>
                            </ul><br><br>

                            <h5>
                                REKTORSKI KOLEGIJUM 
                            </h5><br>
                            <p>
                                Članovi rektorskog kolegijuma su rektor, prorektori, student prorektor i sekretar. Rektor obrazuje Rektorski radi razmatranja pitanja iz delokruga Univerziteta i zauzimanja stavova
                            </p><br>

                            <p>
                                <b>SEKRETAR UNIVERZITETA SEKRETAR</b><br>
                                Snežana Matić, dipl. pravnik<br>
                                Ul. Cara Dušana 62-64, Beograd<br>
                                telefon: 011 2180 287 / 114<br>
                                smatic@unionnikolatesla.edu.rs<br><br>

                                Sekretar univerziteta
                                koordinira rad Administrativne službe Univerziteta, savetnik je organa Univerziteta u oblasti
                                normativno-pravnih i organizacionih pitanja i obavlja druge poslove po nalogu rektora. Sekretara
                                imenuje rektor, bez konkursa, iz reda diplomiranih pravnika. Sekretar zasniva radni odnos na
                                Univerzitetu na neodređeno vreme
                            </p><br><br>

                            <p>
                                <b>STUDENTSKA SLUŽBA</b><br>
                                Slađana Trifunović, dipl. ekonomista<br>
                                Ul. Cara Dušana 62-64, Beograd<br>
                                telefon: 011 2180 287 / 114<br>
                                strifunovic@fgm.edu.rs<br>
                            </p><br><br>

                            <p>
                                <b>RAČUNOVODSTVO</b><br>
                                Ružica Aničić, dipl. ekonomista<br>
                                Ul. Cara Dušana 62-64, Beograd<br>
                                telefon: 011 2180 287<br>
                                faks: faks 2180 013<br>
                                racunovodstvo@fgm.edu.rs<br><br>

                                Administrativna služba obavlja analitičke, pravne i administrativne
                                poslove u vezi sa delatnošću visokog obrazovanja, naučnog rada i međunarodne saradnje, kao i
                                finansijsko-računovodstvene i druge stručne, administrativne, tehničke i pomoćne poslove za
                                Univerzitet. Administrativna služba organizuju se u skladu sa opštim aktom kojim se utvrđuju radna
                                mesta, vrsta i stepen stručne spreme, potrebna znanja, odnosno iskustvo i drugi posebni uslovi za
                                zasnivanje radnog odnosa na tim radnim mestima, koji donosi rektor u skladu sa zakonom.
                                Poslovima Administrativne službe rukovodi Sekretar Univerziteta
                            </p><br><br>


                            
                            <p>
                                <b>BIBLIOTEKA</b><br>
                                Mirela Šantić, dipl. bibliotekar<br>
                                Ul. Cara Dušana 62-64, Beograd<br>
                                telefon: 011 2180 287<br>
                                biblioteka@fgm.edu.rs<br><br>

                                Univerzitetska biblioteka je organizaciona jedinica Univerziteta koja obavlja bibliotečke i
                                informaciono-dokumentacione poslove za potrebe studenata, nastavnika i saradnika Univerziteta.
                                Radom biblioteke rukovodi upravnik, kojeg imenuje rektor. Način rada biblioteke i univerzitetskog
                                bibliotečkog sistema bliže se uređuju opštim aktom koji donosi Senat.
                            </p><br><br>


                            <h5>SAVET</h5><br>

                            <p>
                                bibliotečkog sistema bliže se uređuju opštim aktom koji donosi Senat.
                                SAVET Savet univerziteta je organ upravljanja Univerziteta. Savet ima 11 članova i čine ga: 7
                                predstavnika Univerziteta, 2 predstavnika osnivača i 2 predstavnika studenata.Mandat članova
                                Saveta traje tri godine. Mandat članova Saveta Univerziteta iz reda studenata je tri godine ukoliko u
                                međuvremenu nije izgubio status studenta ili ga Studentski parlament Univerziteta nije razrešio
                                dužnosti. Savet ima predsednika i zamenika predsednika. Predsednika i zamenika predsednika bira
                                Savet većinom glasova ukupnog broja članova Saveta.
                                Predsednik Saveta bira se iz reda članova Saveta - predstavnika osnivača. Nadležnost Saveta:
                            </p><br>

                            <ul>
                                <li>donosi Statut Univerziteta</li>
                                <li>bira i razrešava rektora Univerziteta, na predlog osnivača,</li>
                                <li>donosi finansijski plan</li>
                                <li>usvaja izveštaj o poslovanju i godišnji obračune</li>
                                <li>daje saglasnost na odluke o upravljanju imovinom Univerziteta</li>
                                <li>daje saglasnost na raspodelu finansijskih sredstava</li>
                                <li>donosi odluku o visini školarine za studije koje organizuje Univerzitet</li>
                                <li>podnosi Odboru osnivača jedanput godišnje izveštaj o poslovanju, kao i periodične izveštaje, na
                                    zahtev Odbora osnivača.</li>
                                <li>donosi opšti akt o disciplinskoj odgovornosti studenata</li>
                                <li>obavlja i druge poslove u skladu sa Zakonom i Statutom.</li>
                            </ul><br>

                            <p>
                                Odluke Saveta su punovažne ako dobiju saglasnost osnivača.
                            </p><br>

                            <h5>ODBOR OSNIVAČA</h5><br>

                            <ul>
                                <li>donosi odluke o osnivanju, statusnim promenama, promeni naziva i sedišta
                                    visokoškolskih jedinica u sastavu Univerziteta;</li>
                                <li>donosi odluku o osnivanju i ukidanju ustanova čiji
                                    je osnivač Univerzitet, kao i osnivanju visokoškolskih jedinica izvan svoga sedišta;</li>
                                <li>daje
                                    saglasnost na: finansijski plan Univerziteta, izveštaj o poslovanju i godišnji obračun, plan korišćenja
                                    sredstava za investicije, odluke o upravljanju imovinom Univerziteta;</li>
                                <li>predlaže Savetu univerziteta
                                    kandidata za rektora Univerziteta;</li>
                            </ul><br>

                            <h5>
                                SENAT
                            </h5><br>

                            <p>
                                Senat je najviši stručni organ Univerziteta kojem predsedava rektor.
                                Senat ima članove iz reda nastavnika i čine ga: rektor, prorektori, dekani. Pri raspravljanju odnosno
                                odlučivanju o pitanjima koja se odnose na osiguranje kvaliteta nastave, reformu studijskih programa,
                                analizu efikasnosti studiranja i utvrđivanje broja ESPB bodova u radu Senata Univerziteta učestvuje
                                20% predstavnika studenata od broja članova Senata, koje bira Studentski parlamentUniverziteta.
                                Mandat članova Senata traje 3 godine. Mandat predstavnika Studentskog parlamenta traje 1 godinu.
                                Postupak za razrešenje člana Senata jednak je postupku za njegov izbor. Senat odlučuje većinom
                                glasova od ukupnog broja članova, javnim glasanjem, izuzev ako je ovim Statutom propisana
                                drugačija većina ili tajno glasanje. Kada Senat odlučuje o izboru u zvanje i prigovoru na odluku o
                                izboru u zvanje nastavnika, na sednici mora prisustvovati najmanje dve trećine članova, a za
                                odlučivanje o drugim pitanjima, potrebnu većinu za rad Senata čini više od polovine članova
                                Senata.Rad Senata bliže se uređuje Poslovnikom
                            </p><br>

                            <p>
                                <b>
                                    Nadležnosti Senata:
                                </b>
                            </p>

                            <br>

                            <ul>
                                <li>odlučuje o pitanjima nastavne, naučne i stručne delatnosti Univerziteta;</li>
                                <li>donosi odluku o strukturi i načinu donošenja studijskih programa;</li>
                                <li>donosi studijske programe uključujući studijske programe za sticanje zajedničke diplome;</li>
                                <li>utvrđuje uže naučne oblasti iz kojih vrši izbor u zvanje nastavnika, na inicijalni predlog i predlog
                                    koji utvrde nastavno-naučna veća fakulteta;</li>
                                <li>vrši izbor u zvanja nastavnika Univerziteta;</li>
                                <li>bliže uređuje pravila studija koje se izvode na Univerzitetu;</li>
                                <li>bliže uređuje način ostvarivanja studijskog programa na daljinu koji se izvodi na Univerzitetu;</li>
                                <li>odlučuje o uslovima, načinu i postupku realizacije programa obrazovanja tokom čitavog života;</li>
                                <li>definiše tela i postupke vezane za praćenje, obezbeđivanje, unapređenje i razvoj kvaliteta
                                    studijskih programa, nastave i uslova rada;</li>
                                <li>sprovodi jedinstvenu politiku, čiji je cilj stalno unapređenje kvaliteta nastave i usavršavanje
                                    naučnoistraživačkog rada;</li>
                                <li>propisuje način i postupak samovrednovanja;</li>
                                <li>donosi opšti akt o kriterijumima i uslovima prenošenja ESPB bodova;</li>
                                <li>donosi opšti akt i odlučuje o priznavanju strane visokoškolske isprave;</li>
                                <li>donosi opšti akt o načinu i postupku zasnivanja radnog odnosa i sticanja zvanja nastavnika;</li>
                                <li>donosi opšti akt o bližim uslovima za izbor u zvanje nastavnika i saradnika;</li>
                                <li>donosi Kodeks profesionalne etike;</li>
                                <li>donosi opšti akt o uslovima i načinu uzimanja u obzir mišljenja studenata prilikom ocenjivanja
                                    rezultata pedagoškog rada nastavnika;</li>
                                <li>utvrđuje predlog opšteg akta o disciplinskoj odgovornosti studenata;</li>
                                <li>uređuje uslove i način upisa kandidata na studijske programe koje organizuje Univerzitet
                                    odnosno visokoškolska jedinica;</li>
                                <li>utvrđuje predlog broja studenata za upis na studijske programe u prvu godinu studija;</li>
                                <li>donosi odluku o raspisivanju konkursa za upis na studijske programe;</li>
                                <li>donosi opšti akt o merilima za utvrđivanje visine školarine i daje mišljenje o visini školarine za
                                    narednu školsku godinu;</li>
                                <li>utvrđuje predlog odluke o redovnim uslugama koje pokriva školarina;</li>
                                <li>uređuje uslove i način produženja radnog odnosa nastavnika koji je navršio 65 godina života i
                                    najmanje 15 godina staža osiguranja;</li>
                                <li>uređuje postupak i uslove dodeljivanja zvanja profesor emeritus i dodeljuje ovo zvanje;</li>
                                <li>sprovodi postupak za dodeljivanje počasnog doktorata;</li>
                                <li>utvrđuje Predlog statuta Univerziteta;</li>
                                <li>bira predstavnike u Konferenciju Univerziteta;</li>
                                <li>predlaže stručne, akademske i naučne nazive iz odgovarajućih oblasti i skraćenice tih naziva;</li>
                                <li>utvrđuje predloge odluka o pitanjima strategije razvoja Univerziteta;</li>
                                <li>prati međunarodnu saradnju Univerziteta i donosi odgovarajuće odluke;</li>
                                <li>donosi odluke o obrazovanju i imenovanju članova pomoćnih organa Senata, prati i usmerava
                                    njihov rad;</li>
                                <li>odlučuje u drugom stepenu o postupku povodom kršenja Kodeksa profesionalne etike</li>
                                <li>obavlja i druge poslove u skladu sa zakonom, ovim Statutom i opštim aktima Univerziteta.</li>
                            </ul><br>

                            <h5>
                                STUDENSKI PARLAMENT
                            </h5><br>

                            <p>
                                Studenski parlament je organ Univerziteta, preko koga studenti
                                ostvaruju svoja prava i štite svoje interese u visokoškolskoj ustanovi u kojoj su upisani, u skladu sa
                                Zakonom, statutom i drugim opštim aktima Univerziteta i fakulteta. Mandat članova studentskog
                                parlamenta traje godinu dana. Studentski parlament obavlja sledeće poslove: - bira i razrešava svoje
                                predstavnike u organe Univerziteta, odnosno fakulteta i njihova stručna tela - donosi opšte akte o
                                svom radu - osniva radna tela za pripremu predloga organima Univerziteta, odnosno fakulteta u vezi
                                sa pitanjima iz svoje nadležno - zauzima stavove po pitanjima koja se odnose na osiguranje kvaliteta
                                nastave reformu studijskih programa, analizu efikasnosti studiranja i utvrđivanje broja ESPB , koje
                                će njihovi pretstavnici zastupati u organima i stručnim telima čiji su članovi - obavlja i druge poslove
                                u skladu sa Zakonom, statutom i drugim opštim aktima fakulteta i Univerziteta.
                            </p>
                            <br>

                            <h5>
                                DEKAN
                            </h5><br>

                            <p>
                                <b>Dekan Fakulteta za graditeljski menadžment</b><br>
                                Prof.dr Suzana Koprivica<br>
                                Ul. Cara Dušana 62-64, Beograd<br>
                                telefon: 011 2180 287<br>
                                info@fgm.edu.rs<br><br>
                            </p><br><br>

                            <p>
                                <b>Dekan Fakulteta za ekologiju i zaštitu životne sredine:</b><br>
                                Prof. dr Novica Staletović<br>
                                Ul. Cara Dušana 62-64, Beograd<br>
                                telefon: 011 21 80 287<br>
                                info@enving.edu.rs<br><br>
                            </p><br><br>

                            <p>
                                Funkciju poslovodnog organa integrisanog fakulteta obavlja rektor Univerziteta.
                            </p><br>

                            <p>
                                Dekan je Organ rukovođenje na integrisanom fakultetu. Dekan integrisanog fakulteta bira se iz reda
                                nastavnika koji su u radnom odnosu sa punim radnim vremenom na period od tri školske godine.
                                Dekana integrisanog fakulteta imenuje rektor. Dakan integrisanog fakulteta nema prodekane.
                            </p><br>

                            <h5>
                                NASTAVNO-NAUČNO VEĆE
                            </h5><br>
                            <p>
                                Nastavno-naučno veće integrisanog fakulteta je najviši stručni organ
                                fakulteta. Nastavno-naučno veće čine nastavnici i saradnici u stalnom radnom odnosu sa
                                Univerzitetom, sa punim ili delimičnim radnim vremenom, a koji realizuju nastavu iz predmeta
                                studijskih programa.
                            </p><br>

                            <h5>
                                NADLEŽNOST  
                            </h5><br>
                            <p>
                                Nastavno-naučnog veće: - donosi pravilnik o radu fakulteta - predlaže Senatu
                                studijske programe ili delove integrisanih studijskih programa iz delokruga fakulteta - analizira uspeh
                                studenata i kvalitet nastave na studijskim programima fakulteta i predlaže nadležnim organima
                                univerziteta mere za postizanja što boljeg uspeha studenta i kvaliteta nastave, - prati nastavni,
                                naučni i stručni rad i usavršavanje nastavnika i saradnika koji su angažovanim na predmetima iz
                                delokruga fakulteta i predlaže nadležnim organima univerziteta mere za održavanje visokog nivoa ili
                                za poboljšanje njihovog rada - predlaže organima Univerziteta mere za stimulisanje studenata koji
                                su pokazali natprosečne rezultate u studijama - predlaže nadležnim organima univerziteta program
                                naučno-istraživačkog rada iz svog delokruga - predlaže rektoru kandidata za dekana fakulteta -
                                predlaže rektoru raspisivanje konkursa za izbor nastavnika i saradnika za uže naučne oblasti iz kojih
                                se nastava organizuje na fakultetu - obavlja i druge poslove u skladu sa opštim aktima univerziteta
                                Dekan i prodekani su članovi nastavno-naučnog veća po funkciji. Dekan je predsednik nastavno-
                                naučnog veća po funkciji.
                            </p><br>

                            <h5>
                                CENTRI
                            </h5><br>

                            <p>
                                <b>
                                    Na Univerzitet su formirani sledeći centri:
                                </b>
                            </p><br>

                            <ul>
                                <li>Centar za kvalitet</li>
                                <li>Centar za studentske aktivnosti</li>
                                <li>Inovacioni centar</li>
                                <li>Centar za informacioni sistem</li>
                            </ul><br>

                            <p>
                                Centar za kvalitet Centar za kvalitet definiše strategiju i politiku praćenja, obezbeđenja, unapređenja
                                i razvoja kvaliteta, i obavlja administrativne i organizacione poslove vezane za samovrednovanje i
                                podizanje kvaliteta studijskih programa, nastave i uslova rada Univerziteta i visokoškolskih jedinica.
                                Stručni organ Centra za kvalitet je Komisija za obezbeđenje kvaliteta, koji imenuje Senat na period
                                od tri godine. Komisija za obezbeđenje kvaliteta ima predsednika i članove iz reda nastavnika,
                                naučnih radnika i studenata iz svih obrazovno-naučnih polja. Način rada Centra za kvalitet bliže se
                                uređuje opštim aktom Senata. Centar za informacioni sistem univerziteta Centar za informacione
                                sisteme univerziteta (u daljem tekstu:CISU) projektuje, izvodi, razvija i održava informacioni sistem i
                                obavlja druge poslove vezane za izgradnju, rad i razvoj zajedničkih informacionih funkcija
                                Univerziteta i visokoškolskih jedinica kao i njihovog uključivanja u druge informacione sisteme u
                                zemlji i inostranstvu.
                            </p><br>

                            <p>
                                CISU je odgovoran za unapređenje rada, održavanje i pouzdan rad sistema za učenje na daljinu
                                posredstvom Interneta. Organi CISU-a su: Stručni savet i upravnik. Stručni savet imenuje Senat na
                                period od tri godine. Upravnika CISU-a imenuje rektor na period od tri godine. Stručni savet:
                            </p><br>

                            <ul>
                                <li>predlaže projektovanje i realizaciju informacionih podsistema za obrazovne, naučno-istraživačke,
                                    upravne, materijalno-finansijske i druge delatnosti i poslove Univerziteta i visokoškolskih jedinica;</li>
                                <li>predlaže razvoj i objedinjuje nabavku komunikacione opreme, održavanje računarske mreže i
                                    programskih paketa na Univerzitetu i isokoškolskim jedinicama;</li>
                                <li>organizuje i sprovodi obuku za
                                    korišćenje računarske opreme; obavlja i druge poslove vezane za informacione sisteme i računarsku
                                    mrežu Univerziteta.</li>
                            </ul><br>

                            <p>
                                Upravnik CISU-a:
                            </p><br>

                            <ul>
                                <li>predsedava Stručnom savetu CISU-a;</li>
                                <li>organizuje rad
                                    CISU -a i rukovodi njime; predlaže plan i program rada sa finansijskom podrškom CISU -a;</li>
                                <li>podnosi rektoru izveštaj o radu CISU -a i predlaže mere za unapređenje rada.</li>
                            </ul><br>

                            <p>
                                Centar za studentske
                                aktivnosti Centar za studentske aktivnosti je organizaciona jedinica Univerziteta u okviru koje se:
                            </p><br>

                            <ul>
                                <li>obezbeđuju uslovi za različite potrebe studenata,</li>
                                <li>vrši pravna zaštita studenata</li>
                                <li>obezbeđuju
                                    različite forme studentskog organizovanja: klubovi, sportska i druga društva, projektno organizovane
                                    grupe, grupe za vođenje kampanja i promociju inicijativa, grupe odgovorne za vođenje pojedinih
                                    profesionalnih aktivnosti vezanih za informisanje, kulturu, nauku,umetnost, sport i slično.</li>
                                <li>obazbeđuju uslovi za organizovanje i rad Alumni organizacije svršenih studenata Univerziteta.
                                    Poslovi i način rada Centra za studentske aktivnosti bliže se uređuju opštim aktom Saveta
                                    Univerziteta.</li>
                            </ul>


                            


                        </div>
                       <div class="col-12 col-md-4">
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}"><br><br>
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}">
                       </div>
                   </div>
               </div>
           </div>
       </section>
        
       @include("inc/news-sr")

    @include("inc/footer")


@endsection