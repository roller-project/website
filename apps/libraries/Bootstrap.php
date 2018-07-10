<?php
class Bootstrap{


	public function getStyle($key="",$lang=false){
		$c = "btn-secondary";
		$l = "Link";
		if($key == "delete"){
			$c = "btn-danger";
			$l = "Delete";
		}
		if($key == "create"){
			$c = "btn-success";
			$l = "Create";
		}

		if($key == "edit"){
			$c = "btn-primary";
			$l = "Edit";
		}

		if($key == "save"){
			$c = "btn-primary";
			$l = "Save";
		}

		if($key == "back"){
			$c = "btn-secondary";
			$l = "Back";
		}


		return ($lang ? $l : $c);
	}
	public function link($key="", $url=""){
		return '<a class="btn '.$this->getStyle($key).'" href="'.$url.'">'.$this->getStyle($key, true).'</a>';
	}

	public function button($key="", $type="button"){
		return '<button type="'.$type.'" class="btn '.$this->getStyle($key).'">'.$this->getStyle($key,true).'</button>';
	}


	public function model($title="Model Title", $size="", $content="", $hidebutton = false){
		return '<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$title.'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        '.$content.'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>';
	}

	public function upload(){
		return '
			<div class="modal fullscreen fade" id="UploadIDModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Model Title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div>Loadding data....</div>
			      </div>
			      <div class="modal-footer" data-starget="" data-svalue="">
			      	'.form_open_multipart(admin_url("upload/validate_upload"),["target" => "uploadData", "id" => "FileUpLoad"]).'
			      	

			      	<div class="input-group mb-3">
					  
					  <div class="custom-file">
					    <input type="file" name="uploadfile" class="custom-file-input" id="inputGroupFile01Upload">
					    <label class="custom-file-label" for="inputGroupFile01Upload">Choose file</label>
					  </div>

					  <div class="input-group-prepend">
					    <button type="submit" class="btn btn-primary">Upload</button>
					  </div>

					  <div class="input-group-prepend">
					    <button type="button" class="btn btn-secondary btnUploadFileClose" data-dismiss="modal">Close</button>
					  </div>

					</div>

			      	
			        
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		
		';
	}
}