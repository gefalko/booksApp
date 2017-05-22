'use strict';
var app = angular.module('BooksApp', []);

app.factory('Books', function($http) {

	return {
		getList: getList
	};
	
    function getList(){
		return $http.get('books.php');
	};

});

app.factory('Cart', function(){

    var cart = this;
    cart.items = [];
    cart.totalPrice = 0;
    cart.currency = 'EUR';
    cart.addItems = addItems;
    cart.removeItem = removeItem;
    
    function addItems(items){
        cart.items = cart.items.concat(items);
        recountPrice();
    }

    function removeItem(item){
        var index = cart.items.indexOf(item);

        if(index > -1){
            cart.items.splice(index, 1);
        }

        recountPrice();
    }

    function recountPrice(){
        var sum = 0;
        for(var item of cart.items){
            sum += item.price;
        }
        cart.totalPrice = sum.toFixed(2);
    }

    return cart;
});

app.controller('BooksCtrl', function($scope, Books, Cart) {

	var vm = this;

    vm.books = [];
    vm.totalBooks = 0;
    vm.selection = [];
    vm.toogleSelection = toogleSelection;
    vm.addToCart = addToCart;
    vm.removeFromCart = removeFromCart;
    vm.cart = Cart;

    vm.orderProp = 'title';
    vm.reverse = true;
    vm.sortBy = sortBy;
   
    activate();

    function activate(){
        Books.getList().then(function(response) {
            vm.books = response.data;
            vm.totalBooks = vm.books.length;
        });
    }

    function addToCart(){
        vm.cart.addItems(vm.selection);
        
        vm.books = vm.books.filter(function(el) {
            return vm.selection.indexOf(el) < 0;
        });
        
        vm.selection = [];
    }

    function removeFromCart(book){
        vm.books.push(book);
        vm.cart.removeItem(book);
    }

    function toogleSelection(book){
        var index = vm.selection.indexOf(book);

        if(index > -1){
            vm.selection.splice(index, 1);
        }else{
            vm.selection.push(book);
        }
    }

    function sortBy(prop){
        vm.reverse = (vm.orderProp === prop) ? !vm.reverse : false;
        vm.orderProp = prop;
    }

});
