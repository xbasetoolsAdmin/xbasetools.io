<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<script>
function t() {
        $.ajax({
                type: "GET"
                , url: "ajaxinfo.html"
                , timeout: 1e4
                , success: function (t) {
                        if ("01" != t) {
                                t = JSON.parse(t);
                                for (var e in t) $("#" + e).html(t[e]).show()
                        } else window.location = "logout.html"
                }
        })
}
setInterval((function () {
        t()
}), 3e3), t(), $(document).keydown((function (t) {
        "17" == t.which && (e = !0)
})), $(document).keyup((function () {
        e = !1
}));
var e = !1;
$(window).on("popstate", (function (t) {
        location.replace(document.location)
})), $(window).on("load", (function () {
        $(".dropdown").hover((function () {
                        $(".dropdown-toggle", this).trigger("click")
                }))
                , function (o, i, n, l) {
                        if (e) return window.open(n, "_blank"), !1;
                        var a = {
                                Title: i
                                , Url: n
                        };
                        "/" + a.Url != location.pathname && (1 != l ? history.pushState(a, a.Title, a.Url) : history.replaceState(a, a
                                .Title, a.Url)), document.title = a.Title, $("#mainDiv").html(
                                '<div id="mydiv"><img src="layout/img/load.gif" class="ajax-loader"></div>').show(), $.ajax({
                                type: "GET"
                                , url: "divPage" + o + ".html"
                                , success: function (e) {
                                        $("#mainDiv").html(e).show(), newTableObject = document.getElementById(
                                                "table"), 
                                             0 == l && t()
                                }
                        }), "function" == typeof stopCheckBTC && stopCheckBTC()
                }(7, "Premium/Dating/Shopping - JeruxShop", "", 1), new Clipboard(".copyit").on("success", (function (t) {
                        var e, o;
                        e = t.trigger, o = "Copied!", console.log("hide-1"), $(e).tooltip("hide").attr(
                                        "data-original-title", o).tooltip("show"), console.log("show")
                                , function (t) {
                                        setTimeout((function () {
                                                $(t).tooltip("hide"), console.log("hide-2")
                                        }), 1e3)
                                }(t.trigger), t.clearSelection()
                }))
})), $("#filterbutton").click((function () {
        $("#table tbody tr").each((function () {
                var t = $.trim($(this).find("#account_country").text().toLowerCase())
                        , e = $.trim($(this).find("#account_sitename").text().toLowerCase())
                        , o = $.trim($(this).find("#account_seller").text().toLowerCase())
                        , i = $.trim($('select[name="account_country"]').val().toLowerCase())
                        , n = $.trim($('input[name="account_sitename"]').val().toLowerCase())
                        , l = $.trim($('select[name="account_seller"]').val().toLowerCase());
                t != i && "" != i || -1 == e.indexOf(n) || o != l && "" != l ? $(this).hide() : $(this).show()
        })), $("#filterbutton").prop("disabled", !0)
})), $(".filterselect").change((function () {
        $("#filterbutton").prop("disabled", !1)
})), $(".filterinput").keyup((function () {
        $("#filterbutton").prop("disabled", !1)
}));
</script>