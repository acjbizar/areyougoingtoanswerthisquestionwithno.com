<?php

$a = get_a();
$a1 = strtolower(trim($a));
$a2 = htmlspecialchars(rawurldecode($a));
$description = 'A seemingly simple question, with at least two options provided. Inspired by L’indovinello più difficile del mondo (The Hardest Logic Puzzle Ever). Answer as many times as you want.';
$title = 'Are you going to answer this question with “no”?';
$url = 'https://areyougoingtoanswerthisquestionwithno.com/';
$image = 'https://cdn.areyougoingtoanswerthisquestionwithno.com/icon-256x256.png';
//$image = 'http://deidee.com/icon?size=12';
// abbr: aygtatqwn
// RU->2A=Q+Y/N
$config = parse_ini_file('../config.ini');

if(is_local())
{
    $db = new mysqli('localhost', 'root', NULL, 'mu');
}
else
{
    $db = new mysqli('db.acjs.net', $config['database_username'], $config['database_password'], 'acjs');
}

if(!empty($a))
{
    $db->query('
        INSERT INTO `answer2` (`created`, `a`, `server`)
        VALUES (' . time() . ', \'' . $db->real_escape_string($a) . '\', \'' . $db->real_escape_string(serialize($_SERVER)) . '\');');
}

$r1 = mt_rand(16, 239);
$g1 = mt_rand(16, 239);
$b1 = mt_rand(16, 239);
$r0 = $r1 - 16;
$g0 = $g1 - 16;
$b0 = $b1 - 16;
$r2 = $r1 + 16;
$g2 = $g1 + 16;
$b2 = $b1 + 16;

$r = '<!doctype html>';
$r .= '<html dir="ltr" itemscope itemtype="http://schema.org/WebPage" lang="en">';
$r .= '<head>';
$r .= '<meta charset=utf-8>';
$r .= '<meta property="fb:admins" content="509248955">';
$r .= '<meta name="apple-mobile-web-app-capable" content="yes">';
$r .= '<meta name="description" property="og:description" content="' . $description . '">';
$r .= '<meta itemprop="image" content="' . $image . '">';
$r .= '<meta property="og:image" content="' . $image . '">';
$r .= '<meta property="og:title" content="' . $title . '">';
$r .= '<meta property="og:type" content="website">';
$r .= '<meta property="og:url" content="' . $url . '">';
$r .= '<title>' . $title . '</title>';
$r .= '<link rel="apple-touch-icon-precomposed" href="' . $image . '">';
$r .= '<link rel="author" href="https://alexanderchristiaanjacob.com/">';
$r .= '<link rel="canonical" href="' . $url . '">';
$r .= '<link rel="icon" href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgICAAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIiIiIiIiIiIiIREREREREiIAAAAAAAASIgEiIiIiIBIiASIiIiIgEiIBIiIiIiASIgEiIiIiIBIiASIiIiIgEiIBIiIiIiASIgEiIiIiIBIiASIiIiIgEiIBIiIiIiASIgEREREREBIiAAAAAAAAIiIiIiIiIiIiIiIiIiIiIiIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA">';
$r .= '<link rel="shortlink" href="http://goo.gl/tGdev">';
$r .= '<link rel="publisher" href="https://plus.google.com/b/110328811593401257926/">';
$r .= '<style>';
$r .= '*{border:0;margin:0;outline:0;padding:0;text-decoration:none}';
$r .= 'a{color:#000;display:block;padding:24px;text-shadow:.0625em .0625em 0 rgb(' . $r0 . ', ' . $g0 . ', ' . $b0 . ')}';
$r .= 'h1{font-size:120px;font-size:15vmin;font-weight:normal;line-height:.8;padding:.2em;text-align:center}';
$r .= 'html{background:#fff;font:normal 16px/1.5 \'Helvetica Neue\',Helvetica,Arial,sans-serif}';
$r .= 'table{border-collapse:collapse;border-spacing:0;width:100%}';
$r .= 'td{font-size:144px;font-size:12vw;font-weight:bold;line-height:1;padding:.2em;text-align:center}';
$r .= ':root{text-rendering:optimizelegibility}';
$r .= 'a:hover{background:#000;color:#fff;text-shadow:.0625em .0625em rgb(' . $r2 . ', ' . $g2 . ', ' . $b2 . ')}';
$r .= '.active{background:#000}';
$r .= '.active a{color:#fff;text-shadow:.0625em .0625em rgb(' . $r2 . ', ' . $g2 . ', ' . $b2 . ')}';
//$r .= '.active a:hover{background:#fff;color:#000}';
$r .= '.fb-like{position:absolute !important;right:24px;top:24px}';
$r .= '</style>';
$r .= <<<HTML
<script>
/*<![CDATA[*/
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6227584-37']);
  _gaq.push(['_setDomainName', 'areyougoingtoanswerthisquestionwithno.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
/*]]>*/
</script>
HTML;
$r .= '</head>';
$r .= '<body>';
$r .= <<<HTML
<div id="fb-root"></div>
<script>/*<![CDATA[*/(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=122924311087219";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));/*]]>*/</script>
HTML;
$r .= '<h1' . (empty($a) ? ' class="active"' : '') . '><a href="./">' . $title . '</a></h1>';
$r .= '<div class="fb-like" data-href="http://areyougoingtoanswerthisquestionwithno.com/" data-send="false" data-layout="button_count" data-width="44" data-show-faces="false" data-font="arial"></div>';
$r .= '<table><tbody><tr>';
$r .= '<td' . ($a1 === 'yes' ? ' class="active"' : '') . '><a href="yes">Yes</a></td>';
$r .= '<td' . ($a1 === 'no' ? ' class="active"' : '') . '><a href="no">No</a></td>';
if(!empty($a1) AND $a1 !== 'yes' AND $a1 !== 'no') $r .= '<td class="active"><a href="' . $a1 . '">' . $a2 . '</a></td>';
$r .= '</tr></tbody></table>';
$r .= '</body>';
$r .= '</html>';

header('Content-Type: text/html; charset=utf-8');

echo $r;

function get_a()
{
    if(isset($_SERVER['REQUEST_URI']))
    {
        $a = substr($_SERVER['REQUEST_URI'], (is_local() ? 43 : 1));
        return $a;
    }

    return FALSE;
}

function get_a2()
{
    if(isset($_SERVER['REQUEST_URI']))
    {
        $a = substr($_SERVER['REQUEST_URI'], (is_local() ? 43 : 1));
        return htmlspecialchars(rawurldecode($a));
    }

    return FALSE;
}

function is_local()
{
    return (isset($_SERVER['SERVER_ADDR']) AND $_SERVER['SERVER_ADDR'] === '127.0.0.1');
}
