// Avoid `console` errors in browsers that lack a console.
function DateParse(date) {
    var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ],
        month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ],
        parsedDate = '',
        date = new Date(date),
        today = new Date();

    function formatDate(fdate) {
        var fDay = fdate.getDay(),
            fMonth = fdate.getMonth(),
            fYear = fdate.getFullYear();
        return month[fMonth] +  " " + fDay + " " + fYear;
    }
    var theDate = formatDate(date);
    switch (true) {
        // is today? return time
        case (theDate == formatDate(today)):
            parsedDate = 'Today at ' + date.getHours()+':'+date.getMinutes();
            break;
        // get yesterday
        case (date.getDate() == today.getDate() - 1):
            parsedDate = 'Yesterday at ' + date.getHours()+':'+date.getMinutes();
            break;
        // is this year?
        case (theDate.indexOf(today.getFullYear()) !== -1):
            parsedDate = theDate.replace(today.getFullYear(), '');
            break;
        default:
            parsedDate = theDate;
    }

    return parsedDate
}

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
    $.fn.timeline =function(options) {
        var defaults = $.extend({
            }, options)
            timeline = $(this),
            self = this,
            dateCont = timeline.find('.date-played');

        $.each(dateCont, function() {
            var converttime = $(this).text(),
                test = new Date(converttime);
            $(this).text(DateParse(test.getTime()));
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
            $obj2 = $(this),
            self = this;
        $obj2.on('click',".end-match", function(e) {
            e.preventDefault();
            var teamCont = $obj2.find("[data-score]"),
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
            });
            $.ajax({
                data: payload,
                url: '/index.php/game/end_of_match',
                method: "POST",
                success: function(resp) {
                    if(resp.match || resp.indexOf('match_id') != -1) {
                        location.href = '/index.php';
                    }
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
        $("#feeds").timeline({});
    });// Place any jQuery/helper plugins in here.
    }());// Place any jQuery/helper plugins in here.
