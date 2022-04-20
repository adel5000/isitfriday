<?php
function dynamiclink(string $link)
{
    $check_win = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "windows"));
    if ($check_win != 1) {
        $check_android = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android"));
        if ($check_android != 1) {
            $check_iphone = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "iphone"));
            if ($check_iphone != 1) {
                $check_ipad = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "ipad"));
            }
        }
    }
    if ($check_win == 1) {
        header('Location:' . $link);
        exit;
    } elseif ($check_android == 1) {
        $link = "intent" . substr($link, 5) . "#Intent;package=com.google.android.youtube;scheme=https;end";
        header('Location:' . $link);
        exit;
    } elseif ($check_ipad == 1) {
        $link  = "vnd.youtube" . substr($link, 5) . "&" . substr($link, strpos($link, "?") + 1);
        header('Location:' . $link);
        exit;
    } elseif ($check_iphone == 1) {
        $link  = "vnd.youtube" . substr($link, 5) . "&" . substr($link, strpos($link, "?") + 1);
        header('Location:' . $link);
        exit;
    }
}
$link = "https://www.youtube.com/watch?v=pp0b9XTf2xI&list=PL4fosBsvj6QWIPYmD7K0p0Kq7KSOWevt7";

dynamiclink($link);
