<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Creedz &copy;</title>
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .tilted-image {
            transform: rotate(-15deg);
        }

        .rotating {
            animation: rotate 20s infinite linear;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* Menambahkan animasi bergelombang */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            75% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .scroll-to-top {
            transition: background-color 0.3s, transform 0.3s;
        }

        .scroll-to-top:hover {
            background-color: #f60101;
            transform: scale(1.1);
        }
    </style>
</head>

<body class="bg-black text-white font-sans">
    {{-- Button Scroll --}}
    <a href="#top"
        class="fixed bottom-10 right-10 bg-red-700 hover:bg-white hover:text-black text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg scroll-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
        </svg>
    </a>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    <section class="text-center py-20">
        <div class="container mx-auto">
            <button
                class="px-4 py-2 mb-4 text-xs border border-gray-500 rounded-full text-gray-300 hover:text-white hover:border-white">
                Subscription. Pause or cancel anytime
            </button>
            <h1 class="text-5xl font-bold text-white mb-2">All-in-one solution</h1>
            <h1 class="text-5xl font-bold text-gray-300">Unlimited design & development</h1>
        </div>
    </section>

    {{-- Image --}}
    <div class="flex items-center justify-center">
        <img src="/img/head.png" class="rounded-3xl w-11/12 h-96">
    </div>

    {{-- Process --}}
    <div class="flex justify-center items-center py-10 mt-12 px-8" id="Process">
        <!-- Step 1 -->
        <div class="space-y-4 text-start mx-4">
            <div class="flex justify-start">
                <div class="bg-white text-black rounded-full p-2 px-4">
                    <span class="font-bold">Step 1</span>
                </div>
            </div>
            <h2 class="text-xl font-bold">Set your Preferences</h2>
            <p class="text-gray-400 text-xs">Share your vision for design, development, or marketing. Outline your style
                and
                goals to tailor our services to your needs.</p>
        </div>

        <!-- Step 2 -->
        <div class="space-y-4 text-start mx-4">
            <div class="flex justify-start">
                <div class="bg-white text-black rounded-full p-2 px-4">
                    <span class="font-bold">Step 2</span>
                </div>
            </div>
            <h2 class="text-xl font-bold">Let us do the work</h2>
            <p class="text-gray-400 text-xs">Sit back and relax while we transform your preferences into creative,
                impactful
                solutions designed for you.</p>
        </div>

        <!-- Step 3 -->
        <div class="space-y-4 text-start mx-4">
            <div class="flex justify-start">
                <div class="bg-white text-black rounded-full p-2 px-4">
                    <span class="font-bold">Step 3</span>
                </div>
            </div>
            <h2 class="text-xl font-bold">Review and be happy</h2>
            <p class="text-gray-400 text-xs">Review the results and let us know your thoughts. We're committed to
                perfecting the
                details to meet your standards.</p>
        </div>
    </div>
    <div class="container mx-auto px-12 text-center items-center justify-center">
        <div class="flex items-center border-gray-600 justify-center">
            <h2 class="text-2xl font-bold">Tools we use</h2>
            <div class="flex-grow border-t border-gray-600 mx-4 w-1/2"></div>
        </div>
        <div class="flex justify-between mt-5">
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center">
                    <span class="text-black font-bold">⚙️</span>
                </div>
                <p class="text-sm font-bold">Flexible payments</p>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center">
                    <span class="text-black font-bold">⚙️</span>
                </div>
                <p class="text-sm font-bold">Trello or Jira for tasks</p>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center">
                    <span class="text-black font-bold">⚙️</span>
                </div>
                <p class="text-sm font-bold">Slack or Telegram for chat</p>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center">
                    <span class="text-black font-bold">⚙️</span>
                </div>
                <p class="text-sm font-bold">Designed in Adobe CC and Figma</p>
            </div>
        </div>
    </div>

    {{-- Services --}}
    <div class="container mx-auto px-8 py-20" id="Services">
        <div class="text-center mb-20">
            <h1 class="text-4xl font-bold mb-4">Our Services</h1>
            <p class="text-sm max-w-4xl mx-auto">
                At Creedz, we’re here to bring your brand to life. Whether you need eye-catching graphics, a responsive
                website or effective marketing strategies.
                Our goal is to exceed your expectations and turn your vision into reality with creativity and expertise.
            </p>
        </div>
        <div class="space-y-24 px-4">
            <!-- Design Section -->
            <div class="flex">
                <div class="pr-14">
                    <h2 class="text-2xl font-bold mb-5">01 Design</h2>
                    <div class="flex flex-wrap gap-4">
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Graphic Design</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">UI/UX</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Banners</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">3D Design</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Application</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Branding</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Logo Design</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Product Design</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Printing Files</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Presentations</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Social Media Design</span>
                    </div>
                    <hr class="mt-10">
                </div>

                <!-- Development Section -->
                <div>
                    <h2 class="text-2xl font-bold mb-5">02 Development</h2>
                    <div class="flex flex-wrap gap-4">
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Webflow & Tilda</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Wordpress & Shopify</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">React JS & React Native</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">iOS + Android App</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Vue JS</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Angular JS</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Laravel, Yii2 etc</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">MySql, PostgreSql etc</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Data Architecture</span>
                    </div>
                    <hr class="mt-10">
                </div>
            </div>

            <!-- Animation Section -->
            <div class="flex">
                <div class="pr-14">
                    <h2 class="text-2xl font-bold mb-5">03 Animation</h2>
                    <div class="flex flex-wrap gap-4">
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">2D Animation</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">3D Animation</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Video Editing</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Visual Effects</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Motion Graphics</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Logo Animation</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Character Animation</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Intro/Outro</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Animation Consultation</span>
                    </div>
                    <hr class="mt-10">
                </div>

                <!-- Marketing Section -->
                <div>
                    <h2 class="text-2xl font-bold mb-5">04 Marketing</h2>
                    <div class="flex flex-wrap gap-4">
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Strategies</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Audit</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Content Marketing</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">SM Marketing</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Analytics</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Researching</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Consulting</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">PPC Advertising</span>
                        <span class="border borger-grey-500 py-2 px-6 rounded-full">Target Customers</span>
                    </div>
                    <hr class="mt-10">
                </div>
            </div>
        </div>
    </div>

    {{-- Portofolio --}}
    <div class="bg-black text-black font-sans pt-12" id="Portfolio">
        <div class="min-h-screen flex flex-col items-center p-8">
            <div class="w-full max-w-6xl bg-white p-8 rounded-xl">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="mb-8 lg:mb-0 lg:w-1/2">
                        <h1 class="text-4xl font-bold mb-4">Creedz</h1>
                        <p class="text-sm leading-6">
                            Creedz, a design and development agency, transforms ideas into stunning digital experiences.
                            The talented team creates sleek websites and powerful apps with meticulous attention to
                            detail.
                            Known for capturing the essence of brands, has earned a reputation for quality and
                            creativity.
                            Today, they continue to innovate and push the boundaries of design and development.
                        </p>
                        <div class="mt-4 mb-12 flex space-x-2">
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Website</span>
                            <span
                                class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Development</span>
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Branding</span>
                        </div>
                        <a href="https://creedz.net/usecases/creedz"
                            class="px-6 py-3 bg-black text-white rounded-full hover:bg-red-700">View Project</a>
                    </div>
                    <!-- Right Image Carousel -->
                    <div class="lg:w-1/2">
                        <div class="relative">
                            <video class="w-full h-auto rounded-2xl " autoplay muted loop>
                                <source src="/img/video3.webm" type="video/webm" />
                            </video>
                        </div>
                    </div>
                </div>
                <!-- Thumbnails Section -->
                <div class="mt-8 grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <img src="/img/img1.webp" alt="Image 1" class="rounded-lg shadow-lg">
                    <video alt="Image 2" class="rounded-lg shadow-lg" autoplay muted loop>
                        <source src="/img/video4.webm" type="video/webm" />
                    </video>
                    <img src="/img/img20.webp" alt="Image 3" class="rounded-lg shadow-lg">
                    <img src="/img/img3.webp" alt="Image 4" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="bg-black text-black font-sans pt-12">
        <div class="min-h-screen flex flex-col items-center p-8">
            <div class="w-full max-w-6xl bg-white p-8 rounded-xl">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="mb-8 lg:mb-0 lg:w-1/2">
                        <h1 class="text-4xl font-bold mb-4">Apple x Nike</h1>
                        <p class="text-sm leading-6">
                            This project embarked on a comprehensive exploration of the integration between Apple's
                            sleek design ethos and Nike's dynamic, performance-driven branding. Understanding the unique
                            strengths and target audiences of both Apple and Nike informed our approach.
                        </p>
                        <div class="mt-4 flex space-x-2">
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">3D Design</span>
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Character
                                design</span>
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Ai</span>
                        </div>
                        <button class="mt-6 px-6 py-3 bg-black text-white rounded-full">View Project</button>
                    </div>
                    <!-- Right Image Carousel -->
                    <div class="lg:w-1/2">
                        <div class="relative">
                            <img src="/img/img2.webp" class="w-full h-auto rounded-2xl">
                        </div>
                    </div>
                </div>
                <!-- Thumbnails Section -->
                <div class="mt-8 grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <img src="/img/img4.webp" class="rounded-lg shadow-lg">
                    <img src="/img/img11.webp" class="rounded-lg shadow-lg">
                    <img src="/img/img8.webp" class="rounded-lg shadow-lg">
                    <img src="/img/img13.webp" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black text-black font-sans pt-12">
        <div class="min-h-screen flex flex-col items-center p-8">
            <div class="w-full max-w-6xl bg-white p-8 rounded-xl">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="mb-8 lg:mb-0 lg:w-1/2">
                        <h1 class="text-4xl font-bold mb-4">Skrex</h1>
                        <p class="text-sm leading-6">
                            The Skrex branding journey began with an in-depth exploration of the company's ethos,
                            values, and aspirations. Extensive market research and competitor analysis provided valuable
                            insights into the ever-evolving world of blockchain technology and decentralized solutions.
                        </p>
                        <div class="mt-4 flex space-x-2">
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Branding</span>
                            <span
                                class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Illustration</span>
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Crypto</span>
                        </div>
                        <button class="mt-6 px-6 py-3 bg-black text-white rounded-full">View Project</button>
                    </div>
                    <!-- Right Image Carousel -->
                    <div class="lg:w-1/2">
                        <div class="relative">
                            <video class="w-full h-auto rounded-2xl " autoplay muted loop>
                                <source src="/img/video2.webm" type="video/webm" />
                            </video>
                        </div>
                    </div>
                </div>
                <!-- Thumbnails Section -->
                <div class="mt-8 grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <img src="/img/img5.webp" alt="Image 1" class="rounded-lg shadow-lg">
                    <img src="/img/img6.webp" alt="Image 1" class="rounded-lg shadow-lg">
                    <img src="/img/img7.webp" alt="Image 3" class="rounded-lg shadow-lg">
                    <img src="/img/img9.webp" alt="Image 4" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black text-black font-sans pt-12">
        <div class="min-h-screen flex flex-col items-center p-8">
            <div class="w-full max-w-6xl bg-white p-8 rounded-xl">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="mb-8 lg:mb-0 lg:w-1/2">
                        <h1 class="text-4xl font-bold mb-4">Cadence</h1>
                        <p class="text-sm leading-6">
                            In a bustling city known for innovation, Cadence Marketing was born in a cozy loft
                            overlooking the skyline. Here, a team of creative minds huddled together, brainstorming
                            strategies that resonated with precision. They crafted campaigns like composers, each note
                            resonating with a client's unique voice.
                        </p>
                        <div class="mt-4 flex space-x-2">
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Branding</span>
                            <span class="text-gray-800 px-4 py-2 border border-gray-500 rounded-full">Social media
                                post</span>
                        </div>
                        <button class="mt-6 px-6 py-3 bg-black text-white rounded-full">View Project</button>
                    </div>
                    <!-- Right Image Carousel -->
                    <div class="lg:w-1/2">
                        <div class="relative">
                            <img src="/img/img14.webp" class="w-full h-auto rounded-2xl">
                        </div>
                    </div>
                </div>
                <!-- Thumbnails Section -->
                <div class="mt-8 grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <img src="/img/img15.webp" class="rounded-lg shadow-lg">
                    <img src="/img/img16.webp" class="rounded-lg shadow-lg">
                    <img src="/img/img17.webp" class="rounded-lg shadow-lg">
                    <img src="/img/img18.webp" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Benefits --}}
    <div class="container mx-auto pb-40 " id="Benefits">
        <h1 class="text-center text-4xl font-semibold mb-12 pt-44">What Makes us Different</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 px-12">
            <!-- Box 1 -->
            <div class="border p-6 flex flex-col items-start text-start">
                <div class="bg-white rounded-full p-3 mb-4">
                    <div class="bg-black h-8 w-8 flex items-center justify-center rounded-full">
                        <span class="text-4xl font-bold">✽</span>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2">Team of experts</h3>
                <p class="text-xs">Our services are crafted by experts who are deeply into any industry, ensuring your
                    project stands out in a crowded market.</p>
            </div>

            <!-- Box 2 -->
            <div class="border p-6 flex flex-col items-start text-start">
                <div class="bg-white rounded-full p-3 mb-4">
                    <div class="bg-black h-8 w-8 flex items-center justify-center rounded-full">
                        <span class="text-4xl font-bold">≋</span>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2">Unlimited changes</h3>
                <p class="text-xs">We're here to make sure you're happy. Feel free to ask for as many changes as needed
                    until everything feels just right for you.</p>
            </div>

            <!-- Box 3 -->
            <div class="border p-6 flex flex-col items-start text-start">
                <div class="bg-white rounded-full p-3 mb-4">
                    <div class="bg-black h-8 w-8 flex items-center justify-center rounded-full">
                        <span class="text-4xl font-bold">⌛</span>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2">Result on time</h3>
                <p class="text-xs">Save time and resources with our complete services. Everything you need is right
                    here, making it easy and convenient for you.</p>
            </div>

            <!-- Box 4 -->
            <div class="border p-6 flex flex-col items-start text-start">
                <div class="bg-white rounded-full p-3 mb-4">
                    <div class="bg-black h-8 w-8 flex items-center justify-center rounded-full">
                        <span class="text-4xl font-bold">⭘</span>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2">Direct communication</h3>
                <p class="text-xs">No need to manage multiple teams. Work directly with one expert who understands your
                    vision and delivers exactly what you need.</p>
            </div>
        </div>
    </div>

    {{-- Pricing --}}
    <section class="py-32 px-16  bg-white text-black" id="Pricing">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <!-- Pricing Tabs -->
                <div class="w-full md:w-1/4 pr-4">
                    <h2 class="text-4xl font-bold mb-6">Pricing</h2>
                    <ul class="space-y-2">
                        <li>
                            <button class="w-full text-left py-2 text-xl font-semibold  hover:text-red-500">Custom
                                Package</button>
                        </li>
                        <li>
                            <button class="w-full text-left py-2 text-xl font-semibold  hover:text-red-500">Design
                                & Animation</button>
                        </li>
                        <li>
                            <button class="w-full text-left py-2 text-xl font-semibold  hover:text-red-500">Design
                                & Development</button>
                        </li>
                        <li>
                            <button class="w-full text-left py-2 text-xl font-semibold  hover:text-red-500">Design
                                & Marketing</button>
                        </li>
                        <li>
                            <button class="w-full text-left py-2 text-xl font-semibold  hover:text-red-500">Super
                                Package</button>
                        </li>
                    </ul>
                </div>

                <!-- Carousel for Pricing Details -->
                <div class="w-full md:w-3/4 pl-4">
                    <div id="pricing-carousel" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <!-- Custom Package Content -->
                                <li class="splide__slide">
                                    <h3 class="text-3xl font-semibold mb-4">Custom Package or Project-Based</h3>
                                    <p class="mb-6 text-gray-800">To create the perfect custom package or project-based
                                        solution,
                                        we'll start by understanding your specific needs. Once you outline your
                                        requirements, we'll tailor a package and finalize a suitable monthly or
                                        project-based rate.</p>
                                    <p class="mb-7 text-gray-800">Below are potential services that could be included
                                        based on your
                                        needs. Let's discuss the details and finalize the pricing.
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pb-12">
                                        <p>Graphic Design</p>
                                        <p>Logo design</p>
                                        <p>2D Animation</p>
                                        <p>UI/UX</p>
                                        <p>Banners</p>
                                        <p>3D Animation</p>
                                        <p>Application</p>
                                        <p>Presentations</p>
                                        <p>Video Editing</p>
                                        <p>3D Design</p>
                                        <p>Printing Files</p>
                                        <p>Motion Graphics</p>
                                        <p>Branding</p>
                                        <p>Social Media Design</p>
                                        <p>Logo Animation</p>
                                        <p>Webflow & Tilda</p>
                                        <p>Vue Js</p>
                                        <p>Laravel, Yii2 etc</p>
                                    </div>
                                    <a href="https://creedz.net/bookacall"
                                        class="px-24 py-3 bg-red-600 text-white rounded-full hover:bg-black">Reach
                                        Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Let's Talk --}}
    <div class="bg-[url('/img/bg.jpeg')] bg-black min-h-screen flex items-center justify-center overflow-hidden relative"
        style="background-size: 100%">
        <!-- Teks utama -->
        <div class="absolute text-center z-10" id="Lets">
            <p class="text-white mb-5 text-lg">Is your big idea ready to work its magic?</p>
            <h1 class="text-white text-6xl md:text-7xl font-bold leading-tight hover:underline hover:italic">
                Let's Create<br>Magic Together
            </h1>
        </div>

        <!-- Gambar melayang -->
        <div class="relative w-full h-full flex items-center justify-center z-0">

            <!-- Kotak gambar 1 -->
            <img src="/img/img20.webp" alt="Skyrex"
                class="absolute top-10 left-10 w-48 md:w-64 tilted-image rotating floating rounded-xl">

            <!-- Kotak gambar 2 -->
            <img src="/img/img14.webp" alt="Cadence"
                class="absolute top-36 right-10 w-48 md:w-64 tilted-image rotating floating rounded-xl">

            <!-- Kotak gambar 3 -->
            <img src="/img/img1.webp" alt="Watch Design"
                class="absolute bottom-10 left-10 w-48 md:w-64 tilted-image rotating floating rounded-xl">

            <!-- Kotak gambar 4 -->
            <img src="/img/img3.webp" alt="Nike Ad"
                class="absolute right-10 w-48 md:w-64 tilted-image rotating floating rounded-xl">
        </div>
    </div>

    {{-- Footer Section --}}
    <section class="pt-16 pb-10 px-16 mt-20  bg-black">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Left Section -->
            <div>
                <h2 class="text-lg font-semibold">Your brand deserves the best. Work with us and see the difference.
                </h2>
                <p class="mt-4">Best regards,</p>
                <p class="mt-1 font-bold">Creedz &copy;</p>
            </div>

            <!-- Middle Section -->
            <div class="flex flex-col space-y-3">
                <a href="#Process" class="hover:underline font-bold">Process</a>
                <a href="#Services" class="hover:underline font-bold">Services</a>
                <a href="#Portfolio" class="hover:underline font-bold">Portfolio</a>
                <a href="#Benefits" class="hover:underline font-bold">Benefits</a>
                <a href="#Pricing" class="hover:underline font-bold">Pricing</a>
                <a href="#Let's" class="hover:underline font-bold">Let's talk</a>
                <a href="mailto:info@creedz.net" class="hover:underline font-bold pt-8">E-mail
                    <br>info@creedz.net</a>
            </div>

            <!-- Right Section: Email and Form -->
            <div class="py-12">
                <h2 class="text-4xl font-semibold">Reach out to us anytime</h2>
                <form class="mt-6">
                    <div class="relative">
                        <input type="email" placeholder="Your email"
                            class="max-w-2xl min-w-96 p-5 bg-zinc-900 rounded-full placeholder-gray-400 focus:outline-none">
                        <button type="submit"
                            class="absolute -right-24 top-2 text-white bg-zinc-900 p-3 rounded-full hover:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-white py-8 px-12">
        <div class="container mx-auto px-4 flex justify-start items-start space-x-20">
            <!-- Social Media Icons -->
            <div class="flex flex-col items-start space-y-2">
                <p class="text-black font-semibold">Follow us</p>
                <div class="flex space-x-4">
                    <a href="https://x.com/creedz_net"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full p-2 hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-twitter-x fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/creedz_net/?next=%2F"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full p-2 hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-instagram fa-lg"></i>
                    </a>
                    <a href="https://www.facebook.com/people/Creedz/61563660386665/"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full p-2 hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-facebook fa-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/creedz/"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full p-2 hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-linkedin fa-lg"></i>
                    </a>
                    <a href="https://www.behance.net/creedzstudio/projects"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full p-2 hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-behance fa-lg"></i>
                    </a>
                    <a href="https://www.behance.net/creedzstudio/projects"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full p-2 hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-dribbble fa-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Contact Icons -->
            <div class="flex flex-col items-start space-y-2">
                <p class="text-black font-semibold">Contact us</p>
                <div class="flex [&>a]:flex [&>a]:justify-center [&>a]:items-center [&>a]:w-10 [&>a]:h-10  space-x-4">
                    <a href="https://t.me/CreedzStudio"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-telegram fa-lg"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=19295429400&text&type=phone_number&app_absent=0"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-whatsapp fa-lg"></i>
                    </a>
                    <a href="#"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full hover:bg-black transition duration-300">
                        <i class="bi bi-telephone fa-lg"></i>
                    </a>
                    <a href="mailto:info@creedz.net"
                        class="text-gray-700 hover:text-white border border-gray-500 rounded-full hover:bg-black transition duration-300"
                        target="_blank">
                        <i class="bi bi-envelope fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="container mx-auto px-4 mt-8 border-t border-gray-200 pt-4 flex ">
            <div>
                <a href="https://creedz.net/policy" class="text-gray-700 hover:underline" target="_blank">Privacy
                    Policy</a>
                <span class="mx-2 text-gray-400">|</span>
                <a href="https://creedz.net/terms" class="text-gray-700 hover:underline" target="_blank">Terms &
                    Conditions</a>
            </div>
            <p class="text-gray-700 text-center mx-64">&copy; 2024 creedz creative studio</p>
        </div>
    </footer>
</body>

</html>
