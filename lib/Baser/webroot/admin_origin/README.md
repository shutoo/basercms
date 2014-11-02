# 管理画面用アセットファイル

管理画面用の

- img
- css
- js

上記のファイル群を **[grunt](http://gruntjs.com/)** を使用して

- SASSのコンパイル & 圧縮
- 画像のファイルサイズ削減
- JSの圧縮

を行っています。

## gruntの利用方法

Nodeモジュールの **grunt-cli**、Rubyモジュールの **sass** をローカルPCにインストールしている場合

`package.js`は準備されているので

```sh
# 作業ディレクトリは lib/Baser/webroot/admin_origin
$ npm install
```

上記コマンドで `node_modules` に各種モジュールが読み込みできます。

その状態で

```sh
$ grunt
```

上記を実行すると **grunt** が実行されます。

***

また、ファイルを監視して **grunt** を実行することもできます。

```sh
$ grunt watch
```

上記のコマンドを実行した状態にして、各種ファイルを変更→保存すると、自動で **grunt** が実行されます。

## 各種インストール

- Nodeについては [http://nodejs.jp/](http://nodejs.jp/)を参照してください。
- Rubyについては [https://www.ruby-lang.org/ja/](https://www.ruby-lang.org/ja/)を参照してください。

### sassのインストール

**Ruby(gem)** がイントールされている状態で

```sh
# PCの管理者権限が必要です
$ gem install sass
```

### grunt-cliのインストール

**Node(npm)** がイントールされている状態で

```sh
# PCの管理者権限が必要です
$ npm -g install grunt-cli
```
