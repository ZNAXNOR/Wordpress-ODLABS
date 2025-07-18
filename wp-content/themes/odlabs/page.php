<?php get_header(); ?>

<main class="container mx-auto px-4 py-8 max-w-4xl">
    <h1 class="text-xl font-semibold text-black uppercase"><?php the_title(); ?></h1>
    <div class="relative isolate mx-auto max-w-7xl overflow-hidden px-6 py-16 sm:px-12 sm:py-24"><?php the_content(); ?></div>
</main>

<?php get_footer(); ?>
