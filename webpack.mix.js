const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
      require("tailwindcss"),
    ]);

mix.browserSync({
  proxy: '127.0.0.1',
  open: false,
});

mix.webpackConfig({
    devServer: {
        host: '0.0.0.0',
        port: 8080,
    },
});
