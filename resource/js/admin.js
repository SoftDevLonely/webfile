if (typeof jQuery === "undefined") {
    throw new Error("jQuery plugins need to be before this file");
}

$(function () {
    setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 100);
});
