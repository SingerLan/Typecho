<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="vMenu shadow-1" id="vMenu">
    <div class="v-menu-assembly">
        <div class="Blog-logo">
            <div class="iam-img" id="logo"></div>
            <div class="iam-t">
                <span><?php $this->options->title() ?></span>
                <p><?php $this->options->description() ?></p>
            </div>
        </div>
    </div>
    <div class="colorBar" style="margin: 0 auto;margin-bottom: 24px;width: 100px"></div>
    <div class="v-menu-assembly">
        <ul class="vMenu-item-list">
            <a href="http://m.lookoro.cn/"><li class="mdui-ripple">首页</li></a>
            <a href="http://m.lookoro.cn/index.php/category/notes/"><li class="mdui-ripple">开发笔记</li></a>
            <a href="http://m.lookoro.cn/index.php/category/course/"><li class="mdui-ripple">技术教程</li></a>
            <a href="http://m.lookoro.cn/index.php/category/sharing/"><li class="mdui-ripple">资源共享</li></a>
            <a href="http://www.lookoro.cn/"><li class="mdui-ripple">福利影院</li></a>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><li class="mdui-ripple"><?php $pages->title(); ?></li></a>
            <?php endwhile; ?>
            <!--<a href="<?php $this->options->feedUrl(); ?>"><li class="mdui-ripple">RSS</li></a>-->
        </ul>
    </div>
</div>
<div class="overlay"></div>
<script>
    $('.iam-img').css({
        backgroundImage : "url("+logo+")"
    });
</script>