<?php

$config = require(ROOT_PATH . "/include/config.php");
$params = array_merge($config['params'], array('administrator' => array('admin'),));
$st="";

    $params['roleItem'] = array(
    array(
     '服務機構',
        array(
            'award_index41' => array('服務機構名稱', 'clubList/index'),
             'award_index42' => array('服務機構名稱', 'clubList/index'),
               'award_index44' => array('服務機構名稱3444', 'clubList/index'),
                'award_index45' => array('测试', 'testList/index'),
                
            ),
       ),
    array(
     '进仓处理',
        array(  
              'award_index48' => array('订单信息', 'orderList/index'),
                 'award_index46' => array('进仓服装信息', 'clothList/index'),
             'award_index47' => array('入库服装明细', 'detailList/index'),
             'award_index49' => array('入库服装汇总', 'sumList/index'),

            ),
       ),

  );




$main = array(
    'basePath' => ROOT_PATH . '/admin',
    'runtimePath' => ROOT_PATH . '/runtime/admin',
    'name' => '',
    'defaultController' => 'index',
    'components' => array(
        'db' => $config['components']['db'],
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'info,error, warning'
                ),
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'trace'
                ),
            ),
        ),
    ),
    'params' => $params,
);

return array_merge($config, $main);
?>

<ul class="sidebar-menu">            
<li class="treeview">               
    <a href="#">                    
        <i class="fa fa-gears"></i> <span>權限控制</span>                    
        <i class="fa fa-angle-left pull-right"></i>               
    </a>               
    <ul class="treeview-menu">                   
        <li class="treeview">                        
            <a href="/admin">管理員</a>                        
            <ul class="treeview-menu">                            
                <li><a href="/user"><i class="fa fa-circle-o"></i> 後臺用戶</a></li>                            
                <li class="treeview">                                
                    <a href="/admin/role"> <i class="fa fa-circle-o"></i> 權限 <i class="fa fa-angle-left pull-right"></i>
                    </a>                                
                    <ul class="treeview-menu">                                    
                        <li><a href="/admin/route"><i class="fa fa-circle-o"></i> 路由</a></li>
                        <li><a href="/admin/permission"><i class="fa fa-circle-o"></i> 權限</a></li>
                        <li><a href="/admin/role"><i class="fa fa-circle-o"></i> 角色</a></li>
                        <li><a href="/admin/assignment"><i class="fa fa-circle-o"></i> 分配</a></li>
                        <li><a href="/admin/menu"><i class="fa fa-circle-o"></i> 菜單</a></li>
                    </ul>                           
                </li>                        
            </ul>                    
        </li>                
    </ul>            
    </li>        
</ul>