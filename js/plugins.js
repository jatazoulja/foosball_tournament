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
        function star(str) {

            location.href = "/index.php/game/match_up/" + str;
        }
        $obj.on('click',".start-match", function() {
            var data = $(this).data()
            if(data.vs[0] == data.vs[1]) {
                alert("Can't match same team");
                return;
            }
            star(data.vs.join("/"))
        });

        $obj.submit(function(e) {
            e.preventDefault();
            var data = $(this).serializeArray(),
                t=[];
            $.each(data, function(i) {
                t.push(data[i].value)
            });
            if(t[0] == t[1]) {
                alert("Can't match same team");
                return;
            }
            star(t.join("/"));
        })
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
    $.fn.minusScore =function(options) {
        var defaults = $.extend({

            }, options)
            $obj = $(this),
            self = this;
        $obj.on('click',".minus-score", function() {
            var data = $(this).data(),
                playersCont = $("#user-score-" + data.player + "-" + data.team),
                teamCont = $("#team-" + data.team),
                teamScore = teamCont.data().score,
                playerScore = playersCont.data().score;
            if(playerScore==0) return;
            if(teamScore==0) return;
            playersCont.data().score = playerScore-1;
            playersCont.text(playerScore-1)
            teamCont.data().score = teamScore-1;
            teamCont.text(teamScore-1)

        });
    }
}());
(function() {
    $.fn.resetScore =function(options) {
        var defaults = $.extend({

            }, options)
            $obj = $(this),
            self = this;
        $obj.on('click',".reset-match", function(e) {
            e.preventDefault();
            var teamCont = $("[data-score]"),
                teamScore = teamCont.data().score;

            teamCont.data().score = 0;
            teamCont.text(0)

        });
    }
}());
(function() {
    $.fn.submitScore =function(options) {
        var defaults = $.extend({

            }, options)
            $obj = $(this),
            self = this;
        $obj.on('click',".end-match", function(e) {
            e.preventDefault();
            var teamCont = $obj.find("[data-score]"),
                payload = {
                    team : [],
                    players : []
                }

            $.each(teamCont, function() {
                var data = $(this).data();
                if(data.team){
                    payload.team.push({
                        id: data.team.on_team,
                        score: data.score
                    });
                }
                if(data.details) {
                    payload.players.push({
                        id: data.details.id,
                        score: data.score
                    });
                }
            })
            $.ajax({
                data: payload,
                url: '/index.php/game/end_of_match',
                method: "POST",
                success: function(resp) {
                    console.log(resp)
                }
            })
        });
    }
}());


    (function() {
    $(document).ready(function() {
        $("#brackets").startMatch({});
        $("#start-game").startMatch({});
        $("#match-container").addScore({});
        $("#match-container").minusScore({});
        $("#match-container").resetScore({});
        $("#match-container").submitScore({});
    });// Place any jQuery/helper plugins in here.
    }());// Place any jQuery/helper plugins in here.
