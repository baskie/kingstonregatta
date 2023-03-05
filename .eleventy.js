module.exports = function (eleventyConfig) {

  eleventyConfig.addPassthroughCopy("./src/css");
  eleventyConfig.addPassthroughCopy("./src/images");
  eleventyConfig.addPassthroughCopy("./src/scripts");
  eleventyConfig.addPassthroughCopy("./src/history");
  eleventyConfig.addPassthroughCopy("./src/pdfs");
  eleventyConfig.addPassthroughCopy("./src/docs");
  eleventyConfig.addPassthroughCopy("./src/email-form.php");
  eleventyConfig.addPassthroughCopy("./src/draw");
    return {
      dir: {
        input: "src",
        output: "public",
      },
    };
  };