<?php

return array(
    'product'=>'product/list',
    'news/([0-9]+)'=>'news/view/$1',
    'kkkkkk'=>'site/index',
    'nomreler'=>'nomre/list',
    'nomreler[?]([a-z]+)=[0-9-a-z,_]+[&]([a-z]+)=[0-9-a-z,_]+'=>'nomre/list',
    'info'=>'info/index',
    'branches'=>'branch/index',
    'login'=>'login/index',
    'login/register'=>'login/register',
    'login/register_action'=>'login/regcheck',
    'admin'=>'admin/index',
    'admine_gir'=>'admin/panell',
    'admin/nomre_duzelt/([0-9-a-z,_,-,(,)]+)'=>'admin/nomre_edit',
    'admin/branch_duzelt/([0-9-a-z,_,-,(,)]+)'=>'admin/branch_edit',
    'admin/kateqoriya_duzelt/([0-9-a-z,_,-,(,)]+)'=>'admin/kategori',
    'admin/sidebar/([0-9-a-z,_,-,(,)]+)'=>'admin/side',
    'admin/sidebar/([0-9-a-z,_,-,(,)]+)/([0-9]+)'=>'admin/side',
    'admin/produkt_edit/([0-9-a-z,_,-,(,)]+)'=>'admin/prod_edit',
    'admin/produktu_duzelt/([0-9-a-z,_,-,(,)]+)/([0-9]+)'=>'admin/prod_edit',
    'admin/deyiwikleri_aktiv/([0-9-a-z,_,-,(,)]+)'=>'admin/prod_edit',
    'catalog/([a-z,_]+)'=>'catalog/index',
    'catalog/([a-z,_]+)/([a-z,_]+)'=>'catalog/index',
    'product/([a-z,_,-]+)/([0-9-a-z,_,-,(,)]+)'=>'product/index'
)

?>