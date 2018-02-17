# Facesnoop v0.1

## Introduction

Facesnoop is an exact clone of facebook, it's purpose is for social engineering attacks using the phishing method. It cointains mobile and desktop platforms so you can get the most out of users.

## How it works

Well all i did is change the login form's target to my custom PHP script, then email credentials then redirect somewhere. However facebook's security is really strong, and dynamically sets attributes to submit buttons. So i remove all event listeners from the html and mimic a button just like facebook.

## How to use

Edit the logen.php file inside the mobile folder and place your own email. Then drop the files on an apache or nginx server.
