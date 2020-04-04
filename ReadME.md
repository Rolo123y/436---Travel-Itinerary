# 436--Travel-Itinerary

** This application was created as part of MSCI 436 by 
Group 26 **

It is often the case that people struggle to plan their trips.
This tool allows for users to input contraints such as budget
and travel dates, and outputs all/the top 10 itineraries for
the given constraints.

**Application Stack:**
* front-end: HTML, CSS, JavaScript
* back-end: PHP, MySQL, Python

## Page1_

This page is the main page which the user inputs the core constraints
and then goes to Page2_.php
![Image of Page1_](images/Page1_.png)


## Page2_

This page recieves the constraints from Page1_ and outputs all the
combinations currently in the database subject to the constraints.
This page also includes extra constraints which then lead to Page3_.php.
![Image of Page2_](images/Page2_.png)

## Page3_

This page displays the top 3 travel itieneriaries based on all of the
constrains from both Page1_ and Page2_. Users are able to view prices of
flights and hotels and total plan cost as well as click on links to view more 
information about the hotel.
![Image of Page3_](images/Page3_.png)