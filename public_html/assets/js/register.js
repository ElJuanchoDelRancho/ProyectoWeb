$(document).ready(function() {
    var err = $(".error")
      , span = err.children("span")
      , btn = $(".btn")
      , flag = !1;
    showError = function(a, t, e) {
        span.html(a),
        err.addClass("active"),
        t.addClass("disabled").prop("disabled", !0).val("Verificando..."),
        setTimeout(function() {
            err.removeClass("active"),
            t.removeClass("disabled").prop("disabled", !1),
            t.val(e)
        }, 2500)
    }
    ,
    $("form").submit(function(a) {
        flag = !1,
        a.preventDefault()
    }),
    getRFC = function() {
        for (var a = $("#name").val(), t = $("#apellido_paterno").val(), e = $("#apellido_materno").val(), r = $("#birhtdate").val().split("-"), n = Math.round(10 * Math.random()), s = Math.round(10 * Math.random()), i = "", o = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", d = 0; d < 1; d++)
            i = o.charAt(Math.floor(Math.random() * o.length));
        var l = (t.substring(0, 2) + e.substring(0, 1) + a.substring(0, 1) + r[0].substring(2, 4) + r[1] + r[2] + n + i + s).toUpperCase();
        $("#rfc").val(l)
    }
    ,
    ajaxFirstStep = function(a) {
        var t = {
            username: $("input[name=username]").val(),
            password: $("input[name=password]").val(),
            cpassword: $("input[name=cpassword]").val(),
            email: $("input[name=email]").val(),
            cemail: $("input[name=cemail]").val(),
            card: $("input[name=card]").val()
        };
        $.ajax({
            url: "./index_ajax.php?controller=Users&action=General",
            type: "POST",
            dataType: "json",
            data: t,
            beforeSend: function() {
                a.addClass("disabled").prop("disabled", !0).val("Verificando...")
            }
        }).done(function(t) {
            if (t.error) {
                showError(t.message, a, "Continuar");
                for (var e = 0; e < t.target.length; e++)
                    $(t.target[e]).addClass("error")
            } else
                a.removeClass("disabled").prop("disabled", !1),
                a.val("Continuar"),
                $(".step-1").slideUp(),
                a.fadeOut(500),
                setTimeout(function() {
                    $(".step-2").slideDown(),
                    $(".step-2-btn").fadeIn(500),
                    $(".icon-step").eq(0).addClass("done")
                }, 500),
                getRFC()
        })
    }
    ,
    validateFirstStep = function(button) {
        var flag = !1
          , inputs = $(".step-1 input");
        $(inputs).each(function() {
            if (!flag && 0 == $(this).val().length) {
                var a = $(this).attr("data-empty-message");
                $(this).addClass("error"),
                showError(a, button, "Continuar"),
                flag = !0
            }
        }),
        $(inputs).each(function() {
            if (!flag && $(this).val().length < eval($(this).attr("data-min"))) {
                var message = $(this).attr("data-min-message");
                $(this).addClass("error"),
                showError(message, button, "Continuar"),
                flag = !0
            }
        });
        var email = $("#email");
        flag || /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email.val()) || (email.addClass("error"),
        showError("Correo no tiene el formato correcto", button, "Continuar"),
        flag = !0);
        var cemail = $("#cemail");
        flag || /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(cemail.val()) || (cemail.addClass("error"),
        showError("Confirmar correo no tiene el formato correcto", button, "Continuar"),
        flag = !0);
        var card = $("#card");
        if (!flag)
            switch ($(".card-icon").attr("data-icon")) {
            case "cc-mastercard":
                16 != card.val().length && (card.addClass("error"),
                showError("El Número de tu tarjeta de Crédito Mastercard debe de tener 16 dígitos", button, "Continuar"),
                flag = !0);
                break;
            case "cc-visa":
                16 != card.val().length && (card.addClass("error"),
                showError("El Número de tu tarjeta de Crédito Visa debe de tener 16 dígitos", button, "Continuar"),
                flag = !0);
                break;
            case "cc-amex":
                16 != card.val().length && (card.addClass("error"),
                showError("El Número de tu tarjeta de Crédito American Express debe de tener 16 dígitos", button, "Continuar"),
                flag = !0);
                break;
            default:
                card.addClass("error"),
                showError("El Número de tu tarjeta de Crédito no es válido, solo aplica: Mastercard, Visa y American Express", button, "Continuar"),
                flag = !0
            }
        if (!flag) {
            for (var num = card.val(), cifra = null, cifra_cad = null, suma = 0, i = 0; i < num.length; i += 2)
                cifra = 2 * parseInt(num.charAt(i)),
                cifra > 9 && (cifra_cad = cifra.toString(),
                cifra = parseInt(cifra_cad.charAt(0)) + parseInt(cifra_cad.charAt(1))),
                suma += cifra;
            for (var i = 1; i < num.length; i += 2)
                suma += parseInt(num.charAt(i));
            suma % 10 != 0 && (card.addClass("error"),
            showError("El Número de tu tarjeta de Crédito no es válido, por favor vuelva a ingresarlo.", button, "Continuar"),
            flag = !0)
        }
        var cvv = $("#cvv");
        if (!flag)
            switch ($(".card-icon").attr("data-icon")) {
            case "cc-mastercard":
                3 != cvv.val().length && (cvv.addClass("error"),
                showError("El CVV de tu tarjeta de Crédito Mastercard debe de tener 3 dígitos", button, "Continuar"),
                flag = !0);
                break;
            case "cc-visa":
                3 != cvv.val().length && (cvv.addClass("error"),
                showError("El CVV de tu tarjeta de Crédito Visa debe de tener 3 dígitos", button, "Continuar"),
                flag = !0);
                break;
            case "cc-amex":
                3 != cvv.val().length && (cvv.addClass("error"),
                showError("El CVV de tu tarjeta de Crédito American Express debe de tener 3 dígitos", button, "Continuar"),
                flag = !0)
            }
        return !flag
    }
    ,
    $("form input.step-1-btn").click(function() {
        validateFirstStep($(this)) && ajaxFirstStep($(this))
    }),
    $("form input").focus(function() {
        $(this).removeClass("error").siblings(".placeholder, .unhide").addClass("active")
    }),
    $("form input").blur(function() {
        0 == $(this).val().length && "date" != $(this).attr("type") && $(this).siblings(".placeholder, .unhide").removeClass("active")
    }),
    $("form .unhide").click(function() {
        var a = $(this).children("svg")
          , t = $(this).siblings("input");
        t.val().length > 0 && ("eye" == a.attr("data-icon") ? (t.attr("type", "text"),
        a.attr("data-icon", "eye-slash")) : "eye-slash" == a.attr("data-icon") && (t.attr("type", "password"),
        a.attr("data-icon", "eye")))
    }),
    setMinDate = function() {
        var a = new Date
          , t = $("#expdate")
          , e = a.getFullYear()
          , r = a.getDate() < 10 ? "0" + a.getDate() : a.getDate()
          , n = e + "-" + (a.getMonth() + 2 < 10 ? "0" + (a.getMonth() + 2) : a.getMonth() + 1) + "-" + r;
        t.attr("min", n)
    }
    ,
    setMinDate(),
    updateCard = function(a) {
        var t = $("svg.card-icon");
        t.fadeOut(300),
        t.attr("data-icon", a),
        setTimeout(function() {
            t.fadeIn(300)
        }, 300)
    }
    ,
    $("#card").keyup(function() {
        var a = $(this).val()
          , t = 0;
        a.length > 0 && a.length >= 1 ? (4 == (t = parseInt(a.substring(0, 1))) && updateCard("cc-visa"),
        3 == t && updateCard("cc-amex"),
        5 == t && updateCard("cc-mastercard")) : updateCard("question")
    }),
    getStates = function() {
        $.ajax({
            url: "./index_ajax.php?controller=States&action=States",
            type: "POST"
        }).done(function(a) {
            $("#states").html(a)
        })
    }
    ,
    getStates(),
    getCities = function(a) {
        var t = {
            id: a
        };
        $.ajax({
            url: "./index_ajax.php?controller=Cities&action=Cities",
            type: "POST",
            data: t
        }).done(function(a) {
            $("#cities").html(a)
        })
    }
    ,
    $("select#states").change(function() {
        $(this).val().length > 0 && (getCities($(this).val()),
        $(this).parent().removeClass("error"))
    }),
    getColonies = function(a) {
        var t = {
            id: a
        };
        $.ajax({
            url: "./index_ajax.php?controller=Colonies&action=Colonies",
            type: "POST",
            data: t
        }).done(function(a) {
            $("#colonies").html(a)
        })
    }
    ,
    $("select#cities").change(function() {
        $(this).val().length > 0 && (getColonies($(this).val()),
        $(this).parent().removeClass("error"))
    }),
    $("select#colonies").change(function() {
        $(this).val().length > 0 && $(this).parent().removeClass("error")
    }),
    validateSecondStep = function(a) {
        var t = !1
          , e = $(".step-2 select");
        $(e).each(function() {
            if (!t && "null" == $(this).val()) {
                $(this).parent().addClass("error");
                var e = $(this).attr("data-empty-message");
                showError(e, a, "Continuar"),
                t = !0
            }
        });
        var r = $(".step-2 input:not('#numint')");
        return $(r).each(function() {
            if (!t && 0 == $(this).val().length) {
                var e = $(this).attr("data-empty-message");
                $(this).addClass("error"),
                showError(e, a, "Continuar"),
                t = !0
            }
        }),
        !t
    }
    ,
    $("form input.step-2-btn").click(function() {
        validateSecondStep($(this)) && ($(".step-2").slideUp(),
        $(this).fadeOut(500),
        setTimeout(function() {
            $(".step-3").slideDown(),
            $(".step-3-btn").fadeIn(500),
            $(".icon-step").eq(1).addClass("done")
        }, 500))
    }),
    validateThirdStep = function(a) {
        var t = !1
          , e = $(".step-3 #reason");
        if (!t && 0 == e.val().length) {
            var r = e.attr("data-empty-message");
            e.addClass("error"),
            showError(r, a, "Continuar"),
            t = !0
        }
        var n = $(".step-3 #type");
        if (!t && "null" == n.val()) {
            n.parent().addClass("error");
            r = n.attr("data-empty-message");
            showError(r, a, "Continuar"),
            t = !0
        }
        return !t
    }
    ,
    insertData = function(a) {
        var t = $("form input:not(input[type=submit], input[type=button]), form select");
        $.ajax({
            url: "./index_ajax.php?controller=Users&action=Register",
            type: "POST",
            data: t
        }).done(function(a) {
            a.error || (setTimeout(function() {
                $(".step-4").slideDown(),
                $(".icon-step").eq(2).addClass("done")
            }, 500),
            setTimeout(function() {
                location.href = "./index.php"
            }, 5e3))
        })
    }
    ,
    $("form input.step-3-btn").click(function() {
        validateThirdStep($(this)) && ($(".step-3").slideUp(),
        $(".send").slideUp(500),
        insertData($(this)))
    })
});
