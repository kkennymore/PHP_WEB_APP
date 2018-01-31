/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* content slider*/
(function (e) {
    function w(a) {
        var b = e("#slide" + a.instance + "_" + a.current), d = b.find("img");
        if (0 < d.length) {
            d.attr("src") != d.attr("data-src") && d.attr("src", d.attr("data-src"));
            if ("adjust" == a.options.ratio) {
                var c = new Image;
                c.onload = function () {
                    var e = a.slider, k = Math.round(c.height / c.width * a.calc_width);
                    b.css({height: k});
                    d.css({height: k});
                    e.css({height: k})
                };
                c.src = d.attr("src")
            }
            0 == b.find(".caption").length && void 0 != d.attr("title") && "" != d.attr("title") && b.append("<div class='caption'><p>" + d.attr("title") + "</p></div>").promise().done(function () {
                var a =
                        b.find(".caption").outerHeight(!0);
                b.find(".caption").css({bottom: -a}).delay(2500).animate({bottom: 0}, 2500)
            })
        }
    }
    function u(a) {
        a = e("#slide" + a.instance + "_" + a.current);
        if (0 < a.find(".caption").length) {
            var b = a.find(".caption").outerHeight(!0);
            a.find(".caption").css({bottom: -b}).delay(2500).animate({bottom: 0}, 2500)
        }
    }
    function y(a, b, d) {
        var c = e("#slide" + a.instance + "_" + a.current), r = e("#slide" + a.instance + "_" + b);
        b = a.options;
        var k = a.calc_width, g = a.calc_height, q = 0, l = 0;
        "n" == d ? (q = k + a.margin, l = g + a.margin) : "p" == d && (q = -(k +
                a.margin), l = -(g + a.margin));
        switch (b.animation_type) {
            case "horizontal":
                c.css({left: q}).show();
                r.animate({left: -q}, b.animation_duration, function () {
                    r.hide().toggleClass("active")
                });
                c.animate({left: 0}, b.animation_duration, function () {
                    e(this).toggleClass("active")
                });
                break;
            case "vertical":
                c.css({top: l}).show();
                r.animate({top: -l}, b.animation_duration, function () {
                    r.hide().toggleClass("active")
                });
                c.animate({top: 0}, b.animation_duration, function () {
                    e(this).toggleClass("active")
                });
                break;
            case "fade":
                r.fadeOut(b.animation_duration).toggleClass("active"),
                        c.fadeIn(b.animation_duration, function () {
                            e(this).toggleClass("active")
                        })
            }
    }
    function z(a, b) {
        var d = e("#slide" + a + "_" + b);
        d.children().is("audio,video") && (d = d.children("audio,video"), !1 === d[0].paused && d[0].pause())
    }
    function m(a) {
        if ("string" === typeof a) {
            var b = a.indexOf("_");
            -1 != b && (a = a.substr(b + 1))
        }
        return a
    }
    function t(a, b) {
        var d = a;
        "string" === typeof a && -1 != a.indexOf("%") && (d = parseInt(a.slice(0, -1)) / 100, d = parseInt(b * d));
        return d
    }
    function B(a) {
        var b = a.slider, d = a.slide, c = a.options, g = a.options.max_width, k = a.options.max_height,
                n = a.options.min_width, q = a.options.min_height, l = a.slider_ratio, h = a.calc_width, f = a.calc_height, h = Math.min(b.parent().width(), e(window).width() - 40);
        if ("initial" == c.ratio)
            l = A("muslider_ratio");
        else if ("continuous" == c.ratio)
            l = t(c.width, e(window).width()), l = t(c.height, e(window).height()) / l;
        else if ("adjust" == a.options.ratio) {
            var p = e("#slide" + a.instance + "_" + a.current), s = p.find("img"), m = new Image;
            m.onload = function () {
                var a = Math.round(m.height / m.width * h);
                p.css({height: a});
                s.css({height: a});
                b.css({height: a})
            };
            m.src = s.attr("src")
        }
        f = Math.round(h * l);
        0 < g && h > g && (h = g, f = Math.round(h * l), 0 < k && f > k && (f = k));
        0 < k && f > k && (f = k, h = Math.round(f / l), 0 < g && h > g && (h = g));
        h < n && (h = n, f = Math.round(h * l), f < q && (f = q));
        f < q && (f = q, h = Math.round(f / l), h < n && (h = n));
        d.css({width: h, height: f});
        d.children("img,video,iframe").css({width: h, height: f});
        b.css({width: h, height: f});
        a.calc_width = h;
        a.calc_height = f;
        a.slide = d;
        a.slider = b;
        return a
    }
    function C(a, b, d) {
        if (d) {
            var c = new Date;
            c.setTime(c.getTime() + 864E5 * d);
            d = "; expires=" + c.toGMTString()
        } else
            d = "";
        document.cookie =
                a + "=" + b + d + "; path=/"
    }
    function A(a) {
        a += "=";
        for (var b = document.cookie.split(";"), d = 0; d < b.length; d++) {
            for (var c = b[d]; " " == c.charAt(0); )
                c = c.substring(1, c.length);
            if (0 == c.indexOf(a))
                return c.substring(a.length, c.length)
        }
        return null
    }
    var g = [], n = 0, v = {init: function (a) {
            this.each(function () {
                var b = e(this), d = b.data("muslider"), c = e(), d = e(), r = e(), k = e(), m = e(), q = e(), l = e(), h = 0, f = 0.565, p = 0, s = 0, c = e.extend({width: "100%", height: "100%", max_width: 0, max_height: 0, reference_width: 0, reference_height: 0, min_width: 320, min_height: 180,
                    ratio: 0.5625, animation_type: "horizontal", animation_duration: 2000, animation_start: "manual", animation_interval: 4E3, responsive: "yes"}, a);
                switch (c.responsive) {
                    default:
                        c.responsive = !0;
                        break;
                    case "no":
                    case !1:
                    case 0:
                        c.responsive = !1
                }
                b.attr("data-id", "muslider_" + n);
                d = b.find(".slide");
                h = d.length - 1;
                d.each(function (a) {
                    e(this).attr("id", "slide" + n + "_" + a)
                });
                r = b.next(".navslide");
                k = r.find(".start").attr("data-id", "start_" + n);
                m = r.find(".stop").attr("data-id", "stop_" + n);
                q = r.find(".next").attr("data-id", "next_" + n);
                l = r.find(".prev").attr("data-id", "prev_" + n);
                if (!1 === c.responsive)
                    "number" == typeof c.height && "number" == typeof c.width ? (f = c.height / c.width, p = c.width) : p = t(c.width, b.parent().width());
                else if (p = t(c.width, b.parent().width()), "number" == typeof c.ratio)
                    f = c.ratio;
                else
                    switch (c.ratio) {
                        default:
                            f = 0.5625;
                            break;
                        case "reference":
                            "number" === typeof c.reference_height && "number" === typeof c.reference_width && 0 < c.reference_width && 0 < c.reference_height && (f = c.reference_height / c.reference_width);
                            break;
                        case "maximum":
                            "number" ===
                                    typeof c.max_height && "number" === typeof c.max_width && 0 < c.max_width && 0 < c.max_height && (f = c.max_height / c.max_width);
                            break;
                        case "initial":
                            f = A("muslider_ratio");
                            if (null == f || "undefined" == f)
                                p = t(c.width, e(window).width()), s = t(c.height, e(window).height()), f = s / p, C("muslider_ratio", f);
                            break;
                        case "continuous":
                            p = t(c.width, e(window).width()), s = t(c.height, e(window).height()), f = s / p
                    }
                s = Math.round(p * f);
                d.css({"box-sizing": "content-box", width: p, height: s, top: 0, left: 0});
                if ("undefined" != typeof d.children("img").attr("data-src") &&
                        d.children("img").attr("src") != d.children("img").attr("data-src")) {
                    var v = d.children("img").attr("src");
                    d.children("img").css({background: "url(" + v + ") no-repeat center center"})
                }
                d.children("img,video,iframe").css({"box-sizing": "content-box", width: p, height: s});
                d.not(":first").hide();
                d.filter(":first").toggleClass("active");
                b.css({"box-sizing": "content-box", width: p, height: s});
                b.data("muslider", {slider: b, slide: d, totslides: h, margin: 100, navslide: r, start: k, stop: m, prev: l, next: q, current: 0, timer: 0, options: c,
                    instance: n, slider_ratio: f, calc_width: p, calc_height: s});
                w(b.data("muslider"));
                q.on("click", function (a) {
                    a.preventDefault();
                    e.fn.muslider("next", e(this).attr("data-id"))
                });
                l.on("click", function (a) {
                    a.preventDefault();
                    e.fn.muslider("prev", e(this).attr("data-id"))
                });
                m.on("click", function (a) {
                    a.preventDefault();
                    e.fn.muslider("stop", e(this).attr("data-id"));
                    e(this).hide();
                    k.show()
                });
                k.on("click", function (a) {
                    a.preventDefault();
                    e.fn.muslider("start", e(this).attr("data-id"));
                    e(this).hide();
                    m.show()
                });
                var u, x;
                e(document).on("touchstart", b, function (a) {
                    u = (void 0 == a.originalEvent.touches ? a : a.originalEvent.touches[0] || a.originalEvent.changedTouches[0]).pageX
                });
                e(document).on("touchend", b, function (a) {
                    a = void 0 == a.originalEvent.touches ? a : a.originalEvent.touches[0] || a.originalEvent.changedTouches[0];
                    e(this).offset();
                    x = a.pageX - u;
                    -5 > x ? q.trigger("click") : 5 < x && l.trigger("click")
                });
                d = b.data("muslider");
                g[n] = d;
                !0 === c.responsive && e.fn.muslider("resize", n);
                "auto" == c.animation_start ? (m.show(), k.hide(), e.fn.muslider("start",
                        n)) : "manual" == c.animation_start && (e.fn.muslider("stop", n), m.hide(), k.hide());
                n++;
                return g
            })
        }, next: function (a) {
            a = m(a);
            var b = g[a], d = b.current;
            b.current++;
            b.current > b.totslides && (b.current = 0);
            z(a, d);
            w(b);
            y(b, d, "n");
            u(b);
            g[a] = b;
            return g
        }, prev: function (a) {
            a = m(a);
            var b = g[a], d = b.current;
            b.current--;
            0 > b.current && (b.current = b.totslides);
            z(a, d);
            w(b);
            y(b, d, "p");
            u(b);
            g[a] = b;
            return g
        }, resize: function (a) {
            a = m(a);
            var b = g[a];
            !0 === b.options.responsive && (b = B(b));
            g[a] = b;
            return g
        }, start: function (a) {
            a = m(a);
            var b = g[a];
            0 != b.timer && clearInterval(b.timer);
            b.timer = setInterval(function () {
                e.fn.muslider("next", a)
            }, b.options.animation_interval);
            g[a] = b;
            return g
        }, stop: function (a) {
            a = m(a);
            var b = g[a];
            clearInterval(b.timer);
            g[a] = b;
            return g
        }, destroy: function () {
            id = m(e(this).attr("data-id"));
            var a = g[id];
            a.prev.off();
            a.next.off();
            e.fn.muslider("stop", id);
            e.removeData(a, this.name);
            this.removeClass(this.name);
            this.unbind();
            this.element = null
        }};
    e(window).resize(function () {
        for (i = 0; i < n; i++)
            e.fn.muslider("resize", i)
    });
    e.fn.muslider = function (a) {
        if (v[a])
            return v[a].apply(this,
                    Array.prototype.slice.call(arguments, 1));
        if ("object" !== typeof a && a)
            e.error("Method " + a + " does not exist on jQuery.muslider");
        else
            return v.init.apply(this, arguments)
    }
})($);
// slider script ends here
