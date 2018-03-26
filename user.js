$(function () {

    function user(name) {
        this.name = name
    }

    var User1 = new user("Fabian");
    var User2 = new user("Julian");

    $('.username1').text(User1.name)
    $('.username2').text(User2.name)

});