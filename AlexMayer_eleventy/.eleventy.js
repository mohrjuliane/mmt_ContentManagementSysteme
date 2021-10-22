module.exports = function (eleventyConfig) {
  eleventyConfig.addShortcode("year", () => `${new Date().getFullYear()}`);
  eleventyConfig.addPassthroughCopy("./src");
  // Return your Object options:
  return {
    dir: {
      input: "src",
      output: "dist",
    },
  };
};
