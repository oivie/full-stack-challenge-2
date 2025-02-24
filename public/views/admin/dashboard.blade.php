<!DOCTYPE html>
<html lang="en" x-data="adminData" x-init="viewMode = 'allCompanies'; fetchAllJobs()" role="document">
<head>
  <meta charset="UTF-8">
  <title>WiseJobs Admin | Dashboard</title>
  <style>
    [x-cloak] { display: none; }
  </style>
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
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-3xl font-semibold text-gray-800 border-b pb-2" aria-live="polite">All Companies</h1>
      <button @click="viewMode = 'createJob'" 
              class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
              aria-label="Add Job">
        Add Job
      </button>
    </div>
    <div class="grid grid-cols-1 gap-4">
      <template x-for="[companyName, count] in Object.entries(companyCounts())" :key="companyName">
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-150 ease-in-out">
          <button @click="showCompany(companyName)"
                  class="text-lg font-medium text-blue-500 hover:text-blue-700 focus:outline-none"
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

  <!-- SECTION 4: Create Job Partial -->
  <div x-show="viewMode === 'createJob'" x-cloak>
    <button @click="viewMode = 'allCompanies'"
            class="mb-4 px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded"
            aria-label="Back to All Companies">
      ← Back to All Companies
    </button>
    <?php include __DIR__ . '/create-job.blade.php'; ?>
  </div>

  <div x-show="loading" class="text-gray-500 italic" aria-live="assertive">Loading...</div>

  <script src="../../js/admin.js"></script>
</body>
</html>