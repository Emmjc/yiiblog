<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
    'About',
);
?>

<!-- About Blogging Section -->
<div class="relative bg-white">
    <div class="absolute inset-0 skew-y-1 bg-primary"></div>
    <div class="relative container mx-auto space-y-16 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-7xl">

        <!-- Heading -->
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-white md:text-4xl">
                About Blogging
            </h2>
        </div>
        <!-- END Heading -->

        <!-- Blog Features -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3">
            
            <!-- Why Blogging is Fascinating -->
            <div class="rounded-3xl bg-white/5 p-10 shadow-xs transition hover:bg-white/10">
                <svg class="hi-solid hi-pencil mb-5 inline-block h-12 w-12 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                </svg>
                <h4 class="mb-2 text-lg font-bold text-white">Why Blogging is Fascinating</h4>
                <p class="text-sm leading-relaxed text-white/75">
                    Blogging is more than just writing; it’s a creative journey. It allows individuals to share knowledge, express thoughts, and engage with a like-minded audience worldwide.
                </p>
            </div>

            <!-- Importance of Blogging -->
            <div class="rounded-3xl bg-white/5 p-10 shadow-xs transition hover:bg-white/10">
                <svg class="hi-outline hi-cube mb-5 inline-block h-12 w-12 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
                <h4 class="mb-2 text-lg font-bold text-white">The Importance of Blogging</h4>
                <ul class="text-sm leading-relaxed text-white/75 space-y-2">
                    <li>📚 <span class="font-semibold">Knowledge Sharing:</span> Document experiences and insights.</li>
                    <li>🌟 <span class="font-semibold">Personal Branding:</span> Showcase expertise and build credibility.</li>
                    <li>🤝 <span class="font-semibold">Networking & Opportunities:</span> Attract job offers, partnerships, and collaborations.</li>
                    <li>🔍 <span class="font-semibold">SEO & Online Presence:</span> Establish an authoritative online presence.</li>
                </ul>
            </div>

            <!-- Blogging as a Side Project -->
            <div class="rounded-3xl bg-white/5 p-10 shadow-xs transition hover:bg-white/10 sm:col-span-2 lg:col-span-1">
                <svg class="hi-solid hi-desktop-computer mb-5 inline-block h-12 w-12 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd"/>
                </svg>
                <h4 class="mb-2 text-lg font-bold text-white">Blogging as a Side Project</h4>
                <p class="text-sm leading-relaxed text-white/75">
                    Blogging is flexible—it can be a side project that enhances skills, documents learning, and even generates income.
                </p>
                <ul class="text-sm leading-relaxed text-white/75 space-y-2 mt-3">
                    <li>✍️ Enhance writing and critical thinking skills.</li>
                    <li>📖 Document personal and professional growth.</li>
                    <li>💰 Monetize content for passive income.</li>
                    <li>🌍 Connect with a broader audience.</li>
                </ul>
            </div>

        </div>
        <!-- END Blog Features -->

    </div>
</div>
<!-- END About Blogging Section -->
