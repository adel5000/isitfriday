let user = window.navigator.userAgent.toLocaleLowerCase();
let link = "https://www.youtube.com/watch?v=w3-PkfaEGbs&list=PL4fosBsvj6QV5mShxCaLc2tM--FCjK1HJ";
let Windows = user.indexOf("windows");
if (Windows != -1)
{
window.location.assign(link);
}
else
{
    let android = user.indexOf("android");

    if (android != -1)
    {
        link = "intent" + link.substring(5) + "#Intent;package=com.google.android.youtube;scheme=https;end";    
    }
    else
    {
        let iphone = user.indexOf("iphone");
        let ipad = user.indexOf("ipad");
        if(iphone!=-1 || ipad!=-1)
        { 
            link = "vnd.youtube" + link.substring(5) + "&" + link.substring(link.indexOf("?") + 1);       
        }
    }
}
    
    
window.location.assign(link);

    
    
