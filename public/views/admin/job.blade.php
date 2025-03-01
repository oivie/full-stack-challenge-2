<div class="max-w-4xl mx-auto" role="region" aria-label="Job Details">
  <template x-if="currentJob">
    <div class="bg-white p-4 rounded shadow" role="article" aria-labelledby="job-title">
      <h2 class="text-lg font-semibold" x-text="currentJob.title" id="job-title"></h2>
      
      <p class="text-purple-600" x-text="currentJob.company" aria-label="Company Name"></p>
      <p class="text-gray-600" x-text="currentJob.location" aria-label="Location"></p>
      <p class="text-green-600" x-text="'Salary: $' + currentJob.salary" aria-label="Salary"></p>
      <p class="text-blue-600" x-text="currentJob.type" aria-label="Job Type"></p>
      
      <p class="text-gray-800 mt-2" x-text="currentJob.description" aria-label="Job Description"></p>
      
      <div class="mt-2">
        <h3 class="font-semibold">Skills Required:</h3>
        <ul class="list-disc pl-5">
          <template x-for="skill in currentJob.skills" :key="skill">
            <li x-text="skill"></li>
          </template>
        </ul>
      </div>

      <div class="mt-2 space-x-2">
        <button @click="updateJob(currentJob)" class="px-3 py-1 bg-yellow-500 text-white rounded transition transform hover:scale-105 duration-150" aria-label="Update job">Update</button>
        <button @click="deleteJob(currentJob)" class="px-3 py-1 bg-red-500 text-white rounded transition transform hover:scale-105 duration-150" aria-label="Delete job">Delete</button>
      </div>
    </div>
  </template>

  <!-- Notification -->
  <?php include __DIR__ . '/notification.blade.php'; ?>
</div>