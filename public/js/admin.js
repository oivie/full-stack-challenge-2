document.addEventListener('alpine:init', () => {
    Alpine.data('adminData', () => ({
      allJobs: [],
      loading: false,
      notification: '',
      currentCompany: '',
      currentJob: null,
      viewMode: 'allCompanies',
  
      // 1) Fetch all jobs once
      async fetchAllJobs() {
        this.loading = true;
        try {
          const res = await fetch('/data.json');
          if (!res.ok) throw new Error('Failed to load jobs');
          this.allJobs = await res.json();
        } catch (error) {
          console.error(error);
        } finally {
          this.loading = false;
        }
      },
  
      // 2) For the Dashboard
      companyCounts() {
        // Build an object { companyName: count }
        return this.allJobs.reduce((acc, job) => {
          acc[job.company] = (acc[job.company] || 0) + 1;
          return acc;
        }, {});
      },

      showCompany(companyName) {
        this.currentCompany = companyName;
        this.viewMode = 'companyDetails';
      },
      showJob(job) {
        this.currentJob = job;
        this.viewMode = 'jobDetails';
      },
  
      // 3) For Company Page
      initCompanyPage() {
        // Parse the ?company= from the URL
        const params = new URLSearchParams(window.location.search);
        this.currentCompany = params.get('company') || '';
        this.fetchAllJobs(); // ensure we have all jobs
      },
      companyJobs() {
        return this.allJobs.filter(job => job.company === this.currentCompany);
      },
  
      // 4) For Single Job Page
      initJobPage() {
        const params = new URLSearchParams(window.location.search);
        const jobId = Number(params.get('jobId'));
        this.fetchAllJobs().then(() => {
          this.currentJob = this.allJobs.find(j => j.id === jobId) || null;
        });
      },
  
      // Fake Update
      updateJob(job) {
        this.notification = `Job "${job.title}" updated successfully!`;
        // In real app, you'd do an API call here
        setTimeout(() => { this.notification = '' }, 2000);
      },
  
      // Fake Delete
      deleteJob(job) {
        this.notification = `Job "${job.title}" deleted successfully!`;
        // In real app, you'd do an API call + remove from array
        setTimeout(() => { this.notification = '' }, 2000);
      },
    }));
  });
  