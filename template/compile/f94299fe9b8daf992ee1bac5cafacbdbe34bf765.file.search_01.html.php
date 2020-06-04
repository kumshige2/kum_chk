<?php /* Smarty version Smarty-3.1.18, created on 2016-04-11 19:43:55
         compiled from ".\template\search_01.html" */ ?>
<?php /*%%SmartyHeaderCode:21939570b76abf19d65-32840380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f94299fe9b8daf992ee1bac5cafacbdbe34bf765' => 
    array (
      0 => '.\\template\\search_01.html',
      1 => 1460371425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21939570b76abf19d65-32840380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_570b76ac181693_02484843',
  'variables' => 
  array (
    'res' => 0,
    'total' => 0,
    'perpage' => 0,
    'amari' => 0,
    'index' => 0,
    'konma' => 0,
    'form' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b76ac181693_02484843')) {function content_570b76ac181693_02484843($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>FooTable - jQuery plugin for responsive HTML tables</title>
    <meta name="viewport"
          content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no"/>
    <link href="template/FooTable-2/demos/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="templaet/FooTable-2/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
    <link href="template/FooTable-2/demos/css/footable-demos.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="js/jquery-1.9.1.min.js"><\/script>');
        }
    </script>
    <script src="template/FooTable-2/js/footable.js?v=2-0-1" type="text/javascript"></script>
    <script src="template/FooTable-2/js/footable.sort.js?v=2-0-1" type="text/javascript"></script>
    <script src="template/FooTable-2/js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
    <script src="template/FooTable-2/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
    <script src="template/FooTable-2/demos/js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="template/FooTable-2/demos/js/demos.js" type="text/javascript"></script>
</head>
<body>
<div class="demo-container">
    <ul class="breadcrumb">
        <li><a href="http://fooplugins.com/plugins/footable-jquery/">FooTable</a> <span class="divider">&raquo;</span>
        </li>
        <li><a href="template/FooTable-2/demos/index.htm">Demos</a> <span class="divider">&raquo;</span></li>
        <li class="active">Showcase</li>
    </ul>
    <div class="alert">
        A showcase of what FooTable can do, including sorting, filtering and pagination!
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#demo">Demo</a></li>
        <li><a href="#setup">Setup</a></li>
        <li><a href="#docs">Docs</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="demo">
            <p>
                Search: <input id="filter" type="text"/>
                Status:
                <select class="filter-status">
                    <option></option>
                    <option value="active">Active</option>
                    <option value="disabled">Disabled</option>
                    <option value="suspended">Suspended</option>
                </select>
                <a href="#clear" class="clear-filter" title="clear filter">[clear]</a>
                <span class="row-count"></span>
            </p>
            <table class="table demo" data-filter="#filter" data-page-size="10">
	     <thead>
           <tr bgcolor="#adff2f">
		    <th>P_id</th>
		    <th>P_no</th>
		    <th>Pamph</th>
		    <th>Kigyo</th>
            <th>AD</th>
            <th>開講</th>
            <th>締</th>
		    <th>type</th>
		    <th>団体</th>
		    <th>詳細</th>
	       </tr>  
        </thead>
        <tbody>
        <?php if ($_smarty_tpl->tpl_vars['res']->value!=null) {?>
           <!----
		   <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
		   <?php $_smarty_tpl->tpl_vars['sho'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value/$_smarty_tpl->tpl_vars['perpage']->value, null, 0);?>
		   <?php $_smarty_tpl->tpl_vars['amari'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value%$_smarty_tpl->tpl_vars['perpage']->value, null, 0);?>
		   <?php $_smarty_tpl->tpl_vars['ss'] = new Smarty_variable(20, null, 0);?>
		   <?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['perpage']->value) {?>
		      <?php $_smarty_tpl->tpl_vars['pp'] = new Smarty_variable($_smarty_tpl->tpl_vars['perpage']->value, null, 0);?>
			<?php } else { ?>
               <?php $_smarty_tpl->tpl_vars['pp'] = new Smarty_variable($_smarty_tpl->tpl_vars['amari']->value, null, 0);?>			    
		   <?php }?>   ---->
		   <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) $_smarty_tpl->tpl_vars['index']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value+1300) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		     
		      <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1, null, 0);?>
            <form name="search_f2" method="post" action="index.php?module=search">       
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_id'];?>
<?php echo $_smarty_tpl->tpl_vars['konma']->value;?>
<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_no'];?>
" name="p_id" >
    <!---                     <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_id'];?>
<?php echo ",";?>
<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_no'];?>
" name="p_id" >--->
              <tr>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_no'];?>
</td>
				<td style='width:400px;'><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_nm'];?>
</td>
                <td style='width:450px;'><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kgo_nm_j'];?>
</td>
				<td style='width:120px;'><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ad_nm'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kaiko1'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sek_knr_kbn'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pmh_type'];?>
</td>
			    <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dname_skip'];?>
</td>
				
                <td><button type="submit" class="button01 icon edit"name="detail" style="width:100px; height:30px;">Edit</td>                <!--<td><input type="submit" value="*****" name="detail" ></td>-->
                 
			   </tr>
			
               <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next']>=$_smarty_tpl->tpl_vars['total']->value) {?>
			     <?php break 1?>
				<?php } else { ?>
               <?php }?>			
			 </form>
         <?php endfor; endif; ?>	
          <?php } else { ?>
        <?php }?>
		
        </tbody>
         <tfoot class="hide-if-no-paging">
                <tr>
                    <td colspan="5">
                        <div class="pagination pagination-centered"></div>
                    </td>
                </tr>
                </tfoot>
          
          <div style="color:red"> <?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value) {
$_smarty_tpl->tpl_vars["error"]->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars["error"]->key;
?>
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
          <?php } ?>
          </div>
        </table>
      </div>
      <!--- end grif12---->
      <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
件
   <!--
        
            <table class="table demo" data-filter="#filter" data-page-size="5">
                <thead>
                <tr>
                    <th data-toggle="true">
                        First Name
                    </th>
                    <th data-hide="phone">
                        Last Name
                    </th>
                    <th data-hide="phone,tablet">
                        Job Title
                    </th>
                    <th data-hide="phone,tablet" data-name="Date Of Birth">
                        DOB
                    </th>
                    <th>
                        Status
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Isidra</td>
                    <td><input value="Boudreaux" /></td>
                    <td>Traffic Court Referee</td>
                    <td data-value="78025368997">22 Jun 1972</td>
                    <td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
                </tr>
                <tr>
                    <td>Shona</td>
                    <td><input value="Woldt" /></td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td data-value="370961043292">3 Oct 1981</td>
                    <td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
                </tr>
                <tr>
                    <td>Granville</td>
                    <td><input value="Leonardo" /></td>
                    <td>Business Services Sales Representative</td>
                    <td data-value="-22133780420">19 Apr 1969</td>
                    <td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span>
                    </td>
                </tr>
                <tr>
                    <td>Easer</td>
                    <td><input value="Dragoo" /></td>
                    <td>Drywall Stripper</td>
                    <td data-value="250833505574">13 Dec 1977</td>
                    <td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
                </tr>
                <tr>
                    <td>Maple</td>
                    <td><input value="Halladay" /></td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td data-value="694116650726">30 Dec 1991</td>
                    <td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span>
                    </td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><input value="Woldt" /></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td data-value="561440464855">17 Oct 1987</td>
                    <td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
                </tr>
                <tr>
                    <td>Lorraine</td>
                    <td><input value="Mcgaughy" /></td>
                    <td>Hemodialysis Technician</td>
                    <td data-value="437400551390">11 Nov 1983</td>
                    <td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><input value="Goodlow" /></td>
                    <td>Technical Services Librarian</td>
                    <td data-value="-257733999319">1 Nov 1961</td>
                    <td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span>
                    </td>
                </tr>
                <tr>
                    <td>Judi</td>
                    <td><input value="Badgett" /></td>
                    <td>Electrical Lineworker</td>
                    <td data-value="362134712000">23 Jun 1981</td>
                    <td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
                </tr>
                <tr>
                    <td>Lauri</td>
                    <td><input value="Hyland" /></td>
                    <td>Blackjack Supervisor</td>
                    <td data-value="500874333932">15 Nov 1985</td>
                    <td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span>
                    </td>
                </tr>
                </tbody>
                <tfoot class="hide-if-no-paging">
                <tr>
                    <td colspan="5">
                        <div class="pagination pagination-centered"></div>
                    </td>
                </tr>
                </tfoot>
            </table>--->
        </div>
        <div class="tab-pane" id="setup">
            <p>
                Check out the <a href="FooTable-2/demos/getting-started.htm#setup">getting started</a> demo to see how to setup FooTable.
            </p>
            <h4>Include FooTable Add-Ons</h4>

            <p>You simply need to include the add-on's javascript file to include the add-on's functionality:</p>
            <pre>&lt;script src=&quot;path_to_your_js/footable.your-add-on.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;</pre>
        </div>
        <div class="tab-pane" id="docs">
            <h4>Sorting</h4>

            <p>Check out the <a href="template/FooTable-2/demos/sorting.htm">sorting demo</a> to see more documentation.</p>
            <h4>Filtering</h4>

            <p>Check out the <a href="template/FooTable-2/demos/filtering.htm">filtering demo</a> to see more documentation.</p>
            <h4>Paging</h4>

            <p>Check out the <a href="template/FooTable-2/demos/paging.htm">pagination demo</a> to see more documentation.</p>
            <h4>Bookmarkable</h4>

            <p>Adds state information to the URI hash. Check out the <a href="template/FooTable-2/demos/bookmarkable.htm">bookmarkable demo</a> to see more documentation.</p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
		   $('table').footable({ bookmarkable: { enabled: true }}).bind({
            'footable_filtering': function (e) {
                var selected = $('.filter-status').find(':selected').text();
                if (selected && selected.length > 0) {
                    e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                    e.clear = !e.filter;
                }
            },
            'footable_filtered': function() {
                var count = $('table.demo tbody tr:not(.footable-filtered)').length;
                $('.row-count').html(count + ' rows found');
            }
        });

        $('.clear-filter').click(function (e) {
            e.preventDefault();
            $('.filter-status').val('');
            $('table.demo').trigger('footable_clear_filter');
            $('.row-count').html('');
        });

        $('.filter-status').change(function (e) {
            e.preventDefault();
            $('table.demo').data('footable-filter').filter( $('#filter').val() );
        });
    });
</script>
</body>
</html>
<?php }} ?>
