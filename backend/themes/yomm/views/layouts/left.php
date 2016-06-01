<?PHP

use yii\helpers\Html;
?>


<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <! -- ตำแหน่งรูปภาพ (backend\web\assets\4443d465\img\) -->
                <img src="<?= $directoryAsset ?>/img/user-mali-sahawong.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                
                <p>  <!-- แสดงชื่อผู้ใช้ที่ Login เข้ามาในระบบ -->                
                    <?= Html::encode(Yii::$app->user->identity->username) ?> 
                    <!-- <?= Html::encode(Yii::$app->user->identity->email) ?> -->
                </p>

                <a href="https://www.facebook.com/payom.deemad">
                    <i class="fa fa-circle text-success"></i> Online </a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="ค้นหา..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'เมนูระบบ', 'options' => ['class' => 'header']],
                        [
                            'label' => 'ระบบจองห้องประชุม',
                            'icon' => 'fa fa-file-code-o',
                            'url' => ['#'],
                            'items' => [
                                ['label' => 'บุคลากร', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['/personal/person/index']],
                                ['label' => 'ห้องประชุม', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['/meeting/room/index']],
                                ['label' => 'อุปกรณ์', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['/meeting/equipment/index']],
                                ],
                                
                                
                                
                            ],
                      
                        [
                            'label' => 'Modules List',
                            'icon' => 'glyphicon glyphicon-briefcase',
                            'url' => ['#'],
                            'items' => [
                                ['label' => 'Personal module', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['#'],
                                    'items' => [
                                        ['label' => 'Person Controller', 'icon' => 'fa fa-file-code-o', 'url' => ['/personal/person/']],
                                    ],
                                ],
                                ['label' => 'Meeting module', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['#'],
                                    'items' => [
                                        ['label' => 'Room Controller', 'icon' => 'fa fa-file-code-o', 'url' => ['/meeting/room/']],
                                    ],
                                ],
                            ],
                        ],
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Same tools',
                            'icon' => 'fa fa-share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'fa fa-circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'fa fa-circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>
