# Wise Publishing Frontend Challenge 👨‍💻
## Information
A front-end challenge using Alpine.js, Tailwind CSS, and PHP for partial includes. Screenshots and demo at the end, before original task TODO.
### This project demonstrates:
- A public “Jobs” view where users can filter job postings by type, company, location, and minimum salary.
- An “admin” area (dashboard) for viewing companies and job details, with fake “update/delete” actions.
- A mini router in index.php that loads pages (e.g., jobs.blade.php, admin/dashboard.blade.php) based on ?page=....
- SEO considerations (structured data JSON-LD, ARIA attributes, accessible markup).

### Features
Job Filtering:
- Filter by type (Remote, In-Person), company substring, location substring, and minimum salary.
- Real-time client-side filtering powered by Alpine.js.

Admin Dashboard:
- Summaries of all companies and the number of postings for each.
-- Company Details: lists the jobs for a selected company, with “Update” / “Delete” placeholders.
- Job Details: show a single job’s info, plus fake update/delete actions.
- Create Job form (optional) for demonstration, no real backend.

Tailwind CSS:
- Utility-first styling for a modern, responsive UI.
- Basic transitions and hover states.

Alpine.js:
- Manages all client-side state (filters, job listings, admin toggles).
- Minimal overhead, no large framework.

SEO:
- Example structured data (application/ld+json) for the organization.
- ARIA attributes for better accessibility.

## Getting Started
Clone this repository:
> git clone https://github.com/your-username/full-stack-challenge-2.git
> cd full-stack-challenge-2

Run a local PHP server (since the project uses PHP for partial includes and routing):
> cd public
> php -S 127.0.0.1:8000 -t public
(Adjust the path if needed.)

Open your browser to http://127.0.0.1:8000/index.php?page=jobs

### Public Site
- By default, the mini router loads jobs.blade.php if no ?page= is specified.
- URL: http://127.0.0.1:8000/?page=jobs
- Filter by type, company, location, or min salary. The data is in data.json.

### Admin Dashboard
- URL: http://127.0.0.1:8000/?page=admin/dashboard
- Shows all companies and number of postings.
- Click a company to view its jobs (company.blade.php).
- Click “View Details” to see job details (job.blade.php).
- “Update” / “Delete” simply show notifications (fake actions).
- A “Create Job” partial might be toggled if you added a button to show it.

### Additional Notes
- No Real Backend: All “update”/“delete” actions are front-end placeholders. Data is in data.json.
- Performance for Core Web Vitals:
   --Defer scripts (<script defer>).
   --Provide placeholders for images or dynamic content (if any).
   --Keep CSS minimal (Tailwind from CDN).
- Testing: No automated tests included, but you can open the console to see errors or logs.


![Screenshot 2025-02-24 085138](https://github.com/user-attachments/assets/c953cc05-8c74-42cb-b3b2-07c0d6ca1f76)
![Screenshot 2025-02-24 085149](https://github.com/user-attachments/assets/05dc4173-617b-4cb7-99a5-a712ed8a9992)
![Screenshot 2025-02-24 085208](https://github.com/user-attachments/assets/d5350833-bd5c-4718-9882-23957c40beb3)
![Screenshot 2025-02-24 085233](https://github.com/user-attachments/assets/eaf1fca9-baf9-45b5-b512-72c2001bca21)
![Screenshot 2025-02-24 085217](https://github.com/user-attachments/assets/2cd4718d-6c30-4852-b94f-fdf05f98cecf)
![Screenshot 2025-02-24 085223](https://github.com/user-attachments/assets/e51511df-d34b-4e4d-b6f7-564acb829806)
![Screenshot 2025-02-24 085245](https://github.com/user-attachments/assets/d1b48187-785b-4425-a58c-f55aebb7700d)
![Screenshot 2025-02-24 085423](https://github.com/user-attachments/assets/caffd943-0bc7-4698-a2ed-634806535ec3)
![image](https://github.com/user-attachments/assets/7f463556-da86-4762-85b3-eda39baed239)
![Screenshot 2025-02-25 074356](https://github.com/user-attachments/assets/7c1d46f8-4ab2-4f69-ac69-1fa5e0864156)
![Screenshot 2025-02-25 074404](https://github.com/user-attachments/assets/15030698-3944-421f-b54c-71388b68a42e)
![Screenshot 2025-02-25 074233](https://github.com/user-attachments/assets/bf85202c-e04f-4c5a-82f4-c19a8f40be46)
![image](https://github.com/user-attachments/assets/57f2a9d9-10cd-40ac-b6e0-3f46ccd94590)

https://github.com/user-attachments/assets/e7f915c3-7200-475b-84b8-ecf2fd291652


## Original Task:
This challenge is meant to measure your capabilities as a **junior frontend developer** and assess your approach to solving frontend problems. We value clean code, and good user experience.

We appreciate adherence to **SOLID**, **KISS**, and **DRY** principles and encourage a focus on performance, **Core Web Vitals (CWV)**, and UI/UX skills.

We expect that an MVP (Minimum Viable Product) of this challenge will take roughly 3-4 hours. However you will have 2 business days to complete the task.

## Project Name: **WiseJobs** 🦉

### Requirements ⚙️

This project will use **Laravel** (as a backend framework) and **Alpine.js**, **JS with Typescript**, **HTML**, **CSS**, and **Blade templating** for the frontend.

You are tasked with creating a responsive, performant, and user-friendly job board application called WiseJobs.

### Backend
If you feel like the backend is too much feel free to simply use json files or return json from the controllers no need to implement the CRUD functionality unless you want to.
We are more focused on the frontend solutions.

### Users 👥

**Users should be able to:**
- Scroll through the list of the latest published jobs.
- Filter jobs based on: position type (remote or in-person), salary, company, and location.
- View more details for each individual job.
- **Performance Consideration:** Ensure smooth scrolling, fast page loading, and efficient job filtering.
- **UI/UX Consideration:** The list should be easy to navigate, with clear, user-friendly job cards, and filters should be intuitive and accessible.

### Admin Users 🗣️

**Admin users should be able to:**
- View all companies and the number of postings for each company.
- View a single company.
- View a single job posting.
Note that we would like to see the options for update and delete how you would deal with the UI but no need to connect to a backend. You can simply throw a notification notifying the user that the action was successful. 
  
### Frontend Expectations 🤘

1. **Performance:**
   - **Optimize for Core Web Vitals (CWV):** Ensure the app scores well on metrics like First Contentful Paint (FCP), Largest Contentful Paint (LCP), and Cumulative Layout Shift (CLS).
   - **Lazy Loading:** Implement lazy loading of job postings and images to improve initial load time.
   - **Minification and Compression:** Minimize and compress assets (CSS, JS) for better performance.

2. **UI/UX:**
   - **Responsive Design:** Ensure the application is fully responsive across all devices (mobile, tablet, desktop).
   - **User-friendly Filters:** Implement an intuitive filtering UI with clear feedback when users apply filters.
   - **Microinteractions:** Add subtle animations or transitions to improve the user experience without impacting performance.
   - **Accessibility:** Ensure the site is accessible for all users (e.g., keyboard navigation, screen reader support).

3. **Frontend Architecture:**
   - **Reusable Components:** Build reusable components for job cards, filter options, and forms using Blade and Alpine.js.
   - **Separation of Concerns:** Ensure a clean separation between data fetching and UI rendering for scalability.
   - **CSS Architecture:** Use a CSS methodology such as BEM or utility-first CSS for maintainable and scalable styles.

4. **Extras (Optional but appreciated):**
   - **Dark Mode Toggle**: Provide a dark mode toggle for the job board.
   - **Hosting**: Deploy the application for extra points.

### Submission 📬

Please make sure to fork this repository and commit your code. We would like to see your commit history with clear, frequent commit messages. When you are completed with the challenge, feel free to share the repository link with us, along with a readme for getting started with the project. Ensure at least one commit is pushed at the 2-hour mark.
