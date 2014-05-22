<?php
return array(
    //配置页面trace
    'SHOW_PAGE_TRACE'=>true,

    //设置定界符
    'TMPL_L_DELIM'=>'<{', //修改左定界符
    'TMPL_R_DELIM'=>'}>', //修改右定界符

    //添加自己的模板变量规则
    'TMPL_PARSE_STRING'=>array(
        '__CSS__'=>__ROOT__.'/Public/Css',
        '__JS__'=>__ROOT__.'/Public/Js',
    ),

    //配置数据库
    'DB_PREFIX'=>'',
    'DB_DSN'=>'mysql://istone:1234@localhost:3306/test',

);
?>