<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = "Abbie-首页";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="<?php echo Yii::$app->request->hostInfo;?>/assets/layui/css/layui.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->request->hostInfo?>/assets/css/global.css">
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="layui-header top-tip">
        <div class="layui-main">
        <span class="layui-breadcrumb" lay-separator=" " style="visibility: visible;">
            <a href="" class="color-primary">登陆</a><span lay-separator=""> </span>
            <a href="" class="color-danger">免费注册</a><span lay-separator=""> </span>
            <a>|</a><span lay-separator=""> </span>
            <a href="">资讯</a><span lay-separator=""> </span>
            <a href="">社区</a><span lay-separator=""> </span>
            <a href="">知识</a>
        </span>
            <div class="layui-clear"></div>
        </div>

    </div>
    <div class="layui-header header">
        <div class="layui-main">
            <a class="logo" href="/">
                <img src="https://www.juhe.cn/themes/v5/public/images/imgnew/juhelogo.png?v=1.1" alt="layui" height="30">
            </a>
            <div class="layui-form component">
                <select lay-search="" lay-filter="component">
                    <option value="">搜索组件或模块</option>
                    <option value="element/layout.html">grid 栅格布局</option>
                    <option value="element/layout.html#admin">admin 后台布局</option>
                    <option value="element/color.html">color 颜色</option>
                    <option value="element/icon.html">iconfont 字体图标</option>
                    <option value="element/anim.html">animation 动画</option>
                    <option value="element/button.html">button 按钮</option>
                    <option value="element/form.html">form 表单组</option>
                    <option value="element/form.html#input">input 输入框</option>
                    <option value="element/form.html#select">select 下拉选择框</option>
                    <option value="element/form.html#checkbox">checkbox 复选框</option>
                    <option value="element/form.html#switch">switch 开关</option>
                    <option value="element/form.html#radio">radio 单选框</option>
                    <option value="element/form.html#textarea">textarea 文本域</option>
                    <option value="element/nav.html">nav 导航菜单</option>
                    <option value="element/nav.html#breadcrumb">breadcrumb 面包屑</option>
                    <option value="element/tab.html">tabs 选项卡</option>
                    <option value="element/progress.html">progress 进度条</option>
                    <option value="element/collapse.html">collapse 折叠面板/手风琴</option>
                    <option value="element/table.html">table 表格元素</option>
                    <option value="element/badge.html">badge 徽章</option>
                    <option value="element/timeline.html">timeline 时间线</option>
                    <option value="element/auxiliar.html#blockquote">blockquote 引用块</option>
                    <option value="element/auxiliar.html#fieldset">fieldset 字段集</option>
                    <option value="element/auxiliar.html#hr">hr 分割线</option>

                    <option value="modules/layer.html">layer 弹出层/弹窗综合</option>
                    <option value="modules/laydate.html">laydate 日期时间选择器</option>
                    <option value="modules/layim.html">layim 即时通讯/聊天</option>
                    <option value="modules/laypage.html">laypage 分页</option>
                    <option value="modules/laytpl.html">laytpl 模板引擎</option>
                    <option value="modules/form.html">form 表单模块</option>
                    <option value="modules/table.html">table 数据表格</option>
                    <option value="modules/upload.html">upload 文件/图片上传</option>
                    <option value="modules/element.html">element 常用元素操作</option>
                    <option value="modules/carousel.html">carousel 轮播/跑马灯</option>
                    <option value="modules/layedit.html">layedit 富文本编辑器</option>
                    <option value="modules/tree.html">tree 树形菜单</option>
                    <option value="modules/flow.html">flow 信息流/图片懒加载</option>
                    <option value="modules/util.html">util 工具集</option>
                    <option value="modules/code.html">code 代码修饰</option>
                </select><div class="layui-form-select"><div class="layui-select-title"><input type="text" placeholder="搜索组件或模块" value="" class="layui-input"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit" style=""><dd lay-value="" class="layui-select-tips">搜索组件或模块</dd><dd lay-value="element/layout.html" class="">grid 栅格布局</dd><dd lay-value="element/layout.html#admin" class="">admin 后台布局</dd><dd lay-value="element/color.html" class="">color 颜色</dd><dd lay-value="element/icon.html" class="">iconfont 字体图标</dd><dd lay-value="element/anim.html" class="">animation 动画</dd><dd lay-value="element/button.html" class="">button 按钮</dd><dd lay-value="element/form.html" class="">form 表单组</dd><dd lay-value="element/form.html#input" class="">input 输入框</dd><dd lay-value="element/form.html#select" class="">select 下拉选择框</dd><dd lay-value="element/form.html#checkbox" class="">checkbox 复选框</dd><dd lay-value="element/form.html#switch" class="">switch 开关</dd><dd lay-value="element/form.html#radio" class="">radio 单选框</dd><dd lay-value="element/form.html#textarea" class="">textarea 文本域</dd><dd lay-value="element/nav.html" class="">nav 导航菜单</dd><dd lay-value="element/nav.html#breadcrumb" class="">breadcrumb 面包屑</dd><dd lay-value="element/tab.html" class="">tabs 选项卡</dd><dd lay-value="element/progress.html" class="">progress 进度条</dd><dd lay-value="element/collapse.html" class="">collapse 折叠面板/手风琴</dd><dd lay-value="element/table.html" class="">table 表格元素</dd><dd lay-value="element/badge.html" class="">badge 徽章</dd><dd lay-value="element/timeline.html" class="">timeline 时间线</dd><dd lay-value="element/auxiliar.html#blockquote" class="">blockquote 引用块</dd><dd lay-value="element/auxiliar.html#fieldset" class="">fieldset 字段集</dd><dd lay-value="element/auxiliar.html#hr" class="">hr 分割线</dd><dd lay-value="modules/layer.html" class="">layer 弹出层/弹窗综合</dd><dd lay-value="modules/laydate.html" class="">laydate 日期时间选择器</dd><dd lay-value="modules/layim.html" class="">layim 即时通讯/聊天</dd><dd lay-value="modules/laypage.html" class="">laypage 分页</dd><dd lay-value="modules/laytpl.html" class="">laytpl 模板引擎</dd><dd lay-value="modules/form.html" class="">form 表单模块</dd><dd lay-value="modules/table.html" class="">table 数据表格</dd><dd lay-value="modules/upload.html" class="">upload 文件/图片上传</dd><dd lay-value="modules/element.html" class="">element 常用元素操作</dd><dd lay-value="modules/carousel.html" class="">carousel 轮播/跑马灯</dd><dd lay-value="modules/layedit.html" class="">layedit 富文本编辑器</dd><dd lay-value="modules/tree.html" class="">tree 树形菜单</dd><dd lay-value="modules/flow.html" class="">flow 信息流/图片懒加载</dd><dd lay-value="modules/util.html" class="">util 工具集</dd><dd lay-value="modules/code.html" class="">code 代码修饰</dd></dl></div>
            </div>
            <ul class="layui-nav">
                <li class="layui-nav-item">
                    <a href="/doc/">文档<!--  --></a>
                </li>
                <li class="layui-nav-item ">
                    <a href="/demo/">示例<!-- <span class="layui-badge-dot"></span> --></a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="http://fly.layui.com/" target="_blank">社区</a>
                </li>

                <li class="layui-nav-item layui-hide-xs">
                    <a href="javascript:;">周边<span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://layim.layui.com/" target="_blank">即时聊天</a></dd>
                        <dd><a href="/alone.html" target="_blank">独立组件</a></dd>
                        <dd><a href="http://fly.layui.com/jie/8157/" target="_blank">社区模板</a></dd>
                        <dd><a href="http://fly.layui.com/jie/9842/" target="_blank">Axure组件</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="/v1/" target="_blank">旧版</a>
                </li>
                <li class="layui-nav-item layui-hide-sm layui-show-xs">
                    <a href="javascript:;">更多<span class="layui-nav-more"></span></a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://fly.layui.com/" target="_blank">社区</a></dd>
                    </dl>
                </li>
                <span class="layui-nav-bar"></span>
            </ul>
        </div>
    </div>
    <div class="container" style="padding-top: 0;">
        <?= $content ?>
    </div>
</div>

<script type="text/javascript" src="<?php echo Yii::$app->request->hostInfo;?>/assets/layui/layui.js"></script>
<script>
    layui.config({
        base: 'assets/js/',
        version: '20171115001'
    }).use('global');
    layui.use(['carousel', 'element'], function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#advertise'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
        });
    });
</script>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
