<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
<div class="step2"><?php echo $this->_var['lang']['shop_basic_second']; ?></div>
<form enctype="multipart/form-data" action="index.php?act=third" name="theForm" method="post" onsubmit="return validator()" >
  <table cellspacing="1" cellpadding="3" width="100%">
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_category']; ?>:</td>
      <td><input type="text" name="good_category" /></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_name']; ?>:</td>
      <td><input type="text" name="good_name" /></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_number']; ?>:</td>
      <td><input type="text" name="good_number" /></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_brand']; ?>:</td>
      <td><input type="text" name="good_brand" /></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_price']; ?>:</td>
      <td><input type="text" name="good_price" /></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_intro']; ?>:</td>
      <td>
        <input type="checkbox" name="is_best" value="1" checked /><?php echo $this->_var['lang']['is_best']; ?> 
        <input type="checkbox" name="is_new" value="1" checked /><?php echo $this->_var['lang']['is_new']; ?>
        <input type="checkbox" name="is_hot" value="1" checked /><?php echo $this->_var['lang']['is_hot']; ?>
      </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_brief']; ?>:</td>
      <td><textarea name="good_brief" cols="40" rows="3"></textarea></td></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['good_image']; ?>:</td>
      <td><input type="file" name="goods_img" /></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" value=<?php echo $this->_var['lang']['next_step']; ?> class="button" />
        <input type="button" value=<?php echo $this->_var['lang']['skip']; ?> onclick="javascript:window.location.href='index.php?act=main'" class="button" />
      </td>
    </tr>
  </table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>
<script type="Text/Javascript" language="JavaScript">
<!--

onload = function()
{
  /* 检查订单 */
  startCheckOrder();
}

function validator()
{
  var validator = new Validator("theForm");
  validator.required('good_category', good_category_not_null);
  validator.required('good_name', good_name_not_null);
  validator.isNumber('good_number', good_number_not_number, false);
  validator.isNumber('good_price', good_price_not_number, false);
  
  return validator.passed();
}



//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>