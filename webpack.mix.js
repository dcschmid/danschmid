const mix = require("laravel-mix");
mix.setPublicPath("assets");
mix.browserSync("kirby.local");

mix
  .js("src/js/main.js", "assets/js")
  .sass("src/scss/main.scss", "assets/css")
  .options({
    autoprefixer: {
      options: {
        browsers: ["last 2 versions"]
      }
    }
  })
  .version();
