<?php
/**
 * Template Name: Main V2
 *
 * Korean Ginseng Black Honey landing page. Checkout markup comes from page content.
 *
 * @package fastest_theme
 */

get_header('custom');

$brand_assets  = get_template_directory_uri() . '/assets/images/main-v2/mybrand/';
$mockup_assets = $brand_assets . 'mockup/';

// This palette recolors only the existing checkout component.
$checkout_colors = [
    'primary'          => '#d7a93b',
    'primary-light'    => '#d7a93b',
    'highlight'        => '#d7a93b',
    'background'       => '#ffffff',
    'surface'          => '#f3efe6',
    'text'             => '#1f1f1f',
    'muted-text'       => '#3f3f3f',
    'heading'          => '#111111',
    'input-background' => '#ffffff',
    'input-text'       => '#111111',
];

$lifestyle_images = [
    '4688.webp',
    '5678.webp',
    '5776.webp',
    '57766.webp',
    '57888.webp',
    'grok_image_1783125317397.webp',
    'grok_image_1783125367725.webp',
    'grok_image_1783129299388.webp',
];

$usage_images = [
    'grok_image_1783133013674.webp',
    'grok_image_1783133232454.webp',
    'WhatsApp Image 2026-07-03 at 17.18.34.webp',
];

$box_mockups = [
    'KOREAN GINSENG Black Honey mockup 2.webp',
    'KOREAN GINSENG Black Honey mockup 3.webp',
    'KOREAN GINSENG Black Honey mockup u.webp',
    'KOREAN GINSENG Black Honey mockup.webp',
];

$sachet_mockups = [
    'KOREAN GINSENG Black Honey sachet mockup 2.webp',
    'KOREAN GINSENG Black Honey sachet mockup 3.webp',
    'KOREAN GINSENG Black Honey sachet mockup 4.webp',
    'KOREAN GINSENG Black Honey sachet mockup 5.webp',
    'Prime-black-honey-sachet mockup.webp',
];
?>

<style>
    .main-v2-checkout .order-form .form-title,
    .main-v2-checkout .order-form .checkout-saving-note {
        color: #f0c75b !important;
        background: rgba(0, 0, 0, 0.70) !important;
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px);
    }

    .main-v2-checkout .order-form .checkout-wrapper {
        background: rgba(255, 255, 255, 0.16) !important;
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
    }

    .main-v2-checkout .order-form .checkout-product-selector,
    .main-v2-checkout .order-form .woocommerce-billing-fields,
    .main-v2-checkout .order-form .checkout-wrapper div#order_review {
        background: rgba(255, 255, 255, 0.28) !important;
    }

    .main-v2-checkout .order-form .checkout-product-selector label {
          background-: rgba(255, 255, 255, 0.78) !important; 
        color: #111111;
    }

    .main-v2-checkout .order-form .checkout-product-selector label:hover,
    .main-v2-checkout .order-form .checkout-product-selector label:has(input[type="radio"]:checked) {
        background: rgba(215, 169, 59, 0.28) !important;
    }

    /* .main-v2-checkout .order-form .checkout-product-selector label>span {
        color: #111111;
    } */

    .main-v2-checkout .order-form .checkout-wrapper table.shop_table.woocommerce-checkout-review-order-table {
        /* background: rgba(0, 0, 0, 0.5) !important;
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px); */
        background: transparent;
    }

    .main-v2-checkout .order-form .checkout-wrapper .shop_table td,
    .main-v2-checkout .order-form .checkout-wrapper .shop_table th,
    .main-v2-checkout .order-form .checkout-wrapper .shop_table td:last-child,
    .main-v2-checkout .order-form .checkout-wrapper .shop_table .product-total,
    .main-v2-checkout .order-form .checkout-wrapper .shop_table .order-total th,
    .main-v2-checkout .order-form .checkout-wrapper .shop_table .order-total td {
        /* color: #f0c75b !important;
        border-color: rgba(215, 168, 59, 0) !important; */
    }
</style>

<main class="min-h-screen font-['Hind_Siliguri'] text-black"
    style="background-image:linear-gradient(rgba(255,255,255,.91),rgba(255,255,255,.91)),url('<?php echo esc_url($brand_assets . 'image-removebg-preview.webp'); ?>');background-position:left;background-repeat:repeat-x;background-size:contain;background-attachment:fixed;">
    <header class="relative bg-black px-4 py-5 text-center text-[#d7a93b]">
        <p class="text-xl font-extrabold uppercase tracking-wide sm:text-3xl">Korean Ginseng Black Honey</p>
        <div class="absolute inset-x-0 -bottom-2 h-2 bg-[linear-gradient(135deg,#000_50%,transparent_50%),linear-gradient(225deg,#000_50%,transparent_50%)] bg-[length:16px_16px] bg-repeat-x" aria-hidden="true"></div>
    </header>

    <section class="relative isolate overflow-hidden py-10 sm:py-14">
        <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">
            <h1 class="inline-flex rounded-[32px] bg-black px-7 py-3 text-3xl font-black leading-tight text-[#d7a93b] shadow-xl sm:px-12 sm:text-5xl">প্রতিদিনের শক্তির জন্য প্রিমিয়াম ব্ল্যাক হানি</h1>
            <div class="mx-auto mt-5 max-w-3xl overflow-hidden rounded-2xl bg-white shadow-xl">
                <img src="<?php echo esc_url($mockup_assets . 'KOREAN GINSENG Black Honey mockup.webp'); ?>"
                    class="w-full object-cover" alt="Korean Ginseng Black Honey">
            </div>
            <p class="mx-auto mt-6 max-w-4xl text-2xl font-black leading-relaxed text-black sm:text-4xl">কোরিয়ান জিনসেং ও রিচ ব্ল্যাক হানির প্রিমিয়াম ব্লেন্ড</p>
            <p class="mx-auto mt-3 max-w-3xl text-lg font-bold leading-relaxed sm:text-2xl">ব্যস্ত জীবন, ক্লান্তি এবং দৈনন্দিন পারফর্মেন্সে হারবাল সাপোর্ট</p>
            <a href="#order" class="mt-7 inline-flex rounded-xl border-2 border-black bg-black px-10 py-4 text-xl font-extrabold text-[#d7a93b] shadow-lg transition hover:border-[#d7a93b] hover:bg-[#d7a93b] hover:text-black">এখনই অর্ডার করুন</a>
        </div>
    </section>

    <section class="bg-[#f3efe6] py-10 sm:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-9 text-center">
                <h2 class="text-3xl font-black text-black sm:text-5xl">আপনার দৈনন্দিন রুটিনে প্রিমিয়াম ব্ল্যাক হানি</h2>
                <p class="mx-auto mt-4 max-w-3xl text-lg font-semibold leading-relaxed">সহজে বহনযোগ্য স্টিক প্যাক—বাসা, কর্মক্ষেত্র অথবা ভ্রমণে আপনার রুটিনের সঙ্গে সহজেই মানিয়ে যায়।</p>
            </div>
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($lifestyle_images as $image) : ?>
                    <figure class="overflow-hidden rounded-2xl bg-white shadow-lg">
                        <img src="<?php echo esc_url($brand_assets . $image); ?>" class="aspect-[3/4] h-full w-full object-cover"
                            alt="Korean Ginseng Black Honey lifestyle" loading="lazy">
                    </figure>
                <?php endforeach; ?>
            </div>
            <div class="mt-10 text-center">
                <a href="#order" class="inline-flex rounded-xl bg-black px-10 py-4 text-xl font-extrabold text-[#d7a93b] shadow-lg transition hover:bg-[#d7a93b] hover:text-black">এখনই অর্ডার করুন</a>
            </div>
        </div>
    </section>

    <section class="bg-black py-12 text-white">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="text-3xl font-black sm:text-5xl">কেন Korean Ginseng Black Honey?</h2>
            <div class="mt-8 grid gap-5 md:grid-cols-3">
                <article class="rounded-2xl border border-[#d7a93b]/40 bg-[#161616] p-7 text-[#d7a93b] shadow-xl">
                    <span class="text-4xl">◆</span>
                    <h3 class="mt-3 text-2xl font-black">কোরিয়ান জিনসেং ব্লেন্ড</h3>
                    <p class="mt-3 font-semibold leading-relaxed text-white">বাছাই করা কোরিয়ান জিনসেং দিয়ে তৈরি একটি প্রিমিয়াম হারবাল ব্লেন্ড।</p>
                </article>
                <article class="rounded-2xl border border-[#d7a93b]/40 bg-[#161616] p-7 text-[#d7a93b] shadow-xl">
                    <span class="text-4xl">◆</span>
                    <h3 class="mt-3 text-2xl font-black">রিচ ব্ল্যাক হানি</h3>
                    <p class="mt-3 font-semibold leading-relaxed text-white">ব্ল্যাক হানির সমৃদ্ধ স্বাদ ও জিনসেংয়ের অনন্য সমন্বয়।</p>
                </article>
                <article class="rounded-2xl border border-[#d7a93b]/40 bg-[#161616] p-7 text-[#d7a93b] shadow-xl">
                    <span class="text-4xl">◆</span>
                    <h3 class="mt-3 text-2xl font-black">সহজ স্টিক প্যাক</h3>
                    <p class="mt-3 font-semibold leading-relaxed text-white">ঝামেলাহীন প্যাকেজিং, সঙ্গে রাখা এবং ব্যবহার করা সহজ।</p>
                </article>
            </div>
        </div>
    </section>

    <section class="py-12 sm:py-16">
        <div class="mx-auto grid max-w-7xl items-center gap-8 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="rounded-full bg-black px-6 py-3 text-center text-3xl font-black text-[#d7a93b] sm:text-4xl">প্রিমিয়াম হারবাল রুটিন</h2>
                <ul class="mt-7 space-y-4 text-xl font-bold sm:text-2xl">
                    <li class="flex gap-3"><span class="text-[#d7a93b]">✓</span> দৈনন্দিন এনার্জি ও ফ্রেশনেসে সহায়ক</li>
                    <li class="flex gap-3"><span class="text-[#d7a93b]">✓</span> ব্যস্ত জীবনযাত্রায় হারবাল সাপোর্ট</li>
                    <li class="flex gap-3"><span class="text-[#d7a93b]">✓</span> আত্মবিশ্বাস ও সক্রিয়তায় সহায়ক</li>
                    <li class="flex gap-3"><span class="text-[#d7a93b]">✓</span> সমৃদ্ধ ব্ল্যাক হানির স্বাদ</li>
                    <li class="flex gap-3"><span class="text-[#d7a93b]">✓</span> বহন ও ব্যবহার করা সহজ</li>
                </ul>
                <a href="#order" class="mt-8 inline-flex rounded-xl bg-black px-10 py-4 text-xl font-extrabold text-[#d7a93b] shadow-lg">এখনই অর্ডার করুন</a>
            </div>
            <img src="<?php echo esc_url($mockup_assets . 'KOREAN GINSENG Black Honey mockup.webp'); ?>"
                class="mx-auto w-full rounded-2xl shadow-xl" alt="Korean Ginseng Black Honey box" loading="lazy">
        </div>
    </section>

    <section class="bg-black py-10 text-center text-white">
        <div class="mx-auto max-w-7xl px-4">
            <div class="grid gap-5 md:grid-cols-3">
                <?php foreach ($usage_images as $image) : ?>
                    <img src="<?php echo esc_url($brand_assets . $image); ?>"
                        class="aspect-[3/4] h-full w-full rounded-2xl object-cover shadow-xl" alt="Black Honey usage" loading="lazy">
                <?php endforeach; ?>
            </div>
            <h2 class="mt-8 text-2xl font-black sm:text-4xl">সারাদেশে ক্যাশ অন ডেলিভারি</h2>
            <p class="mt-3 text-xl font-bold sm:text-3xl">প্রোডাক্ট হাতে পেয়ে দেখে পেমেন্ট করুন</p>
        </div>
    </section>

    <section id="order" class="main-v2-checkout py-12 sm:py-16"
        style="<?php echo esc_attr(fastest_checkout_palette_style($checkout_colors)); ?>">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <?php the_content(); ?>
        </div>
    </section>

    <section class="bg-[#f3efe6] py-12 sm:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-black text-black sm:text-5xl">প্রিমিয়াম প্যাকেজিং</h2>
            <p class="mx-auto mt-4 max-w-3xl text-center text-lg font-semibold">অর্ডারের আগে বক্স এবং প্যাকেজিংয়ের বিস্তারিত ভিজ্যুয়াল দেখে নিন।</p>
            <div class="mt-8 grid gap-5 sm:grid-cols-2">
                <?php foreach ($box_mockups as $image) : ?>
                    <figure class="overflow-hidden rounded-2xl bg-white shadow-lg">
                        <img src="<?php echo esc_url($mockup_assets . $image); ?>" class="aspect-video h-full w-full object-cover"
                            alt="Korean Ginseng Black Honey packaging" loading="lazy">
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-black py-12 text-white sm:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-black sm:text-5xl">সহজে বহনযোগ্য স্টিক প্যাক</h2>
            <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($sachet_mockups as $image) : ?>
                    <figure class="overflow-hidden rounded-2xl bg-white shadow-xl">
                        <img src="<?php echo esc_url($mockup_assets . $image); ?>" class="aspect-video h-full w-full object-contain"
                            alt="Korean Ginseng Black Honey stick pack" loading="lazy">
                    </figure>
                <?php endforeach; ?>
            </div>
            <div class="mt-10 text-center">
                <a href="#order" class="inline-flex rounded-xl bg-[#d7a93b] px-10 py-4 text-xl font-extrabold text-black shadow-lg">এখনই অর্ডার করুন</a>
            </div>
        </div>
    </section>

    <section class="py-12 sm:py-16">
        <div class="mx-auto grid max-w-7xl gap-6 px-4 sm:px-6 lg:grid-cols-3 lg:px-8">
            <article class="rounded-2xl bg-black p-7 text-white shadow-lg">
                <h2 class="text-3xl font-black">কিভাবে ব্যবহার করবেন?</h2>
                <p class="mt-5 text-lg font-semibold leading-relaxed">স্টিক প্যাক খুলে সরাসরি গ্রহণ করুন অথবা গরম পানি কিংবা দুধের সঙ্গে মিশিয়ে নিন। প্যাকেটের নির্দেশনা অনুসরণ করুন।</p>
            </article>
            <article class="rounded-2xl bg-black p-7 text-white shadow-lg">
                <h2 class="text-3xl font-black">মূল উপাদান</h2>
                <p class="mt-5 text-lg font-semibold leading-relaxed">কোরিয়ান জিনসেং, ব্ল্যাক হানি এবং বাছাই করা হারবাল উপাদানের প্রিমিয়াম সমন্বয়।</p>
            </article>
            <article class="rounded-2xl bg-black p-7 text-white shadow-lg">
                <h2 class="text-3xl font-black">গুরুত্বপূর্ণ নির্দেশনা</h2>
                <p class="mt-5 text-lg font-semibold leading-relaxed">শুধুমাত্র প্রাপ্তবয়স্কদের জন্য। প্যাকেটের ব্যবহারবিধি অনুসরণ করুন এবং প্রয়োজন হলে বিশেষজ্ঞের পরামর্শ নিন।</p>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>
