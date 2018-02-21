# Facesnoop v0.1

![](https://i.imgur.com/h63Fp9H.png)

## Introduction

Facesnoop is an exact clone of facebook, it's purpose is for social engineering attacks using the phishing method. It cointains both mobile and desktop platforms.

## How it works

All i did, is change the login form's target to my custom PHP script, then using PHP i send an email with the credentials, then redirect somewhere. However facebook's security is really strong, and dynamically sets attributes to submit buttons, so i remove all event listeners from the html and mimic a button just like facebook.

## How to use 

1) Download .zip

2) Extract the .zip

3) Open the mobile folder

4) Edit the logen.php file inside the mobile folder and place your own email (Generate a fake email from https://temp-mail.org/en/ )

5) That's it, now drop every file from within mobile directory to your apache server using FTP

6) Send the link to your victim

## Why the code is ugly

Because i didn't write it, i scraped it from facebook. The code I wrote, is indented and clear.

## Special feauture

This project runs under https! i have no idea why, but OMG!

## Contributing

Feel free to contribute, i don't bite.
