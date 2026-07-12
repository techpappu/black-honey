<?php

/**
 * Template name: Funnel Main
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fastest_theme
 */
get_header('custom');

$asset_base = get_template_directory_uri() . '/assets/new-images/';
$cover_image = $asset_base . 'KOREAN GINSENG Black Honey cover.webp';
$poster_one = $asset_base . 'KOREAN GINSENG Black Honey poster 1.webp';
$poster_two = $asset_base . 'KOREAN GINSENG Black Honey poster 2.webp';
$poster_four = $asset_base . 'KOREAN GINSENG Black Honey poster 4.webp';
?>

<main class="min-h-screen bg-[#121110] text-[#f7f0df] font-sans selection:bg-[#d7a93b] selection:text-[#15110a]">
    <nav class="fixed inset-x-0 top-0 z-50 border-b border-[#d7a93b]/20 bg-[#121110]/90 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
            <a href="#top" class="text-base font-black uppercase tracking-[0.18em] text-[#f0c75b] sm:text-lg">Black Honey</a>
            <div class="hidden items-center gap-7 text-sm font-semibold text-[#d9cfb8] md:flex">
                <a class="transition hover:text-[#f0c75b]" href="#benefits">উপকারিতা</a>
                <a class="transition hover:text-[#f0c75b]" href="#details">কোয়ালিটি</a>
                <a class="transition hover:text-[#f0c75b]" href="#reviews">রিভিউ</a>
                <a class="transition hover:text-[#f0c75b]" href="#faq">প্রশ্ন উত্তর</a>
            </div>
            <a href="tel:01811546841" class="rounded-full border border-[#d7a93b]/40 px-4 py-2 text-sm font-bold text-[#f0c75b] transition hover:bg-[#d7a93b] hover:text-[#15110a]">01811546841</a>
        </div>
    </nav>

    <section id="top" class="relative flex min-h-screen items-center overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <img class="h-full w-full object-cover opacity-60" src="<?php echo esc_url($cover_image); ?>" alt="Korean Ginseng Black Honey cinematic product shot">
            <div class="absolute inset-0 bg-gradient-to-t from-[#121110] via-transparent to-[#121110]/50"></div>
            <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(18,17,16,0.94)_0%,rgba(18,17,16,0.74)_42%,rgba(18,17,16,0.24)_100%)]"></div>
        </div>


        <div class="relative z-10 mx-auto grid max-w-7xl items-center gap-10 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div class="space-y-6">
                <span class="inline-block rounded-full border border-[#d7a93b]/30 bg-[#d7a93b]/10 px-4 py-1 text-xs font-black uppercase tracking-[0.22em] text-[#f0c75b] backdrop-blur-sm">Premium Health Solution</span>
                <h1 class="max-w-3xl text-4xl font-black leading-tight text-[#f0c75b] drop-shadow-[0_0_18px_rgba(215,169,59,0.28)] sm:text-5xl lg:text-7xl">প্রতিদিনের শক্তির জন্য প্রিমিয়াম ব্ল্যাক হানি</h1>
                <p class="max-w-xl text-lg leading-8 text-[#d9cfb8]">কোরিয়ান জিনসেং ও রিচ ব্ল্যাক হানির প্রিমিয়াম ব্লেন্ড। ব্যস্ত জীবন, ক্লান্তি আর দৈনন্দিন পারফর্মেন্সের জন্য তৈরি একটি শক্তিশালী herbal সাপোর্ট।</p>
                <div class="pt-4">
                    <a class="inline-block rounded-full bg-[#db8000] px-10 py-4 text-xl font-black uppercase tracking-[0.12em] text-black shadow-[inset_0_2px_4px_rgba(255,255,255,0.28),0_18px_45px_rgba(219,128,0,0.28)] transition-all hover:scale-105 hover:bg-[#f0c75b] active:scale-95" href="#order">Order Now</a>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <div class="mb-14 text-center">
            <h2 class="mb-4 text-3xl font-black text-[#f0c75b] sm:text-4xl">Why Choose Black Honey?</h2>
            <div class="mx-auto h-1 w-24 bg-[#d7a93b]"></div>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="border border-[#d7a93b]/15 bg-[#1e1e1e] p-8 text-center shadow-xl transition hover:-translate-y-1 hover:border-[#d7a93b]/40">
                <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-[#d7a93b]/10 text-3xl text-[#f0c75b]">⚡</div>
                <h3 class="mb-4 text-2xl font-black text-[#f7f0df]">Deep, Lasting Energy</h3>
                <p class="leading-7 text-[#d0c5af]">দিনভর ফ্রেশ, অ্যাকティブ ও আত্মবিশ্বাসী থাকতে প্রিমিয়াম হারবাল এনার্জি সাপোর্ট।</p>
            </div>
            <div class="border border-[#d7a93b]/15 bg-[#1e1e1e] p-8 text-center shadow-xl transition hover:-translate-y-1 hover:border-[#d7a93b]/40">
                <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-[#d7a93b]/10 text-3xl text-[#f0c75b]">◆</div>
                <h3 class="mb-4 text-2xl font-black text-[#f7f0df]">Rich Black Honey</h3>
                <p class="leading-7 text-[#d0c5af]">রিচ ব্ল্যাক হানি ও কোরিয়ান জিনসেংয়ের কম্বিনেশন, স্বাদে প্রিমিয়াম এবং ব্যবহারে সহজ।</p>
            </div>
            <div class="border border-[#d7a93b]/15 bg-[#1e1e1e] p-8 text-center shadow-xl transition hover:-translate-y-1 hover:border-[#d7a93b]/40">
                <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-[#d7a93b]/10 text-3xl text-[#f0c75b]">✓</div>
                <h3 class="mb-4 text-2xl font-black text-[#f7f0df]">Cash on Delivery</h3>
                <p class="leading-7 text-[#d0c5af]">অগ্রিম টাকা লাগবে না। প্রোডাক্ট হাতে পেয়ে তারপর পেমেন্ট করুন।</p>
            </div>
        </div>
    </section>

    <section id="details" class="bg-[#0e0e0e] py-16 lg:py-24">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8">
            <div class="relative">
                <img class="relative z-10 w-full border border-[#d7a93b]/15 object-cover shadow-2xl" src="<?php echo esc_url($poster_one); ?>" alt="Korean Ginseng Black Honey product details">
                <div class="absolute -left-8 -top-8 h-40 w-40 rounded-full bg-[#d7a93b]/10 blur-3xl"></div>
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-black leading-tight text-[#f0c75b] sm:text-4xl">The “One Stick a Day” Ritual</h2>
                <p class="text-lg leading-8 text-[#d0c5af]">প্রতিটি স্টিক প্যাক অন-দ্য-গো ব্যবহারের জন্য তৈরি। নির্দিষ্ট পরিমাণ ব্ল্যাক হানি ও কোরিয়ান জিনসেংয়ের ব্লেন্ড আপনার দৈনন্দিন রুটিনে সহজে যুক্ত হয়।</p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <span class="text-2xl text-[#f0c75b]">✓</span>
                        <span class="font-semibold text-[#f7f0df]">Premium Korean Ginseng blend</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="text-2xl text-[#f0c75b]">✓</span>
                        <span class="font-semibold text-[#f7f0df]">Naturally rich black honey base</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="text-2xl text-[#f0c75b]">✓</span>
                        <span class="font-semibold text-[#f7f0df]">Convenient daily stick packaging</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="text-2xl text-[#f0c75b]">✓</span>
                        <span class="font-semibold text-[#f7f0df]">সারাদেশে ক্যাশ অন ডেলিভারি</span>
                    </li>
                </ul>
                <div class="flex gap-8 pt-6">
                    <div class="text-center">
                        <div class="text-3xl font-black text-[#f0c75b]">10</div>
                        <div class="text-sm font-semibold uppercase tracking-[0.18em] text-[#d0c5af]">Stick pack</div>
                    </div>
                    <div class="border-l border-[#4d4635] px-8 text-center">
                        <div class="text-3xl font-black text-[#f0c75b]">COD</div>
                        <div class="text-sm font-semibold uppercase tracking-[0.18em] text-[#d0c5af]">Available</div>
                    </div>
                </div>
                <a href="#order" class="inline-flex rounded-full bg-[#d7a93b] px-8 py-4 font-black text-[#15110a] transition hover:bg-[#f0c75b]">অর্ডার করতে চাই</a>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <div class="mb-14 text-center">
            <h2 class="text-3xl font-black uppercase text-[#f0c75b] sm:text-4xl">Premium Quality</h2>
            <p class="mt-3 text-[#d0c5af]">Quality you can see, packaging you can trust.</p>
        </div>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="border border-[#d7a93b]/15 bg-[#1e1e1e] p-8 shadow-xl">
                <div class="mb-8 flex aspect-[4/5] items-center justify-center border border-white/10 bg-white/5 p-5">
                    <img class="h-full w-full object-contain" src="<?php echo esc_url($poster_two); ?>" alt="Korean Ginseng Black Honey quality poster">
                </div>
                <h3 class="mb-2 text-xl font-black text-[#f0c75b]">Premium Pack Details</h3>
                <p class="text-sm leading-6 text-[#d0c5af]">স্টিক প্যাক, কোরিয়ান জিনসেং ব্লেন্ড এবং ব্ল্যাক হানি ফর্মুলার তথ্য পরিষ্কারভাবে দেখতে পারবেন।</p>
            </div>
            <div class="border border-[#d7a93b]/15 bg-[#1e1e1e] p-8 shadow-xl">
                <div class="mb-8 flex aspect-[4/5] items-center justify-center border border-white/10 bg-white/5 p-5">
                    <img class="h-full w-full object-contain" src="<?php echo esc_url($poster_four); ?>" alt="Korean Ginseng Black Honey product packaging">
                </div>
                <h3 class="mb-2 text-xl font-black text-[#f0c75b]">Authentic Product View</h3>
                <p class="text-sm leading-6 text-[#d0c5af]">অর্ডারের আগে প্রোডাক্ট প্যাকেজিং, বক্স ও স্টিক ভিজ্যুয়াল দেখে সিদ্ধান্ত নিন।</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-[#171512] py-16 lg:py-24 overflow-hidden" id="reviews">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
            <h2 class="text-3xl font-black uppercase text-[#f0c75b] sm:text-4xl text-center mb-16 tracking-wide font-['Playfair_Display']">Happy Customers</h2>
            <div class="relative group">
                <!-- Navigation Buttons -->
                <button
                    class="absolute left-0 top-1/2 -translate-y-1/2 -ml-4 lg:-ml-12 z-20 w-12 h-12 rounded-full bg-[#d7a93b] text-black flex items-center justify-center shadow-lg hover:scale-110 active:scale-95 transition-transform duration-200"
                    id="prevBtn">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button
                    class="absolute right-0 top-1/2 -translate-y-1/2 -mr-4 lg:-mr-12 z-20 w-12 h-12 rounded-full bg-[#d7a93b] text-black flex items-center justify-center shadow-lg hover:scale-110 active:scale-95 transition-transform duration-200"
                    id="nextBtn">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
                <!-- Carousel Container -->
                <div class="testimonial-carousel flex gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none] pb-8"
                    id="testimonial-carousel">
                    <!-- Testimonial 1 -->
                    <div
                        class="testimonial-item flex-none w-full md:w-[calc(50%-8px)] lg:w-[calc(33.333%-11px)] snap-start">
                        <div class="bg-[#1e1e1e] border border-[#d7a93b]/15 p-8 rounded-2xl h-full flex flex-col justify-between transition-all duration-300 ease-in-out hover:border-[#d7a93b]/40 hover:-translate-y-1">
                            <div>
                                <div class="flex gap-1 text-[#f0c75b] mb-4">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="italic text-[#cfc4ad] text-[16px] md:text-[17px] leading-[1.75] font-normal font-['Work_Sans'] mb-6 flex-grow">"Since I started taking one stick every morning, my productivity has skyrocketed. No mid-day slump anymore!"</p>
                            </div>
                            <div class="flex items-center gap-4 mt-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#d7a93b]/20 flex items-center justify-center text-[#f0c75b] font-bold text-sm font-['Work_Sans']">
                                    RH</div>
                                <div>
                                    <div class="font-bold text-[#cfc4ad] text-[15px] leading-tight font-['Work_Sans']">Rahim H.</div>
                                    <div class="text-[12px] text-[#f0c75b] font-semibold tracking-wider leading-normal font-['Work_Sans'] mt-1">Dhaka, Bangladesh</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div
                        class="testimonial-item flex-none w-full md:w-[calc(50%-8px)] lg:w-[calc(33.333%-11px)] snap-start">
                        <div class="bg-[#1e1e1e] border border-[#d7a93b]/15 p-8 rounded-2xl h-full flex flex-col justify-between transition-all duration-300 ease-in-out hover:border-[#d7a93b]/40 hover:-translate-y-1">
                            <div>
                                <div class="flex gap-1 text-[#f0c75b] mb-4">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="italic text-[#cfc4ad] text-[16px] md:text-[17px] leading-[1.75] font-normal font-['Work_Sans'] mb-6 flex-grow">"The taste of black honey is incredible. It masks the ginseng bitterness perfectly while giving it a premium feel."</p>
                            </div>
                            <div class="flex items-center gap-4 mt-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#d7a93b]/20 flex items-center justify-center text-[#f0c75b] font-bold text-sm font-['Work_Sans']">
                                    IK</div>
                                <div>
                                    <div class="font-bold text-[#cfc4ad] text-[15px] leading-tight font-['Work_Sans']">Imran K.</div>
                                    <div class="text-[12px] text-[#f0c75b] font-semibold tracking-wider leading-normal font-['Work_Sans'] mt-1">Chittagong, BD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div
                        class="testimonial-item flex-none w-full md:w-[calc(50%-8px)] lg:w-[calc(33.333%-11px)] snap-start">
                        <div class="bg-[#1e1e1e] border border-[#d7a93b]/15 p-8 rounded-2xl h-full flex flex-col justify-between transition-all duration-300 ease-in-out hover:border-[#d7a93b]/40 hover:-translate-y-1">
                            <div>
                                <div class="flex gap-1 text-[#f0c75b] mb-4">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="italic text-[#cfc4ad] text-[16px] md:text-[17px] leading-[1.75] font-normal font-['Work_Sans'] mb-6 flex-grow">"Fast shipping and amazing quality. You can tell this is authentic Korean ginseng from the very first drop."</p>
                            </div>
                            <div class="flex items-center gap-4 mt-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#d7a93b]/20 flex items-center justify-center text-[#f0c75b] font-bold text-sm font-['Work_Sans']">
                                    HM</div>
                                <div>
                                    <div class="font-bold text-[#cfc4ad] text-[15px] leading-tight font-['Work_Sans']">Hasan M.</div>
                                    <div class="text-[12px] text-[#f0c75b] font-semibold tracking-wider leading-normal font-['Work_Sans'] mt-1">Sylhet, BD</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 4 -->
                    <div
                        class="testimonial-item flex-none w-full md:w-[calc(50%-8px)] lg:w-[calc(33.333%-11px)] snap-start">
                        <div class="bg-[#1e1e1e] border border-[#d7a93b]/15 p-8 rounded-2xl h-full flex flex-col justify-between transition-all duration-300 ease-in-out hover:border-[#d7a93b]/40 hover:-translate-y-1">
                            <div>
                                <div class="flex gap-1 text-[#f0c75b] mb-4">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="italic text-[#cfc4ad] text-[16px] md:text-[17px] leading-[1.75] font-normal font-['Work_Sans'] mb-6 flex-grow">"I gift this to my parents every month. They feel much more active and their immune system seems stronger."</p>
                            </div>
                            <div class="flex items-center gap-4 mt-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#d7a93b]/20 flex items-center justify-center text-[#f0c75b] font-bold text-sm font-['Work_Sans']">
                                    SA</div>
                                <div>
                                    <div class="font-bold text-[#cfc4ad] text-[15px] leading-tight font-['Work_Sans']">Sara A.</div>
                                    <div class="text-[12px] text-[#f0c75b] font-semibold tracking-wider leading-normal font-['Work_Sans'] mt-1">Uttara, Dhaka</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 5 -->
                    <div
                        class="testimonial-item flex-none w-full md:w-[calc(50%-8px)] lg:w-[calc(33.333%-11px)] snap-start">
                        <div class="bg-[#1e1e1e] border border-[#d7a93b]/15 p-8 rounded-2xl h-full flex flex-col justify-between transition-all duration-300 ease-in-out hover:border-[#d7a93b]/40 hover:-translate-y-1">
                            <div>
                                <div class="flex gap-1 text-[#f0c75b] mb-4">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="italic text-[#cfc4ad] text-[16px] md:text-[17px] leading-[1.75] font-normal font-['Work_Sans'] mb-6 flex-grow">"The convenient sticks are perfect for my busy office schedule. Truly a premium health product."</p>
                            </div>
                            <div class="flex items-center gap-4 mt-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#d7a93b]/20 flex items-center justify-center text-[#f0c75b] font-bold text-sm font-['Work_Sans']">
                                    TA</div>
                                <div>
                                    <div class="font-bold text-[#cfc4ad] text-[15px] leading-tight font-['Work_Sans']">Tanvir A.</div>
                                    <div class="text-[12px] text-[#f0c75b] font-semibold tracking-wider leading-normal font-['Work_Sans'] mt-1">Gulshan, Dhaka</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 6 -->
                    <div
                        class="testimonial-item flex-none w-full md:w-[calc(50%-8px)] lg:w-[calc(33.333%-11px)] snap-start">
                        <div class="bg-[#1e1e1e] border border-[#d7a93b]/15 p-8 rounded-2xl h-full flex flex-col justify-between transition-all duration-300 ease-in-out hover:border-[#d7a93b]/40 hover:-translate-y-1">
                            <div>
                                <div class="flex gap-1 text-[#f0c75b] mb-4">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="italic text-[#cfc4ad] text-[16px] md:text-[17px] leading-[1.75] font-normal font-['Work_Sans'] mb-6 flex-grow">"Highly recommended for anyone looking for a natural energy boost. The packaging itself is so elegant."</p>
                            </div>
                            <div class="flex items-center gap-4 mt-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#d7a93b]/20 flex items-center justify-center text-[#f0c75b] font-bold text-sm font-['Work_Sans']">
                                    NA</div>
                                <div>
                                    <div class="font-bold text-[#cfc4ad] text-[15px] leading-tight font-['Work_Sans']">Nabila A.</div>
                                    <div class="text-[12px] text-[#f0c75b] font-semibold tracking-wider leading-normal font-['Work_Sans'] mt-1">Banani, Dhaka</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dot Indicators -->
                <div class="flex justify-center gap-2 mt-4" id="dot-indicators">
                    <!-- Dots will be generated via script -->
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.getElementById('testimonial-carousel');
            const dotsContainer = document.getElementById('dot-indicators');

            if (!carousel || !dotsContainer) return;

            const updateDots = () => {
                const scrollLeft = carousel.scrollLeft;
                const width = carousel.offsetWidth;
                const activeIndex = Math.round(scrollLeft / width);

                const dots = dotsContainer.querySelectorAll('div');
                dots.forEach((dot, index) => {
                    if (index === activeIndex) {
                        dot.classList.remove('bg-[#d7a93b]/30');
                        dot.classList.add('bg-[#d7a93b]', 'w-6');
                    } else {
                        dot.classList.remove('bg-[#d7a93b]', 'w-6');
                        dot.classList.add('bg-[#d7a93b]/30');
                    }
                });
            };

            const setupDots = () => {
                const items = carousel.querySelectorAll('.testimonial-item');
                if (!items.length) return;
                const visibleItems = Math.round(carousel.offsetWidth / items[0].offsetWidth);
                const totalPages = Math.ceil(items.length / visibleItems);

                dotsContainer.innerHTML = '';
                for (let i = 0; i < totalPages; i++) {
                    const dot = document.createElement('div');
                    dot.className = `w-2.5 h-2.5 rounded-full bg-[#d7a93b]/30 transition-all duration-300 cursor-pointer hover:bg-[#d7a93b]/60`;
                    dot.addEventListener('click', () => {
                        carousel.scrollTo({
                            left: i * carousel.offsetWidth,
                            behavior: 'smooth'
                        });
                    });
                    dotsContainer.appendChild(dot);
                }
                updateDots();
            };

            carousel.addEventListener('scroll', updateDots);
            window.addEventListener('resize', setupDots);

            // Initial Setup
            setTimeout(setupDots, 100);
        });
    </script>

    <section id="faq" class="bg-[#171512] py-16 lg:py-24">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-black uppercase tracking-[0.24em] text-[#d7a93b]">FAQ</p>
                <h2 class="mt-4 text-3xl font-black text-[#ffe7a3] sm:text-4xl">সাধারণ প্রশ্ন উত্তর</h2>
            </div>
            <div class="mt-10 divide-y divide-white/10 border border-white/10 bg-[#1d1a16]">
                <div class="p-6">
                    <h3 class="text-lg font-black text-[#fff2bf]">ব্ল্যাক হানি কি?</h3>
                    <p class="mt-2 leading-7 text-[#cfc4ad]">প্রাকৃতিক মধু, কোরিয়ান জিনসেং ও বাছাই করা ভেষজ উপাদানের সমন্বয়ে তৈরি প্রিমিয়াম ফর্মুলা।</p>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-black text-[#fff2bf]">অগ্রিম টাকা দিতে হবে?</h3>
                    <p class="mt-2 leading-7 text-[#cfc4ad]">না, ক্যাশ অন ডেলিভারি। প্রোডাক্ট হাতে পেয়ে পেমেন্ট করবেন।</p>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-black text-[#fff2bf]">কিভাবে সেবন করতে হবে?</h3>
                    <p class="mt-2 leading-7 text-[#cfc4ad]">রাতে ঘুমানোর আগে অথবা কাজের ১ ঘন্টা আগে গরম দুধ বা গরম পানির সাথে সেবন করুন।</p>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-black text-[#fff2bf]">কত দিনের কোর্স?</h3>
                    <p class="mt-2 leading-7 text-[#cfc4ad]">১০ পিসের প্যাকটি একটি ফুল কোর্স হিসেবে ব্যবহার করা যায়।</p>
                </div>
            </div>
        </div>
    </section>

    <section id="order" class="bg-[#100f0d] py-16 lg:py-24">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

<script>
    (function() {
        const carousel = document.getElementById('testimonial-carousel');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        if (!carousel || !prevBtn || !nextBtn) return;

        function scrollAmount() {
            return Math.max(280, carousel.clientWidth * 0.9);
        }

        prevBtn.addEventListener('click', function() {
            carousel.scrollBy({
                left: -scrollAmount(),
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', function() {
            carousel.scrollBy({
                left: scrollAmount(),
                behavior: 'smooth'
            });
        });
    })();
</script>
