// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

(function() {
    $.fn.startMatch =function(options) {
        var defaults = $.extend({

            }, options)
            $obj = $(this),
            self = this;
        $obj.on('click',".start-match", function() {
            var data = $(this).data()
            location.href = "/index.php/game/match_up/" + data.vs.join("/");
            console.log(data);
        });
    }
}());

(function() {
    $.fn.addScore =function(options) {
        var defaults = $.extend({

            }, options)
            $obj = $(this),
            self = this;
        $obj.on('click',".add-score", function() {
            var data = $(this).data(),
                playersCont = $("#user-score-" + data.player + "-" + data.team),
                teamCont = $("#team-" + data.team),
                teamScore = teamCont.data().score,
                playerScore = playersCont.data().score;

            playersCont.data().score = playerScore+1;
            playersCont.text(playerScore+1)
            teamCont.data().score = teamScore+1;
            teamCont.text(teamScore+1)

        });
    }
}());


    (function() {
    $(document).ready(function() {
        $("#brackets").startMatch({});
        $("#match-container").addScore({});
    });// Place any jQuery/helper plugins in here.
    }());// Place any jQuery/helper plugins in here.
