<!-- filepath: /c:/Projects/wisejobs/full-stack-challenge-2/public/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en" x-data="adminData" x-init="fetchAllJobs()">
<head>
  <meta charset="UTF-8">
  <title>WiseJobs Admin | Dashboard</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-4">

    <!-- Navigation -->
    <?php include __DIR__ . '/../nav.blade.php'; ?>

  <div class="max-w-4xl mx-auto" x-show="!loading">
    <h1 class="text-2xl font-bold mb-4">All Companies</h1>
    <div class="space-y-2">
      <!-- List all companies and their job counts -->
      <template x-for="[companyName, count] in Object.entries(companyCounts())" :key="companyName">
        <div>
          <a :href="'/index.php?page=admin/company&company=' + encodeURIComponent(companyName)"
             class="text-blue-600 hover:underline">
            <span x-text="companyName"></span>
          </a>
          (<span x-text="count"></span> postings)
        </div>
      </template>
    </div>
  </div>

  <div x-show="loading" class="text-gray-500 italic">Loading...</div>

  <script src="../../js/admin.js"></script>
</body>
</html>