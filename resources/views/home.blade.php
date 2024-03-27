<!doctype html>
<html lang="en" class="dark scroll-smooth scroll-p-16">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malcolm's Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@100..700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="dark:bg-gray-900 text-white">
    <div>
        <header class="sticky top-0 z-50 bg-white shadow-md dark:bg-gray-950">
            <nav class="container flex items-center justify-center py-8 px-4 md:px-6 mx-auto">
                <div class="flex items-center space-x-8 text-lg font-semibold text-white dark:text-gray-300">
                    <a href="#about" class="">
                        About
                    </a>
                    <a href="#projects" class="">
                        Projects
                    </a>
                    <a href="#work" class="">
                        Experience
                    </a>
                    <a href="#contact" class="">
                        Contact
                    </a>
                </div>
            </nav>
        </header>
        <header class="w-full py-24 md:py-32 lg:py-48 bg-cover bg-center bg-no-repeat">
            <div class="container flex flex-col items-center justify-center gap-2 px-4 text-center md:gap-4 md:px-6 mx-auto">
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                        Malcolm Rodrigues
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-2xl">
                        Web Developer
                    </p>
                </div>
                <div class="mx-auto max-w-3xl">
                    <p class="text-gray-500 md:text-xl/relaxed xl:text-base/relaxed dark:text-gray-400">
                        Passionate about creating elegant web solutions.
                    </p>
                </div>
            </div>
        </header>
        <section class="w-full py-12 md:py-24 lg:py-32" id="about">
            <div class="container space-y-4 lg:col-start-2 lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-4 px-4 md:px-6 mx-auto">
                <div class="flex items-center justify-center"><img src="{{asset('images/malc.webp')}}" alt="Profile Image" width="400" height="400" class="aspect-square rounded-full object-cover"></div>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <h2 class="text-2xl font-bold tracking-tighter sm:text-3xl">
                            About Me
                        </h2>
                        <p class="text-gray-500 md:text-xl/relaxed xl:text-base/relaxed dark:text-gray-400">
                            Hi, I am Malcolm Rodrigues, I’m a seasoned web developer with a passion for creating innovative online experiences. With over 4 years of experience in the industry, I have honed my skills across various programming languages, front-end and back-end technologies, and have successfully contributed to a range of web development projects.
                        </p>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold tracking-tight">
                            Skills
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            JavaScript, PHP, Python, Java, HTML5/CSS, MySQL, Firebase, MongoDB, React.js, Node.js, Next.js, JSON, Rest API, CodeIgniter, Laravel
                        </p>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold tracking-tight">
                            Industry Knowledge
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            Web applications, front-end design and development, responsive web design, back-end and API development
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-12 md:py-24 lg:py-32" id="projects">
            <div class="container gap-4 px-4 md:gap-8 md:px-6 mx-auto space-y-10 text-center">
                <div class="space-y-4">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                        My Projects
                    </h2>
                </div>
                <div class="flex flex-wrap gap-x-16 gap-y-8 justify-center">
                    <div class="space-y-2 w-1/4 p-6 border-solid border border-gray-500 rounded-xl">
                        <h3 class="text-xl font-bold tracking-tight">Slides</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Song slides manager to generate presentations for song lyrics.</p>
                    </div>
                    <div class="space-y-2 w-1/4 p-6 border-solid border border-gray-500 rounded-xl">
                        <h3 class="text-xl font-bold tracking-tight">Launcher Setups</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Community gallery to share android launcher setups.</p>
                    </div>
                    <div class="space-y-2 w-1/4 p-6 border-solid border border-gray-500 rounded-xl">
                        <h3 class="text-xl font-bold tracking-tight">Glassia Billing</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Billing system made for Glassia Solutions.</p>
                    </div>
                    <div class="space-y-2 w-1/4 p-6 border-solid border border-gray-500 rounded-xl">
                        <h3 class="text-xl font-bold tracking-tight">Admin CI</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Custom admin panel generator.</p>
                    </div>
                    <div class="space-y-2 w-1/4 p-6 border-solid border border-gray-500 rounded-xl">
                        <h3 class="text-xl font-bold tracking-tight">Video Sync</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Play local video files in sync with your group.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-12 md:py-24 lg:py-32" id="work">
            <div class="container grid items-start justify-center gap-4 px-4 md:gap-8 md:px-6 mx-auto space-y-4">
                <div class="space-y-4 text-center">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                        Work Experience
                    </h2>
                </div>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold tracking-tight">
                            STEED 26 SOLUTIONS — <span class="italic text-gray-400 font-medium">Web Developer</span>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            September 2019 - PRESENT
                        </p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>Designed and built e-commerce websites for several clients.</li>
                            <li>Built reusable web components for creating websites.</li>
                            <li>Built back-end services and admin tools using PHP and frameworks like CodeIgniter, React.</li>
                            <li>Handled migration, updation and maintenance of websites.</li>
                            <li>Created APIs using CodeIgniter, Express.js.</li>
                            <li>Integrated Razorpay & Cashfree for handling payments.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-12 md:py-24 lg:py-32" id="contact">
            <div class="container grid items-start justify-center gap-4 px-4 text-center md:gap-8 md:px-6 mx-auto">
                <div class="space-y-4 text-center">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                        Contact Details
                    </h2>
                </div>
                <div class="space-y-2 text-center">
                    <div class="flex items-center justify-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        <p>
                            <a href="mailto:rmalcolm911@gmail.com">rmalcolm911@gmail.com</a>
                        </p>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        <p>
                            <a href="mailto:contact@rmalc911.in">contact@rmalc911.in</a>
                        </p>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <p>
                            <a href="tel:+91 7349228002">+91 7349228002</a>
                        </p>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                            <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                        </svg>
                        <p>
                            <a href="https://github.com/Rod911" target="_blank" rel="noopener noreferrer">github.com/Rod911</a>
                        </p>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                        <p>
                            <a href="https://www.linkedin.com/in/rmalcolm911" target="_blank" rel="noopener noreferrer">linkedin.com/in/rmalcolm911</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
