<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'เมนูระบบ', 'options' => ['class' => 'header']],
                    [
                        'label' => 'ระบบจองห้องประชุม', 
                        'icon' => 'fa fa-file-code-o', 
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'บุคลากร', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['#'],
                                'items' => [
                                    ['label' => 'ข้อมูลบุคลากร', 'icon' => 'fa fa-file-code-o', 'url' => ['/personal/person/index']],
                                    ['label' => 'เพิ่มบุคลากร', 'icon' => 'glyphicon glyphicon-plus', 'url' => ['/personal/person/create']],
                                ],
                            ],
                            ['label' => 'ห้องประชุม', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['#'],
                                'items' => [
                                    ['label' => 'ข้อมูลห้อง', 'icon' => 'fa fa-file-code-o', 'url' => ['/meeting/room/index']],
                                    ['label' => 'เพิ่มห้อง', 'icon' => 'glyphicon glyphicon-plus', 'url' => ['/meeting/room/create']],
                                ],
                            ],
                            ['label' => 'อุปกรณ์', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['#'],
                                'items' => [
                                    ['label' => 'ข้อมูลอุปกรณ์', 'icon' => 'fa fa-file-code-o', 'url' => ['/personal/equipment/index']],
                                    ['label' => 'เพิ่มอุปกรณ์', 'icon' => 'glyphicon glyphicon-plus', 'url' => ['/personal/equipment/create']],
                                ],
                            ],
                            
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
        ) ?>

    </section>

</aside>
