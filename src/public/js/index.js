/*入力フォームの要素*/
var fileform=document.getElementById("picture");

/*結果出力用の要素*/
var result=document.getElementById("result");

fileform.addEventListener("change", (e) => {
  if (window.File) {
    // 指定したファイルの情報を取得
    var inputfile = fileform.files[0];
    // 最後に、反映
    result.text = inputfile.name;
  }
});