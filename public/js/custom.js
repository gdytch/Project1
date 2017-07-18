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
		case '/admin/list/students': 
			$('#list_students').addClass('active')
			break;
		case '/admin/list/teachers': 
			$('#list_teachers').addClass('active')
			break;
		case '/admin': 
			$('#overview').addClass('active')
			break;

	}
		
})