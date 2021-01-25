## About laravel-passport-auth

主要使用 Laravel 撰寫 API，再使用 jQuery Ajax 發出非同步請求，做出具專案新增、列表（index）功能的網頁。

### 功能

- 具備專案之新增、列表（index）功能。
- 使用 Ajax 即時更新網頁內容：使用 jQuery Ajax 建立非同步請求，讓網頁能即時更新介面和內容，不需重新整理來讀取整個網頁，就能即時透過瀏覽器跟伺服器溝通，撈出資料，更快速地回應使用者的操作。
- 使用 Middleware 檢驗 Http request: 原本在網址 http://127.0.0.1:8000/ ，會出現“ Unauthorized.404. Please edit the url as "http://127.0.0.1:8000/post?greeting=(the secret access string here)".”畫面。
將網址修改為“http://127.0.0.1:8000/post?greeting=hi” 後便能通過 Middleware 檢驗，能進行下一個request。

### 未來功能規劃
使用 laravel passport 或 JWT 完成用戶身份驗證的登錄和註冊。

### 開發環境

- 語言：PHP 8.0.0
- 框架：Laravel 8.18.1
- 資料庫：MySOL
- 資料庫管理工具：phpMyAdmin

### 其他輔助工具

- Postman：是一款開發API時的好用工具，能模擬 HTTP Request，包含常見的 GET、POST、PUT、DELETE 等，快速測試 API 能否正常收到 HTTP Request，並正確地 Response。

### Demo
- [Demo Video](https://www.youtube.com/watch?v=Gic9Zcm7SVI)
