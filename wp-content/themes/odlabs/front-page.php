<?php get_header(); ?>

<section
    id="about"
    class="group bg-brand-yellow relative scroll-mt-20 bg-[url(./wp-content/themes/odlabs/assets/images/aboutCompany.svg)] bg-cover bg-center bg-no-repeat px-6 py-12 sm:py-16"
>
    <div class="container mx-auto max-w-4xl">
        <!-- Section Label -->
        <p class="text-xl font-semibold text-black uppercase">ABOUT OUR COMPANY</p>

        <!-- Main Title -->
        <div class="mt-4 flex items-center gap-2">
            <img class="hi" src="./wp-content/themes/odlabs/assets/images/OD-LABS-logo-1.svg" alt="OD LABS Logo" width="316" height="96" />
        </div>

        <h4 class="text-brand-red text-xl font-semibold">Omkar & Devashish LABS</h4>

        <!-- Description -->
        <p class="mt-6 text-lg leading-relaxed font-medium text-gray-800 sm:text-xl">
            Welcome to OD LABS—a forward-thinking digital solutions provider located in Mumbai, India. We blend
            cutting-edge marketing strategies, WordPress excellence, and cloud-based IT management to empower your
            business with scalable, secure, and high-performing digital infrastructure.
        </p>

        <!-- Optional Bullet List of Goals -->
        <div class="mt-10">
            <a
                href="#services"
                class="inline-flex items-center gap-2 rounded-full bg-black px-5 py-2.5 text-lg font-medium text-white transition hover:bg-gray-900"
            >
                Learn more
                <i class="bi bi-arrow-right text-white"></i>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
