<!-- Partial -->
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
          <button @click="showJob(job)"
             class="px-3 py-1 bg-blue-500 text-white rounded">
            View Details
          </button>
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
<?php include __DIR__ . '/notification.blade.php'; ?>