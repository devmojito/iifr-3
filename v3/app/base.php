<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang ?? 'zxx'); ?>" 
dir="<?= htmlspecialchars($dir ?? 'ltr'); ?>">
<head>
    <?php include_once 'partials/style.php'; ?>
</head>
<body class="<?= htmlspecialchars($body_class ?? ''); ?>">
    <!-- preloader -->
    <div id="iifr-preloader" style="position:fixed;inset:0;z-index:99999;background:#fff;display:flex;align-items:center;justify-content:center;transition:opacity .4s ease;">
        <video src="/assets/preloader.mp4" autoplay muted playsinline style="max-width:520px;"></video>
    </div>
    <script>
    (function(){
        var MIN_MS=2500,start=Date.now();
        function hide(){
            var el=document.getElementById('iifr-preloader');
            if(!el)return;
            var elapsed=Date.now()-start,remaining=Math.max(0,MIN_MS-elapsed);
            setTimeout(function(){
                el.style.opacity='0';
                setTimeout(function(){el.remove();},400);
            },remaining);
        }
        if(document.readyState==='complete')hide();
        else window.addEventListener('load',hide);
    })();
    </script>
    <?php
     if (!empty($content)) {
          echo $content;
     }
    ?>
    <?php include 'partials/scripts.php'; ?>
    <?php ob_end_flush(); ?>
</body>
</html>

