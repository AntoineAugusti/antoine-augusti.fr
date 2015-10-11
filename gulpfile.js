var elixir = require('laravel-elixir');
require('laravel-elixir-sass-compass');

elixir(function(mix) {
    mix.compass("screen.scss", "app/assets/css", {
            config_file: "config.rb",
            sass: "app/assets/sass",
        })
        .scripts([
            "jquery-2.1.0.min.js",
            "app.js"
        ], "public/assets/js/scripts.min.js", "app/assets/js")
        .styles([
            "bootstrap.min.css",
            "font-awesome.min.css",
            "screen.css"
        ], 'public/assets/css/styles.min.css', 'app/assets/css')
        .version([
            "public/assets/js/scripts.min.js",
            'public/assets/css/styles.min.css'
        ]);
});
