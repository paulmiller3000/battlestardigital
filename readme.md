# Battlestar Digital
Custom website built using Brad Traversy's open-source TraversyMVC (Model View Controller) framework. You can learn more about Brad and find his course here: https://www.udemy.com/object-oriented-php-mvc


## Note
The TraversyMVC framework is presumably intended for sites in a dedicating hosting environment. If you run into a 500 error deploying this in a production environment environment AND you use shared hosting, consider moving to an AWS EC2 instance or other dedicated hosting. Here's why: https://paulmiller3000.com/500-error-traversymvc-shared-hosting/

## Enhancements
### Planned
- Move the database name, user name, and password to a config file
- Move the home page URL to a config file
- Create an admin console
- Add SITENAME variable to admin console
- Develop simple article posting tool that allows for hyphens in article URLs
- Develop page posting tool that replaces physical PHP pages in **/app/views/pages** with an admin and database-driven approach

## Getting Started
1. Update lines 13 and 16 in **/app/config/config.php**. Lines 3 through 6 are not yet in use.
2. And, of course, update the actualy content in **index.php** and **/app/views/pages**.