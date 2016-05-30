<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'ระบบจองห้องประชุม';
?>
<div class="site-index">



    <div class="jumbotron">
        <h1>ตั้งค่าระบบ!</h1>

        <p class="lead">ยินดีต้อนรับสู่ระบบห้องประชุม:: Yii-powered application.</p>

        <p><a class="btn btn-lg btn-warning" 
              href="https://www.youtube.com/playlist?list=PLX5MZfWdby5SJwfd7pvNlrBqMFKM0e037">
                เรียนรู้จาก Youtube@Manop Kongoon..
            </a>
        </p>
        
        <p><a class="btn btn-lg btn-default" 
              href="https://github.com/spider049/yii2-meeting">
                yii2-meeting บน Github..</a></p>
    </div>

    <div class="body-content">

        <div class="row">

            <div class="col-lg-4">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img alt="Brand" src="uploads/pic-yom-web/red_hat_logo.jpg" width="50">
                            </a>
                        </div>
                    </div>
                </nav>



                <p>ออกแบบ E-R Diagramด้วย <a class="btn btn-default" href="https://www.mysql.com/products/workbench/">MySQL Workbench..</a></p>
                <div class="text-center">
                    <?= Html::img('uploads/pic-yom-web/ER-Meeting.jpg', ['class' => 'img-responsive', 'width' => 800]) ?>
                </div>

                <p><a class="btn btn-success" href="https://www.mysql.com/products/workbench/">MySQL Workbench Download &raquo;</a></p>
                <p><a class="btn btn-success" href="https://github.com/dmstr/yii2-adminlte-asset">Theme AdminLTE &raquo;</a></p>


            </div>




            <div class="col-lg-4">
                <h2>การสร้างและใช้งาน Migration ใน Yii Framework 2</h2>

                <p>Migration คืออะไร?
                    Migration คือการสร้าง versioning ของการทำงานกับฐานข้อมูล เช่น การสร้างตาราง การเพิ่ม field การลบ field เพื่อให้เห็น version ต่างๆ และทราบที่มาที่ไปได้

                    การ Migration จึงมีความสำคัญกับการพัฒนาระบบที่ทำงานเป็นทีมหลายๆ คน

                    รูปแบบของ Migration นั้นถูกนำมาใช้ให้เหมือนกับการ Coding ที่ต้องมีการเก็บ Versioning ของ Code เช่น Git โดยจะเห็นว่าประวัติของ Code นั้นมีที่มาที่ไปอย่างไร มีการแก้ไขตรงไหนบ้าง หรือ เพิ่มตรงไหนบ้าง จึงเป็นที่มาของ Migration นั่นเอง

                    ไฟล์ Migration นั้นจะมี Method หลักๆ อยู่ 2 Method คือ up() และ down() โดยทั้ง 2 Method นี้ทำหน้าที่ตรงกันข้ามกัน เช่น up() คือการสร้างตาราง down() คือการลบตาราง เป็นต้น
                    .
                </p>
                <p><a class="btn btn-default" href="https://www.programmerthailand.com/tutorial/post/view/36/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%83%E0%B8%8A%E0%B9%89%E0%B8%87%E0%B8%B2%E0%B8%99-migration-%E0%B9%83%E0%B8%99-yii-framework-2">ใช้งาน Migration;</a></p>
            </div>
        </div>
    </div>
</div>
