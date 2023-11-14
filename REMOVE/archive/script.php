

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/vendors/uikit.min.js"></script>
<script src=" js/vendors/utilities.min.js"></script>
<script src="js/vendors/trading-widget.min.js"></script>
<script src="js/vendors/market-plugin.min.js"></script>
<script src="js/vendors/particles.min.js"></script>
<script src="js/config-particles.js"></script>
<script src="js/config-theme.js"></script>

<script>
    $('document').ready(function() {
        var x = 0;
        setInterval(function() {
            var coins = ['es.png', 'eth.html', 'ap.html', 'dash.html', 'gg.html', 'xrp.html', 'es.html', 'ltc.html', 'ms.html', 'btc.png'];
            $('#coin').css('transform', 'rotateY(180deg)');
            setTimeout(function() {
                $('#coinImage').attr('src', 'images/coins/' + coins[x] + '');
            }, 430);
            setTimeout(function() {
                $('#coin').css('transform', 'rotateY(0deg)');
            }, 440);
            x++;
            if (x > (coins.length - 1)) {
                x = 0;
            }
        }, 4000);


        var i = 0;
        var b = 0;

        setInterval(function() {
            var msg = ['Stocks', 'CDFs on Fx', 'Real Estate', 'Oil and Gas', 'Cryptocurrency'];

            if (b > (msg.length - 1)) {
                b = 0;
            }
            typeWriter(msg[b]);
            b++;
        }, 8000);

        function typeWriter(x) {
            console.log(x);
            var speed = x.length / 0.09;
            if (i < x.length) {
                document.getElementById("txt").innerHTML += x.charAt(i);
                i++;
                setTimeout(typeWriter, speed, x);
            } else {
                i = 0;
                x = '';
                setTimeout(function() {
                    document.getElementById("txt").innerHTML = x;
                }, 5000);

            }
        }

    });

</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout,
            autoDisplay: true
        }, 'google_translate_element');
    }

</script>
<script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<!-- Flag click handler -->
<script type="text/javascript">
    $('.translation-links a').click(function() {
        var lang = $(this).data('lang');
        var $frame = $('.goog-te-menu-frame:first');
        if (!$frame.size()) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
        return false;
    });

</script>

<script>
    function triggerClick(x) {
        document.querySelector(x).click();
    }

</script>


<script>
    //Get the button
    var mybutton = document.getElementById("goUp");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>



<script>
function showTime(){
var date = new Date();
var h = date.getHours(); // 0 - 23
var m = date.getMinutes(); // 0 - 59
var s = date.getSeconds(); // 0 - 59
var session = "AM";

if(h === 0){
    h = 12;
}

if(h > 12){
    h = h - 12;
    session = "PM";
}

h = (h < 10) ? "0" + h : h;
m = (m < 10) ? "0" + m : m;
s = (s < 10) ? "0" + s : s;

var time = h + " : " + m + " : " + s + " " + session;
document.getElementById("MyClockDisplay").innerText = time;
document.getElementById("MyClockDisplay").textContent = time;

setTimeout(showTime, 1000);

}

showTime();

 function btc_to_usd(valNum) {
 var calc = valNum * 28993.14;
document.getElementById("val_usd").value = calc.toFixed(2);
}

function usd_to_btc(valNum) {
var calc = valNum / 28993.14;
document.getElementById("val_btc").value = calc.toFixed(8);
}
</script>

<script>
    // WORK IN PROGRESS BELOW

    $('document').ready(function() {


        // RESTYLE THE DROPDOWN MENU
        $('#google_translate_element').on("click", function() {

            // Change font family and color
            $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
                .css({
                    'color': '#544F4B',
                    'font-family': 'Roboto',
                    'width': '100%'
                });
            // Change menu's padding
            $("iframe").contents().find('.goog-te-menu2-item-selected').css('display', 'none');

            // Change menu's padding
            $("iframe").contents().find('.goog-te-menu2').css('padding', '0px');

            // Change the padding of the languages
            $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');

            // Change the width of the languages
            $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
            $("iframe").contents().find('td').css('width', '100%');

            // Change hover effects
            $("iframe").contents().find(".goog-te-menu2-item div").hover(function() {
                $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
            }, function() {
                $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
            });

            // Change Google's default blue border
            $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

            // Change the iframe's box shadow
            $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');



            // Change the iframe's size and position?
            $(".goog-te-menu-frame").css({
                'height': '100%',
                'width': '100%',
                'top': '0px'
            });
            // Change iframes's size
            $("iframe").contents().find('.goog-te-menu2').css({
                'height': '100%',
                'overflow': 'scroll',
                'width': '100%'
            });
        });
    });

</script>
