# instacart
instacart interview project

dbscript.sh - run this to generate csv report to stdout with number of applicants in each stage grouped by week of initial application

Parameter 1 is start date
Parameter 2 is end date

This script expects applicants.sqlite3 in the current directory and sqlite3 on the system.

There may well be a slight bug in how weeks are broken up. I was unable to receive confirmation if the example values on the problem description were actual expected values or merely a formatting display.

---

The rest of the files are the apply functionality.
landing.html is the landing page
apply.php handles the application
confirm.php stores the results
edit.php modifies an application

The rest are helper files.

The pages only require php.

The output is in the confirm page, in the html. This is contrary to specs, and is a result of the fact that PHP seems to run either in a "write to server console" mode or a "write to HTTP response" but not both. Further, finding a writeable file depends on the environment. So key-value pairs are output on confirmation.

The style is nonexistent; I am not a front-end developer.

There are no checks for validity of data, like parsing phone numbers.

