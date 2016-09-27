<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create slider</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createslidersubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="order">order</label>
<input type="text" id="order" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
<div class="row">
  			<div class="file-field input-field col m6 s12">
  				<div class="btn blue darken-4">
  					<span>Image</span>
  					<input name="image" type="file" multiple>
  				</div>
  				<div class="file-path-wrapper">
  					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image');?>">
  				</div>
  			</div>
  			<span style=" display: block;
  		padding-top: 30px;">1400 x 1040 px</span>
</div>
<div class="row">
  			<div class="file-field input-field col m6 s12">
  				<div class="btn blue darken-4">
  					<span>Mobile Image</span>
  					<input name="mobile_image" type="file" multiple>
  				</div>
  				<div class="file-path-wrapper">
  					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('mobile_image');?>">
  				</div>
  			</div>
  			<span style=" display: block;
  		padding-top: 30px;">340px X 435px</span>
</div>
<div class="row">
<div class="input-field col s6">
<label for="url">url</label>
<input type="text" id="url" name="url" value='<?php echo set_value('url');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s2">
<?php echo form_dropdown("status",$status,set_value('status'));?>
</div>
</div>

<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewslider"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>