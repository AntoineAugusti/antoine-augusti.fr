$(document).ready(function ()
{
    $("#wrap").fadeIn(2000);
    $('#header').delay(100).fadeIn(2000);
    $("#logo").delay(1000).fadeIn(3000);
    $("#content").delay(2000).fadeIn(3000);
    $("#footer").delay(2000).fadeIn(3000);

    $("#flags_translate span").click(function ()
    {
        // Get the first class of the span (language)
        var translate = $(this).attr("class").split(' ')[0];
        var div_to_show = '#translate_transition p.' + translate;

        if (translate == 'french')
        {
            var div_to_hide = '#translate_transition p.english';
        }
        else
        {
            var div_to_hide = '#translate_transition p.french';
        }

        $.post("http://www.antoine-augusti.fr/ajax/translate.php",
        {
            translate: translate
        },

        function (data)
        {
            // The lang session has been set
            if (data == 1)
            {
                // Remove the div with the other language and remove the footer
                $("#footer").remove();
                $(div_to_hide).remove();

                // Fade out the content and refresh the page
                $("#content, #header, #wrap, #logo").fadeOut(1000);
                $("#translate_transition").fadeIn(1500, function ()
                {
                    $("#translate_transition").delay(3300).fadeOut(200);
                });

                setTimeout(function ()
                {
                    window.location = 'http://www.antoine-augusti.fr';
                }, 5000);
            }
        });

        return false;
    });
});