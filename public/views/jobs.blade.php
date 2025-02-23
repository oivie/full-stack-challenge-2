<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>WiseJobs | Find Your Next Opportunity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="WiseJobs connects you with the next great opportunity. Explore career options and apply with ease." />
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />

    <!-- Tailwind CSS from CDN (Mobile-first styling) -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- Alpine.js from CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Optional: Include structured data for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WiseJobs",
      "url": "https://wisejobs.example.com",
      "logo": "https://wisejobs.example.com/logo.png",
      "sameAs": [
        "https://www.facebook.com/wisejobs",
        "https://www.twitter.com/wisejobs"
      ]
    }
    </script>
</head>

<body class="bg-gray-50 text-gray-800 p-4">

    <nav class="bg-white shadow mb-8 p-4" role="navigation" aria-label="Main Navigation">
        <div class="max-w-4xl mx-auto flex items-center justify-between">
            <div class="text-xl font-bold">WiseJobs</div>
            <div class="space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900" aria-label="Home">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900" aria-label="Admin Area">Admin</a>
            </div>
        </div>
    </nav>

    <!-- Page Heading -->
    <div class="bg-gradient-to-r from-indigo-600 to-blue-500 text-white p-8 mb-8" role="banner">
        <h1 class="text-4xl font-bold">Welcome to WiseJobs</h1>
        <p class="mt-2">Find your next opportunity.</p>
    </div>

    <!-- Alpine Data & UI Container -->
    <div x-data="jobs" x-init="fetchJobs()" class="max-w-4xl mx-auto space-y-6">

        <?php include 'filters.blade.php'; ?>

        <!-- Loading Indicator (only shows if list is empty) -->
        <div x-show="list.length === 0" 
             class="text-gray-500 italic"
             role="status"
             aria-live="polite"
             x-transition:enter="transition-opacity ease-out duration-500"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100">
            Loading jobs...
        </div>

        <!-- Job Listings -->
        <div x-show="list.length > 0" class="space-y-4">
            <template x-for="job in filteredJobs()" :key="job.id">
                <div x-data="{ job: job }"
                     class="transition-transform transform duration-300 ease-out hover:scale-105"
                     x-transition:enter="transition transform ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <?php include 'job-card.blade.php'; ?>
                </div>
            </template>
        </div>

    </div>

    <script>
        <?php include 'js/main.js'; ?>
    </script>

</body>
</html>