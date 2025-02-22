<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>WiseJobs</title>
    <!-- Tailwind CSS from CDN (Mobile-first styling) -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <!-- Alpine.js from CDN -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50 text-gray-800 p-4">

    <nav class="bg-white shadow mb-8 p-4">
        <div class="max-w-4xl mx-auto flex items-center justify-between">
            <div class="text-xl font-bold">WiseJobs</div>
            <div class="space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Admin</a>
            </div>
        </div>
    </nav>


    <!-- Page Heading -->
    <div class="bg-gradient-to-r from-indigo-600 to-blue-500 text-white p-8 mb-8">
        <h1 class="text-4xl font-bold">Welcome to WiseJobs</h1>
        <p class="mt-2">Find your next opportunity.</p>
    </div>


    <!-- Alpine Data & UI Container -->
    <div x-data="jobs" x-init="fetchJobs()" class="max-w-4xl mx-auto space-y-6">

        <?php include 'filters.blade.php'; ?>

        <!-- Loading Indicator (only shows if list is empty) -->
        <div x-show="list.length === 0" class="text-gray-500 italic">
            Loading jobs...
        </div>

        <!-- Job Listings -->
        <div x-show="list.length > 0" class="space-y-4">
            <template x-for="job in filteredJobs()" :key="job.id">
                <div x-data='{ job: job }'>
                    <?php include 'job-card.blade.php'; ?>
                </div>
            </template>
        </div>

    </div>

    <!-- <script src="js/main.js" defer></script> -->

    <script>
        <?php include 'js/main.js'; ?>
    </script>

</body>
</html>