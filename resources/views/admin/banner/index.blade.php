@extends('layouts.backend.app')
@section('title', 'Dashboard')
@push('css')
<!-- JQuery Nestable Css -->
    <link href="{{ asset('assets/backend/plugins/nestable/jquery-nestable.css') }}" rel="stylesheet" />

<style>

.right {
    float: right;
}

.dd-handle-custom {
	height: 100%;
	padding: 1%;
	position: relative;
}

.item-img-container {
	display: block;
}

.item-action-container {
	margin-bottom: 5px;
	position: relative;
	min-height: 20px;
}

.item-edit-container {
	padding-left: 30px;
	width: 80%;
	float: left;
	position: inline-block;
	box-sizing: border-box;
}

.item-delete-container {
	padding-left: 30px;
	width: 20%;
	float: right;
	position: inline-block;
	box-sizing: border-box;
}
</style>
@endpush
@section('content')
<div class="container-fluid">
	<div class="row clearfix">
        <div class = "col-lg-3 pull-left">&nbsp; </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	        <div class="block-header">
                <h2>
                    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary waves-effect pull-right"><i class="material-icons">add</i><span>Add New Page</span></a>
                </h2>
	        </div>
	    </div>    
		<div class = "col-lg-3 pull-left">&nbsp; </div>
	</div>
            
            <!-- Draggable Handles -->
            <div class="row clearfix" style="margin-top:50px;">
            	<div class = "col-lg-3 pull-left">&nbsp; </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">
                                Manage Banner
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="clearfix m-b-20">
                                <div class="dd">
                                    <ol class="dd-list">
						                <li class="dd-item" data-id="1">
						                    <div class="dd-handle dd-handle-custom">
						                    	<div class="item-img-container">
						                    		<img src="http://localhost:8080/venus_star_construction/uploads/banner/slide_1437986307.jpg" alt="banner" width="100%" height="200" class="img-responsive img-thumbnail" />
						                    	</div>
						                    	
						                    	<div class="item-action-container">
						                    		<div class="item-edit-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit" style="width:16px; height:16px; color:#931b59;"></span></a></div>
						                    		<div class="item-delete-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><img src="http://localhost:8080/venus_star_construction/resources/images/delete.png"></a></div>
						                    	</div>
						                    </div>
						                </li>
                                        <li class="dd-item" data-id="2">
                                           <div class="dd-handle dd-handle-custom">
                                                               	<div class="item-img-container">
                                                               		<img src="http://localhost:8080/venus_star_construction/uploads/banner/slide_1439383999.jpg" alt="banner" width="100%" height="200" class="img-responsive img-thumbnail" />
                                                               	</div>
                                                               	
                                                               	<div class="item-action-container">
                                                               		<div class="item-edit-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit" style="width:16px; height:16px; color:#931b59;"></span></a></div>
                                                               		<div class="item-delete-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><img src="http://localhost:8080/venus_star_construction/resources/images/delete.png"></a></div>
                                                               	</div>
                                                               </div>
                                            </li>

                                            <li class="dd-item" data-id="3">
						                    <div class="dd-handle dd-handle-custom">
						                    	<div class="item-img-container">
						                    		<img src="http://localhost:8080/venus_star_construction/uploads/banner/slide_1439384041.jpg" alt="banner" width="100%" height="200" class="img-responsive img-thumbnail" />
						                    	</div>
						                    	
						                    	<div class="item-action-container">
						                    		<div class="item-edit-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit" style="width:16px; height:16px; color:#931b59;"></span></a></div>
						                    		<div class="item-delete-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><img src="http://localhost:8080/venus_star_construction/resources/images/delete.png"></a></div>
						                    	</div>
						                    </div>
						                </li>

						                <li class="dd-item" data-id="4">
						                    <div class="dd-handle dd-handle-custom">
						                    	<div class="item-img-container">
						                    		<img src="http://localhost:8080/venus_star_construction/uploads/banner/slide_1437986307.jpg" alt="banner" width="100%" height="200" class="img-responsive img-thumbnail" />
						                    	</div>
						                    	
						                    	<div class="item-action-container">
						                    		<div class="item-edit-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit" style="width:16px; height:16px; color:#931b59;"></span></a></div>
						                    		<div class="item-delete-container"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><img src="http://localhost:8080/venus_star_construction/resources/images/delete.png"></a></div>
						                    	</div>
						                    </div>
						                </li>
                                            
                                        
                                        
                                    </ol>
                                </div>
                            </div>
                            <b>Output JSON</b>
                            <textarea name="second_field" cols="30" rows="3" class="form-control no-resize" type="hidden" readonly>Json Data will come here</textarea>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-3 pull-left">&nbsp; </div>
            </div>
            <!-- #END# Draggable Handles -->
          
        </div>        
@endsection

@push('js')
	<!-- Jquery Nestable -->
	<script src="{{ asset('assets/backend/plugins/nestable/jquery.nestable.js') }}"></script>

	<!-- Custom Js -->
	<script src="{{ asset('assets/backend/js/pages/ui/sortable-nestable.js') }}"></script>
 
    <!-- SweetAlert Js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script type="text/javascript">
        function deletePage(id) {
            const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {

    //here files get deleted
    event.preventDefault();
    document.getElementById('delete-form-'+id).submit();

  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})

 }

    </script>
@endpush