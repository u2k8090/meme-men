// php
// module.exports = {
//   "proxy": "https://wimax-broad.dev",
//   "files": ["./css/**/*.css", "./js/**/*.js", "./**/*.php"]
// }

// html
module.exports = {
    files: ["./dist/css/**/*.css", "./dist/js/**/*.js", "./**/*.html"],
    server: {
        "baseDir": "./"
    },
    startpath: 'index.html',
    open: 'external',
    notify: true,
}
