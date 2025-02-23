<!DOCTYPE html>
<html lang="en" x-data="adminData" x-init="initJobPage()">
<head>
  <meta charset="UTF-8">
  <title>WiseJobs Admin | Job Details</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-4">

  <div class="max-w-4xl mx-auto">
    <template x-if="currentJob">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold" x-text="currentJob.title"></h2>
        <p class="text-gray-600" x-text="currentJob.location"></p>
        <p class="text-green-600" x-text="currentJob.salary"></p>
        <p class="text-blue-600" x-text="currentJob.type"></p>

        <div class="mt-2 space-x-2">
          <button @click="updateJob(currentJob)" class="px-3 py-1 bg-yellow-500 text-white rounded">Update</button>
          <button @click="deleteJob(currentJob)" class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
        </div>
      </div>
    </template>

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
