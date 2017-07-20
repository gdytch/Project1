//custom app js

 function collapse_toggle1() {
    if ($('#add-student-batchform').hasClass('in')) {
        $('#add-student-batchform').collapse('hide');
    }else if ($('#add-student-form').hasClass('in')) {
        $('#add-student-form').collapse('hide');
    }else if ($('#add-teacher-form').hasClass('in')) {
        $('#add-teacher-form').collapse('hide');
    }else if ($('#add-teacher-batchform').hasClass('in')) {
        $('#add-teacher-batchform').collapse('hide');
    }
}

$(window).ready(function(){
	switch(window.location.pathname){
		case '/admin/student':
			$('#list_students').addClass('active');
            if($('.alert').hasClass('alert-danger')){
                $('#add-student-form').addClass('in')
            }
			break;
		case '/admin/teacher':
			$('#list_teachers').addClass('active');
            if($('.alert').hasClass('alert-danger')){
                $('#add-teacher-form').addClass('in')
            }
			break;
		case '/admin':
			$('#overview').addClass('active')
			break;

	}


})
