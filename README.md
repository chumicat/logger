# Composer 元件練習
## 使用
examlog 為測試資料夾，可移出專案測試是否能由網路取得此專案元件
在 examlog 中，執行以下指令來確認使否能正常運行
```shell
$ composer install
$ php run.php Test
$ sqlite3 syslog.sqlite3
sqlite> SELECT * FROM logs;
```
