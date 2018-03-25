$(function () {

    function user(name) {
        this.name = name
    }

    var User1 = new user("Fabian");
    var User2 = new user("Julian");



    $('#user').text(User1.name)





});