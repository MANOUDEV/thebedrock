<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Togo News Blog</title>
<link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Rubik", "sans-serif"],
                        "body": ["Nunito Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="font-body bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="sticky top-0 z-50">
<div class="w-full bg-black text-white">
<div class="container-fluid px-3 sm:px-4">
<div class="flex flex-wrap items-center justify-between py-2 text-sm">
<div class="flex items-center gap-4 sm:gap-6">
<a class="text-gray-300 hover:text-white transition-colors text-xs sm:text-sm" href="#">About</a>
<a class="text-gray-300 hover:text-white transition-colors text-xs sm:text-sm" href="#">Contact</a>
<a class="text-gray-300 hover:text-white transition-colors text-xs sm:text-sm" href="#">Forum</a>
</div>
<div class="flex items-center gap-3 sm:gap-6 mt-2 sm:mt-0 w-full sm:w-auto justify-between sm:justify-end">
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined !text-xl text-yellow-400">partly_cloudy_day</span>
<p class="text-xs sm:text-sm">Lomé, 29°C</p>
</div>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded h-8 px-3 bg-primary text-white text-xs sm:text-sm font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors">
<span class="truncate">Log In</span>
</button>
</div>
</div>
</div>
<div class="bg-white dark:bg-gray-900 px-3 sm:px-4">
<div class="container-fluid flex flex-wrap items-center justify-between py-4 gap-y-4">
<div class="flex items-center gap-4">
<div class="size-10 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" fill="currentColor"></path>
</svg>
</div>
<h1 class="text-3xl lg:text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100 font-display">TOGO NEWS</h1>
</div>
<div class="w-full lg:w-auto flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 min-h-[90px] min-w-0 lg:min-w-[728px]">
<p class="text-gray-500 dark:text-gray-400 text-sm">Advertisement Banner</p>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-black p-0 border-t border-gray-700">
<div class="container-fluid px-3 sm:px-4">
<button aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler my-2 border-gray-600 focus:shadow-none" data-bs-target="#mainNavbar" data-bs-toggle="collapse" type="button">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="mainNavbar">
<ul class="navbar-nav me-auto mb-2 mb-lg-0 w-full justify-between font-display">
<li class="nav-item"><a class="nav-link text-primary !font-bold border-b-[3px] border-b-primary text-sm px-3 py-4 active" href="#">Home</a></li>
<li class="nav-item"><a class="nav-link text-white hover:text-primary text-sm !font-bold px-3 py-4" href="#">Togo News</a></li>
<li class="nav-item dropdown">
<a aria-expanded="false" class="nav-link dropdown-toggle text-white hover:text-primary text-sm !font-bold px-3 py-4" data-bs-toggle="dropdown" href="#" role="button">Categories</a>
<ul class="dropdown-menu bg-black border-gray-700">
<li><a class="dropdown-item text-gray-300 hover:!bg-gray-800 hover:!text-white" href="#">Politics</a></li>
<li><a class="dropdown-item text-gray-300 hover:!bg-gray-800 hover:!text-white" href="#">Culture</a></li>
<li><a class="dropdown-item text-gray-300 hover:!bg-gray-800 hover:!text-white" href="#">Technology</a></li>
<li><a class="dropdown-item text-gray-300 hover:!bg-gray-800 hover:!text-white" href="#">Health</a></li>
</ul>
</li>
<li class="nav-item"><a class="nav-link text-white hover:text-primary text-sm !font-bold px-3 py-4" href="#">Economy</a></li>
<li class="nav-item"><a class="nav-link text-white hover:text-primary text-sm !font-bold px-3 py-4" href="#">Diaspora</a></li>
<li class="nav-item"><a class="nav-link text-white hover:text-primary text-sm !font-bold px-3 py-4" href="#">International</a></li>
<li class="nav-item"><a class="nav-link text-white hover:text-primary text-sm !font-bold px-3 py-4" href="#">Sports</a></li>
<li class="nav-item"><a class="nav-link text-white hover:text-primary text-sm !font-bold px-3 py-4" href="#">Practical Info</a></li>
</ul>
</div>
</div>
</nav>
</div>
</header>
<main class="flex-1 py-12">
<div class="container-fluid px-3 sm:px-4">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<div class="lg:col-span-8 space-y-8">
<div class="w-full bg-center bg-no-repeat aspect-[2/1] bg-cover rounded-xl" data-alt="Togolese landscape at sunset with vibrant orange and purple clouds." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCB8XEev5ryo311dJCzNzSWl6knllaUZiedFj8HIVHGSPOG_wLGeECQ_cdjbl0ffbnsb39kwGhHDcu7irybjToUKFyqCg1j7m-qUdrr1yxGrMb45Bj5agKL9liEPH0k7Kncn-R4AfhON5wMjjzx3x8ShsfnCD53afJcpVY-KuVYKGm4Vpj3DFZsYSbVKWW323Fj_WQIg8O0PbCYLwYIrC9P4gSSpOk6Gjl6nqGMiYLmBh0V1obIl0Szq3lg2xep_WXioMst6UgAC_zs");'></div>
<h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 font-display">Main Blog Content Area</h2>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">This section would contain the main articles, news stories, and other primary content of the blog. The layout can be adapted to feature a main story prominently, followed by a grid or list of other recent posts.</p>
</div>
<div class="lg:col-span-4 space-y-6">
<div class="w-full flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 min-h-[600px] sticky top-[280px]">
<p class="text-gray-500 dark:text-gray-400 text-sm">Advertisement</p>
</div>
</div>
</div>
</div>
</main>
<footer class="bg-gray-800 dark:bg-background-dark text-gray-300 px-3 sm:px-4 pt-16 pb-8">
<div class="container mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="size-8 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" fill="currentColor"></path>
</svg>
</div>
<h3 class="text-2xl font-bold text-white font-display">TOGO NEWS</h3>
</div>
<p class="text-sm text-gray-400 leading-relaxed">Your source for the latest news and stories from Togo and the diaspora. Stay informed with our in-depth analysis and reports.</p>
<div class="space-y-2 text-sm text-gray-400">
<p>Contact: <a class="hover:text-primary transition-colors" href="mailto:info@togonews.tg">info@togonews.tg</a></p>
<p>Phone: <a class="hover:text-primary transition-colors" href="tel:+22890000000">+228 90 00 00 00</a></p>
</div>
<div>
<h4 class="font-display font-semibold text-white mb-3">Newsletter</h4>
<form class="flex">
<input class="flex-grow bg-gray-700 border-gray-600 text-white placeholder-gray-400 rounded-l-md focus:ring-primary focus:border-primary text-sm" placeholder="Your email address" type="email"/>
<button class="bg-primary text-white px-4 py-2 rounded-r-md font-semibold hover:bg-primary/90 transition-colors text-sm" type="submit">Subscribe</button>
</form>
</div>
</div>
<div class="lg:col-span-2">
<h4 class="font-display font-bold text-lg text-white mb-6 border-b-2 border-primary pb-2 inline-block">Popular Articles</h4>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
<article class="flex items-start gap-4">
<img alt="Article thumbnail" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEqwGILKeKSE3a509l1O73LkljBYJF0Cf5cvJYkKDmcn-3LezQXeZ9vNddVQ3dOQb6yId7R_phfHFd-EyWqsjuIKlilj0Nrl8hyh_n5dHiTbWDD1KPOts1aZ5pQf-Rh62XvzfKMgdbKBxqPOAZl2g4bwDlNlUjzs9JC_3Sz8sX94f0rtnZUkiNwioweBhPznn8ADrJHnOJiIbgAplWMyeOZYqQSXCIFDDebib0N6oL85bS61HxuvSR0w44lDVah6Qhr-74RMwFj1ZZ"/>
<div>
<h5 class="font-bold text-white hover:text-primary transition-colors leading-snug mb-1"><a href="#">Togo's Tech Scene: A Hub of Innovation</a></h5>
<p class="text-xs text-gray-400">Oct 22, 2023 - By John Doe</p>
</div>
</article>
<article class="flex items-start gap-4">
<img alt="Article thumbnail" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZxoD6QJWte4KmY5p0m1_wPQ4A6VQaDt1_isEaG6Or5sTN-rnSKjgwIkWh2FTstL7O7s8gFboTM4H25zpeLrFzc5NEh28EKu5T0rIcW9r7rYK8iBQk71k4-vHPHL7ao_Vj2j6Qdl2oZI5fIAM1cSkIao5fL0LjLV9POcE3t4yFijql84ksPD5QBEAtoNy-p1A-UDA7cIpgVjNCAxlw6CcjpsKA2kUO3wZAJRW6fhQbMCN04qB8L1UUaTYwg47tI8pyn_D_xcn1hCs8"/>
<div>
<h5 class="font-bold text-white hover:text-primary transition-colors leading-snug mb-1"><a href="#">Economic Reforms Pave Way for Growth</a></h5>
<p class="text-xs text-gray-400">Oct 21, 2023 - By Jane Smith</p>
</div>
</article>
<article class="flex items-start gap-4">
<img alt="Article thumbnail" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBhmfdSwS7KejeFaiV_aoER9SkTdXS1SRyEiO2g4hzrkKgRz0JD3LAljDKILXyW7csItHo52ck81iSxPZWRkSDkIcVJKNqE9fW42ekp8BKS1rBqnOimCX9nfpkyGIekX7OOLAPoiH8IwqdP8Z5B9pP2EN3uv4cU3ZnqABIxUFetn_g0JiPAsnSfTILtvL74CN03VkAmbfpIDV0w81jXPGUo4zRn9LBQMxCrF3SYSO1RDuWZwLSQ0XODvaZNGzQXUctIJS8aVGUK4vr"/>
<div>
<h5 class="font-bold text-white hover:text-primary transition-colors leading-snug mb-1"><a href="#">Celebrating Togolese Culture in Paris</a></h5>
<p class="text-xs text-gray-400">Oct 20, 2023 - By F. Koffi</p>
</div>
</article>
<article class="flex items-start gap-4">
<img alt="Article thumbnail" class="w-20 h-20 object-cover rounded-lg flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLncQd4_pInc0fZE1oiK5Y5ETJDtcUL-KPqIOZCrx4UW0cFG4KqlzZyVglAGLXjBWI5RupvKhWMrX9GRfa01I3iPZoHhS17L0BvHnz21-X_oDsYMPX3Iayaahhj6VYP4Udefa6SiF-XMDkZ6U5H6zt67TcHbQ1oGprD0nc5PblsvleadaMIEddWsyhJEg3El2jw_LCLzjC1-74hIWIAjxe7wY_f2YPG0orMXMf5L85FyUY-ozEF1HVNXfDLkuavtQJH7gziw7bXg-1"/>
<div>
<h5 class="font-bold text-white hover:text-primary transition-colors leading-snug mb-1"><a href="#">National Football Team's Victory Highlights</a></h5>
<p class="text-xs text-gray-400">Oct 19, 2023 - By A. Mensah</p>
</div>
</article>
</div>
</div>
<div>
<h4 class="font-display font-bold text-lg text-white mb-6 border-b-2 border-primary pb-2 inline-block">Popular Categories</h4>
<ul class="space-y-2">
<li><a class="flex justify-between items-center text-gray-300 hover:text-primary transition-colors" href="#"><span class="font-semibold">Politics</span><span class="text-xs text-gray-500 bg-gray-700 px-2 py-0.5 rounded">23</span></a></li>
<li><a class="flex justify-between items-center text-gray-300 hover:text-primary transition-colors" href="#"><span class="font-semibold">Economy</span><span class="text-xs text-gray-500 bg-gray-700 px-2 py-0.5 rounded">18</span></a></li>
<li><a class="flex justify-between items-center text-gray-300 hover:text-primary transition-colors" href="#"><span class="font-semibold">Sports</span><span class="text-xs text-gray-500 bg-gray-700 px-2 py-0.5 rounded">15</span></a></li>
<li><a class="flex justify-between items-center text-gray-300 hover:text-primary transition-colors" href="#"><span class="font-semibold">Culture</span><span class="text-xs text-gray-500 bg-gray-700 px-2 py-0.5 rounded">12</span></a></li>
<li><a class="flex justify-between items-center text-gray-300 hover:text-primary transition-colors" href="#"><span class="font-semibold">Diaspora</span><span class="text-xs text-gray-500 bg-gray-700 px-2 py-0.5 rounded">10</span></a></li>
<li><a class="flex justify-between items-center text-gray-300 hover:text-primary transition-colors" href="#"><span class="font-semibold">Technology</span><span class="text-xs text-gray-500 bg-gray-700 px-2 py-0.5 rounded">8</span></a></li>
</ul>
</div>
</div>
<div class="border-t border-gray-700 pt-8 flex flex-col sm:flex-row justify-between items-center gap-6">
<p class="text-sm text-gray-500 order-last sm:order-first mt-4 sm:mt-0 text-center sm:text-left">© 2023 TOGO NEWS. All Rights Reserved.</p>
<div class="flex flex-col sm:flex-row items-center gap-6">
<div class="flex gap-4">
<a aria-label="Facebook" class="text-gray-400 hover:text-white transition-colors" href="#"><svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
<a aria-label="Twitter" class="text-gray-400 hover:text-white transition-colors" href="#"><svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
<a aria-label="Instagram" class="text-gray-400 hover:text-white transition-colors" href="#"><svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><rect height="20" rx="5" ry="5" width="20" x="2" y="2"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
<a aria-label="LinkedIn" class="text-gray-400 hover:text-white transition-colors" href="#"><svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect height="12" width="4" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
</div>
<div class="flex gap-4 items-center">
<a class="transition-opacity hover:opacity-80" href="#">
<img alt="Download on the App Store" class="h-10 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7HfHPZcCx068A5IppKHf-jxEA1DG6eHI-GJ0BL1YeCfvJqeEPc4yZ7-8onzdFJpppfTz73yachljfA0amuT8jCTPLmkysdQe3eorllet5k1K5hy59svQkUetZa1dYJRQdbh1Na4k78t620334YOmA6k6YuQ7V2g_j9y-UoMLh_zt2yL6z-QwNOlO3XYxlTlllDbyFuvSdWDXO0JhMmbsdQieeFovw49wKnqz5JHuI2NuL3ePJfrEa8l3bvEIuqZORluAPlJGwgnzB"/>
</a>
<a class="transition-opacity hover:opacity-80" href="#">
<img alt="Get it on Google Play" class="h-10 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDANcoV8NHcbwH-eJp9yB5Ia0ALucjlLIl9zFjV6BgeD6Tp3pFoEi9_3gbkL_MYp1z9LtqlFFwQrIMfzj6hGPAQpZxT0axwykYuDiHnamCx6kjyGWlRQ7EhX6NetXsb8SblkxJpHa4qGcer4QkmKMdRNcI-3MFQf4aN1D8bLLG6NMuAXR67icpYqWRPqAsh2_xAAlPT0IQbE8sThVxBaIQ1TuOotiseQUx6qDUcjK4X-312A8IYA19-b4RiimGqMwQVB_SXRSYgBEik"/>
</a>
</div>
</div>
</div>
</div>
</footer>
</div>
</div>
<script crossorigin="anonymous" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body></html>