var header = document.querySelector(".header");
var initialTop = 0;
var scrollThreshold = -100;
var currentTop = initialTop;
var lastScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

window.addEventListener("scroll", function () {
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  var scrollDifference = scrollPosition - lastScrollPosition;
  var scrollTopDifference = scrollPosition - lastScrollPosition;

  // Increase or decrease height gradually based on scroll difference
  currentTop -= scrollTopDifference;

  // Ensure the height stays within the specified range
  currentTop = Math.max(Math.min(currentTop, initialTop), scrollThreshold);

  // Set the header height
  header.style.top = currentTop + "px";

  // Update the last scroll position
  lastScrollPosition = scrollPosition;
});
