<?php /* Smarty version Smarty-3.1.18, created on 2014-12-24 17:08:24
         compiled from ".\template\address_setting_gridster01.html" */ ?>
<?php /*%%SmartyHeaderCode:27510549a7478b64454-61989948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61158012bf963cbdcc0bfb7263b6b94c7388af42' => 
    array (
      0 => '.\\template\\address_setting_gridster01.html',
      1 => 1419408448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27510549a7478b64454-61989948',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_549a7478bd9751_06242079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549a7478bd9751_06242079')) {function content_549a7478bd9751_06242079($_smarty_tpl) {?><html>
<head>
  <title>Demo &raquo; Resize &raquo; gridster.js</title>
  <link rel="stylesheet" type="text/css" href="template/gridster/dist/jquery.gridster.css">
  <link rel="stylesheet" type="text/css" href="template/gridster/dist/demo.css">
  <script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<!---
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  --->
<script type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="template/customselect/js/jquery.customSelect.js"></script>
</head>

<body>

  <h1>Resize</h1>

  <p>Grab the right or bottom border and drag to the desired width or height.</p>

  <div class="controls">
      <button class="js-resize-random">Resize random widget</button>
  </div>

  <div class="gridster">
    <ul>
      <li data-row="1" data-col="1" data-sizex="2" data-sizey="2">0</li>
      <li data-row="1" data-col="3" data-sizex="1" data-sizey="2">1</li>
      <li data-row="1" data-col="4" data-sizex="1" data-sizey="1">2</li>
      <li data-row="3" data-col="2" data-sizex="3" data-sizey="1">3</li>
      <li data-row="4" data-col="1" data-sizex="1" data-sizey="1">4</li>
      <li data-row="3" data-col="1" data-sizex="1" data-sizey="1">5</li>
      <li data-row="4" data-col="2" data-sizex="1" data-sizey="1">6</li>
      <li data-row="5" data-col="2" data-sizex="1" data-sizey="1">7</li>
      <li data-row="4" data-col="4" data-sizex="1" data-sizey="1">8</li>
      <li data-row="1" data-col="5" data-sizex="1" data-sizey="3">9</li>
    </ul>
  </div>
<!--
    <script type="text/javascript" src="template/grister/assets/jquery.js"></script>--->
    <script src="template/gridster/dist/jquery.gridster.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    </script>

    <script type="text/javascript">
      var gridster;

      $(function(){

        gridster = $(".gridster ul").gridster({
          widget_base_dimensions: [100, 55],
          widget_margins: [5, 5],
          helper: 'clone',
          resize: {
            enabled: true
          }
        }).data('gridster');


        $('.js-resize-random').on('click', function() {
            gridster.resize_widget(gridster.$widgets.eq(getRandomInt(0, 9)),
                getRandomInt(1, 4), getRandomInt(1, 4))
        });

      });
    </script>
</body>
</html><?php }} ?>
