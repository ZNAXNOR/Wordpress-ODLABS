<!doctype html>
<html>
    <!-- Head -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php wp_head(); ?>
    </head>

    <body>
    <!-- Top Navbar -->
    <header class="bg-black sticky top-0 z-50">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <!-- Mobile: Hamburger + Logo -->
            <div class="flex items-center gap-2 lg:hidden">
                <!-- Hamburger Menu (left on mobile) -->
                <button
                    type="button"
                    aria-label="Open main menu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                >
                    <span class="sr-only">Open main menu</span>
                    <i class="bi bi-list text-3xl text-white"></i>
                </button>
                <!-- Logo (right next to hamburger on mobile) -->
                <a href="<?php echo esc_url(
                    site_url()
                ); ?>" class="-m-1.5 p-1.5">
                    <span class="sr-only">OD LABS</span>
                    <img src="./wp-content/themes/odlabs/assets/images/OD-LABS-logo-2.svg" alt="OD LABS" width="158" height="48" />
                </a>
            </div>

            <!-- Company Logo (hidden on mobile, visible on lg+) -->
            <div class="hidden lg:flex lg:flex-1">
                <a href="<?php echo esc_url(
                    site_url()
                ); ?>" class="-m-1.5 p-1.5">
                    <span class="sr-only">OD LABS</span>
                    <img src="./wp-content/themes/odlabs/assets/images/OD-LABS-logo-2.svg" alt="OD LABS" width="158" height="48" />
                </a>
            </div>

            <!-- Nav Menu -->
            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative">
                    <button
                        type="button"
                        class="flex cursor-pointer items-center gap-x-1 text-sm/6 font-semibold text-white"
                        aria-expanded="false"
                    >
                        Services
                        <i class="bi bi-caret-down-fill ms-0.5"></i>
                    </button>
                    <div
                        class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 overflow-hidden rounded-3xl bg-black shadow-lg ring-1 ring-white"
                    >
                        <div class="p-4">
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                            >
                                <div
                                    class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                >
                                    <svg
                                        class="group-hover:text-brand-red size-6 text-white"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z"
                                        />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="/#data-analytics" class="block font-semibold text-white">
                                        Data & Analytics
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-300">Get a better understanding of your traffic</p>
                                </div>
                            </div>

                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                            >
                                <div
                                    class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                >
                                    <svg
                                        class="group-hover:text-brand-red size-6 text-white"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59"
                                        />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="/#earned-media" class="block font-semibold text-white">
                                        Earned Media
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-200">Speak directly to your customers</p>
                                </div>
                            </div>

                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                            >
                                <div
                                    class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                >
                                    <svg
                                        class="group-hover:text-brand-red size-6 text-white"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33"
                                        />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="/#paid-media" class="block font-semibold text-white">
                                        Paid Media
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-200">Your customers’ data will be safe and secure</p>
                                </div>
                            </div>

                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                            >
                                <div
                                    class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                >
                                    <svg
                                        class="group-hover:text-brand-red size-6 text-white"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                                        />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="/#creative" class="block font-semibold text-white">
                                        Creative
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-200">Connect with third-party tools</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 divide-x divide-white border-t border-white">
                            <a
                                href="privacy-policy.html"
                                class="group flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold text-white transition hover:bg-gray-800/70"
                            >
                                <svg
                                    class="group-hover:text-brand-red size-5 text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 -960 960 960"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-75 29-147t81-128.5q52-56.5 125-91T475-881q21 0 43 2t45 7q-9 45 6 85t45 66.5q30 26.5 71.5 36.5t85.5-5q-26 59 7.5 113t99.5 56q1 11 1.5 20.5t.5 20.5q0 82-31.5 154.5t-85.5 127q-54 54.5-127 86T480-80Zm-60-480q25 0 42.5-17.5T480-620q0-25-17.5-42.5T420-680q-25 0-42.5 17.5T360-620q0 25 17.5 42.5T420-560Zm-80 200q25 0 42.5-17.5T400-420q0-25-17.5-42.5T340-480q-25 0-42.5 17.5T280-420q0 25 17.5 42.5T340-360Zm260 40q17 0 28.5-11.5T640-360q0-17-11.5-28.5T600-400q-17 0-28.5 11.5T560-360q0 17 11.5 28.5T600-320ZM480-160q122 0 216.5-84T800-458q-50-22-78.5-60T683-603q-77-11-132-66t-68-132q-80-2-140.5 29t-101 79.5Q201-644 180.5-587T160-480q0 133 93.5 226.5T480-160Zm0-324Z"
                                    />
                                </svg>
                                Privacy Policy
                            </a>
                            <a
                                href="terms-and-conditions.html"
                                class="group flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold text-white transition hover:bg-gray-800/70"
                            >
                                <svg
                                    class="group-hover:text-brand-red size-5 text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 -960 960 960"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M240-80q-50 0-85-35t-35-85v-120h120v-560h600v680q0 50-35 85t-85 35H240Zm480-80q17 0 28.5-11.5T760-200v-600H320v480h360v120q0 17 11.5 28.5T720-160ZM360-600v-80h360v80H360Zm0 120v-80h360v80H360ZM240-160h360v-80H200v40q0 17 11.5 28.5T240-160Zm0 0h-40 400-360Z"
                                    />
                                </svg>
                                Terms & Conditions
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <a href="/#who-can-use-our-services" class="text-sm/6 font-semibold text-white">Who Can Use Our Services</a> -->
                <!-- <a href="/#goals" class="text-sm/6 font-semibold text-white">Our Goals</a> -->
                <!-- <a href="/#testimonies" class="text-sm/6 font-semibold text-white">Testimonials</a> -->
                <!-- <a href="/#contact" class="text-sm/6 font-semibold text-white">Contact Us</a> -->

                <?php wp_nav_menu([
                    "theme_location" => "primary-menu",
                    "menu_class" =>
                        "text-sm/6 font-semibold text-white hidden lg:flex lg:gap-x-12",
                    "container" => false,
                ]); ?>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>

        <!-- Mobile menu, show/hide based on menu open state. Dont touch the errors, as the intended code breaks-->
        <div
            class="fixed inset-0 z-50 flex hidden min-h-screen flex-col bg-black sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 lg:hidden"
            role="dialog"
            aria-modal="true"
        >
            <!-- Header -->
            <div class="flex items-center gap-2 p-6">
                <!-- Close menu button (far left) -->
                <button type="button" aria-label="Close menu" class="-m-2.5 rounded-md p-2.5 text-white">
                    <span class="sr-only">Close menu</span>
                    <svg
                        class="size-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        data-slot="icon"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
                <!-- Logo (right next to cross) -->                
                    <a href="<?php echo esc_url(
                        site_url()
                    ); ?>" class="-m-1.5 p-1.5">
                    <span class="sr-only">OD LABS</span>
                    <img src="./wp-content/themes/odlabs/assets/images/OD-LABS-logo-2.svg" alt="OD LABS" width="158" height="48" />
                </a>
            </div>

            <!-- Content (scrollable if long) -->
            <div class="flex-1 overflow-y-auto px-6">
                <div class="-my-6">
                    <div class="space-y-2 py-6">
                        <div class="-mx-3">
                            <button
                                type="button"
                                class="hover:bg-brand-red flex w-full cursor-pointer items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-white"
                                aria-controls="products"
                                aria-expanded="false"
                            >
                                Services
                                <i class="bi bi-caret-down-fill ms-0.5 flex-none"></i>
                            </button>
                            <div class="mt-2 space-y-2" id="products">
                                <!-- Data & Analytics -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                                >
                                    <div
                                        class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                    >
                                        <svg
                                            class="group-hover:text-brand-red size-6 text-white"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            data-slot="icon"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z"
                                            />
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z"
                                            />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/#data-analytics" class="block font-semibold text-white">
                                            Data & Analytics
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-300">Get a better understanding of your traffic</p>
                                    </div>
                                </div>

                                <!-- Earned Media -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                                >
                                    <div
                                        class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                    >
                                        <svg
                                            class="group-hover:text-brand-red size-6 text-white"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            data-slot="icon"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59"
                                            />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/#earned-media" class="block font-semibold text-white">
                                            Earned Media
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-200">Speak directly to your customers</p>
                                    </div>
                                </div>

                                <!-- Paid Media -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                                >
                                    <div
                                        class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                    >
                                        <svg
                                            class="group-hover:text-brand-red size-6 text-white"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            data-slot="icon"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33"
                                            />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/#paid-media" class="block font-semibold text-white">
                                            Paid Media
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-200">Your customers’ data will be safe and secure</p>
                                    </div>
                                </div>

                                <!-- Creative -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-800/30"
                                >
                                    <div
                                        class="ring-brand-red flex size-11 flex-none items-center justify-center rounded-lg bg-black ring-2 hover:bg-white"
                                    >
                                        <svg
                                            class="group-hover:text-brand-red size-6 text-white"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            data-slot="icon"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                                            />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/#creative" class="block font-semibold text-white">
                                            Creative
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-200">Connect with third-party tools</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="-mx-3 border-t border-gray-200/10 py-6">                            
                            <?php wp_nav_menu([
                                "theme_location" => "primary-menu",
                                "menu_class" =>
                                    "text-base/7 font-semibold text-white -mx-3 border-t border-gray-200/10 py-8",
                                "items_class" =>
                                    "hover:bg-brand-red block rounded-lg px-3 py-2",
                                "container" => false,
                            ]); ?>
                            <a
                                href="/#who-can-use-our-services"
                                class=""
                                >Who Can Use Our Services</a
                            >
                            <a
                                href="/#goals"
                                class="hover:bg-brand-red block rounded-lg px-3 py-2 text-base/7 font-semibold text-white"
                                >Our Goals</a
                            >
                            <a
                                href="/#testimonies"
                                class="hover:bg-brand-red block rounded-lg px-3 py-2 text-base/7 font-semibold text-white"
                                >Testimonials</a
                            >
                            <a
                                href="/#contact"
                                class="hover:bg-brand-red block rounded-lg px-3 py-2 text-base/7 font-semibold text-white"
                                >Contact Us</a
                            >
                        </div>
                        <div class="-mx-3 border-t border-gray-200/10 py-6">
                            <a
                                href="#"
                                class="hover:bg-brand-red block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white"
                                >Log in</a
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Bottom Buttons -->
            <div class="sticky bottom-0 left-0 w-full border-t border-gray-800 bg-black">
                <div class="grid grid-cols-2 divide-x divide-white">
                    <a
                        href="privacy-policy.html"
                        class="group flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold text-white transition hover:bg-gray-800/70"
                    >
                        <svg
                            class="group-hover:text-brand-red size-5 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -960 960 960"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-75 29-147t81-128.5q52-56.5 125-91T475-881q21 0 43 2t45 7q-9 45 6 85t45 66.5q30 26.5 71.5 36.5t85.5-5q-26 59 7.5 113t99.5 56q1 11 1.5 20.5t.5 20.5q0 82-31.5 154.5t-85.5 127q-54 54.5-127 86T480-80Zm-60-480q25 0 42.5-17.5T480-620q0-25-17.5-42.5T420-680q-25 0-42.5 17.5T360-620q0 25 17.5 42.5T420-560Zm-80 200q25 0 42.5-17.5T400-420q0-25-17.5-42.5T340-480q-25 0-42.5 17.5T280-420q0 25 17.5 42.5T340-360Zm260 40q17 0 28.5-11.5T640-360q0-17-11.5-28.5T600-400q-17 0-28.5 11.5T560-360q0 17 11.5 28.5T600-320ZM480-160q122 0 216.5-84T800-458q-50-22-78.5-60T683-603q-77-11-132-66t-68-132q-80-2-140.5 29t-101 79.5Q201-644 180.5-587T160-480q0 133 93.5 226.5T480-160Zm0-324Z"
                            />
                        </svg>
                        Privacy Policy
                    </a>
                    <a
                        href="terms-and-conditions.html"
                        class="group flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold text-white transition hover:bg-gray-800/70"
                    >
                        <svg
                            class="group-hover:text-brand-red size-5 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -960 960 960"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                d="M240-80q-50 0-85-35t-35-85v-120h120v-560h600v680q0 50-35 85t-85 35H240Zm480-80q17 0 28.5-11.5T760-200v-600H320v480h360v120q0 17 11.5 28.5T720-160ZM360-600v-80h360v80H360Zm0 120v-80h360v80H360ZM240-160h360v-80H200v40q0 17 11.5 28.5T240-160Zm0 0h-40 400-360Z"
                            />
                        </svg>
                        Terms & Conditions
                    </a>
                </div>
            </div>
        </div>
    </header>