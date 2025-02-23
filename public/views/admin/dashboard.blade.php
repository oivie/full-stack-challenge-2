<!-- filepath: /c:/Projects/wisejobs/full-stack-challenge-2/public/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en" x-data="adminData" x-init="fetchAllJobs()" role="document">
<head>
  <meta charset="UTF-8">
  <title>WiseJobs Admin | Dashboard</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-4">

  <!-- Navigation -->
  <nav aria-label="Main navigation">
    <?php include __DIR__ . '/../nav.blade.php'; ?>
  </nav>

  <!-- SECTION 1: All Companies -->
  <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md" x-show="viewMode === 'allCompanies' && !loading">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6 border-b pb-2" aria-live="polite">All Companies</h1>
    <div class="grid grid-cols-1 gap-4">
      <template x-for="[companyName, count] in Object.entries(companyCounts())" :key="companyName">
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-150 ease-in-out">
          <button @click="showCompany(companyName)"
                  class="text-lg font-medium text-blue-500 hover:underline focus:outline-none"
                  aria-label="View details for company: " x-bind:aria-label="`View details for ${companyName}`">
            <span x-text="companyName"></span>
          </button>
          <span class="text-sm text-gray-600" aria-label="Posting count">(<span x-text="count"></span> postings)</span>
        </div>
      </template>
    </div>
  </div>

  <!-- SECTION 2: Company Partial -->
  <div x-show="viewMode === 'companyDetails'" x-cloak>
    <button @click="viewMode = 'allCompanies'"
            class="mb-4 px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded"
            aria-label="Back to All Companies">
      ← Back
    </button>
    <?php include __DIR__ . '/company.blade.php'; ?>
  </div>

  <!-- SECTION 3: Job Partial -->
  <div x-show="viewMode === 'jobDetails'" x-cloak>
    <button @click="viewMode = 'companyDetails'"
            class="mb-4 px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded"
            aria-label="Back to Company Details">
      ← Back to Company
    </button>
    <?php include __DIR__ . '/job.blade.php'; ?>
  </div>

  <div x-show="loading" class="text-gray-500 italic" aria-live="assertive">Loading...</div>

  <script src="../../js/admin.js"></script>
</body>
</html>