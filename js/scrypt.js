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

        $.post("http://www.antoine-augusti.fr/ajax/translate.php",
        {
            translate: translate
        },

        function (data)
        {
            // The lang session has been set
            if (data == 1)
            {
                // Fade out the content and refresh the page
                $("#content, #header, #footer, #wrap, #logo").fadeOut(3000);
                setTimeout(function ()
                {
                    window.location = 'http://www.antoine-augusti.fr';
                }, 3000);
            }
        });

        return false;
    });
});