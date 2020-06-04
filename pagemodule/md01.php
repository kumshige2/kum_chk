<?php
set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER["DOCUMENT_ROOT"].'/Classes/');
include_once 'Parsedown/parsedown.php';
$parser = new Parsedown();
$content = $parser->text(file_get_contents('Data_guide.md'));
//$content = $parser->text(file_get_contents(__DIR__ . '/README.md'));
?>
<html lang="ja-jp">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>HOME</title>
    
    <link href="../template/markdown-styles-master/layouts/github/assets/css/github-markdown.css" rel="stylesheet" />
    <link href="../template/markdown-styles-master/layouts/github/assets/css/hljs-github.min.css" rel="stylesheet" />
    <link href="../template/github-markdown-css-gh-pages/github-markdown.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

  </head>
  <body>
    <div class="markdown-body markdown"><?php echo $content; ?></div>
  </body>
</html>