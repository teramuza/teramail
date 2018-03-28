<?php 
function buka_form(){
	echo '<form class="form-horizontal row-fluid" id="form" method="post">';
}
function buat_textbox($label, $nama, $placeholder, $value, $status){
						echo '<div class="control-group">
											<label class="control-label" for="basicinput">'.$label.'</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="'.$placeholder.'" name="'.$nama.'" class="span8" value="'.$value.'" '.$status.'>
											</div>
										</div>';
}
function buat_passbox($label, $nama, $placeholder, $status){
						echo '<div class="control-group">
											<label class="control-label" for="basicinput">'.$label.'</label>
											<div class="controls">
												<input type="password" id="basicinput '.$nama.'" placeholder="'.$placeholder.'" name="'.$nama.'" class="span8" '.$status.'>
											</div>
										</div>';
}
function buat_numbox($label, $nama, $placeholder, $value, $status){
						echo '<div class="control-group">
											<label class="control-label" for="basicinput">'.$label.'</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="'.$placeholder.'" name="'.$nama.'" class="span8" value="'.$value.'" '.$status.' onkeypress="return event.charCode >= 48 && event.charCode <= 57">
											</div>
										</div>';
}
function buat_datebox($label, $nama, $value, $status){
						echo '<div class="control-group">
											<label class="control-label" for="basicinput">'.$label.'</label>
											<div class="controls">
												<input type="date" id="basicinput" name="'.$nama.'" class="span8" value="'.$value.'" '.$status.'>
											</div>
										</div>';
}
function buat_combobox($label, $nama, $list, $nilai){
						echo '<div class="control-group">
								<label class="control-label">'.$label.'</label>
								<div class="controls">
									<select tabindex="1" name="'.$nama.'" class="span8">';
									
									foreach($list as $ls){
										$select = $ls['val'] ==$nilai ? 'selected' : '';
										echo '<option value="'.$ls['val'].'" '.$select.'>'.$ls['cap'].'</option>';
									}
								
								echo '</select>
								</div>
							</div>';
}
function buat_textarea($label, $nama, $value){
						echo '<div class="control-group">
								<label class="control-label" for="basicinput">'.$label.'</label>
								<div class="controls">
									<textarea name="'.$nama.'" class="span8" rows="5">'.$value.'</textarea>
								</div>
							</div>';
}
function tutup_form($label,$back){
						echo '<div class="control-group">
								<div class="controls">
									<input name="submit" type="submit" class="btn btn-primary" value="'.$label.'"/> 
									<a href="'.$back.'" class="btn btn-module"><i class="icon-arrow-left"></i> Kembali</a>
								</div>
							</div>
						</form>';
}
?>