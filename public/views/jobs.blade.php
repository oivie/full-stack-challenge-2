<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>WiseJobs</title>
    <!-- Tailwind CSS from CDN (Mobile-first styling) -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
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

        <!-- Filter Label & Select -->
        <div>
            <label for="jobFilter" class="block text-sm font-medium text-gray-700 mb-2">
                Filter by Type:
            </label>
            <select id="jobFilter"
                x-model="filterType"
                class="block w-full sm:w-auto border-gray-300 rounded p-2">
                <option value="">All</option>
                <option value="Remote">Remote</option>
                <option value="In-Person">In-Person</option>
            </select>
        </div>

        <!-- Loading Indicator (only shows if list is empty) -->
        <div x-show="list.length === 0" class="text-gray-500 italic">
            Loading jobs...
        </div>

        <!-- Job Listings -->
        <div x-show="list.length > 0" class="space-y-4">
            <template x-for="job in filteredJobs()" :key="job.id">
                <article class="bg-white rounded shadow p-4">
                    <h2 x-text="job.title" class="text-xl font-semibold mb-1"></h2>
                    <p x-text="job.company" class="text-gray-700 mb-1"></p>
                    <p x-text="job.location" class="text-gray-700 mb-1"></p>
                    <p x-text="job.salary" class="text-gray-700 mb-1"></p>
                    <span class="inline-block px-2 py-1 text-sm font-medium rounded
                       bg-indigo-100 text-indigo-800"
                        x-text="job.type"></span>
                </article>
            </template>
        </div>
    </div>

    <!-- Inline Alpine Logic -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('jobs', () => ({
                list: [],
                filterType: "",
                async fetchJobs() {
                    try {
                        const response = await fetch('/data.json'); // or '/jobs.json'
                        if (!response.ok) throw new Error("Failed to load jobs");
                        this.list = await response.json();
                    } catch (error) {
                        console.error("Error fetching jobs:", error);
                    }
                },
                filteredJobs() {
                    return this.filterType ?
                        this.list.filter(job => job.type === this.filterType) :
                        this.list;
                }
            }));
        });
    </script>

</body>

</html>