GITHUB URL: https://github.com/Lucav17/hw1

URL: http://ec2-54-202-99-198.us-west-2.compute.amazonaws.com/

WRITE UP:

The website works, it runs on the domain provided by AWS. After creating the EC2 Instance and RDS Instance along with setting all of the correct settings for everything, I used PHP and MYSQL to connect to the database I had uploaded through MYSQL WorkBench. When the user submits and input through the search bar, they are taken to my search.php page where it grabs that value and uses MYSQL to search through the database for values containing what was inputted. When The names are identified in the database, it creates a player object for each name that creates variables for all of the fields contained within that name. I then use getters to display the values into the table. This is al then displayed for the users.

The website runs on EC2, using an EC2 Instance set up through the AWS console. This was set up using the SUSE Linux AMI, and configuring the settings specified by the instructions provided by our teacher. On the EC2 instance, I connected to it and set it up using the Putty Shell, and was able to install PHP, create an Apache Server, and install MYSQL on it.


The data is hosted on the AWS RDS, This was set up through the RDS console on the AWS site. I had to create a new security group to allow myself access to the RDS. I then connected to it through MYSQL Workbench and uploaded the CSV into the RDS so I could access it through my site.