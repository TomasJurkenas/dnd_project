!(function (a) {
    "use strict";
    a.fn.typer = function (b) {
        function c(a, b) {
            k < b.length
                ? ((g = b[k].split("")),
                    (h = g.length),
                    setTimeout(function () {
                        a.append(g[j]),
                            j++,
                            j < h
                                ? c(a, b)
                                : ((j = 0),
                                    k++,
                                    setTimeout(function () {
                                        e(a, function () {
                                            c(a, b);
                                        });
                                    }, i.backspaceDelay));
                    }, i.typeSpeed))
                : i.repeat && d(a, b);
        }
        function d(a, b) {
            (k = 0),
                setTimeout(function () {
                    c(a, b);
                }, i.repeatDelay);
        }
        function e(a, b) {
            setTimeout(function () {
                a.text(a.text().slice(0, -1)), 0 < a.text().length ? e(a, b) : "function" == typeof b && b();
            }, i.backspaceSpeed);
        }
        function f(a) {
            setInterval(function () {
                a.fadeOut(400).fadeIn(400);
            }, 900);
        }
        let g,
            h,
            i = a.extend({ typeSpeed: 60, backspaceSpeed: 20, backspaceDelay: 800, repeatDelay: 1e3,
                repeat: !0, autoStart: !0, startDelay: 100, useCursor: !0, strings: [""] }, b),
            j = 0,
            k = 0;
        return this.each(function () {
            let b,
                d,
                e = a(this);
            i.autoStart &&
            (e.append('<span class="typed"></span>'),
            i.useCursor && (e.append('<span class="typed_cursor">&#x7c;</span>'), (d = e.children(".typed_cursor")), f(d)),
                (b = e.children(".typed")),
                setTimeout(function () {
                    c(b, i.strings);
                }, i.startDelay));
        });
    };
})(jQuery);



$("#text").typer({
    strings:["Welcome to the world of Dunderdak",
        "The village of Yondru was attacked, we need your help ",
        "You must recover a stolen artifact",
        "Now choose your hero",
        "Choose your warrior",
        "Pick up your weapon",
        "Can you just choose?",
        "Okay this is annoying just choose!"],
    typeSpeed: 100,
    backspaceSpeed: 20,
    backspaceDelay: 800,
    repeatDelay: 1000,
    repeat: false,
    autoStart: true,
    startDelay: 100,

});


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let info = document.getElementsByClassName("infoBoard");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex-1].style.display = "grid";
    info[slideIndex-1].className += " active";
}
function save_char(id, type) {
    $.post('/savechar.php', {'id': id, 'type': type})
        .done(function(data) {
            alert('ok');
        });
}
$.get('/logstatus.php', function(data) {
    $('#status').html(data);
});
$('#out').click(function() {
    window.location='/logout.php';
});

