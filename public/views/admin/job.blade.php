<div class="max-w-4xl mx-auto" role="region" aria-label="Job Details">
  <template x-if="currentJob">
    <div class="bg-white p-4 rounded shadow" role="article" aria-labelledby="job-title">
      <h2 class="text-lg font-semibold" x-text="currentJob.title" id="job-title"></h2>
      <p class="text-gray-600" x-text="currentJob.location" aria-label="Location"></p>
      <p class="text-green-600" x-text="currentJob.salary" aria-label="Salary"></p>
      <p class="text-blue-600" x-text="currentJob.type" aria-label="Job Type"></p>

      <div class="mt-2 space-x-2">
        <button @click="updateJob(currentJob)" class="px-3 py-1 bg-yellow-500 text-white rounded" aria-label="Update job">Update</button>
        <button @click="deleteJob(currentJob)" class="px-3 py-1 bg-red-500 text-white rounded" aria-label="Delete job">Delete</button>
      </div>
    </div>
  </template>

  <!-- Notification -->
  <?php include __DIR__ . '/notification.blade.php'; ?>
</div>