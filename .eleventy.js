const { DateTime } = require("luxon");

module.exports = function(eleventyConfig) {
  eleventyConfig.addPassthroughCopy("./src/assets");
  eleventyConfig.addPassthroughCopy("./src/favicon.ico");
  
  return {
    dir: {
      input: "src",
      output: "public"
    }
  }
}