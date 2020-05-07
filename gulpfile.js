// var gulp = require("gulp");
// var sass = require("gulp-sass");
// var imagemin = require("gulp-imagemin");
// var mozjpeg = require("imagemin-mozjpeg");
// var pngquant = require("imagemin-pngquant");



// // gulpプラグインの読み込み
// const gulp = require("gulp");
// // Sassをコンパイルするプラグインの読み込み
// const sass = require("gulp-sass");



// // style.scssの監視タスクを作成する
// gulp.task("default", function () {
//     // ★ style.scssファイルを監視
//     return gulp.watch("./src/sass/*.scss", function () {
//         // style.scssの更新があった場合の処理

//         // style.scssファイルを取得
//         return (
//             gulp
//             .src("./src/sass/*.scss")
//             // Sassのコンパイルを実行
//             .pipe(
//                 sass({
//                     outputStyle: "expanded"
//                 })
//                 // Sassのコンパイルエラーを表示
//                 // (これがないと自動的に止まってしまう)
//                 .on("error", sass.logError)
//             )
//             // cssフォルダー以下に保存
//             .pipe(gulp.dest("./dest/css"))
//         );
//     });
// });



//最近はgulp.taskの方法が非推奨らしく、constを使いましょう「https://ics.media/entry/3290/」この記事より
// gulpプラグインを読み込みます
const {
    src,
    dest,
    watch
} = require("gulp");
// Sassをコンパイルするプラグインを読み込みます
const sass = require("gulp-sass");

/**
 * Sassをコンパイルするタスクです
 */
const compileSass = () =>
    // style.scssファイルを取得
    src("./src/sass/*.scss")
    // Sassのコンパイルを実行
    .pipe(
        // コンパイル後のCSSを展開
        sass({
            outputStyle: "expanded"
        })
    )
    // cssフォルダー以下に保存
    .pipe(dest("./dest/css"));

/**
 * Sassファイルを監視し、変更があったらSassを変換します
 */
const watchSassFiles = () => watch("./src/sass/*.scss", compileSass);

// npx gulpというコマンドを実行した時、watchSassFilesが実行されるようにします
exports.default = watchSassFiles;