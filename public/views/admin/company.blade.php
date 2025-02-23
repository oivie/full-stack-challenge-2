<!-- filepath: /c:/Projects/wisejobs/full-stack-challenge-2/public/views/admin/company.blade.php -->
<!DOCTYPE html>
<html lang="en" x-data="adminData" x-init="initCompanyPage()">
<head>
  <meta charset="UTF-8">
  <title>WiseJobs Admin | Company Details</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-4">

  <div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">
      Company: <span x-text="currentCompany"></span>
    </h1>

    <div class="space-y-4">
      <template x-for="job in companyJobs()" :key="job.id">
        <div class="bg-white p-4 rounded shadow">
          <h2 class="text-lg font-semibold" x-text="job.title"></h2>
          <p class="text-gray-600" x-text="job.location"></p>
          <p class="text-green-600" x-text="job.salary"></p>
          <p class="text-blue-600" x-text="job.type"></p>
          <div class="mt-2 space-x-2">
            <!-- Link to Job Details Page -->
            <a :href="'/index.php?page=admin/job&jobId=' + job.id"
               class="px-3 py-1 bg-blue-500 text-white rounded">
              View Details
            </a>
            <!-- Fake Update -->
            <button @click="updateJob(job)"
                    class="px-3 py-1 bg-yellow-500 text-white rounded">
              Update
            </button>
            <!-- Fake Delete -->
            <button @click="deleteJob(job)"
                    class="px-3 py-1 bg-red-500 text-white rounded">
              Delete
            </button>
          </div>
        </div>
      </template>
    </div>

    <!-- Notification -->
    <div x-show="notification"
         class="mt-4 p-2 bg-green-100 text-green-800 rounded"
         x-text="notification"
         x-transition
         x-cloak></div>
  </div>

  <script src="../../js/admin.js"></script>
</body>
</html>