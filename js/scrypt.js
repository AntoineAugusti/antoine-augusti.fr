$(document).ready(function()
{
    $("#flags_translate span").click(function()
    {
        // Get the first class of the span (language)
        var translate = $(this).attr("class").split(' ')[0];
        var div_to_show = '#translate_transition p.' + translate;

        if(translate == 'french')
        {
            var div_to_hide = '#translate_transition p.english';
        }
        else
        {
            var div_to_hide = '#translate_transition p.french';
        }

        $.post("http://www.antoine-augusti.fr/ajax/translate.php", {
            translate: translate
        },

        function(data)
        {
            // The lang session has been set
            if(data == 1)
            {
                // Remove the div with the other language and remove the footer
                $("#footer").remove();
                $(div_to_hide).remove();

                // Fade out the content and refresh the page
                $("#content, #header, #wrap, #logo").fadeOut(1000);
                $("#translate_transition").fadeIn(1500, function()
                {
                    $("#translate_transition").delay(3300).fadeOut(200);
                });

                setTimeout(function()
                {
                    window.location = 'http://www.antoine-augusti.fr';
                }, 5000);
            }
        });

        return false;
    });

    $("#social-networks a span").click(function()
    {
        var classes = $(this).attr("class").split(/\s/);

        // Get last class attribute
        var link = classes[classes.length-1];

        _gaq.push(['_trackEvent', 'topbar', 'clic', link]);
    });

    $("#contactForm").submit(function()
    {
        $('#notification').html('');
        $('#notification').html('<div class="erreur">Loading..</div>').slideDown();

        // Get variables
        var sujet = $("#inputSujet").val();
        var nom = $("#inputNom").val();
        var email = $("#inputEmail").val();
        var captcha = $("#inputCaptcha").val();
        var message = $("#textareaMessage").val();
        var copie = $("#checkboxCopie").val();

        $.post("http://www.antoine-augusti.fr/ajax/sendmail.php", {
            sujet: sujet,
            nom: nom,
            email: email,
            captcha: captcha,
            message: message,
            copie: copie
        },

        function(data)
        {
            // Empty form
            if(data == 1)
            {
                div_response = '<div class="erreur">' + contact_empty_form + '</div>';
            }
            // Wrong captcha
            else if(data == 2)
            {
                div_response = '<div class="erreur">' + contact_wrong_captcha + '</div>';

                // Focus the wrong input
                $("#inputCaptcha").val('').focus();
            }
            // Mail sent
            else if(data == 3)
            {
                div_response = '<div class="erreur">' + contact_mail_sent + '</div>';

                // Let's clear all this form
                $("#contactForm input").val('');
                $("#textareaMessage").val('');
                $("#inputSujet").focus();
            }
            // Unknow error
            else if(data == 4)
            {
                div_response = '<div class="erreur">Error</div>';
            }

            $('#notification').html(div_response).delay(3000).slideUp();
        });

        return false;

    });
});