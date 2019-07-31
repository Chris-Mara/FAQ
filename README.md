# FAQ

##Introduction

The feature I created for this project consists of "Breadcrumbs" or trailing links to help the user navigate the site.

##Explanation
#####As a user navigating the site, I would notice a serious lack of "back" buttons. 

This caused the site to feel unfinished as there as you would have to use the "go back" button built into the browser. To combat this, one could just implement this button into the site. This, however, could lead to the user feeling lost as they wander around the pages of the site.

#####As a user, I would like to know where I have been on the site and how I can return to those pages.

The Breadcrumb feature allows a user to see the path that they have taken into the site via the various links that they have clicked. 

#####As a user, no matter how deep into the site's directory I am, I can always return to the beginning.

The breadcrumbs are made of dynamic links that always begin with the Home page. From here span links to the specific question or answer that the user in currently viewing.

##How to Use
After logging in, when you click on a link in the site, the page you are brought to will have a bar at the top of your screen. Depending on how deep into the site you are, this bar will contain a number of links. This links are named after the pages that you have been starting at the home page. 

The deepest link in the bar, which will be greyed out, represents your current location in the site. The links to the left of it are the "breadcrumb trail" to lead to back to the home page.

You may click any of these links to bring you back to that specific page, which will present a new breadcrumb bar. 
