<?php
class Bootstrap{


	public function getStyle($key="",$lang=false,$size=""){
		$c = "btn-secondary";
		$l = "Link";
		if($key == "delete"){
			$c = "btn-danger";
			$l = "<i class=\"ti-trash\"></i> Delete";
		}
		if($key == "create" || $key == "status"){
			$c = "btn-success";
			$l = "<i class=\"ti-plus\"></i> Create";
		}


		if($key == "status"){
			$c = "btn-success";
			$l = "<i class=\"ti-status\"></i> Status";
		}

		if($key == "edit"){
			$c = "btn-primary";
			$l = "<i class=\"ti-pencil-alt\"></i> Edit";
		}

		if($key == "search"){
			$c = "btn-primary";
			$l = "<i class=\"ti-search\"></i> Search";
		}

		if($key == "save"){
			$c = "btn-primary";
			$l = "<i class=\"ti-save\"></i> Save";
		}

		if($key == "back"){
			$c = "btn-secondary";
			$l = "<i class=\"ti-back\"></i> Back";
		}

		$ht = ($lang ? $l : $c);
		if((strpos($size,"outline") || $size == "outline") && !$lang) {
			$ht = str_replace('btn-', 'btn-outline-', $ht);
		}
		return $ht;
	}
	public function link($key="", $url="", $size=""){
		return '<a class="btn '.$size.' btn-capsule px-4 '.$this->getStyle($key,false,$size).'" href="'.$url.'">'.$this->getStyle($key, true).'</a>';
	}

	public function button($key="", $type="button",$size=""){
		return '<button type="'.$type.'" class="btn '.$size.' btn-capsule px-4 '.$this->getStyle($key,false,$size).'">'.$this->getStyle($key,true).'</button>';
	}


	public function svn_bottom_gline(){
		return '
		<figure class="position-absolute-bottom-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewBox="20 -20 300 100" style="margin-bottom: -8px;" xml:space="preserve">
          <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
      c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"></path>
          <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
      c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"></path>
          <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
      H42.401L43.415,98.342z"></path>
          <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
      c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"></path>
        </svg>
      </figure>';
	}

	public function svn_bottom_kline(){
		return '<figure class="w-100 position-absolute-bottom-0 z-index-minus-1">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve">
        <polygon class="u-fill-primary" opacity=".125" points="0,323 1920,323 1920,0 "></polygon>
        <polygon class="u-fill-primary" opacity=".085" points="-0.5,322.5 -0.5,131.5 658.3,212.3 "></polygon>
      </svg>
    </figure>';
	}


	public function snv_top_kline(){
		return '<figure class="position-absolute-top-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="140px" viewBox="0 0 1920 140" style="margin-top: -2px; enable-background:new 0 0 1920 140;" xml:space="preserve">
          <path class="u-fill-primary" opacity="0.3" d="M1607,81.8c0,0-274.6,48.2-560.1,19.9c-494.8-49.2-725.1,2.7-938.5,6.6C-203,114-339.2,85.6-339.2,85.6V9.4l1946.2,0V81.8z"></path>
          <path class="u-fill-primary" opacity="0.3" d="M2033.1,80.8c0,0-274.6,48.2-560.1,19.9c-494.8-49.2-725.1,2.7-938.5,6.6C223.1,113,86.9,84.6,86.9,84.6V8.5h1946.2V80.8z"></path>
          <path class="u-fill-white" opacity="0" d="M1526.9,5.6c0,0-309,96.5-698.5,96.5C406.8,102.1,201.4,7,201.4,7V1.8l1332,0L1526.9,5.6z"></path>
          <path class="u-fill-white" d="M2026.7,55.1c0,0-358.4,63.9-770,39c-523.7-31.8-712.6-8.6-938.5,6.6C-21.5,123.7-347.7,49-347.7,49l-8.5-51.3l2380.8,4.1L2026.7,55.1z"></path>
        </svg>
      </figure>';
	}


	public function svgList(){
		$path = glob(FCPATH."resource/svg/*.svg");
		$arv = "";
		$arvs = [];
		foreach ($path as $key => $value) {
			$keys = basename($value);
			$arvs[] = $keys;
		}

		return $arvs;

	}


	public function svgLoad($path="", $url=""){
		$file = FCPATH."resource/svg/{$path}";
		if(file_exists($file)){
			ob_start();
			include $file;
			$svg = ob_get_clean();
			$svg = str_replace('{url}', $url, $svg);
			return $svg;
		}
		return "";
	}


	public function editer($name=""){
		$html = '<script src="'.resource_url("ckedit/ckeditor.js").'"></script>
		<script>
		    ClassicEditor
		        .create( document.querySelector( "'.$name.'" ) )
		        .then(function(){
		        	$(".ck-editor__editable").css({"height" : $("'.$name.'").height()});
		        	})
		        .catch( error => {
		            console.error( error );
		        } );
		</script>
		';
		return $html;
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