const mix = require("laravel-mix");
mix.setPublicPath("assets");
mix.browserSync("kirby.local");

if (mix.inProduction()) {
  mix.version();
}

mix
  .sourceMaps()
  .js("src/js/main.js", "assets/js")
  .sass("src/scss/main.scss", "assets/css")
  .options({
    autoprefixer: {
      options: {
        browsers: ["last 2 versions"],
      },
    },
  })
  .extract();
