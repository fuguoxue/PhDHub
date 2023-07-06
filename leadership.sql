Create database if not exists leadership;

use leadership;

drop table if exists workshops;
create table workshops (
    Name varchar(255),
    Lecturer varchar(255),
    Date varchar(255),
    Time varchar(255),
    Venue varchar(255),
    ImageURL varchar(255),
    BrochureURL varchar(255),
    Status varchar(255)
);

-- For each workshop information block on the webpage, there is a corresponing code block below. 
-- 1. If no brochure is available for a workshop, please leave the Brochure URL blank. 
-- 2. If a workshop is expired, please change its status to "Finished", and it will be taken from the webpage.
-- 3. To categorize workshops into scheduled workshops and upcoming workshop, please key in "Scheduled" and "Upcoming" for their Status data. 

insert into workshops values (
    "Effective Negotiations", "PROF. PERRY ATWAL", "September 14 & 28, 2021", "12 - 2 PM", "NYU Zoom", "./images/workshop.jpg", "http://pd4phd.engineering.nyu.edu/pdf/perry-atwal-f2021.pdf", "Scheduled"
);
insert into workshops values (
    "Storytelling to Land Your Job and Grant", "MS. DASHA RETTEW", "October 12 & 26, 2021", "12 - 2 PM", "NYU Zoom", "./images/workshop.jpg", "http://pd4phd.engineering.nyu.edu/pdf/dasha-rettew-f2021.pdf", "Scheduled"
);
insert into workshops values (
    "Decision Making and Leadership", "PROF. JUSTIN G. BULL", "November 9 & 23, 2021", "12 - 2 PM", "NYU Zoom", "./images/workshop.jpg", "http://pd4phd.engineering.nyu.edu/pdf/perry-atwal-f2021.pdf", "Scheduled"
);
insert into workshops values (
    "Coming Soon!", "NYU TANDON", "December 7 & 21, 2021", "12 - 2 PM", "NYU Zoom", "./images/workshop.jpg", "", "Upcoming"
);