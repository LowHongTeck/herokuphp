<!-- issue 1: [user-scalable="no"] is used in the <meta name="viewport"> element or the [maximum-scale] attribute is less than 5 -->
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">

<!-- possible fix 1: set [maximum-scale] to 5 -->
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=5,user-scalable=no">
<!-- possible fix 2: removing [user-scale="no"] -->
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">

<!-- issue 2 <html> element does not have a [lang] attribute -->
<html></html>

<!-- possible fix -->
<html lang="en"></html>

<!-- issue 3: Serve images in modern formats-->
<span class="bgimage" style="background-image: url(&quot;https://scontent.cdninstagram.com/v/t51.2885-15/28695…&quot;);">

<!-- possible fix: use AVIF or WebP format for web images. -->