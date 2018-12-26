<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="mdui-container-fluid shadow-1">
    <div class="mdui-row">
        <div class="mdui-col-md-4" style="margin: auto;position: absolute;left: 0;right: 0;">
            <p>Powered by <a href="http://m.lookoro.cn/">大巧不工</a></p>
            <p id="runtime_span"></p>
        </div>
    </div>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
        </div>
<?php $this->need('sidebar.php'); ?>
    </body>
<script type="text/javascript">function show_runtime(){window.setTimeout("show_runtime()",1000);X=new 
Date("12/01/2018 00:00:00");
Y=new Date();T=(Y.getTime()-X.getTime());M=24*60*60*1000;
a=T/M;A=Math.floor(a);b=(a-A)*24;B=Math.floor(b);c=(b-B)*60;C=Math.floor((b-B)*60);D=Math.floor((c-C)*60);
runtime_span.innerHTML="本站勉强运行: "+A+"天"+B+"小时"+C+"分"+D+"秒"}show_runtime();</script>
</html>