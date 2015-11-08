<h1>Welcome to the final project</h1>

<h2>by the members of the MusicStoreMafia Mordechai, Eyal and Ronen</h2>

<strong>Information to file structure</strong>

<p>https://scotch.io/tutorials/angularjs-best-practices-directory-structure</p>

<p>

localhost
└──MusicStore
   ├──index.html (home page)
   ├──readme.md (readme for github)
   ├──Api (link to REST API files in app/Rest)
   │  └──index.php (GET / POST to core files; general REST file; links to app/REST/Routes)
   ├──App
   │  ├──Compontents (here are the templates; call by AngularJS routing)
   │  │	 ├──Account
   │  │  │  ├──accountView.html
   │  │  │  └──accountController.js
   │  │	 ├──Checkout
   │  │  │  ├──checkoutView.html
   │  │  │  └──checkoutController.js
   │  │	 ├──Home
   │  │  │  ├──homeView.html
   │  │  │  └──homeController.js
   │  │	 ├──Login
   │  │  │  ├──loginView.html
   │  │  │  └──loginController.js
   │  │	 └──Wishlist
   │  │     ├──wishlistView.html
   │  │     └──wishlistController.js
   │  ├──REST
   │  │  └──Slim (SLIM API-files)
   │  │  └──Routes (REST routes called by Api/index.php; use instances and functions of core objects incl. connection to DB)
   │  │     └──albums.php
   │  │     └──user.php
   │  │     └──login.php
   │  ├──RESTControllers (probably could be deleted)
   │  │     └──AlbumRestController.php
   │  └──Shared (probably could be deleted)
   │     ├──article
   │     └──sidebar
   ├──Assets (general app files)
   │  ├──Css
   │  │  └──style.css
   │  ├──Img (IMAGE files)
   │  ├──Js
   │  │  └──app.js (main AngularJS)
   │  └──Libs (AngularJS, ngRoute, ngAnimate; in our case links in index.html to CDN)
   └──Core (Object oriented PHP files; Models and controllers; View by AngularJS; GET and POST from / to Database)
      ├──Controller (manages the results from Database by model)
      │  └──AlbumController.php
      ├──Lib
      │  └──DB.class.php
      └──Model (manages connection to DB)
         ├──AlbumModel.php (require_once model.php and extends model)
         └──Model.php (require_once lib/DB.class.php for connection to DB)
</p>

<p>

Model

</p>