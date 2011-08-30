<?php

// fixing the link
$str3 = sprintf($str3, ' href="http://www.mozilla.com/'.$lang.'/firefox/" target="_blank"');

// RTL support
if ($textdir == 'rtl') {
    $extra_headers  .= <<<EXTRA_HEADERS
    <style type="text/css">
        /* rtl fixes */

        html[dir='rtl']  #details-header {
            padding-left: 70px;
            padding-right: 5px;
            background-position: 0 4px;
        }

        html[dir='rtl']  #details-content ul li {
            margin: 0 25px 0 15px;
        }
    </style>

EXTRA_HEADERS;
}

?>

<!-- CSS is inline and the font/image are both Data-URL encoded 
     in the CSS so the entire page is only one HTTP request.
-->

<!DOCTYPE HTML>
<html lang="<?=$lang?>" dir="<?=$textdir?>">
<head>
<meta charset="utf-8">
<title><?=$str1?></title>
<style>
body {
    margin: 0;
    padding: 5px 4px 4px 8px;
    color: #807970;
    font-family: georgia,serif;
    background-color: #fff;
    background-position: top left;
    background-repeat: repeat-x;
    background-image: url(data:image/png;base64,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);
}

h1 {
    margin: 0;
    padding: 10px 0 0 0;
    font-size: 16px;
    letter-spacing: -0.02em;
    font-weight: normal;
    color: #4B4740;
}

a,
a:link,
a:visited {
    color: #0489B7;
    text-decoration: underline;
}

#wrapper {
    width: 266px;
    margin: 0 auto;
}

#details-header {
    padding-left: 5px;
    padding-right: 65px;
    min-height: 70px;
    background-position: top right;
    background-repeat: no-repeat;
    background-image: url(
data:image/png;base64,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);
}

#details-header p {
    margin: 4px 0;
    line-height: 1.2;
    font-size: 90%;
}

#details-content {
    width: 266px;
    margin: 0 auto;
    padding-top: 10px;
    padding-bottom: 3px;
    min-height: 75px;
    font-size: 75%;
    background-position: top center;
    background-repeat: no-repeat;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQoAAADICAMAAAAnQl/wAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOFQTFRF6Ozt6Ozv5+zv6e3u5+vs5+vu6e3w7fHy6u7v+vr67vLz6+/w+fv67/P07PDx6O3w8PT15uvu4ebp5urr9fb49vf55urt8fX26+zu9vj35+3t7u/x8vb34ujo5uzs6uvt7fH04ubn5evr7PDz8PHz9PX36ers4Obm4+np7PH08fL05Ojp4+jr6/Dz7PLy7O3v5enq9vf74ufq8vP16+/y8/T25ens7vL1+fn58/f27/Dy9ff27/T35Ojr4eXo3+Tn4efn4+fq4OXo8fX46u7x9/n48PT34+fo5ert/f7/////SGBLxQAAAEt0Uk5T//////////////////////////////////////////////////////////////////////////////////////////////////8AyxnwrAAAA6NJREFUeNrs1Nl22zYQgGEsBECBIkVqdb07jrOvzdK9abO0Jd//gToAZUfKcXKdi38sUYQwnAE+6FgN2/htNbSPlpvj4ZaY7I2Ww7di9c206U7B1e7Epn21XH7R6NaH32w2sb66qTTdy3iZq7Zy9/v+o8dp6ov4ZTiO7c5YDau2sTqFW7tCLYpa3ipUtS0kVBooealo67JK24sXMZS2jFEVjYyPqyaqZ4cp5fRUr9+utdM6Nk15/1ko3cfzoBYhNarKWkWtfZrWUjJFXVWpfq2Uzb0KG4bVcmiquoxqbLuNIpRNKZ+1uv/g5OTf+cOnzl3+82EYrH/YPb1zeHjn9FQua79+25knT/57/2622by5qmxQQTrk7Tm3TiVrG6xaLEJagnyX9724PE8UUducmlZpzKybGWPSSAadzzXSQF5ySavyf87MmO+8bEEYOzMbn5cbk0NGZm7GPO+UcnrE9qmaTwW9Hj/zS8sj+UntZa1222zsvV3CmOy8mc9/nM/nZmxZKN+l57pZt+3r5GaecowX2VR2JrN6G7mFVDPjRjvnxwWIwOtBnWlnH1W2UE1bl3Y8Czn1kM7AqignFtumsjYfzt2DsgkvnMuDpgoylgQvS7LPf22D8j+d59JHR9YuVCZIaVIvClo69irUciiSmqIKMr4+eJluXjfh+UFUOg1kqg22rOX4pHsZVBkLWeaDv05OHl/IbCU/zpQrDVOlNipbX2a4v/+4eLyQpgd3837kYdmbzI6tymjL66ZV2zap06t7vnuhGu2v+r6f9ikm8tfn981XNzHdu5neNjPGZPJ5YtJ/Je9zn23nn/v95L3cnYr9Dyn6r6ZKfJruj3dWIHFTcrJdaLoutRFy41c9oY38sl0BhFDI/8F7ygLR92fuTK3iERB9f1SvFArXAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBQEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUBBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQEFAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEBBQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAQUABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQEFBAAQUUUEABBRRQQAEFFFBAAQUUUEDx/cf/AgwANwlqThUO9DIAAAAASUVORK5CYII=);
}

#details-content ul {
    left: 0;
    margin: 0;
    padding: 0 0 12px 0;
    background-position: bottom center;
    background-repeat: no-repeat;
    background-image: url(data:image/png;base64,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);
}

#details-content ul li {
    margin: 0 15px 0 25px;
    padding-top: 1px;
    padding-bottom: 2px;
    background-position: 0 7px;
    list-style-type: square;
}

html[dir="rtl"] #details-content ul li {
    background-position: 100% 7px;
}

</style>
</head>

<body>

<div id="wrapper">

<div id="details-header">
	<h1><?=$str2?></h1>
	<p><?=$str3?></p>

</div>

<div id="details-content">

	<ul>
		<li><?=$str4?></li>
		<li><?=$str5?></li>
		<li><?=$str6?></li>
	</ul>

</div>
</div>

</body>
</html>
