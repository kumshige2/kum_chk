<?php /* Smarty version Smarty-3.1.18, created on 2015-04-01 16:39:26
         compiled from ".\template\address_setting_niceforms.html" */ ?>
<?php /*%%SmartyHeaderCode:13809551b9bd6d22767-35925088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e5922ee80143ba558b5260ef83ff7dd3b7fae82' => 
    array (
      0 => '.\\template\\address_setting_niceforms.html',
      1 => 1427873959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13809551b9bd6d22767-35925088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_551b9bd6d51575_08074774',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551b9bd6d51575_08074774')) {function content_551b9bd6d51575_08074774($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Niceforms</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="template/niceforms/niceforms-default01.css" />
</head>

<body><div id="container">
<form action="vars.php" method="post" class="niceform">
	<fieldset>
    	<legend>Personal Info</legend>
        <dl>
        	<dt><label for="email">Email Address:</label></dt>
            <dd><input type="text" name="email" id="email" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
        	<dt><label for="password">Password:</label></dt>
            <dd><input type="password" name="password" id="password" size="32" maxlength="32" /></dd>
        </dl>
        <dl>
        	<dt><label for="gender">Gender:</label></dt>
            <dd>
            	<select size="1" name="gender" id="gender">
                    <option value="Guy">Guy</option>
                    <option value="Girl">Girl</option>
                    <option value="Dude">Dude</option>
                    <option value="Chic">Chic</option>
                    <option value="Gentleman">Gentleman</option>
                    <option value="Lady">Lady</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Don't Ask">Don't Ask</option>
            	</select>
            </dd>
        </dl>
        <dl>
        	<dt><label for="dobMonth">Date of Birth:</label></dt>
            <dd>
            	<select size="1" name="dobMonth" id="dobMonth">
                	<option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
                <select size="1" name="dobDay" id="dobDay">
                	<option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select size="1" name="dobYear" id="dobYear">
                	<option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
					<option value="1979">1979</option>
					<option value="1978">1978</option>
					<option value="1977">1977</option>
					<option value="1976">1976</option>
					<option value="1975">1975</option>
					<option value="1974">1974</option>
					<option value="1973">1973</option>
					<option value="1972">1972</option>
					<option value="1971">1971</option>
					<option value="1970">1970</option>
					<option value="1969">1969</option>
					<option value="1968">1968</option>
					<option value="1967">1967</option>
					<option value="1966">1966</option>
					<option value="1965">1965</option>
					<option value="1964">1964</option>
					<option value="1963">1963</option>
					<option value="1962">1962</option>
					<option value="1961">1961</option>
					<option value="1960">1960</option>
					<option value="1959">1959</option>
					<option value="1958">1958</option>
					<option value="1957">1957</option>
					<option value="1956">1956</option>
					<option value="1955">1955</option>
					<option value="1954">1954</option>
					<option value="1953">1953</option>
					<option value="1952">1952</option>
					<option value="1951">1951</option>
					<option value="1950">1950</option>
                </select>
            </dd>
        </dl>
    </fieldset>
    <fieldset>
    	<legend>Preferences</legend>
        <dl>
        	<dt><label for="color">Favorite Color:</label></dt>
            <dd>
            	<input type="radio" name="color" id="colorBlue" value="Blue" /><label for="colorBlue" class="opt">Blue</label>
                <input type="radio" name="color" id="colorRed" value="Red" /><label for="colorRed" class="opt">Red</label>
                <input type="radio" name="color" id="colorGreen" value="Green" /><label for="colorGreen" class="opt">Green</label>
            </dd>
        </dl>
        <dl>
        	<dt><label for="interests">Interests:</label></dt>
            <dd>
                <input type="checkbox" name="interests[]" id="interestsNews" value="News" /><label for="interestsNews" class="opt">News</label>
                <input type="checkbox" name="interests[]" id="interestsSports" value="Sports" /><label for="interestsSports" class="opt">Sports</label>
                <input type="checkbox" name="interests[]" id="interestsEntertainment" value="Entertainment" /><label for="interestsEntertainment" class="opt">Entertainment</label>
                <input type="checkbox" name="interests[]" id="interestsCars" value="Cars" /><label for="interestsCars" class="opt">Automotive</label>
                <input type="checkbox" name="interests[]" id="interestsTechnology" value="Technology" /><label for="interestsTechnology" class="opt">Technology</label>
            </dd>
        </dl>
        <dl>
        	<dt><label for="languages">Languages:</label></dt>
            <dd>
            	<select size="4" name="languages[]" id="languages" multiple="multiple">
                	<option value="English">English</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Italian">Italian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Russian">Russian</option>
                    <option value="Esperanto">Esperanto</option>
                </select>
            </dd>
        </dl>
    </fieldset>
    <fieldset>
    	<legend>Comments</legend>
        <dl>
        	<dt><label for="comments">Message:</label></dt>
            <dd><textarea name="comments" id="comments" rows="5" cols="60"></textarea></dd>
        </dl>
        <dl>
        	<dt><label for="upload">Upload a File:</label></dt>
            <dd><input type="file" name="upload" id="upload" /></dd>
        </dl>
        <dl>
        	<dt><label for="test">Sample Button:</label></dt>
            <dd><button type="button" name="test" id="test">I Do Nothing</button></dd>
        </dl>
    </fieldset>
    <fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="Submit" />
    </fieldset>
</form>
<p id="footer">Niceforms v.2.0<br />&copy;Lucian Slatineanu - <a href="http://www.emblematiq.com/">Emblematiq</a><br />Last update: Nov 13 2008</p>
</div></body>
</html>
<?php }} ?>
