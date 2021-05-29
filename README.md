เข้าไปที่โฟลเด้อ แล้วพิมพ์คำสั่ง Install Pagket

	npm install @fortawesome/fontawesome-free
	npm install angular@1.8.0
	npm install angular-sanitize
	npm install bootstrap
	npm install jquery-slim
	npm install ng-notify
	npm install angular-file-upload
	npm install popper.js@1.14.7
	npm install ng-quill --save


ไฟล์ _connect.php บรรทัดที่ 3-6 แก้ไขการเชื่อมต่อฐานข้อมูล

	<?php
		try {
			$servername = "localhost";		//ชื่อ database server 
			$database = "example_db";		//ชื่อฐานข้อมูล
			$username = "root";				//ชื่อผู้ใช้เข้าสู่ฐานข้อมูล
			$password = "";					//รหัสผ่านเข้าสู่ฐานข้อมูล
			$conn_string = 'mysql:host='.$servername.'; dbname='.$database.';charset=utf8';
			$conn = new PDO($conn_string, $username, $password);
		} catch (PDOException $e) {
			echo json_encode($e->getMessage());
			die();
		}

	?>


ไฟล์ .htaccess บรรทัดที่ 3 และ 7 แก้ไข ชื่อโฟลเดอร์โปรเจค

	<IfModule mod_rewrite.c>
		RewriteEngine On
		RewriteBase /ชื่อโฟลเดอร์โปรเจค/
		RewriteRule ^index\.php$ - [L]
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule . /ชื่อโฟลเดอร์โปรเจค/index.php [L]
		php_flag register_globals on
		php_value session.auto_start 1
	</IfModule>

	กรณีนำขึ้น HOST
	<IfModule mod_rewrite.c>
		RewriteEngine On
		RewriteBase /
		RewriteRule ^index\.php$ - [L]
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule . /index.php [L]
		php_flag register_globals on
		php_value session.auto_start 1
	</IfModule>



ไฟล์ index.php  บรรทัดที่ 7 แก้ไข ชื่อโฟลเดอร์โปรเจค
	$FORDER = "/ชื่อโฟลเดอร์โปรเจค";

	กรณี อัพขึ้น server แล้วอยู่ root path ของโฟเด้อเว็บ
	$FORDER = "/";


ไฟล์ htaccess.php แก้ไข ชื่อไฟล์ที่ใช้เป็น template

	เปลี่ยน default layout บรรทัดที่ 23
	$_SESSION['LAYOUT'] = "home";

	เพิ่ม template บรรทัดที่ 24
	$template = array("administrator", "auth");		//list template



ไฟล์ setSession.php กำหนดค่าให้กับตัวแปล $_SESSION 

ไฟล์ getSession.php ดึงค่าตัวแปล $_SESSION

ไฟล์ delSession.php ยกเลิกตัวแปล $_SESSION



./app/{table_name}/controller/ เก็บไฟล์ js สำหรับความคุมการทำงานหน้า view และเรียกใช้งาน model

./app/{table_name}/i18n/ เก็บไฟล์ json เก็บข้อความที่แสดงบนหน้า view

./app/{table_name}/model/ เก็บไฟล์ php ใช้ในการติดต่อฐานข้อมูล

./app/{table_name}/view/ เก็บไฟล์ html (.php) หน้าแสดงผล

	โดยเบื่องต้นประกอบด้วยไฟล์

	- _form.php		ช่องกรอกข้อมูล สำหรับใช้ในไฟล์ create.php และ edit.php

	- _menu.php		เมนูสำหรับไปหน้าต่าง ๆ ใน โฟลเดอร์

	- create.php	หน้าสำหรับเพิ่มข้อมูล

	- edit.php		หน้าสำหรับแก้ไขปรับปรุงข้อมูล

	- list.php		หน้าสำหรับแสดงข้อมูลหลาย ๆ เรคคอร์ด

	- show.php		หน้าสำหรับแสดงข้อมูลรายละเอียด 1 เรคคอร์ด ด้วยการค้นหาจาก primary key
	



เก็บไฟล์ที่มีการอัพโหลดผ่านระบบ

./src/{table_name}/{field_name}/{filename} 

Access to XMLHttpRequest at ‘http://localhost:4000/test1' from origin ‘http://localhost:8080' has been blocked by CORS policy: No ‘Access-Control-Allow-Origin’ header is present on the requested resource.
https://medium.com/lazy-dev/%E0%B8%9B%E0%B8%B1%E0%B8%8D%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%9B%E0%B8%A7%E0%B8%94%E0%B8%AB%E0%B8%B1%E0%B8%A7%E0%B8%82%E0%B8%AD%E0%B8%87-no-access-control-allow-origin-1e3d24932d9b


https://github.com/quilljs/quill/blob/develop/docs/docs/download.md
	<ng-quill-editor ng-model="addressInstance.detail"></ng-quill-editor>
