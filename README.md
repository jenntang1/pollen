![PollenLogo](https://i.imgur.com/K4BblfA.png)

# Pollen
## Introduction
Hello from Flavio Vilcheze Espinoza and Jennifer Tang!  We are the creators of the web application, Pollen.  The idea to develop Pollen came at a challenging time for the whole world.  It was during the peak of the COVID-19 pandemic in early May 2020, Flavio remotely recommended a book called The Nature of Life and Death by Patricia Wiltshire to Jennifer.  The book follows the professional career of Patricia Wiltshire as a forensic ecologist/botanist.  She studies and investigates plant and plant parts found at crime scenes to solve criminal cases.  The conversations we had about the book spiraled into a shared interest in forensic botany.  After hours combing the Internet for resources on forensic botany and criminal cases solved by it to no avail, we decided to build our own resource.  

The following are articles written by us detailing our journey on developing Pollen:  
Flavio Vilchez Espinoza, [Building My First App](https://medium.com/@fvesp18/building-my-first-app-41da598cd2bd?source=friends_link&sk=960216d3ad126555a19b58ad7ba9fe57) and [LinkedIn](https://www.linkedin.com/in/fvesp18)  
Jennifer Tang, [Developing My First App: Pollen](https://www.linkedin.com/in/jennifer-tang-nyc/detail/recent-activity/) and [LinkedIn](https://www.linkedin.com/in/jennifer-tang-nyc)    

Check out [Pollen](https://pollenators.herokuapp.com/)!  

## Mission
Pollen is an engaging and educational web application on forensic botany.  Forensic botany is a niche field of forensic science that uses plants or plant parts in investigating criminal cases.  It is not widely known to many, thus, our mission is to educate those who never heard of forensic botany and show its societal impact.  Additionally, we want to create a space for forensic botany enthusiasts to learn and discover cases they weren’t aware of.  

## Target Audience
The following are the three types of user we want to target in user story format:  
1. As a forensic botany enthusiast, I want access to a free and centralized resource so I can read, learn and study more criminal cases solved by investigating plant and plant parts found at crime scenes.  
2. As a true crime enthusiast, I want access to a free resource so I can read and learn more quirky criminal cases.  
3. As a curious individual who loves to read, I want access to a free resource so I can read and learn about.  

## Technology
The following is a diagram that shows the technologies we used for the front-end, back-end and deployment.  We used Discord and our phones to communicate with each other while working remotely.  We managed our tasks on a Trello board.  
![PollenTech](https://i.imgur.com/VNozQOY.png)

## Architecture
The following is a diagram that shows the architecture of Pollen from user-end to the server-end.  
![PollenArcht](https://i.imgur.com/nedafOo.png)

## Challenges
Pollen was developed at no cost by using open-source and free trial technologies.  Some of these technologies such as Heroku and PHP were new to us.  Thus, technical challenges were unavoidable but we persevere through them together.  The first challenge was the steep learning curve in connecting to Heroku's free PostgreSQL database.  After a week long attempt, we decided to switch to a MySQL database and use PHP to connect and query data.  Now, we have PHP files in addtion to HTML files we already wrote.  We already deployed the HTML files using Heroku's Node JS build-pack but with PHP files we had to switch to Heroku's PHP build-pack.  Thus, we had to re-write all our Heroku deployment files from Node JS to PHP-Express JS.  The second challenge was finding a free tool to connect our local MySQL database to Heroku.  We ended up learning and using CleanDB to build the connection.  

## Installation
Pollen is optimized on Google Chrome version 83.  If you don't already have it, please download it [here](https://www.google.com/chrome/?brand=CHBD&gclid=EAIaIQobChMI7pryt_qR6gIVF8DICh1g2QBcEAAYASABEgLwxfD_BwE&gclsrc=aw.ds).    

## Usage
Visit [Pollen](https://pollenators.herokuapp.com/) and follow the instructions below to begin using.  

1. Users will be introducted to Pollen through its landing page.  The landing page has a wealth of information about the web application.  It introduces the creators and features.  

![PollenLandingPage](https://i.imgur.com/x0k6H5A.png)

2. The main feature is the archive that pulls up a criminal case that was solved using forensic botany when a user clicks on a related plant image.  

![PollenArchive](https://i.imgur.com/gzmRTsP.gif)

3. A secondary feature is where a user could submit an article detailing a criminal case solved using forensic botany.  The user would fill out the form with their email address, link to article and a short description of the case.  

![PollenSubmit](https://i.imgur.com/svB5t7N.gif)

4. A fun feature is where a user is encouraged to visit a list of provided resources and take a multiple-choice challenge.  

![PollenChallenge](https://i.imgur.com/ul4B9de.gif)

## Creators
Jennifer Tang: [jennifer.tang@holbertonschool.com](mailto:jennifer.tang@holbertonschool.com), [Github](https://github.com/jenntang1) and [Twitter](https://twitter.com/jenntang1)  
A budding Full-Stack Software Engineer living in Brooklyn, NY with interest in data science/management and experience in marketing analytics and pricing strategies.  Jennifer hopes to combine the analytical skills developed from ten years in Marketing with the technical programming skills gained to develop impactful applications and software.  When Jennifer is not on a computer, she likes to run outdoors, read the news, solve Sudoku, bake cookies and play with her nieces.  

Flavio Vilchez Espinoza: [flavio.vilchezespinoza@holbertonschool.com](mailto:flavio.vilchezespinoza@holbertonschool.com) and [Github](https://github.com/fvesp18)  

Pollen: [pollen.forensicbotany@gmail.com](mailto:pollen.forensicbotany@gmail.com) and [Github](https://github.com/pollenators/pollen)  

## Contributing
Please feel free to fork this repository and enhance Pollen.  The following are some guidelines to adhere by:

* Keep README updated  
* Keep color and font style consistent  
* Keep descriptions short and simple
* New categories or improvements are welcome    
* Check spelling and grammar  

## Related Projects
None

## Licensing
None
