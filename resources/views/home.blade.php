<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Papillónia</title>
        <link rel="shortcut icon" href="/storage/app/public/img/favicon.ico" type="image/x-icon">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="sticky min-[1025px]:relative top-0 z-10 h-20 w-full bg-purple">
            <div class="h-full max-w-[71.25rem] flex flex-row justify-around header-email:justify-between items-center mx-auto p-3">
                <div class="h-2/5 w-max hidden header-email:flex flex-row items-center">
                    <img class="h-full" alt="Email" src="/img/email_icon.svg">
                    <span class="text-white font-source-sans-3 pl-3 text-xl">vilaella@vilaella.sk</span>
                </div>
                <div class="h-2/5 w-max hidden header-phone:flex flex-row items-center">
                    <img class="h-full" alt="Telefón" src="/img/phone_icon.svg">
                    <span class="text-white font-source-sans-3 pl-3 text-xl text-nowrap">+421 908 578 320</span>
                </div>
                <div class="h-full w-2/3 header-buy_book:w-max flex flex-row justify-around header-buy_book:justify-center items-center">
                    <a href="https://www.youtube.com/channel/UC9pk8QOWojEUrcFuMNCxvgA" target="_blank" class="h-full aspect-square bg-dark-purple flex items-center justify-center rounded-lg transition-opacity duration-300 hover:opacity-80">
                        <img class="h-1/2" alt="Youtube" src="/img/youtube_icon.svg">
                    </a>
                    <a href="https://www.facebook.com/VILAELLAfanpage" target="_blank" class="h-full aspect-square bg-dark-purple flex items-center justify-center rounded-lg mx-2 transition-opacity duration-300 hover:opacity-80">
                        <img class="h-1/2" alt="Facebook" src="/img/facebook_icon.svg">
                    </a>
                    <a href="https://www.instagram.com/vila_ella" target="_blank" class="h-full aspect-square bg-dark-purple flex items-center justify-center rounded-lg transition-opacity duration-300 hover:opacity-80">
                        <img class="h-1/2" alt="Instagram" src="/img/instagram_icon.svg">
                    </a>
                </div>
                <a href="https://www.vilaella.sk/knihy/papillonia-magicka-misia/" target="_blank" class="hidden header-buy_book:inline preload bg-white hover:bg-green text-purple hover:text-white font-source-sans-3 text-xl text-nowrap py-3 px-8 rounded-lg font-bold transition-colors duration-300">Kúp knihu za 11,80€</a>
            </div>
        </header>
        <section class="w-full py-16 bp:py-32 px-5 bg-[color:black] bg-no-repeat bg-cover bg-left-top bg-[image:url('/public/img/section2_bg.jpg')]">
            <div class="max-w-[71.25rem] mx-auto flex flex-col-reverse bp:flex-row justify-between">
                <div class="w-full bp:w-1/2 mt-7 bp:mt-0 animate__animated animate__fadeInRight animate__slow animate__delay-1s">
                    <div class="text-center bp:text-left">
                        <h1 class="text-white font-playfair-display font-semibold text-5xl bp:text-6xl">PAPILLÓNIA</h1>
                        <div class="my-8 text-xl bp:text-2xl font-source-sans-3 text-white">
                            <span class="font-bold">Magická misia</span>
                            <p class="my-3.5">
                                Táto magická kniha naučí deti, ako sa postaviť strachu a vyrovnať sa s rôznymi situáciami, ktoré ich v živote stretnú, aby prežili šťastný a naplnený život. Dodá vašim deťom odvahu a sebadôveru rozvíjať svoje talenty a ísť za svojimi snami.    
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col bp:flex-row justify-between text-white text-lg text-center font-bold">
                        <a href="https://www.vilaella.sk/knihy/papillonia-magicka-misia/" target="_blank" class="flex flex-row justify-center items-center flex-wrap w-full bp:w-[48%] px-4 py-6 bp:py-3 rounded-lg bg-green hover:bg-light-green transition-colors duration-300 mb-5 bp:mb-0">
                            <span>Chcem knihu</span>
                            <span class="text-nowrap ml-1.5">za 11,80€</span>
                        </a>
                        <a href="https://www.vilaella.sk/knihy/e-kniha-papillonia/" target="_blank" class="flex flex-row justify-center items-center flex-wrap w-full bp:w-[48%] px-4 py-6 bp:py-3 rounded-lg bg-purple hover:bg-light-purple transition-colors duration-300">
                            <span>Chcem e-knihu</span>
                            <span class="text-nowrap ml-1.5"> za 6,80€</span>
                        </a>
                    </div>
                    <div class="flex flex-row justify-start bp:justify-center items-center border-x border-y border-gray-600 border-solid mt-5 p-3 bg-[#05003B]">
                        <img src="/img/pen_white_icon.svg" alt="Pero">
                        <span class="text-white text-lg ml-3 font-source-sans-3 font-bold">OSOBNÉ VENOVANIE</span>
                    </div>
                </div>
                <div class="h-full w-full bp:w-2/5 flex flex-row justify-center">
                    <img class="max-h-[35rem] bp:max-h-[31rem] max-w-full animate__animated animate__zoomIn animate__slow" src="/img/book.jpg" alt="Papillónia">
                </div>
            </div>
        </section>
        <section class="py-9 bg-[#f3f3f3]">
            <div class="max-w-[71.25rem] mx-auto px-5">
                <span class="block w-full mb-5 text-center text-purple font-playfair-display font-semibold text-2xl bp:text-5xl">PAPILLÓNIA tento rok oslavuje 10 rokov.</span>
            </div>
        </section>
        <section class="max-w-[71.25rem] mx-auto py-10 bp:py-20 px-5 text-center bp:leading-10 flex flex-col items-center">
            <h2 class="mb-12 font-playfair-display text-4xl bp:text-5xl text-center">Strhujúci príbeh</h2>
            <div class="font-source-sans-3 bp:text-2xl">
                <p class="text-[#313131]">PAPILLÓNIA  pomohla už tisíckam detí získať sebadôveru, aby si našli svoje miesto v kolektíve a odvahu ísť za svojimi snami. Vaše deti sa stanú hlavným hrdinom príbehu a pomáhajú spolu s ostatnými hrdinami zachrániť rozprávkový svet, ale aj svet ľudí! Kniha je plná krásnych myšlienok, ktoré môžu navždy zmeniť nielen ich život. Objavia v sebe skrytú silu, ktorá ich povedie, aby sa stali tým, kým chcú byť. Všetci si zaslúžia byť šťastní, robiť to, čo ich napĺňa a prežiť život plný radosti a lásky.</p>
                <p class="my-6 bp:my-12 text-[#313131]">Nič nemôže deti zaujať viac ako táto pôvodná slovenská rozprávková kniha, plná zázrakov a magických indícií, s ktorou sa vydajú na neobyčajné dobrodružstvo a pomáhajú vílam zachrániť rozprávkovú ríšu snov, ale aj svet ľudí. Toto nie je len taká obyčajná kniha, táto kniha je magická a vďaka nej môžu vaše deti pomôcť zachrániť ríšu snov a urobiť tento svet krajším a radostnejším. Ak milujete rozprávky, zázraky a splnené sny, toto je tá pravá kniha nielen pre detičky, ale aj pre mamičky.</p>
                <p class="font-bold italic mb-6 bp:mb-12 text-blue">V knihe sa ukrýva aj CD s titulnou piesňou</p>
                <p class="font-bold italic text-blue">„ŽI SVOJ SEN“</p>
            </div>
            <div class="w-full bp:w-[70%]">
                <div class="relative rounded-3xl mt-12 overflow-hidden w-full pt-[56.25%]">
                    <iframe
                        class="absolute inset-0"
                        width="100%"
                        height="100%"
                        src="https://www.youtube-nocookie.com/embed/38AntZdpBLY?si=QQ-RVV_pcrwU7TSw&autoplay=1&mute=1&loop=1&playlist=38AntZdpBLY"
                        title="Ži svoj sen"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <section class="px-3">
            <div class="max-w-[76.25rem] mx-auto">
                <div class="h-px w-full bg-[#EAEAEA]"></div>
                <div class="flex flex-col bp:flex-row items-center justify-around text-2xl py-8 bp:py-16 font-playfair-display italic">
                    <h2>
                        <span class="font-bold">Aktuálne </span>
                        <span>posolstvo</span>
                    </h2>
                    <h2 class="py-8 bp:py-0">
                        <span class="font-bold">Silné </span>
                        <span>emócie</span>
                    </h2>
                    <h2>
                        <span class="font-bold">Hlboké </span>
                        <span>myšlienky</span>
                    </h2>
                </div>
                <div class="h-px w-full bg-[#EAEAEA]"></div>
            </div>
        </section>
        <section class="py-16 px-5 flex flex-col items-center">
            <img class="size-14 mb-5" src="/img/quotes_icon.svg" alt="Úvodzovky">
            <p class="max-w-[41rem] font-playfair-display text-lg bp:text-2xl/relaxed text-center">„Túto knihu by malo mať každé dieťa.... S mojou dcérkou sme ju prečítali jedným dychom a musím povedať, že je neuveriteľná... dotkla sa ma viac ako Malý princ. Aj som mala niekedy zimomriavky. Keby si ju prečítal každý, náš svet by bol oveľa krajší.„</p>
            <span class="text-purple font-source-sans-3 font-bold my-5">Veronika Slaná</span>
            <div class="flex flex-row" title="5/5">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
            </div>
        </section>
        <section class="relative py-20 bp:py-24 bg-cover bg-no-repeat bg-left bp:bg-center bg-[image:url('/public/img/section7_bg.jpg')]">
            <div class="absolute inset-x-0 bottom-0 h-48 bg-gradient-to-b from-transparent to-black bg-bottom"></div>
            <img class="absolute top-0 w-full h-[23px] bp:h-[78px]" src="/img/section7_top.svg" alt="Vrch">
            <div class="px-5 max-w-[71.25rem] z-[1] relative">
                <h2 class="text-white font-playfair-display text-3xl bp:text-5xl my-12 pt-4">O knihe</h2>
                <div class="text-white bp:text-2xl font-source-sans-3">
                    <div class="flex flex-row items-center mb-5">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Nesie prvky literatúry  osobného rozvoja, ale podané detskou rečou.</span>
                    </div>
                    <div class="flex flex-row items-center mb-5">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Kniha je jedinečná tým, že nie je klasicky ilustrovaná, ale hraná.</span>
                    </div>
                    <div class="flex flex-row items-center mb-5">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Napínavým príbehom vás budú sprevádzať prekrásne fotografie.</span>
                    </div>
                    <div class="flex flex-row items-center mb-5">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Kniha je plná výpravných kostýmov a rozprávkových bytostí.</span>
                    </div>
                    <div class="flex flex-row items-center mb-5">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Nájdete v nej všetko dôležité, čo by malo počuť každé dieťa.</span>
                    </div>
                    <div class="flex flex-row items-center mb-5">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Popisuje, že aj obyčajný človek môže vykonať neobyčajné veci.</span>
                    </div>
                    <div class="flex flex-row items-center mb-5">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Prelínajú sa v nej prvky motivačnej literatúry a dobrodružnej detektívky.</span>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="pr-5">
                            <div class="rounded-full bg-purple size-3.5"></div>
                        </div>
                        <span>Príbeh v sebe nesie silné posolstvo, ktoré môže zmeniť život dieťatka i celej spoločnosti.</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-black px-5 bp:px-2 pb-14">
            <h2 class="text-[#F2CE9A] text-2xl text-center font-playfair-display">UKÁŽKY Z KNIHY</h2>
            <div class="swiper swiper-main max-w-[71.25rem] mt-14">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-1.jpg" alt="str.11-12">
                  </div>
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-2.jpg" alt="str.12-13">
                  </div>
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-3.jpg" alt="str.20-21">
                  </div>
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-4.jpg" alt="str.28-29">
                  </div>
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-5.jpg" alt="str.36-37">
                  </div>
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-6.jpg" alt="str.50-51">
                  </div>
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-7.jpg" alt="str.54-55">
                  </div>
                  <div class="swiper-slide">
                    <img class="px-1 cursor-pointer" src="/img/carousel-8.jpg" alt="str.62-63">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </section>
        <section class="py-16 px-5 flex flex-col items-center">
            <img class="size-14 mb-5" src="/img/quotes_icon.svg" alt="Úvodzovky">
            <p class="max-w-[41rem] font-playfair-display text-lg bp:text-2xl/relaxed text-center">„Bez tajomstva, bez schopnosti žasnúť by sme boli ako vyhasnuté sviece“, vyznal sa Albert Einstein v svojej knihe filozofických esejí Svet ako ho vidím ja. Táto rozprávková kniha ma veľmi zaujala, čítala som ju priam detskými očami. Uvádza nás do tajomného sveta, ktorý nás núti zažať tie ešte nevyhasnuté, ale tlejúce sviece v nás, núti nás žasnúť. Aj nad objavovaným svetom, aj nad autorkiným talentom zaujať, zlákať nás na „zimomriavkové“ putovanie za poznaním, vlastným úsilím, hľadajúcim riešenie, ako a čím zachrániť svet.  A nielen ten rozprávkový!</p>
            <span class="text-purple font-source-sans-3 font-bold my-5">Prof. Phdr. Eva Fordinálová, PhD.</span>
            <div class="flex flex-row" title="5/5">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
                <img src="/img/star_rounded_icon.svg" alt="Hviezda">
            </div>
        </section>
        <section class="bg-black pt-20 bp:pb-16 px-5 flex flex-col items-center">
            <h2 class="text-yellow-400 text-3xl bp:text-5xl font-playfair-display text-center mb-6">VÍLLA ELLA a zvieratká</h2>
            <div class="max-w-[57.5rem] w-full bp:w-[70%]">
                <div class="relative my-6 overflow-hidden w-full pt-[56.25%]">
                    <iframe
                        class="absolute inset-0"
                        width="100%"
                        height="100%"
                        src="https://www.youtube-nocookie.com/embed/9oD0Qiyz9qU?si=2gFW3xQbLA22jhLC"
                        title="VÍLLA ELLA a zvieratká"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <section class="pt-12 flex flex-col items-center px-8 bp:px-4">
            <h2 class="text-3xl bp:text-4xl font-playfair-display font-semibold text-center">Čo o PAPILLÓNII povedali?</h2>
            <div class="pt-4 bp:pt-[4.375rem] max-w-[75rem] flex flex-col bp:flex-row justify-between">
                <div class="flex flex-col items-center bp:w-1/2 bp:mr-8 mt-10 bp:mt-0">
                    <div class="flex flex-row justify-between w-[9rem]" title="5/5">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                    </div>
                    <p class="my-5 text-lg bp:text-xl text-center text-grey font-source-sans-3">Nám sa táto magická kniha neskutočne páčila, skvelý námet, posolstvo, spracovanie .... všetko skvelé. So 4-ročným synom sme ju doslova zhltli pred spaním a myslím, že je najmä do slnečnej víly mierne zamilovaný 😊 Pesnička s klipom frčí niekoľko krát denne. Gratulujem 😊 Veríme a snívame.... 😊</p>
                    <span class="text-center text-[#C63E37] font-bold text-lg font-source-sans-3">Martina Silleová</span>
                </div>
                <div class="flex flex-col items-center bp:w-1/2 bp:ml-8 mt-10 bp:mt-0">
                    <div class="flex flex-row justify-between w-[9rem]" title="5/5">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                    </div>
                    <p class="my-5 text-lg bp:text-xl text-center text-grey font-source-sans-3">U nás v materskom centre sme sa bavili, ako sa deťom zapáčila pesnička Ži svoj sen". Moja Linduška mi povie, "mami pusti lai-lai-lai" a druhé dievčatko chce zasa 5x denne "bailando", jej maminka ani najskôr nevedela čo to chce, až potom zistila, že je to prvé slovo z titulnej pesničky z knihy.</p>
                    <span class="text-center text-[#C63E37] font-bold text-lg font-source-sans-3">Martina Osvaldová</span>
                </div>
            </div>
            <div class="pt-4 bp:pt-[4.375rem] max-w-[75rem] flex flex-col bp:flex-row justify-between">
                <div class="flex flex-col items-center bp:w-1/2 bp:mr-8 mt-10 bp:mt-0">
                    <div class="flex flex-row justify-between w-[9rem]" title="5/5">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                    </div>
                    <p class="my-5 text-lg bp:text-xl text-center text-grey font-source-sans-3">Kniha je fakt nádherná, od obalu až po krásne fotografie, ktorými je ilustrovaná. A múdrosti a myšlienky v nej sú neskutočne povzbudivé, je to hotový skvost.</p>
                    <span class="text-center text-[#C63E37] font-bold text-lg font-source-sans-3">Dominika Kalná</span>
                </div>
                <div class="flex flex-col items-center bp:w-1/2 bp:ml-8 mt-10 bp:mt-0">
                    <div class="flex flex-row justify-between w-[9rem]" title="5/5">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                    </div>
                    <p class="my-5 text-lg bp:text-xl text-center text-grey font-source-sans-3">S mojím synčekom sme ju čítali už niekoľko krát, pretože ju chce stále dokola a miluje vílu Ellu. Táto úžasná kniha nepovzbudí len deti, ale aj dospelých.</p>
                    <span class="text-center text-[#C63E37] font-bold text-lg font-source-sans-3">Erika Slobodová</span>
                </div>
            </div>
            <div class="pt-4 bp:pt-[4.375rem] max-w-[75rem] flex flex-col bp:flex-row justify-start">
                <div class="flex flex-col items-center bp:w-1/2 mx-auto mt-10 bp:mt-0">
                    <div class="flex flex-row justify-between w-[9rem]" title="5/5">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                        <img src="/img/star_sharp_icon.svg" alt="Hviezda">
                    </div>
                    <p class="my-5 text-lg bp:text-xl text-center text-grey font-source-sans-3">Papillónia je kniha, od ktorej sa deti nemôžu odtrhnúť. Čítali ju aj moji rodičia a boli nadšení.</p>
                    <span class="text-center text-[#C63E37] font-bold text-lg font-source-sans-3">Jakub Hronský</span>
                </div>
            </div>
        </section>
        <section class="pt-28 pb-14 px-5 flex flex-col items-center">
            <h2 class="font-playfair-display text-3xl bp:text-5xl font-bold text-center">Objednajte si PAPILLÓNIU</h2>
            <div class="max-w-[56.25rem] w-full py-10 bp:py-10 flex flex-col bp:flex-row items-center justify-between bp:justify-around">
                <div class="flex flex-row justify-center items-center py-5">
                    <img src="/img/package_black_icon.svg" alt="Balík">
                    <span class="text-lg ml-3 font-source-sans-3">Rýchle doručenie</span>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <img src="/img/pen_black_icon.svg" alt="Pero">
                    <span class="block max-[410px]:w-44 text-lg ml-3 font-source-sans-3 text-center">OSOBNÉ VENOVANIE JE SAMOZREJMOSŤOU</span>
                </div>
            </div>
            <div class="w-full bp:w-max min-[1248px]:w-3/5 max-w-[68.75rem] flex flex-col bp:flex-row justify-between">
                <div class="w-full bp:max-w-[21.65rem] flex flex-col items-center bp:mr-4">
                    <a href="https://www.vilaella.sk/knihy/papillonia-magicka-misia/" target="_blank" class="mx-3">
                        <img class="mx-auto" width="80%" src="/img/book.jpg" alt="Voľba">
                    </a>
                    <a href="https://www.vilaella.sk/knihy/papillonia-magicka-misia/" target="_blank" class="block w-[40%] bp:w-full my-5 text-center bg-green hover:bg-light-green text-lg text-white font-source-sans-3 py-3 rounded-lg font-bold transition-colors duration-300">
                        <span>Chcem knihu</span>
                    </a>
                    <p class="text-green text-3xl font-bold font-source-sans-3">za 11,80 €</p>
                </div>
                <div class="w-full bp:max-w-[21.65rem] flex flex-col items-center bp:ml-4 mt-6 bp:mt-0">
                    <a href="https://www.vilaella.sk/knihy/e-kniha-papillonia/" target="_blank" class="mx-3">
                        <img class="mx-auto" width="80%" src="/img/book.jpg" alt="E-kniha">
                    </a>
                    <a href="https://www.vilaella.sk/knihy/e-kniha-papillonia/" target="_blank" class="block w-[40%] bp:w-full my-5 text-center bg-purple hover:bg-light-purple text-lg text-white font-source-sans-3 py-3 rounded-lg font-bold transition-colors duration-300">
                        <span>Chcem e-knihu</span>
                    </a>
                    <p class="text-purple text-3xl font-bold font-source-sans-3">za 6,80 €</p>
                </div>
            </div>
        </section>
        <section class="max-w-[71.25rem] mx-auto py-10 bp:py-20 px-5 flex flex-col items-center">
            <h1 class="font-playfair-display text-[#f97316] text-3xl bp:text-5xl font-bold text-center">Mama</h1>
            <div class="w-full bp:w-[70%]">
                <div class="relative mt-12 overflow-hidden w-full pt-[56.25%]">
                    <iframe
                        id="Mama"
                        class="absolute inset-0 aspect-[100/52.75]"
                        width="100%"
                        allowtransparency
                        src="https://www.youtube-nocookie.com/embed/eha_iV-sbwg?si=vZuKYgDBCt2qpPVF&autoplay=1&mute=1&loop=1&playlist=eha_iV-sbwg"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <section class="pt-14 pb-28 px-5 flex flex-col items-center">
            <h2 class="font-playfair-display text-3xl bp:text-5xl font-bold text-center">Výhodné balíčky</h2>
            <div class="w-full max-w-[68.75rem] flex flex-col bp:flex-row justify-between mt-12 bp:mt-24">
                <div class="w-full bp:max-w-[21.65rem] flex flex-col items-center">
                    <a href="https://www.vilaella.sk/ella-shop/papillonia-dvd-vila-ella-a-zvieratka/" target="_blank" class="mx-3 my-10">
                        <img width="100%" src="/img/book_dvd.jpg" alt="KNIHA + DVD VÍLLA ELLA A ZVIERATKÁ">
                    </a>
                    <a href="https://www.vilaella.sk/ella-shop/papillonia-dvd-vila-ella-a-zvieratka/" target="_blank" class="block min-w-60 w-[64.7%] bp:min-w-0 bp:max-w-64 bp:w-full bundles-buttons>bp:max-w-full my-5 px-3 text-center bg-green hover:bg-light-green text-lg text-white font-source-sans-3 py-3 rounded-lg font-bold transition-colors duration-300">
                        <div class="flex flex-col bundles-buttons<bp:flex-row bp:flex-col bundles-buttons>bp:flex-row justify-center items-center">
                            <span class="mr-0 bundles-buttons<bp:mr-1 bp:mr-0 bundles-buttons>bp:mr-1">KNIHA + DVD VÍLLA ELLA</span>
                            <span>A ZVIERATKÁ</span>
                        </div>
                    </a>
                    <p class="flex flex-row justify-between items-center text-3xl font-bold font-source-sans-3">
                        <span class="text-red line-through">26,80 €</span>
                        <span class="text-green pl-2">za 16 €</span>
                    </p>
                </div>
                <div class="w-full bp:max-w-[21.65rem] flex flex-col items-center bp:mx-8">
                    <a href="https://www.vilaella.sk/ella-shop/papillonia-cd-vila-ella-a-zvieratka/" target="_blank" class="mx-3 my-10">
                        <img width="100%" src="/img/book_cd.jpg" alt="KNIHA + CD VÍLLA ELLA A ZVIERATKÁ">
                    </a>
                    <a href="https://www.vilaella.sk/ella-shop/papillonia-cd-vila-ella-a-zvieratka/" target="_blank" class="block min-w-60 w-[64.7%] bp:min-w-0 bp:max-w-64 bp:w-full bundles-buttons>bp:max-w-full my-5 px-3 text-center bg-purple hover:bg-light-purple text-lg text-white font-source-sans-3 py-3 rounded-lg font-bold transition-colors duration-300">
                        <div class="flex flex-col bundles-buttons<bp:flex-row bp:flex-col bundles-buttons>bp:flex-row justify-center items-center">
                            <span class="mr-0 bundles-buttons<bp:mr-1 bp:mr-0 bundles-buttons>bp:mr-1">KNIHA + CD VÍLLA ELLA</span>
                            <span>A ZVIERATKÁ</span>
                        </div>
                    </a>
                    <p class="flex flex-row justify-between items-center text-3xl font-bold font-source-sans-3">
                        <span class="text-red line-through">25,40 €</span>
                        <span class="text-purple pl-2">za 15 €</span>
                    </p>
                </div>
                <div class="w-full bp:max-w-[21.65rem] flex flex-col items-center">
                    <a href="https://www.vilaella.sk/knihy/balicek-papillonia-cd-vila-ella-a-carovny-svet/" target="_blank" class="mx-3 my-10">
                        <img width="100%" src="/img/book_cd2.jpg" target="_blank" alt="KNIHA + CD VÍLLA ELLA A ČAROVNÝ SVET">
                    </a>
                    <a href="https://www.vilaella.sk/knihy/balicek-papillonia-cd-vila-ella-a-carovny-svet/" target="_blank" class="block min-w-60 w-[64.7%] bp:min-w-0 bp:max-w-64 bp:w-full bundles-buttons>bp:max-w-full my-5 px-3 text-center bg-blue hover:bg-light-blue text-lg text-white font-source-sans-3 py-3 rounded-lg font-bold transition-colors duration-300">
                        <div class="flex flex-col bundles-buttons<bp:flex-row bp:flex-col bundles-buttons>bp:flex-row justify-center items-center">
                            <span class="mr-0 bundles-buttons<bp:mr-1 bp:mr-0 bundles-buttons>bp:mr-1">KNIHA + CD VÍLLA ELLA</span>
                            <span>A ČAROVNÝ SVET</span>
                        </div>
                    </a>
                    <p class="flex flex-row justify-between items-center text-3xl font-bold font-source-sans-3">
                        <span class="text-red line-through">25,40 €</span>
                        <span class="text-blue pl-2">za 15 €</span>
                    </p>
                </div>
            </div>
            <div class="mt-16">
                <p class="text-center bp:text-3xl text-purple font-source-sans-3 font-bold mb-6">Knihu vám odošlem do 24 hodín a nezabudnite, že osobné venovanie je samozrejmosťou!</p>
            </div>
        </section>
        <section class="py-12 bp:py-20 px-5 bg-[#000030]">
            <div class="w-full max-w-[68.75rem] mx-auto flex flex-col-reverse bp:flex-row items-center bp:items-start justify-between">
                <div class="bp:w-1/2 flex flex-col items-center pr-16 mt-8">
                    <h2 class="font-playfair-display text-white text-3xl bp:text-5xl mb-5 bp:mb-10 w-full">O autorke</h2>
                    <p class="text-white bp:text-lg font-source-sans-3">Autorkou PAPILLÓNIE a zároveň predstaviteľkou Víly Elly je Elena Šefčovičová. V detstve vnímala slovenskú tvorbu pre deti ako veľmi pochmúrnu, ba až depresívnu, preto bolo jej snom vytvoriť pôvodnú rozprávku pre deti, ktorá bude plná nádherných kostýmov, čarovných bytostí a krásnych myšlienok.</p>
                    <p class="text-white bp:text-lg font-source-sans-3 py-4">Táto rozprávková kniha obsahuje vynikajúcu filozofiu, má správny spád a napätie - skrátka autorka má talent.  Uvádza nás do tajomného sveta, ktorý nás núti zažať tie ešte nevyhasnuté, ale tlejúce sviece v nás, núti nás žasnúť. Okrem vynikajúcej tvorivej fantázie, výborného, živého rozprávačského štýlu ide o niečo ešte veľmi dôležité, čo si dovolím pomenovať ako „filozofiu dobra“ a zmobilizovanie síl postaviť sa strachu z rozpínajúcich sa temnôt. Ale to si už čitateľ, a nielen detský, bude hľadať a objavovať v tejto „detektívke dobra“ sám, so schopnosťou žasnúť a kráčať so zapálenou sviecou v sebe za tajomstvom. Šťastnú cestu!</p>
                    <div class="w-full">
                        <a href="https://www.vilaella.sk/" target="_blank" class="py-2 px-6 bg-orange rounded-lg">
                            <span class="text-white font-source-sans-3 font-medium text-nowrap">Ďalšia tvorba:</span>
                        </a>
                    </div>
                </div>
                <div class="bp:w-1/2 bp:pl-3">
                    <img class="rounded-[50px]" src="/img/author.jpg" alt="Autorka">
                </div>
            </div>
            <div class="w-full max-w-[68.75rem] mt-10 mx-auto flex flex-row items-start bp:items-center justify-start bp:justify-between">
                <div class="flex flex-col bp:flex-row items-center bp:items-end justify-between">
                    <div class="w-3/4 bp:w-1/6 flex flex-row items-center bp:items-end">
                        <a href="https://www.vilaella.sk/ella-shop/dvd--vila-ella-a-zvieratka/" target="_blank">
                            <img src="/img/dvd1.jpg" alt="DVD VÍLA ELLA a zvieratká">
                        </a>
                    </div>
                    <div class="w-3/4 bp:w-1/6 flex flex-column items-center bp:items-end mt-5 bp:mt-0">
                        <a href="https://www.vilaella.sk/ella-shop/dvd-tancujeme-s-vilou-ellou/" target="_blank">
                            <img src="/img/dvd2.jpg" alt="DVD Tancujeme s vílou Ellou">
                        </a>
                    </div>
                    <div class="w-3/4 bp:w-1/6 flex flex-column items-center bp:items-end mt-5 bp:mt-0">
                        <a href="https://www.vilaella.sk/ella-shop/cd--vila-ella-a-zvieratka/" target="_blank">
                            <img src="/img/cd1.jpg" alt="CD VÍLA ELLA a zvieratká">
                        </a>
                    </div>
                    <div class="w-3/4 bp:w-1/6 flex flex-column items-center bp:items-end mt-5 bp:mt-0">
                        <a href="https://www.vilaella.sk/ella-shop/cd-tancujeme-s-vilou-ellou/" target="_blank">
                            <img src="/img/cd2.jpg" alt="CD Tancujeme s vílou Ellou">
                        </a>
                    </div>
                    <div class="w-3/4 bp:w-1/6 flex flex-column items-center bp:items-end mt-5 bp:mt-0">
                        <a href="https://www.vilaella.sk/ella-shop/cd-vila-ella-a-carovny-svet/" target="_blank">
                            <img src="/img/cd3.jpg" alt="CD VÍLA ELLA a čarovný svet">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="py-6 px-5 bp:px-3 bg-dark-grey">
            <div class="w-full max-w-[68.75rem] mx-auto flex flex-col bp:flex-row justify-between items-center">
                <p class="text-white text-center font-source-sans-3">2024 © DAGAZ s.r.o., všetky práva vyhradené</p>
                <a href="https://www.vilaella.sk/obchodne-podmienky/" target="_blank" class="mt-6 mb-2 bp:my-0 flex flex-row justify-between items-center">
                    <img src="/img/suitcase_icon.svg" alt="Kufrík">
                    <span class="pl-2 text-white font-source-sans-3">Obchodné podmienky</span>
                </a>
            </div>
        </footer>
    </body>
</html>