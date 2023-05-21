

            $(document).keydown(function(event) {
                if (event.which == "17")
                    cntrlIsPressed = true;
            });
 
            $(document).keyup(function() {
                cntrlIsPressed = false;
            });
 
            var cntrlIsPressed = false;
 
 
            $(window).on("popstate", function(e) {
                location.replace(document.location);
 
            });
 
 
            $(window).on('load', function() {
                $('.dropdown').hover(function() {
                    $('.dropdown-toggle', this).trigger('click');
                });
                pageDiv(9, 'leads - Xbasetools', 'tutorials', 1);
                var clipboard = new Clipboard('.copyit');
                clipboard.on('success', function(e) {
                    setTooltip(e.trigger, 'Copied!');
                    hideTooltip(e.trigger);
                    e.clearSelection();
                });
 
            });
 
 
            function setTooltip(btn, message) {
                //console.log("hide-1");
                $(btn).tooltip('hide')
                    .attr('data-original-title', message)
                    .tooltip('show');
                //console.log("show");
            }
 
            function hideTooltip(btn) {
                setTimeout(function() {
                    $(btn).tooltip('hide'); /*console.log("hide-2");*/
                }, 1000);
            }