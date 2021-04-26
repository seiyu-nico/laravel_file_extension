# Laravelでファイル拡張子付きのURLに対応する
## 概要
<p>古いシステムではexample.com/company.phpやcompany.htmlなどの拡張子がついたURLがあります</p>
<p>今回はそういった古いシステムを改修するが、URLは変えられないなどといったときに利用します。</p>

## 方法
- 今回はアクセスが目的なのでコントローラーを作らず、web.phpのみで対応します。
- ルートパラメータの正規表現制約を使います
  - 実際は正規表現を使用せずアクセスさせたいURLにすることで対応可能です。
```php:web.php
Route::get('{php_file}', function () {
    echo '<p>localhost/company.phpでアクセスしています。</p>';
})->where('php_file', 'company.php');

Route::get('{html_file}', function () {
    echo '<p>localhost/company.htmlでアクセスしています。</p>';
})->where('html_file', 'company.html');

Route::get('{php_file}', function () {
    echo '<p>localhost/about.phpでアクセスしています。</p>';
})->where('php_file', 'about.php');

Route::get('{html_file}', function () {
    echo '<p>localhost/about.htmlでアクセスしています。</p>';
})->where('html_file', 'about.html');
```
