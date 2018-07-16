$(document).ready(function(){
	$("#UploadIDModel").on("show.bs.modal", function (e) {
	  $(this).find(".modal-body").html('<iframe src="/admin/upload/model" id="uploadData" name="uploadData"></iframe>');
	  $("#inputGroupFile01Upload").val("");
	  $("[for=inputGroupFile01Upload]").html("Select File");
	  var sTarget = $(e.relatedTarget).attr("data-target-input");
	  var sValue = "";
	  $(".modal-footer").attr("data-starget",sTarget);
	  
	});
	$("#UploadIDModel").on("hidden.bs.modal", function (e) {
		var sTarget = $(".modal-footer").attr("data-starget");
		var sValue = $(".modal-footer").attr("data-svalue");
		$(sTarget).val(sValue);

		$(".modal-footer").attr("data-starget","");
		$(".modal-footer").attr("data-svalue","");
	});
	$("#inputGroupFile01Upload").on("input", function(){
		$(this).parent().find("label").html(this.value);
	});
	$("#FileUpLoad").submit(function(){
		//$("#inputGroupFile01Upload").val("");
	  	//$("[for=inputGroupFile01Upload]").html("Select File");
	});
});