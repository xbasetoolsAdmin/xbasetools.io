
    function ajaxinfo() {
        $.ajax({
            type: 'GET',
            url: 'ajaxinfo.html',
            timeout: 10000,
 
            success: function(data) {
                if (data != '01') {
                    var data = JSON.parse(data);
                    for (var prop in data) {
                        $("#" + prop).html(data[prop]).show();
                    }
                } else {
                    window.location = "logout.html";
                }
            }
        });
 
    }
    setInterval(function() {
        ajaxinfo()
    }, 3000);
 
    ajaxinfo();
 
    $(document).keydown(function(event) {
        if (event.which == "17")
            cntrlIsPressed = true;
    });
 
    $(document).keyup(function() {
        cntrlIsPressed = false;
    });
 
    var cntrlIsPressed = false;
 
 
    function pageDiv(n, t, u, x) {
        if (cntrlIsPressed) {
            window.open(u, '_blank');
            return false;
        }
        var obj = {
            Title: t,
            Url: u
        };
        if (("/" + obj.Url) != location.pathname) {
            if (x != 1) {
                history.pushState(obj, obj.Title, obj.Url);
            } else {
                history.replaceState(obj, obj.Title, obj.Url);
            }
 
        }
        document.title = obj.Title;
        $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();