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
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite('resources/css/app.css')
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="64x64" href="{{asset('images/favicon-lg.png')}}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{asset('images/favicon-lg.png')}}">
</head>

<body class="bg-white dark:bg-gray-900 transition-background duration-600">
    <div class="min-h-screen container mx-auto max-w-4xl p-4 md:p-8">
        <div class="bg-white/50 dark:bg-gray-800/50 text-gray-700 dark:text-gray-300 transition-background duration-300 shadow-lg rounded-lg overflow-hidden backdrop-blur-lg">
            <!-- Header -->
            <header class="bg-primary text-primary-contrast p-6 text-center">
                <h1 class="text-4xl font-bold mb-2">Malcolm Rodrigues</h1>
                <p class="text-xl">Web Developer</p>
                <p class="text-sm mt-2">Passionate about creating elegant web solutions</p>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="https://github.com/Rod911" target="_blank" title="GitHub"><i data-lucide="github"></i><span class="sr-only">GitHub"></span></a>
                    <a href="https://linkedin.com/in/rmalcolm911" target="_blank" title="LinkedIn"><i data-lucide="linkedin"></i><span class="sr-only">LinkedIn</span></a>
                    <a href="mailto:rmalcolm911@gmail.com" title="Email"><i data-lucide="mail"></i><span class="sr-only">Email</span></a>
                    <a href="{{asset('docs/Malcolm-Resume.pdf')}}" title="Resume"><i data-lucide="file-text"></i><span class="sr-only">Resume</span></a>
                </div>
            </header>

            <!-- Content Sections -->
            <main class="p-6 space-y-10">
                <!-- About Section -->
                <section id="about-section" class="fade-in">
                    <div class="flex gap-8 items-start max-md:flex-col max-md:items-center max-md:text-center">
                        <div class="min-md:w-1/4 shrink-0 max-w-60">
                            <div class="flex items-center justify-center"><img src="{{asset('images/malc.webp')}}" alt="Profile Image" width="400" height="400" class="aspect-square rounded-full object-cover"></div>
                        </div>
                        <div class="min-md:w-3/4">
                            <h2 class="text-2xl font-semibold mb-4 flex gap-3 items-center max-md:justify-center"><i data-lucide="user"></i> About Me</h2>
                            <p class="">Hi, I am Malcolm Rodrigues, I'm a seasoned web developer with a passion for creating innovative online experiences. With over 4 years of experience in the industry, I have honed my skills across various programming languages, front-end and back-end technologies, and have successfully contributed to a range of web development projects.</p>
                            <div class="card mt-4">
                                <h3 class="text-xl font-semibold mb-2">Industry Knowledge</h3>
                                <ul class="list-disc list-inside text-left">
                                    <li>Web applications</li>
                                    <li>Front-end design and development</li>
                                    <li>Responsive web design</li>
                                    <li>Back-end and API development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Skills Section -->
                <section id="skills-section" class="fade-in">
                    <h2 class="text-2xl font-semibold mb-4 flex gap-3 items-center"><i data-lucide="cpu"></i> Skills</h2>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-semibold mb-3">Languages</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span class="badge">JavaScript</span>
                                    <span class="badge">PHP</span>
                                    <span class="badge">Python</span>
                                    <span class="badge">Java</span>
                                    <span class="badge">HTML5/CSS</span>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-semibold mb-3">Databases</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span class="badge">MySQL</span>
                                    <span class="badge">SQLite</span>
                                    <span class="badge">Firebase</span>
                                    <span class="badge">MongoDB</span>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-semibold mb-3">Frameworks</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span class="badge">React.js</span>
                                    <span class="badge">Node.js</span>
                                    <span class="badge">Next.js</span>
                                    <span class="badge">CodeIgniter</span>
                                    <span class="badge">Laravel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section id="projects-section" class="fade-in">
                    <h2 class="text-2xl font-semibold mb-4 flex gap-3 items-center"><i data-lucide="codepen"></i> My Projects</h2>
                    <div class="space-y-4">
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-bold mb-2">Mangaluru Bus</h3>
                                <p class="mb-3">Bus route search and mapping service for Mangalore city.</p>
                                <div class="flex items-center gap-2">
                                    <span class="badge">React.js</span>
                                    <span class="badge">Laravel</span>
                                    <span class="badge">SQLite</span>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-bold mb-2">Slides</h3>
                                <p class="mb-3">Song slides manager to generate presentations for song lyrics.</p>
                                <div class="flex items-center gap-2">
                                    <span class="badge">React.js</span>
                                    <span class="badge">CodeIgniter</span>
                                    <span class="badge">MySQL</span>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-bold mb-2">Launcher Setups</h3>
                                <p class="mb-3">Community gallery to share android launcher setups.</p>
                                <div class="flex items-center gap-2">
                                    <span class="badge">React.js</span>
                                    <span class="badge">Firebase</span>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-bold mb-2">Glassia Billing</h3>
                                <p class="mb-3">Billing system made for Glassia Solutions.</p>
                                <div class="flex items-center gap-2">
                                    <span class="badge">CodeIgniter</span>
                                    <span class="badge">MySQL</span>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-bold mb-2">Admin CI</h3>
                                <p class="mb-3">Custom admin panel generator.</p>
                                <div class="flex items-center gap-2">
                                    <span class="badge">PHP</span>
                                    <span class="badge">CodeIgniter</span>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="card">
                                <h3 class="text-xl font-bold mb-2">Video Sync</h3>
                                <p class="mb-3">Play local video files in sync with your group.</p>
                                <div class="flex items-center gap-2">
                                    <span class="badge">React.js</span>
                                    <span class="badge">WebRTC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Experience Section -->
                <section id="experience-section" class="fade-in">
                    <h2 class="text-2xl font-semibold mb-4 flex gap-3 items-center"><i data-lucide="briefcase"></i> Work Experience</h2>
                    <div class="card">
                        <h3 class="text-xl font-semibold">STEED 26 SOLUTIONS — Web Developer</h3>
                        <p class="subtitle mb-3">September 2019 - December 2024</p>
                        <ul class="list-disc list-outside pl-5 space-y-2">
                            <li class="pl-2">Architected and deployed multiple e-commerce platforms, resulting in improved user engagement and increased sales conversion</li>
                            <li class="pl-2">Developed reusable component libraries reducing significant development time</li>
                            <li class="pl-2">Engineered robust REST APIs using CodeIgniter and Express.js for seamless client-server communication</li>
                            <li class="pl-2">Implemented secure payment gateways (Razorpay, Cashfree, Stripe) with comprehensive transaction monitoring</li>
                            <li class="pl-2">Built and maintained scalable content management systems and admin portals</li>
                            <li class="pl-2">Led website migration projects ensuring data integrity with minimal downtime</li>
                            <li class="pl-2">Optimized web applications for maximum speed and scalability</li>
                        </ul>
                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="bg-gray-200 dark:bg-gray-800/60 dark:text-gray-400 p-4 text-center transition-background duration-300">
                <div class="flex justify-center gap-x-4 gap-y-1 mb-3 flex-wrap">
                    <a href="mailto:rmalcolm911@gmail.com" class="hover:text-gray-300 transition-color duration-300">rmalcolm911@gmail.com</a>
                    <a href="mailto:contact@rmalc911.in" class="hover:text-gray-300 transition-color duration-300">contact@rmalc911.in</a>
                    <a href="tel:+917349228002" class="hover:text-gray-300 transition-color duration-300">+91 7349228002</a>
                </div>
                <p class="">© 2024 Malcolm Rodrigues. All Rights Reserved.</p>
            </footer>
        </div>
    </div>

    <!-- mouse follower -->
    <div id="mouse-follower" class="pointer-events-none fixed inset-0 -z-1 blur" style="background-image: radial-gradient(600px at 50% 50%, color-mix(in oklab, var(--color-primary-600) 20%, transparent), transparent 80%);"></div>

    <!-- theme toggler -->
    <button id="theme-toggle" class="fixed bottom-4 right-4 bg-primary-400/30 dark:bg-primary-600/30 dark:text-gray-100 transition-background duration-300 p-2 rounded-full cursor-pointer"><i data-lucide="moon" class="dark:hidden"></i><i data-lucide="sun" class="hidden dark:inline"></i></button>

    <script>
        // lucide init
        lucide.createIcons();

        // theme toggler
        const themeToggle = document.getElementById('theme-toggle');
        const theme = localStorage.getItem('theme');
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else if (theme === 'light') {
            document.documentElement.classList.remove('dark');
        }
        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });

        // mouse follower
        const mouseFollower = document.getElementById('mouse-follower');
        const mousePos = {
            x: 0,
            y: 0
        };
        const mouseUpdate = () => {
            mouseFollower.style.transform = `translate(calc(${mousePos.x}px - 50%), calc(${mousePos.y}px - 50%))`;
        }
        document.addEventListener('mousemove', (e) => {
            mousePos.x = e.clientX;
            mousePos.y = e.clientY;
            requestAnimationFrame(mouseUpdate);
        });

        // fade in sections
        const sections = document.querySelectorAll('.fade-in');
        const options = {
            rootMargin: '0px 0px -110px 0px'
        };
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100');
                    entry.target.classList.remove('opacity-0');
                    observer.unobserve(entry.target);
                }
            });
        }, options);
        sections.forEach(section => {
            observer.observe(section);
            section.classList.add('opacity-0', 'transition', 'duration-1000', 'ease-in-out');
        });
    </script>
</body>

</html>
