/**
 * Created by ronenguttman on 22.10.15.
 */

/* New AngularJS app, gets ngRoute and ngAnimate */
var app = angular.module( 'MusicStore', ['ngRoute', 'ngAnimate'] );

/* Configuration routes */
app.config( function( $routeProvider ) {
    $routeProvider

        /* Route: Home */
        .when('/', {
            templateUrl : 'app/components/home/homeView.html',
            controller : 'homeController'
        })

        .when('/home', {
            templateUrl : 'app/components/home/homeView.html',
            controller : 'homeController'
        })

        .when ('/account', {
            templateUrl : 'app/components/account/accountView.html',
            controller : 'accountController'
        })

        .when ('/wishlist', {
            templateUrl : 'app/components/wishlist/wishlistView.html',
            controller : 'wishlistController'
        })

        .when ('/checkout', {
            templateUrl : 'app/components/checkout/checkoutView.html',
            controller : 'checkoutController'
        })

        .when ('/login', {
            templateUrl : 'app/components/login/loginView.html',
            controller : 'loginController'
        });
});