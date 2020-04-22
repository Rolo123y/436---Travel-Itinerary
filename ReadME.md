# 436--Travel-Itinerary

** This application was created as part of MSCI 436

It is often the case that people struggle to plan their trips.
This tool allows for users to input contraints such as budget
and travel dates, and outputs all/the top 10 itineraries for
the given constraints.

**Application Stack:**
* Front-end: HTML, CSS, JavaScript
* Back-end: PHP, MySQL, Python


## Page1_

This page is the main page which the user inputs the core constraints
and then goes to Page2_.php
![Image of Page1_](https://github.com/Rolo123y/436---Travel-Itinerary/blob/master/images/Page1_.PNG)


## Page2_

This page recieves the constraints from Page1_ and outputs all the
combinations currently in the database subject to the constraints.
This page also includes extra constraints which then lead to Page3_.php.
![Image of Page2_](https://github.com/Rolo123y/436---Travel-Itinerary/blob/master/images/Page2_.PNG)

## Page3_

This page displays the top 10 travel itieneriaries based on all of the
constrains from both Page1_ and Page2_. Users are able to view prices of
flights and hotels and total plan cost as well as click on links to view more 
information about the hotel.
![Image of Page3_](https://github.com/Rolo123y/436---Travel-Itinerary/blob/master/images/Page3_.PNG)

**Running Scrapers**
* Flight Scraper: Navigate to the data-collection folder in the command line, and then enter: `python flightscraper.py  <Date> <From> <To> <No. of adults> <No.of Children> <Flight Class(B/E)>` - 
Here, the date format is DD/MM/YYY, and the From and To values must be airport codes for the places(for example, Toronto would be YYZ, and New York would be JFK).

* Hotel Scraper: Navigate to the data-collection folder in the command line, and then enter: `python hotelscraper.py "checkInDate" "checkOutDate" "sortby" "city"` - Here, the date format is YYYY/MM/DD, and the data can be sorted by `popularity` or `price`.

When the scrapers are run, the  data will be stored in a .csv file -  flight data inside the `flight_data` directory, and hotel data inside the `hotels_data` directory. 
