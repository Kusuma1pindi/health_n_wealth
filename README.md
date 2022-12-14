# health_n_wealth
It is a website "Health N wealthy" designed as both admin and user side. When you first open this website you will see following options.
1. Home
2. Timings
3. About us 
4. Payment
5. New User Registration
6. Admin

We made flexible timings for Yoga sessions. Those details were mentioned in the webpage.
User get to join in four batches .
1. Batch1 - Surya Namaskara Batch
2. Batch2 - Pranayama Batch
3. Batch3 - Sphinx Batch
4. Batch4 - Locust Batch

Contact details were mentioned in about us. Existed user can pay to yoga sessions using Payment option.
If the user is new to yoga sessions and want to join inthis program he can user new registration option .

Admin option is for admin of this program. when admin clicks on that he will be able to see users count, payments count and list, new registrations ,Change of Batch and Batch wise details.
For evry month, each user get a chance to change his batch. This will be done by admin.
This is all about frontend.
In backend , I have given four tables in database.
1. Batch_status       - Every user is provided with unique enrollment id(eid), Batch id (bid).
2. Enrollment_details - This table contains all details about user and time of enrollment.
3. Monthly_batch_data - This table contains number of users in each batch in monthly basis.
4. Payment_details    - This table contains the payment details and user is provided with payment id.





