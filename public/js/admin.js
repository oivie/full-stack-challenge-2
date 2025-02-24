document.addEventListener('alpine:init', () => {
    Alpine.data('adminData', () => ({
      allJobs: [],
      loading: false,
      notification: '',
      currentCompany: '',
      currentJob: null,
      viewMode: 'allCompanies',
      newJob: {
        title: '',
        company: '',
        location: '',
        salary: '',
        type: ''
      },
  
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

      // only local storage below
      createJob() {
        const newJob = { ...this.newJob, id: Date.now() };
        this.allJobs.push(newJob);
        localStorage.setItem('jobs', JSON.stringify(this.allJobs));
        this.newJob = { title: '', company: '', location: '', salary: '', type: '' };
        this.viewMode = 'allCompanies';
        this.notification = 'Job created successfully!';
        setTimeout(() => this.notification = '', 3000);
      },

      updateJob(updatedJob) {
        const index = this.allJobs.findIndex(job => job.id === updatedJob.id);
        if (index !== -1) {
          this.allJobs[index] = updatedJob;
          localStorage.setItem('jobs', JSON.stringify(this.allJobs)); // Update local storage
          this.notification = 'Job updated successfully!';
          setTimeout(() => this.notification = '', 3000);
        } else {
          this.notification = 'Job not found!';
          setTimeout(() => this.notification = '', 3000);
        }
      },

      deleteJob(job) {
        this.allJobs = this.allJobs.filter(j => j.id !== job.id);
        localStorage.setItem('jobs', JSON.stringify(this.allJobs)); // Update local storage
        this.notification = 'Job deleted successfully!';
        setTimeout(() => this.notification = '', 3000);
      },

      companyJobs() {
        return this.allJobs.filter(job => job.company === this.currentCompany);
      }
    }));
});
