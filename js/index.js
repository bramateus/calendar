// sequential order
// advances 3 segments each click
let _target, _deg = 0, _random = 0;
let _valores = ["79.90", "69.90", "79.90", "49.90", "79.90", "69.90", "79.90", "59.90", "79,90"];

_random = Math.floor((Math.random() * 8) + 1);
console.log(_valores[_random]);

function ordSequential() {
    // order : 1,4,7,2,5,8,3,6 ... then loops
    return _deg = _deg + (45 * _random) + 1080;
}

jQuery(document).ready(function ($) {
    //$(".skills-wheel .btn").on("click", function (e) {

    // select algorithm sequential, random or preset :
    ordSequential();
    _target = (_deg - (360 * parseInt(_deg / 360))) / 45;
    // start animation
    // reset opacity of all segments to 1
    $(".fancybox").parent("li").velocity({
        opacity: 1
    }, {
        duration: 100,
        complete: function () {
            let vp = _valores[_random];
            let c = $("#idmatricula").val();
            $.post('uproleta.php', {vp: vp, c: c}, function (data) {});

            $(".wheel").velocity({
                rotateZ: "-" + _deg + "deg"
            }, {
                duration: 4000,
                complete: function (elements) {
                    $("#valordesconto").text(_valores[_random]);
                    // after spinning animation is completed, set opacity of target segment's parent
                    $(".fancybox").parent("li").eq(_target).velocity({
                        //opacity: 0.4
                    }, {
                        duration: 100,
                        // after opacity is completed, fire targeted segment in fancybox
                        complete: function () {
                            $(".fancybox").eq(_target).trigger("click");
                        } // third animation completed
                    }); // nested velocity 2
                } // second animation completed
            }); // nested velocity 1
        } // first animation completed
    }); // velocity
    return false;
}); // click

// initialize fancybox
$(".fancybox").fancybox({
    maxWidth: "85%"
    //});
}); // ready
